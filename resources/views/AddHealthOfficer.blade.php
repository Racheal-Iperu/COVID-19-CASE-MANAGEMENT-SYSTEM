<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Health officer</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages.css')}}">
</head>
<body>
<div class="sidenav">
    <p style="background-color:white;">navigation</p>
    <a href="#">Add Health Officer</a>
    <a href="#">PATIENTS</a>
    <a href="#">FUNDS</a>
    <a href="#">AYMENTS</a>
    <a href="#">GRAPHS</a>
    <a href="#">REPORTS</a>
    <a href="#">RECORDS</a>
    </div>
    <h3 id='AHO'>ADD HEALTH OFFICER</h3>
    <form action="add" method="POST">
    @csrf 
    <label for="name">NAME</label><br>
    <input type="text" name="name"><br><br>
    <label for="username">USERNAME</label><br>
    <input type="text" name="username"><br><br>
    <label for="GENDER">GENDER:</label>
    <input type="text" name="gender"><br><br>
    <label for="CONTACT">CONTACT</label><br>
    <label for="CONTACT">email</label>
    <input type="text" name="EMAIL"><br><br>
    <label for="CONTACT">phone</label>
    <input type="text" name="PHONE"><br><br>
    <button type="submit">submit</button>
    <button type="submit">cancel</button>
    </form>
</body>
</html>