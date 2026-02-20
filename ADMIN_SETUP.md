# Admin Panel Setup Guide

## Quick Start

### 1. Run Database Migrations
```bash
php artisan migrate
```

### 2. Create Admin User
Option A: Run the seeder
```bash
php artisan db:seed --class=AdminSeeder
```

Option B: Create manually via Tinker
```bash
php artisan tinker
```
Then execute:
```php
$user = \App\Models\User::create([
    'name' => 'Your Name',
    'email' => 'your-email@example.com',
    'password' => bcrypt('your-password'),
    'is_admin' => true
]);
```

Option C: Mark existing user as admin
```bash
php artisan tinker
```
Then:
```php
$user = \App\Models\User::find(1); // or use email: where('email', 'your@email.com')->first()
$user->is_admin = true;
$user->save();
exit;
```

## Login to Admin Panel

1. Visit: `http://yoursite.com/login`
2. Enter your email and password
3. Click "Login"
4. You'll be redirected to the admin dashboard at `/admin/dashboard`

## Default Admin Credentials (if using AdminSeeder)
- Email: `admin@example.com`
- Password: `admin123`

⚠️ **Important**: Change the default password after first login!

## Accessing Admin Features

Once logged in, you can manage:
- **Blog Posts** - Create, edit, delete blog content
- **Consultations** - View and manage booking requests
- **Contact Messages** - View and manage contact form submissions
- **Testimonials** - Add, edit, delete customer testimonials

## Navigation

Admin panel navigation is in the left sidebar. All pages are protected and require admin authentication.

## Logout

Click the "Logout" button in the sidebar to exit the admin panel.
