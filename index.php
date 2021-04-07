<?php
// Reads the variables sent via POST
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$text = $_POST["text"];
$text = 000;
do {
  echo "Thank you for visiting The Kenya School of Government. \n You have successfully logged out. \n";
} while ($text = 000);
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
//IN THE CASE WHERE USER TEXT IS '1, 1' TRAINING then SMC, OUTPUT should be as follows
if ($text == "1*1") {
    $response .= "CON On a scale of 1-5, how would you rate the facilitators? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1' TRAINING,SMC,then VERY POOR OUTPUT should be as follows
else if ($text == "1*1*1") {
    $response .= "CON On a scale of 1-5, to what extent were your personal expectations met? \n";
    $response .= "1. Not at all \n";
    $response .= "2. Not sure \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. To some extent \n";
    $response .= "5. Great extent \n";
    $response .= " \n";
    $response .= "0. Back \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 1" TRAINING,SMC,VERY POOR then NOT AT ALL OUTPUT should be as follows
else if ($text == "1*1*1*1") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 1, 1" TRAINING,SMC,VERY POOR, NOT AT ALL then VERY POOR OUTPUT should be as follows
else if ($text == "1*1*1*1*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 1, 2" TRAINING,SMC,VERY POOR, NOT AT ALL then POOR OUTPUT should be as follows
else if ($text == "1*1*1*1*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 1, 3" TRAINING,SMC,VERY POOR, NOT AT ALL then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*1*1*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 1, 4" TRAINING,SMC,VERY POOR, NOT AT ALL then VERY GOOD OUTPUT should be as follows
else if ($text == "1*1*1*1*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 1, 5" TRAINING,SMC,VERY POOR, NOT AT ALL then EXCELLENT OUTPUT should be as follows
else if ($text == "1*1*1*1*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}

/// BACK TO THE EXPECTATIONS MENU
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 2" TRAINING,SMC,VERY POOR then NOT SURE OUTPUT should be as follows
else if ($text == "1*1*1*2") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 2, 1" TRAINING,SMC,VERY POOR, NOT AT ALL then VERY POOR OUTPUT should be as follows
else if ($text == "1*1*1*2*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 1, 2" TRAINING,SMC,VERY POOR, NOT AT ALL then POOR OUTPUT should be as follows
else if ($text == "1*1*1*2*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 1, 3" TRAINING,SMC,VERY POOR, NOT AT ALL then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*1*2*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 1, 4" TRAINING,SMC,VERY POOR, NOT AT ALL then VERY GOOD OUTPUT should be as follows
else if ($text == "1*1*1*2*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 1, 5" TRAINING,SMC,VERY POOR, NOT AT ALL then EXCELLENT OUTPUT should be as follows
else if ($text == "1*1*1*2*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
/// BACK TO THE EXPECTATIONS MENU
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 3" TRAINING,SMC,VERY POOR then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*1*3") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 3, 1" TRAINING,SMC,VERY POOR, NOT AT ALL then VERY POOR OUTPUT should be as follows
else if ($text == "1*1*1*2*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 3, 2" TRAINING,SMC,VERY POOR, NOT AT ALL then POOR OUTPUT should be as follows
else if ($text == "1*1*1*2*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 3, 3" TRAINING,SMC,VERY POOR, NOT AT ALL then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*1*2*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 3, 4" TRAINING,SMC,VERY POOR, NOT AT ALL then VERY GOOD OUTPUT should be as follows
else if ($text == "1*1*1*2*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 3, 5" TRAINING,SMC,VERY POOR, NOT AT ALL then EXCELLENT OUTPUT should be as follows
else if ($text == "1*1*1*2*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
/// BACK TO THE EXPECTATIONS MENU
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 4" TRAINING,SMC,VERY POOR then TO SOME EXTENT OUTPUT should be as follows
else if ($text == "1*1*1*4") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 4, 1" TRAINING,SMC,VERY POOR, NOT AT ALL then VERY POOR OUTPUT should be as follows
else if ($text == "1*1*1*4*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 4, 2" TRAINING,SMC,VERY POOR, NOT AT ALL then POOR OUTPUT should be as follows
else if ($text == "1*1*1*4*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 1, 3" TRAINING,SMC,VERY POOR, NOT AT ALL then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*1*4*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 1, 4" TRAINING,SMC,VERY POOR, NOT AT ALL then VERY GOOD OUTPUT should be as follows
else if ($text == "1*1*1*4*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 1, 5" TRAINING,SMC,VERY POOR, NOT AT ALL then EXCELLENT OUTPUT should be as follows
else if ($text == "1*1*1*4*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
/// BACK TO THE EXPECTATIONS MENU
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 5" TRAINING,SMC,VERY POOR then GREAT EXTENT OUTPUT should be as follows
else if ($text == "1*1*1*5") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 5, 1" TRAINING,SMC,VERY POOR, NOT AT ALL then VERY POOR OUTPUT should be as follows
else if ($text == "1*1*1*5*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 5, 2" TRAINING,SMC,VERY POOR, NOT AT ALL then POOR OUTPUT should be as follows
else if ($text == "1*1*1*5*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 1, 3" TRAINING,SMC,VERY POOR, NOT AT ALL then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*1*5*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 1, 4" TRAINING,SMC,VERY POOR, NOT AT ALL then VERY GOOD OUTPUT should be as follows
else if ($text == "1*1*1*5*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 1, 5" TRAINING,SMC,VERY POOR, NOT AT ALL then EXCELLENT OUTPUT should be as follows
else if ($text == "1*1*1*5*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}

/// BACK TO THE FACILITATORS MENU
//IN THE CASE WHERE USER TEXT IS '1, 1, 2' TRAINING,SMC,then POOR OUTPUT should be as follows
else if ($text == "1*1*2") {
    $response .= "CON On a scale of 1-5, to what extent were your personal expectations met? \n";
    $response .= "1. Not at all \n";
    $response .= "2. Not sure \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. To some extent \n";
    $response .= "5. Great extent \n";
    $response .= " \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 2, 1" TRAINING,SMC,POOR then NOT AT ALL OUTPUT should be as follows
else if ($text == "1*1*2*1") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 2, 1, 1" TRAINING,SMC,POOR, NOT AT ALL then VERY POOR OUTPUT should be as follows
else if ($text == "1*1*2*1*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 2, 1, 2" TRAINING,SMC,POOR, NOT AT ALL then POOR OUTPUT should be as follows
else if ($text == "1*1*2*1*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 2, 1, 3" TRAINING,SMC,POOR, NOT AT ALL then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*2*1*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 2, 1, 4" TRAINING,SMC,POOR, NOT AT ALL then VERY GOOD OUTPUT should be as follows
else if ($text == "1*1*2*1*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 2, 1, 5" TRAINING,SMC,POOR, NOT AT ALL then EXCELLENT OUTPUT should be as follows
else if ($text == "1*1*2*1*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
/// BACK TO THE EXPECTATIONS MENU
//IN THE CASE WHERE USER TEXT IS '1, 1, 2, 2" TRAINING,SMC,POOR then NOT SURE OUTPUT should be as follows
else if ($text == "1*1*2*2") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 2, 2, 1" TRAINING,SMC,POOR, NOT AT ALL then VERY POOR OUTPUT should be as follows
else if ($text == "1*1*2*2*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 2, 2, 2" TRAINING,SMC,POOR, NOT AT ALL then POOR OUTPUT should be as follows
else if ($text == "1*1*2*2*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 2, 2, 3" TRAINING,SMC,POOR, NOT AT ALL then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*2*2*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 2, 2, 4" TRAINING,SMC,POOR, NOT AT ALL then VERY GOOD OUTPUT should be as follows
else if ($text == "1*1*2*2*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 2, 2, 5" TRAINING,SMC,POOR, NOT AT ALL then EXCELLENT OUTPUT should be as follows
else if ($text == "1*1*2*2*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
/// BACK TO THE EXPECTATIONS MENU
//IN THE CASE WHERE USER TEXT IS '1, 1, 2, 3" TRAINING,SMC, POOR then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*2*3") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 2, 3, 1" TRAINING,SMC,POOR, SATISFACTORY then VERY POOR OUTPUT should be as follows
else if ($text == "1*1*2*3*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 2, 3, 2" TRAINING,SMC,POOR, SATISFACTORY then POOR OUTPUT should be as follows
else if ($text == "1*1*2*3*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 2, 3, 3" TRAINING,SMC,POOR, SATISFACTORY then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*2*3*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 3, 4" TRAINING,SMC,POOR, SATISFACTORY then VERY GOOD OUTPUT should be as follows
else if ($text == "1*1*2*3*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 2, 3, 5" TRAINING,SMC,POOR, SATISFACTORY then EXCELLENT OUTPUT should be as follows
else if ($text == "1*1*2*3*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
/// BACK TO THE EXPECTATIONS MENU
//IN THE CASE WHERE USER TEXT IS '1, 1, 2, 4" TRAINING,SMC,POOR then TO SOME EXTENT OUTPUT should be as follows
else if ($text == "1*1*2*4") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 2, 4, 1" TRAINING,SMC,POOR, TO SOME EXTENT then VERY POOR OUTPUT should be as follows
else if ($text == "1*1*2*4*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 2, 4, 2" TRAINING,SMC,POOR, TO SOME EXTENT then POOR OUTPUT should be as follows
else if ($text == "1*1*2*4*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 1, 3" TRAINING,SMC,POOR, TO SOME EXTENT then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*2*4*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 1, 4" TRAINING,SMC,POOR, TO SOME EXTENT then VERY GOOD OUTPUT should be as follows
else if ($text == "1*1*2*4*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 1, 1, 5" TRAINING,SMC,POOR, TO SOME EXTENT then EXCELLENT OUTPUT should be as follows
else if ($text == "1*1*2*4*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
/// BACK TO THE EXPECTATIONS MENU
//IN THE CASE WHERE USER TEXT IS '1, 1, 2, 5" TRAINING,SMC,POOR then GREAT EXTENT OUTPUT should be as follows
else if ($text == "1*1*2*5") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 2, 5, 1" TRAINING,SMC,POOR, GREAT EXTENT then VERY POOR OUTPUT should be as follows
else if ($text == "1*1*2*5*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 2, 5, 2" TRAINING,SMC,POOR, GREAT EXTENT then POOR OUTPUT should be as follows
else if ($text == "1*1*2*5*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 2, 1, 3" TRAINING,SMC,POOR, GREAT EXTENT then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*2*5*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 2, 5, 4" TRAINING,SMC,POOR, GREAT EXTENT then VERY GOOD OUTPUT should be as follows
else if ($text == "1*1*2*5*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 2, 5, 5" TRAINING,SMC,POOR, GREAT EXTENT then EXCELLENT OUTPUT should be as follows
else if ($text == "1*1*2*5*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}

/// BACK TO THE FACILITATORS MENU
//IN THE CASE WHERE USER TEXT IS '1, 1, 3' TRAINING,SMC,then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*3") {
    $response .= "CON On a scale of 1-5, to what extent were your personal expectations met? \n";
    $response .= "1. Not at all \n";
    $response .= "2. Not sure \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. To some extent \n";
    $response .= "5. Great extent \n";
    $response .= " \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 1" TRAINING,SMC,SATISFACTORY then NOT AT ALL OUTPUT should be as follows
else if ($text == "1*1*3*1") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 1, 1" TRAINING,SMC, SATISFACTORY, NOT AT ALL then VERY POOR OUTPUT should be as follows
else if ($text == "1*1*3*1*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 1, 2" TRAINING,SMC,SATISFACTORY, NOT AT ALL then POOR OUTPUT should be as follows
else if ($text == "1*1*3*1*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 1, 3" TRAINING,SMC,SATISFACTORY, NOT AT ALL then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*3*1*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 1, 4" TRAINING,SMC,SATISFACTORY, NOT AT ALL then VERY GOOD OUTPUT should be as follows
else if ($text == "1*1*3*1*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 1, 5" TRAINING,SMC,SATISFACTORY, NOT AT ALL then EXCELLENT OUTPUT should be as follows
else if ($text == "1*1*3*1*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
/// BACK TO THE EXPECTATIONS MENU
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 2" TRAINING,SMC,SATISFACTORY then NOT SURE OUTPUT should be as follows
else if ($text == "1*1*3*2") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 2, 1" TRAINING,SMC,SATISFACTORY, NOT SURE then VERY POOR OUTPUT should be as follows
else if ($text == "1*1*3*2*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 2, 2" TRAINING,SMC,SATISFACTORY, NOT SURE then POOR OUTPUT should be as follows
else if ($text == "1*1*3*2*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 2, 3" TRAINING,SMC,SATISFACTORY, NOT SURE then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*3*2*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 2, 4" TRAINING,SMC,SATISFACTORY, NOT SURE then VERY GOOD OUTPUT should be as follows
else if ($text == "1*1*3*2*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 2, 5" TRAINING,SMC,SATISFACTORY, NOT SURE then EXCELLENT OUTPUT should be as follows
else if ($text == "1*1*3*2*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
/// BACK TO THE EXPECTATIONS MENU
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 3" TRAINING,SMC, SATISFACTORY then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*3*3") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 3, 1" TRAINING,SMC,SATISFACTORY, SATISFACTORY then VERY POOR OUTPUT should be as follows
else if ($text == "1*1*3*3*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 3, 2" TRAINING,SMC,SATISFACTORY, SATISFACTORY then POOR OUTPUT should be as follows
else if ($text == "1*1*3*3*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 3, 3" TRAINING,SMC,SATISFACTORY, SATISFACTORY then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*3*3*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 3, 4" TRAINING,SMC,SATISFACTORY, SATISFACTORY then VERY GOOD OUTPUT should be as follows
else if ($text == "1*1*3*3*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 3, 5" TRAINING,SMC,SATISFACTORY, SATISFACTORY then EXCELLENT OUTPUT should be as follows
else if ($text == "1*1*3*3*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
/// BACK TO THE EXPECTATIONS MENU
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 4" TRAINING,SMC,SATISFACTORY then TO SOME EXTENT OUTPUT should be as follows
else if ($text == "1*1*3*4") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 4, 1" TRAINING,SMC,SATISFACTORYR, TO SOME EXTENT then VERY POOR OUTPUT should be as follows
else if ($text == "1*1*3*4*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 4, 2" TRAINING,SMC,SATISFACTORY, TO SOME EXTENT then POOR OUTPUT should be as follows
else if ($text == "1*1*3*4*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 4, 3" TRAINING,SMC,SATISFACTORY, TO SOME EXTENT then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*3*4*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 4, 4" TRAINING,SMC,SATISFACTORY, TO SOME EXTENT then VERY GOOD OUTPUT should be as follows
else if ($text == "1*1*3*4*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 4, 5" TRAINING,SMC,SATISFACTORY, TO SOME EXTENT then EXCELLENT OUTPUT should be as follows
else if ($text == "1*1*3*4*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
/// BACK TO THE EXPECTATIONS MENU
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 5" TRAINING,SMC,SATISFACTORY then GREAT EXTENT OUTPUT should be as follows
else if ($text == "1*1*3*5") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 5, 1" TRAINING,SMC,SATISFACTORY, GREAT EXTENT then VERY POOR OUTPUT should be as follows
else if ($text == "1*1*3*5*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 5, 2" TRAINING,SMC,SATISFACTORY, GREAT EXTENT then POOR OUTPUT should be as follows
else if ($text == "1*1*3*5*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 5, 3" TRAINING,SMC,SATISFACTORY, GREAT EXTENT then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*3*5*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 5, 4" TRAINING,SMC,SATISFACTORY, GREAT EXTENT then VERY GOOD OUTPUT should be as follows
else if ($text == "1*1*3*5*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 3, 5, 5" TRAINING,SMC,SATISFACTORY, GREAT EXTENT then EXCELLENT OUTPUT should be as follows
else if ($text == "1*1*5*5*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}

/// BACK TO THE FACILITATORS MENU
//IN THE CASE WHERE USER TEXT IS '1, 1, 4' TRAINING,SMC,then VERY GOOD OUTPUT should be as follows
else if ($text == "1*1*4") {
    $response .= "CON On a scale of 1-5, to what extent were your personal expectations met? \n";
    $response .= "1. Not at all \n";
    $response .= "2. Not sure \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. To some extent \n";
    $response .= "5. Great extent \n";
    $response .= " \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 1" TRAINING,SMC,VERY GOOD then NOT AT ALL OUTPUT should be as follows
else if ($text == "1*1*4*1") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 1, 1" TRAINING,SMC, VERY GOOD, NOT AT ALL then VERY POOR OUTPUT should be as follows
else if ($text == "1*1*4*1*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 1, 2" TRAINING,SMC,VERY GOOD, NOT AT ALL then POOR OUTPUT should be as follows
else if ($text == "1*1*4*1*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 1, 3" TRAINING,SMC,VERY GOOD, NOT AT ALL then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*4*1*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 1, 4" TRAINING,SMC,VERY GOOD, NOT AT ALL then VERY GOOD OUTPUT should be as follows
else if ($text == "1*1*4*1*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 1, 5" TRAINING,SMC,VERY GOOD, NOT AT ALL then EXCELLENT OUTPUT should be as follows
else if ($text == "1*1*4*1*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
/// BACK TO THE EXPECTATIONS MENU
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 2" TRAINING,SMC,VERY GOOD then NOT SURE OUTPUT should be as follows
else if ($text == "1*1*4*2") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 2, 1" TRAINING,SMC,VERY GOOD, NOT SURE then VERY POOR OUTPUT should be as follows
else if ($text == "1*1*4*2*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 2, 2" TRAINING,SMC,VERY GOOD, NOT SURE then POOR OUTPUT should be as follows
else if ($text == "1*1*4*2*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 2, 3" TRAINING,SMC,VERY GOOD, NOT SURE then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*4*2*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 2, 4" TRAINING,SMC,VERY GOOD, NOT SURE then VERY GOOD OUTPUT should be as follows
else if ($text == "1*1*4*2*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 2, 5" TRAINING,SMC,VERY GOOD, NOT SURE then EXCELLENT OUTPUT should be as follows
else if ($text == "1*1*4*2*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
/// BACK TO THE EXPECTATIONS MENU
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 3" TRAINING,SMC, VERY GOOD then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*4*3") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 3, 1" TRAINING,SMC,VERY GOOD, SATISFACTORY then VERY POOR OUTPUT should be as follows
else if ($text == "1*1*4*3*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 3, 2" TRAINING,SMC,VERY GOOD, SATISFACTORY then POOR OUTPUT should be as follows
else if ($text == "1*1*4*3*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 3, 3" TRAINING,SMC,VERY GOOD, SATISFACTORY then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*4*3*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 3, 4" TRAINING,SMC,VERY GOOD, SATISFACTORY then VERY GOOD OUTPUT should be as follows
else if ($text == "1*1*4*3*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 3, 5" TRAINING,SMC,VERY GOOD, SATISFACTORY then EXCELLENT OUTPUT should be as follows
else if ($text == "1*1*4*3*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
/// BACK TO THE EXPECTATIONS MENU
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 4" TRAINING,SMC,VERY GOOD then TO SOME EXTENT OUTPUT should be as follows
else if ($text == "1*1*4*4") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 4, 1" TRAINING,SMC,VERY GOOD, TO SOME EXTENT then VERY POOR OUTPUT should be as follows
else if ($text == "1*1*4*4*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 4, 2" TRAINING,SMC,VERY GOOD, TO SOME EXTENT then POOR OUTPUT should be as follows
else if ($text == "1*1*4*4*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 4, 3" TRAINING,SMC,VERY GOOD, TO SOME EXTENT then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*4*4*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 4, 4" TRAINING,SMC,VERY GOOD, TO SOME EXTENT then VERY GOOD OUTPUT should be as follows
else if ($text == "1*1*4*4*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 4, 5" TRAINING,SMC,VERY GOOD, TO SOME EXTENT then EXCELLENT OUTPUT should be as follows
else if ($text == "1*1*4*4*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
/// BACK TO THE EXPECTATIONS MENU
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 5" TRAINING,SMC,VERY GOOD then GREAT EXTENT OUTPUT should be as follows
else if ($text == "1*1*4*5") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 5, 1" TRAINING,SMC,VERY GOOD, GREAT EXTENT then VERY POOR OUTPUT should be as follows
else if ($text == "1*1*4*5*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 5, 2" TRAINING,SMC,VERY GOOD, GREAT EXTENT then POOR OUTPUT should be as follows
else if ($text == "1*1*4*5*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 5, 3" TRAINING,SMC,VERY GOOD, GREAT EXTENT then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*4*5*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 5, 4" TRAINING,SMC,VERY GOOD, GREAT EXTENT then VERY GOOD OUTPUT should be as follows
else if ($text == "1*1*4*5*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 4, 5, 5" TRAINING,SMC,VERY GOOD, GREAT EXTENT then EXCELLENT OUTPUT should be as follows
else if ($text == "1*1*4*5*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}

/// BACK TO THE FACILITATORS MENU
//IN THE CASE WHERE USER TEXT IS '1, 1, 5' TRAINING,SMC,then EXCELLENT OUTPUT should be as follows
else if ($text == "1*1*5") {
    $response .= "CON On a scale of 1-5, to what extent were your personal expectations met? \n";
    $response .= "1. Not at all \n";
    $response .= "2. Not sure \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. To some extent \n";
    $response .= "5. Great extent \n";
    $response .= " \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 1" TRAINING,SMC,EXCELLENT then NOT AT ALL OUTPUT should be as follows
else if ($text == "1*1*5*1") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 1, 1" TRAINING,SMC, EXCELLENT, NOT AT ALL then VERY POOR OUTPUT should be as follows
else if ($text == "1*1*5*1*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 1, 2" TRAINING,SMC,EXCELLENT, NOT AT ALL then POOR OUTPUT should be as follows
else if ($text == "1*1*5*1*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 1, 3" TRAINING,SMC,EXCELLENT, NOT AT ALL then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*5*1*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 1, 4" TRAINING,SMC,EXCELLENT, NOT AT ALL then VERY GOOD OUTPUT should be as follows
else if ($text == "1*1*5*1*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 1, 5" TRAINING,SMC,EXCELLENT, NOT AT ALL then EXCELLENT OUTPUT should be as follows
else if ($text == "1*1*5*1*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
/// BACK TO THE EXPECTATIONS MENU
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 2" TRAINING,SMC,EXCELLENT then NOT SURE OUTPUT should be as follows
else if ($text == "1*1*5*2") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 2, 1" TRAINING,SMC,EXCELLENT, NOT SURE then VERY POOR OUTPUT should be as follows
else if ($text == "1*1*5*2*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 2, 2" TRAINING,SMC,EXCELLENT, NOT SURE then POOR OUTPUT should be as follows
else if ($text == "1*1*5*2*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 2, 3" TRAINING,SMC,EXCELLENT, NOT SURE then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*5*2*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 2, 4" TRAINING,SMC,EXCELLENT, NOT SURE then VERY GOOD OUTPUT should be as follows
else if ($text == "1*1*5*2*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 2, 5" TRAINING,SMC,EXCELLENT, NOT SURE then EXCELLENT OUTPUT should be as follows
else if ($text == "1*1*5*2*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
/// BACK TO THE EXPECTATIONS MENU
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 3" TRAINING,SMC, EXCELLENT then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*5*3") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 3, 1" TRAINING,SMC,EXCELLENT, SATISFACTORY then VERY POOR OUTPUT should be as follows
else if ($text == "1*1*5*3*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 3, 2" TRAINING,SMC,EXCELLENT, SATISFACTORY then POOR OUTPUT should be as follows
else if ($text == "1*1*5*3*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 3, 3" TRAINING,SMC,EXCELLENT, SATISFACTORY then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*5*3*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 3, 4" TRAINING,SMC,EXCELLENT, SATISFACTORY then VERY GOOD OUTPUT should be as follows
else if ($text == "1*1*5*3*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 3, 5" TRAINING,SMC,EXCELLENT, SATISFACTORY then EXCELLENT OUTPUT should be as follows
else if ($text == "1*1*5*3*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
/// BACK TO THE EXPECTATIONS MENU
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 4" TRAINING,SMC,EXCELLENT then TO SOME EXTENT OUTPUT should be as follows
else if ($text == "1*1*5*4") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 4, 1" TRAINING,SMC,EXCELLENT, TO SOME EXTENT then VERY POOR OUTPUT should be as follows
else if ($text == "1*1*5*4*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 4, 2" TRAINING,SMC,EXCELLENT, TO SOME EXTENT then POOR OUTPUT should be as follows
else if ($text == "1*1*5*4*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 4, 3" TRAINING,SMC,EXCELLENT, TO SOME EXTENT then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*5*4*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 4, 4" TRAINING,SMC,EXCELLENT, TO SOME EXTENT then VERY GOOD OUTPUT should be as follows
else if ($text == "1*1*5*4*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 4, 5" TRAINING,SMC,EXCELLENT, TO SOME EXTENT then EXCELLENT OUTPUT should be as follows
else if ($text == "1*1*5*4*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
/// BACK TO THE EXPECTATIONS MENU
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 5" TRAINING,SMC,EXCELLENT then GREAT EXTENT OUTPUT should be as follows
else if ($text == "1*1*5*5") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities (lecture venues, projectors, stationeries e.t.c)? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n"; 
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 5, 1" TRAINING,SMC,EXCELLENT, GREAT EXTENT then VERY POOR OUTPUT should be as follows
else if ($text == "1*1*5*5*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 5, 2" TRAINING,SMC,EXCELLENT, GREAT EXTENT then POOR OUTPUT should be as follows
else if ($text == "1*1*5*5*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 5, 3" TRAINING,SMC,EXCELLENT, GREAT EXTENT then SATISFACTORY OUTPUT should be as follows
else if ($text == "1*1*5*5*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 5, 4" TRAINING,SMC,EXCELLENT, GREAT EXTENT then VERY GOOD OUTPUT should be as follows
else if ($text == "1*1*5*5*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '1, 1, 5, 5, 5" TRAINING,SMC,VERY GOOD, GREAT EXTENT then EXCELLENT OUTPUT should be as follows
else if ($text == "1*1*5*5*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
/// END OF TRAINING FEEDBACK SECTION FOR SMC COURSE

///BEGINNING OF THE REST OF THE COURSES
/////////MENU FOR COURSE '2' SLDP 
//////LOOP FOR ALL COURSES 1*2, 1*3.....1*40

//DINING
//Menu for user who selects option '2' DINING
//IN THE CASE WHERE USER TEXT IS '2' Dining, OUTPUT should be as follows
if ($text == "2") {
    $response .= "CON You are about to give feedback on Dining \n";
    $response .= "Please select the dining venue in which you were allocated \n";
    $response .= "1. Maandalizi \n";
    $response .= "2. Margaret Kobia \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1,'
else if ($text == "2*1") {
    $response .= "CON On a scale of 1-5, how would you rate the hospitality team? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 1' DINING, MAANDALIZI, VERY POOR
else if ($text == "2*1*1"){
    $response .= "CON On a scale of 1-5, how would you rate the meals served? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 1' DINING, MAANDALIZI, VERY POOR, VERY POOR
else if ($text == "2*1*1*1"){
    $response .= "CON On a scale of 1-5, how would you rate the dining facility? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 1, 1' DINING, MAANDALIZI, VERY POOR, VERY POOR, VERY POOR
else if ($text == "2*1*1*1*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 1, 2' DINING, MAANDALIZI, VERY POOR, VERY POOR, POOR
else if ($text == "2*1*1*1*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 1, 3' DINING, MAANDALIZI, VERY POOR, VERY POOR, SATISFACTORY
else if ($text == "2*1*1*1*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 1, 4' DINING, MAANDALIZI, VERY POOR, VERY POOR, VERY GOOD
else if ($text == "2*1*1*1*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 1, 5' DINING, MAANDALIZI, VERY POOR, VERY POOR, EXCELLENT
else if ($text == "2*1*1*1*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
///BACK TO THE MEALS SERVED RATING
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 2' DINING, MAANDALIZI, VERY POOR,POOR
else if ($text == "2*1*1*2"){
    $response .= "CON On a scale of 1-5, how would you rate the dining facility? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 2, 1' DINING, MAANDALIZI, VERY POOR, POOR, VERY POOR
else if ($text == "2*1*1*2*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 2, 2' DINING, MAANDALIZI, VERY POOR, POOR, POOR
else if ($text == "2*1*1*2*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 2, 3' DINING, MAANDALIZI, VERY POOR, POOR, SATISFACTORY
else if ($text == "2*1*1*2*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 2, 4' DINING, MAANDALIZI, VERY POOR,POOR, VERY GOOD
else if ($text == "2*1*1*2*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 2, 5' DINING, MAANDALIZI, VERY POOR, POOR, EXCELLENT
else if ($text == "2*1*1*2*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
///BACK TO THE MEALS SERVED RATING
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 3' DINING, MAANDALIZI, VERY POOR,SATISFACTORY
else if ($text == "2*1*1*3"){
    $response .= "CON On a scale of 1-5, how would you rate the dining facility? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 3, 1' DINING, MAANDALIZI, VERY POOR, SATISFACTORY, VERY POOR
else if ($text == "2*1*1*3*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 3, 2' DINING, MAANDALIZI, VERY POOR, SATISFACTORY, POOR
else if ($text == "2*1*1*3*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 3, 3' DINING, MAANDALIZI, VERY POOR, SATISFACTORY, SATISFACTORY
else if ($text == "2*1*1*3*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 3, 4' DINING, MAANDALIZI, VERY POOR,SATISFACTORY, VERY GOOD
else if ($text == "2*1*1*3*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 3, 5' DINING, MAANDALIZI, VERY POOR, SATISFACTORY, EXCELLENT
else if ($text == "2*1*1*3*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
///BACK TO THE MEALS SERVED RATING
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 4' DINING, MAANDALIZI, VERY POOR,VERY GOOD
else if ($text == "2*1*1*4"){
    $response .= "CON On a scale of 1-5, how would you rate the dining facility? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 4, 1' DINING, MAANDALIZI, VERY POOR, VERY GOOD, VERY POOR
else if ($text == "2*1*1*4*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 4, 2' DINING, MAANDALIZI, VERY POOR, VERY GOOD, POOR
else if ($text == "2*1*1*4*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 4, 3' DINING, MAANDALIZI, VERY POOR, VERY GOOD, SATISFACTORY
else if ($text == "2*1*1*4*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 4, 4' DINING, MAANDALIZI, VERY POOR,VERY GOOD, VERY GOOD
else if ($text == "2*1*1*4*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 4, 5' DINING, MAANDALIZI, VERY POOR, VERY GOOD, EXCELLENT
else if ($text == "2*1*1*4*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
///BACK TO THE MEALS SERVED RATING
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 5' DINING, MAANDALIZI, VERY POOR,EXCELLENT
else if ($text == "2*1*1*5"){
    $response .= "CON On a scale of 1-5, how would you rate the dining facility? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 5, 1' DINING, MAANDALIZI, VERY POOR, EXCELLENT, VERY POOR
else if ($text == "2*1*1*5*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 5, 2' DINING, MAANDALIZI, VERY POOR, EXCELLENT, POOR
else if ($text == "2*1*1*5*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 5, 3' DINING, MAANDALIZI, VERY POOR, EXCELLENT, SATISFACTORY
else if ($text == "2*1*1*5*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 5, 4' DINING, MAANDALIZI, VERY POOR,EXCELLENT, VERY GOOD
else if ($text == "2*1*1*5*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 1, 5, 5' DINING, MAANDALIZI, VERY POOR, EXCELLENT, EXCELLENT
else if ($text == "2*1*1*5*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}

///BACK TO THE HOSPITALITY TEAM RATING
//IN THE CASE WHERE USER TEXT IS '2, 1, 2' DINING, MAANDALIZI, POOR
else if ($text == "2*1*2"){
    $response .= "CON On a scale of 1-5, how would you rate the meals served? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 1' DINING, MAANDALIZI, POOR, VERY POOR
else if ($text == "2*1*2*1"){
    $response .= "CON On a scale of 1-5, how would you rate the dining facility? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 1, 1' DINING, MAANDALIZI, POOR, VERY POOR, VERY POOR
else if ($text == "2*1*2*1*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 1, 2' DINING, MAANDALIZI, POOR, VERY POOR, POOR
else if ($text == "2*1*2*1*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 1, 3' DINING, MAANDALIZI, POOR, VERY POOR, SATISFACTORY
else if ($text == "2*1*2*1*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 1, 4' DINING, MAANDALIZI, POOR, VERY POOR, VERY GOOD
else if ($text == "2*1*2*1*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 1, 5' DINING, MAANDALIZI, POOR, VERY POOR, EXCELLENT
else if ($text == "2*1*2*1*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
///BACK TO THE MEALS SERVED RATING
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 2' DINING, MAANDALIZI, POOR, POOR
else if ($text == "2*1*2*2"){
    $response .= "CON On a scale of 1-5, how would you rate the dining facility? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 2, 1' DINING, MAANDALIZI, POOR, POOR, VERY POOR
else if ($text == "2*1*2*2*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 2, 2' DINING, MAANDALIZI, POOR, POOR, POOR
else if ($text == "2*1*2*2*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 2, 3' DINING, MAANDALIZI, POOR, POOR, SATISFACTORY
else if ($text == "2*1*2*2*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 2, 4' DINING, MAANDALIZI, POOR, POOR, VERY GOOD
else if ($text == "2*1*2*2*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 2, 5' DINING, MAANDALIZI, POOR, POOR, EXCELLENT
else if ($text == "2*1*2*2*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
///BACK TO THE MEALS SERVED RATING
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 3' DINING, MAANDALIZI, POOR,SATISFACTORY
else if ($text == "2*1*2*3"){
    $response .= "CON On a scale of 1-5, how would you rate the dining facility? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 3, 1' DINING, MAANDALIZI, POOR, SATISFACTORY, VERY POOR
else if ($text == "2*1*2*3*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 3, 2' DINING, MAANDALIZI, POOR, SATISFACTORY, POOR
else if ($text == "2*1*2*3*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 3, 3' DINING, MAANDALIZI, POOR, SATISFACTORY, SATISFACTORY
else if ($text == "2*1*2*3*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 3, 4' DINING, MAANDALIZI, POOR,SATISFACTORY, VERY GOOD
else if ($text == "2*1*2*3*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 3, 5' DINING, MAANDALIZI, POOR, SATISFACTORY, EXCELLENT
else if ($text == "2*1*2*3*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
///BACK TO THE MEALS SERVED RATING
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 4' DINING, MAANDALIZI, POOR,VERY GOOD
else if ($text == "2*1*2*4"){
    $response .= "CON On a scale of 1-5, how would you rate the dining facility? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 4, 1' DINING, MAANDALIZI, POOR, VERY GOOD, VERY POOR
else if ($text == "2*1*2*4*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 4, 2' DINING, MAANDALIZI, POOR, VERY GOOD, POOR
else if ($text == "2*1*2*4*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 4, 3' DINING, MAANDALIZI, POOR, VERY GOOD, SATISFACTORY
else if ($text == "2*1*2*4*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 4, 4' DINING, MAANDALIZI, POOR,VERY GOOD, VERY GOOD
else if ($text == "2*1*2*4*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 4, 5' DINING, MAANDALIZI, POOR, VERY GOOD, EXCELLENT
else if ($text == "2*1*2*4*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
///BACK TO THE MEALS SERVED RATING
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 5' DINING, MAANDALIZI, POOR,EXCELLENT
else if ($text == "2*1*2*5"){
    $response .= "CON On a scale of 1-5, how would you rate the dining facility? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 5, 1' DINING, MAANDALIZI, POOR, EXCELLENT, VERY POOR
else if ($text == "2*1*2*5*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 5, 2' DINING, MAANDALIZI, POOR, EXCELLENT, POOR
else if ($text == "2*1*2*5*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 5, 3' DINING, MAANDALIZI, POOR, EXCELLENT, SATISFACTORY
else if ($text == "2*1*2*5*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 5, 4' DINING, MAANDALIZI, POOR,EXCELLENT, VERY GOOD
else if ($text == "2*1*2*5*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 2, 5, 5' DINING, MAANDALIZI, POOR, EXCELLENT, EXCELLENT
else if ($text == "2*1*2*5*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}

///BACK TO THE HOSPITALITY TEAM RATING
//IN THE CASE WHERE USER TEXT IS '2, 1, 3' DINING, MAANDALIZI, SATISFACTORY
else if ($text == "2*1*3"){
    $response .= "CON On a scale of 1-5, how would you rate the meals served? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 1' DINING, MAANDALIZI, SATISFACTORY, VERY POOR
else if ($text == "2*1*3*1"){
    $response .= "CON On a scale of 1-5, how would you rate the dining facility? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 1, 1' DINING, MAANDALIZI, SATISFACTORY, VERY POOR, VERY POOR
else if ($text == "2*1*3*1*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 1, 2' DINING, MAANDALIZI, SATISFACTORY, VERY POOR, POOR
else if ($text == "2*1*3*1*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 1, 3' DINING, MAANDALIZI, SATISFACTORY, VERY POOR, SATISFACTORY
else if ($text == "2*1*3*1*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 1, 4' DINING, MAANDALIZI, SATISFACTORY, VERY POOR, VERY GOOD
else if ($text == "2*1*3*1*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 1, 5' DINING, MAANDALIZI, SATISFACTORY, VERY POOR, EXCELLENT
else if ($text == "2*1*3*1*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
///BACK TO THE MEALS SERVED RATING
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 2' DINING, MAANDALIZI, SATISFACTORY, POOR
else if ($text == "2*1*3*2"){
    $response .= "CON On a scale of 1-5, how would you rate the dining facility? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 2, 1' DINING, MAANDALIZI, SATISFACTORY, POOR, VERY POOR
else if ($text == "2*1*3*2*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 2, 2' DINING, MAANDALIZI, SATISFACTORY, POOR, POOR
else if ($text == "2*1*3*2*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 2, 3' DINING, MAANDALIZI, SATISFACTORY, POOR, SATISFACTORY
else if ($text == "2*1*3*2*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 2, 4' DINING, MAANDALIZI, SATISFACTORY, POOR, VERY GOOD
else if ($text == "2*1*3*2*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 2, 5' DINING, MAANDALIZI, SATISFACTORY, POOR, EXCELLENT
else if ($text == "2*1*3*2*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
///BACK TO THE MEALS SERVED RATING
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 3' DINING, MAANDALIZI, SATISFACTORY,SATISFACTORY
else if ($text == "2*1*3*3"){
    $response .= "CON On a scale of 1-5, how would you rate the dining facility? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 3, 1' DINING, MAANDALIZI, SATISFACTORY, SATISFACTORY, VERY POOR
else if ($text == "2*1*3*3*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 3, 2' DINING, MAANDALIZI, SATISFACTORY, SATISFACTORY, POOR
else if ($text == "2*1*3*3*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 3, 3' DINING, MAANDALIZI, SATISFACTORY, SATISFACTORY, SATISFACTORY
else if ($text == "2*1*3*3*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 3, 4' DINING, MAANDALIZI, SATISFACTORY,SATISFACTORY, VERY GOOD
else if ($text == "2*1*3*3*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 3, 5' DINING, MAANDALIZI, SATISFACTORY, SATISFACTORY, EXCELLENT
else if ($text == "2*1*3*3*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
///BACK TO THE MEALS SERVED RATING
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 4' DINING, MAANDALIZI, SATISFACTORY,VERY GOOD
else if ($text == "2*1*3*4"){
    $response .= "CON On a scale of 1-5, how would you rate the dining facility? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 4, 1' DINING, MAANDALIZI, SATISFACTORY, VERY GOOD, VERY POOR
else if ($text == "2*1*3*4*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 4, 2' DINING, MAANDALIZI, SATISFACTORY, VERY GOOD, POOR
else if ($text == "2*1*3*4*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 4, 3' DINING, MAANDALIZI, SATISFACTORY, VERY GOOD, SATISFACTORY
else if ($text == "2*1*3*4*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 4, 4' DINING, MAANDALIZI, SATISFACTORY,VERY GOOD, VERY GOOD
else if ($text == "2*1*3*4*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 4, 5' DINING, MAANDALIZI, SATISFACTORY, VERY GOOD, EXCELLENT
else if ($text == "2*1*3*4*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
///BACK TO THE MEALS SERVED RATING
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 5' DINING, MAANDALIZI, SATISFACTORY,EXCELLENT
else if ($text == "2*1*3*5"){
    $response .= "CON On a scale of 1-5, how would you rate the dining facility? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 5, 1' DINING, MAANDALIZI, SATISFACTORY, EXCELLENT, VERY POOR
else if ($text == "2*1*3*5*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 5, 2' DINING, MAANDALIZI, SATISFACTORY, EXCELLENT, POOR
else if ($text == "2*1*3*5*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 5, 3' DINING, MAANDALIZI, SATISFACTORY, EXCELLENT, SATISFACTORY
else if ($text == "2*1*3*5*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 5, 4' DINING, MAANDALIZI, SATISFACTORY, EXCELLENT, VERY GOOD
else if ($text == "2*1*3*5*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 3, 5, 5' DINING, MAANDALIZI, POOR, EXCELLENT, EXCELLENT
else if ($text == "2*1*3*5*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}

///BACK TO THE HOSPITALITY TEAM RATING
//IN THE CASE WHERE USER TEXT IS '2, 1, 4' DINING, MAANDALIZI, VERY GOOD
else if ($text == "2*1*4"){
    $response .= "CON On a scale of 1-5, how would you rate the meals served? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 1' DINING, MAANDALIZI, VERY GOOD, VERY POOR
else if ($text == "2*1*4*1"){
    $response .= "CON On a scale of 1-5, how would you rate the dining facility? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 1, 1' DINING, MAANDALIZI, VERY GOOD, VERY POOR, VERY POOR
else if ($text == "2*1*4*1*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 1, 2' DINING, MAANDALIZI, VERY GOOD, VERY POOR, POOR
else if ($text == "2*1*4*1*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 1, 3' DINING, MAANDALIZI, VERY GOOD, VERY POOR, SATISFACTORY
else if ($text == "2*1*4*1*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 1, 4' DINING, MAANDALIZI, VERY GOOD, VERY POOR, VERY GOOD
else if ($text == "2*1*4*1*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 1, 5' DINING, MAANDALIZI, VERY GOOD, VERY POOR, EXCELLENT
else if ($text == "2*1*4*1*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
///BACK TO THE MEALS SERVED RATING
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 2' DINING, MAANDALIZI, VERY GOOD, POOR
else if ($text == "2*1*4*2"){
    $response .= "CON On a scale of 1-5, how would you rate the dining facility? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 2, 1' DINING, MAANDALIZI, VERY GOOD, POOR, VERY POOR
else if ($text == "2*1*4*2*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 2, 2' DINING, MAANDALIZI, VERY GOOD, POOR, POOR
else if ($text == "2*1*4*2*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 2, 3' DINING, MAANDALIZI, VERY GOOD, POOR, SATISFACTORY
else if ($text == "2*1*4*2*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 2, 4' DINING, MAANDALIZI, VERY GOOD, POOR, VERY GOOD
else if ($text == "2*1*4*2*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 2, 5' DINING, MAANDALIZI, VERY GOOD, POOR, EXCELLENT
else if ($text == "2*1*4*2*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
///BACK TO THE MEALS SERVED RATING
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 3' DINING, MAANDALIZI, SATISFACTORY,SATISFACTORY
else if ($text == "2*1*4*3"){
    $response .= "CON On a scale of 1-5, how would you rate the dining facility? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 3, 1' DINING, MAANDALIZI, VERY GOOD, SATISFACTORY, VERY POOR
else if ($text == "2*1*4*3*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 3, 2' DINING, MAANDALIZI, VERY GOOD, SATISFACTORY, POOR
else if ($text == "2*1*4*3*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 3, 3' DINING, MAANDALIZI, VERY GOOD, SATISFACTORY, SATISFACTORY
else if ($text == "2*1*4*3*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 3, 4' DINING, MAANDALIZI, VERY GOOD,SATISFACTORY, VERY GOOD
else if ($text == "2*1*4*3*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 3, 5' DINING, MAANDALIZI, VERY GOOD, SATISFACTORY, EXCELLENT
else if ($text == "2*1*4*3*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
///BACK TO THE MEALS SERVED RATING
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 4' DINING, MAANDALIZI, VERY GOOD,VERY GOOD
else if ($text == "2*1*4*4"){
    $response .= "CON On a scale of 1-5, how would you rate the dining facility? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 4, 1' DINING, MAANDALIZI,VERY GOOD, VERY GOOD, VERY POOR
else if ($text == "2*1*4*4*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 4, 2' DINING, MAANDALIZI, VERY GOOD, VERY GOOD, POOR
else if ($text == "2*1*4*4*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 4, 3' DINING, MAANDALIZI, VERY GOOD, VERY GOOD, SATISFACTORY
else if ($text == "2*1*4*4*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 4, 4' DINING, MAANDALIZI, VERY GOOD,VERY GOOD, VERY GOOD
else if ($text == "2*1*4*4*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 4, 5' DINING, MAANDALIZI, VERY GOOD, VERY GOOD, EXCELLENT
else if ($text == "2*1*4*4*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
///BACK TO THE MEALS SERVED RATING
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 5' DINING, MAANDALIZI, VERY GOOD,EXCELLENT
else if ($text == "2*1*4*5"){
    $response .= "CON On a scale of 1-5, how would you rate the dining facility? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 5, 1' DINING, MAANDALIZI, VERY GOOD, EXCELLENT, VERY POOR
else if ($text == "2*1*4*5*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 5, 2' DINING, MAANDALIZI, VERY GOOD, EXCELLENT, POOR
else if ($text == "2*1*4*5*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 5, 3' DINING, MAANDALIZI, VERY GOOD, EXCELLENT, SATISFACTORY
else if ($text == "2*1*4*5*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 5, 4' DINING, MAANDALIZI, VERY GOOD, EXCELLENT, VERY GOOD
else if ($text == "2*1*4*5*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 4, 5, 5' DINING, MAANDALIZI, POOR, EXCELLENT, EXCELLENT
else if ($text == "2*1*4*5*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}

///BACK TO THE HOSPITALITY TEAM RATING
//IN THE CASE WHERE USER TEXT IS '2, 1, 5' DINING, MAANDALIZI, EXCELLENT
else if ($text == "2*1*5"){
    $response .= "CON On a scale of 1-5, how would you rate the meals served? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 1' DINING, MAANDALIZI, EXCELLENT, VERY POOR
else if ($text == "2*1*5*1"){
    $response .= "CON On a scale of 1-5, how would you rate the dining facility? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 1, 1' DINING, MAANDALIZI, EXCELLENT, VERY POOR, VERY POOR
else if ($text == "2*1*5*1*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 1, 2' DINING, MAANDALIZI, EXCELLENT, VERY POOR, POOR
else if ($text == "2*1*5*1*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 1, 3' DINING, MAANDALIZI, EXCELLENT, VERY POOR, SATISFACTORY
else if ($text == "2*1*5*1*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 1, 4' DINING, MAANDALIZI,EXCELLENT, VERY POOR, VERY GOOD
else if ($text == "2*1*5*1*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 1, 5' DINING, MAANDALIZI, EXCELLENT, VERY POOR, EXCELLENT
else if ($text == "2*1*5*1*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
///BACK TO THE MEALS SERVED RATING
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 2' DINING, MAANDALIZI, EXCELLENT, POOR
else if ($text == "2*1*5*2"){
    $response .= "CON On a scale of 1-5, how would you rate the dining facility? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 2, 1' DINING, MAANDALIZI, EXCELLENT, POOR, VERY POOR
else if ($text == "2*1*5*2*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 2, 2' DINING, MAANDALIZI, EXCELLENT, POOR, POOR
else if ($text == "2*1*5*2*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 2, 3' DINING, MAANDALIZI, EXCELLENT, POOR, SATISFACTORY
else if ($text == "2*1*5*2*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 2, 4' DINING, MAANDALIZI, EXCELLENT, POOR, VERY GOOD
else if ($text == "2*1*5*2*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 2, 5' DINING, MAANDALIZI, EXCELLENT, POOR, EXCELLENT
else if ($text == "2*1*5*2*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
///BACK TO THE MEALS SERVED RATING
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 3' DINING, MAANDALIZI, EXCELLENT,SATISFACTORY
else if ($text == "2*1*5*3"){
    $response .= "CON On a scale of 1-5, how would you rate the dining facility? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 3, 1' DINING, MAANDALIZI,EXCELLENT, SATISFACTORY, VERY POOR
else if ($text == "2*1*5*3*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 3, 2' DINING, MAANDALIZI, EXCELLENT, SATISFACTORY, POOR
else if ($text == "2*1*5*3*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 3, 3' DINING, MAANDALIZI, VERY GOOD, SATISFACTORY, SATISFACTORY
else if ($text == "2*1*5*3*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 3, 4' DINING, MAANDALIZI, EXCELLENT,SATISFACTORY, VERY GOOD
else if ($text == "2*1*5*3*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 3, 5' DINING, MAANDALIZI, EXCELLENT, SATISFACTORY, EXCELLENT
else if ($text == "2*1*5*3*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
///BACK TO THE MEALS SERVED RATING
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 4' DINING, MAANDALIZI, VERY GOOD,VERY GOOD
else if ($text == "2*1*5*4"){
    $response .= "CON On a scale of 1-5, how would you rate the dining facility? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 4, 1' DINING, MAANDALIZI,EXCELLENT, VERY GOOD, VERY POOR
else if ($text == "2*1*5*4*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 4, 2' DINING, MAANDALIZI, EXCELLENT, VERY GOOD, POOR
else if ($text == "2*1*5*4*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 4, 3' DINING, MAANDALIZI, EXCELLENT, VERY GOOD, SATISFACTORY
else if ($text == "2*1*5*4*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 4, 4' DINING, MAANDALIZI, EXCELLENT,VERY GOOD, VERY GOOD
else if ($text == "2*1*5*4*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 4, 5' DINING, MAANDALIZI, EXCELLENT, VERY GOOD, EXCELLENT
else if ($text == "2*1*5*4*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
///BACK TO THE MEALS SERVED RATING
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 5' DINING, MAANDALIZI, EXCELLENT,EXCELLENT
else if ($text == "2*1*5*5"){
    $response .= "CON On a scale of 1-5, how would you rate the dining facility? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 5, 1' DINING, MAANDALIZI, EXCELLENT, EXCELLENT, VERY POOR
else if ($text == "2*1*5*5*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 5, 2' DINING, MAANDALIZI, EXCELLENT, EXCELLENT, POOR
else if ($text == "2*1*5*5*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 5, 3' DINING, MAANDALIZI, EXCELLENT, EXCELLENT, SATISFACTORY
else if ($text == "2*1*5*5*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 5, 4' DINING, MAANDALIZI, EXCELLENT, EXCELLENT, VERY GOOD
else if ($text == "2*1*5*5*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
//IN THE CASE WHERE USER TEXT IS '2, 1, 5, 5, 5' DINING, MAANDALIZI, EXCELLENT, EXCELLENT, EXCELLENT
else if ($text == "2*1*5*5*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";
}
/// END OF DINING FEEDBACK SECTION FOR MAANDALIZI

///BEGINNING OF THE OTHER DINING AREA
/////////MENU FOR DINING AREA '2' MARGARET KOBIA
//////LOOP FOR ALL DINING AREAS 2*2
//ACCOMODATION
//IN THE CASE WHERE USER TEXT IS '3' ACCOMODATION, OUTPUT should be as follows
if ($text == "3") {
    $response .= "CON You are about to give feedback on Accomodation \n";
    $response .= "Please select the accomodation venue allocated to you \n";
    $response .= "1. Gateere \n";
    $response .= "2. Mekatilili \n";
    $response .= "3. Sawe \n";
    $response .= "4. Wamalwa \n";
    $response .= "5. Margaret Kobia \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1,' ACCOMODATION, GATEERE
else if ($text == "3*1") {
    $response .= "CON On a scale of 1-5, how would you rate the hospitality team? \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor  \n"; 
    $response .= "3. Satisfactory\n"; 
    $response .= "4. Very good \n"; 
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 1' ACCOMODATION, GATEERE, VERY POOR
else if ($text == "3*1*1"){
    $response .= "CON On a scale of 1-5, how would you rate the room services? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 1' ACCOMODATION, GATEERE, VERY POOR, VERY POOR
else if ($text == "3*1*1*1"){
    $response .= "CON On a scale of 1-5, how would you rate the accomodation facility? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 1, 1' ACCOMODATION, GATEERE, VERY POOR, VERY POOR, VERY POOR
else if ($text == "3*1*1*1*1"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 1, 2' ACCOMODATION, GATEERE, VERY POOR, VERY POOR, POOR
else if ($text == "3*1*1*1*2"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 1, 3' ACCOMODATION, GATEERE, VERY POOR, VERY POOR, SATISFACTORY
else if ($text == "3*1*1*1*3"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    } 
 //IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 1, 4' ACCOMODATION, GATEERE, VERY POOR, VERY POOR, VERY GOOD
else if ($text == "3*1*1*1*4"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 1, 5' ACCOMODATION, GATEERE, VERY POOR, VERY POOR, EXCELLENT
else if ($text == "3*1*1*1*5"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 2' ACCOMODATION, GATEERE, VERY POOR, POOR
else if ($text == "3*1*1*2"){
    $response .= "CON On a scale of 1-5, how would you rate the accomodation facility? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 2, 1' ACCOMODATION, GATEERE, VERY POOR, POOR, VERY POOR
else if ($text == "3*1*1*2*1"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 2, 2' ACCOMODATION, GATEERE, VERY POOR, POOR, POOR
else if ($text == "3*1*1*2*2"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 2, 3' ACCOMODATION, GATEERE, VERY POOR, POOR, SATISFACTORY
else if ($text == "3*1*1*2*3"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    } 
 //IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 2, 4' ACCOMODATION, GATEERE, VERY POOR, POOR, VERY GOOD
else if ($text == "3*1*1*2*4"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 2, 5' ACCOMODATION, GATEERE, VERY POOR, POOR, EXCELLENT
else if ($text == "3*1*1*2*5"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
  //IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 3' ACCOMODATION, GATEERE, VERY POOR, SATISFACTORY
else if ($text == "3*1*1*3"){
    $response .= "CON On a scale of 1-5, how would you rate the accomodation facility? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 3, 1' ACCOMODATION, GATEERE, VERY POOR, SATISFACTORY, VERY POOR
else if ($text == "3*1*1*3*1"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 3, 2' ACCOMODATION, GATEERE, VERY POOR,  SATISFACTORY, POOR
else if ($text == "3*1*1*3*2"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 3, 3' ACCOMODATION, GATEERE, VERY POOR,  SATISFACTORY, SATISFACTORY
else if ($text == "3*1*1*3*3"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    } 
 //IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 3, 4' ACCOMODATION, GATEERE, VERY POOR, SATISFACTORY, VERY GOOD
else if ($text == "3*1*1*3*4"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 3, 5' ACCOMODATION, GATEERE, VERY POOR,  SATISFACTORY, EXCELLENT
else if ($text == "3*1*1*3*5"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
//IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 4' ACCOMODATION, GATEERE, VERY POOR, VERY GOOD
else if ($text == "3*1*1*4"){
    $response .= "CON On a scale of 1-5, how would you rate the accomodation facility? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 4, 1' ACCOMODATION, GATEERE, VERY POOR, VERY GOOD, VERY POOR
else if ($text == "3*1*1*4*1"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 4, 2' ACCOMODATION, GATEERE, VERY POOR,  VERY GOOD, POOR
else if ($text == "3*1*1*4*2"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 4, 3' ACCOMODATION, GATEERE, VERY POOR,  VERY GOOD, SATISFACTORY
else if ($text == "3*1*1*4*3"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    } 
 //IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 4, 4' ACCOMODATION, GATEERE, VERY POOR, VERY GOOD, VERY GOOD
else if ($text == "3*1*1*4*4"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 4, 5' ACCOMODATION, GATEERE, VERY POOR,  VERY GOOD, EXCELLENT
else if ($text == "3*1*1*4*5"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 5' ACCOMODATION, GATEERE, VERY POOR, EXCELLENT
else if ($text == "3*1*1*5"){
    $response .= "CON On a scale of 1-5, how would you rate the accomodation facility? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 5, 1' ACCOMODATION, GATEERE, VERY POOR, EXCELLENT, VERY POOR
else if ($text == "3*1*1*5*1"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 5, 2' ACCOMODATION, GATEERE, VERY POOR, EXCELLENT, POOR
else if ($text == "3*1*1*5*2"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 5, 3' ACCOMODATION, GATEERE, VERY POOR,  EXCELLENT, SATISFACTORY
else if ($text == "3*1*1*5*3"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    } 
 //IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 5, 4' ACCOMODATION, GATEERE, VERY POOR, EXCELLENT, VERY GOOD
else if ($text == "3*1*1*5*4"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 1 , 5, 5' ACCOMODATION, GATEERE, VERY POOR, EXCELLENT, EXCELLENT
else if ($text == "3*1*1*5*5"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //BACK TO THE HOSPITALITY TEAM RATING RESPONSES
//IN THE CASE WHERE USER TEXT IS '3, 1, 2' ACCOMODATION, GATEERE, POOR
else if ($text == "3*1*2"){
    $response .= "CON On a scale of 1-5, how would you rate the room services? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 1' ACCOMODATION, GATEERE, POOR, VERY POOR
else if ($text == "3*1*2*1"){
    $response .= "CON On a scale of 1-5, how would you rate the accomodation facility? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 1, 1' ACCOMODATION, GATEERE, POOR, VERY POOR, VERY POOR
else if ($text == "3*1*2*1*1"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 1, 2' ACCOMODATION, GATEERE, POOR, VERY POOR, POOR
else if ($text == "3*1*2*1*2"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 1, 3' ACCOMODATION, GATEERE, POOR, VERY POOR, SATISFACTORY
else if ($text == "3*1*2*1*3"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    } 
 //IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 1, 4' ACCOMODATION, GATEERE, POOR, VERY POOR, VERY GOOD
else if ($text == "3*1*2*1*4"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 1, 5' ACCOMODATION, GATEERE, POOR, VERY POOR, EXCELLENT
else if ($text == "3*1*2*1*5"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 2' ACCOMODATION, GATEERE, POOR, POOR
else if ($text == "3*1*2*2"){
    $response .= "CON On a scale of 1-5, how would you rate the accomodation facility? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 2, 1' ACCOMODATION, GATEERE, POOR, POOR, VERY POOR
else if ($text == "3*1*2*2*1"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 2, 2' ACCOMODATION, GATEERE, POOR, POOR, POOR
else if ($text == "3*1*2*2*2"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 2, 3' ACCOMODATION, GATEERE, POOR, POOR, SATISFACTORY
else if ($text == "3*1*2*2*3"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    } 
 //IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 2, 4' ACCOMODATION, GATEERE, POOR, POOR, VERY GOOD
else if ($text == "3*1*2*2*4"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 2, 5' ACCOMODATION, GATEERE, POOR, POOR, EXCELLENT
else if ($text == "3*1*2*2*5"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
  //IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 3' ACCOMODATION, GATEERE, POOR, SATISFACTORY
else if ($text == "3*1*2*3"){
    $response .= "CON On a scale of 1-5, how would you rate the accomodation facility? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 3, 1' ACCOMODATION, GATEERE, POOR, SATISFACTORY, VERY POOR
else if ($text == "3*1*2*3*1"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 3, 2' ACCOMODATION, GATEERE, POOR,  SATISFACTORY, POOR
else if ($text == "3*1*2*3*2"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 3, 3' ACCOMODATION, GATEERE, POOR,  SATISFACTORY, SATISFACTORY
else if ($text == "3*1*2*3*3"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    } 
 //IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 3, 4' ACCOMODATION, GATEERE, POOR, SATISFACTORY, VERY GOOD
else if ($text == "3*1*2*3*4"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 3, 5' ACCOMODATION, GATEERE, POOR,  SATISFACTORY, EXCELLENT
else if ($text == "3*1*2*3*5"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
//IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 4' ACCOMODATION, GATEERE, POOR, VERY GOOD
else if ($text == "3*1*2*4"){
    $response .= "CON On a scale of 1-5, how would you rate the accomodation facility? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 4, 1' ACCOMODATION, GATEERE, POOR, VERY GOOD, VERY POOR
else if ($text == "3*1*2*4*1"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 4, 2' ACCOMODATION, GATEERE, POOR,  VERY GOOD, POOR
else if ($text == "3*1*2*4*2"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 4, 3' ACCOMODATION, GATEERE, POOR,  VERY GOOD, SATISFACTORY
else if ($text == "3*1*2*4*3"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    } 
 //IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 4, 4' ACCOMODATION, GATEERE, POOR, VERY GOOD, VERY GOOD
else if ($text == "3*1*2*4*4"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 4, 5' ACCOMODATION, GATEERE, POOR,  VERY GOOD, EXCELLENT
else if ($text == "3*1*2*4*5"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 5' ACCOMODATION, GATEERE, POOR, EXCELLENT
else if ($text == "3*1*2*5"){
    $response .= "CON On a scale of 1-5, how would you rate the accomodation facility? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 5, 1' ACCOMODATION, GATEERE, POOR, EXCELLENT, VERY POOR
else if ($text == "3*1*2*5*1"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 5, 2' ACCOMODATION, GATEERE, POOR, EXCELLENT, POOR
else if ($text == "3*1*2*5*2"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 5, 3' ACCOMODATION, GATEERE, POOR,  EXCELLENT, SATISFACTORY
else if ($text == "3*1*2*5*3"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    } 
 //IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 5, 4' ACCOMODATION, GATEERE, POOR, EXCELLENT, VERY GOOD
else if ($text == "3*1*2*5*4"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 2 , 5, 5' ACCOMODATION, GATEERE, POOR, EXCELLENT, EXCELLENT
else if ($text == "3*1*2*5*5"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //BACK TO THE HOSPITALITY TEAM RATING RESPONSES
//IN THE CASE WHERE USER TEXT IS '3, 1, 3' ACCOMODATION, GATEERE, SATISFACTORY
else if ($text == "3*1*3"){
    $response .= "CON On a scale of 1-5, how would you rate the room services? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 1' ACCOMODATION, GATEERE, SATISFACTORY, VERY POOR
else if ($text == "3*1*3*1"){
    $response .= "CON On a scale of 1-5, how would you rate the accomodation facility? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 1, 1' ACCOMODATION, GATEERE, SATISFACTORY, VERY POOR, VERY POOR
else if ($text == "3*1*3*1*1"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 1, 2' ACCOMODATION, GATEERE, SATISFACTORY, VERY POOR, POOR
else if ($text == "3*1*3*1*2"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 1, 3' ACCOMODATION, GATEERE, SATISFACTORY, VERY POOR, SATISFACTORY
else if ($text == "3*1*3*1*3"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    } 
 //IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 1, 4' ACCOMODATION, GATEERE,SATISFACTORY, VERY POOR, VERY GOOD
else if ($text == "3*1*3*1*4"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 1, 5' ACCOMODATION, GATEERE, SATISFACTORY, VERY POOR, EXCELLENT
else if ($text == "3*1*3*1*5"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 2' ACCOMODATION, GATEERE, SATISFACTORY, POOR
else if ($text == "3*1*3*2"){
    $response .= "CON On a scale of 1-5, how would you rate the accomodation facility? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 2, 1' ACCOMODATION, GATEERE, SATISFACTORY, POOR, VERY POOR
else if ($text == "3*1*3*2*1"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 2, 2' ACCOMODATION, GATEERE, SATISFACTORY, POOR, POOR
else if ($text == "3*1*3*2*2"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 2, 3' ACCOMODATION, GATEERE, SATISFACTORY, POOR, SATISFACTORY
else if ($text == "3*1*3*2*3"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    } 
 //IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 2, 4' ACCOMODATION, GATEERE, SATISFACTORY, POOR, VERY GOOD
else if ($text == "3*1*3*2*4"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 2, 5' ACCOMODATION, GATEERE, SATISFACTORY, POOR, EXCELLENT
else if ($text == "3*1*3*2*5"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
  //IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 3' ACCOMODATION, GATEERE, SATISFACTORY, SATISFACTORY
else if ($text == "3*1*3*3"){
    $response .= "CON On a scale of 1-5, how would you rate the accomodation facility? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 3, 1' ACCOMODATION, GATEERE,SATISFACTORY, SATISFACTORY, VERY POOR
else if ($text == "3*1*3*3*1"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 3, 2' ACCOMODATION, GATEERE, SATISFACTORY,  SATISFACTORY, POOR
else if ($text == "3*1*3*3*2"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 3, 3' ACCOMODATION, GATEERE, SATISFACTORY,  SATISFACTORY, SATISFACTORY
else if ($text == "3*1*3*3*3"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    } 
 //IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 3, 4' ACCOMODATION, GATEERE, SATISFACTORY, SATISFACTORY, VERY GOOD
else if ($text == "3*1*3*3*4"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 3, 5' ACCOMODATION, GATEERE,SATISFACTORY,  SATISFACTORY, EXCELLENT
else if ($text == "3*1*3*3*5"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
//IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 4' ACCOMODATION, GATEERE, SATISFACTORY, VERY GOOD
else if ($text == "3*1*3*4"){
    $response .= "CON On a scale of 1-5, how would you rate the accomodation facility? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 4, 1' ACCOMODATION, GATEERE, SATISFACTORY, VERY GOOD, VERY POOR
else if ($text == "3*1*3*4*1"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 4, 2' ACCOMODATION, GATEERE,SATISFACTORY,  VERY GOOD, POOR
else if ($text == "3*1*3*4*2"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 4, 3' ACCOMODATION, GATEERE, SATISFACTORY,  VERY GOOD, SATISFACTORY
else if ($text == "3*1*3*4*3"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    } 
 //IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 4, 4' ACCOMODATION, GATEERE, SATISFACTORY, VERY GOOD, VERY GOOD
else if ($text == "3*1*3*4*4"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 4, 5' ACCOMODATION, GATEERE,SATISFACTORY,  VERY GOOD, EXCELLENT
else if ($text == "3*1*3*4*5"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 5' ACCOMODATION, GATEERE, SATISFACTORY, EXCELLENT
else if ($text == "3*1*3*5"){
    $response .= "CON On a scale of 1-5, how would you rate the accomodation facility? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 5, 1' ACCOMODATION, GATEERE, SATISFACTORY, EXCELLENT, VERY POOR
else if ($text == "3*1*3*5*1"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 5, 2' ACCOMODATION, GATEERE, SATISFACTORY, EXCELLENT, POOR
else if ($text == "3*1*3*5*2"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 5, 3' ACCOMODATION, GATEERE, SATISFACTORY,  EXCELLENT, SATISFACTORY
else if ($text == "3*1*3*5*3"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    } 
 //IN THE CASE WHERE USER TEXT IS '3, 1, 3 , 5, 4' ACCOMODATION, GATEERE, SATISFACTORY, EXCELLENT, VERY GOOD
else if ($text == "3*1*3*5*4"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 3, 5, 5' ACCOMODATION, GATEERE, SATISFACTORY, EXCELLENT, EXCELLENT
else if ($text == "3*1*3*5*5"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //BACK TO THE HOSPITALITY TEAM RATING RESPONSES
//IN THE CASE WHERE USER TEXT IS '3, 1, 4' ACCOMODATION, GATEERE, VERY GOOD
else if ($text == "3*1*4"){
    $response .= "CON On a scale of 1-5, how would you rate the room services? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 1' ACCOMODATION, GATEERE, VERY GOOD, VERY POOR
else if ($text == "3*1*4*1"){
    $response .= "CON On a scale of 1-5, how would you rate the accomodation facility? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 1, 1' ACCOMODATION, GATEERE, VERY GOOD, VERY POOR, VERY POOR
else if ($text == "3*1*4*1*1"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 1, 2' ACCOMODATION, GATEERE, VERY GOOD, VERY POOR, POOR
else if ($text == "3*1*4*1*2"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 1, 3' ACCOMODATION, GATEERE, VERY GOOD, VERY POOR, SATISFACTORY
else if ($text == "3*1*4*1*3"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    } 
 //IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 1, 4' ACCOMODATION, GATEERE,VERY GOOD, VERY POOR, VERY GOOD
else if ($text == "3*1*4*1*4"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 1, 5' ACCOMODATION, GATEERE, VERY GOOD, VERY POOR, EXCELLENT
else if ($text == "3*1*4*1*5"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 2' ACCOMODATION, GATEERE, VERY GOOD, POOR
else if ($text == "3*1*4*2"){
    $response .= "CON On a scale of 1-5, how would you rate the accomodation facility? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 2, 1' ACCOMODATION, GATEERE, VERY GOOD, POOR, VERY POOR
else if ($text == "3*1*4*2*1"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 2, 2' ACCOMODATION, GATEERE, VERY GOOD, POOR, POOR
else if ($text == "3*1*4*2*2"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 2, 3' ACCOMODATION, GATEERE, VERY GOOD, POOR, SATISFACTORY
else if ($text == "3*1*4*2*3"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    } 
 //IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 2, 4' ACCOMODATION, GATEERE, VERY GOOD, POOR, VERY GOOD
else if ($text == "3*1*4*2*4"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 2, 5' ACCOMODATION, GATEERE, VERY GOOD, POOR, EXCELLENT
else if ($text == "3*1*4*2*5"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
  //IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 3' ACCOMODATION, GATEERE, VERY GOOD, SATISFACTORY
else if ($text == "3*1*4*3"){
    $response .= "CON On a scale of 1-5, how would you rate the accomodation facility? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 3, 1' ACCOMODATION, GATEERE,VERY GOOD, SATISFACTORY, VERY POOR
else if ($text == "3*1*4*3*1"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 3, 2' ACCOMODATION, GATEERE, VERY GOOD,  SATISFACTORY, POOR
else if ($text == "3*1*4*3*2"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 3, 3' ACCOMODATION, GATEERE, VERY GOOD,  SATISFACTORY, SATISFACTORY
else if ($text == "3*1*4*3*3"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    } 
 //IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 3, 4' ACCOMODATION, GATEERE, VERY GOOD, SATISFACTORY, VERY GOOD
else if ($text == "3*1*4*3*4"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 3, 5' ACCOMODATION, GATEERE,VERY GOOD,  SATISFACTORY, EXCELLENT
else if ($text == "3*1*4*3*5"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
//IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 4' ACCOMODATION, GATEERE, VERY GOOD, VERY GOOD
else if ($text == "3*1*4*4"){
    $response .= "CON On a scale of 1-5, how would you rate the accomodation facility? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 4, 1' ACCOMODATION, GATEERE, VERY GOOD, VERY GOOD, VERY POOR
else if ($text == "3*1*4*4*1"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 4, 2' ACCOMODATION, GATEERE,VERY GOOD,  VERY GOOD, POOR
else if ($text == "3*1*4*4*2"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 4, 3' ACCOMODATION, GATEERE, VERY GOOD,  VERY GOOD, SATISFACTORY
else if ($text == "3*1*4*4*3"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    } 
 //IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 4, 4' ACCOMODATION, GATEERE, VERY GOOD, VERY GOOD, VERY GOOD
else if ($text == "3*1*4*4*4"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 4, 5' ACCOMODATION, GATEERE,VERY GOOD,  VERY GOOD, EXCELLENT
else if ($text == "3*1*4*4*5"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 5' ACCOMODATION, GATEERE, VERY GOOD, EXCELLENT
else if ($text == "3*1*4*5"){
    $response .= "CON On a scale of 1-5, how would you rate the accomodation facility? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 5, 1' ACCOMODATION, GATEERE, VERY GOOD, EXCELLENT, VERY POOR
else if ($text == "3*1*4*5*1"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 5, 2' ACCOMODATION, GATEERE, VERY GOOD, EXCELLENT, POOR
else if ($text == "3*1*4*5*2"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 5, 3' ACCOMODATION, GATEERE, VERY GOOD,  EXCELLENT, SATISFACTORY
else if ($text == "3*1*4*5*3"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    } 
 //IN THE CASE WHERE USER TEXT IS '3, 1, 4 , 5, 4' ACCOMODATION, GATEERE, VERY GOOD, EXCELLENT, VERY GOOD
else if ($text == "3*1*4*5*4"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 4, 5, 5' ACCOMODATION, GATEERE, VERY GOOD, EXCELLENT, EXCELLENT
else if ($text == "3*1*4*5*5"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
  //BACK TO THE HOSPITALITY TEAM RATING RESPONSES
//IN THE CASE WHERE USER TEXT IS '3, 1, 5' ACCOMODATION, GATEERE, EXCELLENT
else if ($text == "3*1*5"){
    $response .= "CON On a scale of 1-5, how would you rate the room services? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 1' ACCOMODATION, GATEERE, EXCELLENT, VERY POOR
else if ($text == "3*1*5*1"){
    $response .= "CON On a scale of 1-5, how would you rate the accomodation facility? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 1, 1' ACCOMODATION, GATEERE, EXCELLENT, VERY POOR, VERY POOR
else if ($text == "3*1*5*1*1"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 1, 2' ACCOMODATION, GATEERE, EXCELLENT, VERY POOR, POOR
else if ($text == "3*1*5*1*2"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 1, 3' ACCOMODATION, GATEERE, EXCELLENT, VERY POOR, SATISFACTORY
else if ($text == "3*1*5*1*3"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    } 
 //IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 1, 4' ACCOMODATION, GATEERE,EXCELLENT, VERY POOR, VERY GOOD
else if ($text == "3*1*5*1*4"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 1, 5' ACCOMODATION, GATEERE, EXCELLENT, VERY POOR, EXCELLENT
else if ($text == "3*1*5*1*5"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 2' ACCOMODATION, GATEERE, EXCELLENT, POOR
else if ($text == "3*1*5*2"){
    $response .= "CON On a scale of 1-5, how would you rate the accomodation facility? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 2, 1' ACCOMODATION, GATEERE, EXCELLENT, POOR, VERY POOR
else if ($text == "3*1*5*2*1"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 2, 2' ACCOMODATION, GATEERE, EXCELLENT, POOR, POOR
else if ($text == "3*1*5*2*2"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 2, 3' ACCOMODATION, GATEERE, EXCELLENT, POOR, SATISFACTORY
else if ($text == "3*1*5*2*3"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    } 
 //IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 2, 4' ACCOMODATION, GATEERE, EXCELLENT, POOR, VERY GOOD
else if ($text == "3*1*5*2*4"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 2, 5' ACCOMODATION, GATEERE, EXCELLENT, POOR, EXCELLENT
else if ($text == "3*1*5*2*5"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
  //IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 3' ACCOMODATION, GATEERE, EXCELLENT, SATISFACTORY
else if ($text == "3*1*5*3"){
    $response .= "CON On a scale of 1-5, how would you rate the accomodation facility? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 3, 1' ACCOMODATION, GATEERE,EXCELLENT, SATISFACTORY, VERY POOR
else if ($text == "3*1*5*3*1"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 3, 2' ACCOMODATION, GATEERE,EXCELLENT,  SATISFACTORY, POOR
else if ($text == "3*1*5*3*2"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 3, 3' ACCOMODATION, GATEERE, EXCELLENT,  SATISFACTORY, SATISFACTORY
else if ($text == "3*1*5*3*3"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    } 
 //IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 3, 4' ACCOMODATION, GATEERE,EXCELLENT, SATISFACTORY, VERY GOOD
else if ($text == "3*1*5*3*4"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 3, 5' ACCOMODATION, GATEERE,EXCELLENT,  SATISFACTORY, EXCELLENT
else if ($text == "3*1*5*3*5"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
//IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 4' ACCOMODATION, GATEERE, EXCELLENT, VERY GOOD
else if ($text == "3*1*5*4"){
    $response .= "CON On a scale of 1-5, how would you rate the accomodation facility? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 4, 1' ACCOMODATION, GATEERE, EXCELLENT, VERY GOOD, VERY POOR
else if ($text == "3*1*5*4*1"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 4, 2' ACCOMODATION, GATEERE,EXCELLENT,  VERY GOOD, POOR
else if ($text == "3*1*5*4*2"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 4, 3' ACCOMODATION, GATEERE, EXCELLENT,  VERY GOOD, SATISFACTORY
else if ($text == "3*1*5*4*3"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    } 
 //IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 4, 4' ACCOMODATION, GATEERE, EXCELLENT, VERY GOOD, VERY GOOD
else if ($text == "3*1*5*4*4"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 4, 5' ACCOMODATION, GATEERE,EXCELLENT,  VERY GOOD, EXCELLENT
else if ($text == "3*1*5*4*5"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 5' ACCOMODATION, GATEERE, EXCELLENT, EXCELLENT
else if ($text == "3*1*5*5"){
    $response .= "CON On a scale of 1-5, how would you rate the accomodation facility? \n";
    $response .= "1. Very poor \n";
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 5, 1' ACCOMODATION, GATEERE, EXCELLENT, EXCELLENT, VERY POOR
else if ($text == "3*1*5*5*1"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 5, 2' ACCOMODATION, GATEERE, EXCELLENT, EXCELLENT, POOR
else if ($text == "3*1*5*5*2"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
 //IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 5, 3' ACCOMODATION, GATEERE, EXCELLENT,  EXCELLENT, SATISFACTORY
else if ($text == "3*1*5*5*3"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    } 
 //IN THE CASE WHERE USER TEXT IS '3, 1, 5 , 5, 4' ACCOMODATION, GATEERE, EXCELLENT, EXCELLENT, VERY GOOD
else if ($text == "3*1*5*5*4"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }
   //IN THE CASE WHERE USER TEXT IS '3, 1, 5, 5, 5' ACCOMODATION, GATEERE, EXCELLENT, EXCELLENT, EXCELLENT
else if ($text == "3*1*5*5*5"){
    $response .= "END Thank you. Your feedback has been recorded. \n";
    }  
 /// END OF ACCODATION FEEDBACK SECTION FOR GATEERE

////BACK TO THE HOSTELS MENU
//////LOOP FOR ALL ACCOMODATION AREAS 3*2, 3*3, 3*4 and 3*5
///BEGINNING OF THE OTHER ACCOMDATION AREAS
//IN THE CASE WHERE USER TEXT IS '3, 2,' ACCOMODATION, MEKATILILI
/////////MENU FOR ACCOMODATION AREA '2' MEKATILILI 
//END OF ACCOMODATION FEEDBACK SECTION
//BEGINNING OF FEEDBACK ON CCONFERENCING
//IN THE CASE WHERE USER TEXT IS '4' CONFERENCING, OUTPUT should be as follows
if ($text == "4") {
    $response .= "CON You are about to give feedback on Conferencing \n";
    $response .= "Have you used any of our conferencing facilities? (Auditorim or Conference Centers) \n";
    $response .= "1. YES \n";
    $response .= "2. NO \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '4, 1,' CONFERENCING, YES
else if ($text == "4*1") {
    $response .= "CON On a scale of 1-5, how would you rate the facilities \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '4, 1,1' CONFERENCING, YES, VERY POOR
else if ($text == "4*1*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";    
}  
//IN THE CASE WHERE USER TEXT IS '4, 1,2' CONFERENCING, YES, POOR
else if ($text == "4*1*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";    
}
 //IN THE CASE WHERE USER TEXT IS '4, 1,3' CONFERENCING, YES, SATISFACTORY
else if ($text == "4*1*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";    
}
//IN THE CASE WHERE USER TEXT IS '4, 1,4' CONFERENCING, YES, VERY GOOD
else if ($text == "4*1*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";    
} 
//IN THE CASE WHERE USER TEXT IS '4, 1,5' CONFERENCING, YES, EXCELLENT
else if ($text == "4*1*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";    
}
//BACK TO CONFERENCING MENU
 //IN THE CASE WHERE USER TEXT IS '4, 2,' CONFERENCING, NO
else if ($text == "4*2") {
    $response .= "END Thank you for visiting The Kenya School of Government. \n";
}  
//END OF CONFERENCING FEEDBACK
////BEGINNING OF LIBRARY SERVICES FEEDBACK
if ($text == "5") {
    $response .= "CON You are about to give feedback on Library Services \n";
    $response .= "Have you visited the school library \n";
    $response .= "1. YES \n";
    $response .= "2. NO \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '5, 1,' LIBRARY SERVICES, YES
else if ($text == "5*1") {
    $response .= "CON On a scale of 1-5, how would you rate the facility \n";
    $response .= "1. Very poor \n"; 
    $response .= "2. Poor \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Very good \n";
    $response .= "5. Excellent \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '5, 1,1' LIBRARY SERVICES, YES, VERY POOR
else if ($text == "5*1*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";    
}  
//IN THE CASE WHERE USER TEXT IS '5, 1,2' LIBRARY SERVICES, YES, POOR
else if ($text == "5*1*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";    
}
 //IN THE CASE WHERE USER TEXT IS '5, 1,3' LIBRARY SERVICES, YES, SATISFACTORY
else if ($text == "5*1*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";    
}
//IN THE CASE WHERE USER TEXT IS '5, 1,4' LIBRARY SERVICES, YES, VERY GOOD
else if ($text == "5*1*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";    
} 
//IN THE CASE WHERE USER TEXT IS '5, 1,5' LIBRARY SERVICES, YES, EXCELLENT
else if ($text == "5*1*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";    
}
//BACK TO LIBRARY SERVICES MENU
 //IN THE CASE WHERE USER TEXT IS '5, 2,' LIBRARY SERVICES, NO
 else if ($text == "5*2") {
    $response .= "END Thank you for visiting The Kenya School of Government. \n";
}  
//END OF LIBRARY SERVICES FEEDBACK

///BEGINNING OF SECURITY FEEDBACK SECTION
if ($text == "6") {
    $response .= "CON You are about to give feedback on Security \n";
    $response .= "On a scale of 1-5, how would you rate the school security and application of the COVID-19 Government guidelines? \n";
    $response .= "1. Very unsafe \n";
    $response .= "2. Not safe \n";
    $response .= "3. Satisfactory \n";
    $response .= "4. Safe \n";
    $response .= "5. Very safe \n";
    $response .= "0. Back \n";
    $response .= " \n";
    $response .= "00. Main Menu \n";
    $response .= "000. End Session \n";
}
//IN THE CASE WHERE USER TEXT IS '6, 1,' SECURITY, VERY UNSAFE
else if ($text == "6*1") {
    $response .= "END Thank you. Your feedback has been recorded. \n";    
}
//IN THE CASE WHERE USER TEXT IS '6, 2' SECURITY, NOT SAFE
else if ($text == "6*2") {
    $response .= "END Thank you. Your feedback has been recorded. \n";    
}  
//IN THE CASE WHERE USER TEXT IS '6, 3' SECURITY, SATISFACTORY
else if ($text == "6*3") {
    $response .= "END Thank you. Your feedback has been recorded. \n";    
}
 //IN THE CASE WHERE USER TEXT IS '6, 4' SECURITY, SAFE
else if ($text == "6*4") {
    $response .= "END Thank you. Your feedback has been recorded. \n";    
}
//IN THE CASE WHERE USER TEXT IS '6, 5' SECURITY, VERY SAFE
else if ($text == "6*5") {
    $response .= "END Thank you. Your feedback has been recorded. \n";    
}
//END OF SECURITY FEEDBACK SECTION 


// echo response
header('Content-type: text/plain');
echo $response
?>
