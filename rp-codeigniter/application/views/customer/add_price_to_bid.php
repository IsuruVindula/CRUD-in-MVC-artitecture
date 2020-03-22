<?php include 'includes/header.php'?>

    <?php echo form_open_multipart('Bidding/enter_cus_bid');?>
        <h2 align="center" style="margin-top: 25px">Enter Your Bid Here !!!</h2>
        <div class="col ml-5" style="width: 800px;display: inline-block">
            <div class="form-group">
                <label for="exampleFormControlInput1">Image Name</label>
                <input name="img_name" type="text" class="form-control" id="exampleFormControlInput1" readonly value="<?php echo $img_details->name; ?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Art Discription</label>
                <textarea name="img_dis" class="form-control" id="exampleFormControlTextarea1" readonly rows="5"><?php echo $img_details->discription; ?></textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Enter Your ID</label>
                <input name="cus_id" type="text" class="form-control" id="exampleFormControlInput1" readonly value="<?php echo $this->session->userdata('user_id'); ?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Enter Your Bid</label>
                <input name="cus_bid" type="text" class="form-control" id="exampleFormControlInput1" required placeholder="Bidding Price">
            </div>

        </div>

        <div class="card mr-5" style="width: 25rem;margin-top: 50px;float: right ">
            <img src="<?= base_url() ?>uploads/<?php echo $img_details->name; ?>" class="card-img" alt="...">
            <div class="card-body" align="center">
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-5 col-form-label">Image ID : </label>
                    <div class="col-sm-5">
                        <input name="img_id" type="text" class="form-control" id="inputPassword" readonly value="<?php echo $img_details->id; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-5 col-form-label">Max Bid (LKR) : </label>
                    <div class="col-sm-5">
                        <input name="m_bid" type="text" class="form-control" id="inputPassword" readonly value="<?php echo $max_bid; ?>">
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" id="exampleFormControlInput1" value="Confirm BID">
            </div>
        </div>
    </form>
<?php include 'includes/footer.php'?>
