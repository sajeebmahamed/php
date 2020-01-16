<!-- Write a PHP script to display source code of a webpage (e.g. "http://www.example.com/"). -->
<?php
    $lines = file('https://www.google.com');
    foreach($lines as $line_num => $line)
    {
        echo "Line No.{$line_num}: ".htmlspecialchars($line);
        // echo json_encode("Line No.{$line_num}: ".htmlspecialchars($line));
    }
?>