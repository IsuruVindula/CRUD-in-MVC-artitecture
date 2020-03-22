<?php include 'includes/header.php';?>
    <?php
    if($this->session->flashdata('delete_success'))
    {
    echo "<h3>".$this->session->flashdata('delete_success')."</h3>";
    }
    if($this->session->flashdata('delete_failed'))
    {
    echo "<h3>".$this->session->flashdata('delete_failed')."</h3>";
    }
    ?>

    <div class="container py-4">

        <div class="form-inline">
            <?php echo form_open_multipart('Delete/delete_img');?>
            <div class="form-row align-items">
                <div class="form-group">
                    <label for="exampleInputName2">Enter Image ID : </label>
                </div>
                <div class="col-auto my-1">
                    <input type="text" class="form-control" id="exampleInputName2" placeholder="Img ID" name="img_id">
                </div>
                <div class="col-auto my-1">
                    <button type="submit" class="btn btn-danger"> Delete </button>
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