# 🚂 Railway Deployment Guide - ToursTravel Kenya

## Prerequisites
- GitHub repository with your Laravel application
- Railway account (https://railway.app)
- Railway CLI installed (optional but recommended)

## Method 1: Deploy via Railway Dashboard (Recommended)

### Step 1: Create New Railway Project
1. Go to https://railway.app
2. Click "Start a New Project"
3. Select "Deploy from GitHub repo"
4. Choose your `Tours-Travel` repository
5. Railway will automatically detect it's a Laravel project

### Step 2: Add MySQL Database
1. In your Railway project dashboard
2. Click "New Service" → "Database" → "Add MySQL"
3. Railway will automatically provision a MySQL database
4. Database credentials will be available as environment variables

### Step 3: Configure Environment Variables
In Railway dashboard, add these environment variables:

**Required Variables:**
```
APP_KEY=base64:your-generated-key
APP_NAME=ToursTravel Kenya
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.up.railway.app
SESSION_DRIVER=database
CACHE_DRIVER=file
QUEUE_CONNECTION=database
```

**Mail Configuration (Optional):**
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@tourskenya.com
MAIL_FROM_NAME=ToursTravel Kenya
```

**Stripe Configuration:**
```
STRIPE_KEY=pk_live_your_live_public_key
STRIPE_SECRET=sk_live_your_live_secret_key
```

### Step 4: Generate Application Key
1. In Railway dashboard, open your service
2. Go to "Deployments" → "View Logs"
3. Once deployed, run this command in Railway's console:
   ```
   php artisan key:generate --show
   ```
4. Copy the generated key to your `APP_KEY` environment variable

### Step 5: Deploy
1. Railway will automatically deploy when you push to your repository
2. Monitor the deployment in the "Deployments" tab
3. Once complete, visit your Railway-provided URL

## Method 2: Deploy via Railway CLI

### Step 1: Install Railway CLI
```bash
npm install -g @railway/cli
```

### Step 2: Login and Initialize
```bash
railway login
cd Tours-Travel
railway init
```

### Step 3: Add Database
```bash
railway add --database mysql
```

### Step 4: Set Environment Variables
```bash
# Set application configuration
railway variables --set "APP_NAME=ToursTravel Kenya" --set "APP_ENV=production" --set "APP_DEBUG=false"

# Set Laravel-specific variables  
railway variables --set "SESSION_DRIVER=database" --set "CACHE_DRIVER=file" --set "QUEUE_CONNECTION=database"
```

### Step 5: Generate and Set App Key
```bash
# Generate key locally
php artisan key:generate --show

# Set the key (replace with your actual generated key)
railway variables --set "APP_KEY=base64:your-generated-key-here"
```

### Step 6: Deploy
```bash
railway up
```

## Post-Deployment Steps

### 1. Verify Database Setup
1. Check Railway logs to ensure migrations ran successfully
2. Verify the admin user exists:
   - Email: samadmin@gmail.com
   - Password: password

### 2. Test Key Features
- [ ] Homepage loads correctly
- [ ] User registration/login works
- [ ] Admin dashboard accessible
- [ ] Destinations page displays content
- [ ] Blog section functional
- [ ] Contact form submits (if mail configured)

### 3. Configure Custom Domain (Optional)
1. In Railway dashboard → Settings → Domains
2. Add your custom domain
3. Update `APP_URL` environment variable

### 4. Set up Monitoring
- Monitor deployment logs in Railway dashboard
- Set up error tracking if needed
- Configure backup strategy for database

## Environment Variables Reference

### Database (Auto-configured by Railway MySQL plugin)
```
MYSQL_HOST=containers-us-west-xxx.railway.app
MYSQL_PORT=7xxx
MYSQL_DATABASE=railway
MYSQL_USER=root
MYSQL_PASSWORD=xxx-generated-password-xxx
```

### Application
```
APP_NAME=ToursTravel Kenya
APP_ENV=production
APP_KEY=base64:your-generated-32-char-key
APP_DEBUG=false
APP_URL=https://your-app.up.railway.app
```

### Session & Cache
```
SESSION_DRIVER=database
SESSION_LIFETIME=120
CACHE_DRIVER=file
QUEUE_CONNECTION=database
```

## Troubleshooting

### Common Issues:

**1. Database Connection Failed**
- Verify MySQL service is running in Railway
- Check database environment variables are set correctly

**2. 500 Internal Server Error**
- Check Railway deployment logs
- Verify APP_KEY is set
- Ensure all required environment variables are configured

**3. Assets Not Loading**
- Verify `npm run production` completed successfully
- Check if `storage:link` command ran

**4. Migration Errors**  
- Check if database is accessible
- Verify MySQL version compatibility
- Check for existing table conflicts

### Getting Help:
1. Check Railway deployment logs first
2. Review Laravel logs in storage/logs/
3. Verify all environment variables are set
4. Test database connection separately

## Success Indicators

✅ **Deployment Successful When:**
- Application loads at Railway URL
- Admin login (samadmin@gmail.com/password) works
- Database shows seeded destinations and blogs
- All pages render without errors
- Modern 2025 design is visible

## Cost Estimation

**Railway Pricing:**
- Hobby Plan: $5/month per service
- MySQL Database: $5/month  
- **Total: ~$10/month** for production hosting

**Included:**
- 500GB bandwidth
- Automatic SSL certificates
- Git-based deployments
- Environment variable management
- Database backups

Perfect for a portfolio/production ToursTravel Kenya application!