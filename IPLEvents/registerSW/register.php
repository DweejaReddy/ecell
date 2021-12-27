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
            <form class="p-4" method="post" action="store_details.php">
                <div class="card-heading text-center">
                    <h1 class="title pb-2">Registration</h1>
                    <hr>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">Name *</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control rounded-pill" name="name" placeholder="Name" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label">Email *</label>
                    <div class="col-md-8">
                        <input type="email" class="form-control rounded-pill" name="email" placeholder="Email" required>
                        <!-- <small class="form-text">Please note down this email for payment purpose!</small> -->
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-md-4 col-form-label">Mobile/Whatsapp Number *</label>
                    <div class="col-md-8">
                        <input type="number" class="form-control rounded-pill" name="phone" placeholder="Phone Number" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="linkedin" class="col-md-4 col-form-label">LinkedIn Id(URL) *</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control rounded-pill" name="linkedin" placeholder="LinkedIn" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="college" class="col-md-4 col-form-label">College Name *</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control rounded-pill" name="college" placeholder="College Name" required>
                        <!-- <small class="form-text">College name</small> -->
                    </div>
                </div>
                <div class="form-group row">
                    <label for="grad" class="col-md-4 col-form-label">Degree & Year of Graduation</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control rounded-pill" name="grad" placeholder="Degree & Year of Graduation" >
                        
                    </div>
                </div>
                <div class="form-group white">
                    <p>Do you have your Startup Idea?(Select any 1)</p>
                    <p><input type="checkbox" name="check1" value="1" /> Yes, my startup is in the early stages. (Ideation Phase)</p>
                    <p><input type="checkbox" name="check1" value="2" /> Yes, I am working on it. (Research Phase)</p>
                    <p><input type="checkbox" name="check1" value="3" /> Not yet, but I want to learn.</p>
                </div>
                <center>
                <button class="btn btn-danger rounded-pill align-items-center" type="submit" name="submit_form" value="SUBMIT">Proceed</button>
                </center>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
