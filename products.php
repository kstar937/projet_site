<?php
    include("header.php")
?>

<html>
<body>

<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row justify-content-center">
<h3 style="text-decoration:underline;">Rayon: <?php echo $_GET['rayon']; ?></h3>
<?php
    $rayon = isset($_GET['rayon']) ? $_GET['rayon'] : null;

    $api = "https://techparis.net/ks_store/get_all_rayon.php?rayon='$rayon'"; // Replace with your API endpoint
    
    $response = file_get_contents($api);
    if ($response) {
        $data = json_decode($response, true);
        
        if ($data && isset($data['products'])) {
            foreach ($data['products'] as $product) {
                ?>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 py-3">
                <div class="card text-black"  style="height:100% !important;">
                <div class="card-header ">
                    <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                    <img style="  " src="<?php echo $product['img']; ?>" class="card-img-top" />
                    </div>
                  </div>
                <div class="card-body">
                    <div class="text-center">
                      <h5 class="card-title"><?php echo $product['name']; ?></h5>
                      <p class="text-muted mb-4"><?php echo $product['marque']; ?></p>
                    </div>
                    <div>            
                    </div>

                  </div>
                  <div class="card-footer">

                    <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                   <span style=" font-weight: bold; color: #3b71ca; "><?php echo $product['prix']; ?>€</span>
                    <a href="details.php?id=<?php echo $product['id']; ?>" class="btn btn-primary">Détails</a>
                    </div>
                  </div>
                </div>
              </div>
              <?php
            }
        } else {
            echo "<p>0 Produit</p>";
        }
    } else {
        echo "<p>Erreur</p>";
    }
    ?>
</div>
</div>
</section>

</body>
</html>
<?php
    include("footer.php")
?>