
<html lang="en">
<head>
    <title>Laravel DataTables Tutorial Example</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
        <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</head>
      <body>
         <div class="container" style="width:50%">
               <h2>Laravel DataTables Tutorial Example</h2>
            <table class="display" id="table" >
               <thead>
                  <tr>
                     <th>Nombre</th>
                     <th>Email</th>
                  </tr>
               </thead>
            </table>
         </div>
       <script>
         $(function() {
               $('#table').DataTable({
               processing: true,
               serverSide: true,
               ajax: '{{ url('datatables') }}',
               columns: [
                        { data: 'name', name: 'name' },
                        { data: 'email', name: 'email' }
                     ]
            });
         });
         </script>
   </body>
</html>