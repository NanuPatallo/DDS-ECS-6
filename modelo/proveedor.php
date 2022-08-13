<?php

class Proveedor
{
    private $id;
    private $nombre;
    private $cuil;
    private $direccion;
    private $telefono;


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }



    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }



    public function getCuil()
    {
        return $this->cuil;
    }


    public function setCuil($cuil)
    {
        $this->cuil = $cuil;
    }



    public function getDireccion()
    {
        return $this->direccion;
    }


    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }



    public function getTelefono()
    {
        return $this->telefono;
    }


    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
}
