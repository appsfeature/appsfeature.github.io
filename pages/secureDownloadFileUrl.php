<?php
// Path to your file
$file = '/path/to/your/file.pdf';

// Check if the file exists
if (file_exists($file)) {
    // Set headers
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="downloaded_file.pdf"'); // Name shown when downloading

    // Send the file to the browser
    readfile($file);
    exit; // Terminate the script after sending the file
} else {
    // File not found
    http_response_code(404);
    echo "File not found.";
    exit; // Terminate the script
}
?>
