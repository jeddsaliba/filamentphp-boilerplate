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

## Table of Contents
[Installation](#installation)<br/>
[Setup Local Environment](#environment)<br/>
[Database](#database)<br/>
[Generate Filament Shield Permissions](#generate-filament-shield-permissions)<br/>
[Create Administrator Account](#create-admin-account)<br/>
[Generate Location Data](#generate-location-data)<br/>
[Generate Test Data](#generate-test-data)<br/>
[Gallery](#gallery)<br/>
[Support](#support)

<a name="installation"></a>
## Installation
Install the `dependencies` by running:

```bash
composer install
```

<a name="environment"></a>
## Setup Local Environment
Generate a new `.env` file by running:

```bash
cp .env.example .env
```

Configure your `.env` file:

```bash
APP_URL=https://quotation-builder.dev

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

<a name="database"></a>
## Database
Assuming that you have already created an empty database, run this command to migrate the database tables:

```bash
php artisan migrate:fresh
```

<a name="generate-filament-shield-permissions"></a>
## Generate Filament Shield Permissions
In order to generate [filament shield](https://filamentphp.com/plugins/bezhansalleh-shield) permissions, run this command:

```bash
php artisan shield:generate --all
```

<a name="create-admin-account"></a>
## Create Administrator Account
In order to create an administrator account, run this command:

```bash
php artisan shield:super-admin
```

<a name="generate-location-data"></a>
## Generate Location Data
If you want to have location data available in your database (i.e Country, State, City), run this command:

```bash
php artisan world:install
```

<a name="generate-test-data"></a>
## Generate Test Data
You may also run this command in order to populate the database with test data:

```bash
php artisan db:seed
```

<a name="gallery"></a>
## Gallery

![Projects](public/screens/screely-1736755790674.png)
![Tasks](public/screens/screely-1736756427413.png)
![Checklist](public/screens/screely-1736755228356.png)

<a name="support"></a>
## Support
This project was generated with [Laravel](https://laravel.com/) and [Filament](https://filamentphp.com).

For support, email jeddsaliba@gmail.com.