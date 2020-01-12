<?php 

    if(isset($_POST["Analizar"])){

        $edadpersona = $_POST["txtedad"];
    }

    if($edadpersona ==""){
        echo "Debes deligenciar todos los campos";
            exit;
    }


    if($edadpersona < 10){
        echo "niño";

    }elseif($edadpersona < 14){
        echo "pre- adolescente";

    }elseif($edadpersona < 18){
         echo "Adolescente";

    }elseif($edadpersona < 25){
        echo "joven";

    }elseif($edadpersona < 65){
        echo "Adulto";

    }else{
        echo "Anciano";
    }
     

?>