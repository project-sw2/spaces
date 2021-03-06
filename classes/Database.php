<?php
include_once('connect.php');
class user extends connection
{
    public function getallusers()
    {
        $sql = "SELECT * FROM workspaces";
        $result = $this->Connect()->query($sql);
        $numrows = $result->num_rows;
        if ($numrows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row ;
            }
      
            return $data;
        }
    }

    public function search($name)
    {
        $sql = "SELECT * FROM workspaces WHERE groupid = 1 AND name = '$name' ";
        $result = $this->Connect()->query($sql);
        $numrows = $result->num_rows;
        if ($numrows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row ;
            }
            return $data;
        } else {
            echo "";
        }
    }

    public function getallusersonly()
    {
        $sql = "SELECT * FROM workspaces WHERE groupid = 2 ";
        $result = $this->Connect()->query($sql);
        $numrows = $result->num_rows;
        if ($numrows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row ;
            }
      
            return $data;
        }
    }

    public function getallworksonly($name)
    {
        $sql = "SELECT Username FROM workspaces WHERE name = '$name' ";
        $result = $this->Connect()->query($sql);
        $numrows = $result->num_rows;
        if ($numrows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row ;
            }
      
            return $data;
        }
    }

    public function logsys($Email, $password)
    {
        $sql = "SELECT * FROM workspaces WHERE email = '$Email' AND password = '$password'" ;
        $result = $this->Connect()->query($sql);
        $numrows = $result->num_rows;
        $row = $result->fetch_assoc();
        if ($numrows > 0  && $row['groupid'] == 0) {
            header('location: profile.php');
        } elseif ($numrows > 0  && $row['groupid'] == 1 && $row['regstatus'] == 1) {
            header('location: WSpaceprofile.php');
        } elseif ($numrows > 0  && $row['groupid'] == 2 && $row['regstatus'] == 1) {
            header('location: userprofile.php');
        } else {
            header('location: login.php');
        }
    }


    public function signup($name, $email, $password, $groupid, $username)
    {
        $regstatus = 1 ;
        $sql = "INSERT INTO  workspaces(name, email , password , groupid,Username ,regstatus) VALUES ('$name','$email' , '$password' , '$groupid','$username' , '$regstatus')"  ;
        $result = $this->Connect()->query($sql);
        header('location: login.php');
    }

    public function signupWorkSpace($name, $email, $password, $groupid, $username, $description, $price, $location)
    {
        $regstatus = 1 ;
        $sql = "INSERT INTO  workspaces(name,email , password , groupid , Username ,regstatus , description , price , location) 
		VALUES ('$name','$email' , '$password' , '$groupid','$username' , '$regstatus' , '$description' , '$price' , '$location')"  ;
        $result = $this->Connect()->query($sql);
        header('location: login.php');
    }


    public function getworkspacedata()
    {
        $sql = "SELECT * FROM workspaces WHERE groupid = 1 ";
        $result = $this->Connect()->query($sql);
        $numrows = $result->num_rows;
        if ($numrows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row ;
            }
            return $data;
        }
    }




    public function getworkspacetime($workspace)
    {
        $sql="SELECT * FROM workspaces WHERE  name = '$workspace'";
        $results = $this->Connect()->query($sql);
        $rows= $results->fetch_assoc();
        $ws = $rows['id'];
        //////////////////////////////////////////////////////////////second query//////////////////////////////
        $sql2 = "SELECT * FROM times INNER JOIN workspaces ON times.times_fk = workspaces.id WHERE workspaces.id = '$ws'AND status = 1" ;
        $result = $this->Connect()->query($sql2);
        $numrows = $result->num_rows;
        if ($numrows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row ;
            }
            return $data;
        } else {
            return null;
        }
    }
    
    public function selectTimedata($name)
    {
        $sql = "SELECT * FROM times WHERE room_name = '$name'";
        $result = $this->Connect()->query($sql);
        $numrows = $result->num_rows;
        if ($numrows > 0) {
            $row = $result->fetch_assoc();
            return $row;
        }
    }

    public function getrequestsus($username)
    {
        $sql = "SELECT * FROM booking WHERE user_name = '$username'";
        $result = $this->Connect()->query($sql);
        $numrows = $result->num_rows;
        if ($numrows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row ;
            }
            return $data;
        }
    }

    public function getReports()
    {
        $sql = "SELECT * FROM reports";
        $result = $this->Connect()->query($sql);
        $numrows = $result->num_rows;
        if ($numrows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row ;
            }
      
            return $data;
        }
    }
}



?>

