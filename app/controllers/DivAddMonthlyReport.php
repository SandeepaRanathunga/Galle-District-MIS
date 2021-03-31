<?php
    session_start();
    class DivAddMonthlyReport extends Controller{
        private $model;
        private $new_name;
        private $project_list=[];

        public function __construct(){
            $this->model=$this->model('DivAddMonthlyReport');
            $this->project_list=$this->model->getProjects($_SESSION['office_id']);
        }
        public function addMonthlyReport(){
            if(isset($_POST['submit'])){
                $this->setData();
                if($this->uploadFile()){
                    if($this->uploadToDatabase()){
                        echo "<script>alert('Report uploaded sucessfully!');</script>";
                        echo "<script>window.location.href='add_monthly_report';</script>";   
                    }
                    else{
                        echo "Failed to upload to database";
                    }
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
        
        private Function uploadFile(){
            $output="";
            if($_FILES['zip']['name'] == $_SESSION['office_id'].'.zip'){
                $file_name=$_FILES['zip']['name'];
                $arr=explode(".",$file_name);
                $name=$arr[0];
                $extension=$arr[1];
                if($extension=='zip'){
                    $this->new_name=uniqid('',true);
                    $name=$this->new_name.'.'.$extension;
                    $path='uploads/monthly_report/'.$_SESSION['office_id'].'/';
                    $location=$path.$name;
                    if(move_uploaded_file($_FILES['zip']['tmp_name'],$location)){
                        $zip =new ZipArchive;
                        $destinationFolder = 'uploads/monthly_report/'.$_SESSION['office_id'].'/'.$this->new_name;
                        if($zip->open($location ,ZipArchive::CREATE) === TRUE){
                            if(!is_dir($destinationFolder)){
                                mkdir($destinationFolder,  0777);
                            }
                            $zip->extractTo($destinationFolder);
                            $zip->close();
                            return true;
                        }
                        
                    }
                    else{
                        echo "<script>alert('Failed to upload the file to server.Please try again.')</script>";
                        echo "<script>window.location.href='add_monthly_report';</script>"; 
                    }
                }
                else{
                    echo "<script>alert('Invalid file format. Please only upload zip files.')</script>";
                    echo "<script>window.location.href='add_monthly_report';</script>";
                }
    
            }
            else{
                echo "<script>alert('Invalid file name.Please follow the and submit again.')</script>";
                echo "<script>window.location.href='add_monthly_report';</script>";
            }
        }
        private function uploadToDatabase(){
           return $this->model->insertData($this->new_name);
        }    

        public function getProjectlList(){
            return $this->project_list;
        }

        
    }