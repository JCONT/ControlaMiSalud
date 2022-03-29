<?php include("db.php")?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
        <title>Hello DefaultController!</title>
        
        <!-- Required meta tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Bootstrap CSS -->
        <link href="index.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>

        <!-- Datatables -->
        <link rel="stylesheet" href="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/datatables.min.css">
        <script src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/datatables.min.js"></script>

</head>

<body>


<nav class="nav">
        <a class="titulo" href="#">CONTROLA MI SALUD</a>
        <div class="brand_logo_container">
            <img class="imagen" src="imagenes/usuario.png">
        </div>
    </nav>
      <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    
                            <li class="registrar">
                                <a href="formularioSalud.php" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Mi Estado de Salud</span></a>
                            </li>
                      
                    
                    <li class="w-10" id="registroFamilia">
                                <a href="formularioFamilia.php" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Estado de salud Familia</span> </a>
                            </li>
                    
                            <li class="w-10" id="registroExamen">
                                <a href="formularioExamenes.html" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Exámenes Medicos</span> </a>
                            </li>
                   
                </ul>
                <hr>
              
                    <a href="Login.html" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">Sign out</span>
                       
                    </a>
                  
               
            </div>
        </div>


        <div class="table-responsive" id="mydatatable-container">
        <h3 class="titulo1">REGISTRO ESTADO DE SALUD</h3>
    <table class="records_list table table-striped table-bordered table-hover" id="mydatatable">
  <thead class="title_table">
    <tr>
      <th scope="col">Identificación</th>
      <th scope="col">Nombre</th>
      <th scope="col">Genero</th>
      <th scope="col">Edad</th>
      <th scope="col">Correo Electronico</th>
      <th scope="col">Peso</th>
      <th scope="col">Condicion de Salud</th>
      <th scope="col">Otra condicion</th>
      <th scope="col">Frecuencia Cardiaca</th>
      <th scope="col">Vacunas</th>
      <th scope="col">Tension Arterial</th>
      <th scope="col">Saturacion de Oxigeno</th>
      <th scope="col">Actividad Fisica</th>
      <th scope="col">Distancia Recorrida</th>
      <th scope="col">Fecha de Control</th>
      <th scope="col">Especialista</th>
      <th scope="col">Nombre del Especialista</th>
      <th scope="col">Causa de Tratamiento</th>
      <th scope="col">Tratamiento</th>
      <th scope="col">Medicamentos</th>
      <th scope="col">Observaciones</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tfoot>
            <tr>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
            </tr>
    </tfoot>
  <tbody>
      <?php
      $query = "SELECT * FROM estado_salud";
       $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_array($result)){ ?>

        <tr>
          <td> <?php echo $row['identificacion']?> </td>
          <td> <?php echo $row['nombre']?> </td>
          <td> <?php echo $row['genero']?> </td>
          <td> <?php echo $row['edad']?> </td>
          <td> <?php echo $row['correo']?> </td>
          <td> <?php echo $row['peso']?> </td>
          <td> <?php echo $row['condicion_salud']?> </td>
          <td> <?php echo $row['otra_condicion']?> </td>
          <td> <?php echo $row['frecuencia_cardiaca']?> </td>
          <td> <?php echo $row['vacunas']?> </td>
          <td> <?php echo $row['tension_arterial']?> </td>
          <td> <?php echo $row['saturacion_oxigeno']?> </td>
          <td> <?php echo $row['actividad_fisica']?> </td>
          <td> <?php echo $row['distancia_recorrida']?> </td>
          <td> <?php echo $row['fecha_control']?> </td>
          <td> <?php echo $row['especialista']?> </td>
          <td> <?php echo $row['nom_especialista']?> </td>
          <td> <?php echo $row['causa_tratamiento']?> </td>
          <td> <?php echo $row['tratamiento']?> </td>
          <td> <?php echo $row['medicamentos']?> </td>
          <td> <?php echo $row['observaciones']?> </td>
         <td><a href="delete.php?id=<?php echo $row['id_formulario']?>">Eliminar</a> </td> 
         

       <?php }
       ?>
  </tbody>
</table>
        </div>

        <style>
#mydatatable tfoot input{
    width: 100% !important;
}
#mydatatable tfoot {
    display: table-header-group !important;
}
</style>

<script type="text/javascript">
$(document).ready(function() {
    $('#mydatatable tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Filtrar.." />' );
    } );

    var table = $('#mydatatable').DataTable({
        "dom": 'B<"float-left"i><"float-right"f>t<"float-left"l><"float-right"p><"clearfix">',
        "responsive": false,
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
        },
        "order": [[ 0, "desc" ]],
        "initComplete": function () {
            this.api().columns().every( function () {
                var that = this;

                $( 'input', this.footer() ).on( 'keyup change', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                        }
                });
            })
        }
    });
});
</script>
    </div>
</div>
<br><br>
<!-- -------------------------------------------------------------------------------------------------------------- -->

<div class="table-responsive2" id="mydatatable-container2">
<br><br><br><br>
  <h3>REGISTRO EXAMENES MEDICOS</h3>
    <table class="records_list2 table table-striped table-bordered table-hover" id="mydatatable2">
  <thead class="title_table2">
    <tr>
      <th scope="col">Fecha del Exámen</th>
      <th scope="col">Nombre del Exámen</th>
      <th scope="col">Archivos Adjuntos</th>
      <th scope="col">Observaciones</th>
      <th scope="col">Opciones</th>
     
    </tr>
  </thead>
  <tfoot>
            <tr>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                
               
            </tr>
    </tfoot>
  <tbody>
      <?php
      $query = "SELECT * FROM examenes";
       $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_array($result)){ ?>

        <tr>
          <td> <?php echo $row['fecha_examen']?> </td>
          <td> <?php echo $row['nombre_examen']?> </td>
          <td> <?php echo $row['archivo']?> </td>
          <td> <?php echo $row['observaciones']?> </td>
         
         <td><a href="delete.php?id1=<?php echo $row['id_examen']?>">Eliminar</a> </td> 
         

       <?php }
       ?>
  </tbody>
</table>
        </div>

        <style>
#mydatatable2 tfoot input{
    width: 100% !important;
}
#mydatatable2 tfoot {
    display: table-header-group !important;
}
</style>

<script type="text/javascript">
$(document).ready(function() {
    $('#mydatatable2 tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Filtrar.." />' );
    } );

    var table = $('#mydatatable2').DataTable({
        "dom": 'B<"float-left"i><"float-right"f>t<"float-left"l><"float-right"p><"clearfix">',
        "responsive": false,
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
        },
        "order": [[ 0, "desc" ]],
        "initComplete": function () {
            this.api().columns().every( function () {
                var that = this;

                $( 'input', this.footer() ).on( 'keyup change', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                        }
                });
            })
        }
    });
});
</script>


</body>
</html>