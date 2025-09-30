# 🇰🇪 ToursTravel Kenya

A modern, comprehensive travel booking platform showcasing Kenya's beautiful destinations. Built with Laravel 8, featuring a sleek  design, complete admin dashboard, and integrated payment processing.

## ✨ Features

### 🎨 **Modern  Design**
- **Gradient-based UI** with glassmorphism effects
- **Responsive Bootstrap 5.3** layout
- **Kenya-focused branding** and content
- **Dynamic authentication states**
- **AOS animations** and smooth transitions

### 🏝️ **Core Functionality**
- **Destination browsing** with advanced filtering
- **User authentication** with personalized experience  
- **Shopping cart** and booking system
- **Stripe payment integration**
- **Blog system** with rich content
- **Admin dashboard** with comprehensive management
- **Contact forms** and inquiry system

### 🛠️ **Admin Features**
- **Modern dashboard** with statistics overview
- **Destination management** (CRUD operations)
- **Category & Tag management**
- **Blog post management**
- **User management** (Admin only)
- **Trashed content recovery**

## 🔐 Login Credentials

### Admin Access
```
Email: samadmin@gmail.com
Password: password
Role: Administrator
```

**Admin Capabilities:**
- Full destination management
- User management and permissions
- Blog content management
- System statistics and analytics
- Category and tag administration

### Regular User
Create your own account via the registration page, or use the admin account to create additional users through the admin panel.

## 📱 Screenshots

### Modern Homepage
<p float="left">
  <img src="https://github.com/muchaisam/Tours-Travel/blob/main/screenshots/6.png" width="auto" />
  <img src="https://github.com/muchaisam/Tours-Travel/blob/main/screenshots/7.png" width="auto" /> 
</p>

### Destination & Cart
<p float="left">
  <img src="https://github.com/muchaisam/Tours-Travel/blob/main/screenshots/1.png" width="auto" />
  <img src="https://github.com/muchaisam/Tours-Travel/blob/main/screenshots/2.png" width="auto" /> 
</p>

### Booking & Payment
<p float="left">
  <img src="https://github.com/muchaisam/Tours-Travel/blob/master/screenshots/3.png" width="auto" />
  <img src="https://github.com/muchaisam/Tours-Travel/blob/main/screenshots/4.png" width="auto" />
</p>

### Blog & Admin
<p float="left">
  <img src="https://github.com/muchaisam/Tours-Travel/blob/main/screenshots/8.png" width="auto" />
  <img src="https://github.com/muchaisam/Tours-Travel/blob/main/screenshots/b.png" width="auto" />
</p>

## 🚀 Technology Stack

- **Backend**: Laravel 8.x (PHP 8.0+)
- **Frontend**: Bootstrap 5.3, FontAwesome 6.4, AOS animations
- **Database**: MySQL 
- **Payment**: Stripe Integration
- **Authentication**: Laravel Breeze/UI
- **Styling**: Modern CSS Grid, Glassmorphism, Gradients 

## ⚡ Quick Setup

### Prerequisites
- PHP 8.0 or higher
- Composer
- Node.js & NPM
- MySQL database
- Git

### 1. Clone Repository
```bash
git clone https://github.com/muchaisam/Tours-Travel.git
cd Tours-Travel
```

### 2. Install Dependencies
```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies  
npm install

# Build frontend assets
npm run dev
```

### 3. Environment Setup
```bash
# Create environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Database Configuration
Create a MySQL database and update your `.env` file:

```env
# Database Configuration
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tours_travel
DB_USERNAME=your_username
DB_PASSWORD=your_password

# App Configuration  
APP_NAME="ToursTravel Kenya"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

# Mail Configuration (Optional)
MAIL_MAILER=smtp
MAIL_HOST=your_smtp_host
MAIL_PORT=587
MAIL_USERNAME=your_email
MAIL_PASSWORD=your_password
```

### 5. Database Setup
```bash
# Run migrations and seed data
php artisan migrate --seed
```
This creates:
- All necessary database tables
- Admin user (samadmin@gmail.com)
- Sample destinations and blog posts
- Categories and tags

### 6. Payment Configuration (Optional)
For Stripe payment functionality, add to `.env`:
```env
STRIPE_KEY=pk_test_your_stripe_public_key
STRIPE_SECRET=sk_test_your_stripe_secret_key
```

### 7. Launch Application
```bash
# Start the development server
php artisan serve
```

Visit `http://localhost:8000` and login with:
- **Email**: samadmin@gmail.com  
- **Password**: password

## 🏗️ Project Structure

```
Tours-Travel/
├── app/
│   ├── Http/Controllers/
│   │   ├── HomeController.php          # Admin dashboard
│   │   ├── Packages/PostController.php # Destinations
│   │   └── ...
│   ├── Models/
│   │   ├── Destinations.php
│   │   ├── Blog.php
│   │   └── User.php
├── resources/
│   ├── views/
│   │   ├── welcome.blade.php           # Homepage ( design)
│   │   ├── home.blade.php             # Admin dashboard
│   │   ├── packages.blade.php         # Destinations listing
│   │   ├── desti/show.blade.php       # Individual destination
│   │   ├── blog.blade.php             # Blog listing
│   │   ├── about.blade.php            # About page
│   │   ├── contact.blade.php          # Contact page
│   │   └── layouts/
│   │       ├── front.blade.php        # Frontend layout
│   │       └── app.blade.php          # Admin layout
├── database/
│   ├── migrations/                    # Database schema
│   └── seeders/                       # Sample data
└── public/
    ├── images/                        # Project images
    └── css/                           # Compiled styles
```

## 🎯 Key Routes

### Frontend Routes
- `/` - Homepage with modern design
- `/packages` - Browse destinations
- `/packages/destinations/{destination}` - Individual destination
- `/blog` - Blog listing
- `/about` - About ToursTravel Kenya  
- `/contact` - Contact form

### Admin Routes (Authentication required)
- `/home` - Admin dashboard
- `/admin/destinations` - Manage destinations
- `/admin/categories` - Manage categories
- `/admin/tags` - Manage tags
- `/admin/blogs` - Manage blog posts
- `/admin/users` - User management (Admin only)

## 🔧 Development Commands

```bash
# Watch frontend changes
npm run watch

# Build for production
npm run production

# Clear application cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Database operations
php artisan migrate:fresh --seed    # Reset database
php artisan db:seed                 # Seed data only

# Generate new controller/model
php artisan make:controller ExampleController
php artisan make:model Example -m   # With migration
```

## 🚀 Deployment Ready

This application includes:
- ✅ Procfile for Heroku deployment
- ✅ Production-ready configurations  
- ✅ Optimized asset compilation
- ✅ Environment variable management
- ✅ Database migrations and seeders

Perfect for deployment on:
- **Railway** (Recommended)
- **DigitalOcean App Platform**  
- **Heroku**
- **Traditional hosting**

## 📝 Recent Updates (2025)

- 🎨 Complete UI modernization with new design trends
- 🇰🇪 Kenya-focused branding and content  
- 📱 Enhanced responsive design with Bootstrap 5.3
- 🔐 Improved authentication with personalized user experience
- 📊 Modern admin dashboard with statistics and analytics
- ⚡ Performance optimizations and code cleanup
- 💳 Maintained Stripe payment integration
- 🎯 SEO improvements and meta tag optimization

---

**Built with ❤️ for Kenya's Tourism Industry**