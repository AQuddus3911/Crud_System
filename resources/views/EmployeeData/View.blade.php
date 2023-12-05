<!doctype html>
<html lang="en">
  <head>
    <title>EmployeeData View</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
   <div class="conatiner">
    <table class="table">

        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Mobile</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employeedata as $employeedata)
            <tr>
                <td>{{$employeedata->name}}</td>
                <td>{{$employeedata->address}}</td>
                <td>{{$employeedata->mobile}}</td>
</tr>
@endforeach
        </tbody>
    </table>
   </div>   
   
  </body>
</html>