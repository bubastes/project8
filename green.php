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
        $aDatabase[$iRecordCounter] = array($$iOpdrachtNummer,$iTCTV_Number,$dDate,$sUitgevoerd,$sDeskundige,$dAfmeldenVoor,$sDirecte_voorzieningen,$sDirecte_voorzieningen);
        // save the array to a file
        SaveArray($aDatabase);
    }
?>
<!DOCTYPE html>
<HTML>
    <head>
        <link rel="stylesheet" href="stylesheet.css">
        <title>taak_2_groen</title>
    </head>
    <body>
    <nav> <!--this is the start of the nav bar -->
            <div class="col-2">
                <tr>
                    <img src="./images/Capture.JPG" width="10%"><br>
                <td><a href="./">bestanden</a></td>
                <td><a href="./">info</a></td>
            </div>
         <table width="47%">
                <td><div class="col-2" align="right" width="47%">hijstabel</div></td>
            </tr>
        </table>
    </nav><!--The end of the nav bar -->
        <div class="form">
            <table width="47%">
            <tr>
               <td><h1>Kabelchecklist</h1></td>
                <td align="right"><b>Opdrachtnummer:</b> <input type="number"></td><!--search bar-->
                </tr>
            </table><!--Start of the table where the data is at-->
            <table cellspacing="0">
                <tr style="background-color: lightsteelblue;" >
                    <th colspan="2">zichtbare <br> draadbreuk <br>
                    </th>
                    <th><h3><b>afslipping<br> van de aan <br>de <br> buitenzijde <br> gelegen <br>draden</b></h3></th>
                    <th><h3><b>Roest en <br> corrosie</b></h3></th>
                    <th><h3><b>verminderde <br>kabeldiameter</b></h3></th>
                    <th rowspan="2"><h3><b>positie<br> van de<br> meetpunten</b></h3></th>
                    <th><h3><b>totale <br> beoordeling</b></h3></th>
                    <th><h3><b>beschadeging<br> en<br> vervorming</b></h3></th>
                </tr>
                <tr style="background-color: lightsteelblue;">
                    <th>aantal<br> met<br> een<br> lengte</th>
                    <th>aantal<br> met <br> een<br> lengte</th>
                    <th>mate van<br> beschadeging</th>
                    <th> mate van<br> beschadeging </th>
                    <th> % </th>
                    <th>mate van<br> beschadeging </th>
                    <th> Type</th>

                </tr>
                <tr>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                </tr>
                <tr>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                </tr>
                <tr>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                </tr>
                <tr>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                </tr>
                <tr>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                </tr>
                <tr>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                </tr>
                <tr>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                </tr>
                <tr>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                    <th> w</th>
                </tr>
                <tr >
                    <th colspan="2" class="the-world">Datum:</th>
                    <th colspan="2"></th>
                    <th colspan="2" class="the-world">handtekening:</th>
                    <th colspan="2"></th>
                </tr>
                <tr >
                    <th colspan="2" class="the-world">Kabel leverancier:</th>
                    <th colspan="2"></th>
                    <th colspan="2" class="the-world">aantal bedrijfsuren:</th>
                    <th colspan="2"></th>
                </tr>
                <tr >
                    <th colspan="2" class="the-world">overige<br> waarnemingen:</th>
                    <th colspan="2"></th>
                    <th colspan="2" class="the-world">reden voor het<br> afleggen:</th>
                    <th colspan="2"></th>
                </tr>


            </table><!--End of the table-->
        </div>
    </body>
</HTML>