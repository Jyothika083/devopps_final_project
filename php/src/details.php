<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student details</title>
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
        .details {
            border: 1px solid black;
            }
        .heading
        {
            background-color:rgb(230,230,250);
        }
    </style>

    <link rel="icon" href="images/logo.png"/>
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
    <br/>
    <br/>
    <br/>

        <?php echo $deleteMsg??''; ?>
        <table  border=3 cellspacing=2 cellpadding=15>
        <thead>
            <tr>
            <th class='heading'>Application number</th>
            <th class='heading'>Full Name</th>
            <th class='heading'>Email</th>
            <th class='heading'>Phone number</th>
            </tr>
        </thead>
        <tbody>
    <?php
        include('fetchdata.php');
        if(is_array($fetchData)){      
        $sn=1;
        foreach($fetchData as $data){
        ?>
        <tr>
        <td><?php echo $data['appid']??''; ?></td>
        <td><?php echo $data['sname']??''; ?></td>
        <td><?php echo $data['semail']??''; ?></td> 
        <td><?php echo $data['sphno']??''; ?></td> 
        </tr>
        <?php
        $sn++;}}else{ ?>
        <tr>
            <td colspan="8">
        <?php echo $fetchData; ?>
        </td>
        <tr>
        <?php
        }?>
        </tbody>
        </table>



</body>
</html>