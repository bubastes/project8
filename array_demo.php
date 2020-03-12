<?php
    // PHP always on top of the page
    // A function to save an array to a file
    // @Parameter: $p_aSavedArray
    // Type: array
    // Description: The array to be saved to a file
    function SaveArray($p_aSavedArray) {
        // Use JSON to encode the array into a storeable string
        $aJSONArray = json_encode($p_aSavedArray);

        // Open the file in 'write' modus
        $file = fopen('database.json','w');    

        // Save the content of the JSON array into the file
        file_put_contents('database.json', $aJSONArray);  

        // Close the file
        fclose($file);
    }

    // A function to load an array from a file
    // @ Parameter: none
    function LoadArray()
    {
        // Open the file in 'read' modus
        $file = fopen('database.json','r');

        // Read the JSON array from the file
        $aJSONArray = file_get_contents('database.json');  

        // Convert to JSON array back to a PHP array
        $aReadArray = json_decode($aJSONArray,TRUE);

        // Close the file again            
        fclose($file);

        // send the loaded data to the main
        return($aReadArray);

        // Dump the content of the array on the screen
        // var_dump($aReadArray);

    }

    // clears the database file
    function CreatArray()
    {
        $file = fopen('database.json', 'w');
        file_put_contents('');
        fclose($file);
    }

    if(!empty($_POST)){
        var_dump($_POST);
        $dDate                              = $_POST['dDate'];
        $sUitgevoerd                        = $_POST['sUitgevoerd'];
        $sDeskundige                        = $_POST['sDeskundige'];

        $aCheckboxes = array("bHaakhoogte","bTeleskoopgiek_delen","bGieklengte_m","bOpbouwgiek_m","bTopbaar_gr","bHulpgiek_m","bMet_loopkat","bRailstellen",
        "bKniklek","bWendbare_giek","bRijdend","bMonogiek","bStationair","bfly_jib_delen","bIngietframe","bStempels","bVrijstaand","bDozerblad","bOpTruck",
        "bWegRuwterijn","bOpRupsen","bTekortkomingen");
        $aBooleansCheackboxes = array();
        foreach($aCheckboxes as $sCheckboxName){
            if(!empty($_POST[$sCheckboxName])){
                $aBooleansCheackboxes[$sCheckboxName]  = TRUE;
            }else{
                $aBooleansCheackboxes[$sCheckboxName]  = FALSE;
            }
        } // End foreach
        // $bTeleskoopgiek_delen               = $_POST['bTeleskoopgiek_delen'];
        // $bGieklengte_m                      = $_POST['bGieklengte_m'];
        // $bOpbouwgiek_m                      = $_POST['bOpbouwgiek_m'];
        // $bTopbaar_gr                        = $_POST['bTopbaar_gr'];
        // $bHulpgiek_m                        = $_POST['bHulpgiek_m'];
        // $bMet_loopkat                       = $_POST['bMet_loopkat'];
        // $bRailstellen                       = $_POST['bRailstellen'];
        // $bKniklek                           = $_POST['bKniklek'];
        // $bWendbare_giek                     = $_POST['bWendbare_giek'];
        // $bRijdend                           = $_POST['bRijdend'];
        // $bMonogiek                          = $_POST['bMonogiek'];
        // $sMonogiek                          = $_POST['sMonogiek'];
        // $bStationair                        = $_POST['bStationair'];
        // $bfly_jib_delen                     = $_POST['bfly_jib_delen'];
        // $ifly_jib_delen                     = $_POST['ifly_jib_delen'];
        // $bIngietframe                       = $_POST['bIngietframe'];
        // $bStempels                          = $_POST['bStempels'];
        // $bVrijstaand                        = $_POST['bVrijstaand'];
        // $bDozerblad                         = $_POST['bDozerblad'];

        $iHijskraanFabrikant                = $_POST['iHijskraanFabrikant'];
        $iOnderwagenFabrikant               = $_POST['iOnderwagenFabrikant'];
        $iOnderwagenFabrikant               = $_POST['iOnderwagenFabrikant'];
        $iOnderwagenFabrikant               = $_POST['iOnderwagenFabrikant'];
        $iOnderwagenFabrikant               = $_POST['iOnderwagenFabrikant'];
        
        // $bZelfrijdend                       = $_POST['bZelfrijdend'];
        // $bOpTruck                           = $_POST['bOpTruck'];
        // $bWegRuwterijn                      = $_POST['bWegRuwterijn'];
        // $bOpRupsen                          = $_POST['bOpRupsen'];

        // $bTekortkomingen                    = $_POST['bTekortkomingen'];
        $dAfmeldenVoor                      = $_POST['dAfmeldenVoor'];
        $sDirecte_voorzieningen             = $_POST['sDirecte_voorzieningen'];
        $sToelichting                       = $_POST['sToelichting'];
        
        // load the database
        $aDatabase = LoadArray();
        $iRecordCounter = count($aDatabase);
        // 
        $aDatabase[$iRecordCounter] = array($dDate,$sUitgevoerd,$sDeskundige,$aBooleansCheackboxes[0],$aBooleansCheackboxes[1],$aBooleansCheackboxes[2],
        $aBooleansCheackboxes[3],$aBooleansCheackboxes[4],$aBooleansCheackboxes[5],$aBooleansCheackboxes[6],$aBooleansCheackboxes[7],$aBooleansCheackboxes[8],
        $aBooleansCheackboxes[7],$aBooleansCheackboxes[9],$aBooleansCheackboxes[10],$aBooleansCheackboxes[11],$aBooleansCheackboxes[12],$aBooleansCheackboxes[13],
        $aBooleansCheackboxes[14],$aBooleansCheackboxes[15],$aBooleansCheackboxes[16],$aBooleansCheackboxes[17],$aBooleansCheackboxes[18],
        $aBooleansCheackboxes[19],$aBooleansCheackboxes[20],$ifly_jib_delen,$iHijskraanFabrikant,$iOnderwagenFabrikant,$iOnderwagenFabrikant,
        $iOnderwagenFabrikant,$iOnderwagenFabrikant,$dAfmeldenVoor,$sDirecte_voorzieningen,$sToelichting);
        // save the array to a file
        SaveArray($aDatabase);
    }

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
    //php database input
    if(file_exists('database.json')) {                                          //if the database exists
        $aDatabase = LoadArray();                                               //load the database
        // loop thru the complex array                      
        foreach($aDatabase as $iKey =>$aContentArray) {                         //execute the following for every entry in the database
            echo("<tr><td class='data'>$iKey</td>
                <td class='data'>$aContentArray[0]</td>
                <td class='data'>$aContentArray[1]</td>
                <td class='data'>$aContentArray[2]</td>
                <td class='data'>$aContentArray[3]</td>
                <td class='data'>$aContentArray[4]</td>
                <td class='data'>$aContentArray[5]</td>
                <td class='data'>$aContentArray[6]</td>
                <td class='data'>$aContentArray[7]</td>
                <td class='data'>$aContentArray[8]</td>
                <td class='data'>$aContentArray[9]</td>
                <td class='data'>$aContentArray[10]</td>
                <td class='data'>$aContentArray[11]</td>
                <td class='data'>$aContentArray[12]</td>
                <td class='data'>$aContentArray[13]</td>
                <td class='data'>$aContentArray[14]</td>
                <td class='data'>$aContentArray[15]</td>
                <td class='data'>$aContentArray[16]</td>
                <td class='data'>$aContentArray[17]</td>
                </tr>");                                                        //input the content of the database entry into a row
        }
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