<?php

// a file to demonstrate the wworkings of an array

// declare a single array
// $aSimpleArray = array("green", "red", "yellow", "cyan", "aqua", "purple", "gold", "white", "black", "azure", "orange", "lightsteelblue");
$aComplexArray = array();
$aComplexArray[0] = array("Jan", "Peters", "Heerlen");
$aComplexArray[1] = array("Karel", "Appel", "Amsterdam");
$aComplexArray[2] = array("Piet", "Klaasen", "Rotterdam");
$aComplexArray[3] = array("Mieke", "Helgers", "Brunssum");
// $aComplexArray[4] = "green";
// $aComplexArray[5] = "aqua";
// $aComplexArray[6] = "purple";
// $aComplexArray[7] = "gold";
// $aComplexArray[8] = "white";
// $aComplexArray[9] = "black";
// $aComplexArray[10] = "azure";
// $aComplexArray[11] = "orange";
// $aComplexArray[12] = "lightsteelblue";

// dump the cntent of the array
// var_dump($aSimpleArray);

// start a table
echo("<table border='1'>");
echo("<tr>
    <th>num:</th>
    <th>Voornaam:</th>
    <th>Achternaam:</th>
    <th>Woonplaats:</th>
</tr>");
// loop thru the complex array
foreach($aComplexArray as $iKey ++ 1 =>$aContentArray) {
    echo("<tr><td>$iKey</td><td>.$aContentArray[0].</td><td>.$aContentArray[1].</td><td>.$aContentArray[2].</td></tr>");
}
echo("</table>")
// end table

// make a line screenwide
// echo ("<hr>");

// loop thrue the array with a counter
// $iElementCounter = count($aSimpleArray);
// declare a variable; do while < element count; increase by 1

// combine text with the contet of the collor array
// for ($iLoopCounter=0; $iLoopCounter < $iElementCounter; $iLoopCounter++) {  
//     echo("<p style='color:".$aSimpleArray[$iLoopCounter].";'>this is the color: ".$aSimpleArray[$iLoopCounter]."</p><br>");
// }

?>