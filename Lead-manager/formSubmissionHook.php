<?php
/**
 * Form Submission Hook
 * Add this to your form processing to store data in CSV
 */

require_once 'CSVManager.php';

/**
 * Hook function to store form submission data
 * Call this function after successful form processing
 * 
 * @param array $formData Array containing form data
 * @param string $csvFile Optional custom CSV file path
 * @return bool Success status
 */
function storeFormSubmission($formData, $csvFile = 'form_submissions.csv') 
{
    try {

        $csvFile = dirname(__FILE__) . DIRECTORY_SEPARATOR . $csvFile;
        $csvManager = new CSVManager($csvFile);
        
        // Prepare data array for CSV storage
        $dataToStore = [
            'name' => $formData['name'] ?? $formData['full_name'] ?? '',
            'email' => $formData['email'] ?? '',
            'mobile' => $formData['mobile'] ?? $formData['phone_no'] ?? '',
            'country' => $formData['country'] ?? '',
            'company' => $formData['company'] ?? $formData['company_name'] ?? '',
            'subject' => $formData['subject'] ?? '',
            'query' => $formData['query'] ?? $formData['question'] ?? '',
            'origin_from' => $formData['origin_from'] ?? $formData['callingPage'] ?? '',
            'ip_address' => getClientIpAddress(),
            'domain' => getClientDomain()
        ];

        return $csvManager->storeSubmission($dataToStore);
    } catch (Exception $e) {
        error_log("Form submission storage error: " . $e->getMessage());
        return false;
    }
}

/**
 * Simple function to log form submission with minimal data
 * 
 * @param string $name
 * @param string $email
 * @param string $message
 * @param string $csvFile
 * @return bool
 */
function logFormSubmission($name, $email, $message = '', $csvFile = 'form_submissions.csv') 
{
    $formData = [
        'name' => $name,
        'email' => $email,
        'query' => $message,
        'origin_from' => $_SERVER['HTTP_REFERER'] ?? 'Direct'
    ];
    
    return storeFormSubmission($formData, $csvFile);
}

/**
 * Enhanced function to get IP address considering proxies and load balancers
 */
function getClientIpAddress() {
    $ipKeys = ['HTTP_X_FORWARDED_FOR', 'HTTP_X_REAL_IP', 'HTTP_CLIENT_IP', 'REMOTE_ADDR'];
    
    foreach ($ipKeys as $key) {
        if (!empty($_SERVER[$key])) {
            $ip = $_SERVER[$key];
            // Handle comma-separated IPs (for forwarded headers)
            if (strpos($ip, ',') !== false) {
                $ip = trim(explode(',', $ip)[0]);
            }
            // Validate IP
            if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
                return $ip;
            }
        }
    }
    
    return $_SERVER['REMOTE_ADDR'] ?? 'unknown';
}

/**
 * Get domain with subdomain detection
 */
function getClientDomain() {
    $domain = $_SERVER['HTTP_HOST'] ?? 'unknown';
    
    // Extract TLD information for multi-domain tracking
    $domainParts = explode('.', $domain);
    if (count($domainParts) >= 2) {
        $tld = end($domainParts);
        $secondLevel = $domainParts[count($domainParts) - 2];
        return $secondLevel . '.' . $tld;
    }
    
    return $domain;
}
?>