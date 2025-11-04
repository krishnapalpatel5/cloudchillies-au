# Dashboard Password Protection

## Overview
The Form Submissions Dashboard is now password protected to prevent unauthorized access to sensitive form data.

## Security Features

### 1. **Static Password Authentication**
- Default password: ``
- Can be changed in `dashboard_config.php`

### 2. **Session Management**
- Sessions automatically expire after 1 hour of inactivity
- User must re-authenticate after session timeout

### 3. **Brute Force Protection**
- Maximum 5 login attempts per IP address
- 15-minute lockout after exceeding attempts
- Automatic attempt counter reset after lockout period

### 4. **Secure Logout**
- Logout button available in dashboard header
- Complete session destruction on logout
- Confirmation dialog before logout

## Files Added/Modified

### New Files:
1. **`dashboard_login.html`** - Login form template
2. **`dashboard_config.php`** - Security configuration and helper functions

### Modified Files:
1. **`dashboard.php`** - Added authentication logic
2. **`dashboard_template.html`** - Added logout button and styling

## Configuration

### Changing the Password
Edit `dashboard_config.php` and modify the password:
```php
define('DASHBOARD_PASSWORD', 'your_new_password_here');
```

### Adjusting Security Settings
In `dashboard_config.php`, you can modify:
- `SESSION_TIMEOUT` - Session duration (default: 1 hour)
- `MAX_LOGIN_ATTEMPTS` - Failed attempts before lockout (default: 5)
- `LOGIN_LOCKOUT_TIME` - Lockout duration (default: 15 minutes)

## Usage

### Accessing the Dashboard
1. Navigate to `dashboard.php`
2. Enter the password: `admin@123` (or your custom password)
3. Click "Access Dashboard"

### Logging Out
- Click the "Logout" button in the dashboard header
- Confirm the logout action

### Troubleshooting
- **Locked out?** Wait 15 minutes or delete `login_attempts.json`
- **Session expired?** Simply log in again
- **Forgot password?** Check `dashboard_config.php`

## Security Recommendations

1. **Change the default password** immediately
2. **Use a strong password** with mixed characters
3. **Regularly monitor** the `login_attempts.json` file
4. **Consider adding HTTPS** for production use
5. **Implement IP whitelisting** for additional security

## File Permissions
Ensure the following files are writable by the web server:
- `login_attempts.json` (auto-created)
- `form_submissions.csv`

## Production Considerations
- Move password to environment variables
- Implement database-based session storage
- Add audit logging
- Use HTTPS encryption
- Consider two-factor authentication