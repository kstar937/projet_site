
<?php
    include("header.php")
?>

<html>
<body>

<section style="background-color: #eee;">
  <div class="container py-5">

<h3 style="text-decoration:underline;">Produit ID: <?php echo $_GET['id']; ?></h3>
<?php
    $id = isset($_GET['id']) ? $_GET['id'] : null;

    $api = "https://techparis.net/ks_store/get_by_id.php?id='$id'"; // Replace with your API endpoint
    
    $response = file_get_contents($api);
    if ($response) {
        $data = json_decode($response, true);
        
        if ($data && isset($data['products'])) {
            foreach ($data['products'] as $product) {
                ?>

                <div class="row justify-content-center mb-3">
                  <div class="col-md-12 col-xl-10">
                    <div class="card shadow-0 border rounded-3">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                            <div class="bg-image hover-zoom ripple rounded ripple-surface">
                              <img src="<?php echo $product['img']; ?>"
                                class="w-100" />
                              <a href="#!">
                                <div class="hover-overlay">
                                  <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-6 col-xl-6">
                            <h5><?php echo $product['name']; ?></h5>
                            <div class="d-flex flex-row">
                              <div class="text-danger mb-1 me-2">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                              </div>
                              <span>310</span>
                            </div>

                          </div>
                          <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                            <div class="d-flex flex-row align-items-center mb-1">
                              <span class="text-danger"><?php echo $product['prix']; ?>€</span>
                            </div>
                            <h6 class="text-success">Livraison offerte</h6>
                            <div class="d-flex flex-column mt-4">

                              <button class="btn btn-primary btn-sm" type="button" onclick="showPrompt()">Commander en 1 clic</button>
                            </div>
                          </div>
                        </div>
                        <h6 style=" font-weight: bold; text-decoration: underline; ">Description</h6>
                        <pre><p style=" line-height: 1; ">
                            <?php echo $product['description']; ?></p>
                            </pre>
                            

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
</section>

</body>
</html>
<?php
    include("footer.php")
?>

<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closePrompt()">&times;</span>
    <p style="font-weight:bold" id="promptMessage"></p>
  </div>
</div>



<script>

function showPrompt() {
  var modal = document.getElementById("myModal");
  var message = document.getElementById("promptMessage");
  message.innerHTML = "Notre équipe de Karandeep et Sarangan, vous remecie d'avoir acheter un produit sur notre plateforme!!!!!!";
  modal.style.display = "block";
}

function closePrompt() {
  var modal = document.getElementById("myModal");
  modal.style.display = "none";
}
</script>


<style>
/* Modal styles */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.4);
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 30%;
  text-align: center;
  border-radius: 5px;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

</style>