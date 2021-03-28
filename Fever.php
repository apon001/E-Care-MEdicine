
<?php
	class answer{
		public function find()
		{

			if(isset($_POST['search'])){
				include 'f&h.php';

		    echo' <div class="output"><p class="output">Possible Diseases Are:</p>';
			
	         $a1 = $_POST["q1"];
			 $a2 = $_POST["q2"];
			 $a3 = $_POST["q3"];
			 $a4 = $_POST["q4"];
			 $a5 = $_POST["q5"];
			 $data=0;
			
			if( $a1 == "Less than 100F"){
				$data = 1;
			}
				elseif ($a1=="More than 100F" && $a2=="Less than 7 days" && $a3=="Yes" && $a4=="Yes" && $a5=="Yes"){
					$data= 2;
				}
				elseif ($a1=="More than 100F" && $a2=="Less than 7 days" && $a3=="Yes" && $a4=="No" && $a5=="Yes"){
					$data=3;
				}
				elseif ($a1=="More than 100F" && $a2=="Less than 7 days" && $a3=="Yes" && $a4=="Yes" && $a5=="No"){
					$data=4;
				}	
				elseif ($a1=="More than 100F" && $a2=="Less than 7 days" && $a3=="Yes" && $a4=="No" && $a5=="No"){
					$data=5;
				}	
				elseif ($a1=="More than 100F" && $a2=="Less than 7 days" && $a3=="No" && $a4=="No" && $a5=="No"){
					$data=6;
				}	
				elseif ($a1=="More than 100F" && $a2=="Less than 7 days" && $a3=="No" && $a4=="No" && $a5=="Yes"){
					$data=6;
				}	
				elseif ($a1=="More than 100F" && $a2=="Less than 7 days" && $a3=="No" && $a4=="Yes" && $a5=="No"){
					$data=7;
				}	
				elseif ($a1=="More than 100F" && $a2=="Less than 7 days" && $a3=="No" && $a4=="Yes" && $a5=="Yes"){
					$data=8;
				}
				elseif ($a1=="More than 100F" && $a2=="More than 7 days" && $a3=="Yes" && $a4=="Yes" && $a5=="Yes"){
					$data= 2;
				}
				elseif ($a1=="More than 100F" && $a2=="More than 7 days" && $a3=="Yes" && $a4=="No" && $a5=="Yes"){
					$data=3;
				}
				elseif ($a1=="More than 100F" && $a2=="More than 7 days" && $a3=="Yes" && $a4=="Yes" && $a5=="No"){
					$data=4;
				}	
				elseif ($a1=="More than 100F" && $a2=="More than 7 days" && $a3=="Yes" && $a4=="No" && $a5=="No"){
					$data=5;
				}	
				elseif ($a1=="More than 100F" && $a2=="More than 7 days" && $a3=="No" && $a4=="No" && $a5=="No"){
					$data=6;
				}	
				elseif ($a1=="More than 100F" && $a2=="More than 7 days" && $a3=="No" && $a4=="No" && $a5=="Yes"){
					$data=6;
					
				}	
				elseif ($a1=="More than 100F" && $a2=="More than 7 days" && $a3=="No" && $a4=="Yes" && $a5=="No"){
					$data=7;
					
				}	
				elseif ($a1=="More than 100F" && $a2=="More than 7 days" && $a3=="No" && $a4=="Yes" && $a5=="Yes"){
					$data=8;
					
				}
				else{
					echo"worng input";
			}
	 
		
				if($data==1){
					echo"Your all right.";
				}
				elseif($data==2){
					echo"It's complicated.";
				}
				elseif($data==3){
					echo" You possibale have Dengue=45% <br> Normal Fever = 45% <br> Malaria = 10%. ";
				}elseif($data==4){
					echo" You possibale have Dengue=45% <br> Normal Fever = 10% <br> Malaria = 45% .";
				}elseif($data==5){
					echo" You possibale have Dengue=90% <br> Normal Fever = 5% <br> Malaria = 5% .";
				}elseif($data==6){
					echo" You possibale have Dengue=5% <br> Normal Fever = 90% <br> Malaria = 5% .";
				}elseif($data==7){
					echo" You possibale have Dengue=5% <br> Normal Fever = 5% <br> Malaria = 90% .";
				}elseif($data==8){
					echo" You possibale have Dengue=10% <br> Normal Fever = 45% <br> Malaria = 45% .";
				}
				
				echo"</div>";
			}
		}
	}
			$newSearch = new answer();
			$newSearch->find();
?>
	<html> 
	<head> <title>Question Base On Fever</title>
		<link rel="stylesheet" href="style.css">

		<style>
		p{
			color:blue;
		}
		p.output{
			color:red;
		}
		div.output{
			width:500px;
			margin: auto;
			border: 3px solid red;
		}
	</style>
</head>

<body>
	<form  action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST" >

		<p> <b>Q:</b>What is the temparecher during fever?</p>                   
		<select name="q1"  required>   
			<option value="0">--Select Option--</option>
			<option value="Less than 100F">Less than 100F</option>
			<option value="More than 100F">More than 100F</option>
		</select>

		<p> <b>Q:</b>How long fever?</p>                   
		<select name="q2" required>   
			<option value="0">--Select Option--</option>
			<option value="Less than 7 days">Less than 7 days</option>
			<option value="More than 7 days">More than 7 days</option>
		</select>

		<p> <b>Q:</b>Any physical signs during fever?</p>                   
		<select name="q3" required>   
			<option value="0">--Select Option--</option>
			<option value="Yes">Yes</option>
			<option value="No">No</option>
		</select>
		<p> <b>Q:</b>Is there any physical shvaring during fever?</p>                   
		<select name="q4" required>   
			<option value="0">--Select Option--</option>
			<option value="Yes">Yes</option>
			<option value="No">No</option>
		</select>
		<p> <b>Q:</b>Do you have cold during fever?</p>                   
		<select name="q5"required >   
			<option value="0">--Select Option--</option>
			<option value="Yes">Yes</option>
			<option value="No">No</option>
		</select>

		<br/>
		<input type="submit" name="search" value="All Done">
		<br/>
		<br/>
		<br/>


	</form>

</body>
</html>