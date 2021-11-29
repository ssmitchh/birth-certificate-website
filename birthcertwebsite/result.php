<!DOCTYPE html>
<html>

<head>
	<title>Barry's Boutique Birth Certificates</title>
	<meta charset="utf-8">

	<link href="style.css" rel="stylesheet" type="text/css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

	<?php
	include 'function.php';
	include 'form.php';




	?>


</head>

<body>


<div class="final-cert" id = "final-cert"> 
    <img class="final" id="final" src= "<?php echo $_SESSION['imgSrc']; ?>" height="877px" width="620px">
   
    <div class ="final-text">
    <p class = "firstName"> <?php echo $_SESSION['firstName']; ?> </p>
    <!-- <br> -->
    <p class = "surname"> <?php echo $_SESSION['surname']; ?> </p>
    <p class = "firstNameAtBirth"><?php echo $_SESSION['firstNameAtBirth']; ?>
    <p class = "surnameAtBirth"><?php echo $_SESSION['surnameAtBirth']; ?>
    <p class = "sex"><?php echo $_SESSION['sex']; ?>
  
    <p class = "stillBirth"><?php echo $_SESSION['stillBirth']; ?>
 
    <p class = "dob"><?php echo $_SESSION['dob']; ?>
   
    <p class = "pob"><?php echo $_SESSION['pob']; ?>
    
    <p class = "nzcitizen"><?php echo $_SESSION['nzcitizen']; ?>
    
    <p class = "namechange"><?php echo $_SESSION['namechange']; ?>
    
   
    <p class = "mfirstName"> <?php echo $_SESSION['mfirstName']; ?> </p>
    <p class = "msurname"> <?php echo $_SESSION['msurname']; ?> </p>
    <p class = "mfirstNameAtBirth"><?php echo $_SESSION['mfirstNameAtBirth']; ?>
    <p class = "msurnameAtBirth"><?php echo $_SESSION['msurnameAtBirth']; ?>
    <p class = "mdob"><?php echo $_SESSION['mdob']; ?>
    <p class = "mpob"><?php echo $_SESSION['mpob']; ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <p class = "dfirstName"> <?php echo $_SESSION['dfirstName']; ?> </p>
    <p class = "dsurname"> <?php echo $_SESSION['dsurname']; ?> </p>
    <p class = "dfirstNameAtBirth"><?php echo $_SESSION['dfirstNameAtBirth']; ?>
    <p class = "dsurnameAtBirth"><?php echo $_SESSION['dsurnameAtBirth']; ?>
    <p class = "ddob"><?php echo $_SESSION['ddob']; ?>
    <p class = "dpob"><?php echo $_SESSION['dpob']; ?>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    

    
    
    </div>
<div>
<p class = "regNum"><?php echo $_SESSION['regNum']; ?>
</div>
    
    <!-- height="3508px" width="2480 px" -->
</div>

<!-- <button onclick="javascript:savePDF();">PDF</button> -->

<!-- <img id = "save" src="https://img.icons8.com/ios/100/000000/save--v1.png"/> -->

<img class ="final-cert2" src ="certbase.png" height="877px" width="620px">



<?= footer() ?>

</body>

<script>
 
// // document.getElementById("save").addEventListener("click", savePDF())

//     function savePDF() {
//         var pdf = new jsPDF('p', 'pt', 'letter');
//         // source can be HTML-formatted string, or a reference
//         // to an actual DOM element from which the text will be scraped.
//         source = $('#final-cert')[0];

//         // we support special element handlers. Register them with jQuery-style 
//         // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
//         // There is no support for any other type of selectors 
//         // (class, of compound) at this time.
//         specialElementHandlers = {
//             // element with id of "bypass" - jQuery style selector
//             '#bypassme': function (element, renderer) {
//                 // true = "handled elsewhere, bypass text extraction"
//                 return true
//             }
//         };
//         margins = {
//             top: 80,
//             bottom: 60,
//             left: 40,
//             width: 522
//         };
//         // all coords and widths are in jsPDF instance's declared units
//         // 'inches' in this case
//         pdf.fromHTML(
//             source, // HTML string or DOM elem ref.
//             margins.left, // x coord
//             margins.top, { // y coord
//                 'width': margins.width, // max width of content on PDF
//                 'elementHandlers': specialElementHandlers
//             },

//             function (dispose) {
//                 // dispose: object with X, Y of the last line add to the PDF 
//                 //          this allow the insertion of new lines after html
//                 pdf.save('Test.pdf');
//             }, margins
//         );
//     }
// </script>






<!-- 
// <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

 <!-- <script src="function.js"></script> -->