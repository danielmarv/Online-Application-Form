<?php
require 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busiika Muslim ss</title>
    <link href="assets/10.jpg"rel="shortcut icon"/>
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <style>
        body{
    background-image:url("./assets/download.jpg");
    background-position: center; 
    background-repeat: no-repeat;
    background-size: cover; 
        }
    .sign-up-container{
    background-color: transparent;
    }
    .form-label{
        color: #fff;
    }
    #signup-btn{
        color:white;
        font-weight:bold;
        background: #343a40;
    }

    label{
        color: red;
    }

    #h1{
        color: black;
        font-size: 50px;
    }
    .container{
        background-color: aqua;
        
    }
    

    </style>
</head>
<body>
    <div class="container">
                                
    <div class="card">
        <div class="card=header text-center">
            <h1 id="h1">Student Details </h1>
            <a href="student_details.php" class="btn btn-danger float-end ">BACK</a>
        </div>
        <hr class="mb-3">
        <?php
        if (isset($_GET['id'])) 
        {
            
            $reg_students_id = mysqli_real_escape_string($con, $_GET['id']);
            $query = "SELECT * FROM reg_students WHERE id='$reg_students_id' ";
            $query_run = mysqli_query($con, $query);

            if (mysqli_num_rows($query_run)) 
            {
                $reg_students = mysqli_fetch_array($query_run);
                ?>
                    
                    <div class="row g-3">
                        <div class="col">
                            <label for="surname"><b>Student Surname</b></label>
                            <p class="form-control">
                                <?=$reg_students['surname'];?>
                            </p>
                        </div>
                        <div class="col">
                            <label for="lastname"><b>Student Last Name</b></label>
                            <p class="form-control">
                                <?= $reg_students['lastname'];?>
                            </p>
                        </div>
                    </div>
                    <br>
                    <br>

                    <div class="row g-3">
                        <div class="col">
                            <label for="othername"><b>Student Other Name</b></label>
                            <p class="form-control">
                                <?=$reg_students['othername'];?>
                            </p>
                        </div>
                        <div class="col">
                            <label for="nin"><b>National ID No</b></label>
                            <p class="form-control">
                                <?=$reg_students['nin'];?>
                            </p>
                        </div>
                    </div>
                    <br>
                    <br>

                    <div class="row g-3">
                        <div class="row">
                            <label for="term"><b>Enrollment Term</b></label>
                            <p class="form-control">
                                <?=$reg_students['term'];?>
                            </p>
                        </div>
                    </div>
                    <br>
                    <br>

                    <div class="row g-3">
                        <div class="col">
                            <label for="class"><b>Enrollment Class</b></label>
                            <p class="form-control">
                                <?=$reg_students['class']?>
                            </p>
                        </div>
                        <div class="col">
                            <label for="combination"><b>"A" Level Combination</b></label>
                            <p class="form-control">
                                <?=$reg_students['combination'];?>
                            </p>
                        </div>
                    </div>
                    <br>
                    <br>

                    <div class="row g-3">
                        <div class="col">
                            <label for="gender"><b>Gender</b></label>
                            <p class="form-control">
                                <?=$reg_students['gender'];?>
                            </p>
                        </div>
                        <div class="col">
                            <label for="bord"><b>Boarding or Day</b></label>
                            <p class="form-control">
                                <?=$reg_students['bord'];?>
                            </p>
                                    
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row g-3">
                        <div class="col">
                            <label for="report"><b>Have previous Academic Reports?</b></label>
                            <p class="form-control">
                                <?=$reg_students['report'];?>
                            </p>
                        </div>
                        <div class="col">
                            <label for="reason"><b>Reason For leaving Previous School</b></label>
                            <p class="form-control">
                                <?=$reg_students['reason'];?>
                            </p>
                    </div>
                    <br>
                    <hr class="mb-3">
                    <br>

                    <div class="row g-3">
                        <div class="col">
                            <label for="relationship"><b>Relationship to Applicant</b></label>
                            <p class="form-control">
                                <?=$reg_students['relationship'];?>
                            </p>
                        </div>
                        <div class="col">
                            <label for="parentname"><b>Parent Or Guardian's Name</b></label>
                            <p class="form-control">
                                <?=$reg_students['parentname'];?>
                            </p>
                        </div>
                    </div>
                    <br>
                    <br>

                    <div class="row g-3">
                        <div class="col">
                            <label for="pnin"><b>Parent's National ID No.(Optional</b></label>
                            <p class="form-control">
                                <?=$reg_students['pnin'];?>
                            </p>
                        </div>
                        <div class="col">
                            <label for="pcon1"><b>Parent's Phone Contact 1</b></label>
                            <p class="form-control">
                                <?=$reg_students['pcon1'];?>
                            </p>
                        </div>
                    </div>
                    <br>
                    <br>

                    <div class="row g-3">
                        <div class="col">
                            <label for="pcon2"><b>Parent's Phone Contact 2</b></label>
                            <p class="form-control">
                                <?=$reg_students['pcon2'];?>
                            </p>
                        </div>
                        <div class="col">
                            <label for="email"><b>Preferred Email</b></label>
                            <p class="form-control">
                                <?=$reg_students['email'];?>
                            </p>
                        </div>
                    </div>
                    <br>
                    <br>

                <?php
            }
            else {
                echo "<h4> No Such <h4>";
            }
        }
                
        ?>
        </div>
    </div>
    <footer class="mt-auto mb-4">
        <div class="text-center">
            <span>
                Copyright Reserved &copy; <script>document.write(new Date().getFullYear())</script> BMSS
            </span>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>