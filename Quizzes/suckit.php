<?php
  error_reporting(0);
$acpoints = $_SESSION['acpoints'];
$quizid=$_SESSION['quizid'];
$scene11="<tr><td id='ar'><input type='radio' name='q";$scene12="t' value='wrong' checked><strong>";$scene13="</strong><br><br></td></tr>";$scene14="t' value='wrong'><strong>";$scene15="t' value='right' checked><strong>";$scene16="t' value='right'><strong>";
$bps = "&nbsp;&nbsp;";
  $rand1= $scene11.$pagevar.$scene12.$bps.$wrong1.$scene13.
  $scene11.$pagevar.$scene14.$bps.$wrong4.$scene13.
  $scene11.$pagevar.$scene14.$bps.$wrong2.$scene13.
  $scene11.$pagevar.$scene14.$bps.$wrong3.$scene13.
  $scene11.$pagevar.$scene16.$bps.$righta.$scene13;
  $rand2= $scene11.$pagevar.$scene12.$bps.$wrong4.$scene13.
  $scene11.$pagevar.$scene14.$bps.$wrong3.$scene13.
  $scene11.$pagevar.$scene14.$bps.$wrong1.$scene13.
    $scene11.$pagevar.$scene16.$bps.$righta.$scene13.
  $scene11.$pagevar.$scene14.$bps.$wrong2.$scene13;;
  $rand3=$scene11.$pagevar.$scene12.$bps.$wrong3.$scene13.
  $scene11.$pagevar.$scene14.$bps.$wrong2.$scene13.
    $scene11.$pagevar.$scene16.$bps.$righta.$scene13.
  $scene11.$pagevar.$scene14.$bps.$wrong1.$scene13.
  $scene11.$pagevar.$scene14.$bps.$wrong4.$scene13;
  $rand4=$scene11.$pagevar.$scene12.$bps.$wrong2.$scene13.
    $scene11.$pagevar.$scene16.$bps.$righta.$scene13.
  $scene11.$pagevar.$scene14.$bps.$wrong4.$scene13.
  $scene11.$pagevar.$scene14.$bps.$wrong3.$scene13.
  $scene11.$pagevar.$scene14.$bps.$wrong1.$scene13;
  $rand5=$scene11.$pagevar.$scene15.$bps.$righta.$scene13.
  $scene11.$pagevar.$scene14.$bps.$wrong1.$scene13.
  $scene11.$pagevar.$scene14.$bps.$wrong3.$scene13.
  $scene11.$pagevar.$scene14.$bps.$wrong4.$scene13.
  $scene11.$pagevar.$scene14.$bps.$wrong2.$scene13;
$quizid2=$_SESSION['quizid2'];
if ($quizid2 == "tech"){
$cursename = "Sistemas de Informação";
}
elseif ($quizid2 == "jornalismo"){
$cursename = "Jornalismo";
}
elseif ($quizid2 == "design"){
$cursename = "Design";
}
elseif ($quizid2 == "pp"){
$cursename = "Publicidade e Propaganda";
}
elseif ($quizid2 == "ri"){
$cursename = "Relações Internacionais";
}
elseif ($quizid2 == "sociais"){
$cursename = "Ciências Sociais";
}
elseif ($quizid2 == "adm"){
$cursename = "Administração";
}

?>