<!-- Write a PHP script to get the time of the last modification of the current page -->
<?php
    echo date ("F d Y H:i:s.", getlastmod());
?>