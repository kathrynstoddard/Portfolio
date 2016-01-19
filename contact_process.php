 <!DOCTYPE html>
<html>
<body>

<?php

// Gets posted data from the HTML form fields and creates local variables. The items with the ' marks around them are the name values from the fields in the HTML form example above. Note, the first three variables are required for all email messages (as described above).

$Name = trim(stripslashes($_POST['name']));
$EmailFrom = trim(stripslashes($_POST['email']));
$EmailTo = "kathryn.stoddard@gmail.com";
$Subject = "Portfolio Contact Message - Kathryn Stoddard";
$Message = trim(stripslashes($_POST['message']));
$current_date = date("Y-m-d"); // This date is created when the form is submitted.


$validationOK=true;
if ($EmailFrom=="") $validationOK=false;
if ($Name=="") $validationOK=false;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
  exit;
}

$myFilePath = "contacts/";
$myFileName = "form-data.csv";
$myPointer = fopen ($myFilePath.$myFileName, "a+");
$form_data = $current_date . "," . $EmailFrom . "," . $Name . "," . $Message . "\n";
fputs ($myPointer, $form_data);
fclose ($myPointer);

$Body = "";
$Body .= "First Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $EmailFrom;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";


$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");


if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=ok.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.php\">";
}

?>

</body>
</html>
