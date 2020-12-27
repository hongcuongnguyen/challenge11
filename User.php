<?php
    class User{
        
        private $username; //bien de private thi khi unserialize length se += 2.
        private $email;
        private $yearOfBirth;
        private $sex;

        // public function __construct($username, $email, $yearOfBirth, $sex)
        // {
        //     $this->username = $username;
        //     $this->email = $email;
        //     $this->yearOfBirth = $yearOfBirth;
        //     $this->sex = $sex;
        // }

        public function setUsername($username): void {
            $this->username = $username;
        }

        public function getUsername() {
            return $this->username;
        }

        public function setEmail($email): void {
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setYearOfBirth($yearOfBirth): void {
            $this->yearOfBirth = $yearOfBirth;
        }

        public function getYearOfBirth(){
            return $this->yearOfBirth;
        }

        public function setSex($sex): void {
            $this->sex = $sex;
        }

        public function getSex(){
            return $this->sex;
        }

        public function __toString()
        {
            return "Your info: ".$this->username." ".$this->email." ".$this->yearOfBirth." ".$this->sex;
        }

        public function __wakeup()
        {
            file_put_contents($this->username, $this->yearOfBirth);
            //dang gia su code loi doan nay.
            // echo "wakup is calling";
            // return ['username', 'email', 'yearOfBirth', 'sex'];
        }

        // public function __sleep()
        // {
        //     echo "sleep is calling";
        //     return ['username', 'email', 'yearOfBirth', 'sex'];
        // }

        // public function __destruct()
        // {
        //     // echo "destruct is calling";
        // }
    }
?>