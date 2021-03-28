<?php 
if(isset($_POST['search'])){
include 'handf.php';
}
?>
<html>
<head>
<style>

#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
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
<body>
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
class specialist extends Dbh{

	protected function getallspecialist(){
		$category = $_POST['Specialist'];
		$sql = "SELECT * FROM specialist WHERE category='$category'";
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

class Viewspecialist extends specialist{

	public function showAllspecialist(){
		$datas = $this->getallspecialist();
		foreach($datas as $data){
			echo "<table id='customers'> <th> Specialist Name:</td><td>".$data['name']."</th>";
			echo "<tr><td> Category: </td><td>".$data['category']."</td></tr>";
			echo "<tr><td> Phone: </td><td>".$data['phone']."</td></tr>";
			echo "<tr><td> Email: </td><td>".$data['email']."</td></tr>";
			echo "<tr><td> Day: </td><td>".$data['day']."</td></tr>";
			echo "<tr><td> Time: </td><td>".$data['time']."</td></tr>";
			echo "<tr><td> Place: </td><td>".$data['place']."</td></tr>";
			echo '<tr style= "background-color:white"><td><br></td></tr>';
		}
				

	}
}  
 $specialist = new Viewspecialist();
$specialist -> showAllspecialist();
}
?>
<p></p>
</body>
</html>