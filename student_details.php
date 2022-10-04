<?php

    require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Mte Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student|Details</title>
    <link href="assets/10.jpg"rel="shortcut icon"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
    .container{
        padding-top: 100px;
    }
</style>
</head>
<body>
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Details</h4>
                        <form method="POST" action="export.php">
                            <input type="submit" name="export" value="CSV Export" class="btn btn-primary" />
                        </form>
                        <div class="container-fluid pt-3 pb-5">
                            <a href="logout.php" class=" btn btn-danger float-end ">Logout</a>
                        </div>
                    </div>
                    <div class="card-boby">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>SURNAME</th>
                                    <th>LASTNAME</th>
                                    <th>TERM</th>
                                    <th>CLASS</th>
                                    <th>GENDER</th>
                                    <th>B or D</th>
                                    <th>PARENT'S CONTACT</th>
                                    <th>EMAIL</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = "SELECT * FROM reg_students";
                                    $query_run = mysqli_query($con, $query);

                                    if (mysqli_num_rows($query_run)) 
                                    {
                                        foreach ($query_run as $reg_students) {
                                            ?>
                                            <tr>
                                                <td><?= $reg_students['id']?></td>
                                                <td><?= $reg_students['surname']?></td>
                                                <td><?= $reg_students['lastname']?></td>
                                                <td><?= $reg_students['term']?></td>
                                                <td><?= $reg_students['class']?></td>
                                                <td><?= $reg_students['gender']?></td>
                                                <td><?= $reg_students['bord']?></td>
                                                <td><?= $reg_students['pcon1']?></td>
                                                <td><?= $reg_students['email']?></td>
                                                <td>
                                                    <a href="student_view.php?id=<?= $reg_students['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else 
                                    {
                                        echo"<h5> No Record Found</h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
           </div>
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