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
// echo response
header('Content-type: text/plain');
echo $response
?>
