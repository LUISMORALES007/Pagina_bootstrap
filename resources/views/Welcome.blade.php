<!doctype html>
<html lang="en">
  <head>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>Proyecto bootstrap</title>
<style>
 
*{
     
     margin: 0;
     padding: 0;


}

#myCarousel{
color:blue;

}



#slid{

 color :blue;

}



#cover{

     background:  url(img/domenico-loia-364221-unsplash.jpg) center center no-repeat;

     
      
      background-size: cover;

      color: black;

      height: 100%;


      text-align: center;

      align-items: center;



 }

 #parrafo{

color:blue;

 }

body {
    font-family: Verdana,sans-serif;
    font-size: 0.9em;
}

div#header, div#footer {
    padding: 10px;
    color: white;
    background-color: black;
}

div#content {
    margin: 5px;
    padding: 10px;
    background-color: black;
}

div.article {
    margin: 5px;
    padding: 10px;
    background-color: white;
}

div#menu ul {
    padding: 0;
}

div#menu ul li {
    display: inline;
    margin: 5px;
}
</style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=" resources/views/bootstrap.css">

    <link rel="stylesheet"  href="resources/views/estilos.css">

    <title> Proyecto Bootstrap</title>
  </head>
  <body>
   
        <!-- encabezado -->

          <section id="cover">
              
              <div id="cover-texto">

                  <div class="container">
                     
                    <div class="row">
                      
                       <div class="col-sm-12">
                         
                         <h1 align="center" class="display-3">Estructuras de Informacion</h1>

                        

                       </div>


                    </div>


                  </div>
                

               
              </div>
              
          </section>
  
        <!-- fin encabezado-->

        <!-- barra de navegacion-->
        

        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">정보 구조</a>
                </div>
                  <ul class="nav navbar-nav">
                   <li class="active"><a href="general">Generalidades</a></li>
                    <li><a href="https://www.universidadviu.es/estructura-datos-definicion-tipos-principales">Fuentes de informacion</a></li>
                     <li><a href="formulario">Formulario</a></li>
                      </ul>
                       <form class="navbar-form navbar-left" action="/action_page.php">
                     <div class="input-group">
                   <input  type="text" class="form-control" placeholder="Busqueda" name="search">
                 <div class="input-group-btn">
               <button class="btn btn-default" type="submit">
             <i class="glyphicon glyphicon-search"></i>
           </button>
           </div>
          </div>
        </form>
        </div>
       </nav>


<!--fin barra de navegacion-->
   

 <div id="content">
<h2 align="center">Sobre las estructuras de informacion.......</h2>
<div class="article" align="justify">
<h2>Que son?</h2>
  <h3 id="parrafo">En su aspecto más general, el arte de la programación de ordenadores tiene mucho que ver con eso que llamamos la "inteligencia" humana; los procesos de abstracción; la capacidad de imaginar un problema y sus posibles soluciones (hemos dicho que programar es formular la solución de un problema). El proceso suele ir de lo general a lo particular y viceversa (de las ideas abstractas a los detalles concretos), en un proceso que se realimenta constantemente.</h3>
  <br></br>
  <h3 id="parrafo">tambien son una forma particular de organizar datos en una computadora para que pueda ser utilizado de manera eficiente.

Diferentes tipos de estructuras de datos son adecuados para diferentes tipos de aplicaciones, y algunos son altamente especializados para tareas específicas.

Las estructuras de datos son un medio para manejar grandes cantidades de datos de manera eficiente para usos tales como grandes bases de datos y servicios de indización de Internet. Por lo general, las estructuras de datos eficientes son clave para diseñar algoritmos eficientes. Algunos métodos formales de diseño y lenguajes de programación destacan las estructuras de datos, en lugar de los algoritmos, como el factor clave de organización en el diseño de software.</h3>
</div>
<div class="article">
<h2>Ejemplos de Estructuras de datos</h2>
  <h3 id ="parrafo">Existen numerosos tipos de estructuras de datos, generalmente construidas sobre otras más simples:

Un vector es una serie de elementos en un orden específico, por lo general todos del mismo tipo (si bien los elementos pueden ser de casi cualquier tipo). Se accede a los elementos utilizando un entero como índice para especificar el elemento que se requiere. Las implementaciones típicas asignan palabras de memoria contiguas a los elementos de los arreglos (aunque no siempre es el caso). Los arreglos pueden cambiar de tamaño o tener una longitud fija.
Un vector asociativo (también llamado diccionario o mapa ) es una variante más flexible que una matriz, en la que se puede añadir y eliminar libremente pares nombre-valor. Una tabla de hash es una implementación usual de un arreglo asociativo.
Un registro (también llamado tupla o estructura) es una estructura de datos agregados. Un registro es un valor que contiene otros valores, típicamente en un número fijo y la secuencia y por lo general un índice por nombres. Los elementos de los registros generalmente son llamados campos.
Una unión es una estructura de datos que especifica cuál de una serie de tipos de datos permitidos podrá ser almacenada en sus instancias, por ejemplo flotante o entero largo. En contraste con un registro, que se podría definir para contener un flotante y un entero largo, en una unión, sólo hay un valor a la vez. Se asigna suficiente espacio para contener el tipo de datos de cualquiera de los miembros.
Un tipo variante (también llamado registro variante o unión discriminada) contiene un campo adicional que indica su tipo actual.
Un conjunto es un tipo de datos abstracto que puede almacenar valores específicos, sin orden particular y sin valores duplicados.
Un Multiconjunto es un tipo de datos abstracto que puede almacenar valores específicos, sin orden particular. A diferencia de los conjuntos, los multicunjuntos admiten repeticiones.
Un grafo es una estructura de datos conectada compuesta por nodos. Cada nodo contiene un valor y una o más referencias a otros nodos. Los grafos pueden utilizarse para representar redes, dado que los nodos pueden referenciarse entre ellos. Las conexiones entre nodos pueden tener dirección, es decir un nodo de partida y uno de llegada.
Un árbol es un caso particular de grafo dirigido en el que no se admiten ciclos y existe un camino desde un nodo llamado raíz hasta cada uno de los otros nodos. Una colección de árboles es llamada un bosque.
Una clase es una plantilla para la creación de objetos de datos según un modelo predefinido. Las clases se utilizan como representación abstracta de conceptos, incluyen campos como los registros y operaciones que pueden consultar el valor de los campos o cambiar sus valores.</h3>
  
</div>
</div>


  

    <!--Carrusel-->

 <seleccion id ="Carrusel">
  <div class="container">
  <h2>Generalidades y algo mas.....</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active" align="center">
        <img  src="img/jess-watters-519012-unsplash.jpg" alt="primero" style="width:60%;" >
       

        <div class="carousel-caption">
          <h3 id="slid">Que son las estructuras de informacion?</h3>
          <p id="slid">Son necesarias en el mundo de la programacion?</p>
        </div>
      </div>

      <div class="item" align="center">
        <img  src="img/greg-rakozy-129733-unsplash.jpg" alt="segundo" style="width:60%;">
        <div class="carousel-caption">
          <h3 id="slid">Tipos de estructuras</h3>
          
        </div>
      </div>
    
      <div class="item" align="center">
        <img src="img/markus-spiske-357131-unsplash.jpg" alt="tercero" style="width:60%;">
        <div class="carousel-caption">
          <h3 >Utilidad de las estructuras</h3>
          
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
     </div>
   </div>
</seleccion>
    <!--fin Carrusel-->
<br></br>
<br></br>
<br></br>
<br></br>
<!--video-->
<h2 align="center">Conceptos generales</h2>
<br></br>
<div style="text-align:center;">
 <iframe  width="500" height="500" src="https://www.youtube.com/embed/AipESbeD2Is">
</iframe>
 </div>   
<br></br>
<br></br>
<br></br>
<br></br>

<!--footer-->
<footer>
 
 <div id="footer">
<p>&copy; 2018 estructuras de datos UDEC. All rights reserved.</p>
</div>

  
  </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>