<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- fontAwesome -->
    <script src="https://kit.fontawesome.com/f237bf30a2.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- googlw fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- style -->
    <link rel="stylesheet" href="css/formStyle.css">
    <!-- favicon  -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
    <section class="register-box">
        <div class="text-center pt-4 form-heading">
            <h2>Register Now!</h2>
        </div>
        <div class="container register pb-5">
            <div class="row  mt-5">
                <form method="post" action="store_details.php">
                    <!-- <div class="row"> -->
                        <!-- name field  -->
                        <div class="form__group field ">
                            <input type="input" class="form__field" placeholder="Name" name="name" id='name' required />
                            <label for="name" class="form__label ">Full Name *</label>
                        </div>
                        <!-- contact field  -->
                        <div class=" d-flex justify-content-between">
                            <div class="form__group field col-md-5 mr-4">
                                <input type="input" class="form__field" placeholder="Email" name="email" id='email' required />
                                <label for="email" class="form__label">Email ID *</label>
                            </div>
                            <div class="form__group field col-md-6 ml-4 ">
                                <input type="input" class="form__field " placeholder="Contact" name="contact" id='contact' required />
                                <label for="contact" class="form__label">Contact No. *</label>
                            </div>
                        </div>
                        <!-- checkbox field  -->
                        <div class="col-md-12 form__group ">
                            <p>Select your speakers</p>
                            <div class=" d-flex justify-content-between btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                <div class="checkbox-style">
                                <input type="checkbox" class="btn-check" id="speakers1" name="speakers[]" value="speaker1" autocomplete="off">
                                <label class="btn btn-color" for="speakers1">Checkbox 1</label>
                                </div>

                                <div class="checkbox-style">
                                <input type="checkbox" class="btn-check" id="speakers2" name="speakers[]" value="speaker2"  autocomplete="off">
                                <label class="btn btn-color" for="speakers2">Checkbox 2</label>
                                </div>

                                <div class="checkbox-style">
                                <input type="checkbox" class="btn-check" id="speakers3" name="speakers[]" value="speaker3" autocomplete="off">
                                <label class="btn btn-color" for="speakers3">Checkbox 3</label>
                                </div>
                            </div>
                        </div>
                        <!-- college field  -->
                        <div class="form__group field col-md-12">
                            <input type="input" class="form__field" placeholder="College" name="college" id='college' required />
                            <label for="college" class="form__label">College Name *</label>
                        </div>
                    <!-- </div> -->
                    <div class="text-center mt-4 btn-style">
                        <button class=" btn  rounded-pill pl-5 pr-5 pt-2 pb-2" type="submit" name="submit_form" value="SUBMIT">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>