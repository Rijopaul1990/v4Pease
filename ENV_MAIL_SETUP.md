# Fix: Address in mailbox given [] does not comply with RFC 2822

## Problem
The error means `MAIL_FROM_ADDRESS` is empty or not set in your `.env` file.

## Quick Fix

Add these lines to your `.env` file:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.sendgrid.net
MAIL_PORT=587
MAIL_USERNAME=apikey
MAIL_PASSWORD=YOUR_SENDGRID_API_KEY_HERE
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@v4peace.com
MAIL_FROM_NAME="V4Peace Counselling"
MAIL_TO_ADDRESS=rijo.paul1990@gmail.com
```

## Important Fields

### Required:
- `MAIL_FROM_ADDRESS` - Must be a valid email (e.g., noreply@v4peace.com)
- `MAIL_FROM_NAME` - Name shown in email (e.g., "V4Peace")
- `MAIL_PASSWORD` - Your SendGrid API key

### Optional:
- `MAIL_TO_ADDRESS` - Where emails are sent (defaults to rijo.paul1990@gmail.com)

## After Updating .env

Clear Laravel cache:
```bash
php artisan config:clear
php artisan cache:clear
```

## For Testing Without SendGrid

Use log driver to save emails to file instead:
```env
MAIL_MAILER=log
```

Then check `storage/logs/laravel.log` for the email content.

## The Fix Applied

Updated the ContactController to:
1. Use `noreply@v4peace.com` as default if MAIL_FROM_ADDRESS is empty
2. Better error logging
3. Show detailed error when debug mode is on

Now update your `.env` file and test the contact form again!

