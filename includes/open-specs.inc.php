<?php 
require 'dbh.inc.php';
if (isset($_GET['codProdus'])) {
	$codProdus = mysqli_real_escape_string($conn, $_GET['codProdus']);
	$sql = "SELECT * FROM produse WHERE codProdus='$codProdus';";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
            if ($row["stoc"] ==='0') {
                $stocCurent = 'Stoc Epuizat';
            } else {
                $stocCurent = 'Stoc Disponibil';
            }
			echo '<div class="container card m-5">
                    <div class="row">
                        <div class="col-md-6 p-0">
                            <img src="'.$row["image"].'" alt="'.$row["denumire"].'" width="400" height="400">
                        </div>
                        <div class="details col-md-6">
                        <h3 class="product-title">'.$row["denumire"].'</h3>
                        <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
                    <hr>
                    <h4 >Pret: '.$row["pret"].' Lei</h4>
                    <h4 >'.$stocCurent.'</h4>
                    <hr>
                    <div class="btn-group cart">
                      <form action="includes/cos.inc.php?action=add&codProdus='.$row["codProdus"].'" method="POST">
                        <input type="hidden" name="denumire" value="'.$row["denumire"].'">
                        <input type="hidden" name="pret" value="'.$row["pret"].'">
                        <input type="hidden" name="image" value="'.$row["image"].'">
                        <input type="hidden" min="1" max="'.$row["stoc"].'" name="cantitate" value="1">
                        <button  type="submit" name="add-item-submit" class="btn btn-success my-3" data-toggle="modal" data-target="#errorsystem">Adaugă în coș</button>	
                      </form>
                    </div>
                    <div class="btn-group wishlist">
                        <button type="button" class="btn btn-danger">
                            Adaugă la favorite 
                        </button>
                    </div>
                </div>
            </div>
               <!-- Detalis Toolbar -->
              <div class="btn-group btn-group-lg m-2 d-flex" role="group" aria-label="Toolbar">
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#prop" aria-expanded="true" aria-controls="prop">PROPRIETĂȚI</button>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#util" aria-expanded="true" aria-controls="util">UTILIZĂRI</button>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#ing" aria-expanded="true" aria-controls="ing">INGREDIENTE</button>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#more" aria-expanded="true" aria-controls="more">MAI MULTE DETALII</button> 
              </div>
            <!-- Acordion interface -->
              <div class="accordion m-2" id="subinterface">
              <!--PROPRIETĂȚI interface -->
                <div class="card bg-transparent collapse show" id="prop" area-labelledby="PROPRIETĂȚI" data-parent="#subinterface">
                  <h5 id="list">';
                    echo $row["proprietati"];
                    echo '</h5>
                    </div>
                  <!-- UTILIZĂRI interface -->
                    <div class="card bg-transparent collapse" id="util" area-labelledby="UTILIZĂRI" data-parent="#subinterface">
                      <h5" id="list">';
                    echo $row["utilizari"];
                     echo '</h5>
                    </div> 
                  <!-- INGREDIENTE interface -->
                    <div class="card bg-transparent collapse" id="ing" area-labelledby="INGREDIENTE" data-parent="#subinterface">
                      <h5 id="list">';
                        echo $row["ingrediente"];
                        echo '</h5>
                        </div> 
                  <!-- More interface -->
                    <div class="card bg-transparent collapse" id="more" area-labelledby="MAI MULTE DETALII" data-parent="#subinterface">
                      <h5 id="list">';
                      echo "In curand";
                      echo '</h5>
             
        </div> 
      </div>              
    </div>    ';
		}
	}
}
 ?>