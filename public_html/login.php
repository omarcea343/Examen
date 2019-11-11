<?php
//header("Location: sesion.php");
/*$ar=fopen("usuarios.txt", "r") or die ("Problemas al leer archvivo");
$si=0;
$usuario[30]=$_POST["usuario"];
echo $usuario;
$contra=$_POST["palabra_secreta"];
while(!feof($ar)){
        $obtener=fgets($ar);
    /*if($usuario==$obtener){
        header("Location: sesion.php");
        break;
        echo $usuario;
        $si=1;
    }else{
//echo "El ususario o la contrasena son incorrectos";
    $no=2;
    }*/
       /* if($obtener)
        $slinea=nl2br($obtener);
        echo $slinea;
    if($usuario===$obtener){
        $si=1
        //header("Location: sesion.php");
    
    }
    else{
        header("Location: logout.php")
        
    }
    }
    fclose($ar);
echo $si;
if($si==1){
    header("Location: sesion.php");
}else{
    
    
}

//header("Location: sesion.php");
?>*/
$si=0;
$nombre=$_POST["nombre"];
$asunto = $_POST["usuario"];
$contra=$_POST["palabra_secreta"];
/* 
   Las siguientes dos lineas hacen lo mismo que
   file_get_contents() es solo otra manera de hacerlo
*/ 
$rawContent = file("usuarios.txt"); //O usa una URL
$content = implode(" ",$rawContent);//Ya tenemos la cadena en memoria

function getName(){
    return $nombre;
}
//Se realiza la búsqueda usando expresiones regulares.
if (preg_match("/$asunto/",$content,$arrMatches)){
   
         //echo "La cadena: ".$asunto." si se encuentra en el archivo";
    
    echo "La cadena: ".$asunto." si se encuentra en el archivo";
    $si=1;
}
else{

    echo "La cadena: ".$asunto." no se encuentra en la cadena";
}

if (preg_match("/$contra/",$content,$arrMatches)){
   
         //echo "La cadena: ".$asunto." si se encuentra en el archivo";
    
    echo "La cadena: ".$contra." si se encuentra en el archivo";
    $si=$si+1;
}
else{

    echo "La cadena: ".$asunto." no se encuentra en la cadena";
}

if (preg_match("/$nombre/",$content,$arrMatches)){
   
         //echo "La cadena: ".$asunto." si se encuentra en el archivo";
    
    echo "La cadena: ".$nombre." si se encuentra en el archivo";
    $si=$si+1;
}
else{

    echo "La cadena: ".$asunto." no se encuentra en la cadena";
}

if($si==3){
    session_start();
    $_SESSION ["nombre"] = $nombre;
 header("Location: sesion.php");

}else{
    header("Location: error.php");
    
}
  echo $si;


?>