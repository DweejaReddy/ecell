<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Merchandise | E-CELL, VNIT</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- external css  -->
    <!-- <link rel="stylesheet" href="formStyle.css"> -->
    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- icons -->
    <link rel = "icon" href = "images/icon.png" type = "image/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<style type="text/css">
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
label {
    color: #0072FF;
    font-weight: bold;
    font-size: 1.2rem;
}

#registration_form fieldset:not(:first-of-type) { 
  display: none;
}

@media screen and (max-width:767px){
    .container{
        width: 90%;
    }
    fieldset{
        text-align: center;
    }
}
</style>


<body>

  <form id="registration_form" action="success.php" name="MERCHANDISE-2023"  method="post">
    <div class="heading text-center mx-5">E-CELL MERCHANDISE</div>

    <div class="container mt-3 pb-3"style="background-color: #fff; background-clip:content-box; border-radius:50px;">
           <div class="row">
               <div class=" d-none d-md-block col-md-6">
                   <img src="img/combine.png" style="border-radius: 20px 0px 0px 20px;margin-left:-30px;" alt="" width="110%">
               </div>
               <div class="d-md-none mx-3">
                   <img src="img/combine.png" alt="" width="100%" "> 
               </div>
               
           <div class="col-md-6 container d-md-inline justify-content-center my-auto">
  <fieldset>
    <div class="form-group my-4">
    <label for="Name">Name*</label>
    <input type="text" class="form-control" id="Name" name="Name" placeholder="Name *" required>
    </div>
    <div class="form-group my-4">
        <label for="EnrollmentNo">Enrollment Number*</label>
        <input type="text" class="form-control" id="EnrollmentNo" name="EnrollmentNo" placeholder="Enrollment Number *" required>
    </div>    
    <div class="form-group my-4">
    <label for="Email">Email*</label>
    <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" required>
    </div>
    <div class="form-group my-4">
    <label for="Phone">Contact No. *</label>
    <input type="text" class="form-control" id="Phone" name="Phone" placeholder="Contact No. " required>
    </div>
    <div class="form-group my-4">
        <label for="Size">Size *</label>
        <select name="Size" class="form-control rounded-pill" id="Size" required>
            <div class="btn btn-light">
            <option class="option" value="">--Choose one option below--</option>
            <option class="option" value="XS">XS</option>
            <option class="option" value="S">S</option>
            <option class="option" value="M">M</option>
            <option class="option" value="L">L</option>
            <option class="option" value="XL">XL</option>
            <option class="option" value="2XL">2XL</option>
            <option class="option" value="3XL">3XL</option>
          </select>
    </div>
    <input type="button" name="next" class="next btn btn-primary" value="Next" />
  </fieldset>
  <fieldset>
    <div class="form-group my-4">
    <label for="Q1
    ">Are you interested to open Zerodha Account for completely Free?*
    </label>
    <select name="Q1" class="form-control rounded-pill" id="Q1" required>
        <div class="btn btn-light">
        <option class="option" value="">--Choose one option below--</option>
        <option class="option" value="Yes">Yes</option>
        <option class="option" value="No">No</option>
      </select>
    </div>
    <div class="form-group my-4">
        <label for="Q2
        ">Do you already have a Zerodha Account?*
        </label>
        <select name="Q2" class="form-control rounded-pill" id="Q2" required>
            <div class="btn btn-light">
            <option class="option" value="">--Choose one option below--</option>
            <option class="option" value="Yes">Yes</option>
            <option class="option" value="No">No</option>
            </select>
        </div>
    <div class="form-group my-4">
        <label for="Q3
        "> Do you have an Aadhar Card linked with your mobile number?*
        </label>
        <select name="Q3" class="form-control rounded-pill" id="Q3" required>
            <div class="btn btn-light">
            <option class="option" value="">--Choose one option below--</option>
            <option class="option" value="Yes">Yes</option>
            <option class="option" value="No">No</option>
            </select>
        </div>
        <div class="form-group my-4">
            <label for="Q4
            ">Do you have a Pan Card?(Can use parent's or any close relatives if you do not have it)*
            </label>
            <select name="Q4" class="form-control rounded-pill" id="Q4" required>
                <div class="btn btn-light">
                <option class="option" value="">--Choose one option below--</option>
                <option class="option" value="Yes">Yes</option>
                <option class="option" value="No">No</option>
                </select>
            </div>
        <div class="form-group my-4">
            <label for="Q5
            ">Do you have bank account linked with the following Pan Card?*
            </label>
            <select name="Q5" class="form-control rounded-pill" id="Q5" required>
                <div class="btn btn-light">
                <option class="option" value="">--Choose one option below--</option>
                <option class="option" value="Yes">Yes</option>
                <option class="option" value="No">No</option>
                </select>
        </div>
    <input type="button" name="previous" class="previous btn btn-primary" value="Previous" />
    <input type="button" name="next" class="next btn btn-primary" value="Next" />
  </fieldset>
  <fieldset>
    <div class="form-group my-4">
      <label for="vtype">Select a type of verification:</label>
      <select name="vtype" class="form-control rounded-pill vtype" id="vtype" required>
          <div class="btn btn-light">
          <option class="option" value="">--Choose one option below--</option>
          <option class="option" value="Online">Online</option>
          <option class="option" value="Offline">Offline</option>
          </select>   
  </div>
  <div id="hidden1">
    <div class="form-group my-4">
    <label for="date1">Select a Date for offline verification: * (Preference 1)</label>
    <select name="date1" class="form-control rounded-pill" id="date1" >
        <div class="btn btn-light">
        <option class="option" value="">--Choose one option below--</option>
        <option class="option" value="9 Dec">9 Dec</option>
        <option class="option" value="10 Dec">10 Dec</option>
        <option class="option" value="11 Dec">11 Dec</option>
        <option class="option" value="12 Dec">12 Dec</option>
        </select>   
</div>
    <div class="form-group my-4">
    <label for="time1">Select a time for offline verification on picked date: * (Preference 1)</label>
    <select name="time1" class="form-control rounded-pill" id="time1">
        <div class="btn btn-light">
        <option class="option" value="">--Choose one option below--</option>
        <option class="option" value="9am - 10am">9am - 10am</option>
        <option class="option" value="10am - 11am">10am - 11am</option>
        <option class="option" value="11am - 12pm">11am - 12pm</option>
        <option class="option" value="12pm - 1pm">12pm - 1pm</option>
        <option class="option" value="1pm - 2pm">1pm - 2pm</option>
        <option class="option" value="2pm - 3pm">2pm - 3pm</option>
        <option class="option" value="3pm - 4pm">3pm - 4pm</option>
        <option class="option" value="4pm - 5pm">4pm - 5pm</option>
        <option class="option" value="5pm - 6pm">5pm - 6pm</option>
        <option class="option" value="6pm - 7pm">6pm - 7pm</option>
        </select>   
    </div>

    <div class="form-group my-4">
      <label for="date2">Select a Date for offline verification: * (Preference 2)</label>
      <select name="date2" class="form-control rounded-pill" id="date2">
          <div class="btn btn-light">
          <option class="option" value="">--Choose one option below--</option>
          <option class="option" value="9 Dec">9 Dec</option>
          <option class="option" value="10 Dec">10 Dec</option>
          <option class="option" value="11 Dec">11 Dec</option>
          <option class="option" value="12 Dec">12 Dec</option>
          </select>   
  </div>
      <div class="form-group my-4">
      <label for="time2">Select a time for offline verification on picked date: * (Preference 2)</label>
      <select name="time2" class="form-control rounded-pill" id="time2">
          <div class="btn btn-light">
          <option class="option" value="">--Choose one option below--</option>
          <option class="option" value="9am - 10am">9am - 10am</option>
          <option class="option" value="10am - 11am">10am - 11am</option>
          <option class="option" value="11am - 12pm">11am - 12pm</option>
          <option class="option" value="12pm - 1pm">12pm - 1pm</option>
          <option class="option" value="1pm - 2pm">1pm - 2pm</option>
          <option class="option" value="2pm - 3pm">2pm - 3pm</option>
          <option class="option" value="3pm - 4pm">3pm - 4pm</option>
          <option class="option" value="4pm - 5pm">4pm - 5pm</option>
          <option class="option" value="5pm - 6pm">5pm - 6pm</option>
          <option class="option" value="6pm - 7pm">6pm - 7pm</option>
          </select>   
      </div>
  
    </div>

    <p style="color: #0072FF;" class="mx-4">* Disclaimer: Filling this form doesn't ensure a free Merchandise and Zerodha account. Proper verification will be there. All the eligible candidates will be contacted through email after document verification.</p>
    <input type="button" name="previous" class="previous btn btn-primary" value="Previous" />
    <input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
  </fieldset>
           </div>
        </div>
  </form>

  <script>
    $(document).ready(function(){
  var current = 1,current_step,next_step,steps;
  steps = $("fieldset").length;
  $(".next").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
  });
  $(".previous").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().prev();
    next_step.show();
    current_step.hide();
    setProgressBar(--current);
  });
  setProgressBar(current);
  // Change progress bar action
  function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");   
  }
});
  </script>

  <script>
     const scriptURL = 'https://script.google.com/macros/s/AKfycby1zgReS-x05X59LGvQ3ETNPL8KW97jXPcy5h4esFytxKQA06ultav0kDghMd8fH5jYyw/exec'
            const form = document.forms['MERCHANDISE-2023']
          
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
              .then(window.location.href = "success.php")
                .then(response => alert("Thanks for Contacting us..! We Will Contact You Soon..."))
                .catch(error => console.error('Error!', error.message))
            })

  </script>

  <script>
    let hidingEl = document.getElementById('hidden1');
    $('.vtype').change(function(){
            var response = $(this).val();
            if(response == "Online"){
              hidingEl.style.display = 'none';
            }
            else if(response == "Offline"){
              hidingEl.style.display = 'block';
            }
        });

  </script>
</body>
</html>
