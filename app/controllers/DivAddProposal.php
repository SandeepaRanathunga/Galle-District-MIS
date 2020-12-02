<?php
    session_start();
    class DivAddProposal extends Controller{
        private $model;
        // private $div_id=$_SESSION['div_id'];
        private $file_name;

        public function divAddProposal(){
            if(isset($_POST['submit'])){
                $this->uploadData();
            }
            else
                $this->view('division/add_project_proposal');

        }

        private function uploadData(){
            $this->model=$this->model('AddProjectProposal');
            if($this->fileUploadServer()){
                $this->model->setDetails('div05',$this->file_name);
                if($this->model->insertData()){
                     echo "<script>alert('Data uploaded sucessfully!');</script>";
                }
                else{
                    echo "<script>alert('Something went wrong.Please try again!');</script>";
                }
            }
            else{
                echo "<script>alert('File upload process failed.Please try again!')</script>";
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
                    $upload_path='uploads/proposal/'.$file_name;
                    move_uploaded_file($temp_file_name,$upload_path);
                    return true;
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