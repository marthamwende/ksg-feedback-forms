<?php
// Reads the variables sent via POST
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$text = $_POST["text"];
// This is the first menu screen
if ($text == "" ) {
    $response = "CON Hi welcome, I can help you with training feedback at KSG \n";
 $response .= "1. Enter 1 to continue";
}
// Menu for a user who selects '1' from the first menu
// Will be brought to this second menu screen 
else if ($text == "1") {
    $response .= "CON Please select your area of interest in the below menu \n";
    $response .= "1. Training \n";
    $response .= "2. Dining \n";
    $response .= "3. Accomodation \n";
    $response .= "4. Library \n";
    $response .= "5. Facilities \n";
}
// Menu for a user who selects '1' from the second menu above
// Will be brought to this third menu screen
else if ($text == "1*1") {
    $response = "CON You are about to give feedback on Training \n";
    $response .= "Please Enter 1 to confirm \n";
}
else if ($text == "1*1*1") {
    $response = " CON Were you pleased with the Training activity of KSG? \n";
    $response .= "Enter 1 to mean YES \n";
    $response .= "Enter 0 to mean NO \n";
}
else if ($text == "1*1*1*1") {
    $response = "END Thank you, your response has been recorded";
}
else if ($text == "1*1*1*0") {
    $response = "END Thank you. Noted"; 
}
// Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen
else if ($text == "1*2") {
    $response = "CON You are about to give feedback on Dining \n";
    $response .= "Please Enter 1 to confirm \n";
}
// Menu for a user who selects "1" from the fourth menu screen
else if ($text == "1*2*1") {
    $response = " CON Were you pleased with the Dining activities of KSG? \n";
    $response .= "Enter 1 to mean YES \n";
    $response .= "Enter 0 to mean NO \n";
}
else if ($text == "1*2*1*1") {
    $response = "END Thank you, your response has been recorded";
}
else if ($text == "1*2*1*0") {
    $response = "END Thank you. Noted";
}
// Menu for a user who selects '3' from the second menu above
// Will be brought to this fifth menu screen
else if ($text == "1*3") {
    $response = "CON You are about to give feedback on Accomodation \n";
    $response .= "Please Enter 1 to confirm \n";
}
// Menu for a user who enters "1" from the fifth menu
else if ($text == "1*3*1") {
    $response = " CON Were you pleased with the Accomodation activities of KSG? \n";
    $response .= "Enter 1 to mean YES \n";
    $response .= "Enter 0 to mean NO \n";
}
else if ($text == "1*3*1*1") {
    $response = "END Thank you, your response has been recorded";
}
else if ($text == "1*3*1*0") {
    $response = "END Thank you. Noted";
}
// Menu for a user who selects '4' from the second menu above
// Will be brought to this sixth menu screen
else if ($text == "1*4") {
    $response = "CON You are about to give feedback on Library \n";
    $response .= "Please Enter 1 to confirm \n";
}
// Menu for a user who enters "1" from the sixth menu
else if ($text == "1*4*1") {
    $response = " CON Were you pleased with the Library activities of KSG? \n";
    $response .= "Enter 1 to mean YES \n";
    $response .= "Enter 0 to mean NO \n";
}
else if ($text == "1*4*1*1") {
    $response = "END Thank you, your response has been recorded";
}
else if ($text == "1*4*1*0") {
    $response = "END Thank you. Noted";
}
// Menu for a user who selects '5' from the second menu above
// Will be brought to this seventh menu screen
else if ($text == "1*5") {
    $response = "CON You are about to give feedback on Facilities \n";
    $response .= "Please Enter 1 to confirm \n";
}
// Menu for a user who enters "1" from the seventh menu
else if ($text == "1*5*1") {
    $response = " CON Were you pleased with the Facilities of KSG? \n";
    $response .= "Enter 1 to mean YES \n";
    $response .= "Enter 0 to mean NO \n";
}
else if ($text == "1*5*1*1") {
    $response = "END Thank you, your response has been recorded";
}
else if ($text == "1*5*1*0") {
    $response = "END Thank you. Noted";
}
// echo response
header('Content-type: text/plain');
echo $response
?>
