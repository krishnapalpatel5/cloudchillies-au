<?php
/**
 * CSV Manager Class
 * Handles storing form submissions to CSV and retrieving records
 */
class CSVManager 
{
    private $csvFile;
    private $headers;

    public function __construct($csvFile = 'form_submissions.csv') 
    {
        $this->csvFile = $csvFile;
        $this->headers = [
            'Timestamp',
            'Name',
            'Email',
            'Mobile',
            'Country',
            'Company',
            'Subject',
            'Query',
            'Origin Page',
            'IP Address',
            'Domain'
        ];
        
        // Create CSV file with headers if it doesn't exist
        $this->initializeCSV();
    }

    /**
     * Initialize CSV file with headers if it doesn't exist
     */
    private function initializeCSV() 
    {
        if (!file_exists($this->csvFile)) {
            $handle = fopen($this->csvFile, 'w');
            if ($handle) {
                fputcsv($handle, $this->headers);
                fclose($handle);
            } else {
                throw new Exception("Unable to create CSV file: " . $this->csvFile);
            }
        }
    }

    /**
     * Store form submission data to CSV
     * 
     * @param array $data Form submission data
     * @return bool Success status
     */
    public function storeSubmission($data) 
    {
        try {
            $handle = fopen($this->csvFile, 'a');
            if (!$handle) {
                throw new Exception("Unable to open CSV file for writing");
            }

            $record = [
                date('Y-m-d H:i:s'), // Timestamp
                $data['name'] ?? '',
                $data['email'] ?? '',
                $data['mobile'] ?? '',
                $data['country'] ?? '',
                $data['company'] ?? '',
                $data['subject'] ?? '',
                $data['query'] ?? '',
                $data['origin_from'] ?? '',
                $data['ip_address'] ?? '',
                $data['domain'] ?? ''
            ];

            $result = fputcsv($handle, $record);
            fclose($handle);

            return $result !== false;
        } catch (Exception $e) {
            error_log("CSV Storage Error: " . $e->getMessage());
            return false;
        }
    }

    /**
     * Get all records from CSV
     * 
     * @return array Array of records
     */
    public function getAllRecords() 
    {
        $records = [];
        
        if (!file_exists($this->csvFile)) {
            return $records;
        }

        $handle = fopen($this->csvFile, 'r');
        if (!$handle) {
            return $records;
        }

        // Skip header row
        $headers = fgetcsv($handle);
        
        while (($row = fgetcsv($handle)) !== false) {
            if (count($row) === count($this->headers)) {
                $records[] = array_combine($this->headers, $row);
            }
        }
        
        fclose($handle);
        return array_reverse($records); // Show newest first
    }

    /**
     * Get paginated records
     * 
     * @param int $page Page number (1-based)
     * @param int $perPage Records per page
     * @return array Paginated data with records and pagination info
     */
    public function getPaginatedRecords($page = 1, $perPage = 10) 
    {
        $allRecords = $this->getAllRecords();
        $totalRecords = count($allRecords);
        $totalPages = ceil($totalRecords / $perPage);
        
        $offset = ($page - 1) * $perPage;
        $records = array_slice($allRecords, $offset, $perPage);
        
        return [
            'records' => $records,
            'pagination' => [
                'current_page' => $page,
                'per_page' => $perPage,
                'total_records' => $totalRecords,
                'total_pages' => $totalPages,
                'has_previous' => $page > 1,
                'has_next' => $page < $totalPages
            ]
        ];
    }

    /**
     * Search records by various criteria
     * 
     * @param string $searchTerm Search term
     * @param string $searchField Field to search in (optional)
     * @return array Matching records
     */
    public function searchRecords($searchTerm, $searchField = '') 
    {
        $allRecords = $this->getAllRecords();
        $results = [];
        
        foreach ($allRecords as $record) {
            $match = false;
            
            if (empty($searchField)) {
                // Search in all fields
                foreach ($record as $value) {
                    if (stripos($value, $searchTerm) !== false) {
                        $match = true;
                        break;
                    }
                }
            } else {
                // Search in specific field
                if (isset($record[$searchField]) && stripos($record[$searchField], $searchTerm) !== false) {
                    $match = true;
                }
            }
            
            if ($match) {
                $results[] = $record;
            }
        }
        
        return $results;
    }

    /**
     * Get records count
     * 
     * @return int Total number of records
     */
    public function getRecordsCount() 
    {
        $records = $this->getAllRecords();
        return count($records);
    }

    /**
     * Force download of CSV file
     */
    public function downloadCSV() 
    {
        if (!file_exists($this->csvFile)) {
            header('HTTP/1.0 404 Not Found');
            echo "CSV file not found";
            return;
        }

        $filename = 'form_submissions_' . date('Y-m-d_H-i-s') . '.csv';
        
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Content-Length: ' . filesize($this->csvFile));
        
        readfile($this->csvFile);
        exit();
    }

    /**
     * Get CSV file path
     * 
     * @return string CSV file path
     */
    public function getCSVFilePath() 
    {
        return $this->csvFile;
    }

    /**
     * Clear all records (use with caution)
     * 
     * @return bool Success status
     */
    public function clearAllRecords() 
    {
        $handle = fopen($this->csvFile, 'w');
        if ($handle) {
            fputcsv($handle, $this->headers);
            fclose($handle);
            return true;
        }
        return false;
    }
}
?>