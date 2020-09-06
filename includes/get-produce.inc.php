<?php 
require 'dbh.inc.php';

$sql = "SELECT * FROM produse;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<div class="col-sm-8 col-md-6 col-lg-4 mb-3 h-100">
                <div class="card w-100"> 
				<a href="produs.php?codProdus='.$row["codProdus"].'">
					<img src="'.$row["image"].'" alt="'.$row["denumire"].'" class="img-responsive" height="425">
				</a>
				<a class="card-link" href="produs.php?codProdus='.$row["codProdus"].'">
					<h1 class="mb-5">'.$row["denumire"].'</h1>
				</a>
                    <p class="price">'.$row["pret"].'lei</p>
                     	<form action="includes/cos.inc.php?action=add&codProdus='.$row["codProdus"].'" method="POST">
        					<input type="hidden" name="denumire" value="'.$row["denumire"].'">
        					<input type="hidden" name="pret" value="'.$row["pret"].'">
        					<input type="hidden" name="image" value="'.$row["image"].'">
        					<label for="cant">Cantitate</label>
        					<input type="number" min="1" max="'.$row["stoc"].'" name="cantitate" id="cant" value="1" require="required">
        				<button  type="submit" name="add-item-submit" class="btn btn-info my-3" data-toggle="modal" data-target="#errorsystem">Adaugă în coș</button>	
        				</form>
                </div>
            </div>';
	}
}else {
	echo '<h1>A aparut o erroare de connexiune</h1>';
}
 ?>
