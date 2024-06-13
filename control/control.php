<?php

session_start();
require_once 'libs/smarty_4_3_4/configuracion.php';
require_once 'model/model.php';

class control
{
    private $view;
    private $model;

    public function __construct()
    {
        $this->view = new configuracion();
        $this->model = new model();
    }

    public function gestion_procesos()
    {
        if (isset($_REQUEST['accion'])) {
            if (isset($_SESSION['nickname_usuario'])) {
                $this->view->setAssign("nickname_usuario", $_SESSION['nickname_usuario']);
            }
            $accion = $_REQUEST['accion'];
            switch ($accion) {
                //FUNCIONES DEL MENU PRINCIPAL
                case 'validar_login':
                    $this->c_validar_login();
                    break;
                case 'iniciar_sesion':
                    $this->view->setDisplay('login_iniciar_sesion.tpl');
                    break;
                case 'PreescolarKNEX':
                    $this->view->setDisplay('login_content_PreescolarKNEX.tpl');
                    break;
                case 'PreescolarPHOTON':
                    $this->view->setDisplay('login_content_PeescolarPHOTON.tpl');
                    break;
                case 'PrimariaMenor':
                    $this->view->setDisplay('login_content_PrimariaMenor.tpl');
                    break;
                case 'PrimariaMayor':
                    $this->view->setDisplay('login_content_PrimariaMayor.tpl');
                    break;
                case 'Secundaria':
                    $this->view->setDisplay('login_content_Secundaria.tpl');
                    break;
                case 'Diversificado':
                    $this->view->setDisplay('login_content_Diversificado.tpl');
                    break;
                case 'menu_principal':
                    $this->view->setDisplay('login_content_main.tpl');
                    break;
                //FUNCIONES DEL MENU USUARIO ALUMNO
                case 'menu_juez':
                    $this->view->setDisplay('juez_content_main.tpl');
                    break;
                case 'registro_calificaciones':
                    $this->view->setDisplay('juez_content_registrar_calificaciones.tpl');
                    break;
                case 'consultar_calificaciones':
                    $this->view->setDisplay('juez_content_consultar_calificaciones.tpl');
                    break;
            }
        } else {
            $this->view->setDisplay('login_content_main.tpl');
        }
    }
    public function c_validar_login()
    {
        $nickname_usuario = $_REQUEST['nickname_usuario'];
        $pass_usuario = $_REQUEST['pass_usuario'];
        $rs = $this->model->varLogin($nickname_usuario, $pass_usuario);
        if (empty($rs)) {
            echo 'Datos Incorrectos, vuelva a iniciar sesión';
        } else {
            $_SESSION['nickname_usuario'] = $nickname_usuario;
            $this->view->setDisplay('juez_content_main.tpl');
        }
    }
}