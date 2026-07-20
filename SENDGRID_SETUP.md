# SendGrid Integration Setup Guide

This guide will help you configure SendGrid email functionality for the contact form.

## Prerequisites

1. A SendGrid account (sign up at https://sendgrid.com/)
2. A SendGrid API key

## Setup Instructions

### 1. Create a SendGrid API Key

1. Log in to your SendGrid account
2. Navigate to **Settings** > **API Keys**
3. Click **Create API Key**
4. Name your API key (e.g., "Laravel Contact Form")
5. Choose **Full Access** or **Restricted Access** with Mail Send permissions
6. Click **Create & View**
7. **Copy the API key** - you won't be able to see it again!

### 2. Configure Environment Variables

Add the following to your `.env` file:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.sendgrid.net
MAIL_PORT=587
MAIL_USERNAME=apikey
MAIL_PASSWORD=YOUR_SENDGRID_API_KEY_HERE
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-verified-email@yourdomain.com
MAIL_FROM_NAME="${APP_NAME}"
```

**Important:**
- Replace `YOUR_SENDGRID_API_KEY_HERE` with your actual SendGrid API key
- Replace `your-verified-email@yourdomain.com` with an email address verified in SendGrid
- The `MAIL_USERNAME` must be `apikey` (this is required by SendGrid)

### 3. Verify Your Email Domain in SendGrid

1. Go to **Settings** > **Sender Authentication**
2. Click **Authenticate Your Domain** or **Verify a Single Sender**
3. Follow the instructions to verify your email address or domain

### 4. Test the Contact Form

1. Visit your contact page at `/contactus`
2. Fill out the form with test data
3. Submit the form
4. Check your email inbox (the address specified in `MAIL_FROM_ADDRESS`)

## Troubleshooting

### Email Not Sending

1. **Check API Key**: Ensure your SendGrid API key is correct in `.env`
2. **Check Email Verification**: Make sure your sender email is verified in SendGrid
3. **Check Logs**: View Laravel logs at `storage/logs/laravel.log`
4. **Test with Different Service**: Temporarily switch to `MAIL_MAILER=log` to test form submission

### Form Validation Errors

If you see validation errors:
- Ensure all required fields are filled
- Check that email format is valid
- Verify CSRF token is included (should be automatic)

### Permission Errors

If you get permission errors:
- Ensure your SendGrid API key has Mail Send permissions
- Check that your SendGrid account is active and not on a trial restriction

## Alternative: Using Gmail SMTP (For Testing)

If you want to test without SendGrid, you can use Gmail:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="${APP_NAME}"
```

**Note:** For Gmail, you need to generate an App Password from your Google Account settings.

## Files Modified

- `app/Http/Controllers/ContactController.php` - Handles form submission
- `resources/views/contactus.blade.php` - Updated form with CSRF and validation
- `resources/views/emails/contact.blade.php` - Email template
- `routes/web.php` - Added contact route
- `config/mail.php` - Configured for SendGrid

## Support

For SendGrid-specific issues, visit: https://support.sendgrid.com/
For Laravel Mail issues, visit: https://laravel.com/docs/mail

