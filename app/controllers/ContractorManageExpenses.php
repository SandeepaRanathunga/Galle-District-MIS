<?php
    session_start();
    class ContractorManageExpenses extends Controller{
        public function contractorManageExpenses(){
            $this->view('contractor/manage_expenses');
        }
    }
?>