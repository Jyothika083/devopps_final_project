<?php
$conn = mysqli_connect("db", "jyothika", "jyothika123", "AdmissionForm");
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$school = mysqli_real_escape_string($conn, $_REQUEST['sclname']);
$schoolmonth = mysqli_real_escape_string($conn, $_REQUEST['smonth']);
$schoolyear = mysqli_real_escape_string($conn, $_REQUEST['syear']);
$schooladd = mysqli_real_escape_string($conn, $_REQUEST['saddress']);
$schoolboard = mysqli_real_escape_string($conn, $_REQUEST['sboard']);
$schoolperc = mysqli_real_escape_string($conn, $_REQUEST['sclper']);
$tenthmarks = mysqli_real_escape_string($conn, $_REQUEST['tenthmarks']);
$college = mysqli_real_escape_string($conn, $_REQUEST['colname']);
$collegemonth = mysqli_real_escape_string($conn, $_REQUEST['cmonth']);
$collegeyear = mysqli_real_escape_string($conn, $_REQUEST['cyear']);
$collegeadd = mysqli_real_escape_string($conn, $_REQUEST['caddress']);
$collegeboard = mysqli_real_escape_string($conn, $_REQUEST['Board']);
$collegestream = mysqli_real_escape_string($conn, $_REQUEST['Stream']);
$collegeperc = mysqli_real_escape_string($conn, $_REQUEST['colper']);
$markscard = mysqli_real_escape_string($conn, $_REQUEST['markscard']);
$engcourse = mysqli_real_escape_string($conn, $_REQUEST['Course']);
$admissiontype = mysqli_real_escape_string($conn, $_REQUEST['type']);

// Get the max_appid value
$query = mysqli_query($conn, "SELECT MAX(appid) AS max_appid FROM personaldetails");
if (!$query) {
    echo "ERROR: Unable to retrieve max_appid - " . mysqli_error($conn);
    mysqli_close($conn);
    exit();
}

$row = mysqli_fetch_assoc($query);
$max_appid = $row['max_appid'];

// Insert data into the 'education' table
$sql = "INSERT INTO education (appid, school, schoolmonth, schoolyear, schooladd, schoolboard, schoolperc, tenthmarks, college, collegemonth, collegeyear, collegeadd, collegeboard, collegestream, collegeperc, markscard, engcourse, admissiontype) 
VALUES ('$max_appid', '$school', '$schoolmonth', '$schoolyear', '$schooladd', '$schoolboard', '$schoolperc', '$tenthmarks', '$college', '$collegemonth', '$collegeyear', '$collegeadd', '$collegeboard', '$collegestream', '$collegeperc', '$markscard', '$engcourse', '$admissiontype')";

if (mysqli_query($conn, $sql)) {
    header("Location: Misc2.php", true, 301);
    exit();
} else {
    echo "ERROR: Hush! Sorry " . mysqli_error($conn);
}

mysqli_close($conn);
?>
