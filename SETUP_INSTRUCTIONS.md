# Laravel Project Setup Instructions for Windows

## Prerequisites
You need to install PHP and Composer first.

### Step 1: Install PHP

**Option A: Quick Install (Recommended)**
1. Download **Laragon** (includes PHP, MySQL, Composer): https://laragon.org/download/
2. Install Laragon
3. Open Laragon and start the server

**Option B: Manual Install**
1. Download PHP 8.0 from: https://windows.php.net/download/
2. Extract to `C:\php`
3. Add `C:\php` to your Windows PATH environment variable
4. Restart your terminal

### Step 2: Install Composer

1. Download Composer: https://getcomposer.org/download/
2. Run the Windows installer (Composer-Setup.exe)
3. It will automatically detect your PHP installation

### Step 3: Install Project Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies (if you want to compile assets)
npm install
```

### Step 4: Configure Environment

```bash
# Copy the example environment file
copy .env.example .env

# Generate application key
php artisan key:generate
```

### Step 5: Configure Database

Edit the `.env` file and set your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### Step 6: Run Database Migrations

```bash
# Create database tables
php artisan migrate

# Optional: Seed the database
php artisan db:seed
```

### Step 7: Start the Development Server

```bash
# Start Laravel development server
php artisan serve
```

The application will be available at: http://localhost:8000

---

## Quick Start (If Laragon is installed)

1. Open Laragon
2. Add this project folder to Laragon
3. Click "Start All"
4. Open the site URL shown in Laragon

---

## Common Issues

### PHP not found
- Make sure PHP is installed and added to PATH
- Restart your terminal after installing PHP

### Composer not found
- Make sure Composer is installed globally
- Restart your terminal after installing Composer

### Database connection error
- Make sure MySQL/MariaDB is running
- Check your database credentials in `.env` file

