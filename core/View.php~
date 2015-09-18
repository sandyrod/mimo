<?php
class View {
   

    function __construct() {
        Session::init();
        $usuario= Session::get('usuario');
        $this->usuario=$usuario;
    }
    
    public function get_titulo() {
        return $this->titulo;
    }
    
    public function set_titulo($titulo) {
        $this->titulo= $titulo;
    }
    
    public function render($nombre, $no_include = FALSE){
        if($no_include){
            require URL.'app/view/' . $nombre . '.php';
        }else{
            require TEMPLATE .'/header.php'; 
            require APP .'view/' . $nombre . '.php';
            require TEMPLATE .'/footer.php';
        }
    }
    
    public function mostrarTitulo() {
        if(isset($this->titulo)){  
            echo $this->titulo;
       }
    }
    
    public function mostrarJs() {
        if (isset($this->js)) {
                foreach ($this->js as $js) {
                    echo " <script type='text/javascript' src='". URL . 'vista/' .$js ."'></script>";
                }
            }
    }

}
