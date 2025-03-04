<?php
// Define the filename
$filename = "hello.php";

// Content to write in the file
$content = '<?php echo "Hello, World!"; ?>';

// Create and write to the file
file_put_contents($filename, $content);

echo "File '$filename' created successfully!\n";
?>
