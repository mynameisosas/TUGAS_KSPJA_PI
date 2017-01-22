<?php
session_start();
include_once('library/koneksi.php');

class User{
	private $db;
	
	public function __construct(){
		$this->db=new Koneksi();
		$this->db=$this->db->dbkoneksi();
	}
	public function ceklogin($username,$password){
		if(!empty($username)&&!empty($password)){
			$st=$this->db->prepare("select * from user where username=? and password=?");
			$st->bindParam(1,$username);
			$st->bindParam(2,$password);
			$st->execute();
			
			if($st->rowCount()==1){
				$_SESSION['username']=$username;
				$_SESSION['password']=$password;
				echo "user verified, Acess Garanted";
				echo"<meta http-equiv='refresh' content='1;url=admin/admin.php'>";
			}else{
				echo"Incorrect username or password <br>";
				echo"<1 href='loginadmin.php'>ULANGI</a>";
			}
		}else{
				echo"Please Enter Username and Password";
			}
	}
		
		
}
?>