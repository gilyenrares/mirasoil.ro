<!DOCTYPE html>
<html lang="ro">
<header>
    <title>Produse</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="...">
    <link rel="stylesheet" type="text/css" href="styles/style.css">    
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</header>

<body class="wrapper">
  <!--Left Sidebar Holder --> 
<?php include 'sections/left-sidebar.sec.php'; ?>

    <!-- Page Content Holder -->
    <div id="content">
         <?php include'sections/navigation.sec.php' ?>
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
    <div class="row p-3" id="oil">
        <?php include'includes/get-produce.inc.php' ?>     
    </div>
    
    <?php include 'sections/footer.sec.php'; ?>
    <script src="js/cart.js"></script>
      </div>
   <!--Right Sidebar Holder --> 
    <?php include 'sections/right-sidebar.sec.php' ?>
</body>

</html>