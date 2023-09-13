<?php
ob_start(); // Start output buffering
require '/var/www/tcpdf/tcpdf.php';



// Database connection
$servername = "db";
$username = "jyothika";
$password = "jyothika123";
$database = "AdmissionForm";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from tables
$query = "SELECT pd.appid, pd.sname, pd.semail, pd.sphno, pd.fname, pd.mname, e.schoolperc, e.collegeperc, e.engcourse, e.admissiontype
          FROM personaldetails pd
          INNER JOIN education e ON pd.appid = e.appid
          INNER JOIN miscellaneous m ON pd.appid = m.appid
          WHERE pd.appid = (SELECT max(appid) FROM personaldetails)";

$result = $conn->query($query);

// Create PDF
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Admission Form Data');
$pdf->SetHeaderData('', 0, '', '', array(0, 0, 0), array(255, 255, 255));
$pdf->setFooterData(array(0, 0, 0), array(255, 255, 255));

$pdf->setHeaderFont(array('dejavusans', '', 10));
$pdf->setFooterFont(array('dejavusans', '', 10));

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

$pdf->SetMargins(10, 10, 10, true);
$pdf->SetAutoPageBreak(TRUE, 10);

$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

$pdf->setFontSubsetting(true);

$pdf->SetFont('dejavusans', '', 12, '', true);

$pdf->AddPage();

// Output data in the PDF
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pdf->SetFont('helvetica', '', 20);
        $pdf->Cell(60, 10, 'B.M.S College of Engineering', 0, 1);
        $pdf->SetFont('helvetica', '', 15);
        $pdf->Cell(40, 20, 'UG Admissions', 0, 1);
        $pdf->SetFont('dejavusans', '', 10);
        $pdf->Cell(40, 10, 'Application ID: ' . $row['appid'], 0, 1);
        $pdf->Cell(40, 10, 'Student Name: ' . $row['sname'], 0, 1);
        $pdf->Cell(40, 10, 'Email: ' . $row['semail'], 0, 1);
        $pdf->Cell(40, 10, 'Contact number: ' . $row['sphno'], 0, 1);
        $pdf->Cell(40, 10, 'Father Name: ' . $row['fname'], 0, 1);
        $pdf->Cell(40, 10, 'Mother Name: ' . $row['mname'], 0, 1);
        $pdf->Cell(40, 10, 'Tenth marks: ' . $row['schoolperc'] . '%', 0, 1);
        $pdf->Cell(40, 10, 'Twelfth Marks: ' . $row['collegeperc'] . '%', 0, 1);
        $pdf->Cell(40, 10, 'Engineering Course: ' . $row['engcourse'], 0, 1);
        $pdf->Cell(40, 10, 'Admission Type: ' . $row['admissiontype'], 0, 1);
        $pdf->Ln();
    }
} else {
    $pdf->Cell(0, 10, 'No data found.', 0, 1);
}

$conn->close();

ob_end_clean(); // Clean the output buffer

$pdf->Output('admission_form_data.pdf', 'D');
?>
