<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Merchandise | E-CELL, VNIT</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- external css  -->
    <link rel="stylesheet" href="formStyle.css">
    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- icons -->
    <link rel = "icon" href = "images/icon.png" type = "image/x-icon">
</head>

<style>
body{
    font-family: 'Poppins', sans-serif;
    overflow-x: hidden;
}
form{
    background-color: #232323;
}
.heading{
    color: #0072FF;
    font-size: 2.2rem;
    font-weight: bolder;
}
.labels{
    color: #0072FF;
    font-weight: bold;
    font-size: 1.2rem;
}
</style>


<body>
    <form  class="py-4" method="post" action="store_details.php">
           <div class="heading text-center mx-5">E-CELL MERCHANDISE</div>
           <div class="container mt-3"style="background-color: #fff; background-clip:content-box; border-radius:50px;">
               <div class="row">
                   <div class=" d-none d-md-block col-md-6">
                       <img src="img/home_tshirt.png" style="border-radius: 20px 0px 0px 20px;margin-left:-30px;" alt="" width="110%">
                   </div>
                   <div class="d-md-none mx-3">
                       <img src="img/home_tshirt.png" alt="" width="100%" "> 
                   </div>
                   
               <div class="col-md-6 container d-md-inline justify-content-center my-auto">
                <div class="form-group row mb-2 labels mt-5">
                    <label for="name" class="col-md-3 col-form-label offset-1 offset-md-0">Name*</label>
                    <div class="col-md-8 col-10 offset-1 offset-md-0">
                        <input type="text" class="form-control rounded-pill" name="name" placeholder="Name" required>
                    </div>
                </div>
                <div class="form-group row mb-2 labels mt-4">
                    <label for="email" class="col-md-3 col-form-label offset-1 offset-md-0">Email*</label>
                    <div class="col-md-8 col-10 offset-1 offset-md-0">
                        <input type="text" class="form-control rounded-pill" name="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group row mb-2 labels mt-4">
                    <label for="phone" class="col-md-3 col-form-label offset-1 offset-md-0">Contact No.*</label>
                    <div class="col-md-8 col-10 offset-1 offset-md-0">
                        <input type="text" class="form-control rounded-pill" name="phone" placeholder="Contact No." required>
                    </div>
                </div>
                <div class="form-group row mb-2 labels mt-4">
                    <label for="address" class="col-md-3 col-form-label offset-1 offset-md-0">Address*</label>
                    <div class="col-md-8 col-10 offset-1 offset-md-0">
                        <input type="text" class="form-control rounded-pill" name="address" placeholder="Address" required>
                    </div>
                </div>
                <div class="form-group row mb-2 labels mt-4">
                    <label for="pin" class="col-md-3 col-form-label offset-1 offset-md-0">Pincode*</label>
                    <div class="col-md-8 col-10 offset-1 offset-md-0">
                        <input class="form-control rounded-pill" name="pin" placeholder="Pincode" required>
                    </div>
                </div>
                <div class="form-group row mb-2 labels mt-4">
                    <label for="size" class="col-md-3 col-form-label offset-1 offset-md-0">Size*</label>
                    <div class="col-md-8 col-10 offset-1 offset-md-0">
                        <select name="size" class="form-control rounded-pill" id="size" required>
                            <div class="btn btn-light">
                            <option class="option" value="">--Choose one option below--</option>
                            <option class="option" value="S">S</option>
                            <option class="option" value="M">M</option>
                            <option class="option" value="L">L</option>
                            <option class="option" value="XL">XL</option>
                            <option class="option" value="2XL">2XL</option>
                            <option class="option" value="3XL">3XL</option>
                            <!-- <option class="option" value="4XL">4XL</option> -->
                          </select>
                    </div>
                </div>
                <div class="form-group row mb-2 labels mt-4">
                    <label for="type" class="col-md-3 col-form-label offset-1 offset-md-0">Type*</label>
                    <div class="col-md-8 col-10 offset-1 offset-md-0">
                        <select name="type" class="form-control rounded-pill" id="type" required>
                            <div class="btn btn-light">
                            <option class="option" value="">--Choose one option below--</option>
                            <option class="option" value="student">Student Edition</option>
                            <option class="option" value="alumni">Alumni Edition</option>
                          </select>
                    </div>
                </div> 

                <div class="form-group row mb-2 labels mt-4">
                    <label for="printName" class="col-md-6 col-form-label offset-1 offset-md-0">Do you want name on the Shirt?*</label>
                    <div class="col-md-5 col-10 offset-1 offset-md-0">
                        <select name="printName" class="form-control rounded-pill" id="printName" required>
                            <div class="btn btn-light">
                            <option class="option" value="">--Choose one option below--</option>
                            <option class="option" value="yes">Yes</option>
                            <option class="option" value="no">No</option>
                          </select>
                    </div>
                </div> 
                
                <div class="text-center btn3">
                    <button type="submit" name="submit_form" class="btn btn-dark btn-lg my-5" style="background-color: #0072FF;border: none;" value="SUBMIT">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form> 
</body>
</html>
