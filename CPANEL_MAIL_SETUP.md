# cPanel Mail Configuration for V4Peace

## Your Mail Server Details

Based on your cPanel configuration, update your `.env` file with:

```env
MAIL_MAILER=smtp
MAIL_HOST=mail.v4peace.com
MAIL_PORT=465
MAIL_USERNAME=_mainaccount@v4peace.com
MAIL_PASSWORD=your_cpanel_password_here
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=v4peacecounselling@gmail.com
MAIL_FROM_NAME="V4Peace Counselling"
MAIL_TO_ADDRESS=rijo.paul1990@gmail.com
```

## Important Notes

1. **MAIL_PORT**: Use `465` (SSL) as shown in your cPanel settings
2. **MAIL_ENCRYPTION**: Use `ssl` (not `tls`) for port 465
3. **MAIL_USERNAME**: Use `_mainaccount@v4peace.com`
4. **MAIL_PASSWORD**: Your cPanel account password
5. **MAIL_HOST**: `mail.v4peace.com`

## Alternative: Use Port 587 with TLS

If port 465 doesn't work, try:

```env
MAIL_PORT=587
MAIL_ENCRYPTION=tls
```

## After Updating .env

Clear the configuration cache:

```bash
php artisan config:clear
php artisan cache:clear
```

## Test the Contact Form

1. Fill out the contact form on your website
2. Submit the form
3. Check if you receive the email at rijo.paul1990@gmail.com

## Troubleshooting

### If Still Getting Errors:

1. **Check cPanel password** - Make sure it's correct
2. **Check firewall** - Port 465/587 should be open
3. **Check email account exists** - Verify _mainaccount@v4peace.com exists
4. **Try different port** - Switch between 465 (ssl) and 587 (tls)

### Common cPanel Mail Issues:

- **Wrong encryption**: Port 465 = ssl, Port 587 = tls
- **Username format**: Use full email (e.g., _mainaccount@v4peace.com)
- **Password special characters**: Escape if needed

## Current Setup

Your contact form will now use:
- **Outgoing Server**: mail.v4peace.com
- **Port**: 465
- **Encryption**: SSL
- **From**: v4peacecounselling@gmail.com
- **To**: rijo.paul1990@gmail.com
- **Reply-To**: User's email (from form)

This is the standard cPanel mail configuration and should work with your hosting!

