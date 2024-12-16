<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

// TODO: transactions should be in separate controller
class MemberAuthController extends Controller
{
    public function showRegisterForm()
    {
        if (Auth::guard('members')->check()) {
            return redirect()->route('member.dashboard');
        }
        return view('member.register');
    }

    public function dashboard()
    {
        $member = Auth::guard('members')->user();
        $transactions = $member->transactions()->get();
        return view('member.dashboard', compact('member', 'transactions'));
    }

    public function showMembers()
    {
        $members = Member::all();
        return view('member.index', compact('members'));
    }

    public function register(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255|min:2',
                'email' => [
                    'required',
                    'email:rfc,dns',
                    'unique:members,email'
                ],
                'password' => [
                    'required',
                    'min:8',
                    'confirmed',
                    'regex:/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
                ]

            ],
            [
                'password.regex' => 'Your password must contain at least:<ul><li><p>8 characters,</p></li><li><p>(1) uppercase letter,</p></li><li><p>(1) digit,</p></li><li><p>(1) special character (@$!%*?&).</p></li></ul'
            ]
        );

        $member = Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('members')->login($member);

        return redirect()->route('member.dashboard');
    }

    public function deleteTransaction($id)
    {
        $transaction = Transaction::find($id);
        $transaction->delete();
        return redirect()->route('member.dashboard')->with('success', 'Transaction deleted successfully');
    }

    public function createTransaction(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255|min:2',
                'amount' => 'required|numeric',
                'reference_number' => 'required|string|unique:transactions,reference_number',
                'payment_method' => 'required|digits:16',
            ]
        );

        $transaction = Transaction::create([
            'member_id' => Auth::guard('members')->id(),
            'name' => $request->name,
            'date' => now()->toDateString(),
            'amount' => $request->amount,
            'reference_number' => $request->reference_number,
            'payment_method' => $request->payment_method,
            'payment_status' => 'inprogress',
        ]);

        return redirect()->route('member.dashboard')->with('success', 'Transaction created successfully');
    }

    public function showLoginForm()
    {
        if (Auth::guard('members')->check()) {
            return redirect()->route('member.dashboard');
        }
        return view('member.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('members')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('member.dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('members')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('status', 'Logout successful!');
    }
}
