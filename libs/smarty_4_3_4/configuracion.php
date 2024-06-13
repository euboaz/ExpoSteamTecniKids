<?php


require_once 'libs/smarty_4_3_4/Smarty.class.php';

class configuracion{
    private $smarty;
    
    public function  __construct() {
        $this->smarty = new Smarty();
        $this->setRutas();
    }
    
    public function setRutas() {
        $this->smarty->template_dir = 'view/templates/';
        $this->smarty->compile_dir = 'view/templates_c/';
        $this->smarty->config_dir = 'control/configs/';
        $this->smarty->cache_dir = 'control/cache/';   
    }
    
    public function setAssign($varible,$valor) {
        $this->smarty->assign($varible,$valor);        
    }
    
    public function setDisplay($archivo) {
        $this->smarty->display($archivo);
    }
   
}



?>