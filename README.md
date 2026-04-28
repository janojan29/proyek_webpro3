# Laravel 10 Project

This is a complete Laravel 10 project setup with all necessary files and configurations.

## Requirements

- PHP 8.1 or higher
- Composer
- MySQL or SQLite
- Node.js (for asset compilation)

## Installation

1. **Install dependencies:**
   ```bash
   composer install
   ```

2. **Copy environment file:**
   ```bash
   cp .env.example .env
   ```

3. **Generate application key:**
   ```bash
   php artisan key:generate
   ```

4. **Run migrations:**
   ```bash
   php artisan migrate
   ```

5. **Install JavaScript dependencies (Optional):**
   ```bash
   npm install
   npm run dev
   ```

6. **Start the development server:**
   ```bash
   php artisan serve
   ```

The application will be available at `http://localhost:8000`

## Features

- User authentication system ready
- Database migrations
- Blade templating engine
- Eloquent ORM
- Built-in routing
- Configuration management

## Directory Structure

```
laravel10-app/
├── app/                 # Application code (Models, Controllers, etc.)
├── bootstrap/           # Application bootstrap files
├── config/             # Configuration files
├── database/           # Database migrations and seeders
├── public/             # Web accessible files
├── resources/          # Views and assets
├── routes/             # Application routes
├── storage/            # Cache, sessions, logs
└── tests/              # Test files
```

## Available Routes

- `/` - Welcome page
- `/about` - About page

## License

This Laravel project is open-source software licensed under the MIT license.
