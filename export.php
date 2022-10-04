<?php
//export.php
if (isset($_POST['export'])) 
{
    $con = mysqli_connect("localhost","root","","students");
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=Applied_Students.csv');
    $output = fopen('php://output', "w");
    fputcsv($output, array('ID', 'surname', 'lastname', 'othername', 'nin', 'term', 'class', 
    'combination', 'gender', 'bord', 'report', 'reason', 'relationship', 'parentname', 'pnin', 
    'pcon1', 'pcon2', 'email'));
    $query = "SELECT * FROM reg_students ORDER BY id DESC";
    $query_run = mysqli_query($con, $query);
    while($row = mysqli_fetch_assoc($query_run))

    {
        fputcsv($output, $row);
    }
    fclose($output);

}

?>