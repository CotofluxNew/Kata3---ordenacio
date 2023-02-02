<!-- ['hola','as','PHP','estudiar']
['chachi','supercaligfragilistipuesquialidoso','esternoclidomastoideo']
['h','',' ','sopa','res'] -->

<?php 

$arrayEntrada = ['hola','as','PHP','estudiar'];


function ordenarArray($arrayEntrada){
    var_dump($arrayEntrada);

    usort($arrayEntrada, "strcmp");
    
    foreach ($arrayEntrada as $arrayEntradas) {
        echo $arrayEntradas . "<br>";

    }

}

ordenarArray($arrayEntrada);

?>

