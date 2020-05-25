<?php
include_once('database.php');
class Admin extends user
{
    public function Editprofile($email, $password, $name, $NAMEINDB)
    {
        $sql = "UPDATE workspaces SET email = '$email' , password = '$password',name = '$name'
		 WHERE Username = '$NAMEINDB' ";

        $result = $this->Connect()->query($sql);
    }
    public function countworkspaces($groupid)
    {
        $sql = "SELECT * FROM workspaces WHERE groupid = $groupid ";
        $result = $this->Connect()->query($sql);
        $numrows = $result->num_rows;
        if ($numrows > 0) {
            echo $numrows;
        }
    }

    
    
    //list all workspaces in the database
    public function showallusers()
    {
        $Datas = $this->getworkspacedata();
        if ($Datas!=null) {
            foreach ($Datas as $data) {
                echo "<tbody>";
                echo "<tr>";
                echo " <th scope='row'>".$data['id']."</th>";
                echo " <td>".$data['name']."</td>";
                echo " <td>".$data['email']."</td>";
                echo " <td>".$data['price']."</td>";
                echo "</tr>";
                echo "</tbody>";
            }
        } else {
            echo "no workspaces to view";
        }
    }

    //delete user from system
    
    
    
    // list all users on system and handle them

    public function showallusersonsys()
    {
        $Datas = $this-> getallusersonly();
        if ($Datas!=null) {
            foreach ($Datas as $data) {
                echo "<tbody>";
                echo "<tr>";
                echo " <th scope='row'>".$data['id']."</th>";
                echo " <td>".$data['name']."</td>";
                echo " <td>".$data['email']."</td>";
                echo " <td>".$data['price']."</td>";
                echo "</tr>";
                echo "</tbody>";
            }
        } else {
            echo "no users to view";
        }
        if (isset($_POST['delete']) && $Datas != null) {
            $Username = $data['Username'];
            $id = $data['id'];
            $this->delete_user($Username, $id);
            echo "User : ".$data['name']." has been deleted from this system";
        } else {
            //
        }
    }

    //block workspace from system
    public function block_workspace($wokrspace_Username)
    {
        $sql = "UPDATE workspaces  SET regstatus = 0 WHERE Username = '$wokrspace_Username' ";
        $result = $this->Connect()->query($sql);
    }
    //unblock workspace from system
    public function unblock_workspace($wokrspace_Username)
    {
        $sql = "UPDATE workspaces  SET regstatus = 1 WHERE Username = '$wokrspace_Username'";
        $result = $this->Connect()->query($sql);
    }
    
    //delete user from system
    public function delete_user($Username, $id)
    {
        $sql2 = "SELECT * FROM  workspaces WHERE Username = '$Username' ";
        $results = $this->Connect()->query($sql2);
        $numrows = $results->num_rows;
        if ($numrows > 0) {
            $sql = "DELETE FROM workspaces WHERE Username = '$Username' ";
            $result = $this->Connect()->query($sql);
        } else {
            echo "no users " ;
        }
    }
}
