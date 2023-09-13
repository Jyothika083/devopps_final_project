<?php
$db = "AdmissionForm";
$conn = mysqli_connect("db", "jyothika", "jyothika123", $db);
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Prepare and sanitize user input
$admissiontype = mysqli_real_escape_string($conn, $_REQUEST['admissiontype']);
$branch = mysqli_real_escape_string($conn, $_REQUEST['Branch']);
$sgender = mysqli_real_escape_string($conn, $_REQUEST['sgender']);
$sort = mysqli_real_escape_string($conn, $_REQUEST['sort']);
$table1 = "personaldetails";
$table2 = "education";
$columns = ['personaldetails.appid', 'sname', 'semail','sphno', 'engcourse', 'admissiontype'];

function fetch_data($db, $table1, $table2, $columns, $admissiontype, $sgender,$branch, $sort)
{
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "Columns Name must be defined in an indexed array";
    } elseif (empty($table1)) {
        $msg = "Table Name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT " . $columnName . " FROM $table1
                    INNER JOIN $table2 ON $table1.appid = $table2.appid
                    WHERE $table2.engcourse = '$branch' OR $table2.admissiontype = '$admissiontype' or $table1.sgender='$sgender'
                    ORDER BY $table1.appid $sort";
        $result = mysqli_query($db, $query);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                $msg = $row;
            } else {
                $msg = "No Data Found";
            }
        } else {
            $msg = mysqli_error($db);
        }
    }
    return $msg;
}

$fetchData = fetch_data($conn, $table1, $table2, $columns, $admissiontype,$sgender, $branch, $sort);
?>
