<?php

session_start();

$name = $_SESSION['name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | Startup Weekend</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- external css  -->
    <link rel="stylesheet" href="css/formStyle.css">
    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- icons -->
    <link rel = "icon" href = "images/icon.png" type = "image/x-icon">


</head>
<body>
    <div class="container d-flex justify-content-center pt-3 shadow-lg p-3 mb-5 bg-white rounded">
        <div class="row">
            <form class="p-4" method="post" action="store_details_q3.php">
                <div class="card-heading text-center">
                    <h1 class="title pb-2">Registration</h1>
                    <hr>
                </div>
                <div class="form-group row">
                    <label for="perspec" class="col-md-4 col-form-label">What is your perspective towards entrepreneurship? *</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control rounded-pill" name="perspec" placeholder="Enter Details" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="link" class="col-md-4 col-form-label">Any of your achievements or skillset drive/website link *</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control rounded-pill" name="link" placeholder="Link" required>
                        <!-- <small class="form-text">Please note down this email for payment purpose!</small> -->
                    </div>
                </div>
                <div class="form-group row">
                    <label for="que1" class="col-md-4 col-form-label">What do you wish to achieve from this program? *</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control rounded-pill" name="que1" placeholder="Enter details" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="que2" class="col-md-4 col-form-label">How did you get to know about Startup Weekend? *</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control rounded-pill" name="que2" placeholder="Enter details" required>
                        <!-- <small class="form-text">College name</small> -->
                    </div>
                </div>
                <div class="form-group row">
                    <label for="que3" class="col-md-4 col-form-label">Anything else you would like to share with us? *</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control rounded-pill" name="que3" placeholder="Enter details" >
                        
                    </div>
                </div>
                <center>
                <button class="btn btn-danger rounded-pill align-items-center" type="submit" name="submit_form" value="SUBMIT">SUBMIT</button>
                </center>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
