<?php

include "db-config.php";

    class User{

        public $db;

        public function __construct(){

            
            $this->db = new mysqli(servername, username, password, db_name);
 
            if(mysqli_connect_errno()) {

                echo "Error: Could not connect to database.";

                    exit;
         
            }

        }

        /*** for login process ***/

        public function check_login($lemail, $lpassword){

 
            $password = md5($lpassword);

            $sql2="SELECT id from users WHERE email='$lemail' and password='$lpassword'";

 

            //checking if the username is available in the table

            $result = mysqli_query($this->db,$sql2);

            $user_data = mysqli_fetch_array($result);

            $count_row = $result->num_rows;

 

            if ($count_row == 1) {

                // this login var will use for the session thing

                $_SESSION['login'] = true;

                $_SESSION['id'] = $user_data['id'];

                return true;

            }

            else{

                return false;

            }

        }


        /*** For registration process ***/

        public function reg_user($fname, $lname, $email, $password, $phone, $address){

 
            $password = md5($password);

            $sql="SELECT * FROM users WHERE  email='$email'";

 

            //Checking if the username or email is available in db

            $check =  $this->db->query($sql) ;

            $count_row = $check->num_rows;


            //if the username is not in db then insert to the table
            if ($count_row == 0){
                $sql1="INSERT INTO users SET fname='$fname', lname='$lname', email='$email', password='$password', phone='$phone', address='$address'";
                $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
                return $result;
            }

            else { return false;}

        }

 

        /*** for showing the username or fullname ***/

        // public function get_fullname($uid){

        //     $sql3="SELECT fullname FROM users WHERE uid = $uid";

        //     $result = mysqli_query($this->db,$sql3);

        //     $user_data = mysqli_fetch_array($result);

        //     echo $user_data['fullname'];

        // }

 
        /*** Starting the session ***/

        public function get_session(){

            return $_SESSION['login'];

        }

 
        public function user_logout() {

            $_SESSION['login'] = FALSE;

            session_destroy();

        }

 

    }
?>