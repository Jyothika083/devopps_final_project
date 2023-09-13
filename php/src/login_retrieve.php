<?php
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) 
{
header('Location: index.php');
}
?>
<html>
    <head>
        <title>Retrieval page</title>
        <style>
            body
            {
                font-family: "Poppins", sans-serif;
            }
            .head
            {
                height: 100px;
                width:auto;
                background-color: 	rgb(0,0,255);
                padding:10px;
                
            }
        </style>

        <link rel="icon" href="Images/logo.png"/>
    </head>
    <body>
    <div class="head">
        <table>
        <tr>
            <td>
            <h1 style="color:white;">B.M.S College of Engineering Admin login page</h1>
            </td>
            <td>
            <a href="logout.php"><button type="button" class="home" style="background-color:transparent;font-size: large;border-style:solid;border-radius: 5px;
                border-color:white;color:white;position: relative; left: 500px; " >Logout </button></a>
            </td>
        </tr>
        </table>
    </div>
        <h2 style="padding:20px">UG admission details</h2>
        <form style="padding:20px" method="post" action="details.php">
        <label class="required">Admission Type:  </label>
        <select name="admissiontype" style="width:50%; height:30px" required>
                     <option value="-1">Type</option>
                    <option value="K-CET">K-CET</option>
                    <option value="COMED-K">COMED-K</option>
                    <option value="Management">Management</option>
            </select>
            <br/>
            <br/>

            <label class="required">Branch:        </label>
                <select name="Branch" style="width:50%; height:30px" required>
                <option value="-1">Course</option>
                    <option value="Civil Engineering">Civil</option>
                    <option value="Mechanical Engineering">Mechanical</option>
                    <option value="Electrical & Electronics Engineering">Electrical & Electronics</option>
                    <option value="Electronics & Communication Engineering">Electronics & Communication</option>
                    <option value="Industrial Engineering & Management">Industrial</option>
                    <option value="Computer Science & Engineering">Computer Science</option>
                    <option value="Electronics & Telecommunication Engineering">Electronics & Telecommunication</option>
                    <option value="Information Science & Engineering">Information Science</option>
                    <option value="Electronics & Instrumentation Engineering">Electronics & Instrumentation</option>
                    <option value="Medical Electronics Engineering">Medical Electronics</option>
                    <option value="Bio Technology">Bio Technology</option>
                    <option value="Chemical Engineering">Chemical</option>
                    <option value="Aerospace Engineering">Aerospace</option>
                    <option value="Artificial Intelligence & Machine Learning">Artificial Intelligence & Machine Learning</option>
                </select>
            <br/>
            <br/>
            <label class="required">Gender:        </label>
            <select name="sgender" style="width:25%; height:30px" required>
                     <option value="-1">Type</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
            </select>
            <br/>
            <br/>
            <label class="required">Sorting:        </label>
                <select name="sort" required>
                    <option value="asc">A-Z</option>
                    <option value="desc">Z-A</option>
                </select> 
            <br/><br/>
            <input type="submit" name="submit"/>
        </form>
    </body>
</html>