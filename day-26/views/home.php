<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
   <section class="py-5 bg-secondary-subtle">
       <div class="container">
           <div class="row">
               <div class="col">
                   <h1><?php echo $a ?></h1>
                   <table class="table">
                       <thead>
                       <tr>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Mobile</th>
                       </tr>
                       </thead>
                       <tbody>
                           <?php foreach ($students as $student) { ?>
                           <tr>
                               <td><?php echo $student['name'];?></td>
                               <td><?php echo $student['email'];?></td>
                               <td><?php echo $student['mobile'];?></td>
                           </tr>
                           <?php } ?>
                       </tbody>
                   </table>
               </div>
           </div>
       </div>
   </section>

    <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
