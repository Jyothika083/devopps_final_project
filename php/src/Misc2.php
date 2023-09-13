<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Micellaneous Details</title>
    <link rel="stylesheet" href="stylesd.css"/>
    <link rel="icon" href="Images/logo.png">
    <style>
        body{
            background-color: #d4f1f4;
            background-image: url("Images/col.jpeg");
            background-repeat: no-repeat;
            font-size: larger;
            background-size: cover;
            background-position: center;
            background-position: fixed;
            font-family: "Poppins", sans-serif;
            overflow-x: hidden;
        }
    </style>
</head>
<body>
    <div class="adm">
        <img src="Images/logo.png" width="140px" height="140px"/>
        <h1>
            <a name="edit">Admissions for UG students for the academic year 2022-23</a>
        </h1>
    </div>
    <div class="btn_pre">
        <a href="education.php">
            <button type="button" class="b">Previous</button>
        </a>
    </div>
    <div class="pd">
        <h1 style="text-align: left;">Miscellaneous details:</h1>
        <div class="formm" class="required">
        <form action="page3.php" method="post">
        <table cellspacing="20px">
        <tr>
            <td><label>Sports</label></td><td>:</td>
            <td><textarea name="Sports" rows="5" columns="30"></textarea></td>
        </tr>
        <tr>
            <td><label>Scholarships</label></td><td>:</td>
            <td><textarea name="SCHOLARSHIPS" rows="5" columns="30"></textarea></td>
        </tr>
        <tr>
            <td><label>Other Achievements</label></td><td>:</td>
            <td><textarea name="OTHERACH" rows="5" columns="30"></textarea></td>
        </tr>
        <tr>
            <td><h2>File upload:</h2></td>
        </tr>
        <tr>
            <td><label class="required">Recent passport size photo (jpg)</label></td><td>:</td>
            <td><input type="File" name='photo' accept=".jpg" required/></td>
        </tr>
        <tr>
            <td><label class="required">ID proof (pdf)</label></td><td>:</td>
            <td><input type="File" name="idproof" accept=".pdf" required/></td>
        </tr>
       
        <tr>
            <td><label class="required">Signature (jpg)</label></td><td>:</td>
            <td><input type="File" name="sign" accept=".jpg" required/></td>
        </tr>
        </table>
        <input type="reset" value="Reset" class="b"/>
        <div class="btn">
            <a href="#edit"><button type="button" class="b">Edit</button></a>
            <a href="success.php">
                <button type="submit" class="b">Submit</button> 
            </a>
    
        </div>
        </form>
        </div>
    </div>        

<marquee style="color: black;">
    Enter the details in uppercase and fields marked as <font color="red">*</font> are mandatory
</marquee>
</body>
</html>