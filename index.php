<?php
// Reads the variables sent via POST
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$text = $_POST["text"];
// THIS IS THE MAIN MENU
///TRAINING FEEDBBACK SECTION

// This is the first menu screen
if ($text == "" ) {
    $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
else if ($text == "0,00" ) {
    $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the MAIN MENU, gets the below response
else if ($text == "000") {
$response .= "END Thank you for visiting The Kenya School of Government. \n";
$response .= "You have successfully logged out. \n";
}
// Menu for a user who selects '1' TRAINING from the MAIN MENU
else if ($text == "1") {
    $response = "CON You are about to give feedback on Training \n";
    $response = "Please select the course you are currently undertaking / have undertaken \n";
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
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
    $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the COURSES MENU, gets the below response
else if ($text == "000") {
$response .= "END Thank you for visiting The Kenya School of Government. \n";
$response .= "You have successfully logged out. \n";
}
//Menu for user who selects senior management course /////LOOP HERE LOOP HERE LOOP HERE
else if ($text == "1*1") {
        $response .= "CON On a scale of 1-5, how would you rate the facilitators? \n";
        $response .= "1. Very poor \n";
        $response .= "2. Poor \n";
        $response .= "3. Satisfactory \n";
        $response .= "4. Very good \n";
        $response .= "5. Excellent \n";
        $response .= "0. Back \n";
        $response .= "00. Main Menu \n";
        $response .= "000. End Session \n";
    }
else if ($text == "0,00" ) {
        $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the SECOND MENU, gets the below respons
else if ($text == "000") {
        $response .= "END Thank you for visiting The Kenya School of Government. \n";
        $response .= "You have successfully logged out. \n";
        }
// Menu for a user who selects VERY POOR on facilitators /// LOOP HERE / LOOP HERE FOR FACILITATOR RATING!!
else if ($text == "1*1*1") {
       $response .= "CON On a scale of 1-5, to what extent were your personal expectations met? \n";
        $response .= "1. Not at all \n";
        $response .= "2. Not sure \n";
        $response .= "3. Satisfactory \n";
        $response .= "4. To some extent \n";
        $response .= "5. Great extent \n";
        $response .= "0. Back \n";
        $response .= "00. Main Menu \n";
        $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
    $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
    // Menu for a user who selects '000' from the FACILITATORS MENU, gets the below respons
else if ($text == "000") {
    $response .= "END Thank you for visiting The Kenya School of Government. \n";
    $response .= "You have successfully logged out. \n";
    }
// Menu for user who selects '1' NOT AT ALL on expectation
else if ($text == "1*1*1*1") {
        $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
        $response .= "1. Very poor \n";
        $response .= "2. Poor \n";
        $response .= "3. Satisfactory \n";
        $response .= "4. Very good \n";
        $response .= "5. Excellent \n";
        $response .= "0. Back \n";
        $response .= "00. Main Menu \n";
        $response .= "000. End Session \n"; 
}
else if ($text == "0,00" ) {
    $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the FACILITIES MENU, gets the below respons
else if ($text == "000") {
    $response .= "END Thank you for visiting The Kenya School of Government. \n";
    $response .= "You have successfully logged out. \n";
    }
//Menu for user who selects '1' VERY POOR on Facilities
else if ($text == "1*1*1*1*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
    $response .= "0. Back \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
    $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
    // Menu for a user who selects '000' from the above menu, gets the below respons
else if ($text == "000") {
        $response .= "END Thank you for visiting The Kenya School of Government. \n";
        $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '2' 'POOR' on Facilities
else if ($text == "1*1*1*1*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
    $response .= "0. Back \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
    $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
    // Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
        $response .= "END Thank you for visiting The Kenya School of Government. \n";
        $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '3' SATISFACTORY on Facilities
else if ($text == "1*1*1*1*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
    $response .= "0. Back \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
    $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
    // Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
        $response .= "END Thank you for visiting The Kenya School of Government. \n";
        $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '4' VERY GOOD on Facilities
else if ($text == "1*1*1*1*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
    $response .= "0. Back \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
    $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
    // Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
        $response .= "END Thank you for visiting The Kenya School of Government. \n";
        $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '5' 'EXCELLENT' on Facilities
else if ($text == "1*1*1*1*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
    $response .= "0. Back \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
    $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
    // Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
        $response .= "END Thank you for visiting The Kenya School of Government. \n";
        $response .= "You have successfully logged out. \n";
}
// Menu for user who selects '2' POOR on expectation
else if ($text == "1*1*1*2") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the FACILITIES MENU, gets the below respons
else if ($text == "000") {
$response .= "END Thank you for visiting The Kenya School of Government. \n";
$response .= "You have successfully logged out. \n";
}
//Menu for user who selects '1' VERY POOR on Facilities
else if ($text == "1*1*1*2*1") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below respons
else if ($text == "000") {
    $response .= "END Thank you for visiting The Kenya School of Government. \n";
    $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '2' POOR on Facilities
else if ($text == "1*1*1*2*2") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
    $response .= "END Thank you for visiting The Kenya School of Government. \n";
    $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '3' SATISFACTORY on Facilities
else if ($text == "1*1*1*2*3") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
    $response .= "END Thank you for visiting The Kenya School of Government. \n";
    $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '4' VERY GOOD on Facilities
else if ($text == "1*1*1*2*4") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
    $response .= "END Thank you for visiting The Kenya School of Government. \n";
    $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '5' 'EXCELLENT' on Facilities
else if ($text == "1*1*1*2*5") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
    $response .= "END Thank you for visiting The Kenya School of Government. \n";
    $response .= "You have successfully logged out. \n";
}
// Menu for user who selects '3' SATISFACTORY on expectation
else if ($text == "1*1*1*3") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the FACILITIES MENU, gets the below respons
else if ($text == "000") {
$response .= "END Thank you for visiting The Kenya School of Government. \n";
$response .= "You have successfully logged out. \n";
}
//Menu for user who selects '1' VERY POOR on Facilities
else if ($text == "1*1*1*3*1") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below respons
else if ($text == "000") {
    $response .= "END Thank you for visiting The Kenya School of Government. \n";
    $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '2' POOR on Facilities
else if ($text == "1*1*1*3*2") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
    $response .= "END Thank you for visiting The Kenya School of Government. \n";
    $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '3' SATISFACTORY on Facilities
else if ($text == "1*1*1*3*3") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
    $response .= "END Thank you for visiting The Kenya School of Government. \n";
    $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '4' VERY GOOD on Facilities
else if ($text == "1*1*1*3*4") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
    $response .= "END Thank you for visiting The Kenya School of Government. \n";
    $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '5' 'EXCELLENT' on Facilities
else if ($text == "1*1*1*3*5") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
    $response .= "END Thank you for visiting The Kenya School of Government. \n";
    $response .= "You have successfully logged out. \n";
}
// Menu for user who selects '4' TO SOME EXTENT on expectation
else if ($text == "1*1*1*4") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the FACILITIES MENU, gets the below respons
else if ($text == "000") {
$response .= "END Thank you for visiting The Kenya School of Government. \n";
$response .= "You have successfully logged out. \n";
}
//Menu for user who selects '1' VERY POOR on Facilities
else if ($text == "1*1*1*4*1") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below respons
else if ($text == "000") {
    $response .= "END Thank you for visiting The Kenya School of Government. \n";
    $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '2' POOR on Facilities
else if ($text == "1*1*1*4*2") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
    $response .= "END Thank you for visiting The Kenya School of Government. \n";
    $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '3' SATISFACTORY on Facilities
else if ($text == "1*1*1*4*3") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
    $response .= "END Thank you for visiting The Kenya School of Government. \n";
    $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '4' VERY GOOD on Facilities
else if ($text == "1*1*1*4*4") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
    $response .= "END Thank you for visiting The Kenya School of Government. \n";
    $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '5' 'EXCELLENT' on Facilities
else if ($text == "1*1*1*4*5") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
    $response .= "END Thank you for visiting The Kenya School of Government. \n";
    $response .= "You have successfully logged out. \n";
}
// Menu for user who selects '5' GREAT EXTENT on expectation
else if ($text == "1*1*1*5") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the FACILITIES MENU, gets the below respons
else if ($text == "000") {
$response .= "END Thank you for visiting The Kenya School of Government. \n";
$response .= "You have successfully logged out. \n";
}
//Menu for user who selects '1' VERY POOR on Facilities
else if ($text == "1*1*1*5*1") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below respons
else if ($text == "000") {
    $response .= "END Thank you for visiting The Kenya School of Government. \n";
    $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '2' POOR on Facilities
else if ($text == "1*1*1*5*2") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
    $response .= "END Thank you for visiting The Kenya School of Government. \n";
    $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '3' SATISFACTORY on Facilities
else if ($text == "1*1*1*5*3") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
    $response .= "END Thank you for visiting The Kenya School of Government. \n";
    $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '4' VERY GOOD on Facilities
else if ($text == "1*1*1*5*4") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
    $response .= "END Thank you for visiting The Kenya School of Government. \n";
    $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '5' 'EXCELLENT' on Facilities
else if ($text == "1*1*1*5*5") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
    $response .= "END Thank you for visiting The Kenya School of Government. \n";
    $response .= "You have successfully logged out. \n";
}
// Menu for user who selects '2' POOR on FACILITATORS
else if ($text == "1*1*2") {
    $response .= "CON On a scale of 1-5, to what extent were your personal expectations met? \n";
     $response .= "1. Not at all \n";
     $response .= "2. Not sure \n";
     $response .= "3. Satisfactory \n";
     $response .= "4. To some extent \n";
     $response .= "5. Great extent \n";
     $response .= "0. Back \n";
     $response .= "00. Main Menu \n";
     $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
 // Menu for a user who selects '000' from the FACILITATORS MENU, gets the below respons
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
 }
// Menu for user who selects '1' NOT AT ALL on expectation
else if ($text == "1*1*2*1") {
     $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
     $response .= "1. Very poor \n";
     $response .= "2. Poor \n";
     $response .= "3. Satisfactory \n";
     $response .= "4. Very good \n";
     $response .= "5. Excellent \n";
     $response .= "0. Back \n";
     $response .= "00. Main Menu \n";
     $response .= "000. End Session \n"; 
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the FACILITIES MENU, gets the below respons
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
 }
//Menu for user who selects '1' VERY POOR on Facilities
else if ($text == "1*1*2*1*1") {
 $response .= "END Thank you. Your feedback has been recorded. \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
 // Menu for a user who selects '000' from the above menu, gets the below respons
else if ($text == "000") {
     $response .= "END Thank you for visiting The Kenya School of Government. \n";
     $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '2' 'POOR' on Facilities
else if ($text == "1*1*2*1*2") {
 $response .= "END Thank you. Your feedback has been recorded. \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
 // Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
     $response .= "END Thank you for visiting The Kenya School of Government. \n";
     $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '3' SATISFACTORY on Facilities
else if ($text == "1*1*2*1*3") {
 $response .= "END Thank you. Your feedback has been recorded. \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
 // Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
     $response .= "END Thank you for visiting The Kenya School of Government. \n";
     $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '4' VERY GOOD on Facilities
else if ($text == "1*1*2*1*4") {
 $response .= "END Thank you. Your feedback has been recorded. \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
 // Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
     $response .= "END Thank you for visiting The Kenya School of Government. \n";
     $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '5' 'EXCELLENT' on Facilities
else if ($text == "1*1*2*1*5") {
 $response .= "END Thank you. Your feedback has been recorded. \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
 // Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
     $response .= "END Thank you for visiting The Kenya School of Government. \n";
     $response .= "You have successfully logged out. \n";
}
// Menu for user who selects '2' POOR on expectation
else if ($text == "1*1*2*2") {
 $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
 $response .= "1. Very poor \n";
 $response .= "2. Poor \n";
 $response .= "3. Satisfactory \n";
 $response .= "4. Very good \n";
 $response .= "5. Excellent \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n"; 
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the FACILITIES MENU, gets the below respons
else if ($text == "000") {
$response .= "END Thank you for visiting The Kenya School of Government. \n";
$response .= "You have successfully logged out. \n";
}
//Menu for user who selects '1' VERY POOR on Facilities
else if ($text == "1*1*2*2*1") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below respons
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '2' POOR on Facilities
else if ($text == "1*1*2*2*2") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '3' SATISFACTORY on Facilities
else if ($text == "1*1*2*2*3") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '4' VERY GOOD on Facilities
else if ($text == "1*1*2*2*4") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '5' 'EXCELLENT' on Facilities
else if ($text == "1*1*2*2*5") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
// Menu for user who selects '3' SATISFACTORY on expectation
else if ($text == "1*1*2*3") {
 $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
 $response .= "1. Very poor \n";
 $response .= "2. Poor \n";
 $response .= "3. Satisfactory \n";
 $response .= "4. Very good \n";
 $response .= "5. Excellent \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n"; 
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the FACILITIES MENU, gets the below respons
else if ($text == "000") {
$response .= "END Thank you for visiting The Kenya School of Government. \n";
$response .= "You have successfully logged out. \n";
}
//Menu for user who selects '1' VERY POOR on Facilities
else if ($text == "1*1*2*3*1") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below respons
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '2' POOR on Facilities
else if ($text == "1*1*2*3*2") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '3' SATISFACTORY on Facilities
else if ($text == "1*1*2*3*3") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '4' VERY GOOD on Facilities
else if ($text == "1*1*2*3*4") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '5' 'EXCELLENT' on Facilities
else if ($text == "1*1*2*3*5") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
// Menu for user who selects '4' TO SOME EXTENT on expectation
else if ($text == "1*1*2*4") {
 $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
 $response .= "1. Very poor \n";
 $response .= "2. Poor \n";
 $response .= "3. Satisfactory \n";
 $response .= "4. Very good \n";
 $response .= "5. Excellent \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n"; 
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the FACILITIES MENU, gets the below respons
else if ($text == "000") {
$response .= "END Thank you for visiting The Kenya School of Government. \n";
$response .= "You have successfully logged out. \n";
}
//Menu for user who selects '1' VERY POOR on Facilities
else if ($text == "1*1*2*4*1") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below respons
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '2' POOR on Facilities
else if ($text == "1*1*2*4*2") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '3' SATISFACTORY on Facilities
else if ($text == "1*1*2*4*3") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '4' VERY GOOD on Facilities
else if ($text == "1*1*2*4*4") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '5' 'EXCELLENT' on Facilities
else if ($text == "1*1*2*4*5") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
// Menu for user who selects '5' GREAT EXTENT on expectation
else if ($text == "1*1*2*5") {
 $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
 $response .= "1. Very poor \n";
 $response .= "2. Poor \n";
 $response .= "3. Satisfactory \n";
 $response .= "4. Very good \n";
 $response .= "5. Excellent \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n"; 
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the FACILITIES MENU, gets the below respons
else if ($text == "000") {
$response .= "END Thank you for visiting The Kenya School of Government. \n";
$response .= "You have successfully logged out. \n";
}
//Menu for user who selects '1' VERY POOR on Facilities
else if ($text == "1*1*2*5*1") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below respons
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '2' POOR on Facilities
else if ($text == "1*1*2*5*2") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '3' SATISFACTORY on Facilities
else if ($text == "1*1*2*5*3") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '4' VERY GOOD on Facilities
else if ($text == "1*1*2*5*4") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '5' 'EXCELLENT' on Facilities
else if ($text == "1*1*2*5*5") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
// Menu for user who selects '3' SATISFACTORY on FACILITATORS
else if ($text == "1*1*3") {
    $response .= "CON On a scale of 1-5, to what extent were your personal expectations met? \n";
     $response .= "1. Not at all \n";
     $response .= "2. Not sure \n";
     $response .= "3. Satisfactory \n";
     $response .= "4. To some extent \n";
     $response .= "5. Great extent \n";
     $response .= "0. Back \n";
     $response .= "00. Main Menu \n";
     $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
 // Menu for a user who selects '000' from the FACILITATORS MENU, gets the below respons
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
 }
// Menu for user who selects '1' NOT AT ALL on expectation
else if ($text == "1*1*3*1") {
     $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
     $response .= "1. Very poor \n";
     $response .= "2. Poor \n";
     $response .= "3. Satisfactory \n";
     $response .= "4. Very good \n";
     $response .= "5. Excellent \n";
     $response .= "0. Back \n";
     $response .= "00. Main Menu \n";
     $response .= "000. End Session \n"; 
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the FACILITIES MENU, gets the below respons
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
 }
//Menu for user who selects '1' VERY POOR on Facilities
else if ($text == "1*1*3*1*1") {
 $response .= "END Thank you. Your feedback has been recorded. \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
 // Menu for a user who selects '000' from the above menu, gets the below respons
else if ($text == "000") {
     $response .= "END Thank you for visiting The Kenya School of Government. \n";
     $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '2' 'POOR' on Facilities
else if ($text == "1*1*3*1*2") {
 $response .= "END Thank you. Your feedback has been recorded. \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
 // Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
     $response .= "END Thank you for visiting The Kenya School of Government. \n";
     $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '3' SATISFACTORY on Facilities
else if ($text == "1*1*3*1*3") {
 $response .= "END Thank you. Your feedback has been recorded. \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
 // Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
     $response .= "END Thank you for visiting The Kenya School of Government. \n";
     $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '4' VERY GOOD on Facilities
else if ($text == "1*1*3*1*4") {
 $response .= "END Thank you. Your feedback has been recorded. \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
 // Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
     $response .= "END Thank you for visiting The Kenya School of Government. \n";
     $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '5' 'EXCELLENT' on Facilities
else if ($text == "1*1*3*1*5") {
 $response .= "END Thank you. Your feedback has been recorded. \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
 // Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
     $response .= "END Thank you for visiting The Kenya School of Government. \n";
     $response .= "You have successfully logged out. \n";
}
// Menu for user who selects '2' POOR on expectation
else if ($text == "1*1*3*2") {
 $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
 $response .= "1. Very poor \n";
 $response .= "2. Poor \n";
 $response .= "3. Satisfactory \n";
 $response .= "4. Very good \n";
 $response .= "5. Excellent \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n"; 
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the FACILITIES MENU, gets the below respons
else if ($text == "000") {
$response .= "END Thank you for visiting The Kenya School of Government. \n";
$response .= "You have successfully logged out. \n";
}
//Menu for user who selects '1' VERY POOR on Facilities
else if ($text == "1*1*3*2*1") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below respons
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '2' POOR on Facilities
else if ($text == "1*1*3*2*2") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '3' SATISFACTORY on Facilities
else if ($text == "1*1*3*2*3") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '4' VERY GOOD on Facilities
else if ($text == "1*1*3*2*4") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '5' 'EXCELLENT' on Facilities
else if ($text == "1*1*3*2*5") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
// Menu for user who selects '3' SATISFACTORY on expectation
else if ($text == "1*1*3*3") {
 $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
 $response .= "1. Very poor \n";
 $response .= "2. Poor \n";
 $response .= "3. Satisfactory \n";
 $response .= "4. Very good \n";
 $response .= "5. Excellent \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n"; 
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the FACILITIES MENU, gets the below respons
else if ($text == "000") {
$response .= "END Thank you for visiting The Kenya School of Government. \n";
$response .= "You have successfully logged out. \n";
}
//Menu for user who selects '1' VERY POOR on Facilities
else if ($text == "1*1*3*3*1") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below respons
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '2' POOR on Facilities
else if ($text == "1*1*3*3*2") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '3' SATISFACTORY on Facilities
else if ($text == "1*1*3*3*3") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '4' VERY GOOD on Facilities
else if ($text == "1*1*3*3*4") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '5' 'EXCELLENT' on Facilities
else if ($text == "1*1*3*3*5") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
// Menu for user who selects '4' TO SOME EXTENT on expectation
else if ($text == "1*1*3*4") {
 $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
 $response .= "1. Very poor \n";
 $response .= "2. Poor \n";
 $response .= "3. Satisfactory \n";
 $response .= "4. Very good \n";
 $response .= "5. Excellent \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n"; 
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the FACILITIES MENU, gets the below respons
else if ($text == "000") {
$response .= "END Thank you for visiting The Kenya School of Government. \n";
$response .= "You have successfully logged out. \n";
}
//Menu for user who selects '1' VERY POOR on Facilities
else if ($text == "1*1*3*4*1") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below respons
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '2' POOR on Facilities
else if ($text == "1*1*3*4*2") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '3' SATISFACTORY on Facilities
else if ($text == "1*1*3*4*3") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '4' VERY GOOD on Facilities
else if ($text == "1*1*3*4*4") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '5' 'EXCELLENT' on Facilities
else if ($text == "1*1*3*4*5") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
// Menu for user who selects '5' GREAT EXTENT on expectation
else if ($text == "1*1*3*5") {
 $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
 $response .= "1. Very poor \n";
 $response .= "2. Poor \n";
 $response .= "3. Satisfactory \n";
 $response .= "4. Very good \n";
 $response .= "5. Excellent \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n"; 
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the FACILITIES MENU, gets the below respons
else if ($text == "000") {
$response .= "END Thank you for visiting The Kenya School of Government. \n";
$response .= "You have successfully logged out. \n";
}
//Menu for user who selects '1' VERY POOR on Facilities
else if ($text == "1*1*3*5*1") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below respons
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '2' POOR on Facilities
else if ($text == "1*1*3*5*2") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '3' SATISFACTORY on Facilities
else if ($text == "1*1*3*5*3") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '4' VERY GOOD on Facilities
else if ($text == "1*1*3*5*4") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '5' 'EXCELLENT' on Facilities
else if ($text == "1*1*3*5*5") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
// Menu for user who selects '4' VERY GOOD on FACILITATORS
else if ($text == "1*1*4") {
    $response .= "CON On a scale of 1-5, to what extent were your personal expectations met? \n";
     $response .= "1. Not at all \n";
     $response .= "2. Not sure \n";
     $response .= "3. Satisfactory \n";
     $response .= "4. To some extent \n";
     $response .= "5. Great extent \n";
     $response .= "0. Back \n";
     $response .= "00. Main Menu \n";
     $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
 // Menu for a user who selects '000' from the FACILITATORS MENU, gets the below respons
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
 }
// Menu for user who selects '1' NOT AT ALL on expectation
else if ($text == "1*1*4*1") {
     $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
     $response .= "1. Very poor \n";
     $response .= "2. Poor \n";
     $response .= "3. Satisfactory \n";
     $response .= "4. Very good \n";
     $response .= "5. Excellent \n";
     $response .= "0. Back \n";
     $response .= "00. Main Menu \n";
     $response .= "000. End Session \n"; 
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the FACILITIES MENU, gets the below respons
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
 }
//Menu for user who selects '1' VERY POOR on Facilities
else if ($text == "1*1*4*1*1") {
 $response .= "END Thank you. Your feedback has been recorded. \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
 // Menu for a user who selects '000' from the above menu, gets the below respons
else if ($text == "000") {
     $response .= "END Thank you for visiting The Kenya School of Government. \n";
     $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '2' 'POOR' on Facilities
else if ($text == "1*1*4*1*2") {
 $response .= "END Thank you. Your feedback has been recorded. \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
 // Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
     $response .= "END Thank you for visiting The Kenya School of Government. \n";
     $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '3' SATISFACTORY on Facilities
else if ($text == "1*1*4*1*3") {
 $response .= "END Thank you. Your feedback has been recorded. \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
 // Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
     $response .= "END Thank you for visiting The Kenya School of Government. \n";
     $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '4' VERY GOOD on Facilities
else if ($text == "1*1*4*1*4") {
 $response .= "END Thank you. Your feedback has been recorded. \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
 // Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
     $response .= "END Thank you for visiting The Kenya School of Government. \n";
     $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '5' 'EXCELLENT' on Facilities
else if ($text == "1*1*4*1*5") {
 $response .= "END Thank you. Your feedback has been recorded. \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
 // Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
     $response .= "END Thank you for visiting The Kenya School of Government. \n";
     $response .= "You have successfully logged out. \n";
}
// Menu for user who selects '2' POOR on expectation
else if ($text == "1*1*4*2") {
 $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
 $response .= "1. Very poor \n";
 $response .= "2. Poor \n";
 $response .= "3. Satisfactory \n";
 $response .= "4. Very good \n";
 $response .= "5. Excellent \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n"; 
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the FACILITIES MENU, gets the below respons
else if ($text == "000") {
$response .= "END Thank you for visiting The Kenya School of Government. \n";
$response .= "You have successfully logged out. \n";
}
//Menu for user who selects '1' VERY POOR on Facilities
else if ($text == "1*1*4*2*1") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below respons
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '2' POOR on Facilities
else if ($text == "1*1*4*2*2") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '3' SATISFACTORY on Facilities
else if ($text == "1*1*4*2*3") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '4' VERY GOOD on Facilities
else if ($text == "1*1*4*2*4") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '5' 'EXCELLENT' on Facilities
else if ($text == "1*1*4*2*5") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
// Menu for user who selects '3' SATISFACTORY on expectation
else if ($text == "1*1*4*3") {
 $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
 $response .= "1. Very poor \n";
 $response .= "2. Poor \n";
 $response .= "3. Satisfactory \n";
 $response .= "4. Very good \n";
 $response .= "5. Excellent \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n"; 
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the FACILITIES MENU, gets the below respons
else if ($text == "000") {
$response .= "END Thank you for visiting The Kenya School of Government. \n";
$response .= "You have successfully logged out. \n";
}
//Menu for user who selects '1' VERY POOR on Facilities
else if ($text == "1*1*4*3*1") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below respons
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '2' POOR on Facilities
else if ($text == "1*1*4*3*2") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '3' SATISFACTORY on Facilities
else if ($text == "1*1*4*3*3") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '4' VERY GOOD on Facilities
else if ($text == "1*1*4*3*4") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '5' 'EXCELLENT' on Facilities
else if ($text == "1*1*4*3*5") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
// Menu for user who selects '4' TO SOME EXTENT on expectation
else if ($text == "1*1*4*4") {
 $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
 $response .= "1. Very poor \n";
 $response .= "2. Poor \n";
 $response .= "3. Satisfactory \n";
 $response .= "4. Very good \n";
 $response .= "5. Excellent \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n"; 
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the FACILITIES MENU, gets the below respons
else if ($text == "000") {
$response .= "END Thank you for visiting The Kenya School of Government. \n";
$response .= "You have successfully logged out. \n";
}
//Menu for user who selects '1' VERY POOR on Facilities
else if ($text == "1*1*4*4*1") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below respons
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '2' POOR on Facilities
else if ($text == "1*1*4*4*2") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '3' SATISFACTORY on Facilities
else if ($text == "1*1*4*4*3") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '4' VERY GOOD on Facilities
else if ($text == "1*1*4*4*4") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '5' 'EXCELLENT' on Facilities
else if ($text == "1*1*4*4*5") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
// Menu for user who selects '5' GREAT EXTENT on expectation
else if ($text == "1*1*4*5") {
 $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
 $response .= "1. Very poor \n";
 $response .= "2. Poor \n";
 $response .= "3. Satisfactory \n";
 $response .= "4. Very good \n";
 $response .= "5. Excellent \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n"; 
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the FACILITIES MENU, gets the below respons
else if ($text == "000") {
$response .= "END Thank you for visiting The Kenya School of Government. \n";
$response .= "You have successfully logged out. \n";
}
//Menu for user who selects '1' VERY POOR on Facilities
else if ($text == "1*1*4*5*1") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below respons
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '2' POOR on Facilities
else if ($text == "1*1*4*5*2") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '3' SATISFACTORY on Facilities
else if ($text == "1*1*4*5*3") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '4' VERY GOOD on Facilities
else if ($text == "1*1*4*5*4") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '5' 'EXCELLENT' on Facilities
else if ($text == "1*1*4*5*5") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
// Menu for user who selects '5' EXCELLENT on FACILITATORS
else if ($text == "1*1*5") {
    $response .= "CON On a scale of 1-5, to what extent were your personal expectations met? \n";
     $response .= "1. Not at all \n";
     $response .= "2. Not sure \n";
     $response .= "3. Satisfactory \n";
     $response .= "4. To some extent \n";
     $response .= "5. Great extent \n";
     $response .= "0. Back \n";
     $response .= "00. Main Menu \n";
     $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
 // Menu for a user who selects '000' from the FACILITATORS MENU, gets the below respons
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
 }
// Menu for user who selects '1' NOT AT ALL on expectation
else if ($text == "1*1*5*1") {
     $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
     $response .= "1. Very poor \n";
     $response .= "2. Poor \n";
     $response .= "3. Satisfactory \n";
     $response .= "4. Very good \n";
     $response .= "5. Excellent \n";
     $response .= "0. Back \n";
     $response .= "00. Main Menu \n";
     $response .= "000. End Session \n"; 
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the FACILITIES MENU, gets the below respons
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
 }
//Menu for user who selects '1' VERY POOR on Facilities
else if ($text == "1*1*5*1*1") {
 $response .= "END Thank you. Your feedback has been recorded. \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
 // Menu for a user who selects '000' from the above menu, gets the below respons
else if ($text == "000") {
     $response .= "END Thank you for visiting The Kenya School of Government. \n";
     $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '2' 'POOR' on Facilities
else if ($text == "1*1*5*1*2") {
 $response .= "END Thank you. Your feedback has been recorded. \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
 // Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
     $response .= "END Thank you for visiting The Kenya School of Government. \n";
     $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '3' SATISFACTORY on Facilities
else if ($text == "1*1*5*1*3") {
 $response .= "END Thank you. Your feedback has been recorded. \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
 // Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
     $response .= "END Thank you for visiting The Kenya School of Government. \n";
     $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '4' VERY GOOD on Facilities
else if ($text == "1*1*5*1*4") {
 $response .= "END Thank you. Your feedback has been recorded. \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
 // Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
     $response .= "END Thank you for visiting The Kenya School of Government. \n";
     $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '5' 'EXCELLENT' on Facilities
else if ($text == "1*1*5*1*5") {
 $response .= "END Thank you. Your feedback has been recorded. \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
 $response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
 // Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
     $response .= "END Thank you for visiting The Kenya School of Government. \n";
     $response .= "You have successfully logged out. \n";
}
// Menu for user who selects '2' POOR on expectation
else if ($text == "1*1*5*2") {
 $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
 $response .= "1. Very poor \n";
 $response .= "2. Poor \n";
 $response .= "3. Satisfactory \n";
 $response .= "4. Very good \n";
 $response .= "5. Excellent \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n"; 
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the FACILITIES MENU, gets the below respons
else if ($text == "000") {
$response .= "END Thank you for visiting The Kenya School of Government. \n";
$response .= "You have successfully logged out. \n";
}
//Menu for user who selects '1' VERY POOR on Facilities
else if ($text == "1*1*5*2*1") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below respons
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '2' POOR on Facilities
else if ($text == "1*1*5*2*2") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '3' SATISFACTORY on Facilities
else if ($text == "1*1*5*2*3") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '4' VERY GOOD on Facilities
else if ($text == "1*1*5*2*4") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '5' 'EXCELLENT' on Facilities
else if ($text == "1*1*5*2*5") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
// Menu for user who selects '3' SATISFACTORY on expectation
else if ($text == "1*1*5*3") {
 $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
 $response .= "1. Very poor \n";
 $response .= "2. Poor \n";
 $response .= "3. Satisfactory \n";
 $response .= "4. Very good \n";
 $response .= "5. Excellent \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n"; 
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the FACILITIES MENU, gets the below respons
else if ($text == "000") {
$response .= "END Thank you for visiting The Kenya School of Government. \n";
$response .= "You have successfully logged out. \n";
}
//Menu for user who selects '1' VERY POOR on Facilities
else if ($text == "1*1*5*3*1") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below respons
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '2' POOR on Facilities
else if ($text == "1*1*5*3*2") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '3' SATISFACTORY on Facilities
else if ($text == "1*1*5*3*3") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '4' VERY GOOD on Facilities
else if ($text == "1*1*5*3*4") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '5' 'EXCELLENT' on Facilities
else if ($text == "1*1*5*3*5") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
// Menu for user who selects '4' TO SOME EXTENT on expectation
else if ($text == "1*1*5*4") {
 $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
 $response .= "1. Very poor \n";
 $response .= "2. Poor \n";
 $response .= "3. Satisfactory \n";
 $response .= "4. Very good \n";
 $response .= "5. Excellent \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n"; 
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the FACILITIES MENU, gets the below respons
else if ($text == "000") {
$response .= "END Thank you for visiting The Kenya School of Government. \n";
$response .= "You have successfully logged out. \n";
}
//Menu for user who selects '1' VERY POOR on Facilities
else if ($text == "1*1*5*4*1") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below respons
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '2' POOR on Facilities
else if ($text == "1*1*5*4*2") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '3' SATISFACTORY on Facilities
else if ($text == "1*1*5*4*3") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '4' VERY GOOD on Facilities
else if ($text == "1*1*5*4*4") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '5' 'EXCELLENT' on Facilities
else if ($text == "1*1*5*4*5") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
// Menu for user who selects '5' GREAT EXTENT on expectation
else if ($text == "1*1*5*5") {
 $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
 $response .= "1. Very poor \n";
 $response .= "2. Poor \n";
 $response .= "3. Satisfactory \n";
 $response .= "4. Very good \n";
 $response .= "5. Excellent \n";
 $response .= "0. Back \n";
 $response .= "00. Main Menu \n";
 $response .= "000. End Session \n"; 
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the FACILITIES MENU, gets the below respons
else if ($text == "000") {
$response .= "END Thank you for visiting The Kenya School of Government. \n";
$response .= "You have successfully logged out. \n";
}
//Menu for user who selects '1' VERY POOR on Facilities
else if ($text == "1*1*5*5*1") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below respons
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '2' POOR on Facilities
else if ($text == "1*1*5*5*2") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '3' SATISFACTORY on Facilities
else if ($text == "1*1*5*5*3") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '4' VERY GOOD on Facilities
else if ($text == "1*1*5*5*4") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}
//Menu for user who selects '5' 'EXCELLENT' on Facilities
else if ($text == "1*1*5*5*5") {
$response .= "END Thank you. Your feedback has been recorded. \n";
$response .= "0. Back \n";
$response .= "00. Main Menu \n";
$response .= "000. End Session \n";
}
else if ($text == "0,00" ) {
$response = "CON Hi, Welcome to The Kenya School of Government. \n";
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
// Menu for a user who selects '000' from the above menu, gets the below response
else if ($text == "000") {
 $response .= "END Thank you for visiting The Kenya School of Government. \n";
 $response .= "You have successfully logged out. \n";
}

/// END OF TRAINING FEEDBACK SECTION

/////////MENU FOR COURSE '2' SLDP 
//////LOOP FOR ALL COURSES 1*2, 1*3.....1*40
// echo response
header('Content-type: text/plain');
echo $response
?>
