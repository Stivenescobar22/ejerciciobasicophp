<!DOCTYPE html>
<html>
    <head>

        <title>Promedio Notas</title>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset= utf-8" />

    </head>
    <body>
        <h2><b>Ejercicio 1:</b></h2>
        <h1>PROMEDIO DE UN ESTUDIANTE</h1>
        <h2>Notas:</h2>

        <form name="form1" method="POST" action="definitiva.php">
            
          Taller 1(20%): <input type="text" name="txtnumero1">
           <br>
           <br>          
          Taller 2(15%): <input type="text" name="txtnumero2">
           <br>
           <br> 
          cuestionario 1(22%): <input type="text" name="txtnumero3">
           <br>
           <br> 
          cuestionario 2(10%): <input type="text" name="txtnumero4">
           <br>
           <br> 
          proyecto final(33%): <input type="text" name="txtnumero5">
           <br>
           <br> 
          <input type="submit" name="Calcular" value="Calcular">

        </form>


        <h2><b>Ejercicio 2:</b></h2>
        <p>
           Elaborar un algoritmo que muestre un mensaje de acuerdo a la 
           edad de una persona:
           si la edad es de 0 a 10 "niño",
           si la edad es de 11 a 14 años "pre-adolescente",
           si la edad es de 15 a 18 años "adolescente",
           si la edad es de 19 a 25 años "joven",
           si la edad es de 26 a 65 años "adulto" y 
           si la edad es mayor de 65 años "anciano". 
        </p>

        <form name = "form2" method="POST" action="edadmensaje.php">

          edad : <input type="text" name="txtedad">
          <br>
          <input type="submit" name="Analizar" value="Analizar">
          <br>
          
        </form>

       
    </body>


</html>