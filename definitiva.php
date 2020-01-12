<?php 
        
        if(isset($_POST["Calcular"])){

         $nota1 = $_POST["txtnumero1"];
         $nota2 = $_POST["txtnumero2"];
         $nota3 = $_POST["txtnumero3"];
         $nota4 = $_POST["txtnumero4"];
         $nota5 = $_POST["txtnumero5"];

         if($nota1 == "" || $nota2 =="" || $nota3 =="" || $nota4 =="" || $nota5 ==""){
             echo "Debes deligenciar todos los campos";
             exit;
          }
          
          $num1 = $nota1 * 0.20;
          $num2 = $nota2 * 0.15;
          $num3 = $nota3 * 0.22;
          $num4 = $nota4 * 0.10;
          $num5 = $nota5 * 0.33;
         
          $promedio = ($num1 + $num2 + $num3 + $num4 + $num5)/5;

          echo "NOTA DEFINITITVA: " . $promedio;
    




        }
     
     
     
     
     ?>