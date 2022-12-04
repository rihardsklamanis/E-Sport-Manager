<?php

class SignupContr extends Signup
{

    private $uid;
    private $email;
    private $pwd;
    private $pwdrep;

    public function __construct($uid, $email, $pwd, $pwdrep)
    {
        $this->uid = $uid;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->pwdrep = $pwdrep;
    }

    public function signupUser()
    {
        if ($this->emptyInput() == false) {
            // echo "Empty input!";
            header("location: ../../index.php?error=emptyinput");
            exit();
        }
        if ($this->invalidUid() == false) {
            // echo "Invalid username!";
            header("location: ../../index.php?error=invalidusername");
            exit();
        }
        if ($this->invalidEmail() == false) {
            // echo "Invalid email!";
            header("location: ../../index.php?error=invalidemail");
            exit();
        }
        if ($this->pwdMatch() == false) {
            // echo "Passwords doesn't match!";
            header("location: ../../index.php?error=passwordmatch");
            exit();
        }
        if ($this->uidTakenCheck() == false) {
            // echo "Email or Username already taken!";
            header("location: ../../index.php?error=emailorusernametaken");
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
    }

    // Test for empty input
    private function emptyInput()
    {
        $result;
        if (empty($this->uid) || empty($this->email) || empty($this->pwd) || empty($this->pwdrep)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    // Test for invalid Username input
    private function invalidUid()
    {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    // Test for invalid Email input
    private function invalidEmail()
    {
        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    // Test if password match
    private function pwdMatch()
    {
        $result;
        if ($this->pwd !== $this->pwdrep) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    // Test if username already exist
    private function uidTakenCheck()
    {
        $result;
        if (!$this->checkUser($this->uid, $this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

}

?>