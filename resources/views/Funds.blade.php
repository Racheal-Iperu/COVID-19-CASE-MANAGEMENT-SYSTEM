<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funds</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages.css')}}">
</head>
<body>
<button onclick="window.location='availablefunds'">present</button>
<div class="sidenav">
    <p style="background-color:white;">navigation</p>
    <a href="#">Add Health Officer</a>
    <a href="#">PATIENTS</a>
    <a href="#">FUNDS</a>
    <a href="#">pAYMENTS</a>
    <a href="#">GRAPHS</a>
    <a href="#">REPORTS</a>
    <a href="#">RECORDS</a>
    </div>
    <h3 id='AHO'>FUNDS</h3>
    <form action="plus" method="POST">
    @csrf 
    <label for="name">Amount</label><br>
    <input type="text" name="amount"><br><br>
    <label for="donor">Donor</label><br>
    <input type="text" name="donor"><br><br>
    
    <label for="date">Date</label>
    <input type="text" name="date" placeholder="yyyy-mm-dd"><br><br>
    
    <button type="submit">submit</button>
    <button type="reset">cancel</button>
    </form>
</body>
</html>