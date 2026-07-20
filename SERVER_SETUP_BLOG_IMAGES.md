# Server Setup for Blog Images

## Issue
Blog images work locally but not on the server hosting.

## Solution

### Step 1: Create Storage Symlink on Server

Run this command on your server via SSH:

```bash
php artisan storage:link
```

This creates a symbolic link from `public/storage` to `storage/app/public`.

### Step 2: Verify Symlink

Check if the symlink was created:

```bash
ls -la public/storage
```

You should see something like:
```
storage -> ../storage/app/public
```

### Step 3: If Symlink Fails (Windows Server)

On Windows servers, you might need to create the symlink manually or use a different approach.

**Option A: Manual Symlink (Windows PowerShell - Run as Administrator)**
```powershell
New-Item -ItemType SymbolicLink -Path "public\storage" -Target "..\storage\app\public"
```

**Option B: Copy Files Instead (Alternative)**
If symlinks don't work, you can set up a script to copy files or change the storage path.

### Step 4: Set Permissions (Linux Server)

If on Linux, ensure proper permissions:

```bash
chmod -R 775 storage
chown -R www-data:www-data storage
chmod -R 775 public/storage
chown -R www-data:www-data public/storage
```

### Step 5: Verify File Structure

Your file structure should be:
```
project/
├── public/
│   └── storage/ → (symlink to storage/app/public)
├── storage/
│   └── app/
│       └── public/
│           └── blogs/
│               └── (your image files)
```

### Step 6: Check .env File

Ensure your `APP_URL` in `.env` is correct:

```env
APP_URL=https://yourdomain.com
```

### Step 7: Clear Cache

After setting up, clear Laravel cache:

```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

## Troubleshooting

### Images still not showing?

1. **Check file permissions**: Images should be readable by web server
2. **Check file paths**: Verify images are in `storage/app/public/blogs/`
3. **Check symlink**: Ensure `public/storage` links to `storage/app/public`
4. **Check .htaccess**: Ensure mod_rewrite is enabled (Apache)
5. **Check web server config**: Nginx/Apache should allow following symlinks

### Alternative: Direct File Access

If symlinks don't work, you can modify the storage configuration in `config/filesystems.php` to use a different disk or modify the image path logic.

## Testing

After setup, upload a new blog post with an image and verify:
1. Image is saved in `storage/app/public/blogs/`
2. Image is accessible via `https://yourdomain.com/storage/blogs/filename.jpg`
3. Image displays on blog listing page
4. Image displays on blog detail page

