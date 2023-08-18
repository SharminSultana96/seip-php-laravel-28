<?php include 'header.php'; ?>

<section class="py-5 bg-secondary-subtle">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <img src="<?php echo $product['image']; ?>" alt="" height="600"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h4><?php echo $product['name']; ?></h4>
                    <p><?php echo $product['price']; ?></p>
                    <p><?php echo $product['description']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
