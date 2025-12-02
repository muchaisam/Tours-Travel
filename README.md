# ToursTravel Kenya

A travel booking platform for Kenya destinations built with Laravel.

## Screenshots

<p float="left">
  <img src="https://github.com/muchaisam/Tours-Travel/blob/main/screenshots/6.png" width="45%" />
  <img src="https://github.com/muchaisam/Tours-Travel/blob/main/screenshots/7.png" width="45%" /> 
</p>

<p float="left">
  <img src="https://github.com/muchaisam/Tours-Travel/blob/main/screenshots/1.png" width="45%" />
  <img src="https://github.com/muchaisam/Tours-Travel/blob/main/screenshots/8.png" width="45%" /> 
</p>

## Architecture

```
┌─────────────────────────────────────────────────────────────────┐
│                         Frontend (Blade)                         │
│  welcome.blade.php │ packages.blade.php │ blog.blade.php │ etc  │
└─────────────────────────────────┬───────────────────────────────┘
                                  │
┌─────────────────────────────────▼───────────────────────────────┐
│                           Controllers                            │
│  HomeController │ PostController │ BlogController │ CartController│
└─────────────────────────────────┬───────────────────────────────┘
                                  │
┌─────────────────────────────────▼───────────────────────────────┐
│                         Eloquent Models                          │
│   User │ Destinations │ Category │ Blog │ Cart │ Checkout │ Tag │
└─────────────────────────────────┬───────────────────────────────┘
                                  │
┌─────────────────────────────────▼───────────────────────────────┐
│                            MySQL Database                        │
└─────────────────────────────────────────────────────────────────┘
```

## Tech Stack

| Layer | Technology |
|-------|------------|
| Backend | Laravel 11, PHP 8.2+ |
| Frontend | Blade, Bootstrap 5, JavaScript |
| Database | MySQL |
| Payments | Stripe |
| Auth | Laravel UI |

## Project Structure

```
app/
├── Http/Controllers/
│   ├── HomeController.php        # Dashboard
│   ├── Packages/PostController.php  # Destinations CRUD
│   ├── BlogController.php        # Blog management
│   ├── CartController.php        # Shopping cart
│   └── CheckoutController.php    # Payment processing
├── Models/
│   ├── User.php
│   ├── Destinations.php
│   ├── Category.php
│   ├── Blog.php
│   ├── Cart.php
│   └── Tag.php
resources/views/
├── welcome.blade.php             # Homepage
├── packages.blade.php            # Destinations listing
├── blog.blade.php                # Blog listing
├── about.blade.php
├── contact.blade.php
├── partials/
│   ├── navbar.blade.php          # Shared navigation
│   └── footer.blade.php          # Shared footer
└── layouts/
    ├── front.blade.php           # Public layout
    └── app.blade.php             # Admin layout
```

## Getting Started

### Prerequisites
- PHP 8.2+
- Composer
- Node.js & NPM
- MySQL

### Installation

```bash
# Clone
git clone https://github.com/muchaisam/Tours-Travel.git
cd Tours-Travel

# Install dependencies
composer install
npm install

# Environment
cp .env.example .env
php artisan key:generate

# Configure .env with your database credentials
# DB_DATABASE=tours_travel
# DB_USERNAME=root
# DB_PASSWORD=

# Database
php artisan migrate --seed

# Run
php artisan serve
npm run dev
```

### Default Admin Login
```
Email: samadmin@gmail.com
Password: password
```

## Routes

| Route | Description |
|-------|-------------|
| `/` | Homepage |
| `/packages` | Browse destinations |
| `/packages/destinations/{id}` | Destination details |
| `/blog` | Blog posts |
| `/contact` | Contact form |
| `/about` | About page |
| `/home` | Admin dashboard |
| `/admin/destinations` | Manage destinations |
| `/admin/blogs` | Manage blog posts |
| `/admin/categories` | Manage categories |

## Environment Variables

```env
APP_NAME="ToursTravel Kenya"
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_DATABASE=tours_travel
DB_USERNAME=root
DB_PASSWORD=

STRIPE_KEY=pk_test_xxx
STRIPE_SECRET=sk_test_xxx
```

## Commands

```bash
php artisan serve              # Start server
npm run dev                    # Build assets
php artisan migrate:fresh --seed  # Reset database
php artisan cache:clear        # Clear cache
```

## License

MIT
