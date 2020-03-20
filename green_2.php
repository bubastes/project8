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
        // var_dump($_POST);
        $dDate                              = $_POST['dDate'];
        $sUitgevoerd                        = $_POST['sUitgevoerd'];
        $sDeskundige                        = $_POST['sDeskundige'];

        $aCheckboxes = array("bTeleskoopgiek_delen","bGieklengte_m","bOpbouwgiek_m","bTopbaar_gr","bHulpgiek_m","bMet_loopkat","bRailstellen","bKniklek",
        "bWendbare_giek","bRijdend","bMonogiek","sMonogiek","bStationair","bfly_jib_delen","ifly_jib_delen","bIngietframe","bStempels","bVrijstaand",
        "bDozerblad","bZelfrijdend","bOpTruck","bWegRuwterijn","bOpRupsen","bTekortkomingen");
        $aBooleansCheackboxes = array();
        foreach($aCheckboxes as $sCheckboxName){
            echo($_POST[$sCheckboxName]."<br>");
            if(!empty($_POST[$sCheckboxName])){
            //     $aBooleansCheackboxes[$sCheckboxName]  = "TRUE";
            }else{
            //     $aBooleansCheackboxes[$sCheckboxName]  = "FALSE";
            }
        } // End foreach
        $iOpdrachtNummer                    = $_POST['iOpdrachtNummer'];
        $iTCTV_Number                       = $_POST['iTCTV_Number'];
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
        $aDatabase[$iRecordCounter] = array($iOpdrachtNummer,$iTCTV_Number,$dDate,$sUitgevoerd,$sDeskundige,$aBooleansCheackboxes[0],$aBooleansCheackboxes[1],
        $aBooleansCheackboxes[2],
        $aBooleansCheackboxes[3],$aBooleansCheackboxes[4],$aBooleansCheackboxes[5],$aBooleansCheackboxes[6],$aBooleansCheackboxes[7],$aBooleansCheackboxes[8],
        $aBooleansCheackboxes[7],$aBooleansCheackboxes[9],$aBooleansCheackboxes[10],$aBooleansCheackboxes[11],$aBooleansCheackboxes[12],$aBooleansCheackboxes[13],
        $aBooleansCheackboxes[14],$aBooleansCheackboxes[15],$aBooleansCheackboxes[16],$aBooleansCheackboxes[17],$aBooleansCheackboxes[18],
        $aBooleansCheackboxes[19],$aBooleansCheackboxes[20],$aBooleansCheackboxes[21],$aBooleansCheackboxes[22],$aBooleansCheackboxes[23],
        $ifly_jib_delen,$iHijskraanFabrikant,$iOnderwagenFabrikant,$iOnderwagenFabrikant,$iOnderwagenFabrikant,$iOnderwagenFabrikant,$dAfmeldenVoor,
        $sDirecte_voorzieningen,$sToelichting);
        // save the array to a file
        SaveArray($aDatabase);
    }
    
    function clearPost() {
        unset($_POST['']);
    }
?>

<!DOCTYPE html>
<HTML>
    <head>
        <link rel="stylesheet" href="stylesheet/stylesheet.css">
        <title>taak_4_groen</title>
    </head>
    <body id="yellow">
        <!--the content of the page-->
        <div class="form scroll">
            <form method="POST">
                <!--text part of the page-->
                <h1>Periodieke keuring voorblad keuringsrapport</h1>
                <!--the lineles field containing opdrachtnummer and TCVT-nummer-->
                <table width="100%" cellspacing="0">
                    <tr>
                        <td class="column1">Opdrachtnummer:</td>
                        <td align="right"><input type="number" name="iOpdrachtNummer"></p></td>
                        <td colspan="2"></td>
                        <td>TCVT-nummer:</td>
                        <td colspan="2" align="right"><input type="number" name="iTCTV_Number"></p></td>
                    </tr>
                    <!--end of this section-->
                    <tr>
                        <td colspan="7"></td>
                    </tr>
                    <!--the section named: Keuring-->
                    <tr>
                        <td rowspan="2" class="column1 upperLine leftLine lowerLine">Keuring </td>
                        <td class="upperLine">Keurings datum:</td>
                        <td align="right" class="upperLine"><input type="date" name="dDate"></td>
                        <td colspan="4" class="upperLine rightLine">
                    </tr>
                    <tr>
                        <td class="lowerLine">Uitgevoerd door:</td>
                        <td align="right" class="lowerLine"><input type="text" name="sUitgevoerd"></td>
                        <td class="lowerLine"></td>
                        <td class="lowerLine">deskundige:</td>
                        <td colspan="2" align="right" class="lowerLine rightLine"><input type="text" name="sDeskundige"></td>
                    </tr>
                    <!--end of this section-->
                    <tr>
                        <td colspan="7"></td>
                    </tr>
                    <!--the section named: materieel-->
                    <tr>
                        <td rowspan="6" class="upperLine leftLine lowerLine"><b>Materieel</b></td>
                        <td colspan="2" class="upperLine"><b>Hijskraan</b></td>
                        <td colspan="2" class="upperLine"><b>Onderwagen</b></td>
                        <td class="upperLine"></td>
                        <td rowspan="6" class="upperLine rightLine lowerLine"></td>
                    </tr>
                    <tr>
                        <td>fabrikant:</td>
                        <td><input type="text" name="iHijskraanFabrikant"></td>
                        <td colspan="2">fabrikant:</td>
                        <td><input type="text" name="iOnderwagenFabrikant"></td>
                    </tr>
                    <tr>
                        <td>Module / type</td>
                        <td><input type="text" name="iHijskraanModule"></td>
                        <td colspan="2">Module / type</td>
                        <td><input type="text" name="iOnderwagenModule"></td>
                    </tr>
                    <tr>
                        <td>Serienummer:</td>
                        <td><input type="text" name="iHijskraanSerienummer"></td>
                        <td colspan="2">Serienummer:</td>
                        <td><input type="text" name="iOnderwagenSerienummer"></td>
                    </tr>
                    <tr>
                        <td>Bedrijfsnummer:</td>
                        <td><input type="text" name="iHijskraanBedrijfsnummer"></td>
                        <td colspan="2">Bedrijfsnummer:</td>
                        <td><input type="text" name="iOnderwagenBedrijfsnummer"></td>
                    </tr>
                    <tr>
                        <td class="lowerLine">Bouwjaar:</td>
                        <td class="lowerLine"><input type="text" name="iHijskraanBouwjaar"></td>
                        <td class="lowerLine" colspan="2"></td>
                        <td class="lowerLine"><input type="text" name="iOnderwagenBouwjaar"></td>
                    </tr>
                    <!--end of this section-->
                    <tr>
                        <td colspan="7"></td>
                    </tr>
                    <!--the section named: Uitvoering kraan-->
                    <tr>
                        <td rowspan="6" class="column1 upperLine leftLine"><b>Uitvoering kraan:</b></td>
                        <td class="upperLine"><b>Uitvoering Onderwagen</b></td>                                                     <!--from green-->
                        <td class="upperLine"><b>Uitvoering toren:</b></td>
                        <td colspan="7" class="upperLine rightLine"></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="bZelfrijdend" value="TRUE">op banden (zelfrijdend)</td>                                 <!--from green-->
                        <td><input type="checkbox" name="bHaakhoogte_m"> haakhoogte (__m) </td>
                        <td align="right"><input type="number"></td>
                        <td colspan="7" class="rightLine"></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="bOpTruck">op truck</td>                                                    <!--from green-->
                        <td colspan="6" class="rightLine"></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="bWegRuwterijn">weg-/ruwterein(kenteken)</td>                                <!--from green-->
                        <td><b>Giek:</b></td>
                        <td colspan="2"><b>Uitvoer giek</b></td>
                        <td colspan="7" class="rightLine"></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="bOpRupsen">op rupsen</td>                                                  <!--from green-->
                        <td><input type="checkbox" name="bTeleskoopgiek_delen"> teleskoopgiek (__delen) </td>
                        <td align="right"><input type="number" name="iTeleskoopgiek_delen"></td>
                        <td><input type="checkbox" name="bGieklengte_m"> gieklengte (__m) </td>
                        <td align="right"><input type="number" name="iGieklengte_m"></td>
                        <td colspan="7" class="rightLine"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="checkbox" name="bOpbouwgiek_m"> opbouwgiek (__m) </td>
                        <td align="right"><input type="number" name="iOpbouwgiek_m"></td>
                        <td><input type="checkbox" name="bTopbaar_gr"> topbaar (__gr) </td>
                        <td align="right"><input type="number" name="iTopbaar_gr"></td>
                        <td colspan="7" class="rightLine"></td>
                    </tr>
                    <tr>
                        <td rowspan="6" class="lowerLine leftLine"></td>
                        <td><b>Opstelling:</b></td>
                        <td><input type="checkbox" name="bHulpgiek_m"> hulpgiek (__m) </td>
                        <td align="right"><input type="number" name="iHulpgiek_m"></td>
                        <td><input type="checkbox" name="bMet_loopkat"> met loopkat </td>
                        <td colspan="7" class="rightLine"></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="bRailstellen"> railstellen (spoorbreedte / wielbasis) </td>
                        <td><input type="checkbox" name="bKniklek"> kniklek </td>
                        <td></td>
                        <td><input type="checkbox" name="bWendbare_giek"> wendbare giek </td>
                        <td colspan="7" class="rightLine"></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="bRijdend"> rijdend </td>
                        <td><input type="checkbox" name="bMonogiek"> monogiek </td>
                        <td align="right"><input type="text" name="sMonogiek"></td>
                        <td colspan="7" class="rightLine"></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="bStationair"> stationair </td>
                        <td><input type="checkbox" name="bfly_jib_delen"> fly-jib (__delen) </td>
                        <td align="right"><input type="number" name="ifly_jib_delen"></td>
                        <td> <b>Stempels</b> </td>
                        <td colspan="7" class="rightLine"></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="bIngietframe"> ingietframe </td>
                        <td colspan="2" rowspan="2" class="lowerLine"></td>
                        <td><input type="checkbox" name="bStempels"> Stempels </td>
                        <td colspan="7" class="rightLine"></td>
                    </tr>
                    <tr>
                        <td class="lowerLine"><input type="checkbox" name="bVrijstaand"> vrijstaand (kruisframe onderwagen zonder railstellen) </td>
                        <td class="lowerLine"><input type="checkbox" name="bDozerblad"> dozerblad </td>
                        <td colspan="7" class="lowerLine rightLine"></td>
                    </tr>
                    <!--end of this section-->
                    <tr>
                        <td colspan="7"></td>
                    </tr>
                    <!--the section named: Bevindingen-->
                    <tr>
                        <td rowspan="7" class="upperLine lowerLine leftLine"><b>Bevindingen</b></td>
                        <td colspan="2" class="upperLine"> Tekortkomingen A of B:</td>
                        <td class="upperLine">
                            <input type="radio" name="bTekortkomingen" value="TRUE">ja
                            <input type="radio" name="bTekortkomingen" value="FALSE" class="upperLine">nee
                            <td colspan="6" class="upperLine rightLine"></td>
                        </td>
                    </tr>
                    <tr>
                        <td>Afmelden voor: </td>
                        <td><input type="date" name="dAfmeldenVoor"></td>
                        <td colspan="6" class="rightLine"></td>
                    </tr>
                    <tr>
                        <td colspan="6" class="rightLine"></td>
                    </tr>
                    <tr>
                        <td colspan="6" class="rightLine">Directe voorzieningen noodzakelijk voordat de kraan weer in gebruik word gesteld, hierbij is een herkeuring vereist m.b.t (nummers uit checklist)</td>
                    </tr>
                    <tr>
                        <td colspan="6" class="rightLine">
                            <textarea type="text" rows="3" cols="200" name="sDirecte_voorzieningen"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6" class="rightLine">Toelichting</td>
                    </tr> 
                    <tr>
                        <td colspan="6" class="lowerLine rightLine">
                            <textarea type="text" rows="8" cols="200" name="sToelichting"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="finish"></td>
                    </form>
                    <td><button onclick="ClearArray()">clear database</button></td>
                </tr>
                <!--end of this section-->
            </table>
            <table>
            <tr>
            <td style="height: 25px;">
            </td>
            </tr>
            </table>
            <!--end of the section-->
        </div>
    </body>
</HTML>