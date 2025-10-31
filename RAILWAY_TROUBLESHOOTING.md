# Railway Deployment Troubleshooting Guide

## Error: "Error creating build plan with Railpack"

### **What Caused This Error:**

The deployment failed during the **Build Image** phase with the error:
```
Error creating build plan with Railpack
```

### **Root Cause:**

The `nixpacks.toml` configuration file contained **invalid syntax** that Railway's Nixpacks builder couldn't parse:

#### **Problems Identified:**

1. **Invalid Section Structure**
   - ❌ Used `[build]` and `[[build.steps]]` (old syntax)
   - ✅ Should use `[phases.install]` and `[phases.build]` (current syntax)

2. **Mixed Configuration Formats**
   - Mixing `[build]` with `[[build.steps]]` created parsing conflicts
   - Nixpacks couldn't determine which format to follow

3. **Incorrect Phase Names**
   - `[build.env]` is not a valid nixpacks section
   - `[build.steps]` should be commands in `[phases.build]`

4. **Redundant Variables Section**
   - Railway auto-provides `$PORT` and environment variables
   - Hardcoded values conflicted with Railway's defaults

### **The Fix:**

Updated `nixpacks.toml` to use proper Nixpacks v1 syntax:

```toml
# BEFORE (Broken)
[provider]
name = "php"

[build]
cmd = "composer install"

[[build.steps]]
cmd = "npm ci"

# AFTER (Fixed)
[phases.setup]
nixPkgs = ["php84", "nodejs-18_x", "npm-9_x"]

[phases.install]
cmds = [
    "composer install --no-dev --optimize-autoloader",
    "npm ci --only=production"
]

[phases.build]
cmds = [
    "npm run production",
    "php artisan config:cache"
]
```

### **Key Changes Made:**

1. ✅ **Correct Phase Structure**
   - `[phases.setup]` - System packages
   - `[phases.install]` - Dependencies
   - `[phases.build]` - Build assets
   - `[start]` - Start command

2. ✅ **Array Commands**
   - Used `cmds = [...]` array format
   - Each command is a separate string

3. ✅ **Removed Invalid Sections**
   - Removed `[provider]`
   - Removed `[build.env]`
   - Removed `[variables]`

4. ✅ **Simplified Procfile**
   - Removed duplicate `db:seed` (should only run once manually)
   - Kept essential migration and serve commands

### **How Nixpacks Works:**

Railway uses **Nixpacks** to automatically build and deploy applications:

```
phases.setup    → Install system packages (PHP, Node)
      ↓
phases.install  → Install app dependencies (composer, npm)
      ↓
phases.build    → Build assets and cache (Laravel optimize)
      ↓
start           → Start the application server
```

### **Verification Steps:**

After pushing the fix, Railway should:

1. ✅ Successfully parse `nixpacks.toml`
2. ✅ Install PHP 8.4 and Node.js 18
3. ✅ Install composer and npm dependencies
4. ✅ Build production assets
5. ✅ Cache Laravel configs, routes, views
6. ✅ Run migrations
7. ✅ Start the server on port $PORT

### **What to Do If Deployment Still Fails:**

1. **Check Railway Logs**
   - Go to Railway dashboard → Deployments → View logs
   - Look for specific error messages

2. **Common Issues:**

   **Database Connection Failed:**
   ```bash
   # Verify MySQL service is running
   # Check these environment variables are set:
   MYSQL_HOST, MYSQL_PORT, MYSQL_DATABASE, MYSQL_USER, MYSQL_PASSWORD
   ```

   **Missing APP_KEY:**
   ```bash
   # Generate and set in Railway:
   railway run php artisan key:generate --show
   # Copy the output to APP_KEY variable
   ```

   **Composer Dependencies Failed:**
   ```bash
   # Check composer.json PHP version matches .php-version
   # Should be: "php": "^8.4"
   ```

3. **Manual Deployment Test**
   ```bash
   # Test nixpacks locally (if installed)
   nixpacks build . --name tours-travel
   
   # Or test phases manually
   composer install --no-dev --optimize-autoloader
   npm ci --only=production
   npm run production
   php artisan config:cache
   ```

### **Alternative: Remove nixpacks.toml**

If issues persist, Railway can **auto-detect** Laravel projects without `nixpacks.toml`:

1. Delete or rename `nixpacks.toml`
2. Railway will automatically detect:
   - PHP version from `.php-version` file
   - Laravel project from `composer.json`
   - Build steps from Laravel conventions

This is actually **simpler** and Railway is very good at auto-detection!

### **Current Configuration Status:**

✅ **nixpacks.toml** - Fixed with proper phase syntax  
✅ **Procfile** - Simplified start command  
✅ **.php-version** - Set to 8.4  
✅ **composer.json** - PHP 8.4 compatible  
✅ **Routes** - Duplicate destinations.edit removed  

### **Expected Result:**

Your ToursTravel Kenya application should now:
- ✅ Deploy successfully on Railway
- ✅ Use PHP 8.4 runtime
- ✅ Have all modern 2025 UI features
- ✅ Connect to Railway MySQL database
- ✅ Serve on Railway-provided domain

---

**Next Step:** Monitor the deployment in Railway dashboard. It should now succeed! 🚀
