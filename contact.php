<?php

//PHP VARIABLES ASSIGNED THE CONTENTS OF THE HTML FORMS VARIOUS INPUTS

/*we will use a boolean value to test if the message was sent after all fields have been filled
we will then ensure that the email is within the post array and isnt blank
if it passes we will further ensure its a valid email syntax
then we will use concatenation to construct our email body using the inputted variables*/
    $messagesent= False;
    if(isset($_POST['email']) && $_POST['email'] !=''){

        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                //submit the form
            $userName = $_POST['name'];
            $lastName = $_POST['surname'];
            $EmailAddress = $_POST['email'];
            $PhoneNumber = $_POST['phone'];
            $Address = $_POST['address'];
            $Town = $_POST['town'];
            $Postcode = $_POST['pcode'];
            $Message = $_POST['message'];
            $Subject = $_POST['services'];
        
            $to = "greghillan10@gmail.com";
            $body = "";
            $body .= "Name: ".$userName. "\r\n";
            $body .= "Last name: ".$lastName. "\r\n";
            $body .= "Email: ".$EmailAddress. "\r\n";
            $body .= "Phone number: ".$PhoneNumber. "\r\n";
            $body .= "Address: ".$Address. "\r\n";
            $body .= "Town: ".$Town. "\r\n";
            $body .= "Postcode: ".$Postcode. "\r\n";
            $body .= "Message: ".$Message. "\r\n";
            $body .= "Service required: ".$Subject. "\r\n";

            //mail($to,$subject, $body);
            $messagesent = True; 
        }
    


    }
 



?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>

    <!--NAVBAR-->
    <!--We have opted to create the navbar and provide the contents within it as a container to provide padding for the brand name-->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <!--the first container will be concerned with storing the entire contents of the header, this was opted as container to auto size itself-->
        <div class="container">

        
            <a href="index.html" class="navbar-brand"><img src = "img/dash-logo.png" alt ="sandys logo"></a>
        
        <!--now we will create a button which whill toggle between two states, we will pass it the continer with our links so it knows what to change-->
            <button 
                class="navbar-toggler"
                type = "button" 
                data-bs-toggle = "collapse" 
                data-bs-target = "#navmenu">

                <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id = "navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item px-2">
                        <a href="prices.html" class="navbar-link text-light text-decoration-none"><b>Prices and Services</b></a>
                    </li>
                    <li class ="nav-item px-2">
                        <a href="about.html" class="navbar-link text-light text-decoration-none"><b>About</b></a>
                    </li>

                    <li class = "nav-item px-2">
                        <a href="#Instructor Training" class="navbar-link text-light text-decoration-none"><b>Instructor Training</b></a>
                    </li>

                    <li class = "nav-item px-2">
                        <a href="contact.php" class="navbar-link text-light text-decoration-none"><b>Contact Us</b></a>
                    </li>
                </ul>
            </div>

        </div>
        
        
    
    </nav>

    <section>
        <div class = "container text-center">
<!--here we tell the browser to load the specific image dependant on the viewport-->            
            <img class = "img-fluid" src = "https://ik.imagekit.io/eccktgb8fra/Scotland-Road-Trip-Quiraing_yl4h0tANZ.jpg"
                srcset ="https://ik.imagekit.io/eccktgb8fra/Scotland-Road-Trip-Quiraing_yl4h0tANZ.jpg?tr:w-500 500w
                        https://ik.imagekit.io/eccktgb8fra/Scotland-Road-Trip-Quiraing_yl4h0tANZ.jpg?tr:w-800 800w
                        https://ik.imagekit.io/eccktgb8fra/Scotland-Road-Trip-Quiraing_yl4h0tANZ.jpg?tr:w-1024 1024w">
        
        </div>

        <div class ="container">
            <h1 class="display-1">Contact us</h1>
        </div>
    </section>


<!--CONTACT FORM-->

<!--PHP TO CHECK IF THE CONTACT FORM WAS VALID, THIS WILL EITHER DISPLAY THE MESSAGE OR KEEP THE PAGE-->
    
        
<!--we utilise the container with the error class to be able to provide an individual message for each field an error may occur-->
    <div class = "container">
        <form id = "contact-form" method = "post" action = "contact.php" role = "form" class = "row g-3">
            <div class = "col-md-6">
                <label for = "firstName" class ="form-label">
                    First Name
                </label>
                <input type ="text" name = "name" class ="form-control" id = "firstName" required> 
                <div class = "help-block with-errors"></div>
            </div>

            <div class = "col-md-6">
                <label for = "lastName" class ="form-label">
                    Last Name
                </label>
                <input type ="text" name = "surname" class ="form-control" id = "lastName" required>
                <div class = "help-block with-errors"></div>
            </div>

            <div class = "col-md-8">
                <label for = "emailinfo" class ="form-label">
                    Email
                </label>
                <input type ="email" name = "email" class = "form-control" id ="emailinfo" required>
                <div class = "help-block with-errors"></div>
            </div>

            <div class = "col-md-4">
                <label for = "phoneinfo" class ="form-label">
                    Phone Number
                </label>
                <input type ="tel" class = "form-control" name = "phone" id ="phoneinfo" placeholder = "+447789660365" >
                <div class = "help-block with-errors"></div>
            </div>

            <div class = "col-md-12">
                <label for = "streetname" class ="form-label">
                    1st line of Address
                </label>

                <input type = "text" name = "address" class = "form-control" id = "streetname" required>
                <div class = "help-block with-errors"></div>
            </div>

            <div class = "col-md-6">
                <label for = "town-name" class = "form-label">
                    Town
                </label>
                <input type = "text" class = "form-control" name = "town" id = "town-name" required>
                <div class = "help-block with-errors"></div>
            </div>

            <div class = "col-md-6">
                <label for = "Postcode" class = "form-label">
                    Postcode
                </label>
                <input type = "text" class = "form-control" name = "pcode" id = "Postcode" required>
                <div class = "help-block with-errors"></div>
            </div>

            <div class = "col-md-12">
                <label for = "contactbox" class = "form-label">
                 Your Message   
                </label>

                <textarea class = "form-control" id = "message" name ="message" rows = "4"></textarea>
                <div class = "help-block with-errors"></div>
            </div>
            <div class = "col-md-12">
                <select id = "Service" name = "services" class = "form-control" required = "required" data-error = "Please specify which service you wish to use">
                    <option value = ""></option>
                    <option value = "Practical-lessons">Practical driving Lessons(regular customers)</option>
                    <option value = "Advance Driving instructor Lessons">ADI lessons</option>
                    <option value = "Trailer Driving Lessons">Trailer Lessons</option>
                </select>
                <div class = "help-block with-errors"></div>
            </div>

            <div class ="col-md-12">
                <button type = "submit" class = "btn btn-success btn-send">Submit your Enquiry</button>
            </div>

            
     
        </form>

        
<?php
if($messagesent == True):
    echo '<h3><b>Thanks, Well be in touch!</b></h3>';
        
    echo '<img src = "img/dog-driver.gif" alt ="Doggy Driver">';       
    
?>
        
<?php
else:
    
?>
    
<?php
endif;
?>
   
    </div>

    <section>
        <div class ="container-fluid bg-dark">
            <div class = "row align-items-center justify-content-between">
                <div class ="col-md p-5 text-light">
                    <h3><strong>Contact info</strong></h3>
                    <p>Telephone: 07789660365</p>
                    <p>Email: Greghillan10@gmail.com</p>
                    <p>Address: 14 Grougar Drive, Kilmarnock, KA3 1UL</p>

                    <i class = "bi bi-facebook">
                        <a href ="https://www.facebook.com/Sandyhillandriving" alt = "Sandy Hillans Facebook Page"></a>
                    </i>

                </div>

                <div class ="col-md">
                    <img class = "img-fluid w-50 d-none d-md-block" src = "img/Untitled design.png" alt ="Certificates">
                </div>
            </div>
        </div>
    </section>


    <script src = "js/bootstrap.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"></script>
    <script src = "js/contact.js"></script>

</body>
</html>