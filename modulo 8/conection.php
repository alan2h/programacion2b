<?php

class Conection{

    private $_con;
    private $servername;
    private $username;
    private $password;
    private $dbname;

    public function __construct()
    {
        $this->servername = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->dbname = 'ventas';
    }

    public function conectar(){
        $this->_con = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    }

    public function desconectar(){
        $this->_con->close();
    }

    public function consultar($query){
        $this->conectar();
        $datos = $this->_con->query($query);
        $this->desconectar();
        return $datos;
    }

    public function insertar($query){
        $this->conectar();
        $datos = $this->_con->query($query);
        $id = $this->_con->insert_id;
        $this->desconectar();
        return $id;
    }

}

?>