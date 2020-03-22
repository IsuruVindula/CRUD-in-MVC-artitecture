<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
        <table>

            <?php
                if($fetch_data ->num_rows() > 0){
                    
                    foreach($fetch_data->result() as $row){
                        ?>
                        <tr class="text-center">
                            <td><?php echo $row->name ?></td>
                            <td><?php echo $row->age ?></td>
                            <td><?php echo $row->gender ?></td>
                        </tr>
                    <?php
                    }
                }
                ?>
        </table>
    </div>
</body>
</html>