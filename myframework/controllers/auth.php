<?

class auth extends AppController{

	public function __construct(){}

	function login(){
		if($_REQUEST["username"] && $_REQUEST["password"]){
			$data = $this->parent->getModel("user")->select("select * from users where email = :email and password = : password", array(":email"=>$_REQUEST["username"],":password"=>sha1($_REQUEST["password"]))
            $users = file('data.txt');

            $success = 0;
   			foreach($users as $user){
   				$user = explode("|", $user);
				if($_REQUEST["username"] == $user[0] && $_REQUEST["password"] == $user[1]){
					$_SESSION['user']['username']= $user[0];
					$_SESSION['user']['userInfo']= $user[2];
					$_SESSION["loggedin"] = 1;
					header("Location:/welcome/");
					$success++;
				}	
			}
			if($success > 0){
				header("Location:/welcome/");
			}else{
				header("Location:/welcome?msg=Bad Login");
			}     
		}else{
			header("Location:/welcome?msg=Bad First Else");
		}
	}

  	function logout(){
    	session_destroy();
    	header("Location:/welcome");
  	}
}



?>
