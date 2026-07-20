# Email Configuration Setup

## Issue
Contact form shows: "Sorry, there was an error sending your message."

## Solution

### Step 1: Configure .env File

Add/update these lines in your `.env` file:

```env
# Mail Configuration
MAIL_MAILER=smtp
MAIL_HOST=smtp.sendgrid.net
MAIL_PORT=587
MAIL_USERNAME=apikey
MAIL_PASSWORD=your_sendgrid_api_key_here
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@yourdomain.com
MAIL_FROM_NAME="V4Peace"
MAIL_TO_ADDRESS=rijo.paul1990@gmail.com
```

### Step 2: SendGrid Setup (Recommended)

1. Go to https://sendgrid.com/
2. Sign up for a free account (100 emails/day free)
3. Create an API Key:
   - Go to Settings → API Keys
   - Click "Create API Key"
   - Name: "V4Peace Contact Form"
   - Permissions: "Full Access" or "Mail Send"
   - Copy the API key

4. Update `.env`:
   ```env
   MAIL_PASSWORD=SG.your_actual_sendgrid_api_key
   ```

### Step 3: Alternative - Gmail SMTP (Not Recommended for Production)

If using Gmail (for testing only):

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-specific-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="V4Peace"
```

**Important for Gmail:**
- Enable "Less secure app access" OR
- Use App-Specific Password (recommended):
  1. Go to Google Account Settings
  2. Security → 2-Step Verification
  3. App passwords → Generate password
  4. Use that password in MAIL_PASSWORD

### Step 4: Alternative - Log Driver (For Testing)

If you just want to test without sending real emails:

```env
MAIL_MAILER=log
```

Emails will be saved to `storage/logs/laravel.log` instead of being sent.

### Step 5: Clear Config Cache

After updating `.env`, run:

```bash
php artisan config:clear
php artisan cache:clear
```

### Step 6: Test the Form

1. Visit your homepage
2. Scroll to contact form
3. Fill in the form
4. Submit
5. Check for success message

### Troubleshooting

#### Check Laravel Logs
```bash
tail -f storage/logs/laravel.log
```

#### Verify Mail Configuration
Create a test route to check mail config:
```php
Route::get('/test-mail', function() {
    dd(config('mail'));
});
```

#### Common Errors

1. **"Connection refused"**
   - Wrong MAIL_HOST or MAIL_PORT
   - Firewall blocking outgoing SMTP

2. **"Authentication failed"**
   - Wrong MAIL_USERNAME or MAIL_PASSWORD
   - Need to enable "less secure apps" for Gmail

3. **"Connection timeout"**
   - Server blocks port 587 or 465
   - Try different MAIL_PORT (25, 465, 587, 2525)

4. **SendGrid specific errors**
   - API key not set correctly
   - Verify sender email in SendGrid

### Recommended Production Setup

**SendGrid** (Free tier: 100 emails/day)
- Most reliable
- No server configuration needed
- Good deliverability

**Mailgun** (Free tier: 5,000 emails/month)
- Good alternative to SendGrid

**AWS SES** (Cheapest for high volume)
- $0.10 per 1,000 emails

### Current Configuration

Your current setup uses:
- Driver: SMTP (SendGrid)
- From: Check MAIL_FROM_ADDRESS in `.env`
- To: MAIL_TO_ADDRESS or default to rijo.paul1990@gmail.com

Update your `.env` file with the correct credentials and the contact form will work!

