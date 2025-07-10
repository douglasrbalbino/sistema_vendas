<?php

require_once __DIR__ . '/../dao/CategoriaDAO.php';
require_once __DIR__ . '/../model/Pedido.php';
require_once __DIR__ . '/../model/ItemPedido.php';
require_once __DIR__ . '/../model/Usuario.php';
require_once __DIR__ . '/../database/Database.php';

class PedidoDAO
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    

}

?>