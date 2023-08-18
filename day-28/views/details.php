<?php include 'header.php';?>

<section class="py-5 bg-dark-subtle">
    <div class="container">
        <h1 class="text-center">This is Details page</h1>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <img src="<?php echo $product['image'] ; ?>" alt=""/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body">
                    <h2>This is Product Name</h2>
                    <p>Tk. 55000</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, libero!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php';?>
