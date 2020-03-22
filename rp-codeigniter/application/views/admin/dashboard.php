<?php include 'includes/header.php';

if($this->session->flashdata('welcome'))
{
    echo "<h3>".$this->session->flashdata('welcome')."</h3>";
}
?>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="views/custom.css">
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <!-- <div class="card">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?= base_url() ?>homepage_images/a.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url() ?>homepage_images/b.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url() ?>homepage_images/c.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div> -->

    <div class="card">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <img src="<?= base_url() ?>assets/banner2.png" class="d-block w-100" alt="..." style="background-repeat: no-repeat; 
                                    width:100%;
                                    height:300px;
                                    background-position: center;
                                    background-size:cover;"
                        >
                            <div class="container" style="left: 50%;
                                position: absolute;
                                top: 45%;
                                transform: translate(-50%, -55%);
                                text-align: center;">
                                        
                                <h2 class="jumbotron-heading" style="color:#e6e6e6">The Art Marketplace</h2>
                                <h4 class=" lead " style="color:#e6e6e6">This is aimed at all artists (amateurs and professionals), art galleries and art lovers.<h4    >
                                <p class="lead "style="color:#e6e6e6" >Sign  up to get updates on your favorites artists </p>

                            </div>
                        
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url() ?>assets/banner4.jpg" class="d-block w-100" alt="..." style="background-repeat: no-repeat; 
                                        width:100%;
                                        height:300px;
                                        background-position: center;
                                        background-size:cover;"
                            >
                                <div class="container" style="left: 50%;
                                    position: absolute;
                                    top: 45%;
                                    transform: translate(-50%, -55%);
                                    text-align: center;">
                                            
                                    <h2 class="jumbotron-heading" style="color:#e6e6e6">The Art Marketplace</h2>
                                    <h4 class=" lead " style="color:#e6e6e6">This is aimed at all artists (amateurs and professionals), art galleries and art lovers.<h4    >
                                    <p class="lead "style="color:#e6e6e6" >Sign  up to get updates on your favorites artists </p>

                                </div>
                    </div>
                    <div class="carousel-item">

                        <img src="<?= base_url() ?>homepage_images/c.jpg" class="d-block w-100" alt="..." style="background-repeat: no-repeat; 
                                        width:100%;
                                        height:300px;
                                        background-position: center;
                                        background-size:cover;"
                            >
                                <div class="container" style="left: 50%;
                                    position: absolute;
                                    top: 45%;
                                    transform: translate(-50%, -55%);
                                    text-align: center;">
                                            
                                    <h2 class="jumbotron-heading" style="color:#e6e6e6">The Art Marketplace</h2>
                                    <h4 class=" lead " style="color:#e6e6e6">This is aimed at all artists (amateurs and professionals), art galleries and art lovers.<h4    >
                                    <p class="lead "style="color:#e6e6e6" >Sign  up to get updates on your favorites artists </p>

                                </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary active">Gallery Home</button>
                    <?php  echo anchor('welcome/loadClassicArts', 'Classic', ['class'=> 'btn btn-primary '] );?>
                    <?php  echo anchor('welcome/loadRomanceArts', 'Romance', ['class'=> 'btn btn-primary'] );?>
                    <?php  echo anchor('welcome/loadNatureArts', 'Nature', ['class'=> 'btn btn-primary'] );?>
                    <?php  echo anchor('welcome/loadPencilArts', 'Pencil-Arts', ['class'=> 'btn btn-primary'] );?> 
                </div>
            </div>
            <div class="col-xs-6 text-center">
                <?php  echo anchor('welcome/addNewArts', 'Add New Arts', ['class'=> 'btn btn-primary'] );?> 
            </div>
            
        </div>
    </div>
    

    
    
    
    
   
    
    <hr> 

        <div class="row ">
        <?php if(!empty($arts)){ foreach( $arts as $art){ ?>

        
            <div class="col-lg-4">
                <div class="thumbnail" >
                    
                    <img  style="width:100px, height:100px "src="<?php echo base_url('uploads/'.$art->Path); ?>"/>

                    

                    <?php $this->session->set_userdata("UpdateID",$art->Art_Id); ?>
                    <p> <?php echo $art->Art_Id?> </p>
                    <p> <?php echo $art->Art_Name?> </p>
                    <p> <?php echo $art->Artist_Name?> </p>
                    <p> <?php echo $art->Category?> </p>
                    <button type="button" class="btn btn-primary">View</button>
                    <?php  echo anchor('welcome/updateArts', 'Update', ['class'=> 'btn btn-info  btn-sm'] ); ?>
                    <?php  echo anchor('welcome/deleteArts', 'Delete', ['class'=> 'btn btn-danger  btn-sm'] ); ?>
                </div>
            </div>
        
        <?php } }else{ ?>
            <P>Image not found....</p>
        <?php } ?>      
        </div> 
                
    <br><hr>



<?php include 'includes/footer.php'; ?>