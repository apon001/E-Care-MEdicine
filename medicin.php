<?php 
if(isset($_POST['search'])){
include 'h&f.php';
}
?>
<html>
<head>
<style>

#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 25%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<?php
 if(isset($_POST['search'])){
class dbh{
	private $servername;
	private $username;
	private $password;
	private $dbname;
	
	protected function connect(){
		$this -> servername ="localhost";
		$this -> username ="root";
		$this -> password ="";
		$this -> dbname ="ecare";
		
		$con = new mysqli($this -> servername,$this -> username,
		$this -> password,$this -> dbname);
		
		
		return $con;
	}
}
class problem extends Dbh{

	protected function getallmedicine(){
		$problemname = $_POST['problem'];
		$sql = "SELECT * FROM problem  Where pname='$problemname' ";
		$result = $this -> connect() -> query($sql);
		
		$numRows = $result->num_rows;
		
		if($numRows > 0){
			while($row= $result->fetch_assoc()){
				$data[]=$row;
			}
			return $data;
		}
	}
}

class Viewmedicine extends Problem{

	public function showAllmedicine(){
		$datas = $this->getallmedicine();
		foreach($datas as $data){
			echo "<table id='customers'> <th>".$data['pname']."</th>";
			echo "<tr><td>".$data['m1']."</td></tr>";
			echo "<tr><td>".$data['m2']."</td></tr>";
			echo "<tr><td>".$data['m3']."</td></tr>";
			echo"<br><br>";
		}

	}
}  
 $madicine = new Viewmedicine();
$madicine -> showAllmedicine();
}
?>
</html>