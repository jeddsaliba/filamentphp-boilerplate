# FilamentPHP Boilerplate

![FilamentPHP Boilerplate](https://img.shields.io/badge/FilamentPHP-Boilerplate-blue.svg)

## Introduction

**FilamentPHP Boilerplate** is a ready-made boilerplate designed to jump-start the development of web applications using **FilamentPHP**. It provides a pre-configured setup, essential dependencies, and best practices to accelerate your workflow.

## Features

- **Filament Admin Panel**: Pre-installed and configured.
- **Authentication & User Management**: Ready-to-use authentication with roles and permissions.
- **CRUD Operations**: Easily extendable CRUD functionalities.
- **TailwindCSS & Livewire**: Integrated for seamless front-end development.
- **Laravel Sanctum**: API authentication ready.
- **Docker Support**: For simplified local development.
- **Pre-configured Testing**: PHPUnit and Pest tests included.

## Prerequisites

Before getting started, ensure you have the following installed:

- PHP 8.1 or higher
- Composer
- Node.js & NPM/Yarn
- MySQL/PostgreSQL (or any Laravel-supported database)
- Docker (optional, for containerized setup)

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/filamentphp-boilerplate.git
   cd filamentphp-boilerplate
   ```
2. Install dependencies:
   ```bash
   composer install
   npm install && npm run dev
   ```
3. Set up environment variables:
   ```bash
   cp .env.example .env
   ```
   Update the `.env` file with your database credentials.
4. Run migrations and seed data:
   ```bash
   php artisan migrate --seed
   ```
5. Start the development server:
   ```bash
   php artisan serve
   ```
6. Access Filament Admin Panel:
   ```
   http://127.0.0.1:8000/admin
   ```

## Usage

- Create a new Filament resource:
  ```bash
  php artisan make:filament-resource Post
  ```
- Generate a user:
  ```bash
  php artisan tinker
  >>> \App\Models\User::factory()->create(['email' => 'admin@example.com']);
  ```
- Run tests:
  ```bash
  php artisan test
  ```

## Contributing

Contributions are welcome! Feel free to submit a pull request or open an issue to improve this boilerplate.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Credits

Built with ❤️ using [FilamentPHP](https://filamentphp.com/) and [Laravel](https://laravel.com/).