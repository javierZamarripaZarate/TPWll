<?php

namespace App\Controllers;
use App\Models\mUsuarios;
use App\Models\mCliente;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function MisitioWeb()
    {
        return view ('MisitioWeb');
    }
    public function cv()
    {
        return view ('cv');
    }
    public function proyecto()
    {
        return view ('proyecto');
    }
    public function intereses()
    {
        return view ('intereses');
    }
    public function datosPersonales()
    {
        return view ('datosPersonales');
    }
    public function registro()
    {
        return view ('registro');
    }
    public function vRegistro()
    {
        return view ('vRegistro');
    }
    public function insertarForm()
    {
        $mUsuarios = new mUsuarios();
        $usuarioNuevo = [
            "usuario" => $_POST['email'],
            "password" => $_POST['password'],
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido']

        ];
        $mUsuarios->insert($usuarioNuevo);
        $datoId['idRegistrado'] = $mUsuarios->db->insertID();

        return view("success",$datoId);
    }
    public function Insertar_formulario()
    {
        $mCliente = new mCliente();
        $usuarioNuevo = [
            "usuario" => $_POST['email'],
            "password" => $_POST['password'],
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido'],
            "edad" => $_POST['edad']

        ];
        $mCliente->insert($usuarioNuevo);
        $datoId['idRegistrado'] = $mCliente->db->insertID();

        return view("Succcesss",$datoId);
    }
}
