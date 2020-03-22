<!DOCTYPE >
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>

<head>    
    <title>Login</title>
    <link rel='stylesheet' href="<?php echo base_url('application\views\templates\bootstrap.min.css'); ?>">
</head>

<body>
    <div class=" table table-responsive">
        <table class="table table-boarderd">
            <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>User Password</th>
            </tr>
            <?php
                if($fetch_data ->num_rows() > 0){
                    
                    foreach($fetch_data->result() as $row){
                        ?>
                        <tr class="text-center">
                            <td><?php echo $row->ID ?></td>
                            <td><?php echo $row->USER ?></td>
                            <td><?php echo $row->PWD ?></td>
                        </tr>
                    <?php
                    }
                }else{
                    ?>
                    <tr>
                        <td>No Data Found</td>
                    </tr>
                    <?php
                }

            ?>

        </table>

    </div>
</body>
</html>