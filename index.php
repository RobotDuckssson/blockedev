
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <style>
    .popover-title {
        background-color: #73AD21; 
        color: #FFFFFF; 
      
    }

  </style>
  </head>

  <body class="text-center">
  <?php include "nav.php"; ?>
    <div class="container"> 
    <?php for($i = 1; $i <= 13; $i++){ ?>
        <div class="row justify-content-md-center">
        <a onclick="" class="col col-lg-2" href="#" style="background-color: #FFA07A; border:solid 1px #ccc; padding: 20px; margin: 5px;"
                  data-toggle="popover" title="In the orange" 
                  data-html="true" 
                  data-content="Parked time: 4:32<br />
                                Started: 8:15">
                <h3>LWY 610</h3>
                <h4><?php echo $i; ?>:1</h4>
                
            </a>
            <a onclick="" class="col col-lg-2" href="#" style="background-color: #F08080;border:solid 1px #ccc; padding: 20px; margin: 5px;"
                  data-toggle="popover" title="In the green" 
                  data-content="And here's some amazing content. It's very engaging. Right?">
                <?php echo $i; ?>:2
            </a>
        </div>
    <?php } ?>
    </div>
    <!-- Bootstrap core JavaScript -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
          $('[data-toggle="popover"]').popover();   
      });
</script>
  </body>
</html>
