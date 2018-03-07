<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Andrei Indries - My Website</title>



    <!-- Font Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" type="" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- our stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="favicon.png" type="image/x-icon" />

</head>

<body>
    <div class="parallax">

    </div>

    <div class="container">
        <div class="col-md-3">
            <div class="card">
                <img src="img/me.jpg" class="image-responsive" alt="Picture of me">
                <div class="cardContent">
                    <h1 class="text-center">Andrei Indries</h1>
                    <h2 class="text-center">Web Developer</h2>

                    <div class="cardSocialMedia">
                        <a href="https://www.facebook.com/sara.halasz" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
                        <a href="https://www.linkedin.com/in/indries-andrei-032734134/" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="meniu col-md-12 col-sm-12">
                <ul>
                    <li><a href="index.html "><i class="fas fa-user "></i> About me</a></li>
                    <li><a href="resume.html "><i class="fas fa-user "></i> Resume</a></li>
                    <li><a href="projects.html "><i class="fas fa-file-alt "></i> Some Projects</a></li>
                    <li><a href="contact.php "><i class="fas fa-envelope "></i> Contact</a></li>
                </ul>
            </div>

            <form class="col-xs-12 form" method="POST" action="contact.php">
                <h2>Contact me: </h2>

                <div class="clearfix"></div>

                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="subject">Subject: </label>
                    <input type="text" name="subject" class="form-control">
                </div>

                <div class="form-group">
                    <label for="message">Message: </label>
                    <textarea name="message" id=""></textarea>
                </div>



                <button type="submit" name="send" class="btn btn-primary">Send</button>
            </form>

            <?php 
           
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $subject = $_POST['subject'];
                $message = $_POST['message'].' '.$name.' '.$email;

                
                if(isset($_POST['send'])) {
                    if($name != '' && $email != '' && $subject != '' && $message != '') {
                        if(strlen($name) > 4) {
                            mail('indriesandrei@yahoo.co.uk', $subject, $message);

                            echo 'Message sent. Thank you.';
                        } 
                        else {
                                echo 'Name field is too short';
                        }
                    }

                    else {
                                echo 'Please complete all fields.';
                    }

                }

            }
            ?>

            <div class="clearfix"></div>


            <div class="col-md-12 col-sm-12 col-xs-12 text-center footer">Copyright &copy; Andrei Indries 2018 All rights reserved.</div>
        </div>
        <hr class="hrContent">
    </div>






    <div class="clearfix">&nbsp;</div>
    <div class="clearfix">&nbsp;</div>

</body>

</html>