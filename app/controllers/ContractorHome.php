<?php
    session_start();
    class ContractorHome extends Controller{
        public function contractorHome(){
            $this->view('contractor/index');
        }
    }
?>