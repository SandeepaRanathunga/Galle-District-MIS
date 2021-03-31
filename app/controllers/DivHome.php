<?php
    session_start();
    class DivHome extends Controller{    
        public function divHome(){
            $this->view('division/index');
        }
    }
?>