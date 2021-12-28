<?php
session_start();

if(isset($_POST['submit_member']))
{
    $mem = $_POST['SIZE'];

}
else{
    $mem = 1;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | C-Suites</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            <form class="p-4" method="post" action="store_detail.php">
                <div class="card-heading text-center">
                    <h1 class="title pb-2">Registration</h1>
                    <hr>
                </div>
                <div class="form-group row mb-2">
                    <label for="startidea" class="col-md-4 col-form-label">Team Name</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control rounded-pill" name="TeamName" placeholder="Team Name" required>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="name[]" class="col-md-4 col-form-label">Leader Name</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control rounded-pill" name="name[]" placeholder="Leader Name" required>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="phone[]" class="col-md-4 col-form-label">Contact Number</label>
                    <div class="col-md-8">
                        <input type="number" class="form-control rounded-pill" name="phone[]" placeholder="Leader Phone Number" required>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="email[]" class="col-md-4 col-form-label">Leader Email</label>
                    <div class="col-md-8">
                        <input type="email" class="form-control rounded-pill" name="email[]" placeholder="Leader Email" required>
                    </div>
                </div>
                <?php
                    for($i=2; $i<=$mem; $i++):
                ?>
                <br>
                    <div class="form-group row mb-2">
                        <p style="color: white;"><?php echo "Team member " . $i; ?></p>
                        <input class="form-control rounded-pill" type="text" name="name[]" placeholder="Enter Name" required>
                        <input class="form-control rounded-pill mt-2" type="number" name="phone[]" placeholder="Enter Phone Number" required>
                        <input class="form-control rounded-pill mt-2" type="email" name="email[]" placeholder="Enter Email" required>
                    </div>
                <?php endfor; ?>
                <center>
                <button class="btn btn-danger rounded-pill align-items-center" type="submit" name="submit_row" value="SUBMIT">SUBMIT</button>
                </center>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
