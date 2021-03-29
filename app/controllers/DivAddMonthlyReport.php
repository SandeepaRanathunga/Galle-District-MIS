<?php
    // session start();
    class DivAddMonthlyReport extends Controller{
        private $model;
        private $file_name;
        private $project_list=[];

        public function __construct(){
            $this->model=$this->model('DivAddMonthlyReport');
            $this->project_list=$this->model->getProjects($_SESSION['office_id']);
        }
        public function addMonthlyReport(){
            if(isset($_POST['submit'])){
                $this->setData();
                if($this->insertData()){
                   if( $this->uploadImages() && $this->uploadFiles()){
                    echo "<script>alert('Data inserted sucessfully!')</script>";
                   }
                   else{
                    "<script>alert('Files not updated to the db!')</script>";
                   }
                }
                else{
                    echo "<script>alert('Data inserted failed!')</script>";
                }
            }
            else
                $this->view('division/add_monthly_report');
        }

        private function setData(){
            $this->model->setDetails();
        }
        
        private function insertData(){
            return $this->model->insertData();
        }
        private function uploadImages(){
            $approved_types=array('jpeg','jpg','png','gif');
            $file_count=count($_FILES['image']['tmp_name']);
            for ($i=0 ; $i<$file_count ; $i++) {
                $filename=$_FILES['image']['name'][$i];
                $filename_tmp=$_FILES['image']['tmp_name'][$i];
                $extension=pathinfo($filename,PATHINFO_EXTENSION);
                $final_name='';
                if(in_array(strtolower($extension),$approved_types)){
                    $final_name=uniqid('',true).'.'.$extension;
                    $upload_path='uploads/monthly_report/'.$_SESSION['office_id'].'/images/'.$final_name;
                        $sucess=move_uploaded_file($filename_tmp, $upload_path);
                        if(!$sucess){
                            return false;
                        }
                        else{
                            if($this->uploadToDatabase($final_name,1)){
                                return true;
                            }
                            return false;
                        }
                }
                else{
                    continue;
                }
            }
            return true;
        }
        public function uploadFiles(){
            $approved_types=array('pdf','docx');
            $file_count=count($_FILES['file']['tmp_name']);
            for ($i=0 ; $i<$file_count ; $i++) {
                $filename=$_FILES['file']['name'][$i];
                $filename_tmp=$_FILES['file']['tmp_name'][$i];
                $extension=pathinfo($filename,PATHINFO_EXTENSION);
                $final_name='';
                if(in_array(strtolower($extension),$approved_types)){
                    $final_name=uniqid('',true).'.'.$extension;
                    $upload_path='uploads/monthly_report/'.$_SESSION['office_id'].'/documents/'.$final_name;
                        $sucess=move_uploaded_file($filename_tmp, $upload_path);
                        if(!$sucess){
                            return false;
                        }
                        else{
                            if($this->uploadToDatabase($final_name,1)){
                                return true;
                            }
                            return false;
                        }
                }
                else{
                    continue;
                } 
        }
        return true;
    }
        public function uploadToDatabase($final_name,$type){
            $this->model->insertFileNames($final_name,$type);
        }    

        public function getProjectlList(){
            return $this->project_list;
        }

        
    }