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

					 
						if ($a1== "Uper  side of the abdomen" && $a2=="Yes" && $a3=="After taking oily food" && $a4=="Yes" && $a5=="loose bowels"){
							$data= 1;
						}
						elseif ($a1== "Uper  side of the abdomen" && $a2=="Yes" && $a3=="After taking oily food" && $a4=="Yes" && $a5=="No change"){
							$data= 2;
						}
						elseif ($a1== "Uper  side of the abdomen" && $a2=="Yes" && $a3=="After taking oily food" && $a4=="Yes" && $a5=="Whitish closet"){
							$data= 3;
						}
						elseif ($a1== "Uper  side of the abdomen" && $a2=="Yes" && $a3=="After taking oily food" && $a4=="No" && $a5=="loose bowels"){
							$data= 4;
						}
						elseif ($a1== "Uper  side of the abdomen" && $a2=="Yes" && $a3=="After taking oily food" && $a4=="No" && $a5=="No change"){
							$data= 5;
						}
						elseif ($a1== "Uper  side of the abdomen" && $a2=="Yes" && $a3=="After taking oily food" && $a4=="No" && $a5=="Whitish closet"){
							$data= 6;
						}
						elseif ($a1== "Uper  side of the abdomen" && $a2=="Yes" && $a3=="It is not related to food" && $a4=="Yes" && $a5=="loose bowels"){
							$data= 7;
						}
						elseif ($a1== "Uper  side of the abdomen" && $a2=="Yes" && $a3=="It is not related to food" && $a4=="Yes" && $a5=="No change"){
							$data= 8;
						}
						elseif ($a1== "Uper  side of the abdomen" && $a2=="Yes" && $a3=="It is not related to food" && $a4=="Yes" && $a5=="Whitish closet"){
							$data= 9;
						}
						elseif ($a1== "Uper  side of the abdomen" && $a2=="Yes" && $a3=="It is not related to food" && $a4=="No" && $a5=="loose bowels"){
							$data= 10;
						}
						elseif ($a1== "Uper  side of the abdomen" && $a2=="Yes" && $a3=="It is not related to food" && $a4=="No" && $a5=="No change"){
							$data= 11;
						}
						elseif ($a1== "Uper  side of the abdomen" && $a2=="Yes" && $a3=="It is not related to food" && $a4=="No" && $a5=="Whitish closet"){
							$data= 12;
						}
						elseif ($a1== "Uper  side of the abdomen" && $a2=="No" && $a3=="After taking oily food" && $a4=="Yes" && $a5=="loose bowels"){
							$data= 4;
						}
						elseif ($a1== "Uper  side of the abdomen" && $a2=="No" && $a3=="After taking oily food" && $a4=="Yes" && $a5=="No change"){
							$data= 5;
						}
						elseif ($a1== "Uper  side of the abdomen" && $a2=="No" && $a3=="After taking oily food" && $a4=="Yes" && $a5=="Whitish closet"){
							$data= 6;
						}
						elseif ($a1== "Uper  side of the abdomen" && $a2=="No" && $a3=="After taking oily food" && $a4=="No" && $a5=="loose bowels"){
							$data= 13;
						}
						elseif ($a1== "Uper  side of the abdomen" && $a2=="Yes" && $a3=="After taking oily food" && $a4=="No" && $a5=="No change"){
							$data= 14;
						}
						elseif ($a1== "Uper  side of the abdomen" && $a2=="No" && $a3=="After taking oily food" && $a4=="No" && $a5=="Whitish closet"){
							$data= 15;
						}
						if ($a1== "Uper  side of the abdomen" && $a2=="No" && $a3=="It is not related to food" && $a4=="Yes" && $a5=="loose bowels"){
							$data= 10;
						}
						elseif ($a1== "Uper  side of the abdomen" && $a2=="No" && $a3=="It is not related to food" && $a4=="Yes" && $a5=="No change"){
							$data= 11;
						}
						elseif ($a1== "Uper  side of the abdomen" && $a2=="No" && $a3=="It is not related to food" && $a4=="Yes" && $a5=="Whitish closet"){
							$data= 12;
						}
						elseif ($a1== "Uper  side of the abdomen" && $a2=="No" && $a3=="It is not related to food" && $a4=="No" && $a5=="loose bowels"){
							$data= 16;
						}
						elseif ($a1== "Uper  side of the abdomen" && $a2=="No" && $a3=="It is not related to food" && $a4=="No" && $a5=="No change"){
							$data= 17;
						}
						elseif ($a1== "Uper  side of the abdomen" && $a2=="No" && $a3=="It is not related to food" && $a4=="No" && $a5=="Whitish closet"){
							$data= 18;
						}
						elseif ($a1== "lower  side of the abdomen" && $a2=="Yes" && $a3=="After taking oily food" && $a4=="Yes" && $a5=="loose bowels"){
							$data= 19;
						}
						elseif ($a1== "lower  side of the abdomen" && $a2=="Yes" && $a3=="After taking oily food" && $a4=="Yes" && $a5=="No change"){
							$data= 20;
						}
						elseif ($a1== "lower  side of the abdomen" && $a2=="Yes" && $a3=="After taking oily food" && $a4=="Yes" && $a5=="Whitish closet"){
							$data= 21;
						}
						elseif ($a1== "lower  side of the abdomen" && $a2=="Yes" && $a3=="After taking oily food" && $a4=="No" && $a5=="loose bowels"){
							$data= 7;
						}
						elseif ($a1== "lower  side of the abdomen" && $a2=="Yes" && $a3=="After taking oily food" && $a4=="No" && $a5=="No change"){
							$data= 8;
						}
						elseif ($a1== "lower  side of the abdomen" && $a2=="Yes" && $a3=="After taking oily food" && $a4=="No" && $a5=="Whitish closet"){
							$data= 9;
						}
						if ($a1== "lower  side of the abdomen" && $a2=="Yes" && $a3=="It is not related to food" && $a4=="Yes" && $a5=="loose bowels"){
							$data= 22;
						}
						elseif ($a1== "lower  side of the abdomen" && $a2=="Yes" && $a3=="It is not related to food" && $a4=="Yes" && $a5=="No change"){
							$data= 23;
						}
						elseif ($a1== "lower  side of the abdomen" && $a2=="Yes" && $a3=="It is not related to food" && $a4=="Yes" && $a5=="Whitish closet"){
							$data= 24;
						}
						elseif ($a1== "lower  side of the abdomen" && $a2=="Yes" && $a3=="It is not related to food" && $a4=="No" && $a5=="loose bowels"){
							$data= 25;
						}
						elseif ($a1== "lower  side of the abdomen" && $a2=="Yes" && $a3=="It is not related to food" && $a4=="No" && $a5=="No change"){
							$data= 26;
						}
						elseif ($a1== "lower  side of the abdomen" && $a2=="Yes" && $a3=="It is not related to food" && $a4=="No" && $a5=="Whitish closet"){
							$data= 27;
						}
						elseif ($a1== "lower  side of the abdomen" && $a2=="No" && $a3=="After taking oily food" && $a4=="Yes" && $a5=="loose bowels"){
							$data= 7;
						}
						elseif ($a1== "lower  side of the abdomen" && $a2=="No" && $a3=="After taking oily food" && $a4=="Yes" && $a5=="No change"){
							$data= 8;
						}
						elseif ($a1== "lower  side of the abdomen" && $a2=="No" && $a3=="After taking oily food" && $a4=="Yes" && $a5=="Whitish closet"){
							$data= 9;
						}
						elseif ($a1== "lower  side of the abdomen" && $a2=="No" && $a3=="After taking oily food" && $a4=="No" && $a5=="loose bowels"){
							$data= 10;
						}
						elseif ($a1== "lower  side of the abdomen" && $a2=="Yes" && $a3=="After taking oily food" && $a4=="No" && $a5=="No change"){
							$data= 11;
						}
						elseif ($a1== "lower  side of the abdomen" && $a2=="No" && $a3=="After taking oily food" && $a4=="No" && $a5=="Whitish closet"){
							$data= 12;
						}
						if ($a1== "lower  side of the abdomen" && $a2=="No" && $a3=="It is not related to food" && $a4=="Yes" && $a5=="loose bowels"){
							$data= 25;
						}
						elseif ($a1== "lower  side of the abdomen" && $a2=="No" && $a3=="It is not related to food" && $a4=="Yes" && $a5=="No change"){
							$data= 26;
						}
						elseif ($a1== "lower  side of the abdomen" && $a2=="No" && $a3=="It is not related to food" && $a4=="Yes" && $a5=="Whitish closet"){
							$data= 27;
						}
						elseif ($a1== "lower  side of the abdomen" && $a2=="No" && $a3=="It is not related to food" && $a4=="No" && $a5=="loose bowels"){
							$data= 28;
						}
						elseif ($a1== "lower  side of the abdomen" && $a2=="No" && $a3=="It is not related to food" && $a4=="No" && $a5=="No change"){
							$data= 29;
						}
						elseif ($a1== "lower  side of the abdomen" && $a2=="No" && $a3=="It is not related to food" && $a4=="No" && $a5=="Whitish closet"){
							$data= 30;
						}
						
						
						
			 
			 
				
						if($data==1){
							echo" You possibale have Gastric problem=60% <br>Appendix problem  Fever = 40% <br> Pitholith stones = 40%. ";
						}elseif($data==2){
							echo" You possibale have Gastric problem=40% <br> Appendix problem= 40% <br> Pitholith stones = 40% .";
						}elseif($data==3){
							echo" You possibale have Gastric problem=40% <br> Appendix problem= 40% <br> Pitholith stones = 60% .";
						}elseif($data==4){
							echo" You possibale have Gastric problem=60% <br> Appendix problem= 20% <br> Pitholith stones = 40% .";
						}elseif($data==5){
							echo" You possibale have Gastric problem=40% <br> Appendix problem= 20% <br> Pitholith stones = 40% .";
						}elseif($data==6){
							echo" You possibale have Gastric problem=40% <br> Appendix problem= 20% <br> Pitholith stones = 60% .";
						}elseif($data==7){
							echo" You possibale have Gastric problem=40% <br> Appendix problem= 40% <br> Pitholith stones = 20%. ";
						}elseif($data==8){
							echo" You possibale have Gastric problem=20% <br> Appendix problem= 40% <br> Pitholith stones = 20% .";
						}elseif($data==9){
							echo" You possibale have Gastric problem=20% <br> Appendix problem= 40% <br> Pitholith stones = 40% .";
						}elseif($data==10){
							echo" You possibale have Gastric problem=40% <br> Appendix problem= 20% <br> Pitholith stones = 20% .";
						}elseif($data==11){
							echo" You possibale have Gastric problem=20% <br> Appendix problem= 20% <br> Pitholith stones = 20% .";
						}elseif($data==12){
							echo" You possibale have Gastric problem=20% <br> Appendix problem= 20% <br> Pitholith stones = 40% .";
						}elseif($data==13){
							echo" You possibale have Gastric problem=60% <br> Appendix problem= 0% <br> Pitholith stones = 40% .";
						}elseif($data==14){
							echo" You possibale have Gastric problem=40% <br> Appendix problem= 0% <br> Pitholith stones = 40% .";
						}elseif($data==15){
							echo" You possibale have Gastric problem=40% <br> Appendix problem= 0% <br> Pitholith stones = 60% .";
						}elseif($data==16){
							echo" You possibale have Gastric problem=40% <br> Appendix problem= 0% <br> Pitholith stones = 20% .";
						}elseif($data==17){
							echo" You possibale have Gastric problem=20% <br> Appendix problem= 0% <br> Pitholith stones = 20% .";
						}elseif($data==18){
							echo" You possibale have Gastric problem=20% <br> Appendix problem= 0% <br> Pitholith stones = 40% .";
						}elseif($data==19){
							echo" You possibale have Gastric problem=40% <br> Appendix problem= 60% <br> Pitholith stones = 20% .";
						}elseif($data==20){
							echo" You possibale have Gastric problem=20% <br> Appendix problem= 60% <br> Pitholith stones = 20% .";
						}elseif($data==21){
							echo" You possibale have Gastric problem=20% <br> Appendix problem= 50% <br> Pitholith stones = 40% .";
						}elseif($data==22){
							echo" You possibale have Gastric problem=20% <br> Appendix problem= 60% <br> Pitholith stones = 0% .";
						}elseif($data==23){
							echo" You possibale have Gastric problem=0% <br> Appendix problem= 60% <br> Pitholith stones = 0% .";
						}elseif($data==24){
							echo" You possibale have Gastric problem=0% <br> Appendix problem= 60% <br> Pitholith stones = 20% .";
						}elseif($data==25){
							echo" You possibale have Gastric problem=20% <br> Appendix problem= 40% <br> Pitholith stones = 0% .";
						}elseif($data==26){
							echo" You possibale have Gastric problem=0% <br> Appendix problem= 40% <br> Pitholith stones = 0% .";
						}elseif($data==27){
							echo" You possibale have Gastric problem=0% <br> Appendix problem= 40% <br> Pitholith stones = 20% .";
						}elseif($data==28){
							echo" You possibale have Gastric problem=20% <br> Appendix problem= 20% <br> Pitholith stones = 0% .";
						}elseif($data==29){
							echo" You possibale have Gastric problem=0% <br> Appendix problem= 20% <br> Pitholith stones = 0% .";
						}elseif($data==30){
							echo" You possibale have Gastric problem=0% <br> Appendix problem= 20% <br> Pitholith stones = 20% .";
						}
						echo"</div>";
				}
		}
	}	
	
	    $newSearch = new answer();
		$newSearch->find();
?>
<html> 
<head> <title>Question Base On Abdominal pain</title>
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
<form  action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="PoST">

	<p> <b>Q:</b>Where is the pain in the stomach?</p>                   
<select name="q1" required>   
<option value="0">--Select Option--</option>
<option value="Uper  side of the abdomen">Uper  side of the abdomen</option>
<option value="lower  side of the abdomen">lower  side of the abdomen</option>
</select>

<p> <b>Q:</b>Have a fever?</p>                   
<select name="q2" required>   
<option value="0">--Select Option--</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>

<p> <b>Q:</b>Is the pain occur after taking the food?</p>                   
<select name="q3" required>   
<option value="0">--Select Option--</option>
<option value="After taking oily food">After taking oily food</option>
<option value="It is not related to food">It is not related to food</option>
</select>

<p> <b>Q:</b>Is vomiting?</p>                   
<select name="q4" required>   
<option value="0">--Select Option--</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>

<p> <b>Q:</b>What kind of closet is?</p>                   
<select name="q5" required>   
<option value="0">--Select Option--</option>
<option value="loose bowels">loose bowels</option>
<option value="No change">No change</option>
<option value="Whitish closet">Whitish closet</option>
</select>


<br/>
<input type="submit" name="search" value="All Done">
<br/>
<br/>
<br/>

</form>
</body>
</html>