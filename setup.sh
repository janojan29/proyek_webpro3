#!/bin/bash

# Laravel 10 Installation Script
# This script helps set up a Laravel 10 project

echo "======================================"
echo "Laravel 10 Project Setup"
echo "======================================"
echo ""

# Check if Composer is installed
if ! command -v composer &> /dev/null; then
    echo "Composer is not installed. Please install Composer first."
    exit 1
fi

echo "Installing Composer dependencies..."
composer install

echo ""
echo "Copying .env file..."
if [ ! -f .env ]; then
    cp .env.example .env
    echo ".env file created"
fi

echo ""
echo "Generating application key..."
php artisan key:generate

echo ""
echo "Creating necessary directories..."
mkdir -p storage/framework/cache
mkdir -p storage/framework/sessions
mkdir -p storage/framework/testing
mkdir -p storage/logs
mkdir -p bootstrap/cache

echo ""
echo "Setting permissions..."
chmod -R 775 storage
chmod -R 775 bootstrap/cache

echo ""
echo "======================================"
echo "Laravel 10 setup complete!"
echo "======================================"
echo ""
echo "Next steps:"
echo "1. Configure your .env file with database credentials"
echo "2. Run migrations: php artisan migrate"
echo "3. Start the development server: php artisan serve"
echo ""
echo "The application will be available at: http://localhost:8000"
echo ""
