<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="..\resources\css\app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="..\resources\js\css\bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="..\resources\js\daterangepicker\daterangepicker.css">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand text-success bg-ligth "  href="#">Laravel con Ajax</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Información</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Opciones
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Comentar</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Algo mas</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </nav>
      
    
      <div class="container">
    
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Registro Historico</button>
              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Registrar nueva data</button>
              <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Apartado de graficos</button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
              <h3>Lista de datos</h3>
            <table id="tabla-data" class="table table-hover">
                <thead>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Codigo</td>
                    <td>Unidad de Medida</td>
                    <td>Valor</td>
                    <td>Fecha</td>
                    <td>Tiempo</td>
                    <td>Origen</td>
                    <td>Acciones</td>
                </thead>

            </table>

            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
              <h2>Registrar nueva data</h2> <br> <br>
              <form id="registro">
                @csrf

                <h3>Nombre del valor</h3>
                <select class="form-select" required aria-label="nombreIndicador" id="combo1">
                  <option selected disabled value="">Nombre de Indicador</option>
                </select>
                <br>


                <h3>Valor en codigo</h3>
                <select disabled class="form-select" required aria-label="valorIndicador" id="combo2">
                  <option selected disabled value="">...</option>
                </select>
                <br>
               
                <h3>Unidad de Medida</h3>


                <div class="form-check">
                  <input class="form-check-input" type="radio" value="Pesos"  name="checkU" id="checkPesos" required>
                  <label class="form-check-label" for="checkPesos">
                    Pesos
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="Dólar" name="checkU" id="checkDolar"  required>
                  <label class="form-check-label" for="checkDolar">
                    Dólar
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="Porcentaje" name="checkU" id="checkPorcentaje" required>
                  <label class="form-check-label" for="checkPorcentaje">
                    Porcentaje
                  </label>
                </div> 
                <br>

                <h3>Valor numerico de la moneda</h3>
                <div class="col-3">
                  <input type="text" id="valor" class="form-control" placeholder="Valor" min=".01" step="any" pattern="[0-9]+([\.][0-9]+)?"   onkeypress="return filterFloat(event,this);" aria-label="Valor" required>
                </div> <br>
                <div class="col-2">
                <br>
                  <h3>Fecha</h3>
                <input required class="form__input form-control" type="date" id="fecha"> <br> 
                </div>


                <h3>Tiempo</h3>
                <div class="col-4">
                  <input type="text" class="form-control" placeholder="Tiempo" aria-label="Tiempo" id="tiempo"> <br>
                </div>
                <h3>Origen</h3>
                <div class="col-4">
                  <input required type="text" class="form-control" placeholder="Origen" id="origen" aria-label="Origen de la información"> <br>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
             
              </form>
            </div>
            <?php include(app_path().'\includes\editar.php');?>
            @csrf
            <br>
           <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
              
             {{--   <div class="col-md-5">Sample Data - Total Records - <b><span id="total_records"></span></b></div>
              <div class="col-md-5">
               <div class="input-group input-daterange">De Fecha
                   <input type="text" name="from_date" id="from_date" readonly class="form-control" />
                   <div class="input-group-addon">Hasta</div>
                   <input type="text"  name="to_date" id="to_date" readonly class="form-control" />
               </div>
              </div>
              <div class="col-md-2">
                <br>
               <button type="button" name="filter" id="filter" class="btn btn-info btn-sm">Buscar</button>
               <button type="button" name="refresh" id="refresh" class="btn btn-warning btn-sm">Refrescar</button> <br>
              </div> --}}
             
            
            <br><br>
            <div class="col-md-5">Total- <b><span id="total_records"></span></b></div>
              <div class="col-md-5">
               <div class="input-group input-daterange">De Fecha
                   <input type="text" name="from_date" id="from_date" readonly class="form-control" />
                   <div class="input-group-addon">Hasta</div>
                   <input type="text"  name="to_date" id="to_date" readonly class="form-control" />
               </div>
              </div>
              <div class="col-md-2">
                <br>
               <button type="button" name="filter" id="filter" class="btn btn-info btn-sm">Buscar</button>
               <button type="button" name="refresh" id="refresh" class="btn btn-warning btn-sm">Refrescar</button> <br>
              </div> 
            <div>
              <canvas id="bar_chart"></canvas>
            </div>

                    
                            <div class="card-body">
                              <table class="table table-striped table-bordered" id="order_table">
                                <thead>
                                    <tr>
                                        <th width="33%">Nombre</th>
                                        <th width="33%">Valores Sumados</th>
                                        <th width="33%">Fecha Concidiente</th>
                                        
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                             <?php include(app_path().'\includes\action.php');?>
                             {{-- <section class="content container-fluid" id="bar_chart"> --}}
                            </div>
            
                        </div>
                    </div>
                </div>
            </div>
            
              {{ csrf_field() }}
             </div>
            </div>
           
        <br>
          <!-- Modal Editar-->
      
      <script src="..\resources\js\acciones.js"></script>
      <script src="..\resources\js\jquery.js"></script>
      <script type="text/javascript" src="..\resources\js\datatable.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
      <script src="..\resources\js\js\bootstrap-datepicker.js"></script>
      <script src="https://momentjs.com/downloads/moment-with-locales.js"></script>
      <script src="..\resources\js\daterangepicker\daterangepicker.js"></script>
      <script src="..\resources\js\daterangepicker\moment.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      
      <script>
      $(document).ready(function(){
        var tablaData = $('#tabla-data').DataTable({
          processing:true,
          serverSide:true,
          select:true,
          language: {
            url: 'https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-MX.json'
        },
        dom: 'Bfrtip',
        buttons: [ {
            extend: 'excelHtml5',
            autoFilter: true,
            sheetName: 'Exported data',
            titleAttr: 'Exportar a Excel'
        } ],
          "createdRow":function(row, data, index){
            if(data['tiempoIndicador'] == null ){
              $('td', row).eq(6).css({
                'background-color':'#ff5252', });
                $('td', row).eq(6).append("<p>No disponible :(<p>");
             
            }
          },
          ajax:{
            url: "{{ route('prueba.index') }}",
          },
          columns: [
            {data: 'id'},
            {data: 'nombreIndicador'},
            {data: 'codigoIndicador'},
            {data: 'unidadMedidaIndicador'},
            {data: 'valorIndicador'},
            {data: 'fechaIndicador'},
            {data: 'tiempoIndicador',},
            {data: 'origenIndicador'},
            {data: 'action', orderable: false}
          ]
        });
      });  
  
      </script>
       <script>
        $('#registro').submit(function(e){
          e.preventDefault();

          var nombre = $('#combo1').val();
          var codigo = $('#combo2').val();
          var unidad = $("input[name='checkU']:checked").val();
          var valor = $('#valor').val();
          var fecha = $('#fecha').val();
          var tiempo = $('#tiempo').val();
          var origen = $('#origen').val();
          var _token = $("input[name=_token]").val();

          $.ajax({
            url: "{{ route('prueba.registrar') }}",
            type: "POST",
            data: {
              nombre: nombre,
              codigo: codigo,
              unidad: unidad,
              valor: valor,
              fecha: fecha,
              tiempo: tiempo,
              origen: origen,
              _token: _token
            },
            success:function(response){
              if(response){
                $('#registro')[0].reset();
                toastr.success('Registro ingresado', 'Nuevo Registro', {timeOut:3000});
                $('#tabla-data').DataTable().ajax.reload();


              }
            }

          });
          
        });

       </script>
       <script>
        var _id;
        $(document).on('click','.delete',function(){
          _id = $(this).attr('id');
          $('#confirmModal').modal('show');
        });

        $('#del').click(function(){
          $.ajax({

            url:"prueba/eliminar/"+_id,
            beforeSend:function(){
              $('#del').text('Eliminando...');
            },
            success:function(data){
              setTimeout(function(){
                $('#confirmModal').modal('hide');
                $('#del').text('Eliminar');
                toastr.info('El registro se ha eliminado correctamente','Eliminar Registro',{timeOut:3000});
                $('#tabla-data').DataTable().ajax.reload();
              }, 2000);
            }
          });
        });

       </script>
       <script>
        function editarConsulta(id){
          $.get('prueba/editar/'+id, function(prueba){
            $('#txtId2').val(prueba[0].id)
            $('#combo3').val(prueba[0].nombreIndicador)
            $('#combo4').val(prueba[0].codigoIndicador)
           // $('#checkU2').val(prueba[0].unidadMedidaIndicador)
           if(prueba[0].unidadMedidaIndicador == "Pesos"){
            $('input[name =checkU2][value="Pesos"]').prop('checked', true);
           }
           if(prueba[0].unidadMedidaIndicador == "Dólar"){
            $('input[name =checkU2][value="Dólar"]').prop('checked', true);
           }
           if(prueba[0].unidadMedidaIndicador == "Porcentaje"){
            $('input[name =checkU2][value="Porcentaje"]').prop('checked', true);
           }
            $('#editModal').modal('toggle');
            $('#valor2').val(prueba[0].valorIndicador)
            $('#fecha2').val(prueba[0].fechaIndicador)
            $('#tiempo2').val(prueba[0].tiempoIndicador)
            $('#origen2').val(prueba[0].origenIndicador)
          })
        
        }


       </script>
       <script>
        $('#editar').submit(function(e){
          e.preventDefault();
          var id2 = $('#txtId2').val();
          var nombre2 = $('#combo3').val();
          var codigo2 = $('#combo4').val();
          var unidad2 = $("input[name='checkU2']:checked").val();
          var valor2 = $('#valor2').val();
          var fecha2 = $('#fecha2').val();
          var tiempo2 = $('#tiempo2').val();
          var origen2 = $('#origen2').val();
          var _token2 = $("input[name=_token]").val();

        $.ajax({
          url:"{{ route('prueba.actualizar') }}",
          type: "POST",
            data: {
              id:id2,
              nombre: nombre2,
              codigo: codigo2,
              unidad: unidad2,
              valor: valor2,
              fecha: fecha2,
              tiempo: tiempo2,
              origen: origen2,
              _token: _token2
            },
            success:function(response){
              if(response){
                $('#editModal').modal('hide');
                toastr.info('Registro actualizado', 'Actualizado', {timeOut:3000});
                $('#tabla-data').DataTable().ajax.reload();


              }
            }
        });
      });   
       </script>
    <script>
        $(document).ready(function(){
          var date = new Date();
          $('.input-daterange').datepicker({
          
          todayBtn: 'linked',
          format: 'yyyy-mm-dd',
          autoclose: true,
        });
        var _token = $('input[name="_token"]').val();
        buscar();

 function buscar(from_date = '', to_date = '')
 {
 $.ajax({
   url:"{{ route('prueba.buscar') }}",
   method:"POST",
   data:{from_date:from_date, to_date:to_date, _token:_token},
   dataType:"json",
   
})
 }
 $('#filter').click(function(){
  var from_date = $('#from_date').val();
  var to_date = $('#to_date').val();
  if(from_date != '' &&  to_date != '')
  {
   buscar(from_date, to_date);
  }
  else
  {
   alert('required');
  }
 });

 $('#refresh').click(function(){
  $('#from_date').val('');
  $('#to_date').val('');
  buscar();
 });


});
        
       </script> 
       <script>
    fetch_data();

    var sale_chart;

    function fetch_data()
    {
        var dataTable = $('#order_table').DataTable({
            "processing" : true,
            "serverSide" : true,
            "order" : [],
            "ajax" : {
                url:"../app/includes/action.php",
                type:"POST",
                data:{action:'fetch'}
            },
            "drawCallback" : function(settings)
            {
                var sales_date = [];
                var sale = [];

                for(var count = 0; count < settings.aoData.length; count++)
                {
                    sales_date.push(settings.aoData[count]._aData['2']);
                    sale.push(parseFloat(settings.aoData[count]._aData['1']));
                }

                var chart_data = {
                    labels:sales_date,
                    datasets:[
                        {
                            label : 'Valor en fecha',
                            backgroundColor : 'rgba(153, 102, 255)',
                            color : '#fff',
                            data:sale
                        }
                    ]   
                };

                var group_chart3 = $('#bar_chart');

                if(sale_chart)
                {
                    sale_chart.destroy();
                }

                sale_chart = new Chart(group_chart3, {
                    type:'bar',
                    data:chart_data
                });
            }
        });
    }
    $('#daterange_textbox').daterangepicker({
        ranges:{
            'Today' : [moment(), moment()],
            'Yesterday' : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            'Last 30 Days' : [moment().subtract(29, 'days'), moment()],
            'This Month' : [moment().startOf('month'), moment().endOf('month')],
            'Last Month' : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        format : 'YYYY-MM-DD'
    }, function(start, end){

        $('#order_table').DataTable().destroy();

        fetch_data(start.format('YYYY-MM-DD'), end.format('YYYY-MM-DD'));
         $('#refresh').click(function(){
  $('#from_date').val('');
  $('#to_date').val('');
  buscar();
 });

    });


       </script>
</html>