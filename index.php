
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>BlockedEV</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css\bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
  <?php include "nav.php"; ?>
    <div class="container"> 
    <?php for($i = 1; $i <= 13; $i++){ ?>
        <div class="row justify-content-md-center">
            <a class="col col-lg-2" href="#" style="border:solid 1px #ccc; padding: 20px; margin: 5px;">
                <?php echo $i; ?>:1
            </a>
            <a onclick="" class="col col-lg-2" href="#" style="border:solid 1px #ccc; padding: 20px; margin: 5px;">
                <?php echo $i; ?>:2
            </a>
        </div>
    <?php } ?>
    </div>  
  </body>
</html>
