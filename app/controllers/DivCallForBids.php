<?php
    session_start();
    class DivCallForBids extends Controller{
        public function divCallForBids(){
            $this->view('division/call_for_bids');
        }
    }
?>