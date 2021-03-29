<?php
    session_start();
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
                    echo "<script>alert('Data inserted sucessfully!')</script>";
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
            foreach ($_FILES['image']['tmp_name'] as $key => $value) {
                $filename=$_FILES['image']['name'][$key];
                $filename_tmp=$_FILES['image']['tmp_name'][$key];
                echo '<br>';
                $extension=pathinfo($filename,PATHINFO_EXTENSION);
                $final_name='';
                if(in_array($extension,$approved_types)){
                    $upload_path='uploads/monthly_report/'.$_SESSION['office_id'].'/images/'.$filename;
                    if(!file_exists($upload_path)){
                        move_uploaded_file($filename_tmp, $upload_path);
                        $final_name=$filename;
                    }
                    else{
                        $filename=str_replace('.','-',basename($filename,$ext));
                        $newfilename=$filename.time().".".$extension;
                        $upload_path='uploads/monthly_report/'.$_SESSION['office_id'].'/images/'.$newfilename;
                        move_uploaded_file($filename_tmp, $upload_path);
                        $final_name=$newfilename;
                    }

                    return true;
                }
                else{
                    return false;
                }
            }
        }
        public function uploadFiles(){
            $approved_types=array('pdf','docx');
            foreach ($_FILES['file']['tmp_name'] as $key => $value) {
                $filename=$_FILES['file']['name'][$key];
                $filename_tmp=$_FILES['file']['tmp_name'][$key];
                echo '<br>';
                $extension=pathinfo($filename,PATHINFO_EXTENSION);
                $final_name='';
                if(in_array($extension,$approved_types)){
                    $upload_path='uploads/monthly_report/'.$_SESSION['office_id'].'/files/'.$filename;
                    if(!file_exists($upload_path)){
                        move_uploaded_file($filename_tmp, $upload_path);
                        $final_name=$filename;
                    }
                    else{
                        $filename=str_replace('.','-',basename($filename,$ext));
                        $newfilename=$filename.time().".".$extension;
                        $upload_path='uploads/monthly_report/'.$_SESSION['office_id'].'/files/'.$newfilename;
                        move_uploaded_file($filename_tmp, $upload_path);
                        $final_name=$newfilename;
                    }
                }
                else{
                    return false;
                }

            }
        }
        
        public function getProjectlList(){
            return $this->project_list;
        }

        
    }