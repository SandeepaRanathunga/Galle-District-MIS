<?php
    session_start();
    class AdminDeleteAccount extends Controller{
        private $model ;
        private $searchID ;

        public function __construct(){
            $this->model = $this->model('AdminDeleteAccount') ;
            $this->model->loadfields() ;
        }

        public function adminDeleteAccount(){
            // if(isset($_POST['search'])){
            //     $searchID = $_POST['search_user_id'] ;
            //     if($this->)
                
            // }
            $this->view('admin/admin_delete_account');
        }
    }
?>

<!-- public function adminDeleteAccount(){
    
}
public function adminDeleteAccount(){
            if(isset($_POST['approve'])){
                // echo "<script>alert('Are you sure you want to approve the proposal? Once you approved you are unable to revise it.');</script>";
                $this->model->approveProposal($this->proposal_id);
                echo "<script>alert('Proposal Approved!');</script>";
                 echo "<script>window.location.href='dis_view_proposal?id={$this->proposal_id}',true;</script>";   
            }
            else if(isset($_POST['reject'])){
                // echo "<script>alert('Are you sure you want to reject the proposal? Once you approved you are unable to revise it.');</script>";
                $this->model->rejectProposal($this->proposal_id);
                echo "<script>alert('Proposal Rejected!');</script>";
                echo "<script>window.location.href='dis_view_proposal?id={$this->proposal_id}',true;</script>";
            }
            else
                $this->view('district/view_proposal');
        } -->