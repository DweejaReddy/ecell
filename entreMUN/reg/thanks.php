<?php session_start();
$name = $_SESSION['name'];

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Thank You</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- external css  -->
    <link rel="stylesheet" href="css/thanks.css">
    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- favicon -->
    <!-- <link rel = "icon" href = "images/icon.png" type = "image/x-icon"> -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="images/favicon_io/site.webmanifest">
    </head>

  <body>
        <div class="" style="background-image: url(img/hexbg.jpg);">
        <div class="container d-flex align-items-center justify-content-center min-vh-100">
            <div class="row text-center box mx-auto" style="max-width: 95%;">
               
                <div class="px-3 py-3 mx-3" style="color: #000;background-color: #fff;border-radius: 25px;width: 450px;max-width: 90%;">
                  <?php echo "<h3 style=font-weight: 600 class=pt-4><b> Congratulations,</b>$name <br>Step 1 for the registration is complete. Kindly, proceed to the final step given below.</h3>";?><br>
                  <h5>Please proceed to payment.</h5>
                      <button class="btn btn-danger"><a class="btndg" href="https://rzp.io/l/YqJmuCyFyk">Pay Now</a>
                      </button>
                </div>
            </div>
        </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>