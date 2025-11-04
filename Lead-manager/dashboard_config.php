<?php
/**
 * Dashboard Configuration
 * Contains security settings and configuration for the dashboard
 */

// Dashboard Security Configuration
define('DASHBOARD_PASSWORD', '9R>T5p}8wu(e'); // Change this password for security
define('SESSION_TIMEOUT', 3600); // Session timeout in seconds (1 hour)

// CSV Configuration
define('CSV_FILE_PATH', 'form_submissions.csv');

// Dashboard Settings
define('RECORDS_PER_PAGE', 10);
define('MAX_SEARCH_RESULTS', 100);

// Security Settings
define('MAX_LOGIN_ATTEMPTS', 5);
define('LOGIN_LOCKOUT_TIME', 900); // 15 minutes in seconds

/**
 * Check if the current session is valid
 * @return bool
 */
function isSessionValid() {
    if (!isset($_SESSION['dashboard_authenticated']) || $_SESSION['dashboard_authenticated'] !== true) {
        return false;
    }
    
    // Check session timeout
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > SESSION_TIMEOUT)) {
        session_destroy();
        return false;
    }
    
    // Update last activity time
    $_SESSION['last_activity'] = time();
    return true;
}

/**
 * Get login attempt count for current IP
 * @return int
 */
function getLoginAttempts() {
    $ip = $_SERVER['REMOTE_ADDR'];
    $attemptsFile = 'login_attempts.json';
    
    if (!file_exists($attemptsFile)) {
        return 0;
    }
    
    $attempts = json_decode(file_get_contents($attemptsFile), true);
    if (!isset($attempts[$ip])) {
        return 0;
    }
    
    // Check if lockout time has passed
    if (time() - $attempts[$ip]['last_attempt'] > LOGIN_LOCKOUT_TIME) {
        unset($attempts[$ip]);
        file_put_contents($attemptsFile, json_encode($attempts));
        return 0;
    }
    
    return $attempts[$ip]['count'];
}

/**
 * Record a failed login attempt
 */
function recordFailedAttempt() {
    $ip = $_SERVER['REMOTE_ADDR'];
    $attemptsFile = 'login_attempts.json';
    
    $attempts = [];
    if (file_exists($attemptsFile)) {
        $attempts = json_decode(file_get_contents($attemptsFile), true);
    }
    
    if (!isset($attempts[$ip])) {
        $attempts[$ip] = ['count' => 0, 'last_attempt' => 0];
    }
    
    $attempts[$ip]['count']++;
    $attempts[$ip]['last_attempt'] = time();
    
    file_put_contents($attemptsFile, json_encode($attempts));
}

/**
 * Clear login attempts for current IP
 */
function clearLoginAttempts() {
    $ip = $_SERVER['REMOTE_ADDR'];
    $attemptsFile = 'login_attempts.json';
    
    if (!file_exists($attemptsFile)) {
        return;
    }
    
    $attempts = json_decode(file_get_contents($attemptsFile), true);
    if (isset($attempts[$ip])) {
        unset($attempts[$ip]);
        file_put_contents($attemptsFile, json_encode($attempts));
    }
}

/**
 * Check if IP is currently locked out
 * @return bool
 */
function isLockedOut() {
    return getLoginAttempts() >= MAX_LOGIN_ATTEMPTS;
}
?>