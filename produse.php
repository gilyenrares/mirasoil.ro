<!DOCTYPE html>
<html lang="ro">
<head>
    <title>Produse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/preturi.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <script src='https://kit.fontawesome.com/a076d05399.js'></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php include 'sections/navigation.sec.php' ?>
<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
       <!--------- Load Facebook SDK for JavaScript -->
 <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }
      (document, 'script', 'facebook-jssdk'));
  </script>   
      <!-- Your Chat Plugin code -->
    <div class="fb-customerchat" attribution="setup_too0l" page_id="104814324548499" theme_color="#cb3bff"></div>
    <div>
        <h1>Date Curente in seesion</h1>
        <p><?php
         echo 'Denumirea: '.$_SESSION['denumireProdus'].'<br>Pret: '.$_SESSION['pretProdus'].'<br>Cantitatea: '.$_SESSION['cantitateProdus'].'<br>Locatia: '.$_SESSION['imagineProdus'];?>
             
        </p>
    </div>
    <div class="row p-3" id="oil">
        <?php include'includes/get-produce.inc.php' ?>      
    </div>
    <?php include 'sections/footer.sec.php'; ?>
    <script src="js/cart.js"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>

</html>