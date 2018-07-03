<?php

//Faz a conexão com o banco de dados
require '../banco.php';
$pdo = Banco::conectar();
//Fim da conexão

if(!empty($_POST))
{
   
            
            //Fazendo a recuperação dos dados inserirdos nos inputs do formulário de Cadastro do Imóvel
            $nome               = $_POST['nome'];
            $endereco           = $_POST['endereco'];
            $observacao         = $_POST['observacao'];
            $tipo               = $_POST['tipo'];
            $area               = $_POST['area'];
            $preco              = $_POST['preco'];
            $dormitorio         = $_POST['dormitorio'];    
            $sala               = $_POST['sala'];   
            $cozinha            = $_POST['cozinha'];
            $banheiro           = $_POST['banheiro'];
            $lavanderia         = $_POST['lavanderia'];
            $garagem            = $_POST['garagem'];
            $quintal            = $_POST['quintal'];

            
            try {

                 //Preparar e executar o comando SQL para insrir na base de dados
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO imoveis (nome, endereco, observacao, tipo, area, preco, dormitorio, sala, cozinha, banheiro, lavanderia, garagem, quintal) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
                $q = $pdo->prepare($sql);
                $q->execute(array($nome, $endereco, $observacao, $tipo, $area, $preco, $dormitorio, $sala, $cozinha,$banheiro, $lavanderia, $garagem, $quintal));
        
            
                Banco::desconectar();
                echo "Imóvel cadastrado com sucesso!";
                exit;

            }
            catch( PDOException $Exception ) {
                
                throw new MyDatabaseException( $Exception->getMessage( ) , (int)$Exception->getCode( ) );
            }
           
              
    
}




?>