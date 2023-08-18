<?php include 'header.php'?>

<section class="py-5 bg-dark-subtle">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1><?php $p; ?></h1>
                <div class="card">
                    <?php foreach ($products as $product) { ?>
                    <img src="assets/img/project-7.jpg<?php echo $product['image'] ; ?>" alt="" class="card-img-top"/>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['name']; ?></h5>
                        <p class="card-title"><?php echo $product['price']; ?></p>
                        <p class="card-text"><?php echo $product['description']; ?></p>
                        <hr/>
                        <a href="" class="btn btn-outline-success">Read More</a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php';?>
