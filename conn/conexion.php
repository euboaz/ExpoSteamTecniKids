<?php

class conexion {
    private $usuario;
    private $pass;
    private $server;
    private $nombreDB;
    private $link;

    public function __construct() {
        $this->usuario = 'root';
        $this->pass = '';
        $this->server = 'localhost';
        $this->nombreDB = 'exposteamtecnikids';
        $this->link = '';
    }

    public function conectar() {
        $this->link = new mysqli( $this->server, $this->usuario, $this->pass, $this->nombreDB );

        if ( $this->link->connect_error ) {
            echo 'Error, conectando a la base de datos';
            exit;
        }
    }

    public function desconectar() {
        mysqli_close( $this->link );
    }

    public function ejecutarConsulta( $sql ) {
        $rs =  $this->link->query( $sql );
        return $rs;
    }

    public function aplicarCommit() {
        mysqli_commit( $this->link );
    }
}
