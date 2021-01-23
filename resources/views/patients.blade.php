<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>patients</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages.css')}}">
</head>
<body>
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
    <h2 id='AHO' >PATIENTS</h2>
    <form >
    <table style="border: 2px solid black;background-color:white">
    <tr>
    <td>
    <p><h4 > By hospital <select>  
    <option value="general">General</option> 
    <option value="regional">Regional</option>
    <option value="referral">Referral</option>
    </select> 
    </td> 
    <td> 
     By health officer
     </td>
     <td> By month
     <select>  
    <option value="january">january</option> 
    <option value="febuary">febuary</option>
    <option value="march">march</option>
    <option value="april">april</option>
    <option value="may">may</option>
    <option value="june">june</option>
    <option value="july">july</option>
    <option value="august">august</option>
    <option value="september">september</option>
    <option value="october">october</option>
    <option value="november">november</option>
    <option value="december">december</option>

    </select> 
     </h4></td></p>
     </tr>
     </table>
     </form>
</body>
</html>