<?php 
$server = "localhost";
$user = "root";
$pass = "";
$bd = "empresa";
$port = 3307;

if($conn = mysqli_connect($server, $user, $pass, $bd, $port)){

}else{
    echo "erro de conexão com banco de dados";
}

function mensagem($texto, $tipo){
    echo "
    <div class='alert alert-$tipo' role='alert'>
        $texto
    </div>
    ";
}

function mostraData($data){
    $d= explode('-', $data);
    $escreve = $d[2]. "/" . $d[1]. "/" .$d[0];
    return $escreve;
}

?>