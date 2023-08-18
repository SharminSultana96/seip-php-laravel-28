<?php include "header.php"; ?>

<!--banner section start-->
    <div class="carousel slide" id="slider" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/banner1.jpg" alt="" class="w-100" height="700"/>
            </div>

            <div class="carousel-item">
                <img src="assets/img/banner2.jpg" alt="" class="w-100" height="700"/>
            </div>

            <div class="carousel-item">
                <img src="assets/img/banner3.jpg" alt="" class="w-100" height="700"/>
            </div>

            <div class="carousel-item">
                <img src="assets/img/banner4.jpg" alt="" class="w-100" height="700"/>
            </div>
        </div>

        <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#slider" class="carousel-control-next" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
<!--banner section end-->

<section class="py-5 bg-info-subtle">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card card-body">
                    <h4>Popular Product</h4>
                    <hr/>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <?php foreach ($products as $product) { ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="<?php echo $product['image']; ?>" alt="" class="card-img-top" height="400"/>
                    <div class="card-body">
                        <h4><?php echo $product['name']; ?></h4>
                        <p><?php echo $product['price']; ?></p>
                        <hr/>
                        <a href="" class="btn btn-outline-primary">Details</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include "footer.php";?>


