<?php

use Phalcon\Mvc\User\Component;
use Phalcon\Db\Adapter\Pdo\Mysql;

/**
 * Elements
 *
 * Helps to build UI elements for the application
 */
class Elements extends Component {

    private $_headerMenu = array(
       'navbar-left' => array(
          'index' => array(
             'caption' => 'Home',
             'action' => 'index'
          ),
          'contact' => array(
             'caption' => 'Contactenos',
             'action' => 'index'
          ),
          'yourcode' => array(
             'caption' => 'Opciones',
             'action' => 'index'
          ),
       ),
       'navbar-right' => array(
          'session' => array(
             'caption' => 'Login/Registrarse',
             'action' => 'index'
          ),
       )
    );
    private $_tabs = array(
       'Privado' => array(
          'controller' => 'yourcode',
          'action' => 'index',
          'any' => true
       ),
       'Contribuyente' => array(
          'controller' => 'contribuyente',
          'action' => 'index',
          'any' => true
       ),
       'FacturasQB' => array(
          'controller' => 'invoice',
          'caption' => 'FacturasQB',
          'action' => 'index',
          'any' => true
       ),
       'NotasCreditoQB' => array(
          'controller' => 'creditmemo',
          'caption' => 'NotasQB',
          'action' => 'index',
          'any' => true
       ),
       'RetencionesQB' => array(
          'controller' => 'vendorcredit',
          'caption' => 'RetenQB',
          'action' => 'index',
          'any' => true
       ),
       'GuiasQB' => array(
          'controller' => 'salesorder',
          'caption' => 'GuiasQB',
          'action' => 'index',
          'any' => true
       ),
       'Aplicaciones' => array(
          'controller' => 'aplicaciones',
          'action' => 'index',
          'any' => true
       ),
       'Paginas' => array(
          'controller' => 'modelos',
          'action' => 'index',
          'any' => true
       ),
       'Fechas Sync' => array(
          'controller' => 'appliedtosync',
          'action' => 'index',
          'any' => true
       ),
       'Helados' => array(
          'controller' => 'items',
          'action' => 'index',
          'any' => true
       )
    );

    /**
     * Builds header menu with left and right items
     *
     * @return string
     */
    public function getMenu() {

        $auth = $this->session->get('auth');
        if ($auth) {
            $this->_headerMenu['navbar-right']['session'] = array(
               'caption' => 'Salir',
               'action' => 'end'
            );
        } else {
            unset($this->_headerMenu['navbar-left']['yourcode']);
        }

        $controllerName = $this->view->getControllerName();
        foreach ($this->_headerMenu as $position => $menu) {
            echo '<div class="nav-collapse">';
            echo '<ul class="nav navbar-nav ', $position, '">';
            foreach ($menu as $controller => $option) {
                if ($controllerName == $controller) {
                    echo '<li class="active">';
                } else {
                    echo '<li>';
                }
                echo $this->tag->linkTo($controller . '/' . $option['action'], $option['caption']);
                echo '</li>';
            }
            echo '</ul>';
            echo '</div>';
        }
    }

    /**
     * Para emitir las opciones
     * 1) Ha ingresado con su identificacion y clave
     * 2) Cada opcion hace referencia a un controlador y a una accion
     * 3) Cada tipo de usuario tiene acceso a uno o varios controladores-acciones
     * 4) Existen los siguientes tipo de usuarios: ADMINISTRADOR, EMPLEADO, CLIENTE y PROVEEDOR
     */
    public function getTabs() {

        $controllerName = $this->view->getControllerName();
        $actionName = $this->view->getActionName();
        echo '<ul class="nav nav-tabs navbar-custom">';

        $auth = $this->session->get('auth');
        $tipo = $auth['tipo'];
        if ($tipo == 'ADMINISTRADOR') {
            $_tabs = array(
               'Privado' => array(
                  'controller' => 'yourcode',
                  'action' => 'index',
                  'any' => true
               ),
               'Contribuyente' => array(
                  'controller' => 'contribuyente',
                  'action' => 'index',
                  'any' => true
               ),
               'FacturasQB' => array(
                  'controller' => 'invoice',
                  'caption' => 'FacturasQB',
                  'action' => 'index',
                  'any' => true
               ),
               'NotasCreditoQB' => array(
                  'controller' => 'creditmemo',
                  'caption' => 'NotasQB',
                  'action' => 'index',
                  'any' => true
               ),
               'RetencionesQB' => array(
                  'controller' => 'vendorcredit',
                  'caption' => 'RetenQB',
                  'action' => 'index',
                  'any' => true
               ),
               'GuiasQB' => array(
                  'controller' => 'salesorder',
                  'caption' => 'GuiasQB',
                  'action' => 'index',
                  'any' => true
               ),
               'Facturas' => array(
                  'controller' => 'facturas',
                  'caption' => 'Facturas',
                  'action' => 'index',
                  'any' => true
               ),
               'Usuarios' => array(
                  'controller' => 'users',
                  'action' => 'index',
                  'any' => true
               ),
               'Fechas Sync' => array(
                  'controller' => 'appliedtosync',
                  'action' => 'index',
                  'any' => true
               ),
               'Helados' => array(
                  'controller' => 'items',
                  'action' => 'index',
                  'any' => true
               ),
               'Aplicaciones' => array(
                  'controller' => 'aplicaciones',
                  'action' => 'index',
                  'any' => true
               ),
               'Paginas' => array(
                  'controller' => 'modelos',
                  'action' => 'index',
                  'any' => true
               )
            );
        } elseif ($tipo == 'EMPLEADO') {
            $_tabs = array(
               'Privado' => array(
                  'controller' => 'yourcode',
                  'action' => 'index',
                  'any' => true
               ),
               'Contribuyente' => array(
                  'controller' => 'contribuyente',
                  'action' => 'index',
                  'any' => true
               ),
               'FacturasQB' => array(
                  'controller' => 'invoice',
                  'caption' => 'FacturasQB',
                  'action' => 'index',
                  'any' => true
               ),
               'NotasCreditoQB' => array(
                  'controller' => 'creditmemo',
                  'caption' => 'NotasQB',
                  'action' => 'index',
                  'any' => true
               ),
               'RetencionesQB' => array(
                  'controller' => 'vendorcredit',
                  'caption' => 'RetenQB',
                  'action' => 'index',
                  'any' => true
               ),
               'GuiasQB' => array(
                  'controller' => 'salesorder',
                  'caption' => 'GuiasQB',
                  'action' => 'index',
                  'any' => true
               ),
               'Fechas Sync' => array(
                  'controller' => 'appliedtosync',
                  'action' => 'index',
                  'any' => true
               )
            );
        } elseif ($tipo == 'CLIENTE') {
            $_tabs = array(
               'Privado' => array(
                  'controller' => 'yourcode',
                  'action' => 'index',
                  'any' => true
               ),
               'Facturas' => array(
                  'controller' => 'facturas',
                  'caption' => 'Facturas',
                  'action' => 'index',
                  'any' => true
               ),
               'NotasCreditoQB' => array(
                  'controller' => 'creditmemo',
                  'caption' => 'NotasQB',
                  'action' => 'index',
                  'any' => true
               )
            );
        } elseif ($tipo == 'PROVEEDOR') {
            $_tabs = array(
               'Privado' => array(
                  'controller' => 'yourcode',
                  'action' => 'index',
                  'any' => true
               ),
               'RetencionesQB' => array(
                  'controller' => 'vendorcredit',
                  'caption' => 'RetenQB',
                  'action' => 'index',
                  'any' => true
               )
            );
        }
        foreach ($_tabs as $caption => $option) {
            if ($option['controller'] == $controllerName && ($option['action'] == $actionName || $option['any'])) {
                echo '<li class="active">';
            } else {
                echo '<li>';
            }
            echo $this->tag->linkTo($option['controller'] . '/' . $option['action'], $caption), '</li>';
        }
        echo '</ul>';
    }

    public function getModelosAdicional() {
        $conn = new Mysql([
           'host' => $this->config->database->host,
           'username' => $this->config->database->username,
           'password' => $this->config->database->password,
           'dbname' => $this->config->database->dbname,
        ]);
        $control = $this->dispatcher->getControllerName();
        $accion = $this->dispatcher->getActionName();
        $sql = 'SELECT * FROM modelos WHERE modelName = ? AND actionName = ?;';
        $registros = $conn->query($sql, [$control, $accion]);
        $valido = array();
        $valido['cabecera'] = 'Sin Cabeceras';
        $valido['titulo'] = 'Sin Titulo';
        $valido['subtitulo'] = 'Sin Sub-Titulos';
        $valido['lineas'][0] = 'Sin mensajes';
        $i = 0;
        if ($registros->numRows() == 0) {
            
        } else {
            while ($modelo = $registros->fetch()) {
                switch ($modelo['modelType']) {
                    case 1:
                        $valido['cabecera'] = $modelo['modelDes'];
                    case 2:
                        $valido['titulo'] = $modelo['modelDes'];
                        break;
                    case 3:
                        $valido['subtitulo'] = $modelo['modelDes'];
                        break;
                    case 4:
                        $valido['lineas'][$i] = $modelo['modelDes'];
                        $i++;
                        break;

                    default:
                        break;
                }
            }
        }
        $this->view->descriptivo = $valido;
    }

}
