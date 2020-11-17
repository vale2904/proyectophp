<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
</head>
<body>
<header>

</header>
<main>

<?php

$productos=array(
"producto1"=>array("camisa",19000,"morado"),
"producto2"=>array("gorra",19000,"negro")
"producto3"=>array("jean",20000,"azul")
"producto4"=>array("jean",20000,"nazul")
);
print_r($productos);

?>
<div class= "container">
<div class="row row-cols-1 row-cols-md-3">
<?php foreach($productos as $producto):?>
    <div class="col mb-4">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
      <h2 class="card-title"><?php echo ($producto[0])?></h2>
      <h4 class="card-title"><?php echo ($producto[1])?></h4>
      <h4 class="card-title"><?php echo ($producto[2])?></h4>
         <p class="card-text"></p>
      </div>
    </div>
  </div>


<?php endforeach ?>

</div>
</div>


</main>
<footer></footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>


</body>
</html>