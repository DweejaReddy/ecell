<!doctype html>
<html lang="en">
  <head>
    <title>Thank You</title>
    <?php include('header.php')?>
    </head>

<style>
    .bg{
        background-color: #232323;
        background-clip:border-box;
        border-radius:30px;
        width: 80vw;
        height: 30vw;
        margin-top:5vw;
    }
    @media only screen and (max-width:767px) {
        .bg{
            width: 80vw;
            height: 100vw;
            margin-top:5vw;
        }
    }
</style>
<body>
    <form  class="py-4" method="post" action="store_details_new.php">
    <div class="container text-center align-items-center bg" >
        <div class="col-md-6 container d-md-inline justify-content-center my-auto">
            <div class="form-group row mb-2 labels mt-5">
                <label for="enteredName" class="text-center text-white my-5" style="font-size: 2rem;">Enter the name you want on the T-Shirt*</label>
                <div class="col-12 col-lg-6 text-center offset-xl-3 offset-0">
                    <input type="text" class="form-control rounded-pill text-center" name="enteredName" placeholder="Name on the T-Shirt" required>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" name="submit_name" class="btn3 btn-dark btn-lg my-5" style="background-color: #0072FF;border: none;" value="SUBMIT">Submit</button>
            </div>
</div>
    </div>
    
    <form>
</body>
</html>