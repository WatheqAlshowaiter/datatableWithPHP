<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- linking bootstrap  -->
     <link rel="stylesheet" type="text/css" href="vendor/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/dataTables.bootstrap4.css">
<!-- CDN -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">


    
    <title>Use Datatable</title>
</head>
<body>
    <h2>Data tables</h2>

    <div class="container">

    <div class="">
    <table id="table_id" class="display table table-bordered">
    <thead>
        <tr>
            <th>User</th>
            <th>Posts</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Ali</td>
            <td>Post 1</td>
        </tr>
        <tr>
            <td>Ahmed</td>
            <td>Post 2</td>
        </tr>
    </tbody>
</table>
    </div>
    
    
</div>
    
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- <script src="vendor/jquery.dataTables.min.js"></script> -->
<!-- CDN  -->
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"> </script>
    <script>
        $(document).ready( function () {
    $('#table_id').DataTable(
    ); 
} );
    </script>
</body>
</html>