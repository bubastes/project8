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
        $iOpdrachtNummer            = $_POST['iOpdrachtNummer'];
        $iTCTV_Number               = $_POST['iTCTV_Number'];
        $dDate                      = $_POST['dDate'];
        $sUitgevoerd                = $_POST['sUitgevoerd'];
        $sDeskundige                = $_POST['sDeskundige'];
        $dAfmeldenVoor              = $_POST['dAfmeldenVoor'];
        $sDirecte_voorzieningen     = $_POST['sDirecte_voorzieningen'];
        $sDirecte_voorzieningen     = $_POST['sToelichting'];
        
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
        <title>taak_2_rood</title>
    </head>
    <body id="red">
        <!--the content of the page-->
        <div class="form">
            <!--text part of the page-->
            <h1>Tabel hijskraangegevens (2100)</h1>
            <p><b>Opdrachtnummer:</b> <input type="number"></p>
            <p><i>
                Werkinstructie <br>
                Bepaal (bereken of lees af uit de tabel) de toelaatbare hijslast, behorende bij de gemeten vlucht.<br>
                Bereken vervolgens de afwijking met de volgende formule:
            </i></p>
            <table width="30%">
                <tr>
                    <td></td>
                    <td>(proeflast - toelaatbare hijslast)</td>
                </tr>
                <tr>
                    <td>afwijking =</td>
                    <td>toelaatbare hijslast * 100%</td>
                </tr>
            </table>
            <!--end of the text part of the page-->

            <!--the table on the page-->
            <div class="scroll" width="95%">
                <table class="data" cellspacing="0" width="100%">
                    <tr>
                        <td rowspan="3" class="blockLine">volgnummer <br>                          <!--section 1-->
                            beproeving</td>
                        <td colspan="3" class="upperBlockLine"><h3><b>Opgesteld op:</b></h3></td>  <!--section 2-->
                        <td colspan="4" class="upperBlockLine"><h3><b>Gieklengte</b></h3></td>     <!--section 3-->
                        <td colspan="3" class="upperBlockLine"><h3><b>Giekhoek</b></h3></td>       <!--section 4-->
                        <td colspan="4" class="upperBlockLine"><h3><b>Zwenkhoek</b></h3></td>      <!--section 5-->
                        <td colspan="2" class="upperBlockLine"><h3><b>Beproeving</b></h3></td>     <!--section 6-->
                        <td colspan="2" class="upperBlockLine"><h3><b>Akkoord</b></h3></td>        <!--section 7-->
                    </tr>
                    <tr>
                        <!--section 2-->
                        <td rowspan="2" class="lowerBlockLine">Banden</td>                          <!--row2 col2-->
                        <td rowspan="2" class="lowerBlockLine">Stempels</td>                        <!--row2 col3-->
                        <td rowspan="2" class="lowerBlockLine">Rupsen</td>                          <!--row2 col4-->
                        <!--section 3-->
                        <td class="centerBlockLine">Hoofd- <br>                                     <!--row2 col5-->
                            giek</td>                   
                        <td class="centerBlockLine">Mecha- <br>                                     <!--row2 col6-->
                            nische <br>                 
                            sectie</td>                 
                        <td class="centerBlockLine">Hulp- <br>                                      <!--row2 col7-->
                            giek</td>                   
                        <td class="centerBlockLine">Totale <br>                                     <!--row2 col8-->
                            giek- <br>                  
                            lengte</td>                 
                        <!--section 4-->
                        <td class="centerBlockLine">Hoofd- <br>                                     <!--row2 col9-->
                            Giek</td>                   
                        <td class="centerBlockLine">hulp- <br>                                      <!--row2 col10-->
                            Giek</td>                   
                        <td rowspan="2" class="lowerBlockLine">Aantal <br>                          <!--row2 col11-->
                            paren <br>
                            hijskabel</td>
                        <!--section 5-->
                        <td rowspan="2" class="lowerBlockLine">R= 360 <br>                          <!--row2 col12-->
                            A= achter-, <br>
                            Z= Zij-, <br>
                            V= voorsector</td>
                        <td class="centerBlockLine">Eigen <br>                                      <!--row2 col13-->
                            massa <br>
                            Balast <br>
                            LMB code</td>
                        <td rowspan="2" class="lowerBlockLine">Toelaatbare <br>                     <!--row2 col14-->
                            bedrijfslast<br>
                            bij in <br>
                            werking</td>
                        <td rowspan="2" class="lowerBlockLine">LMB <br>                             <!--row2 col15-->
                            treedt in<br>
                            werking<br>
                            bij:</td>
                        <!--section 6-->
                        <td class="centerBlockLine">Proeflast</td>                                  <!--row2 col16-->
                        <td class="centerBlockLine">Afwijking <br>                                  <!--row2 col17-->
                            in %</td>
                        <!--section 7-->
                        <td rowspan="2" class="Yes">Ja</td>                                         <!--row2 col18-->
                        <td rowspan="2" class="No">Nee</td>                                         <!--row2 col19-->
                    </tr>
                    <tr>
                        <!--section 3-->
                        <td class="lowerBlockLine">m</td>                                           <!--gieklengte hoofdgiek m-->
                        <td class="lowerBlockLine">m</td>                                           <!--gieklengte mechanische sectie m-->
                        <td class="lowerBlockLine">m</td>                                           <!--gieklengte hulpgiek m-->
                        <td class="lowerBlockLine">m</td>                                           <!--gieklengte totale gieklengte m-->
                        <td class="lowerBlockLine">gr</td>                                          <!--giekhoek hoofdgiek gr-->
                        <td class="lowerBlockLine">gr</td>                                          <!--giekhoek hulpgiek gr-->
                        <td class="lowerBlockLine">t</td>                                           <!--zwenkhoek eigen massa balast LMB code t-->
                        <td class="lowerBlockLine">m</td>                                           <!--beproeving proeflast m-->
                        <td class="lowerBlockLine">t</td>                                           <!--beproeving afwijzing in % m-->
                    </tr>
                    <!--row number 1-->
                    <tr class="Numbering">
                        <th class="Numbering"id="place1">1</th>                                     <!--ranking-->
                        <td class="data" id="1.1">#</td>                                            <!--opgesteld op: banden-->
                        <td class="data" id="1.2">#</td>                                            <!--opgesteld op: stempels-->
                        <td class="data" id="1.3">#</td>                                            <!--opgesteld op: rupsen-->
                        <td class="data" id="1.4">#</td>                                            <!--gieklengte hoofdgiek-->
                        <td class="data" id="1.5">#</td>                                            <!--gieklengte mechanische sectie-->
                        <td class="data" id="1.6">#</td>                                            <!--gieklengte hulpgiek-->
                        <td class="data" id="1.7">#</td>                                            <!--gieklengte totale gieklengte-->
                        <td class="data" id="1.8">#</td>                                            <!--giekhoek hoofdgiek-->
                        <td class="data" id="1.9">#</td>                                            <!--giekhoek hulpgiek-->
                        <td class="data" id="1.10">#</td>                                           <!--giekhoek aantal hijskabels-->
                        <td class="data" id="1.11">#</td>                                           <!--zwenkhoek r= 360, a= achter-, z= zij, v= voorsector-->
                        <td class="data" id="1.12">#</td>                                           <!--zwenkhoek eigen massa balast LMB code t-->
                        <td class="data" id="1.13">#</td>                                           <!--zwenkhoek toelaatbare bedrijfslast bij in werking-->
                        <td class="data" id="1.14">#</td>                                           <!--zwenkhoek LMB treedt in werking bij:-->
                        <td class="data" id="1.15">#</td>                                           <!--beproeving proeflast-->
                        <td class="data" id="1.16">#</td>                                           <!--beproeving afwijking in %-->
                        <td class="data" id="1.17">#</td>                                           <!--akkoord ja-->
                        <td class="data" id="1.18">#</td>                                           <!--akkoord nee-->
                    </tr>
                    <!--row number 2-->
                    <?php                                                                           //php database input
                        if(file_exists('database.json')) {                                          //if the database exists
                            $aDatabase = LoadArray();                                               //load the database
                            // loop thru the complex array                      
                            foreach($aDatabase as $iKey =>$aContentArray) {                         //execute the following for every entry in the database
                                echo("<tr><td class='data'>$iKey</td>           
                                    <td class='data'>.$aContentArray[0].</td>
                                    <td class='data'>.$aContentArray[1].</td>
                                    <td class='data'>.$aContentArray[2].</td>
                                    <td class='data'>.$aContentArray[3].</td>
                                    <td class='data'>.$aContentArray[4].</td>
                                    <td class='data'>.$aContentArray[5].</td>
                                    <td class='data'>.$aContentArray[6].</td>
                                    <td class='data'>.$aContentArray[7].</td>
                                    </tr>");                                                        //input the content of the database entry into a row
                            }
                        }
                    ?>                                                                              <!--end of the php part-->
                </table>                                                                            <!--end of the table-->
            </div>                                                                                  <!--end of the div-->
            <!--end of the table on the page-->
        </div>
    </body>
</HTML>