<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <div id="headersection">
        <h1>Online Voting System</h1>
       
    </div>
    <hr>
   <div id="bodysection">
    <form action="api_connect/login.php" method="post" enctype="multipart/form-data">
        <h2>Login</h3>
        <input type="number" name="mobile" id="" placeholder="Enter mobile"> 
        <br>
        <br>
        <input type="password" name="password" id="" placeholder="Enter password">
        <br>
        <br>
        <select name="role" id="dropbox">
            <option value="1">Voter</option>
            <option value="2">Group</option>
        </select>
        <br>
        <br>
        <button id="loginbtn" type="submit">Login</button>
        <br>
        <br>
        New user?<a href="routes/register.html">Register here</a>
        <br><br><br>
    </form>
   </div>
</center> 
</body>
</html>