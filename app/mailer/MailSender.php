<?php
    class MailSender{
        private $to;
        private $from;
        private $subject;
        private $message;
        private $header;

        public function __construct($to,$from,$subject,$message){
            $this->to=$to;
            $this->from=$from;
            $this->subject=$subject;
            $this->message=$message;
            $this->setHeader();
        }

        public function sendMail(){
            $result=mail($this->to,$this->subject,$this->message,$this->header);
            return $result;
        }
        private function setHeader(){
            $this->header="From: {$this->from}\r\nContent-Type: text/html;";
        }
    }
?>