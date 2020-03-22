<?php
defined('BASEPATH') or exit('No direct script access allowed');
//I'm the user view
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Table</title>
</head>
<body>
<table>
    <tr>
        <th>NAME</th> <th>COMPANY</th> <th>TELNUM</th>
    </tr>
    <?php
foreach ($userayy as $key => $value) {
    echo "<tr>
            <td>" . $value['firstname'] . "</td>
            <td>" . $value['lastname'] . "</td>
            <td>" . $value['DOB'] . "</td>
            </tr>";
}
?>
</table>
</body>
</html>

<!-- <?php
echo "<pre>";
print_r($userayy);
echo "</pre>";
?> -->
