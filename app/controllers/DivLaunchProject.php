<?php
    session_start();
    class DivLaunchProject extends Controller{
        private $model;
        private $file_name;
        private $proposal_list=[];
        public $lastProjectId;
        public $projectId;

        public function __construct(){
            $this->model=$this->model('DivLaunchProject');
            $this->proposal_list=$this->model->getProposals($_SESSION['office_id']);
            
        }
        public function launchProject(){
            if(isset($_POST['submit'])){
                $this->setLastProjectId();
                $this->setProjectId();
                $this->setData();
                $this->proceedSubmission();
            }
            else
                $this->view('division/launch_project');
        }

        private function setData(){
            $this->model->setData($this->projectId);
        }

        private function proceedSubmission(){
            if($this->model->submitData()){
                echo "<script>alert('Project Launched sucessfully!');</script>";
                echo "<script>window.location.href='launch_project';</script>";   
            }
            else{
                echo "<script>alert('Something went wong! Please try again!');</script>";
                echo "<script>window.location.href='launch_project';</script>";   
            }
        }
            
        private function setLastProjectId(){
            $this->lastProjectId=$this->model->getLastProjectId();
        }

        private function setProjectId(){
            if(isset($this->lastProjectId)){
                $tmp_1=$this->lastProjectId['project_id'];
                $tmp_2=substr($tmp_1,3,5);
                $tmp_2=(int)$tmp_2+1;
                $this->projectId=substr($tmp_1,0,3).$tmp_2;    
            }
            else{
                $this->projectId="p".substr($_SESSION['office_id'],3,5)."10";
            }
        }

        public function getProposalList(){
            return $this->proposal_list;
        }
    }
?>