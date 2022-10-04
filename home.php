<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<HTML>
    <HEAD>
        <TITLE>Welcome</TITLE>
        <link href="assets/10.jpg"rel="shortcut icon"/>
        <link href="assets/css/phppot-style.css" type="text/css"rel="stylesheet" />
        <link href="assets/css/user-registration.css" type="text/css"rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>


        .form-label{
        color:white !important;
        }
        #login-btn{
            color:white;
            font-weight:bold;
            background: #343a40;
        }
        .sign-up-container{
        background-color: transparent;
        }
</style>
</HEAD>
    <BODY>
        <video src="./background.mp4" autoplay muted loop></video>
           
            <div class="phppot-container" >
            
                <div class="sign-up-container" >
                    <h1 style="color:white;text-align:center;font-size:40px">
                        Welcome to your Account 
                        <p style="font-weight:bold;text-transform:uppercase;color:tomato "><?php echo $username;?></p>
                    </h1>
                    <a class=" btn btn-warning" style="margin-right:100px" href="student_details.php" style="color:white">Applied Students</a>
                </div>
                    
            </div>
    </BODY>
</HTML>
