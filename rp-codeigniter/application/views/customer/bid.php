<?php include 'includes/header.php'?>

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col">
            <h5 align="center">Ongoing Biddings</h5><br>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php foreach ($img_data->result() as $key => $value ): ?>
                        <?php if($key == 0): ?>
                            <li data-target="#carouselExampleIndicators" data-slide-to="<?=$key ?>" class="active"></li>
                        <?php else: ?>
                            <li data-target="#carouselExampleIndicators" data-slide-to="<?=$key ?>"></li>
                        <?php endif ?>
                    <?php endforeach ?>
                </ol>
                <div class="carousel-inner">
                    <?php foreach ($img_data->result() as $key => $row): ?>
                        <?php if($key == 0): ?>
                            <div class="carousel-item active" style="height: 500px">
                                <img src="<?= base_url() ?>uploads/<?= $row->name ?>" class="d-block w-100" alt="...">
                                <?php echo form_open_multipart('Bidding/get_details');?>
                                <div class="carousel-caption d-none d-md-block">
                                    <label for="exampleFormControlSelect1" style="float: left;text-align: center">Image ID : </label>
                                    <input name="img_id" style="float: left;border-radius: 5px;text-align: center " class="form-group mx-sm-3 mb-2" type="text" readonly value="<?php echo $row->id ?>" readonly>
                                    <button style="float: right" type="submit" class="btn btn-warning">Click Here to Add a Bid</button>
                                </div>
                                </form>
                            </div>
                        <?php else: ?>
                            <div class="carousel-item" style="height: 500px">
                                <img src="<?= base_url() ?>uploads/<?= $row->name ?>" class="d-block w-100" alt="...">
                                <?php echo form_open_multipart('Bidding/get_details');?>
                                <div class="carousel-caption d-none d-md-block">
                                    <label for="exampleFormControlSelect1" style="float: left;text-align: center">Image ID : </label>
                                    <input name="img_id" style="float: left;border-radius: 5px;text-align: center" class="form-group mx-sm-3 mb-2" type="text" readonly value="<?php echo $row->id ?>" readonly>
                                    <button  style="float: right" type="submit" class="btn btn-warning">Click Here to Add a Bid</button>
                                </div>
                                </form>
                            </div>
                        <?php endif ?>
                    <?php endforeach ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'?>
