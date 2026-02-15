# Nonoy Lutong Bahay - Online Food Ordering System

<div align="center">
  <img src="https://img.shields.io/badge/Laravel-12.0-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel 12.0">
  <img src="https://img.shields.io/badge/Livewire-4.0-4E56A6?style=for-the-badge&logo=livewire&logoColor=white" alt="Livewire 4.0">
  <img src="https://img.shields.io/badge/Tailwind_CSS-4.0-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS 4.0">
  <img src="https://img.shields.io/badge/PHP-8.4-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8.4">
  <img src="https://img.shields.io/badge/License-MIT-green.svg?style=for-the-badge" alt="License">
</div>

## 📋 Overview

**Nonoy Lutong Bahay** is a modern online food ordering system for authentic Filipino home-cooked meals. Serving Pagadian City since 2004, the system enables customers to browse menus, place orders, and manage their accounts through an intuitive web interface optimized for mobile devices.

The platform features a beautiful landing page showcasing the restaurant's offerings, seamless authentication with modal-based login/registration, and a comprehensive order management system built on Laravel's robust foundation.

### Key Features

- 🍲 **Menu Browsing** - Interactive food categories with detailed dish descriptions
- 🛒 **Order Management** - Complete ordering lifecycle from cart to delivery
- 👤 **User Accounts** - Secure authentication with profile and password management
- 🔐 **Two-Factor Authentication** - Enhanced security with 2FA support via Fortify
- 📱 **Mobile-First Design** - Fully responsive interface optimized for mobile ordering
- 🎨 **Modern UI** - Clean, branded design with Flux UI components
- ⚡ **Real-time Updates** - Dynamic interface powered by Livewire
- 🎯 **Modal Authentication** - Seamless login/register without page reloads

## 🚀 Tech Stack

### Backend
- **Laravel 12.x** - PHP web application framework
- **PHP 8.4.17** - Server-side scripting language
- **Laravel Fortify** - Authentication backend with 2FA support
- **Livewire 4.x** - Full-stack framework for dynamic interfaces

### Frontend
- **Livewire Flux 2.x (Free)** - Official Livewire component library
- **Tailwind CSS 4.x** - Utility-first CSS framework with custom theme
- **Alpine.js** - Lightweight JavaScript framework for interactivity
- **Vite 7.x** - Modern frontend build tool

### Database
- **MySQL 8.0+** - Primary database for production
- **SQLite** - Option for local development

### Testing & Quality
- **Pest PHP 4.x** - Modern testing framework
- **Laravel Pint** - Opinionated code style fixer
- **PHPUnit 12.x** - Unit testing framework

## 📋 Requirements

- **PHP**: 8.4 or higher
- **Composer**: 2.0 or higher
- **Node.js**: 18.0 or higher (22.13.0 recommended)
- **NPM**: 8.0 or higher
- **MySQL**: 8.0 or higher (or SQLite for development)
- **Web Server**: Apache/Nginx with mod_rewrite or Laravel Sail

## 🚀 Installation

### 1. Clone the Repository
```bash
git clone <repository-url>
cd NONOY-ORDERING-SYSTEM
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Install Node.js Dependencies
```bash
npm install
```

### 4. Environment Configuration

Copy the environment file and configure it:

```bash
cp .env.example .env
```

Edit `.env` file with your database and application settings:

```env
APP_NAME="Nonoy Lutong Bahay"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

# Database Configuration (MySQL)
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nonoy_ordering_system
DB_USERNAME=root
DB_PASSWORD=your_password

# Or use SQLite for development
# DB_CONNECTION=sqlite
# DB_DATABASE=/absolute/path/to/database.sqlite

# Email Configuration (for password reset, notifications)
MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@nonoyordering.test"
MAIL_FROM_NAME="${APP_NAME}"
```

### 5. Generate Application Key
```bash
php artisan key:generate
```

### 6. Database Setup

Create the database and run migrations:

```bash
# For MySQL, create database first:
mysql -u root -p
CREATE DATABASE nonoy_ordering_system;
exit;

# Run migrations
php artisan migrate
```

Optionally, seed the database with sample data:

```bash
php artisan db:seed
```

### 7. Storage Link

Create the symbolic link for public file storage:

```bash
php artisan storage:link
```

### 8. Build Frontend Assets

For development (with hot reload):

```bash
npm run dev
```

For production:

```bash
npm run build
```

### 9. Start the Development Server

**Option 1: PHP Built-in Server**
```bash
php artisan serve
```

**Option 2: Laravel Sail (Docker)**
```bash
./vendor/bin/sail up
```

The application will be available at `http://localhost:8000` (or `http://localhost` for Sail)

## 🛠️ Development

### Running Development Servers

```bash
# Laravel development server
php artisan serve

# Vite development server (hot reload) - run in separate terminal
npm run dev
```

### Database Commands

```bash
# Run migrations
php artisan migrate

# Rollback last migration
php artisan migrate:rollback

# Refresh database (drop all tables and re-run migrations)
php artisan migrate:fresh

# Seed database with sample data
php artisan db:seed

# Check database schema (Laravel Boost tool)
php artisan db:show
```

### Cache Management

```bash
# Clear application cache
php artisan cache:clear

# Clear configuration cache
php artisan config:clear

# Clear route cache
php artisan route:clear

# Clear compiled views
php artisan view:clear

# Clear all caches
php artisan optimize:clear
```

### Running Tests

```bash
# Run all tests
php artisan test

# Run tests in compact mode
php artisan test --compact

# Run specific test file
php artisan test tests/Feature/DashboardTest.php

# Run with code coverage
php artisan test --coverage
```

### Code Quality

```bash
# Fix code style with Pint
vendor/bin/pint

# Check code style without fixing
vendor/bin/pint --test

# Format specific files
vendor/bin/pint app/Models
```

## 📁 Project Structure

```
NONOY-ORDERING-SYSTEM/
├── app/
│   ├── Actions/          # Custom action classes (Fortify)
│   ├── Http/
│   │   └── Controllers/  # HTTP controllers
│   ├── Livewire/         # Livewire components
│   │   └── Actions/      # Livewire action components
│   ├── Models/           # Eloquent models
│   └── Providers/        # Service providers
├── bootstrap/            # Bootstrap files
├── config/               # Configuration files
├── database/
│   ├── factories/        # Model factories
│   ├── migrations/       # Database migrations
│   └── seeders/          # Database seeders
├── public/
│   ├── images/           # Public image assets
│   └── build/            # Compiled assets (generated)
├── resources/
│   ├── css/
│   │   └── app.css       # Main stylesheet (Tailwind)
│   ├── js/
│   │   └── app.js        # Main JavaScript (Alpine.js)
│   └── views/
│       ├── components/   # Blade components
│       ├── layouts/      # Layout templates
│       ├── pages/        # Page views
│       └── welcome.blade.php  # Landing page
├── routes/
│   ├── console.php       # Console routes
│   ├── settings.php      # Settings routes
│   └── web.php           # Web routes
├── storage/              # Application storage
├── tests/                # Automated tests
│   ├── Feature/          # Feature tests
│   └── Unit/             # Unit tests
├── .env.example          # Example environment file
├── artisan               # Artisan CLI
├── composer.json         # PHP dependencies
├── package.json          # Node.js dependencies
├── pint.json             # Laravel Pint configuration
├── phpunit.xml           # PHPUnit configuration
└── vite.config.js        # Vite configuration
```

## 🎨 Brand Colors

The system uses a custom color palette reflecting Nonoy Lutong Bahay's brand:

- **Cream**: #fefdfb (cream-50) → #ddb892 (cream-300) - Warm, welcoming background
- **Teal**: #14b8a6 (teal-400) → #0f766e (teal-700) - Primary accent (home-cooked freshness)
- **Amber**: #fbbf24 (amber-400) → #f59e0b (amber-500) - Secondary accent (warmth)

Color usage:
- Primary buttons and CTAs: Teal
- Badges and highlights: Amber
- Backgrounds: Cream shades
- Dark mode: Zinc palette

## 👥 Default User Accounts

After running database seeders, you can use these test accounts:

### Administrator Account
```
Email: admin@nonoy.test
Password: password
```

### Customer Account
```
Email: customer@nonoy.test
Password: password
```

> **Note**: Change default passwords immediately in production environments.

## 🧪 Testing

The system includes comprehensive test coverage:

- **Feature Tests**: Test complete user workflows
- **Unit Tests**: Test individual components and business logic
- **Livewire Tests**: Test reactive components

Run specific test suites:

```bash
# Feature tests only
php artisan test --testsuite=Feature

# Unit tests only
php artisan test --testsuite=Unit

# With detailed output
php artisan test --verbose
```

## 🔐 Security Features

- **Laravel Fortify Authentication** - Secure login, registration, password reset
- **Two-Factor Authentication** - Optional 2FA for enhanced security
- **Password Confirmation** - Sensitive actions require password confirmation
- **CSRF Protection** - All forms protected against CSRF attacks
- **XSS Protection** - Blade templating automatically escapes output
- **SQL Injection Protection** - Eloquent ORM with parameterized queries
- **Rate Limiting** - Login and API rate limiting built-in

## 📱 Mobile Features

The landing page is fully optimized for mobile devices:

- **Modal Authentication** - Login/register without leaving the page
- **Touch-Friendly UI** - Large touch targets (minimum 44px)
- **Responsive Grid** - Adaptive layouts for all screen sizes
- **Mobile Menu** - Collapsible navigation with smooth animations
- **Optimized Images** - Fast loading with proper sizing
- **Progressive Enhancement** - Works on older devices

## 🚢 Deployment

### Production Build

```bash
# Build optimized assets
npm run build

# Optimize autoloader
composer install --optimize-autoloader --no-dev

# Cache configuration and routes
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run migrations
php artisan migrate --force
```

### Environment Configuration

Ensure your production `.env` has:

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.com

# Use strong random key
APP_KEY=base64:...

# Production database
DB_CONNECTION=mysql
DB_HOST=your-database-host
DB_DATABASE=your-database-name
DB_USERNAME=your-username
DB_PASSWORD=strong-password

# Production mail settings
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
# ... other mail settings
```

### Server Requirements

- PHP 8.4+ with extensions: BCMath, Ctype, JSON, Mbstring, OpenSSL, PDO, Tokenizer, XML
- Composer
- MySQL 8.0+
- Web server (Apache/Nginx) with URL rewriting
- SSL certificate for HTTPS

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

### Code Style

- Follow PSR-12 code style (enforced by Pint)
- Write tests for new features
- Update documentation as needed

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🙏 Acknowledgments

- **Laravel** - The PHP framework for web artisans
- **Livewire** - Full-stack framework for Laravel
- **Livewire Flux** - Beautiful UI components
- **Tailwind CSS** - Utility-first CSS framework
- **Alpine.js** - Lightweight JavaScript framework

## 📞 Support

For support, email support@nonoyordering.test or visit our restaurant at:

**Nonoy Lutong Bahay**  
Barangay Direct, Pagadian City  
Operating Hours:
- Monday - Saturday: 6:00 AM - 8:00 PM
- Sunday: 7:00 AM - 6:00 PM

---

<div align="center">
  Made with ❤️ by CodeHub.Site | Serving authentic Filipino home-cooked meals since 2004
</div>
