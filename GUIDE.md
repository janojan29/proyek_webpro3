# Laravel 10 Complete Project Guide

## 📋 Project Structure

```
webpro3/
├── app/                          # Application source code
│   ├── Http/
│   │   ├── Controllers/         # Application controllers
│   │   └── Middleware/          # HTTP middleware
│   └── Models/                  # Eloquent models
│
├── bootstrap/                    # Bootstrap the application
│   └── app.php                  # Application bootstrap file
│
├── config/                       # Configuration files
│   ├── app.php                  # App configuration
│   ├── auth.php                 # Authentication config
│   ├── cache.php                # Cache configuration
│   ├── database.php             # Database configuration
│   ├── filesystems.php          # Filesystems configuration
│   ├── logging.php              # Logging configuration
│   ├── queue.php                # Queue configuration
│   ├── services.php             # Third-party services
│   └── session.php              # Session configuration
│
├── database/
│   ├── migrations/              # Database migrations
│   └── seeders/                 # Database seeders
│
├── public/                       # Web-accessible files
│   ├── index.php                # Application entry point
│   └── .htaccess               # Apache configuration
│
├── resources/
│   ├── css/                     # CSS stylesheets
│   ├── js/                      # JavaScript files
│   └── views/                   # Blade templates
│
├── routes/                       # Route definitions
│   ├── web.php                  # Web routes
│   └── console.php              # Console commands
│
├── storage/                      # Storage directory
│   ├── app/                     # Application storage
│   ├── framework/               # Framework cache, sessions
│   └── logs/                    # Application logs
│
├── tests/                        # Test files
│   ├── Unit/                    # Unit tests
│   └── Feature/                 # Feature tests
│
├── artisan                       # Artisan console
├── composer.json               # Composer dependencies
├── package.json                # NPM dependencies
├── vite.config.js             # Vite configuration
├── tailwind.config.js         # Tailwind CSS configuration
└── .env                        # Environment configuration
```

## 🚀 Getting Started

### Prerequisites
- PHP 8.1 or higher
- Composer
- Node.js (for asset compilation)
- MySQL or SQLite

### Installation Steps

1. **Install PHP dependencies:**
   ```bash
   composer install
   ```

2. **Install JavaScript dependencies:**
   ```bash
   npm install
   ```

3. **Configure environment:**
   ```bash
   cp .env.example .env
   ```

4. **Generate application key:**
   ```bash
   php artisan key:generate
   ```

5. **Run migrations:**
   ```bash
   php artisan migrate
   ```

6. **Build assets:**
   ```bash
   npm run build
   # or for development with hot reload
   npm run dev
   ```

7. **Start development server:**
   ```bash
   php artisan serve
   ```

The application will be available at `http://localhost:8000`

## 📝 Useful Artisan Commands

### Creating Files
```bash
# Create a new controller
php artisan make:controller MyController

# Create a new model
php artisan make:model MyModel

# Create a migration
php artisan make:migration create_table_name

# Create a seeder
php artisan make:seeder TableNameSeeder
```

### Database Operations
```bash
# Run all migrations
php artisan migrate

# Rollback migrations
php artisan migrate:rollback

# Refresh migrations
php artisan migrate:refresh

# Seed database
php artisan db:seed
```

### Development
```bash
# Tinker shell for interactive exploration
php artisan tinker

# Cache configuration
php artisan config:cache

# Clear all caches
php artisan cache:clear

# Clear application cache
php artisan cache:clear
```

## 🔧 Configuration

### Database Configuration
Edit `.env` file:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

### Application Configuration
Edit `.env` file:
```env
APP_NAME="Laravel 10 App"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000
```

## 📊 Key Configuration Files

- **config/app.php** - Application configuration
- **config/database.php** - Database connections
- **config/auth.php** - Authentication guards and providers
- **config/cache.php** - Cache configuration
- **config/filesystems.php** - File storage configuration
- **config/mail.php** - Email configuration
- **config/queue.php** - Queue configuration

## 🌐 Routes

Default routes are defined in `routes/web.php`:
- `GET /` - Welcome page
- `GET /about` - About page

To add new routes:
```php
Route::get('/page', function () {
    return view('page');
});

Route::post('/submit', [MyController::class, 'store']);
```

## 👁️ Views

Views are stored in `resources/views/` and use Blade templating:

```blade
<!-- resources/views/welcome.blade.php -->
<h1>{{ $title }}</h1>

@if($condition)
    <p>Conditional content</p>
@endif

@foreach($items as $item)
    <p>{{ $item }}</p>
@endforeach
```

## 🗃️ Models and Database

Create models with migrations:
```bash
php artisan make:model Post -m
```

Example model:
```php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content'];
}
```

## 🧪 Testing

Run tests:
```bash
php artisan test

# Run specific test
php artisan test tests/Unit/ExampleTest.php
```

## 📦 Frontend Assets

### CSS (Tailwind)
Edit `resources/css/app.css` to add custom styles using Tailwind classes.

### JavaScript
Edit `resources/js/app.js` to add JavaScript functionality.

Compile assets:
```bash
npm run dev      # Development mode with hot reload
npm run build    # Production build
```

## 🔒 Security Features

- CSRF token in all forms
- SQL injection protection with Eloquent
- Cross-site request forgery (CSRF) protection
- Password hashing with bcrypt
- Authentication middleware

## 📚 Additional Resources

- [Laravel Documentation](https://laravel.com/docs)
- [Blade Template Documentation](https://laravel.com/docs/blade)
- [Eloquent ORM Documentation](https://laravel.com/docs/eloquent)
- [HTTP Tests Documentation](https://laravel.com/docs/http-tests)

## ❓ Troubleshooting

### Cannot connect to database
- Check database credentials in `.env`
- Ensure database server is running
- Verify database name exists

### Permission errors on storage
```bash
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```

### Clear all caches
```bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
php artisan route:clear
```

## 📄 License

This Laravel 10 project is open-source software licensed under the MIT license.
