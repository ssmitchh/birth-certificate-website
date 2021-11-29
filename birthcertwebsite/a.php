<!DOCTYPE html>
<html>

<head>
	<title>Barry's Boutique Birth Certificates</title>
	<meta charset="utf-8">

	<link href="style.css" rel="stylesheet" type="text/css" />



	<?php
    
    session_start();
	    echo "Ali, Sam, ";
        echo "<<<<" . $_REQUEST["name"]. ">>>";
        echo "<<<<" .$_REQUEST["surname"]. ">>>";

        $imageName = $_REQUEST["fName"];
        echo $imageName;

           //baby
    $firstName = $_POST['firstName'];
    $surname = $_POST['surname'];
    $firstNameAtBirth =$_POST['firstNameAtBirth'];
    if('firstNameAtBirth' == null){
        $firstNameAtBirth = "-";
    }
    $surnameAtBirth =$_POST['surnameAtBirth'];
    if('surnameAtBirth' == null){
        $surnameAtBirth = "-";
    }
    $sex =$_POST['sex'];
    $stillBirth =$_POST['stillBirth'];
    if('stillBirth' == null){
        $stillBirth = "-";
    }
    $dob =$_POST['dob'];
    $pob =$_POST['pob'];
    
    //mother
    $mfirstName = $_POST['mfirstName'];
    $msurname = $_POST['msurname'];
    $mfirstNameAtBirth =$_POST['mfirstNameAtBirth'];
    if('mfirstNameAtBirth' == null){
        $mfirstNameAtBirth = "-";
    }
    $msurnameAtBirth =$_POST['msurnameAtBirth'];
    if('msurnameAtBirth' == null){
        $msurnameAtBirth = "-";
    }
    $mdob =$_POST['mdob'];
    $mpob =$_POST['mpob'];

    //father
    $dfirstName = $_POST['dfirstName'];
    $dsurname = $_POST['dsurname'];
    $dfirstNameAtBirth =$_POST['dfirstNameAtBirth'];
    if('dfirstNameAtBirth' == null){
        $dfirstNameAtBirth = "-";
    }
    $dsurnameAtBirth =$_POST['dsurnameAtBirth'];
    if('dsurnameAtBirth' == null){
        $dsurnameAtBirth = "-";
    }
    $ddob =$_POST['ddob'];
    $dpob =$_POST['dpob'];

    //registration number
    $regNum =$_POST['regNum'];
    
	?>


</head>

</body>





</html>