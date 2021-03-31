<?php  
    session_start();
    class ContractorAddExpenses extends Controller{
        public function contractorAddExpenses(){
            $this->view('contractor/add_expenses');
        }
    }
?>
