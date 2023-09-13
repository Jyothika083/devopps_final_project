<?php
// Ensure there is no output sent before this point
// You should not have HTML content or any whitespace before this opening PHP tag

$conn = mysqli_connect("db", "jyothika", "jyothika123", "AdmissionForm");
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Prepare and sanitize user input
//$appid = uniqid();
$sname = mysqli_real_escape_string($conn, $_REQUEST['sname']);
$sdob = mysqli_real_escape_string($conn, $_REQUEST['sdob']);
$sgender = mysqli_real_escape_string($conn, $_REQUEST['sgender']);
$sphno = mysqli_real_escape_string($conn, $_REQUEST['sno']);
$semail = mysqli_real_escape_string($conn, $_REQUEST['smail']);
$saddress = mysqli_real_escape_string($conn, $_REQUEST['address']);
$snation = mysqli_real_escape_string($conn, $_REQUEST['nation']);
$sreligion = mysqli_real_escape_string($conn, $_REQUEST['Religion']);
$scaste = mysqli_real_escape_string($conn, $_REQUEST['scaste']);
$fname = mysqli_real_escape_string($conn, $_REQUEST['fname']);
$foccu = mysqli_real_escape_string($conn, $_REQUEST['foccu']);
$fphno = mysqli_real_escape_string($conn, $_REQUEST['fno']);
$femail = mysqli_real_escape_string($conn, $_REQUEST['fmail']);
$mname = mysqli_real_escape_string($conn, $_REQUEST['mname']);
$moccu = mysqli_real_escape_string($conn, $_REQUEST['moccu']);
$mphno = mysqli_real_escape_string($conn, $_REQUEST['mno']);
$memail = mysqli_real_escape_string($conn, $_REQUEST['mmail']);

// Create and execute the SQL query
$sql = "INSERT INTO personaldetails (sname, sdob, sgender, sphno, semail, saddress, snation, sreligion, scaste, fname, foccu, fphno, femail, mname, moccu, mphno, memail) 
VALUES ('$sname', '$sdob', '$sgender', '$sphno', '$semail', '$saddress', '$snation', '$sreligion', '$scaste', '$fname', '$foccu', '$fphno', '$femail', '$mname', '$moccu', '$mphno', '$memail')";

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header("Location: Education.php", true, 301);
    exit();
} else {
    echo "ERROR: Hush! Sorry " . mysqli_error($conn);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page1</title>
</head>
<body>
    <!-- Your HTML content here -->
</body>
</html>
