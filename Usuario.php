<?php
class Usuario
{
    protected $id_admin;
    protected $usuario;
    protected $nombre;
    protected $apellido;

    public function __construct($usuario, $nombre, $apellido, $id_admin = null)
    {
        $this->id_admin = $id_admin;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->usuario = $usuario;
    }