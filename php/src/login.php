<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="login1.css" />
  <link rel="icon" href="Images/logo.png">
  <style>
    body
    {
      overflow-y: hidden;
    }
  </style>
</head>

<body>
  <div class="head">
    <table>
      <tr>
        <td>
          <h2>BMSCE CAMPUS LOGIN</h2>
        </td>
        <td>
          <a href="index.php"><button type="button" class="home" style="background-color:transparent;font-size: large;border-style:solid;border-radius: 5px;
            border-color:rgb(77,120,12);color:rgb(77, 120, 12);position: relative; left:800px; ">Home
             page</button></a>
        </td>
      </tr>
    </table>


  </div>
  <hr>
  <div class="wrapp">
    <div class="log">
    </div>


    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>WELCOME TO BMSCE CAMPUS</h3>
            <p>To keep connected with us please login with your personal credentials</p>
          </div>
        </div>
        <form class="login-form" method="post" action="validate.php">
          <input type="text" name="username" placeholder="Username" />
          <input type="password" name="passcode" placeholder="Password" />
          <button type="Submit">login</button>
        </form>
      </div>
    </div>
  </div>

</body>

</html>