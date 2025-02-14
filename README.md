# FilamentPHP Boilerplate

![FilamentPHP Boilerplate](https://img.shields.io/badge/FilamentPHP-Boilerplate-blue.svg)

## Introduction

**FilamentPHP Boilerplate** is a powerful and flexible starting point for building robust and scalable admin dashboards. This boilerplate is designed to help developers quickly set up an admin panel with essential features, security measures, and user-friendly management tools.

Built using **FilamentPHP**, it leverages modern PHP development practices to ensure a smooth and efficient experience.

**Key Features:**
- **User Management:** Easily manage user accounts, including registration, profile updates, and deletion.
- **Multi-Factor Authentication (MFA):** Enhance security with optional two-factor authentication for user accounts.
- **API Keys Management:** Enable secure storage and management of API keys and credentials, facilitating seamless integration with internal and third-party APIs.
- **User Roles & Permissions:** Implement role-based access control (RBAC) to ensure users have the right level of access.
- **Export Reports:** Generate and export reports in Excel (.xlsx) or CSV formats for data analysis and record-keeping.

**Why Choose FilamentPHP Boilerplate?**
- **Time-Saving:** Get started quickly with a ready-to-use admin panel instead of building from scratch.
- **Scalability:** Designed to be easily extendable, allowing you to add more features as needed.
- **Security Focused:** Built-in security features like MFA and role-based permissions to protect user data.
- **User-Friendly:** Clean UI and intuitive navigation for a seamless admin experience.
- **Open & Customizable:** Modify and extend the boilerplate according to your project’s requirements.

## Table of Contents
[Installation](#installation)<br/>
[Setup Local Environment](#environment)<br/>
[Database](#database)<br/>
[Generate Filament Shield Permissions](#generate-filament-shield-permissions)<br/>
[Create Administrator Account](#create-admin-account)<br/>
[Generate Test Data](#generate-test-data)<br/>
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

Configure the `APP_URL` in your `.env` file:

```bash
APP_URL=https://filamentphp-boilerplate.dev
```

Configure the `Database` in your `.env` file:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

or if you're using `PostgreSQL`:
```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
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

<a name="generate-test-data"></a>
## Generate Test Data
You may also run this command in order to populate the database with test data:

```bash
php artisan db:seed
```

<a name="support"></a>
## Support
This project was generated with [Laravel](https://laravel.com/) and [Filament](https://filamentphp.com).

For support, email jeddsaliba@gmail.com.
