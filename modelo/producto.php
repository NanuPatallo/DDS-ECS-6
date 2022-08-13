<?php

class Producto
{
    private $id;
    private $nombre;
    private $codigo;
    private $precio;
    private $marca;
    private $listProveedor = array();



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


    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }


    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }


    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }


    public function getListProveedor()
    {
        return $this->listProveedor;
    }

    public function setProveedor($listProveedor)
    {
        $this->listProveedor[] = $listProveedor;
    }




    public function MostrarInformacion()
    {
        //  $id $nombre $codigo $precio $marca

        echo 'Detalle del producto: ';
        echo '<hr>';
        echo '<hr>';

        echo 'Nro de identificación: ' . $this->getId();
        echo '<hr>';
        echo 'Nombre: ' . $this->getNombre();
        echo '<hr>';
        echo 'Código: ' . $this->getCodigo();
        echo '<hr>';
        echo 'Precio: ' . $this->getPrecio();
        echo '<hr>';
        echo 'Marca: ' . $this->getMarca();
        echo '<hr>';
        echo '<hr>';




        echo 'Detalle de los proveedores: ';
        echo '<hr>';
        echo '<hr>';

        foreach ($this->listProveedor as $p) {
            // $id $nombre $cuil $direccion $telefono
            echo 'Nro de identificación: ' . $p->getId();
            echo '<hr>';
            echo 'Nombre: ' . $p->getNombre();
            echo '<hr>';
            echo 'Cuil: ' . $p->getCuil();
            echo '<hr>';
            echo 'Dirección: ' . $p->getDireccion();
            echo '<hr>';
            echo 'Nro de Teléfono: ' . $p->getTelefono();
            echo '<hr>';
            echo '<hr>';
        }
    }
}
