<!doctype html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Application Form</title>
    <link rel="stylesheet" href="stylesd.css">
    <style>
        body {
            background-color: #d4f1f4;
            font-size: larger;
            background-image: url("Images/col.jpeg");
            font-size: larger;
            background-repeat: no-repeat;
            background-size: cover;
            font-family: "Poppins", sans-serif;
            overflow-x: hidden;
        }
    </style>
    <script>
        function validateeform()
        {
            var sclper=parseInt(document.eform.sclper.value);
            var colper=parseInt(document.eform.colper.value);
            if(sclper<35 || sclper>100)
            {  
                alert("Percentage: Enter a valid percentage");  
                return false;  
            } 
            else if(colper<35 || colper>100)
            {  
                alert("Percentage: Enter a valid percentage");  
                return false;  
            }  
            
                
        }
    </script>
</head>

<body>
    <div class="adm">
        <img src="images/logo.png" width="140px" height="140px" />
    </div>

    <a name="edit"><h1 style="text-align: center;">Admissions for UG students for the academic year 2022-23</h1></a>
    </div>
    <div class="btn_pre">
        <a href="personaldetails.php">
            <button type="button" class="b">Previous</button>
        </a>
    </div>
    <div class="pd">
        <h1 style="text-align: left;">Education:</h1>
        <div class="formm" class="required">
        <form name="eform" method="post" action="page2.php" onsubmit="return validateeform()">
            <table cellspacing="20px">

                <tr>
                    <td><label class="required">School studied in</label></td>
                    <td>:</td>
                    <td><input type="text"  placeholder="Enter Your School Name" name="sclname" maxlength="50" size="50"required></td>
                    </td>
                </tr>
                <tr>
                    <td><label class="required">Year of passing</label></td>
                    <td>:</td>
                    <td>
                        <select name="smonth" id="Month" required>
                            <option value="-1">Month:</option>
                            <option value="January">Jan</option>
                            <option value="February">Feb</option>
                            <option value="March">Mar</option>
                            <option value="April">Apr</option> 
                            <option value="May">May</option>
                            <option value="June">Jun</option>
                            <option value="July">Jul</option>
                            <option value="August">Aug</option>
                            <option value="September">Sep</option>
                            <option value="October">Oct</option>
                            <option value="November">Nov</option>
                            <option value="December">Dec</option>
                        </select>

                        <select name="syear" id="Year" required>
                            <option value="-1">Year:</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label class="required">School address</label><br /><br /><br /></td>
                    <td>:</td>
                    <td><textarea name="saddress"placeholder="Enter your School Address" rows="4" cols="30" required></textarea>
                </tr>
                <tr>
                <tr>
                    <td><label class="required">Board</label></td>
                    <td>:</td>
                    <td>ICSE<input type="radio" name="sboard" value="ICSE" required/>
                        CBSE<input type="radio" name="sboard" value="CBSE" required/>
                        STATE<input type="radio" name="sboard" value="STATE" required/>
                    </td>
                </tr>
                <tr>
                    <td><label class="required">Percentage</label></td>
                    <td>:</td>
                    <td>
                        <input type="text" name="sclper" placeholder="Enter Percentage" maxlength="4" required/>
                        
                    </td>
                </tr>
                <tr>
                    <td><label class="required">Upload 10<sup>th</sup> marks</label></td>
                    <td>:</td>
                    <td>
                        <input type="File" accept=".pdf" name="tenthmarks" required/></td>
                    </td>
                    </td>
                </tr>
                <td><label class="required">College studied in</label></td>
                <td>:</td>
                <td><input type="text"  placeholder="Enter Your College Name" name="colname" maxlength="50" size="50"required></td>
                </td>
                </tr>
                <tr>
                    <td><label class="required">Year of passing</label></td>
                    <td>:</td>
                    <td>
                        <select name="cmonth" id="Month" required>
                            <option value="-1">Month:</option>
                            <option value="January">Jan</option>
                            <option value="February">Feb</option>
                            <option value="March">Mar</option>
                            <option value="April">Apr</option>
                            <option value="May">May</option>
                            <option value="June">Jun</option>
                            <option value="July">Jul</option>
                            <option value="August">Aug</option>
                            <option value="September">Sep</option>
                            <option value="October">Oct</option>
                            <option value="November">Nov</option>
                            <option value="December">Dec</option>
                        </select>

                        <select name="cyear" id="Year" required>
                            <option value="-1">Year:</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label class="required">College address</label><br /><br /><br /></td>
                    <td>:</td>
                    <td><textarea name="caddress" placeholder="Enter your College Address" rows="4" cols="30" required></textarea></td>
                </tr>

                <tr>
                    <td><label class="required">Board</label></td>
                    <td>:</td>
                    <td>
                        CBSE<input type="radio" name="Board" value="CBSE" required/>
                        STATE<input type="radio" name="Board" value="STATE" required/>
                    </td>
                </tr>
                <tr>
                    <td><label class="required">Stream</label></td>
                    <td>:</td>
                    <td>
                        <select name="Stream" id="Stream" required>
                        <option value="-1">Stream:</option>
                            <option value="PCMB">PCMB</option>
                            <option value="PCMC">PCMC</option>
                            <option value="PCME">PCME</option>
                <tr>
                    <td><label class="required">Percentage</label></td>
                    <td>:</td>
                    <td>
                        <input type="text"  name="colper" placeholder="Enter Percentage" maxlength="4" required/>
                        </td>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td><label class="required">Upload 12<sup>th</sup> marks</label></td>
                    <td>:</td>
                    <td>
                        <input type="File" accept=".pdf" name="markscard" required/></td>
                    </td>
                    </td>
                </tr>
                <td><label class="required">Admission</label></td>
                <td>:</td>
                <td>
                    <select name="type" id="type" required> 
                        <option value="-1">Type:</option>
                        <option value="K-CET">K-CET</option>
                        <option value="COMED-K">COMED-K</option>
                        <option value="Management">Management</option>
                    </select>
                    </td>
                <tr>
                <td><label class="required">Engineering course</label></td>
                <td>:</td>
                <td>
                    <select name="Course" id="Course" required> 
                        <option value="-1">Branch:</option>
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
                     </tr>
            </table>
            <input type="reset" value="Reset" class="b"/>
            <div class="btn">
                <a href="#edit"><button type="button" class="b">Edit</button></a>
                <button type="submit" class="b">Save and Next</button>
        
            </div>
        </form>
    </div>
</div>
    <br/>

    <marquee class="color :black;">Enter the details in uppercase and fields marked as <font color="red">*</font> are mandatory
    </marquee>
</body>

</html>