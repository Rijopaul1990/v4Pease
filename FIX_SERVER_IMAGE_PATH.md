# Fix Server Image Path Issue

## Problem
Images are generating URL: `https://v4peace.com/storage/blogs/...`
But actual working path: `https://v4peace.com/storage/app/public/blogs/...`

## Solution 1: Set Environment (Recommended)

In your server's `.env` file, set:

```env
APP_ENV=production
```

This will automatically use the full path (`storage/app/public/`) on the server.

## Solution 2: Always Use Full Path

If you want to always use the full path (works both locally and on server), you can modify the Blog model to always use:

```php
return asset('storage/app/public/' . $this->image);
```

## Solution 3: Fix Symlink on Server (Best Practice)

The proper Laravel way is to create the symlink. SSH into your server and run:

```bash
cd /path/to/your/project
php artisan storage:link
```

This creates: `public/storage` → `storage/app/public`

Then images will work at: `https://v4peace.com/storage/blogs/...`

## Current Fix Applied

The Blog model now checks:
- **If production environment**: Uses `storage/app/public/blogs/...` (your server)
- **If local/development**: Uses `storage/blogs/...` (with symlink fallback)

Make sure your `.env` file on the server has:
```env
APP_ENV=production
APP_DEBUG=false
```

## Verification

After setting `APP_ENV=production`, your images should load correctly at:
`https://v4peace.com/storage/app/public/blogs/[filename].jpg`

