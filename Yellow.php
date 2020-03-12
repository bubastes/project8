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
    
    // $iOpdrachtNummer = "";
    // $iTCTV_Number = "";
    // $dDate = "";
    // $sUitgevoerd = "";
    // $sDeskundige = "";
    // $dAfmeldenVoor = "";
    // $sDirecte_voorzieningen = "";
    // $sDirecte_voorzieningen = "";

    if(!empty($_POST)){
        $dDate                              =$_post['dDate'];
        $sUitgevoerd                        =$_post['sUitgevoerd'];
        $sDeskundige                        =$_post['sDeskundige'];
        $bHaakhoogte_m                      =$_post['bHaakhoogte_m'];
        $bTeleskoopgiek_delen               =$_post['bTeleskoopgiek_delen'];
        $bGieklengte_m                      =$_post['bGieklengte_m'];
        $bOpbouwgiek_m                      =$_post['bOpbouwgiek_m'];
        $bTopbaar_gr                        =$_post['bTopbaar_gr'];
        $bHulpgiek_m                        =$_post['bHulpgiek_m'];
        $bMet_loopkat                       =$_post['bMet_loopkat'];
        $bRailstellen                       =$_post['bRailstellen'];
        $bKniklek                           =$_post['bKniklek'];
        $bWendbare_giek                     =$_post['bWendbare_giek'];
        $bRijdend                           =$_post['bRijdend'];
        $bMonogiek                          =$_post['bMonogiek'];
        $sMonogiek                          =$_post['sMonogiek'];
        $bStationair                        =$_post['bStationair'];
        $bfly_jib_delen                     =$_post['bfly_jib_delen'];
        $ifly_jib_delen                     =$_post['ifly_jib_delen'];
        $bIngietframe                       =$_post['bIngietframe'];
        $bStempels                          =$_post['bStempels'];
        $bVrijstaand                        =$_post['bVrijstaand'];
        $bDozerblad                         =$_post['bDozerblad'];
        $bTekortkomingen                    =$_post['bTekortkomingen'];
        $dAfmeldenVoor                      =$_post['dAfmeldenVoor'];
        $sDirecte_voorzieningen             =$_post['sDirecte_voorzieningen'];
        $sToelichting                       =$_post['sToelichting'];
        
        // load the database
        $aDatabase = LoadArray();
        $iRecordCounter = count($aDatabase);
        // 
        $aDatabase[$iRecordCounter] = array($iOpdrachtNummer,$iTCTV_Number,$dDate,$sUitgevoerd,$sDeskundige,$dAfmeldenVoor,$sDirecte_voorzieningen,$sDirecte_voorzieningen);
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
        <title>taak_2_geel</title>
    </head>
    <body id="yellow">
        <!--the content of the page-->
        <div class="form scroll">
            <form method="POST">
                <!--text part of the page-->
                <h1>Periodieke keuring voorblad keuringsrapport</h1>
                <!--the lineles field containing opdrachtnummer and TCVT-nummer-->
                <table width="100%" cellspacing="0">
                    <div class="box">
                        <tr>
                            <td class="column1">Opdrachtnummer:</td>
                            <td align="right"><input type="number" name="iOpdrachtNummer"></p></td>
                            <td colspan="2"></td>
                            <td>TCVT-nummer:</td>
                            <td colspan="2" align="right"><input type="number" name="iTCTV_Number"></p></td>
                        </tr>
                        <tr>
                            <td colspan="7"></td>
                        </tr>
                    </div>
                    <!--end of this section-->
                    <br>
                    <!--the section named: Keuring-->
                    <div class="box">
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
                        <tr>
                            <td colspan="7"> </td>
                        </tr>
                    </div>
                    <!--end of this section-->
                    <br>
                    <!--the section named: Uitvoering kraan-->
                    <div class="box">
                        <tr>
                            <td rowspan="6" colspan="2" class="column1 upperLine leftLine"><b>Uitvoering kraan:</b></td>
                            <td class="upperLine">Uitvoering toren:</td>
                            <td colspan="7" class="upperLine rightLine"></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="bHaakhoogte_m"> haakhoogte (__m) </td>
                            <td align="right"><input type="number"></td>
                            <td colspan="7" class="rightLine"></td>
                        </tr>
                        <tr>
                            <td colspan="7" class="rightLine"></td>
                        </tr>
                        <tr>
                            <td colspan="2">Giek:</td>
                            <td colspan="2">Uitvoer giek</td>
                            <td colspan="7" class="rightLine"></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="bTeleskoopgiek_delen"> teleskoopgiek (__delen) </td>
                            <td align="right"><input type="number" name="iTeleskoopgiek_delen"></td>
                            <td><input type="checkbox" name="bGieklengte_m"> gieklengte (__m) </td>
                            <td align="right"><input type="number" name="iGieklengte_m"></td>
                            <td colspan="7" class="rightLine"></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="bOpbouwgiek_m"> opbouwgiek (__m) </td>
                            <td align="right"><input type="number" name="iOpbouwgiek_m"></td>
                            <td><input type="checkbox" name="bTopbaar_gr"> topbaar (__gr) </td>
                            <td align="right"><input type="number" name="iTopbaar_gr"></td>
                            <td colspan="7" class="rightLine"></td>
                        </tr>
                        <tr>
                            <td rowspan="6" class="lowerLine leftLine"></td>
                            <td>Opstelling:</td>
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
                    </div>
                    <tr>
                        <td class="empty_space"></td>
                    </tr>
                    <tr>
                        <!--start of the eigenaar section-->
                        <div >
                    <tr>
                        <th align="left" class="upperLine leftLine lowerLine" rowspan="4">Eigenaar</th>
                        <td class="upperLine">naam</td>
                        <td colspan="6" class="upperLine"><textarea type="text" cols="100" rows="1"></textarea></td>
                        <td rowspan="4" class="rightLine upperLine lowerLine"></td>
                    </tr>
                    <tr>
                        <td>Adres:</td>
                        <td colspan="6"><textarea type="text" cols="100" rows="1"></textarea> </td>
                    </tr>
                    <tr>
                        <td>Postcode/ plaats:</td>
                        <td padding="-20"><textarea type="text" rows="1"></textarea> </td>
                        <td colspan="6"><textarea type="text" cols="70" rows="1"></textarea> </td>
                    </tr>
                    <tr>
                        <td class="lowerLine">telefoonnummer:</td>
                        <td colspan="6" class="lowerLine"><textarea type="text"  rows="1"></textarea> </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
        </div>
        <!--end of this section-->
        <div>
            <tr>
                <th class="lowerLine leftLine upperLine" align="left" rowspan="2">opdrachtgever</th>
                <td class="upperLine">Bedrijf:</td>
                <td colspan="6" class="upperLine"><textarea type="text" cols="80" rows="1"></textarea> </td>
                <td rowspan="2" class="rightLine lowerLine upperLine"> </td>
            </tr>
            <tr>
                <td class="lowerLine">Functionaris:</td>
                <td colspan="6" class="lowerLine" ><textarea type="text" cols="80" rows="1"></textarea> </td>
            </tr>
            <tr>
                <td></td>
            </tr>
        </div>
                        <td rowspan="16" class="upperLine lowerLine leftLine"><b>Bevindingen</b></td>
                        <td colspan="2" class="upperLine"> Tekortkomingen A of B:</td>
                        <td class="upperLine">
                            <input type="radio" name="bTekortkomingen">ja
                            <input type="radio" name="bTekortkomingen" class="upperLine">nee
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
                            <textarea type="text" rows="3" cols="130" name="sDirecte_voorzieningen"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6" class="rightLine">Toelichting</td>
                    </tr> 
                    <tr>
                        <td colspan="5" class="lowerLine">
                            <textarea type="text" rows="8" cols="130" name="sToelichting"></textarea>
                        </td>
                        <td align="right" class="lowerLine rightLine"><input type="submit" value="finish"></td>
                    </tr>
                </table>
            </form>
            <!--end of the section-->
        </div>
    </body>
</HTML>