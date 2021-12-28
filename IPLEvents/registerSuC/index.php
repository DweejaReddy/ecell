<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container m-3 text-center">
        <!-- <div class="row"> -->
            <h1>
                Registration
            </h1>
            <form method ="post" action="register.php">
                <div class="form-group mt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="text-light" for="exampleFormControlSelect1">Team Size</label>
                        </div>
                        <div class="col-md-6">
                            <select name="SIZE" class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button class="btn btn-outline-danger mt-3" name="submit_member" type="submit">Register</button>
            </form>
        <!-- </div> -->
        
    </div>
</body>
</html>