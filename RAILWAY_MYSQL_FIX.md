# Railway MySQL Connection Fix

## Problem
Your app is crashing with: `could not find driver (SQL: select * from...)`

## Root Causes
1. **Missing PHP MySQL Extensions** - PHP can't talk to MySQL
2. **Railway MySQL Variables Not Connected** - App doesn't know database credentials

## Solutions Applied

### 1. Updated nixpacks.toml
Added MySQL PHP extensions:
```toml
[phases.setup]
nixPkgs = ["php84", "php84Extensions.pdo", "php84Extensions.pdo_mysql", "php84Extensions.mysqli", ...]
```

### 2. Railway Environment Variables Setup

**CRITICAL: You need to set these in Railway Dashboard**

Go to your Railway service → Variables tab and verify these exist:

#### From MySQL Service (Auto-generated):
```
MYSQL_HOST=<your-mysql-host>
MYSQL_PORT=<usually-3306>
MYSQL_DATABASE=railway
MYSQL_USER=root  
MYSQL_PASSWORD=<generated-password>
MYSQLDATABASE=railway
MYSQLHOST=<your-mysql-host>
MYSQLPASSWORD=<generated-password>
MYSQLPORT=3306
MYSQLUSER=root
```

#### Laravel Database Variables (ADD THESE):
```
DB_CONNECTION=mysql
DB_HOST=${{MYSQL_HOST}}
DB_PORT=${{MYSQL_PORT}}
DB_DATABASE=${{MYSQL_DATABASE}}
DB_USERNAME=${{MYSQL_USER}}
DB_PASSWORD=${{MYSQL_PASSWORD}}
```

**Important**: Use `${{VARIABLE}}` syntax in Railway dashboard to reference other variables!

#### Other Required Variables:
```
APP_NAME=ToursTravel Kenya
APP_ENV=production
APP_DEBUG=false
APP_KEY=<generate-with-php-artisan-key-generate>
APP_URL=https://your-app.up.railway.app
SESSION_DRIVER=database
CACHE_DRIVER=file
QUEUE_CONNECTION=database
LOG_CHANNEL=stack
LOG_LEVEL=info
```

### 3. Generate APP_KEY

In Railway dashboard terminal or locally:
```bash
php artisan key:generate --show
```

Copy the output (including `base64:`) and set it as `APP_KEY` in Railway.

### 4. Connect MySQL Service to Your App

In Railway dashboard:
1. Click on your MySQL service
2. Click "Connect" or check "Connected Services"
3. Ensure your app service is listed
4. If not, click "+ New" and select your app service

This automatically creates the `MYSQL_*` environment variables.

### 5. Redeploy

After setting all variables:
1. Go to your app service
2. Click "Redeploy" or push a new commit
3. Monitor logs for successful database connection

## Verification

After deployment, logs should show:
```
✅ Migration table created.  
✅ Migrating: 2014_10_12_000000_create_users_table
✅ Migrated:  2014_10_12_000000_create_users_table
```

Instead of:
```
❌ could not find driver
```

## Quick Railway Dashboard Checklist

- [ ] MySQL service is running
- [ ] App service is connected to MySQL service  
- [ ] All `MYSQL_*` variables exist (auto-created)
- [ ] All `DB_*` variables manually added with `${{}}` references
- [ ] `APP_KEY` is generated and set
- [ ] Redeployed after setting variables

## If Still Failing

1. **Check MySQL service status** - ensure it's running
2. **Verify variable references** - use `${{MYSQL_HOST}}` not `${MYSQL_HOST}`
3. **Check logs** - look for connection error details
4. **Test database connection** in Railway terminal:
   ```bash
   railway run php artisan tinker
   >>> DB::connection()->getPdo();
   ```
