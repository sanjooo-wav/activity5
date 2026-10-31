# TFA5 Laravel POS

This Laravel activity rebuilds the TFA1 POS pages using static PHP arrays.


1. Start Apache in XAMPP.
2. From this folder, run `php artisan serve` if you want to use Laravel's development server.
3. For XAMPP, open `http://localhost/TFA5/public/`.

- `/` — landing page
- `/about` — about page
- `/customers` — customer accounts
- `/users` — user accounts

Customer and user records are defined as static arrays inside their controllers and displayed with Blade `@foreach` loops.
