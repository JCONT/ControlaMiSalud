<!DOCTYPE html>
<html lang="en" style="background: #E8FBFF;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="formularioSalud.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4./css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Formulario de Salud</title>
</head>

<body>
    <nav class="nav">
        <a class="nav-link active" href="index.php">CONTROLA MI SALUD</a>
        <div class="brand_logo_container">
            <img class="imagen" src="imagenes/usuario.png">
        </div>
    </nav>

    
    <div class="body">

        <form id="form" action="guardar.php" method="POST">

            <div class="form">
                <br>
                <h1>REGISTRAR MI SALUD</h1>
                <h2>(Datos personales)</h2>

                <label class="campo_Id">Número identificacion</label>
                <input type="number" class="id" id="identificacion" value="1234567890" name="identificacion" >
              

                <label class="campo_Nombre">Nombre Completo</label>
                <input type="text" class="nombre" id="nombre" value="Juan Contreras"name ="nombre">

                <label class="campo_Genero">Género</label>
                <select id="genero" name="genero" class="genero">
                    <option value="">- selecciona -</option>
                    <option  value="femenino">Femenino</option>
                    <option  selected="selected" value="masculino">Masculino</option>
                    <option value="otro">Otro</option>
                </select>

                <label class="campo_Edad">Edad</label>
                <input type="number" class="edad" id="edad" required value="25" name="edad">

                <label class="campo_Correo">Correo Electronico</label>
                <input type="email" class="email" id="email" value="Juan@gmail.com" name="correo">

                <label class="campo_Peso">Peso</label>
                <input type="number" class="peso" id="peso" required placeholder="Ingresar peso" name="peso">

                <label class="campo_Condicion">Condición de salud</label>
                <select id="condicion" name="condicionsalud" class="select">
                    <option value="" selected="selected">- selecciona -</option>
                    <option value="diabetes">Diabetes</option>
                    <option value="hipertension"> hipertensió</option>
                    <option value="asma">asma</option>
                    <option value="ninguna">Ninguna</option>

                    
                </select>

                <label class="campo_Otro">Otra Condición</label>
                <input type="text" class="otro" id="otro" required name="otracondicionsalud">
            </div>
        
    </div>
    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

    
        <div class="form2">
            <br>
            <h1>REGISTRAR MI SALUD</h1>
            <h2 style="bottom: 744px;">(Indicadores de Salud)</h2>

            <label class="campo_Frecuencia">Frecuencia Cardiaca</label>
            <input type="number" name="frecuencia" class="frecuencia" id="frecuencia" placeholder="Ingresa tu frecuencia cardiaca">

            <label class="campo_Vacunas">Vacunas</label>
            <input type="text" name="vacunas" class="vacunas" id="vacunas" placeholder="Ingresa tus vacunas">

            <label class="campo_Tension">Tensión Arterial</label>
            <input type="number" name ="tension" class="tension" id="tension" required placeholder="Ingresa tu Tensión Arterial">

            <label class="campo_Saturacion">Saturación de Oxigeno</label>
            <input type="number" name="saturacion" class="saturacion" id="saturacion" placeholder="Ingresa tu saturación de Oxigeno">


            <label class="campo_Fisica2">Escoge que actividad fisica realizas</label>
            <select id="fisica2" name="actividad" class="fisica2">
                <option value="" selected="selected">- selecciona -</option>
                <option value="futbol">Futbol</option>
                <option value="natacion">Natación</option>
                <option value="baloncesto">Baloncesto</option>
                <option value="ninguna">Ninguna</option>
            </select>

            <label class="campo_Distancia">Cuántas distancias recorres al día</label>
            <p>(En caso de no recorrer alguna distancia hacer caso <br> omiso a la pregunta)</p>
            <input type="number" name = "distancia" class="distancia" id="distancia" placeholder="Ingrese las distancias recorridas">
        </div>


    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

 
        <div class="form3">
            <br>
            <h1>REGISTRAR MI SALUD</h1>
            <h2 style="bottom: 744px;">(Control con Profesional)</h2>

            <label class="campo_FechaControl">Fecha del Control</label>
            <input type="date" name="fechacontrol" class="fechaControl" id="fechaControl">

            <label class="campo_Cargo">Cargo del Medico</label>
            <input type="text" name="especialista" class="cargo" id="cargo" placeholder="Ingresa el cargo del medico">

            <label class="campo_NombreMedico">Nombre del Medico</label>
            <input type="text" name="nommedico" class="nombreM" id="nombreM" required placeholder="Ingresa el nombre del medico">

            <label class="campo_CausaT">Causa del tratamiento</label>
            <input type="text" name="causatratamiento" class="causaT" id="causaT" placeholder="Ingresa la causa del tratamiento">

            <label class="campo_Tratamiento">Tratamiento</label>
            <input type="text" name="tratamiento" class="tratamiento" id="tratamiento" placeholder="Ingresa el tratamiento">

            <label class="campo_Medicamento">Medicamento</label>
            <input type="text" name="medicamento" class="medicamento" id="medicamento" placeholder="Ingresa el medicamento">

            <label class="campo_Observaciones">Observaciones</label>
            <textarea name="observaciones" class="observaciones" id="observaciones" placeholder="Observaciones..." rows="10" cols="50"></textarea>
       <button type="submit" name="guardar" class="botonForm">Finalizar</button>
        </div>
        
    </form>
    
</body>
</html>