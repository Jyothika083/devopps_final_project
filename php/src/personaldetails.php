<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Details</title>
    <link rel="stylesheet" href="stylesd.css"/>
    <style>
        body
        {
            background-color: #d4f1f4;
            background-image: url("Images/col.jpeg");
            background-repeat: no-repeat;
            background-size: cover;
            font-family: "Poppins", sans-serif;
            overflow-x: hidden;
        }
        
    </style>
    <script>
        function validatepform()
        {


            var sname=document.pform.sname.value; 
            var fname=document.pform.fname.value;
            var mname=document.pform.mname.value;
            var nation=document.pform.nation.value;
            var sno=document.pform.sno.value;
            var fno=document.pform.fno.value;
            var mno=document.pform.mno.value;
            var smail=document.pform.smail.value;
            var fmail=document.pform.fmail.value;
            var mmail=document.pform.mmail.value;

            
            if (sname==null || sname=="" || sname.search(/^[a-zA-Z]+ [a-zA-Z]+$/))
            {  
                alert("Student name: enter only alphabets");  
                return false;  
            }
            else if (fname==null || fname=="" || fname.search(/^[a-zA-Z]+ [a-zA-Z]+$/))
            {  
                alert("Father name: enter only alphabets");  
                return false;  
            }
            else if (mname==null || mname=="" || mname.search(/^[a-zA-Z]+ [a-zA-Z]+$/))
            {  
                alert("Mother name: enter only alphabets");  
                return false;  
            }
            else if (nation==null || nation=="" || nation.search(/^[a-zA-Z]+$/))
            {  
                alert("Nationality: enter only alphabets");  
                return false;  
            }
            else if(sno.search(/[0-9]{10}/))
            {  
                alert("Student phone number: Enter a valid mobile number");  
                return false;  
            } 
            else if(fno.search(/[0-9]{10}/))
            {  
                alert("Father phone number: Enter a valid mobile number");  
                return false;  
            }  
            else if(mno.search(/[0-9]{10}/))
            {  
                alert("Mother phone number: Enter a valid mobile number");  
                return false;  
            }   
            else if(smail.search(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/))
            {  
                alert("Student mail: Enter a valid mail id");  
                return false;  
            }  
            else if(fmail.search(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/))
            {  
                alert("Father mail: Enter a valid mail id");  
                return false;  
            }  
            else if(mmail.search(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/))
            {  
                alert("Mother mail: Enter a valid mail id");  
                return false;  
            }  
            
                
        }
        
    </script>

</head>
<body>
    
    <div class="adm">
        <img src="Images/logo.png" width="140px" height="140px"/>
        <h1>
            <a name="edit">Admissions for UG students for the academic year 2022-23</a>
        </h1>
    </div>
    <div class="btn_pre">
        <a href="instruct.php">
            <button type="button" class="b">Previous</button>
        </a>
    </div>
       
    <div class="pd">
        <h1 style="text-align: left;">Personal details:</h1>
        <div class="formm" class="required">
        <form name="pform" method="post" action="page1.php" onsubmit="return validatepform()">
            <table cellspacing="20px">
            <tr>
                <td><label class="required">Name</label></td><td>:</td>
                <td><input type="text"  placeholder="Enter Your Name" name="sname" maxlength="50" size="50"required></td>
            </tr>
            <tr>
                <td><label class="required">
                    DOB
                </label></td><td>:</td>
                <td><input type="date"  placeholder="ENTER DOB" name="sdob" required ></td>
            </tr>
            <tr>
                <td><label class="required">Gender</label></td><td>:</td>
                <td>
                    Male<input type="radio" name="sgender" value="Male" required/>
                    Female<input type="radio" name="sgender" value="Female" required/>
                    Others<input type="radio" name="sgender" value="Others" required/>
                </td>
            </tr>
            <tr>
                <td><label class="required">Student Phone Number</label></td><td>:</td>
                <td><input type="text" name="sno" maxlength="10" placeholder="Enter Your Phone Number" required/></td>
            </tr>
            <tr>
                <td><label class="required">Student Email</label></td><td>:</td>
                <td><input type="text" name="smail" placeholder="Enter Your Email id" maxlength="30" required/></td>
            </tr>
            <tr>
                <td><label class="required">Father Name</label></td><td>:</td>
                <td><input type="text" name="fname" placeholder="Enter Your Father's Name" maxlength="30" required/></td>
            </tr>
            <tr>
                <td><label class="required">Father Occupation</label></td><td>:</td>
                <td><input type="text" name="foccu" placeholder="Enter Your Father's Occupation" maxlength="30" required/></td>
            </tr>
            <tr>
                <td><label class="required">Father Phone Number</label></td><td>:</td>
                <td><input type="text" name="fno" placeholder="Enter Your Father's Phone Number" maxlength="10" required/></td>
            </tr>
            <tr>
                <td><label class="required">Father Email</label></td><td>:</td>
                <td><input type="text" name="fmail" placeholder="Enter Your Father's Email id" maxlength="30" required/></td>
            </tr>
            <tr>
                <td><label class="required">Mother Name</label></td><td>:</td>
                <td><input type="text" name="mname" placeholder="Enter Your Mother's Name" maxlength="30" required/></td>
            </tr>
            <tr>
                <td><label class="required">Mother Occupation</label></td><td>:</td>
                <td><input type="text" name="moccu" placeholder="Enter Your Mother's Occupation" maxlength="30" required/></td>
            </tr>
            <tr>
                <td><label class="required">Mother Phone Number</label></td><td>:</td>
                <td><input type="text" name="mno" placeholder="Enter Your Mother's Phone Number" maxlength="10" required/></td>
            </tr>
            <tr>
                <td><label class="required">Mother Email</label></td><td>:</td>
                <td><input type="text" name="mmail" placeholder="Enter Your Mother's Email id" maxlength="30" required/></td>
            </tr>
            <tr>
                <td><label class="required">Address</label><br/><br/><br/></td><td>:</td>
                <td><textarea name="address" rows="5" columns="80" required></textarea></td>
            </tr>
            <tr>
                <td><label class="required">Nationality</label></td><td>:</td>
                <td><input type="text" name="nation" maxlength="20" placeholder="Enter Your Nationality" required/></td>
            </tr>
            <tr>
                <td><label class="required">Religion</label></td><td>:</td>
                <td>
                    <select name="Religion" style="width:50%; height:30px" required>
                    <option value="-1">Religion:</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Christian">Christian</option>
                    <option value="Muslim">Muslim</option>
                    <option value="Others">Others</option>
                </td>
            </tr>
            <tr>
                <td>Caste</td><td>:</td>
                <td><input type="text" name="scaste" maxlength="20" placeholder="Enter Your Caste"/></td>
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
    <marquee style="color: black;">
        Enter the details in uppercase and fields marked as <font color="red">*</font> are mandatory
    </marquee>
</body>
</html>