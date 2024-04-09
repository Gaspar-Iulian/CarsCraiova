<?php 
require_once(BASE_PATH. 'Config/pdodb.php');
require_once(BASE_PATH. 'Model/MarcaModel.php'); 

$Marca = new MarcaModel($pdo);
$marcaForSelectType = $Marca->getAllFromMarca();

if (isset($_GET['filters']) && $_GET['filters'] == 'getMarca' && isset($_GET['items']) && $_GET['items'] == 'all') {
    echo json_encode(['1234']) ;

}


?>