<?php
    session_start();
    class DivViewBidReports extends Controller{
        public function divViewBidReports(){
            $this->view('division/view_bid_reports');
        }
    }
?>