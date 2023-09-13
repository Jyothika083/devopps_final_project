<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructions</title>
    <link rel="icon" href="Images/logo.png">
    <style>
        body{
            width: 100%;
            height: 100%;
            background-color: #81cdf8;
            background-image: url("Images/col.jpeg");
            background-repeat: no-repeat;
            background-size: cover;
            font-family: "Poppins",sans-serif;
            overflow-x: hidden;
        }
        .top
        {
            text-align: center;
        }
        .in
        {
            width:80%;
            background-color: white;
            font-size: larger;
            box-shadow: 2px 2px 10px gray;
            margin:auto;
            align-items: center;
            padding:40px;
            border-radius: 5px;

        }
        .btn_pre
        {
            margin-left: 75px;
            width: 350px;
            height: 30px;
            padding: 20px;
            padding-right: 80%;
        }
        .b{
            font-size: large;
            padding: 5px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="top">
        <img src="Images/logo.png" width="140px" height="140px"/>
        <h1>BMS College of Engineering</h1>
    </div>
    <div class="btn_pre" class="b">
        <a href="index.php">
            <button type="button" class="b">Previous</button>
        </a>
    </div>
   
    <div class="in">
        <h2>
            Please read the following instructions before filling the application form
        </h2>
        <ol>
            <li>
                The form consists of three sections <ol>
                    <li>
                        Personal details
                    </li>
                    <li>
                        Educational details
                    </li>
                    <li>
                        Miscellaneous details and File upload
                    </li>
                </ol>
            </li>
            <li>
                All the three sections needs to be filled.
            </li>
            <li>
                Fields marked as <font color="red">*</font> are mandatory.
            </li>
            <li>
                It is recommended to enter the details in uppercase(optional).
            </li>
            <li>
                Files required <ul>
                    <li>
                       Recent profile photo
                    </li>
                    <li>
                        ID proof(eg:Aadhar card)
                    </li>
                    <li>
                        10th marks card
                    </li>
                    <li>
                        12th marks card
                    </li>
                </ul>
            </li>
        </ol>
    </div>
   <div style="text-align: center; margin-top: 25px; ">
        <a href="personaldetails.php"><button type="button"  class="b">Proceed</button></a>
   </div>
</body>
</html>