<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

```
belajar-inertia
├─ .editorconfig
├─ app
│  ├─ Http
│  │  ├─ Controllers
│  │  │  ├─ Auth
│  │  │  │  ├─ AuthenticatedSessionController.php
│  │  │  │  ├─ ConfirmablePasswordController.php
│  │  │  │  ├─ EmailVerificationNotificationController.php
│  │  │  │  ├─ EmailVerificationPromptController.php
│  │  │  │  ├─ NewPasswordController.php
│  │  │  │  ├─ PasswordController.php
│  │  │  │  ├─ PasswordResetLinkController.php
│  │  │  │  ├─ RegisteredUserController.php
│  │  │  │  └─ VerifyEmailController.php
│  │  │  ├─ Controller.php
│  │  │  ├─ KaryawanController.php
│  │  │  └─ ProfileController.php
│  │  ├─ Middleware
│  │  │  ├─ HandleInertiaRequests.php
│  │  │  └─ RoleMiddleware.php
│  │  └─ Requests
│  │     ├─ Auth
│  │     │  └─ LoginRequest.php
│  │     └─ ProfileUpdateRequest.php
│  ├─ Models
│  │  ├─ Karyawan.php
│  │  └─ User.php
│  └─ Providers
│     └─ AppServiceProvider.php
├─ artisan
├─ bootstrap
│  ├─ app.php
│  ├─ cache
│  │  ├─ packages.php
│  │  └─ services.php
│  └─ providers.php
├─ composer.json
├─ composer.lock
├─ config
│  ├─ app.php
│  ├─ auth.php
│  ├─ cache.php
│  ├─ database.php
│  ├─ filesystems.php
│  ├─ logging.php
│  ├─ mail.php
│  ├─ queue.php
│  ├─ services.php
│  └─ session.php
├─ database
│  ├─ database.sqlite
│  ├─ factories
│  │  └─ UserFactory.php
│  ├─ migrations
│  │  ├─ 0001_01_01_000000_create_users_table.php
│  │  ├─ 0001_01_01_000001_create_cache_table.php
│  │  ├─ 0001_01_01_000002_create_jobs_table.php
│  │  ├─ 2025_12_29_080405_create_karyawans_table.php
│  │  └─ 2025_12_29_090629_add_role_to_users_table.php
│  └─ seeders
│     └─ DatabaseSeeder.php
├─ jsconfig.json
├─ package-lock.json
├─ package.json
├─ phpunit.xml
├─ postcss.config.js
├─ public
│  ├─ .htaccess
│  ├─ favicon.ico
│  ├─ index.php
│  └─ robots.txt
├─ README.md
├─ resources
│  ├─ css
│  │  └─ app.css
│  ├─ js
│  │  ├─ app.js
│  │  ├─ bootstrap.js
│  │  ├─ Components
│  │  │  ├─ ApplicationLogo.vue
│  │  │  ├─ Checkbox.vue
│  │  │  ├─ DangerButton.vue
│  │  │  ├─ Dropdown.vue
│  │  │  ├─ DropdownLink.vue
│  │  │  ├─ InputError.vue
│  │  │  ├─ InputLabel.vue
│  │  │  ├─ Modal.vue
│  │  │  ├─ NavLink.vue
│  │  │  ├─ PrimaryButton.vue
│  │  │  ├─ ResponsiveNavLink.vue
│  │  │  ├─ SecondaryButton.vue
│  │  │  └─ TextInput.vue
│  │  ├─ Layouts
│  │  │  ├─ AuthenticatedLayout.vue
│  │  │  └─ GuestLayout.vue
│  │  └─ Pages
│  │     ├─ Auth
│  │     │  ├─ ConfirmPassword.vue
│  │     │  ├─ ForgotPassword.vue
│  │     │  ├─ Login.vue
│  │     │  ├─ Register.vue
│  │     │  ├─ ResetPassword.vue
│  │     │  └─ VerifyEmail.vue
│  │     ├─ Dashboard.vue
│  │     ├─ Home.vue
│  │     ├─ Karyawan
│  │     │  ├─ Create.vue
│  │     │  ├─ Edit.vue
│  │     │  ├─ Index.vue
│  │     │  └─ Show.vue
│  │     ├─ Profile
│  │     │  ├─ Edit.vue
│  │     │  └─ Partials
│  │     │     ├─ DeleteUserForm.vue
│  │     │     ├─ UpdatePasswordForm.vue
│  │     │     └─ UpdateProfileInformationForm.vue
│  │     └─ Welcome.vue
│  └─ views
│     └─ app.blade.php
├─ routes
│  ├─ auth.php
│  ├─ console.php
│  └─ web.php
├─ storage
│  ├─ app
│  │  ├─ private
│  │  └─ public
│  ├─ framework
│  │  ├─ cache
│  │  │  └─ data
│  │  ├─ sessions
│  │  ├─ testing
│  │  └─ views
│  │     ├─ 3188620a072f309b7447817e3517f694.php
│  │     ├─ c9968fb32a5588b762794f31f0bccf7b.php
│  │     └─ dc01732814757a46d356023e9408efbb.php
│  └─ logs
├─ tailwind.config.js
├─ tests
│  ├─ Feature
│  │  ├─ Auth
│  │  │  ├─ AuthenticationTest.php
│  │  │  ├─ EmailVerificationTest.php
│  │  │  ├─ PasswordConfirmationTest.php
│  │  │  ├─ PasswordResetTest.php
│  │  │  ├─ PasswordUpdateTest.php
│  │  │  └─ RegistrationTest.php
│  │  ├─ ExampleTest.php
│  │  └─ ProfileTest.php
│  ├─ TestCase.php
│  └─ Unit
│     └─ ExampleTest.php
└─ vite.config.js

```
```
belajar-inertia
├─ .editorconfig
├─ app
│  ├─ Http
│  │  ├─ Controllers
│  │  │  ├─ Auth
│  │  │  │  ├─ AuthenticatedSessionController.php
│  │  │  │  ├─ ConfirmablePasswordController.php
│  │  │  │  ├─ EmailVerificationNotificationController.php
│  │  │  │  ├─ EmailVerificationPromptController.php
│  │  │  │  ├─ NewPasswordController.php
│  │  │  │  ├─ PasswordController.php
│  │  │  │  ├─ PasswordResetLinkController.php
│  │  │  │  ├─ RegisteredUserController.php
│  │  │  │  └─ VerifyEmailController.php
│  │  │  ├─ Controller.php
│  │  │  ├─ KaryawanController.php
│  │  │  └─ ProfileController.php
│  │  ├─ Middleware
│  │  │  ├─ HandleInertiaRequests.php
│  │  │  └─ RoleMiddleware.php
│  │  └─ Requests
│  │     ├─ Auth
│  │     │  └─ LoginRequest.php
│  │     └─ ProfileUpdateRequest.php
│  ├─ Models
│  │  ├─ Karyawan.php
│  │  └─ User.php
│  └─ Providers
│     └─ AppServiceProvider.php
├─ artisan
├─ bootstrap
│  ├─ app.php
│  ├─ cache
│  │  ├─ packages.php
│  │  └─ services.php
│  └─ providers.php
├─ composer.json
├─ composer.lock
├─ config
│  ├─ app.php
│  ├─ auth.php
│  ├─ cache.php
│  ├─ database.php
│  ├─ filesystems.php
│  ├─ logging.php
│  ├─ mail.php
│  ├─ queue.php
│  ├─ services.php
│  └─ session.php
├─ database
│  ├─ database.sqlite
│  ├─ factories
│  │  └─ UserFactory.php
│  ├─ migrations
│  │  ├─ 0001_01_01_000000_create_users_table.php
│  │  ├─ 0001_01_01_000001_create_cache_table.php
│  │  ├─ 0001_01_01_000002_create_jobs_table.php
│  │  ├─ 2025_12_29_080405_create_karyawans_table.php
│  │  └─ 2025_12_29_090629_add_role_to_users_table.php
│  └─ seeders
│     └─ DatabaseSeeder.php
├─ jsconfig.json
├─ package-lock.json
├─ package.json
├─ phpunit.xml
├─ postcss.config.js
├─ public
│  ├─ .htaccess
│  ├─ favicon.ico
│  ├─ index.php
│  └─ robots.txt
├─ README.md
├─ resources
│  ├─ css
│  │  └─ app.css
│  ├─ js
│  │  ├─ app.js
│  │  ├─ bootstrap.js
│  │  ├─ Components
│  │  │  ├─ ApplicationLogo.vue
│  │  │  ├─ Checkbox.vue
│  │  │  ├─ DangerButton.vue
│  │  │  ├─ Dropdown.vue
│  │  │  ├─ DropdownLink.vue
│  │  │  ├─ InputError.vue
│  │  │  ├─ InputLabel.vue
│  │  │  ├─ Modal.vue
│  │  │  ├─ NavLink.vue
│  │  │  ├─ PrimaryButton.vue
│  │  │  ├─ ResponsiveNavLink.vue
│  │  │  ├─ SecondaryButton.vue
│  │  │  └─ TextInput.vue
│  │  ├─ Layouts
│  │  │  ├─ AuthenticatedLayout.vue
│  │  │  └─ GuestLayout.vue
│  │  └─ Pages
│  │     ├─ Auth
│  │     │  ├─ ConfirmPassword.vue
│  │     │  ├─ ForgotPassword.vue
│  │     │  ├─ Login.vue
│  │     │  ├─ Register.vue
│  │     │  ├─ ResetPassword.vue
│  │     │  └─ VerifyEmail.vue
│  │     ├─ Dashboard.vue
│  │     ├─ Home.vue
│  │     ├─ Karyawan
│  │     │  ├─ Create.vue
│  │     │  ├─ Edit.vue
│  │     │  ├─ Index.vue
│  │     │  └─ Show.vue
│  │     ├─ Profile
│  │     │  ├─ Edit.vue
│  │     │  └─ Partials
│  │     │     ├─ DeleteUserForm.vue
│  │     │     ├─ UpdatePasswordForm.vue
│  │     │     └─ UpdateProfileInformationForm.vue
│  │     └─ Welcome.vue
│  └─ views
│     └─ app.blade.php
├─ routes
│  ├─ auth.php
│  ├─ console.php
│  └─ web.php
├─ storage
│  ├─ app
│  │  ├─ private
│  │  └─ public
│  ├─ framework
│  │  ├─ cache
│  │  │  └─ data
│  │  ├─ sessions
│  │  ├─ testing
│  │  └─ views
│  │     ├─ 3188620a072f309b7447817e3517f694.php
│  │     ├─ c9968fb32a5588b762794f31f0bccf7b.php
│  │     └─ dc01732814757a46d356023e9408efbb.php
│  └─ logs
├─ tailwind.config.js
├─ tests
│  ├─ Feature
│  │  ├─ Auth
│  │  │  ├─ AuthenticationTest.php
│  │  │  ├─ EmailVerificationTest.php
│  │  │  ├─ PasswordConfirmationTest.php
│  │  │  ├─ PasswordResetTest.php
│  │  │  ├─ PasswordUpdateTest.php
│  │  │  └─ RegistrationTest.php
│  │  ├─ ExampleTest.php
│  │  └─ ProfileTest.php
│  ├─ TestCase.php
│  └─ Unit
│     └─ ExampleTest.php
└─ vite.config.js

```