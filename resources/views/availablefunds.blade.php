<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>present</title>
</head>
<body>
<h2>Available funds</h2>

<table border="1">
    <tr>
           <td>id</td>
           <td>Amount</td>
           <td>Donor</td>
           <td>created_at</td>
           <td>updated_at</td>
   </tr>
   @foreach($funds as $fund)
   <tr>
           <td>{{$fund['id']}}</td>
           <td>{{$fund['Amount']}}</td>
           <td>{{$fund['Donor']}}</td>
           <td>{{$fund['created_at']}}</td>
           <td>{{$fund['updated_at']}}</td>
           
   </tr>
   @endforeach
   </table>
</body>
</html>