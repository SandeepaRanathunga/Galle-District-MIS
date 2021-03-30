<?php
    session_start();
    class ContractorSubmitBidReport extends Controller{
        private $model;
        private $bid_report_name;

        public function contractorSubmitBidReport(){
            if(isset($_POST['submit'])){
                $this->uploadData();
            }
            else
                $this->view('contractor/submit_bid_report');
        }

        private function uploadData(){
            $this->model=$this->model('AddBidReport');
            $result=$this->fileUploadServer();
            if($result){
                $this->model->setDetails($this->bid_report_name);
                $result=$this->model->insertData();
                if($result){
                     echo "<script>alert('Data uploaded sucessfully!');</script>";
                     echo "<script>window.location.href='submit_bid';</script>";
                }
                else{
                    echo "<script>alert('Something went wrong.Please try again!');</script>";
                    echo "<script>window.location.href='add_proposal';</script>";
                }
            }
            else{
                echo "<script>alert('File upload process failed.Please try again!')</script>";
                echo "<script>window.location.href='submit_bid_report';</script>";
            }
        }
        
        public function fileUploadServer(){
            $file_name=$_FILES['file']['name'];
            $temp_file_name=$_FILES['file']['tmp_name'];
            $error=$_FILES['file']['error'];

            $temp=explode('.',$file_name);
            $file_extension=end($temp);
            $file_extension=strtolower($file_extension);
            $allowed_types=array('pdf','docx');

            if(in_array($file_extension,$allowed_types)){
                if($error==0){
                    $file_name=uniqid('',true).'.'.$file_extension;
                    $this->file_name=$file_name;
                    $upload_path='uploads/bid_report/'.$file_name;
                    $result=move_uploaded_file($temp_file_name,$upload_path);
                    return $result;
                }
                else
                    return false;
                }
            else{
                return false;
            }
        }
    }
?>