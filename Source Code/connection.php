<?php
class connect
{
	public $hostname,$username,$password,$dbname,$conn;
	public function connect()
	{
	$this->hostname="localhost";
	$this->username="root";
	$this->password="";
	$this->dbname="demo1";

	$this->conn=mysqli_connect($this->hostname,	$this->username,$this->password,$this->dbname) or die("Connection not established");
	}

	public function insert1($name,$contact,$city)
	{
		$q="insert into student(name,contact,city)values('$name','$contact','$city');";
		$query=mysqli_query($this->conn,$q);
		if($query==true)
		{
			echo "data inserted";
		}
		else
		{
			echo "data not inserted";
		}
	}
}
?>