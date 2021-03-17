<?php
// Reads the variables sent via POST
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$text = $_POST["text"];
// This is the first menu screen
if ($text == "" ) {
    $response = "CON Hi, Welcome to The Kenya School of Government \n";
    $response .= "Please select the area you'd like to give feedback on \n";
    $response .= "1. Training \n";
    $response .= "2. Dining \n";
    $response .= "3. Accomodation \n";
    $response .= "4. Conferencing \n";
    $response .= "5. Library services \n";
    $response .= "6. Security \n";
    $response .= "0. Back \n";

    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
// Menu for a user who selects '000' from the first menu, gets the below response
else if ($text == "000") {
$response .= "END Thank you for visiting The Kenya School of Government. ";
$response .= "You have successfully logged out. \n";
}

// Menu for a user who selects '1' from the second menu above
// Will be brought to this third menu screen
else if ($text == "1*1") {
    $response = "CON You are about to give feedback on Training \n";
    $response .= "Please Enter 1 to confirm \n";
    $response .= "0. Enter 0 to exit \n";
}
//Menu for user who selects 1 to confirm training
else if ($text == "1*1*1") {
    $response = " CON Please select the course you are currently undertaking / have undertaken \n";
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
    $response .= "00. Other \n";
    $response .= "Enter 000 to EXIT \n";
}
// Menu for a user who selects '0' from the second menu, gets the below response
else if ($text == "0") {
    $response .= "END Thank you for visiting KSG \n";
}
//Menu for user who selects senior management course /////LOOP HERE LOOP HERE LOOP HERE
else if ($text == "1*1*1*1") {
        $response .= "CON On a scale of 1-5, how would you rate the facilitators? \n";
        $response .= "1. Very poor \n";
        $response .= "2. Poor \n";
        $response .= "3. Good \n";
        $response .= "4. Very good \n";
        $response .= "5. Excellent \n";
        $response .= "Enter 000 to EXIT \n";
}
else if ($text == "000 \n") {
    $response .= "END Thank you for visiting KSG \n";
}
// Menu for a user who selects very poor on facilitators
else if ($text == "1*1*1*1*1") {
       $response .= "CON On a scale of 1-5, how would you rate us meeting your expectations on course content delivery? \n";
        $response .= "1. Very poor \n";
        $response .= "2. Poor \n";
        $response .= "3. Good \n";
        $response .= "4. Very good \n";
        $response .= "5. Excellent \n";
        $response .= "Enter 000 to EXIT \n";
}
else if ($text == "000 \n") {
        $response .= "END Thank you for visiting KSG \n";
}
// Menu for user who selects 1 'very poor' on expectation
else if ($text == "1*1*1*1*1*1") {
        $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
        $response .= "1. Very poor \n";
        $response .= "2. Poor \n";
        $response .= "3. Good \n";
        $response .= "4. Very good \n";
        $response .= "5. Excellent \n";
        $response .= "Enter 000 to EXIT \n";   
}
else if ($text == "000 \n") {
    $response .= "END Thank you for visiting KSG \n";
}
//Menu for user who selects 1 'very poor' on Facilities
else if ($text == "1*1*1*1*1*1*1") {
    $response .= "END Thank you for your feedback \n";
}
//Menu for user who selects 2 'poor' on Facilities
else if ($text == "1*1*1*1*1*1*2") {
    $response .= "END Thank you for your feedback \n";
}
//Menu for user who selects 3 'good' on Facilities
else if ($text == "1*1*1*1*1*1*3") {
    $response .= "END Thank you for your feedback \n";
}
//Menu for user who selects 4 'very good' on Facilities
else if ($text == "1*1*1*1*1*1*4") {
    $response .= "END Thank you for your feedback \n";
}
//Menu for user who selects 5 'excellent' on Facilities
else if ($text == "1*1*1*1*1*1*5") {
    $response .= "END Thank you for your feedback \n";
}
else if ($text == "000 \n") {
    $response .= "END Thank you for visiting KSG \n";
}
// Menu for user who selects 2 'poor' on expectation
else if ($text == "1*1*1*1*1*2") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Good \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "Enter 000 to EXIT \n";   
}
else if ($text == "000 \n") {
$response .= "END Thank you for visiting KSG \n";
}
//Menu for user who selects 1 'very poor' on Facilities
else if ($text == "1*1*1*1*1*2*1") {
    $response .= "END Thank you for your feedback \n";
}
//Menu for user who selects 2 'poor' on Facilities
else if ($text == "1*1*1*1*1*2*2") {
    $response .= "END Thank you for your feedback \n";
}
//Menu for user who selects 3 'good' on Facilities
else if ($text == "1*1*1*1*1*2*3") {
    $response .= "END Thank you for your feedback \n";
}
//Menu for user who selects 4 'very good' on Facilities
else if ($text == "1*1*1*1*1*2*4") {
    $response .= "END Thank you for your feedback \n";
}
//Menu for user who selects 5 'excellent' on Facilities
else if ($text == "1*1*1*1*1*2*5") {
    $response .= "END Thank you for your feedback \n";
}
else if ($text == "000 \n") {
    $response .= "END Thank you for visiting KSG \n";
}
// Menu for user who selects 3 'good' on expectation
else if ($text == "1*1*1*1*1*3") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Good \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "Enter 000 to EXIT \n";   
}
else if ($text == "000 \n") {
$response .= "END Thank you for visiting KSG \n";
}
//Menu for user who selects 1 'very poor' on Facilities
else if ($text == "1*1*1*1*1*3*1") {
    $response .= "END Thank you for your feedback \n";
}
//Menu for user who selects 2 'poor' on Facilities
else if ($text == "1*1*1*1*1*3*2") {
    $response .= "END Thank you for your feedback \n";
}
//Menu for user who selects 3 'good' on Facilities
else if ($text == "1*1*1*1*1*3*3") {
    $response .= "END Thank you for your feedback \n";
}
//Menu for user who selects 4 'very good' on Facilities
else if ($text == "1*1*1*1*1*3*4") {
    $response .= "END Thank you for your feedback \n";
}
//Menu for user who selects 5 'excellent' on Facilities
else if ($text == "1*1*1*1*1*3*5") {
    $response .= "END Thank you for your feedback \n";
}
else if ($text == "000 \n") {
    $response .= "END Thank you for visiting KSG \n";
}
// Menu for user who selects 4 'very good' on expectation
else if ($text == "1*1*1*1*1*4") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Good \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "Enter 000 to EXIT \n";   
}
else if ($text == "000 \n") {
$response .= "END Thank you for visiting KSG \n";
}
//Menu for user who selects 1 'very poor' on Facilities
else if ($text == "1*1*1*1*1*4*1") {
    $response .= "END Thank you for your feedback \n";
}
//Menu for user who selects 2 'poor' on Facilities
else if ($text == "1*1*1*1*1*4*2") {
    $response .= "END Thank you for your feedback \n";
}
//Menu for user who selects 3 'good' on Facilities
else if ($text == "1*1*1*1*1*4*3") {
    $response .= "END Thank you for your feedback \n";
}
//Menu for user who selects 4 'very good' on Facilities
else if ($text == "1*1*1*1*1*4*4") {
    $response .= "END Thank you for your feedback \n";
}
//Menu for user who selects 5 'excellent' on Facilities
else if ($text == "1*1*1*1*1*4*5") {
    $response .= "END Thank you for your feedback \n";
}
else if ($text == "000 \n") {
    $response .= "END Thank you for visiting KSG \n";
}
// Menu for user who selects 5 'excellent' on expectation
else if ($text == "1*1*1*1*1*5") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Good \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "Enter 000 to EXIT \n";   
}
else if ($text == "000 \n") {
$response .= "END Thank you for visiting KSG \n";
}
//Menu for user who selects 1 'very poor' on Facilities
else if ($text == "1*1*1*1*1*5*1") {
    $response .= "END Thank you for your feedback \n";
}
//Menu for user who selects 2 'poor' on Facilities
else if ($text == "1*1*1*1*1*5*2") {
    $response .= "END Thank you for your feedback \n";
}
//Menu for user who selects 3 'good' on Facilities
else if ($text == "1*1*1*1*1*5*3") {
    $response .= "END Thank you for your feedback \n";
}
//Menu for user who selects 4 'very good' on Facilities
else if ($text == "1*1*1*1*1*5*4") {
    $response .= "END Thank you for your feedback \n";
}
//Menu for user who selects 5 'excellent' on Facilities
else if ($text == "1*1*1*1*1*5*5") {
    $response .= "END Thank you for your feedback \n";
}
else if ($text == "000 \n") {
    $response .= "END Thank you for visiting KSG \n";
}
/////////LOOP HERE 

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
