<?php

require_once 'conn/conexion.php';

class model
{
    private $cn;

    public function __construct()
    {
        $this->cn = new conexion();
    }

    public function varLogin($usuario, $pass)
    {
        $this->cn->conectar();
        $sql = "SELECT juez_nickname,juez_pass FROM juez WHERE juez_nickname = '$usuario' AND juez_pass = '$pass';";
        $rs = $this->cn->ejecutarConsulta($sql);
        $datos = array();
        if ($rs->num_rows > 0) {
            while ($row = $rs->fetch_assoc()) {
                $datos["juez_nickname"] = $row["juez_nickname"];
            }
        }
        $this->cn->desconectar();
        return $datos;
    }
}
