<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- 
    THIS linking is for make it easy 
    the most es=ffecient way is to 
    make sctipts below <body> 

    data tabels plugin requires 

    bootsrap.css
    bootstrap.js 
    jquery.js 

    and the plugin itself contains 
    jquery.datatable.js 
    datatable.bootstrap.css 
    datatables.bootsrap.js

    these libraries I've used are downloaded locally 
    you can use CDN's 
 -->

    <!-- linking  jquery -->
    <script src="vendor/jquery/jquery.min.js"></script>


     <!-- linking bootstrap  CSS and JS -->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- linking data tables bootstrap (CSS+JS) and jquery JS -->
    <link rel="stylesheet" type="text/css" href="vendor/datatables/dataTables.bootstrap4.min.css">
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script> 
    
    
<!-- CDN -->
     <!-- linking  jquery -->
     <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    
    <!-- linking bootstrap  CSS and JS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

    <!-- linking data tables bootstrap (CSS+JS) and jquery JS -->
    <!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> -->
    <!-- <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> -->

<!-- End CDN -->

<?php 
    $conn = mysqli_connect("YOUR_HOST", "DB_USERNAME", "DB_PASSWORD", "DB_NAME") ;
    $query = "select * from employees"; 
    $result = mysqli_query($conn, $query); 
?>

    
    <title>Use Datatable</title>
</head>
<body>
    

    <div class="container">
    <br>
    <h2 class="text-center alert alert-info">Using Data tables with PHP and MySQL</h2>
    <!-- <div class=""> -->
    <table id="table_id" class="display table table-bordered">
    <thead>
        <tr>
            <th>Employee number</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Extention</th>
            <th>email</th>
            <th>Office Code</th>
            <th>reports to </th>
            <th>Job title</th>

        </tr>
    </thead>
    <tbody>
       <?php while($row = mysqli_fetch_array($result))
       {
           echo ' 
                <tr>    
                    <td>'.$row["employeeNumber"].'</td> 
                    <td>'.$row["lastName"].'</td> 
                    <td>'.$row["firstName"].'</td> 
                    <td>'.$row["extension"].'</td> 
                    <td>'.$row["email"].'</td> 
                    <td>'.$row["officeCode"].'</td> 
                    <td>'.$row["reportsTo"].'</td> 
                    <td>'.$row["jobTitle"].'</td> 

                </tr> 
           ';
       }
       ?> 
    </tbody>
</table>
    </div>
    
    <footer class="footer">
       <br>
    </footer>
</div>

    
    <script>
    $(document).ready( function () {
    $('#table_id').DataTable(
    ); 
} );
    </script>
</body>
</html>
