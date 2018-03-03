<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
</head>
<body>
	
  <h2>Ingrese los datos por favor</h2>

  <br>
  <br>
  
      <form action="{{ url('formulario')}}" method="POST" >
      	
      	{{ csrf_field() }}
      	
             
             <h3>Nombre</h3><input type="text" name="nombre">
             <h3>Genero</h3><input type="text" name="genero">
             <h3>Profesion</h3> <input type="text" name="profesion">
             <h3>Edad</h3><input type="text" name="edad">
             

            <br>
            <br>
            
             <br><button type="submit"> Enviar </button>  


      </form>




</body>
</html>