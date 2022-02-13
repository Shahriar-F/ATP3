<?php 
 $id="";
 $err_id="";
 $name="";
 $err_name="";
 $subject="";
 $err_subject="";
 $gender="";
 $err_gender="";
 $email="";
 $err_email="";
 $fsgpa="";
 $err_fsgpa="";
 $fscredit="";
 $err_fscredit="";
 $totalcgpa="";
 $err_totalcgpa="";
 $creditscompleted="";
 $err_creditscompleted="";
 
 $has_error=false;
 
 if(isset($_POST["student"])){
	    if (empty($_POST["id"])){
			$hasError = true;
			$err_id="ID Required";
		}
		
		else{
			$id = $_POST["id"];
		}
	   if (empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		
		else{
			$name = $_POST["name"];
		}
		
		if (empty($_POST["subject"])){
			$hasError = true;
			$err_subject="Subject Required";
		}
		
		else{
			$subject = $_POST["subject"];
		}
		
		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender="Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
		 
        if(empty($_POST["email"]))
		{
			$hasError=true;
			$err_email="Email needed";			

		}
		else{
			$email = $_POST["email"];
			if(strpos($email,'@')&& strpos($email,'.'))
			{
				"invalid email";
			}
			else{
				$err_email="dot missing";
			}
		}	
		 
		 if(empty($_POST["fsgpa"])){
			 $hasError=true;
			 $err_fsgpa="";
		 }
		
		  else{
			  $fsgpa= $_POST["fsgpa"];
		  } 
		  
		
		
		if(empty($_POST["fscredit"])){
			$hasError = true;
			$err_fscredit = "";
		}
		else{
			$fscredit = $_POST["fscredit"];
		}
		
		if(empty($_POST["totalcgpa"])){
			$hasError = true;
			$err_totalcgpa = "";
		}
		else{
			$totalcgpa = $_POST["totalcgpa"];
		}
		
		if(empty($_POST["creditscompleted"])){
			$hasError = true;
			$err_creditscompleted = "";
		}
		else{
			$creditscompleted = $_POST["creditscompleted"];
		}
	}
 

?>

<html>
<head></head>
<body>
 <form method="POST">
	 <h3 align="middle">Student Info</h3>            
            <p align="middle">
			<table >
               <th>Id</th> echo ""; <br>
			   <th>Name</th> echo ""; <br>
			   <th>Subject</th> echo ""; <br>
			   <th>Email</th> echo ""; <br>
			   <th>Final Semester GPA</th> echo ""; <br>
			   <th>Final Semester Credit Taken</th> echo "<td>"fscredit"</td>"; <br>
			   <th>Total CGPA</th> echo ""; <br>
			   <th>Total Credit</th> echo ""; <br>
			   
				    
                        
            </table>
			</p>
	</form>	 


</body>
</html>