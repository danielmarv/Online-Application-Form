<?php
require_once 'dbstudents.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busiika Muslim ss</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="assets/10.jpg"rel="shortcut icon"/>
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
    a{
        color: #fff;
    }
    

    </style>
</head>
<body>
    <div class="container">
        <?php include('message.php'); ?>
        <form action="reg.php" method="POST">
            <div class="container-fluid">
                <div>
                    <button class="flex-end btn btn-danger">
                        <a href="index.php">HOME</a>
                    </button>
                </div>
                <div class="container-fluid text-center">
                    <h1 id="h1">Registration</h1>
                    <p>Fill up the form with correct values.</p>
                    
                    
                </div>
                <hr class="mb-3">
                <div class="row g-3">
                    <div class="col">
                        <label for="surname"><b>Student Surname</b></label>
                        <input type="text" class="form-control" placeholder="surname" name="surname" >
                    </div>
                    <div class="col">
                        <label for="lastname"><b>Student Last Name</b></label>
                        <input type="text" class="form-control" placeholder="Last name" name="lastname">
                    </div>
                </div>
                <br>
                <br>

                <div class="row g-3">
                    <div class="col">
                        <label for="othername"><b>Student Other Name</b></label>
                        <input type="text" class="form-control" placeholder="Other name" name="othername">
                    </div>
                    <div class="col">
                        <label for="nin"><b>National ID No</b></label>
                        <input type="text" class="form-control" placeholder="nin" name="nin">
                    </div>
                </div>
                <br>
                <br>

                <div class="row g-3">
                    <div class="row">
                        <label for="term"><b>Enrollment Term</b></label>
                        <select aria-label="term" class="form-control"name="term">
                            <option selected="selected" value="-1">-- Select a Value (Term) --</option>
                            <option value="TERM 1">TERM 1</option>
                            <option value="TERM 2">TERM 2</option>
                            <option value="TERM 3">TERM 3</option>
                        </select>
                    </div>
                </div>
                <br>
                <br>

                <div class="row g-3">
                    <div class="col">
                        <label for="class"><b>Enrollment Class</b></label>
                        <select name="class"  class="form-control">
                            <option selected="selected" value="-1">-- Select a Value (Class) --</option>
                            <option value="S5">S5</option>
                            <option value="S6">S6</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                            <option value="S4">S4</option>

                        </select>
                    </div>
                    <div class="col">
                        <label for="combination"><b>"A" Level Combination</b></label>
                        <select name="combination" class="form-control">
                            <option selected="selected" value="-1">-- Select a Value (Course) --</option>
                            <option value="AIENT/ICT">AIENT/ICT</option>
                            <option value="ALUGI/ICT">ALUGI/ICT</option>
                            <option value="BAGRICG/SM">BAGRICG/SM</option>
                            <option value="BCAGRIC/SM">BCAGRIC/SM</option>
                            <option value="BCFN/ICT">BCFN/ICT</option>
                            <option value="CG-1002">BCFN/SM</option>
                            <option value="BCFN/SM">BCFR/ICT</option>
                            <option value="BCFR/SM">BCFR/SM</option>
                            <option value="BCG/ICT">BCG/ICT</option>
                            <option value="BCG/SM">BCG/SM</option>
                            <option value="BCM/ICT">BCM/ICT</option>
                            <option value="DAG/ICT">DAG/ICT</option>
                            <option value="DAK/ICT">DAK/ICT</option>
                            <option value="DEA/SM">DEA/SM</option>
                            <option value="DEG/SM">DEG/SM</option>
                            <option value="DELUG/SM">DELUG/SM</option>
                            <option value="DENTA/ICT">DENTA/ICT</option>
                            <option value="DENTF/ICT">DENTF/ICT</option>
                            <option value="DENTG/ICT">DENTG/ICT</option>
                            <option value="DENTL/ICT">DENTL/ICT</option>
                            <option value="DENTLUG/ICT">DENTLUG/ICT</option>
                            <option value="DLG/ICT">DLG/ICT</option>
                            <option value="EENTARAB/SM">EENTARAB/SM</option>
                            <option value="EENTI/SM">EENTI/SM</option>
                            <option value="ENTARTARAB/ICT">ENTARTARAB/ICT</option>
                            <option value="ENTGERART/ICT">ENTGERART/ICT</option>
                            <option value="ENTIAR/ICT">ENTIAR/ICT</option>
                            <option value="ENTIAR/ICT">ENTIAR/ICT</option>
                            <option value="ENTIART/ICT">ENTIART/ICT</option>
                            <option value="ENTIG/ICT">ENTIG/ICT</option>
                            <option value="FEG/SM">FEG/SM</option>
                            <option value="GALUG/ICT">GALUG/ICT</option>
                            <option value="GEA/ICT">GEA/ICT</option>
                            <option value="GEA/SM">GEA/SM</option>
                            <option value="GEAGRIC/SM">GEAGRIC/SM</option>
                            <option value="GEAR/SM">GEAR/SM</option>
                            <option value="GEENT/ICT">GEENT/ICT</option>
                            <option value="GEENT/SM">GEENT/SM</option>
                            <option value="GEGER/SM">GEGER/SM</option>
                            <option value="GEI/SM">GEI/SM</option>
                            <option value="GEK/SM">GEK/SM</option>
                            <option value="GELUG/SM">GELUG/SM</option>
                            <option value="GENTA/ICT">GENTA/ICT</option>
                            <option value="GENTAGR/ICT">GENTAGR/ICT</option>
                            <option value="GENTAGR/SM">GENTAGR/SM</option>
                            <option value="GENTK/ICT">GENTK/ICT</option>
                            <option value="GENTLUG/ICT">GENTLUG/ICT</option>
                            <option value="GIA/ICT">GIA/ICT</option>
                            <option value="GIARA/ICT">GIARA/ICT</option>
                            <option value="GIK/ICT">GIK/ICT</option>
                            <option value="GILUG/ICT">GILUG/ICT</option>
                            <option value="CG-1058">HAD/ICT</option>
                            <option value="CG-1054">HAG/ICT</option>
                            <option value="CG-1085">HAG/SM</option>
                            <option value="CG-1129">HAI/ICT</option>
                            <option value="CG-1148">HAK/ICT</option>
                            <option value="CG-1071">HAL/ICT</option>
                            <option value="CG-1112">HALUG/ICT</option>
                            <option value="CG-1132">HARI/ICT</option>
                            <option value="CG-1055">HDG/ICT</option>
                            <option value="CG-1075">HDG/SM</option>
                            <option value="CG-1059">HEA/ICT</option>
                            <option value="CG-1124">HEA/SM</option>
                            <option value="CG-1135">HEAR/SM</option>
                            <option value="CG-1030">HED/ICT</option>
                            <option value="CG-1005">HED/SM</option>
                            <option value="CG-1035">HEENT/ICT</option>
                            <option value="CG-1034">HEENT/SM</option>
                            <option value="CG-1061">HEF/SM</option>
                            <option value="CG-1033">HEG/SM</option>
                            <option value="CG-1001">HEG/SM</option>
                            <option value="CG-1145">HEGERM/SM</option>
                            <option value="CG-1015">HEI/SM</option>
                            <option value="CG-1111">HEK/SM</option>
                            <option value="CG-1007">HEL/SM</option>
                            <option value="CG-1039">HEL/SM</option>
                            <option value="CG-1073">HELUG/SM</option>
                            <option value="CG-1134">HELUG/SM</option>
                            <option value="CG-1105">HENTA/ICT</option>
                            <option value="CG-1088">HENTA/ICT</option>
                            <option value="CG-1170">HENTARAB/ICT</option>
                            <option value="CG-1051">HENTD/ICT</option>
                            <option value="CG-1050">HENTD/SM</option>
                            <option value="CG-1045">HENTG/ICT</option>
                            <option value="CG-1157">HENTGER/ICT</option>
                            <option value="CG-1084">HENTI/ICT</option>
                            <option value="CG-1090">HENTL/ICT</option>
                            <option value="CG-1093">HENTLUG/ICT</option>
                            <option value="CG-1062">HFG/ICT</option>
                            <option value="CG-1063">HFG/SM</option>
                            <option value="CG-1083">HIA/ICT</option>
                            <option value="CG-1086">HIAR/ICT</option>
                            <option value="CG-1106">HIG/ICT</option>
                            <option value="CG-1123">HIK/ICT</option>
                            <option value="CG-1110">HIL/ICT</option>
                            <option value="CG-1047">HLD/ICT</option>
                            <option value="CG-1046">HLD/SM</option>
                            <option value="CG-1049">HLG/ICT</option>
                            <option value="CG-1048">HLG/SM</option>
                            <option value="CG-1069">HLUGD/ICT</option>
                            <option value="CG-1070">HLUGD/SM</option>
                            <option value="CG-1097">HLUGI/ICT</option>
                            <option value="CG-1158">IAA/ICT</option>
                            <option value="CG-1108">IEA/SM</option>
                            <option value="CG-1095">IEAR/SM</option>
                            <option value="CG-1096">IEENT/SM</option>
                            <option value="CG-1163">IENTGER/ICT</option>
                            <option value="CG-1127">KEA/SM</option>
                            <option value="CG-1103">KEG/SM</option>
                            <option value="CG-1150">KEI/SM</option>
                            <option value="CG-1146">KENTA/ICT</option>
                            <option value="CG-1161">KIENT/ICT</option>
                            <option value="CG-1079">LAD/ICT</option>
                            <option value="CG-1078">LAD/SM</option>
                            <option value="CG-1072">LEA/SM</option>
                            <option value="CG-1137">LEAR/SM</option>
                            <option value="CG-1077">LED/SM</option>
                            <option value="CG-1119">LEENT/SM</option>
                            <option value="CG-1037">LEG/SM</option>
                            <option value="CG-1175">LEGER/SM</option>
                            <option value="CG-1109">LEI/SM</option>
                            <option value="CG-1139">LEK/SM</option>
                            <option value="CG-1115">LENTA/ICT</option>
                            <option value="CG-1113">LENTG/ICT</option>
                            <option value="CG-1092">LENTI/ICT</option>
                            <option value="CG-1142">LIARA/ICT</option>
                            <option value="CG-1156">LITIGER/ICT</option>
                            <option value="CG-1172">LUGEART/SM</option>
                            <option value="CG-1122">LUGEI/SM</option>
                            <option value="CG-1091">LUGENTI/ICT</option>
                            <option value="CG-1052">MAG/ICT</option>
                            <option value="CG-1008">MEA/ICT</option>
                            <option value="CG-1130">MEAR/ICT</option>
                            <option value="CG-1064">MEENT/ICT</option>
                            <option value="CG-1009">MEG/ICT</option>
                            <option value="CG-1125">MEGER/ICT</option>
                            <option value="CG-1138">MEK/ICT</option>
                            <option value="CG-1120">MELUG/ICT</option>
                            <option value="CG-1104">MENTA/ICT</option>
                            <option value="CG-1153">MENTAR/ICT</option>
                            <option value="CG-1024">MENTG/ICT</option>
                            <option value="CG-1164">MENTGER/ICT</option>
                            <option value="CG-1166">MENTTD/ICT</option>
                            <option value="CG-1081">METD/ICT</option>
                            <option value="CG-1023">PAM/ICT</option>
                            <option value="CG-1131">PARM/ICT</option>
                            <option value="CG-1066">PBG/SM</option>
                            <option value="CG-1065">PBM/SC</option>
                            <option value="CG-1025">PCB/ICT</option>
                            <option value="CG-1011">PCB/SM</option>
                            <option value="CG-1000">PCM/ICT</option>
                            <option value="CG-1068">PEB/SM</option>
                            <option value="CG-1013">PEM/ICT</option>
                            <option value="CG-1067">PENTB/ICT</option>
                            <option value="CG-1022">PENTM/ICT</option>
                            <option value="CG-1167">PMGER/ICT</option>
                            <option value="CG-1147">PMKIS/ICT</option>
                            <option value="CG-1102">PTM/ICT</option>

                        </select>
                    </div>
                </div>
                <br>
                <br>

                <div class="row g-3">
                    <div class="col">
                        <label for="gender"><b>Gender</b></label>
                        <select name="gender" class="form-control">
                            <option value=""></option>
                            <option value="F">Female</option>
                            <option value="M">Male</option>

                        </select>
                    </div>
                    <div class="col">
                        <label for="bord"><b>Boarding or Day</b></label>
                        <select name="bord" class="form-control">
                            <option value=""></option>
                            <option value="B">Boarding School</option>
                            <option value="D">Day School</option>

                        </select>
                                
                    </div>
                </div>
                <br>
                <br>
                <div class="row g-3">
                    <div class="col">
                        <label for="report"><b>Have previous Academic Reports?</b></label>
                        <select name="report" class="form-control">
                            <option value=""></option>
                            <option value="YES">Yes</option>
                            <option value="NO">No</option>

                        </select>
                    </div>
                    <div class="col">
                        <label for="reason"><b>Reason For leaving Previous School</b></label>
                        <select name="reason" class="form-control">
                            <option value=""></option>
                            <option value="GRADUATED">GRADUATED</option>
                            <option value="COMPLETED">COMPLETED</option>
                            <option value="CHANGE OF ENVIRONMENT">CHANGE OF ENVIRONMENT</option>
                            <option value="TUITION OR SCHOOL FEES">TUITION OR SCHOOL FEES</option>
                            <option value="ACADEMICS">ACADEMICS</option>
                            <option value="BURSARY OR SCHOLARSHIPS">BURSARY OR SCHOLARSHIPS</option>
                            <option value="EXTRA CURRICULAR ACTIVITIES">EXTRA CURRICULAR ACTIVITIES</option>
                            <option value="PROGRAMS OFFERED">PROGRAMS OFFERED</option>
                            <option value="PROXIMITY">PROXIMITY</option>
                            <option value="ALUMNI">ALUMNI</option>
                            <option value="OTHER">OTHER</option>

                        </select>
                </div>
                <br>
                <hr class="mb-3">
                <br>

                <div class="row g-3">
                    <div class="col">
                        <label for="relationship"><b>Relationship to Applicant</b></label>
                        <select name="relationship" class="form-control">
                        <option value=""></option>
                            <option value="GRADUATED">FATHER</option>
                            <option value="COMPLETED">MOTHER</option>
                            <option value="SPONSOR">SPONSOR</option>
                            <option value="GUARDIAN">GUARDIAN</option>
                            <option value="AUNTIE">AUNTIE</option>
                            <option value="UNCLE">UNCLE</option>
                            <option value="BROTHER">BROTHER</option>
                            <option value="SISTER">SISTER</option>
                            <option value="OTHER">OTHER</option>

                        </select>
                    </div>
                    <div class="col">
                        <label for="parentname"><b>Parent Or Guardian's Name</b></label>
                        <input name="parentname" type="text" class="form-control" aria-label="parentname">
                    </div>
                </div>
                <br>
                <br>

                <div class="row g-3">
                    <div class="col">
                        <label for="pnin"><b>Parent's National ID No.(Optional</b></label>
                        <input name="pnin" type="text" class="form-control" >
                    </div>
                    <div class="col">
                        <label for="pcon1"><b>Parent's Phone Contact 1</b></label>
                        <input type="text" class="form-control" name="pcon1">
                    </div>
                </div>
                <br>
                <br>

                <div class="row g-3">
                    <div class="col">
                        <label for="pcon2"><b>Parent's Phone Contact 2</b></label>
                        <input type="text" class="form-control" name="pcon2">
                    </div>
                    <div class="col">
                        <label for="email"><b>Preferred Email</b></label>
                        <input type="text" class="form-control" name="email">
                    </div>
                </div>
                <br>
                <br>
                <div class="container-fluid pt-3 pb-5">
                    <input class="form-control btn btn-success" type="submit" name="create" value="SUBMIT">
                </div>
                <div class="container-fluid pt-3 pb-5">
                    <a href="main.php" class="form-control btn btn-danger float-end ">Amin User ONLY</a>
                </div>
                
            </div>
        </form>
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