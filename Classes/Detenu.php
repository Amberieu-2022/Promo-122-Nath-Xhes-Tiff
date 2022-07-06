<?php
    class Detenu extends Hydrate{
        private $_id_detenu;
        private $_firstname;
        private $_lastname;
        private $_age;
        private $_residence;
        private $_activity_area;
        private $_phone;
        private $_email;
        private $_photo;
        private $_photo_simple;
        private $_delit;
        private $_quality;
        private $_defaut;

        public function getId_detenu(){
            return $this->_id_detenu;
        }
        public function getFirstname(){
            return $this->_firstname;
        }
        public function getLastname(){
            return $this->_lastname;
        }
        public function getAge(){
            return $this->_age;
        }
        public function getResidence(){
            return $this->_residence;
        }
        public function getActivity_area(){
            return $this->_activity_area;
        }
        public function getPhone(){
            return $this->_phone;
        }
        public function getEmail(){
            return $this->_email;
        }
        public function getPhoto(){
            return $this->_photo;
        }
        public function getPhoto_simple(){
            return $this->_photo_simple;
        }
        public function getDelit(){
            return $this->_delit;
        }
        public function getQuality(){
            return $this->_quality;
        }
        public function getDefaut(){
            return $this->_defaut;
        }


        public function setId_detenu($id_detenu){
            $this->_id_detenu = $id_detenu;
        }
        public function setFirstname($firstname){
            $this->_firstname = $firstname;
        }
        public function setLastname($lastname){
            $this->_lastname = $lastname;
        }
        public function setAge($age){
            $this->_age = $age;
        }
        public function setResidence($residence){
            $this->_residence = $residence;
        }
        public function setActivity_area($activity_area){
            $this->_activity_area = $activity_area;
        }
        public function setPhone($phone){
            $this->_phone = $phone;
        }
        public function setEmail($email){
            $this->_email = $email;
        }
        public function setPhoto($photo){
            $this->_photo = $photo;
        }
        public function setPhoto_simple($photo_simple){
            $this->_photo_simple = $photo_simple;
        }
        public function setDelit($delit){
            $this->_delit = $delit;
        }
        public function setQuality($quality){
            $this->_quality = $quality;
        }
        public function setDefaut($defaut){
            $this->_defaut = $defaut;
        }

        
    }