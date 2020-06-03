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

    public function searching($name)
    {
        if ($Datas = $this->search($name)) {
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
            echo "not exists";
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
                echo "<td scope='col'> <form method = 'POST'>
		     <input type='hidden' value='".$data['name']."' name='hidden'>
		     <input type='submit' class='btn btn-success' Value='Unblock' name='Unblock'>
		     <input type='submit' class='btn btn-danger' Value='Block' name='block'>
		     <input type='submit' class='btn btn-warning' Value='delete' name='delete'>
            </form>  </td>";
                echo "</tr>";
                echo "</tbody>";
            }
        } else {
            echo "no workspaces to view";
        }
        if (isset($_POST['block'])) {
            $wokrspace_Username = $data['Username'];
            $this->block_workspace($wokrspace_Username);
            echo "workspace : ".$data['name']." has been blocked from this system";
        } elseif (isset($_POST['Unblock'])) {
            $wokrspace_Username = $data['Username'];
            $this->unblock_workspace($wokrspace_Username);
            echo "workspace : ".$data['name']." has been Un-blocked from this system";
        } elseif (isset($_POST['delete'])) {
            $wokrspace_Username = $data['Username'];
            $id = $data['id'];
            $this->delete_workspace($wokrspace_Username, $id);
            echo "workspace : ".$data['name']." has been deleted from this system";
        } else {
            //
        }
    }
    
    
    
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
                echo "<td scope='col'> <form method = 'POST'>
                   <input type='hidden' value='".$data['name']."' name='hidden'>
                   <input type='submit' class='btn btn-warning' Value='delete' name='delete'>
                  </form>  </td>";
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

    public function showallreports()
    {
        $Datas = $this->getReports();
        if ($Datas!=null) {
            foreach ($Datas as $data) {
                echo "<div class='card' style='margin:20px'>
  		<ul class='list-group list-group-flush'>
   		 <li class='list-group-item'>Reporter Name : ".$data['user_name']."</li>
    	<li class='list-group-item'>Report Content : ".$data['report']."</li>
 		 </ul>
		</div>
		"    ;
            }
        } else {
            echo "You have no reports";
        }
    }
}
