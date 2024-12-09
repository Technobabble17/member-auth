<div class="relative z-0 w-full mb-5 group">
    <input type="{{ $type ?? 'text' }}" name="{{ $name }}" value="{{ old($name, $value ?? '') }}" placeholder=" " {{ $required ?? false ? 'required' : '' }}
        class="block caret-blue-500 rounded-tr-md focus-within:bg-gray-600 transition duration-500 py-2.5 px-2 w-full text-sm bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:outline-none focus:ring-0 peer {{ $class ?? '' }}" />
    <label for="{{ $name }}"
        class="@error($name) !text-red-500 !peer-focus:text-red-500 @enderror peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-7 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-7">
        {{ $label }}
    </label>
    <div
        class="absolute bottom-0 w-0 h-[2px] bg-blue-500 peer-focus:w-full transition-all ease-in-out duration-500">
    </div>
</div>