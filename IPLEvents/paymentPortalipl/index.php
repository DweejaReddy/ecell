<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events | E-Cell VNIT</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/formStyle.css">
</head>
<body>
    <div id="register" class="d-grid my-auto" id="register">
        <h1 class="text-light text-center">Register</h1>

        <p class="text-light text-center my-3">Join our amazing entrepreneurial community now!</p>

        <div class="container" style="width:70%;">
            <form method ="post" action="register.php">
                <div class="form-group row">
                    <div class="col-md-4 my-5">
                        <label class="text-light col-form-label" for="exampleFormControlSelect1">Select Number of Team Members</label>
                    </div>
                    <div class="col-md-8 my-5">
                        <select name="SIZE" style="width:70%;" class="form-control ml-md-5" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <!-- <option>3</option> -->
                            <!-- <option>4</option> -->
                            <!-- <option>5</option> -->
                        </select>
                    </div>
                </div>
                <button class="btn btn-outline-light rounded-pill d-grid mx-auto" style="width: 100px" name="submit_member" type="submit">Register</button>
            </form>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>