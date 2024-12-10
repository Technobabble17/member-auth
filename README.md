<p align="center"><img src="https://statamic.com/assets/branding/Statamic-Logo+Wordmark-Rad.svg" width="400" alt="Statamic Logo" /></p>

# Basic auth using a Member Model

This project implements a custom authentication system for a "Members" collection by extending the Authenticatable Laravel class. Below is an overview of the features, steps, and considerations involved in setting up this system.

## Features
- **Member Registration:** Members can register with a username, email, and password.
- **Member Login:** Members can log in with their email and password.
- **Member Dashboard:** Members can access a dashboard with their profile information.
- **Member Logout:** Members can log out of their account.
- **Member Profile:** Admins can view and edit member profile information from the Statamic Control Panel.

## Table of Contents
1. [Creating the Members Collection](#creating-the-members-collection)
2. [Authentication Guard and Provider](#authentication-guard-and-provider)
3. [Routes and Controllers](#routes-and-controllers)
4. [Views](#views)
---

## Creating the Members Collection

At the beginning, I was not sure how a Statamic Collection and custom Laravel Model would work together. I spent an entire day attempting to implement a Statamic Collection which used a Repository and defined auth providers and guards. Even after lots of reading, I ended up getting blocked with errors. I could get either a custom Model working and storing in a database, or a collection but only working with local .yaml files. To keep things simple, I created a custom model and utilized the [Runway](https://runway.duncanmcclean.com/) composer package to sync the database and model with the Statamic Control Panel.

**In-review:**  
Another issue I faced initially was hashing the passwords, after some troubleshooting I ensured that passwords were properly hashed before being stored.

---

## Authentication Guard and Provider

**Step 02:**  
I modified the authentication guard and provider configuration in `config/auth.php`. The provider tells Laravel how to fetch and verify members (by an eloquent model), and the guard determines how they are authenticated. This step was completely new to me, although I had some confidence in the eloquent model approach from my previous Laravel experience.

**Significance:**  
By aligning with Laravel’s authentication system, it will be much easier to leverage Laravel’s built-in features and packages.
**In-review:**  
For next steps additional auth features such as password resets, and email verification would be a great addition.
---

## Routes and Controllers

**Step 03:**  
In the Web.php file, I defined the routes for member registration and login. I also created a MemberAuthController to handle these requests. This step was straightforward, for this project I just set a statamic route to access the $page variable, and utilized middleware to check if the user is authenticated.

**In-review:**  
I believe it would be best to add an auth check for individual members when accessing their dashboard. This would prevent unauthorized access to the dashboard from a different member. Also I believe this controller is a bit too large, and could be broken down into smaller controllers for better organization.

---

## Views

**Step 04:**  
Generally I didn't spend much time at all with front-end styling. I worked from a component library, modified some styles, and DRY'd some code. I utilized .blade views for all of my pages pages. I also created components for nav-links and form inputs, and abstracted button and link styles in site.css. Componentization is one of my favorite parts of coding that I always try to improve, keeping code DRY and organized is something I always strive to achieve.

**In-review:**  
I wanted to add some effective GSAP work as I am currently learning it, however I didn't want to distract myself from completing this project. The button movement on the registration form was just some fun to be had that I quickly switched away from.