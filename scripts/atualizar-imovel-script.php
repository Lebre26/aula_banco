<?php

require 'banco.php';
$pdo = Banco::conectar();

$idDinamico = $_GET['id'];

$select = $pdo->query(" SELECT * FROM `imoveis` WHERE `id` LIKE '$idDinamico'  ");
       	
$result = $select->fetch(PDO::FETCH_OBJ);

if(!empty($result)){

    $id                 = $result->id;
    $nome               = $result->nome;
    $endereco           = $result->endereco;
    $observacao         = $result->observacao;
    $tipo               = $result->tipo;
    $area               = $result->area;
    $preco              = $result->preco;
    $dormitorio         = $result->dormitorio;    
    $sala               = $result->sala;   
    $cozinha            = $result->cozinha;
    $banheiro           = $result->banheiro;
    $lavanderia         = $result->lavanderia;
    $garagem            = $result->garagem;
    $quintal            = $result->quintal;


    //Atualizar os campos
    if ( !empty($_POST)) {


    $novoNome         = $_POST['nome'];
    $novoEndereco = $_POST['endereco'];


    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE imoveis  set  nome = ?, endereco = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($novoNome, $novoEndereco));

    echo "Imovel  Atualizado com sucesso!";
    exit;
    
    }

    $pdo = Banco::desconectar();

}else{

    echo "Imóvel não cadastrado/encontrado";
    exit;
}

?>