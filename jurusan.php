<?php
// buat class jurusan
class jurusan {
 
   public $TKR,$TSM,$RPL ;
  
  
   public function __construct($TKR,$TSM,$RPL){
   $this->TKR =$TKR;
   $this->TSM =$TSM;
   $this->RPL=$RPL;
   }
  
   public function get_tk(){
     return $this->TKR;
   }
   public function get_tm(){
     return $this->TSM;
 }
   public function get_rp(){
    return $this->RPL;
   }}
  ?>