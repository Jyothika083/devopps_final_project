<?php
$conn = mysqli_connect("db", "jyothika", "jyothika123", "AdmissionForm");
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sports = mysqli_real_escape_string($conn, $_REQUEST['Sports']);
$scholarships = mysqli_real_escape_string($conn, $_REQUEST['SCHOLARSHIPS']);
$otherAc = mysqli_real_escape_string($conn, $_REQUEST['OTHERACH']);
$photo = mysqli_real_escape_string($conn, $_REQUEST['photo']);
$idproof = mysqli_real_escape_string($conn, $_REQUEST['idproof']);
$sign = mysqli_real_escape_string($conn, $_REQUEST['sign']);

// Get the max_appid value
$query = mysqli_query($conn, "SELECT MAX(appid) AS max_appid FROM personaldetails");
if (!$query) {
    echo "ERROR: Unable to retrieve max_appid - " . mysqli_error($conn);
    mysqli_close($conn);
    exit();
}

$row = mysqli_fetch_assoc($query);
$max_appid = $row['max_appid'];

$sql = "INSERT INTO miscellaneous (appid, sports, Scholarships, otherAc, photo, idproof, sign) 
VALUES ('$max_appid', '$sports', '$scholarships', '$otherAc', '$photo', '$idproof', '$sign')";

if (mysqli_query($conn, $sql)) {
    ?>
    <style>
        body
        {
            font-family: 'Poppins',sans-serif;
            font-size: large;
        }
        .pop
        {
            background-image: url("Images/success.png");
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
            width:500px;
            height: 300px;
            box-shadow: 5px 5px 10px gray;
            margin-left: 500px;
            margin-bottom: 50px;
        }
        .adm
        {
            margin:25px;
            text-align: center;
        }
    </style>
    <div class="adm">
        <img src="Images/logo.png" width="140px" height="140px"/>
        <h1>
            <a name="edit">Admissions for UG students for the academic year 2022-23</a>
        </h1>
    </div>
    <div class="pop"></div>
    <div style="margin: auto;text-align: center;">
        <?php
        echo "Success: Application id is : " . $max_appid;
        ?>
        <button type="button" onclick="redirectToAnotherFile()">Generate PDF</button>
        
        <script>
            function redirectToAnotherFile() {
                window.location.href = "generatepdf.php";
            }
        </script>
        <br/>
        <a href="index.php" style="text-decoration: none;">Back to home page</a>
    </div>
    <?php
    exit();
} else {
    echo "ERROR: Hush! Sorry " . mysqli_error($conn);
}

mysqli_close($conn);
?>
