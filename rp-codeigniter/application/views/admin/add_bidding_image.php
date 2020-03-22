<?php include 'includes/header.php';
    if($this->session->flashdata('err'))
    {
    echo "<h3>".$this->session->flashdata('err')."</h3>";
    }
    ?>
    <div class="container py-4">
        <?php echo $error;?>
        <div class="form-inline">
            <?php echo form_open_multipart('upload/do_upload');?>
            <div class="form-row align-items">
                <div class="col-auto my-1">
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="userfile">
                </div>
                <div class="col-auto my-1">
                    <button type="submit" class="btn btn-primary">Upload Image</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    <div class="container py-4">
        <table class="table table-dark w-50 p-3">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if($fetch_data->num_rows() > 0)
            {
                foreach ($fetch_data->result() as $row)
                {
                    ?>
                    <tr>
                        <td><?php echo $row->id; ?></td>
                        <td><?php echo $row->name; ?></td>
                    </tr>
                    <?php
                }
            }
            else
            {
                ?>
                <tr>
                    <td colspan="3">No Data Found</td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>

<?php include 'includes/footer.php'; ?>