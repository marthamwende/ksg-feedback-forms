<?php
// Reads the variables sent via POST
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$text = $_POST["text"];
// THIS IS THE MAIN MENU
if ($text == "" ) {
    $response .= "CON Hi, Welcome to The Kenya School of Government. \n";
    $response .= "Please select the area you'd like to give feedback on \n";
    $response .= "1. Training \n";
    $response .= "2. Dining \n";
    $response .= "3. Accomodation \n";
    $response .= "4. Conferencing \n";
    $response .= "5. Library services \n";
    $response .= "6. Security \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
else if ($text == "0") {
    $response .= "CON Hi, Welcome to The Kenya School of Government. \n";
    $response .= "Please select the area you'd like to give feedback on \n";
    $response .= "1. Training \n";
    $response .= "2. Dining \n";
    $response .= "3. Accomodation \n";
    $response .= "4. Conferencing \n";
    $response .= "5. Library services \n";
    $response .= "6. Security \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
else if ($text == "00") {
    $response .= "CON Hi, Welcome to The Kenya School of Government. \n";
    $response .= "Please select the area you'd like to give feedback on \n";
    $response .= "1. Training \n";
    $response .= "2. Dining \n";
    $response .= "3. Accomodation \n";
    $response .= "4. Conferencing \n";
    $response .= "5. Library services \n";
    $response .= "6. Security \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
else if ($text == "000") {
    $response .= "END Thank you for visiting The Kenya School of Government. \n";
    $response .= "You have successfully logged out. \n";
}
//IN THE CASE WHERE USER TEXT IS '1' Training, OUTPUT should be as follows
if ($text == "1"){
    $response .= "CON You are about to give feedback on Training \n";
    $response .= "Please select the course you are currently undertaking / have undertaken \n";
    $response .= "1. Senior Management Course \n";
    $response .= "2. Supervisory Skills Dev. Course \n";
    $response .= "3. Protocol, Etiquette and Event Management \n";
    $response .= "4. Public Procurement & Contract Management Course \n";
    $response .= "5. Job Evaluation Training \n";
    $response .= "6. Executive Board Paper Writing \n";
    $response .= "7. Financial Management for Senior Managers \n";
    $response .= "8. Executive Certificate Course in Preventing and Countering Violent Extremism \n";
    $response .= "9. IFMIS Training for Accountants \n";
    $response .= "10. Electronic Records Management Course \n";
    $response .= "11. Strategic Leadership Dev. Program \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}

/// END OF TRAINING FEEDBACK SECTION

/////////MENU FOR COURSE '2' SLDP 
//////LOOP FOR ALL COURSES 1*2, 1*3.....1*40
// echo response
header('Content-type: text/plain');
echo $response
?>
