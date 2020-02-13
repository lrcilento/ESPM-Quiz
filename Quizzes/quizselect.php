  <?php
   session_start();
			$quizid = $_POST['Semestre'];
			$quizid2 = $_POST['Curso'];
			$lenght = $_POST['Lenght'];
			if ($lenght == "curto"){
				$deflenght = 10;}
				elseif ($lenght == "original"){
					$deflenght = 25;}
			$_SESSION['lenght']=$deflenght;
			$_SESSION['quizid']=$quizid;
			$_SESSION['quizid2']=$quizid2;
			$_SESSION['pagevar']=1;
header('Location:quiz.php');
			?>