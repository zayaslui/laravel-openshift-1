
<html lang="en">
<head>
    <title>Laravel DataTables Tutorial Example</title>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>  
        <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
        <link  href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
        <style>
        /*Resaltar filas y columnas*/
          td.highlight {
              background-color: whitesmoke !important;
          }
          /*Resaltar segun criterio*/
          td.highlight {
              font-weight: bold;
              color: blue;
          }
        </style>
</head>
      <body>
         <div class="container" style="width:100%">
               <h2>Example</h2>
            <table class="display" id="table" >
               <thead>
                  <tr>
                     <th>Id</th>                    
                     <th>Nombre</th>
                     <th>Email</th>
                  </tr>
               </thead>

            </table>
         </div>
       <script>
         $(function() {

              // Setup - add a text input to each footer cell
              $('#table tfoot th').each( function () {
                  var title = $(this).text();
                  $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
              } );

              // setup datatables
               var table = $('#table').DataTable({
               processing: true,
               //"dom": '<"top"i>rt<"bottom"flp><"clear">' ,//posicionamiento busqueda y cantidad abajo
               //"dom": '<"top"iflp<"clear">>rt<"bottom"iflp<"clear">>', //controles dobles arriba abajo
               stateSave: true,  //salvar estado
               "pagingType": "full_numbers",  //paginacion
               // "scrollY":        "200px",
              // "scrollCollapse": true,
              // "paging":         false,
              // "scrollX": true,       //desplazamiento horizontal
              "language": {
                      "lengthMenu": "Resultados _MENU_ registros por paginas",
                      "zeroRecords": "No encontrado - intente con otro nombre",
                      "info": "Viendo pagina _PAGE_ de _PAGES_",
                      "infoEmpty": "No hay registros",
                      "infoFiltered": "(filtered from _MAX_ total records)"
                },
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todo"]], //menu
                "createdRow": function ( row, data, index ) {
                    // if ( data[0].replace(/[\$,]/g, '') * 1 > 100 ) {
                    if(data['id']>10){
                        $('td', row).eq(1).addClass('highlight');       //darle color segun especificacion
                    }  
                    // }
                },
               serverSide: true,
               "order": [[ 0, "asc" ]], // order default
               ajax: '{{ url('datatables') }}',
               columns: [
                        {data :'id', name:'id'},
                        { data: 'name', name: 'name' },
                        { data: 'email', name: 'email' }
                     ],

            });

              // Apply the search
                  table.columns().every( function () {
                      var that = this;
               
                      $( 'input', this.footer() ).on( 'keyup change', function () {
                          if ( that.search() !== this.value ) {
                              that
                                  .search( this.value )
                                  .draw();
                          }
                      } );
                  } );                


              $('#table tbody')
                  .on( 'mouseenter', 'td', function () {
                      var colIdx = table.cell(this).index().column;
           
                      $( table.cells().nodes() ).removeClass( 'highlight' );
                      $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
                  } );
         });
         </script>
   </body>
</html>