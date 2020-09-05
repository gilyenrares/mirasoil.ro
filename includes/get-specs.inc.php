<?php 
require 'dbh.inc.php';
if (isset($_GET['denumire'])) {
    $denumire = mysqli_real_escape_string($conn, $_GET['denumire']);

$sql = "SELECT * FROM produse WHERE denumire='$denumire';";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<div id="ulei">
            <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        
                        <div class="preview-pic tab-content">
                          <div class="tab-pane active" id="pic-1"><img src="'.$row["image"].' "alt="'.$row["denumire"].'"height="425"</div>
                          
                        </div>
                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title">'.$row["denumire"].'</h3>
                        <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
                    <hr>
                    <div class="product-price">'.$row["pret"].'</div>
                    <div class="product-stock">In stoc</div>
                    <hr>
                    <div class="btn-group cart">
                        <button type="button" class="btn btn-success">
                            Adaugă în coș 
                        </button>
                    </div>
                    <div class="btn-group wishlist">
                        <button type="button" class="btn btn-danger">
                            Adaugă la favorite 
                        </button>
                    </div>
                </div>
                <div class="container-fluid">       
            <div class="col-md-12 product-info">
                    <ul id="myTab" class="nav nav-tabs nav_tabs">
                        
                        <li class="active"><a href="#service-one" data-toggle="tab">PROPRIETĂȚI</a></li>
                        <li><a href="#service-two" data-toggle="tab">UTILIZĂRI</a></li>
                        <li><a href="#service-three" data-toggle="tab">INGREDIENTE</a></li>
                        <li><a href="#service-three" data-toggle="tab">MAI MULTE DETALII</a></li>
                        
                    </ul>
                        <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade in active" id="service-one">
                         
                            <section class="container product-info">
                              '.$row["proprietati"].'
                            </section>
                                          
                        </div>
                    <div class="tab-pane fade" id="service-two">
                        '.$row["utilizari"].'
                        <section class="container">
                        '.$row["ingrediente"].'
                        </section>
                        
                    </div>
                    <div class="tab-pane fade" id="service-three">
                         <ul>
                         <li>lavanda</li>
                         <li>zahar</li>
                         </ul>                     
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>
</div>
</div>';
	}
}else {
	echo '<h1>A aparut o erroare de connexiune</h1>';
}
}
?>