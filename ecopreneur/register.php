<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | Ecopreneur</title>
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
    <div class="container d-flex justify-content-center pt-3 shadow-lg p-3 mb-5 rounded">
        <div class="row">
            <form class="p-4" method="post" action="store_details.php">
                <div class="card-heading text-center">
                    <h1 class="title pb-2">Registration</h1>
                    <h6 class="mt-3" style="color: #316835;font-weight: 600;">NOTE*:The event may require you to work in a team with people of your college who you may not know.</h6>
                    <hr>
                </div>
                <div class="form-group row mb-2">
                    <label for="name" class="col-md-4 col-form-label">Name*</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control rounded-pill" name="name" placeholder="Name" required>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="email" class="col-md-4 col-form-label">Email*</label>
                    <div class="col-md-8">
                        <input type="email" class="form-control rounded-pill" name="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="college" class="col-md-4 col-form-label">College*</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control rounded-pill" name="college" placeholder="College" required>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="year" class="col-md-4 col-form-label">Year*</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control rounded-pill" name="year" placeholder="Year" required>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="branch" class="col-md-4 col-form-label">Branch*</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control rounded-pill" name="branch" placeholder="Branch" required>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="phone" class="col-md-4 col-form-label">Contact No. *</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control rounded-pill" name="phone" placeholder="Contact No." required>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="q1" class="col-md-4 col-form-label">Your reason to participate in Ecopreneur *</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control rounded-pill" name="q1" placeholder="" required>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="q2" class="col-md-4 col-form-label">Your expectations from the event*</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control rounded-pill" name="q2" placeholder="" required>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="q3" class="col-md-4 col-form-label">Details about any past project(s) related to entrepreneurship or sustainability that you've done</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control rounded-pill" name="q3" placeholder="" required>
                    </div>
                </div>
                <center>
                <button class="btn btn-danger submit rounded-pill align-items-center" type="submit" name="submit_form" value="SUBMIT">SUBMIT</button>
                </center>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
