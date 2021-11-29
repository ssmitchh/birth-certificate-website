
<?php

session_start();


if(isset($_POST['firstName'])){

    //baby
    $firstName = $_POST['firstName'];
    $_SESSION['firstName'] = $firstName;
    $surname = $_POST['surname'];
    $_SESSION['surname'] = $surname;
    
   
    if('firstNameAtBirth' == ""){
        $firstNameAtBirth = "-";
        $_SESSION['firstNameAtBirth'] = $firstNameAtBirth;
    }
    if('firstNameAtBirth' == !null){
        $firstNameAtBirth =$_POST['firstNameAtBirth'];
        $_SESSION['firstNameAtBirth'] = $firstNameAtBirth;
    }
    
   
    if('surnameAtBirth' == ""){
        $surnameAtBirth = "-";
        $_SESSION['surnameAtBirth'] = $surnameAtBirth;
    }
    if('surnameAtBirth' == !null){
        $surnameAtBirth =$_POST['surnameAtBirth'];
        $_SESSION['surnameAtBirth'] = $surnameAtBirth;
    }
   
    $sex =$_POST['sex'];
    $_SESSION['sex'] = $sex;

   
    if('stillBirth' == ""){
        $stillBirth = "-";
        $_SESSION['stillBirth'] = $stillBirth;
    }
    if('stillBirth' == !null){
        $stillBirth =$_POST['stillBirth'];
        $_SESSION['stillBirth'] = $stillBirth;
    }
    $dob =$_POST['dob'];
    $_SESSION['dob'] = $dob;
    $pob =$_POST['pob'];
    $_SESSION['pob'] = $pob;
    
   
    if('namechange' == ""){
        $namechange = "-";
        $_SESSION['namechange'] = $namechange;
    }
    if('namechange' == !null){
        $namechange =$_POST['namechange'];
        $_SESSION['namechange'] = $namechange;
    }
    $nzcitizen =$_POST['nzcitizen'];
    $_SESSION['nzcitizen'] = $nzcitizen;
    
    //mother
    $mfirstName = $_POST['mfirstName'];
    $_SESSION['mfirstName'] = $mfirstName;
    $msurname = $_POST['msurname'];
    $_SESSION['msurname'] = $msurname;
    if('mfirstNameAtBirth' == ""){
        $mfirstNameAtBirth = "-";
        $_SESSION['mfirstNameAtBirth'] = $mfirstNameAtBirth;
    }
    if('mfirstNameAtBirth' == !null){
        $mfirstNameAtBirth =$_POST['mfirstNameAtBirth'];
        $_SESSION['mfirstNameAtBirth'] = $mfirstNameAtBirth;
    }
    $msurnameAtBirth = "-";
    $_SESSION['msurnameAtBirth'] = $msurnameAtBirth;
    if('msurnameAtBirth' == ""){
        
    }
    if('msurnameAtBirth' == !null){
        $msurnameAtBirth =$_POST['msurnameAtBirth'];
        $_SESSION['msurnameAtBirth'] = $msurnameAtBirth;
    }
    $mdob =$_POST['mdob'];
    $_SESSION['mdob'] = $mdob;
    $mpob =$_POST['mpob'];
    $_SESSION['mpob'] = $mpob;
   

    //father
    $dfirstName = $_POST['dfirstName'];
    $_SESSION['dfirstName'] = $dfirstName;
    $dsurname = $_POST['dsurname'];
    $_SESSION['dsurname'] = $dsurname;
    
  
        $dfirstNameAtBirth =$_POST['dfirstNameAtBirth'];
        $_SESSION['dfirstNameAtBirth'] = $dfirstNameAtBirth;
    
    
    $dsurnameAtBirth =$_POST['dsurnameAtBirth'];
        $_SESSION['dsurnameAtBirth'] = $dsurnameAtBirth;
    
    $ddob =$_POST['ddob'];
    $_SESSION['ddob'] = $ddob;
    $dpob =$_POST['dpob'];
    $_SESSION['dpob'] = $dpob;

    //registration number
    $regNum =$_POST['regNum'];
    $_SESSION['regNum'] = $regNum;

    $imgSrc = $_POST['imgSrc'];
    $_SESSION['imgSrc'] = $imgSrc;
    echo $imgSrc;
    header("location:result.php");
    //echo "console.log(\"finished form\")";


}

// echo <<<EOT
// <script src="function.js"></script>
// EOT;
?>

</html>
