<?php
    include("header.php")
?>

<html>
<body>

<!-- Carousel wrapper -->
<div class="container">
<h5>Page d'accueil</h5>
<img src="assets\image\buildonlinestore.jpg" class="d-block w-100" alt="Wild Landscape"/>
</div>
<br><br>
<div class="container">
  <h4>Parcourez dans nos rayons</h4>

  <div class="row">
  <div class="col-4" style=" text-align: center; "><div style=" margin: 20px 40px; background: antiquewhite; font-weight: bold; padding: 20px 0px; "><a href="products.php?rayon=livres">Livres</a></div></div>
  <div class="col-4" style=" text-align: center; "><div style=" margin: 20px 40px; background: antiquewhite; font-weight: bold; padding: 20px 0px; "><a href="products.php?rayon=hightech">HighTech</a></div></div>
  <div class="col-4" style=" text-align: center; "><div style=" margin: 20px 40px; background: antiquewhite; font-weight: bold; padding: 20px 0px; "><a href="products.php?rayon=electromenagers">Electromenagers</a></div></div>
  </div>

</div>

<!-- Carousel wrapper -->
</body>
</html>
<?php
    include("footer.php")
?>