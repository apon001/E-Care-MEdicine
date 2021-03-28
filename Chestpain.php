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
		
				if( $a1 == "After taking food"){
					$data = 1;
				}
				elseif ($a1=="All time" && $a2=="Middle Uper side of the Chest" && $a3=="Change" && $a4=="Yes" && $a5=="Yes"){
					$data= 2;
				}
				elseif ($a1=="All time" && $a2=="Middle Uper side of the Chest" && $a3=="Change" && $a4=="Yes" && $a5=="No"){
					$data= 3;
				}
				elseif ($a1=="All time" && $a2=="Middle Uper side of the Chest" && $a3=="Change" && $a4=="No" && $a5=="Yes"){
					$data= 4;
				}
				elseif ($a1=="All time" && $a2=="Middle Uper side of the Chest" && $a3=="Change" && $a4=="No" && $a5=="No"){
					$data= 5;
				}
				elseif ($a1=="All time" && $a2=="Middle Uper side of the Chest" && $a3=="No Change" && $a4=="Yes" && $a5=="Yes"){
					$data= 6;
				}
				elseif ($a1=="All time" && $a2=="Middle Uper side of the Chest" && $a3=="No Change" && $a4=="Yes" && $a5=="No"){
					$data= 7;
				}
				elseif ($a1=="All time" && $a2=="Middle Uper side of the Chest" && $a3=="No Change" && $a4=="No" && $a5=="Yes"){
					$data= 8;
				}
				elseif ($a1=="All time" && $a2=="Middle Uper side of the Chest" && $a3=="No Change" && $a4=="No" && $a5=="No"){
					$data= 9;
				}
				elseif ($a1=="All time" && $a2=="Left side of the Chest" && $a3=="Change" && $a4=="Yes" && $a5=="Yes"){
					$data= 10;
				}
				elseif ($a1=="All time" && $a2=="Left side of the Chest" && $a3=="Change" && $a4=="Yes" && $a5=="No"){
					$data= 11;
				}
				elseif ($a1=="All time" && $a2=="Left side of the Chest" && $a3=="Change" && $a4=="No" && $a5=="Yes"){
					$data= 12;
				}
				elseif ($a1=="All time" && $a2=="Left side of the Chest" && $a3=="Change" && $a4=="No" && $a5=="No"){
					$data= 13;
				}
				elseif ($a1=="All time" && $a2=="Left side of the Chest" && $a3=="No Change" && $a4=="Yes" && $a5=="Yes"){
					$data= 14;
				}
				elseif ($a1=="All time" && $a2=="Left side of the Chest" && $a3=="No Change" && $a4=="Yes" && $a5=="No"){
					$data= 15;
				}
				elseif ($a1=="All time" && $a2=="Left side of the Chest" && $a3=="No Change" && $a4=="No" && $a5=="Yes"){
					$data= 16;
				}
				elseif ($a1=="All time" && $a2=="Left side of the Chest" && $a3=="No Change" && $a4=="No" && $a5=="No"){
					$data= 17;
				}
				elseif ($a1=="All time" && $a2=="All over the Chest" && $a3=="Change" && $a4=="Yes" && $a5=="Yes"){
					$data= 18;
				}
				elseif ($a1=="All time" && $a2=="All over the Chest" && $a3=="Change" && $a4=="Yes" && $a5=="No"){
					$data= 3;
				}
				elseif ($a1=="All time" && $a2=="All over the Chest" && $a3=="Change" && $a4=="No" && $a5=="Yes"){
					$data= 13;
				}
				elseif ($a1=="All time" && $a2=="All over the Chest" && $a3=="Change" && $a4=="No" && $a5=="No"){
					$data= 19;
				}
				elseif ($a1=="All time" && $a2=="All over the Chest" && $a3=="No Change" && $a4=="Yes" && $a5=="Yes"){
					$data= 20;
				}
				elseif ($a1=="All time" && $a2=="All over the Chest" && $a3=="No Change" && $a4=="Yes" && $a5=="No"){
					$data= 21;
				}
				elseif ($a1=="All time" && $a2=="All over the Chest" && $a3=="No Change" && $a4=="No" && $a5=="Yes"){
					$data= 22;
				}
				elseif ($a1=="All time" && $a2=="All over the Chest" && $a3=="No Change" && $a4=="No" && $a5=="No"){
					$data= 23;
				}
				else{
					echo"worng input";
			}
 
	
				if($data==1){
					echo"Do not worry, it's Gastric disease.";
				}
				elseif($data==2){
					echo" You possibale have Lung disease=60% <br> Gastric disease = 10% <br> Heart disease = 40%. ";
				}
				elseif($data==3){
					echo" You possibale have Lung disease=80% <br> Gastric disease = 20% <br> Heart disease = 20%. ";
				}
				elseif($data==4){
					echo" You possibale have Lung disease=40% <br> Gastric disease = 40% <br> Heart disease = 60%. ";
				}
				elseif($data==5){
					echo" You possibale have Lung disease=20% <br> Gastric disease = 60% <br> Heart disease = 20%. ";
				}
				elseif($data==6){
					echo" You possibale have Lung disease=40% <br> Gastric disease = 40% <br> Heart disease = 20%. ";
				}
				elseif($data==7){
					echo" You possibale have Lung disease=60% <br> Gastric disease = 60% <br> Heart disease = 0%. ";
				}
				elseif($data==8){
					echo" You possibale have Lung disease=20% <br> Gastric disease = 60% <br> Heart disease = 40%. ";
				}
				elseif($data==9){
					echo" You possibale have Lung disease=40% <br> Gastric disease = 80% <br> Heart disease = 20%. ";
				}
				elseif($data==10){
					echo" You possibale have Lung disease=60% <br> Gastric disease = 0% <br> Heart disease = 6%. ";
				}
				elseif($data==11){
					echo" You possibale have Lung disease=80% <br> Gastric disease = 20% <br> Heart disease = 40%. ";
				}
				elseif($data==12){
					echo" You possibale have Lung disease=40% <br> Gastric disease = 20% <br> Heart disease = 80%. ";
				}
				elseif($data==13){
					echo" You possibale have Lung disease=60% <br> Gastric disease = 20% <br> Heart disease = 60%. ";
				}
				elseif($data==14){
					echo" You possibale have Lung disease=40% <br> Gastric disease = 20% <br> Heart disease = 40%. ";
				}
				elseif($data==15){
					echo" You possibale have Lung disease=60% <br> Gastric disease = 40% <br> Heart disease = 20%. ";
				}
				elseif($data==16){
					echo" You possibale have Lung disease=20% <br> Gastric disease = 40% <br> Heart disease = 60%. ";
				}
				elseif($data==17){
					echo" You possibale have Lung disease=40% <br> Gastric disease = 60% <br> Heart disease = 40%. ";
				}			
				elseif($data==18){
					echo" You possibale have Lung disease=80% <br> Gastric disease = 0% <br> Heart disease = 40%. ";
				}			
				elseif($data==19){
					echo" You possibale have Lung disease=80% <br> Gastric disease = 40% <br> Heart disease = 40%. ";
				}			
				elseif($data==20){
					echo" You possibale have Lung disease=60% <br> Gastric disease = 20% <br> Heart disease = 20%. ";
				}			
				elseif($data==21){
					echo" You possibale have Lung disease=80% <br> Gastric disease = 40% <br> Heart disease = 0%. ";
				}			
				elseif($data==22){
					echo" You possibale have Lung disease=40% <br> Gastric disease = 40% <br> Heart disease = 40%. ";
				}			
				elseif($data==23){
					echo" You possibale have Lung disease=60% <br> Gastric disease = 60% <br> Heart disease = 20%. ";
				}			
		
		

			echo"</div>";

			}
	    }
	}
		$newSearch = new answer();
		$newSearch->find();
?>
<html> 
<head> <title>Question Base On Chest pain</title>
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
<form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST">

<p> <b>Q:</b>When is the pain occur?</p>                   
<select name="q1" required>   
<option value="0">--Select Option--</option>
<option value="All time">All time</option>
<option value="After taking food">After taking food</option>
</select>

	<p> <b>Q:</b>Where is the pain in the Chest?</p>                   
<select name="q2" required>   
<option value="0">--Select Option--</option>
<option value="Middle Uper side of the Chest">Middle Uper side of the Chest</option>
<option value="Left side of the Chest">Left side of the Chest</option>
<option value="All over the Chest">All over the Chest</option>
</select>

<p> <b>Q:</b>Does the pain go away somewhere?</p>                   
<select name="q3"required>   
<option value="0">--Select Option--</option>
<option value="Change">Change</option>
<option value="No Change">No Change</option>
</select>

<p> <b>Q:</b>Have cough?</p>                   
<select name="q4"required>   
<option value="0">--Select Option--</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>

<p> <b>Q:</b>When you are working is the pain increased?</p>                   
<select name="q5"required>   
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