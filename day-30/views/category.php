<?php include "header.php"?>

<section class="py-5 bg-secondary-subtle">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo $product['image']; ?>" alt="" height="330" class="card-img-top"/>
                    <div class="card-body">
                        <h4><?php echo $product['name']; ?>Product Name</h4>
                        <p><?php echo $product['price']; ?>Tk. 2500</p>
                        <hr/>
                        <a href="" class="btn btn-outline-primary">Details</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>