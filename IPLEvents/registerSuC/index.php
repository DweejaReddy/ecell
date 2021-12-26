<?php include "conn.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <!-- Bootstrap -->
    <!-- Local CSS -->
    <link href="style.css" rel="stylesheet" type="text/css">

    <!-- Google Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <?php 
        if(isset($_GET['message'])){
            if($_GET['message']){
                echo '<div class="alert alert-success" role="alert">
                    Form submitted succesfully !
                </div>';
            }else{
               echo' <div class="alert alert-danger" role="alert">
                    There is some error in the database. Please try again later.
                </div>';
            }
            unset($_GET['message']);
        }
    
    ?>
    <h1 class="display-4 mt-4 mb-5 text-center">Startup Conclave Questionaire (Round 1)</h1>
    <hr />
    <form class="mb-5 q-form m-auto form w-75 d-flex align-content-center flex-column" method="post" action="submit.php">
        <p class="display-4"># Name and Email</p>
        <input class="form-control answer" type="text" name="name" placeholder="Your Name">
        <input class="form-control answer" type="email" name="email" placeholder="Your Email">
        <p class="mt-5 display-4"># Basic Description</p>
      
        <p class="q mt-4">1) Name of the idea (name should be such that it is relevant to your venture): </p>
        <textarea name="t1a" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>
        <p class="q mt-4">2) Category ( tech, social, healthcare, product, service, fin-tech, e-commerce, AI) broad
            categorisation that incorporates your venture </p>
        <textarea name="t1b" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>
        <p class="q mt-4">3) Team size (can vary from 1 to 5)</p>
        <textarea name="t1c" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>
        <p class="q mt-4">4) Description of idea (word limit -150)</p>
        <textarea name="t1d" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>
        <p class="q mt-4">5) Is this venture currently operational? If yes, since how long?</p>
        <textarea name="t1e" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>


        <p class="mt-5 display-4"># Problem</p>

        <p class="q mt-4">1) What is the current problem that your venture aims to solve ?</p>
        <textarea name="t2a" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>
        <p class="q mt-4">2) Is your current problem relevant to the pandemic, and how does it aim to make the most of
            the post COVID situation?</p>
        <textarea name="t2b" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>
        <p class="q mt-4">3) How does this problem affect people?</p>
        <textarea name="t2c" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>
        <p class="q mt-4">4) Why do you think this is a major problem?</p>
        <textarea name="t2d" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>
        <p class="q mt-4">5) Have you researched this problem in the field? If yes, how was the response?</p>
        <textarea name="t2e" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>


        <p class="mt-5 display-4">
        <p class="mt-5 display-4"># Solution</p>

        <p class="q mt-4">1) What is the solution you came up with, to resolve this problem?</p>
        <textarea name="t3a" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>
        <p class="q mt-4">2) Will you solve this problem by providing a service or product? Describe the product/service
        </p>
        <textarea name="t3b" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>
        <p class="q mt-4">3) Will your product/service be pertinent after and in the pandemic ?</p>
        <textarea name="t3c" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>


        <p class="mt-5 display-4"># Status</p>

        <p class="q mt-4">1) Current status of your venture (like idea stage, prototype etc)</p>
        <textarea name="t4a" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>
        <p class="q mt-4">2) Mention if you have secured funding, incubation, or enrolled in any (if any) accelerator
            program</p>
        <textarea name="t4b" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>



        <p class="mt-5 display-4"># Target Market</p>

        <p class="q mt-4">1) What market will you target initially?
            (Be clear about who will utilize your product/services and how they will access it. This section should
            therefore give a sense about the size of the market and market research (e.g. In India, there are ___ number
            of car owners who will buy your service at Rs. ____ per year. This translates into a market potential of Rs.
            ____ per year).
        </p>
        <textarea name="t5a" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>
        <p class="q mt-4">2) Is your product/service a need or want(luxury) of the customer </p>
        <textarea name="t5b" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>
        <p class="q mt-4">3) Who is your ideal customer and why? (maximum 100 words) </p>
        <textarea name="t5c" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>
        <p class="q mt-4">4) What is your vision regarding your addressable market?
            (Total market that you want to grab if all of them were to buy your product/ services (not that they will,
            but this is to give an indication of what size of the market is ))
        </p>
        <textarea name="t5d" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>
        <p class="q mt-4">5) Which strata (like rural, urban, semi-urban etc) will you be focussing on and why? </p>
        <textarea name="t5e" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>
        <p class="q mt-4">6) Will your product/service be easily accessible to the market?</p>
        <textarea name="t5f" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>



        <p class="mt-5 display-4"># Competitor And Differentiation</p>

        <p class="q mt-4">1) Who is your direct competitor? </p>
        <textarea name="t6a" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>
        <p class="q mt-4">2) Who is likely to be your indirect competitor and why?</p>
        <textarea name="t6b" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>
        <p class="q mt-4">3) Describe how you will differentiate your venture from your competitor in the market.</p>
        <textarea name="t6c" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>



        <p class="mt-5 display-4"># Revenue Model</p>

        <p class="q mt-4">1) What is the type of your revenue model (transactional, direct sales, indirect sales,
            affiliate etc)?</p>
        <textarea name="t7a" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>
        <p class="q mt-4">2) What is your revenue model and how will you make money from this business opportunity?</p>
        <textarea name="t7b" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>
        <p class="q mt-4">3) What do you consider as the factors that may affect your revenue and cost? Does the
            pandemic play any role in it ?</p>
        <textarea name="t7c" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>
        <p class="q mt-4">4) What are the growth opportunities in your venture?</p>
        <textarea name="t7d" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>



        <p class="mt-5 display-4"># Social Touch</p>

        <p class="q mt-4">1) Any substantial social and/or environmental benefits by your idea? </p>
        <textarea name="t8a" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>


        <p class="mt-5 display-4"># Marketing Technique</p>

        <p class="q mt-4">1) Have you worked on the branding of your product/service? </p>
        <textarea name="t9a" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>
        <p class="q mt-4">2) Does your product/service have any scope of patency or other intellectual property rights ?
        </p>
        <textarea name="t9b" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>
        <p class="q mt-4">3) What marketing techniques will you use to market your product?</p>
        <textarea name="t9c" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>
        <p class="q mt-4">4) How are you aiming to seek customers in the world of online marketing?</p>
        <textarea name="t9d" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>
        <p class="q mt-4">5) Why do you believe this technique will work?</p>
        <textarea name="t9e" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>



        <p class="mt-5 display-4"># Team</p>

        <p class="q mt-4">1) Highlight what each member of the team will do in the venture and why he / she is best
            suited for that role. </p>
        <textarea name="t10a" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>
        <p class="q mt-4">2) Highlight the work experience and educational background of all the team members.</p>
        <textarea name="t10b" class="form-control answer" rows="1" placeholder="Write your answer here "></textarea>

        <button class="mt-5 mb-5 w-50 m-auto btn btn-lg btn-primary" type="submit">Submit</button>


    </form>



</body>

</html>