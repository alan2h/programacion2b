<?php
require_once('interface.php');

class User implements Modelo{
    private $username;
    private $password;
    private $email;

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function guardar()
    {
        echo 'guardando';
    }

    public function actualizar($id)
    {
        echo 'actualizando';
    }

    public function eliminar($id)
    {
        echo 'eliminando';
    }

    public function mostrar()
    {
        echo 'mostrando';
    }

}

 $user = new User();
 $user->setUsername('abeck');
 $user->setEmail('beckalan303@gmail.com');
 $user->setPassword('mypass');
 $user->guardar();

 $user->eliminar(1);

 

?>