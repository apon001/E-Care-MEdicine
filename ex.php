
<?php
	class answer{
		public function find()
		{

			if(isset($_POST['search'])){
		 
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