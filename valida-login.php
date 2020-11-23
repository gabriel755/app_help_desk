<?php
session_start();


// Verifica se autenticação foi autorizada
$ususario_autenticado = false;
// users

$ususarios_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => '123456'),
    array('email' => 'user@teste.com.br', 'senha' => 'teste'),
);


/*
echo '<pre>';
print_r($ususarios_app);
echo '<pre>';
*/

foreach($ususarios_app as $user){

    // echo 'Usuário app: ' . $user['email'] . '/' . $user['senha'];
    // echo '<br>';
    // echo 'Usuário form: ' . $_POST['email'] . '/' . $_POST['senha'];
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $ususario_autenticado = true;
    }
}

if($ususario_autenticado){
    header('Location: home.php');
    $_SESSION['autenticado'] = 'SIM';

}else{
    $_SESSION['autenticado'] = 'NÃO';
    header('Location: index.php?login=erro');    
}
?>