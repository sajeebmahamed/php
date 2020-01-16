<!-- Write a e PHP script to display string, values within a table. -->
<?php
    $a = 6000;
    $b = 5000;
    $c = 6000;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border = "1">
        <tr>
            <td>Salary of Mr. A is <?php echo $a ?></td> 
            <td>Salary of Mr. B is <?php echo $b ?></td>   
            <td>Salary of Mr. C is <?php echo $c ?></td> 
        </tr>
    </table>
</body>
</html>