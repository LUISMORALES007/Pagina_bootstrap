<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogicaController extends Controller
{
    

           public function gestionMatriz (Request $request){

                  
                  $name = $request -> input('nombre');
                  $genero = $request -> input('genero');
                  $profesion = $request -> input('profesion');
                  $edad = $request -> input('edad');
                 

           $validarName=false;
           $validarGenero=false;
           $validarProfesion=false;
           $validarEdad=false;
             

            $Matriz=[];

                         $Matriz[]=[ 'camila' ,  'femenino' , 'pintor' , '33'];
                         $Matriz[]=[ 'jose' , 'masculino' ,  'ingeniero' ,  '25'];
                         $Matriz[]=[ 'laura' , 'femenino' ,  'latonero' ,  '22'];
                         $Matriz[]=[ 'stella' , 'femenino' ,  'diseñadora' , '22'];
                         $Matriz[]=[ 'pablo' ,  'masculino' , 'ingeniero' ,  '34'];
                         $Matriz[]=[ 'miguel' , 'masculino' , 'ingeniero' ,  '45'];
                         $Matriz[]=[ 'roberto' ,'masculino' , 'electrico' ,  '30'];
                         $Matriz[]=[ 'ingrid' , 'femenino' ,  'ingeniero' ,  '22'];
                         $Matriz[]=[ 'luis' ,   'masculino' , 'electrico' ,  '21'];
                         $Matriz[]=[ 'camilo' , 'masculino' , 'ingeniero' ,  '32'];
                         $Matriz[]=[ 'viviana' , 'femenino' , 'ingeniero' ,  '32'];
                         $Matriz[]=[ 'jhon' ,   'masculino' , 'barrendero' , '21'];
                         $Matriz[]=[ 'leidy' ,  'femenino' ,  'arquitecta' , '22'];
                         $Matriz[]=[ 'tatiana' , 'femenino' ,  'secretaria' , '52'];
                         $Matriz[]=[ 'cristian' , 'masculino' , 'sngeniero' ,  '62'];
                         $Matriz[]=['andres' ,  'masculino' ,  'ingeniero' ,  '18'];
                         $Matriz[]=[ 'luis' ,   'masculino' ,  'latonero' ,  '20'];
                         $Matriz[]=[ 'pablo' ,  'masculino' ,  'ingeniero' , '22'];
                         $Matriz[]=[ 'angel' ,  'masculino' ,  'ingeniero' , '23'];
                         $Matriz[]=[ 'marcela' , 'femenino' ,  'secretaria' , '23'];
                         $Matriz[]=[ 'daniel' ,  'masculino' , 'ingeniero' ,  '27'];
                         $Matriz[]=[ 'daniela' , 'femenino' ,  'arquitecta' , '32'];
                         $Matriz[]=[ 'yeison' ,  'masculino' , 'ingeniero' ,  '46'];
                         $Matriz[]=[ 'pedro' ,   'masculino' , 'ingeniero' ,  '77'];
                         $Matriz[]=[ 'felipe' ,  'masculino' , 'Ingeniero' ,  '19'];
                         $Matriz[]=[ 'pepe' , 'masculino' ,  'vendedor' ,  '21'];
                         $Matriz[]=[ 'laura' , 'femenino' ,  'latonero' ,  '22'];
                         $Matriz[]=[ 'yuri' , 'femenino' ,  'diseñadora' , '33'];
                         $Matriz[]=[ 'pablo' ,  'masculino' , 'ingeniero' ,  '29'];
                         $Matriz[]=[ 'miguel' , 'masculino' , 'ingeniero' ,  '40'];
                         $Matriz[]=[ 'robert' ,'masculino' , 'vendedor' ,  '30'];
                         $Matriz[]=[ 'carmen' , 'femenino' ,  'ingeniero' ,  '22'];
                         $Matriz[]=[ 'ramiro' ,   'masculino' , 'vendedor' ,  '27'];
                         $Matriz[]=[ 'camilo' , 'masculino' , 'vendedor' ,  '43'];
                         $Matriz[]=[ 'lizeth' , 'femenino' , 'ingeniero' ,  '60'];
                         $Matriz[]=[ 'camilo' , 'masculino' ,  'ingeniero' ,  '25'];
                         $Matriz[]=[ 'laura' , 'femenino' ,  'gerente' ,  '22'];
                         $Matriz[]=[ 'gloria' , 'femenino' ,  'veterinario' , '22'];
                         $Matriz[]=[ 'adolfo' ,  'masculino' , 'ingeniero' ,  '34'];
                         $Matriz[]=[ 'alberto' , 'masculino' , 'contador' ,  '45'];
                         $Matriz[]=[ 'horacio' ,'masculino' , 'electrico' ,  '30'];
                         $Matriz[]=[ 'ingrid' , 'femenino' ,  'veterinario' ,  '22'];
                         $Matriz[]=[ 'diego' ,   'masculino' , 'piloto' ,  '21'];
                         $Matriz[]=[ 'mario' , 'masculino' , 'ingeniero' ,  '32'];
                         $Matriz[]=[ 'lina' , 'femenino' , 'ingeniero' ,  '32'];
                            
                          foreach ($Matriz as $key => $nombre) {
                              foreach ($nombre as $key => $value) {
                                  


                                     if($value==$name){

                                            echo $name ,"se encontro " ,"<br>";

                                     }
                                     
                                     if($value==$genero){
                                           
                                           echo $genero, "se encontro ","<br>";

                                             

                                     }
                                      
                                       if($value==$profesion){

                                             echo $profesion, "se encontro ","<br>";


                                     }
                                     
                                     if($value==$edad){
                                             echo $edad ,"se encontro ","<br>";
;
                                             

                                     }

                                  
                                 
                               } 

                          }
                            
                          
                          
                            
                         
                        
              





                     
              


               




          }

          
                
       
                         

                        
            
 







}
