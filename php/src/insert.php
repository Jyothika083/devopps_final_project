<html>
    <head>
        <title>
            Insert page php
        </title>
    </head>
    <body>
        <?php
            $conn = mysqli_connect("db","jyothika","jyothika123","sampledb");
            if($conn === false){
                die("ERROR: Could not connect. "
                    . mysqli_connect_error());
            }
            $fname=$_REQUEST['fname'];
            $lname=$_REQUEST['lname'];
            $sql="INSERT INTO sampletable values('$fname','$lname')";
            if(mysqli_query($conn, $sql)){
                echo "<h3>data stored in a database successfully."
                    . " Please browse your localhost php my admin"
                    . " to view the updated data</h3>";
    
                echo nl2br("\n$fname\n $lname\n");
            } else{
                echo "ERROR: Hush! Sorry $sql. "
                    . mysqli_error($conn);
            }
    

            mysqli_close($conn);
        ?>
    </body>
</html>
