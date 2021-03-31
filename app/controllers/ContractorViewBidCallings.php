<?php
    session_start();
    class ContractorViewBidCallings extends Controller{
        public function contractorViewBidCallings(){
            $this->view('contractor/view_bid_callings');
        }
    }
?>