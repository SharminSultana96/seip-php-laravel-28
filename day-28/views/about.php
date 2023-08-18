<?php include 'header.php'?>

<section class="py-5 bg-dark-subtle">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="<?php echo $product['image'] ; ?>" alt="" class="card-img-top" height="400px" width="400px"/>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['name']; ?></h5>
                        <p class="card-title"><?php echo $product['price']; ?></p>
                        <p class="card-text"><?php echo $product['description']; ?></p>
                        <hr/>
                        <a href="action.php?page=details&&id=<?php echo $product['id']; ?>" class="btn btn-outline-success ">Read More</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include 'footer.php';?>
