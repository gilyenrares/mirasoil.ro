<?php 
require 'dbh.inc.php';

$sql = "SELECT * FROM produse;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<div class="col-sm-8 col-md-6 col-lg-4 mb-3 h-100">
                <div class="card w-100"> 
                    <img src="'.$row["image"].'" alt="'.$row["denumire"].'"height="425">
                    <h1 class="mb-5">'.$row["denumire"].'</h1>
                    <p class="price">'.$row["pret"].'lei</p>
                     	<form action="includes/update-cart.inc.php" method="POST">
        					<input type="hidden" name="denumire" value="'.$row["denumire"].'">
        					<input type="hidden" name="pret" value="'.$row["pret"].'">
        					<input type="hidden" name="image" value="'.$row["image"].'">
        					<label for="cant">Cantitate</label>
        					<input type="input" name="cantitate" id="cant" value="1" require="required">
        				<button class="btn btn-info my-3" type="submit" name="cos-submit">Adaugă în coș</button>	
        				</form>
                </div>
            </div>';
	}
}else {
	echo '<h1>A aparut o erroare de connexiune</h1>';
}
 ?>
