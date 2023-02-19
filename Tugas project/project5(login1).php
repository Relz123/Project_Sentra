<?php
    require 'project1(koneksi).php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <style>
    body {
            background: #1690A7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    *{
            font-family : sans-serif;
            box-sizing : border-box;
    }
    form{
        width:500px;
        border:2px solid #ccc;
        padding:30px;
        background:#fff;
        border-radius: 15px:
    }
    h2 {
        text-align: center;
        margin-bottom:40px;
    }
    input {
        display: block;
        border : 2px solid #ccc;
        width:95%;
        padding:10px; 
        margin :10px auto;
        border-radius:5px;
    }
    label {
        color : #888;
        font-size: 18px;
        padding:10px;

    }
    button{
        float: righy;
        background:#555;
        padding: 10px 15px;
        color:#fff;
        border-radius: 5px;
        margin-right: 10px;
        border:none;
    }
    button:hover{
        opacity:.7;

    }

    </style> 
</head>

 <body>
    <form action=project5(login).php" method="post"">
        <h2>LOGIN</h2>
        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>
        <label>password</label>
        <input type="password" name="password" placeholder="Password"><br>


        <button type="submit">Login</button>
    </form>

</body>

</html>