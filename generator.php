<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<style>
    .Red {
        background-color: red;
    }

    .Orange {
        background-color: orange;
    }

    .Yellow {
        background-color: yellow;
    }

    .Green {
        background-color: green;
    }

    .Blue {
        background-color: blue;
    }

    .Indigo {
        background-color: indigo;
    }

    .Violet {
        background-color: violet;
    }

    .Black {
        background-color: black;
    }

    .White {
        background-color: white;
    }

    .Grey {
        background-color: grey;
    }

    #important {
        font-weight: bold;
    }

</style>

<p hidden id="colorsVal"> <?php echo $colors ?></p>
<p hidden id="dimensionsVal"> <?php echo $dimensions ?></p>
<p id="instructions">Now that you have submitted your values, press the "Generate Tables" button below to start painting! After that, a print button will appear, which will take you to a printer-friendly version of the table you have made. On that page, use the Ctrl+P hotkey to print your tables.<p>

<br>
<div type="text", id = "warning">**IMPORTANT** After choosing a new color from the dropdown menus, please click on a blank spot on the page to allow a new color to be chosen! </div>
<br><br><br>
<div id="table"> </div>
<br><br><br>
<div type="text" style="color:red" id="alert"> </div>


<br><br><br>

<div id="table2"> </div>
<div type="hidden" id="log1" name="l1" class="log"> </div>
<div type="hidden" id="log2" name="l2" class="log"> </div>
<div type="hidden" id="log3" name="l3" class="log"> </div>
<div type="hidden" id="log4" name="l4" class="log"> </div>
<div type="hidden" id="log5" name="l5" class="log"> </div>
<div type="hidden" id="log6" name="l6" class="log"></div>
<div type="hidden" id="log7" name="l7" class="log"></div>
<div type="hidden" id="log8" name="l8" class="log"></div>
<div type="hidden" id="log9" name="l9" class="log"></div>
<div type="hidden" id="log10" name="l10" class="log"></div>


<input type="button" id="generate" name="generate" value="Generate tables" onclick="return getParameters()">
<input type="button" id="print" name="print" value="Print tables" onclick="return printPage()">

<script>

    document.getElementById('print').style.display = "none";
    function getParameters(value) {
        var dimension = document.getElementById('dimensionsVal').innerHTML; /*url.searchParams.get("dimension");*/
        var colorcount = document.getElementById('colorsVal').innerHTML;/*url.searchParams.get("colorcount");*/
	createTable1(colorcount);
        createTable2(dimension);
        document.getElementById('print').style.display = "block";
    }
    /*function getParameters(value) {
        var url_string = window.location.href;
        var url = new URL(url_string);
        var dimension = url.searchParams.get("dimension");
        var colorcount = url.searchParams.get("colorcount");
        createTable1(colorcount);
        createTable2(dimension);
	
    }*/

    function createTable1(value) {
        var row = value;
        var rowIdStr = "rownumber";
        var rowIdCount = 1;
        var column = 2;
        var count = 0;
        var theader = "<table width=\"100%\" border=\"1\" id=\"upperTable\"> ";
        var tbody = "";
        for (var i = 0; i < row; i++) {
            tbody += "<tr>";
            for (var j = 0; j < column; j++) {
                if (j == 0) {
                    tbody += "<td width=\"20%\" id=>";
                    tbody += createDropdown(count);
                    count++;
                    tbody += "</td>";
                } else {
                    tbody += "<td width=\"80%\" id=" + rowIdStr + rowIdCount + ">";
                    tbody += "";
                    tbody += "</td>";
                    rowIdCount++;
                }
            }
            tbody += "</tr>";
        }
        var tfooter = "</table>";
        document.getElementById('table').innerHTML = theader + tbody + tfooter;
        var button = document.getElementById('generate');
        button.remove();
    }

    function createDropdown(count) {
        if (count == 0) {
            document.getElementById('log1').setAttribute('name', 'Red');
            var menu = "<select onfocus=\"storePrevSelected(options[this.selectedIndex].innerHTML, 1)\" onchange=\"log1_update(options[this.selectedIndex].innerHTML, 1)\" id=\"colors1\" name=\"colors1\">" +
                    "<option value=\"Red\" selected>Red</option>" + 
                    "<option value=\"Orange\">Orange</option>" +
                    "<option value=\"Yellow\">Yellow</option>" +
                    "<option value=\"Green\">Green</option>" +
                    "<option value=\"Blue\">Blue</option>" +
                    "<option value=\"Indigo\">Indigo</option>" +
                    "<option value=\"Violet\">Violet</option>" +
                    "<option value=\"Black\">Black</option>" +
                    "<option value=\"White\">White</option>" +
                    "<option value=\"Grey\">Grey</option>" +
                    "</select>" + 
                    "<input type=\"radio\" id=\"selected1\" name=\"group\" checked>" +
                    "<label for=\"radio2\">Paint with this color </label>";

        } if (count == 1) {
            document.getElementById('log2').setAttribute('name', 'Orange');
            var menu = "<select onfocus=\"storePrevSelected(options[this.selectedIndex].innerHTML, 2)\" onchange=\"log2_update(options[this.selectedIndex].innerHTML, 2)\" id=\"colors2\" name=\"colors2\">" +
                    "<option class=\"row1\" value=\"Red\" >Red</option>" + 
                    "<option value=\"Orange\" selected>Orange</option>" +
                    "<option value=\"Yellow\">Yellow</option>" +
                    "<option value=\"Green\">Green</option>" +
                    "<option value=\"Blue\">Blue</option>" +
                    "<option value=\"Indigo\">Indigo</option>" +
                    "<option value=\"Violet\">Violet</option>" +
                    "<option value=\"Black\">Black</option>" +
                    "<option value=\"White\">White</option>" +
                    "<option value=\"Grey\">Grey</option>" +
                    "</select>" + 
                    "<input type=\"radio\" id=\"selected2\" name=\"group\">" +
                    "<label for=\"radio2\">Paint with this color</label>";
        } if (count == 2) {
            document.getElementById('log3').setAttribute('name', 'Yellow');
            var menu = "<select onfocus=\"storePrevSelected(options[this.selectedIndex].innerHTML, 3)\" onchange=\"log3_update(options[this.selectedIndex].innerHTML, 3)\" id=\"colors3\" name=\"colors3\">" +
                    "<option class=\"row1\" value=\"Red\" >Red</option>" + 
                    "<option value=\"Orange\" >Orange</option>" +
                    "<option value=\"Yellow\" selected>Yellow</option>" +
                    "<option value=\"Green\">Green</option>" +
                    "<option value=\"Blue\">Blue</option>" +
                    "<option value=\"Indigo\">Indigo</option>" +
                    "<option value=\"Violet\">Violet</option>" +
                    "<option value=\"Black\">Black</option>" +
                    "<option value=\"White\">White</option>" +
                    "<option value=\"Grey\">Grey</option>" +
                    "</select>" + 
                    "<input type=\"radio\" id=\"selected3\" name=\"group\" >" +
                    "<label for=\"radio3\">Paint with this color</label>";
        } if (count == 3) {
            document.getElementById('log4').setAttribute('name', 'Green');
            var menu = "<select onfocus=\"storePrevSelected(options[this.selectedIndex].innerHTML, 4)\" onchange=\"log4_update(options[this.selectedIndex].innerHTML, 4)\" id=\"colors4\" name=\"colors4\">" +
                    "<option class=\"row1\" value=\"Red\" >Red</option>" + 
                    "<option value=\"Orange\">Orange</option>" +
                    "<option value=\"Yellow\">Yellow</option>" +
                    "<option value=\"Green\" selected>Green</option>" +
                    "<option value=\"Blue\">Blue</option>" +
                    "<option value=\"Indigo\">Indigo</option>" +
                    "<option value=\"Violet\">Violet</option>" +
                    "<option value=\"Black\">Black</option>" +
                    "<option value=\"White\">White</option>" +
                    "<option value=\"Grey\">Grey</option>" +
                    "</select>" + 
                    "<input type=\"radio\" id=\"selected4\" name=\"group\" >" +
                    "<label for=\"radio4\">Paint with this color</label>";
        } if (count == 4) {
            document.getElementById('log5').setAttribute('name', 'Blue');
            var menu = "<select onfocus=\"storePrevSelected(options[this.selectedIndex].innerHTML, 5)\" onchange=\"log5_update(options[this.selectedIndex].innerHTML, 5)\" id=\"colors5\" name=\"colors5\">" +
            "<option class=\"row1\" value=\"Red\" >Red</option>" + 
                    "<option value=\"Orange\">Orange</option>" +
                    "<option value=\"Yellow\">Yellow</option>" +
                    "<option value=\"Green\" >Green</option>" +
                    "<option value=\"Blue\"selected>Blue</option>" +
                    "<option value=\"Indigo\">Indigo</option>" +
                    "<option value=\"Violet\">Violet</option>" +
                    "<option value=\"Black\">Black</option>" +
                    "<option value=\"White\">White</option>" +
                    "<option value=\"Grey\">Grey</option>" +
                    "</select>" + 
                    "<input type=\"radio\" id=\"selected5\" name=\"group\" >" +
                    "<label for=\"radio5\">Paint with this color</label>";
        } if (count == 5) {
            document.getElementById('log6').setAttribute('name', 'Indigo');

            var menu = "<select onfocus=\"storePrevSelected(options[this.selectedIndex].innerHTML, 6)\" onchange=\"log6_update(options[this.selectedIndex].innerHTML, 6)\" id=\"colors6\" name=\"colors6\">" +
            "<option class=\"row1\" value=\"Red\" >Red</option>" + 
                    "<option value=\"Orange\">Orange</option>" +
                    "<option value=\"Yellow\">Yellow</option>" +
                    "<option value=\"Green\" >Green</option>" +
                    "<option value=\"Blue\">Blue</option>" +
                    "<option value=\"Indigo\" selected>Indigo</option>" +
                    "<option value=\"Violet\">Violet</option>" +
                    "<option value=\"Black\">Black</option>" +
                    "<option value=\"White\">White</option>" +
                    "<option value=\"Grey\">Grey</option>" +
                    "</select>" + 
                    "<input type=\"radio\" id=\"selected6\" name=\"group\" >" +
                    "<label for=\"radio6\">Paint with this color</label>";
        } if (count == 6) {
            document.getElementById('log7').setAttribute('name', 'Violet');

            var menu = "<select onfocus=\"storePrevSelected(options[this.selectedIndex].innerHTML, 7)\" onchange=\"log7_update(options[this.selectedIndex].innerHTML, 7)\" id=\"colors7\" name=\"colors7\">" +
            "<option class=\"row1\" value=\"Red\" >Red</option>" + 
                    "<option value=\"Orange\">Orange</option>" +
                    "<option value=\"Yellow\">Yellow</option>" +
                    "<option value=\"Green\" >Green</option>" +
                    "<option value=\"Blue\">Blue</option>" +
                    "<option value=\"Indigo\" >Indigo</option>" +
                    "<option value=\"Violet\" selected>Violet</option>" +
                    "<option value=\"Black\">Black</option>" +
                    "<option value=\"White\">White</option>" +
                    "<option value=\"Grey\">Grey</option>" +
                    "</select>" + 
                    "<input type=\"radio\" id=\"selected7\" name=\"group\" >" +
                    "<label for=\"radio7\">Paint with this color</label>";
        } if (count == 7) {
            document.getElementById('log8').setAttribute('name', 'Black');

            var menu = "<select onfocus=\"storePrevSelected(options[this.selectedIndex].innerHTML, 8)\" onchange=\"log8_update(options[this.selectedIndex].innerHTML, 8)\" id=\"colors8\" name=\"colors8\">" +
            "<option class=\"row1\" value=\"Red\" >Red</option>" + 
                    "<option value=\"Orange\">Orange</option>" +
                    "<option value=\"Yellow\">Yellow</option>" +
                    "<option value=\"Green\" >Green</option>" +
                    "<option value=\"Blue\">Blue</option>" +
                    "<option value=\"Indigo\" >Indigo</option>" +
                    "<option value=\"Violet\">Violet</option>" +
                    "<option value=\"Black\" selected>Black</option>" +
                    "<option value=\"White\">White</option>" +
                    "<option value=\"Grey\">Grey</option>" +
                    "</select>" + 
                    "<input type=\"radio\" id=\"selected8\" name=\"group\">" +
                    "<label for=\"radio8\">Paint with this color</label>";
        } if (count == 8) {
            document.getElementById('log9').setAttribute('name', 'White');

            var menu = "<select onfocus=\"storePrevSelected(options[this.selectedIndex].innerHTML, 9)\" onchange=\"log9_update(options[this.selectedIndex].innerHTML, 9)\" id=\"colors9\" name=\"colors9\">" +
            "<option class=\"row1\" value=\"Red\" >Red</option>" + 
                    "<option value=\"Orange\">Orange</option>" +
                    "<option value=\"Yellow\">Yellow</option>" +
                    "<option value=\"Green\" >Green</option>" +
                    "<option value=\"Blue\">Blue</option>" +
                    "<option value=\"Indigo\" >Indigo</option>" +
                    "<option value=\"Violet\">Violet</option>" +
                    "<option value=\"Black\" >Black</option>" +
                    "<option value=\"White\" selected>White</option>" +
                    "<option value=\"Grey\">Grey</option>" +
                    "</select>" + 
                    "<input type=\"radio\" id=\"selected9\" name=\"group\" >" +
                    "<label for=\"radio9\">Paint with this color</label>";
        } if (count == 9) {
            document.getElementById('log10').setAttribute('name', 'Grey');

            var menu = "<select onfocus=\"storePrevSelected(options[this.selectedIndex].innerHTML, 10)\" onchange=\"log10_update(options[this.selectedIndex].innerHTML, 10)\" id=\"colors10\" name=\"colors10\">" +
            "<option class=\"row1\" value=\"Red\" >Red</option>" + 
                    "<option value=\"Orange\">Orange</option>" +
                    "<option value=\"Yellow\">Yellow</option>" +
                    "<option value=\"Green\" >Green</option>" +
                    "<option value=\"Blue\">Blue</option>" +
                    "<option value=\"Indigo\" >Indigo</option>" +
                    "<option value=\"Violet\">Violet</option>" +
                    "<option value=\"Black\" >Black</option>" +
                    "<option value=\"White\">White</option>" +
                    "<option value=\"Grey\" selected>Grey</option>" +
                    "</select>" + 
                    "<input type=\"radio\" id=\"selected10\" name=\"group\" >" +
                    "<label for=\"radio10\">Paint with this color</label>";
        }
        return menu;
    }

    function createTable2(value) {
        var row = parseInt(value) + 1;
        var col = parseInt(value) + 1;
        var alphabet_count = 0;

        //yo i am so sorry god forgive me
        var alphabet_count2 = 0;
        var alphabet_count3 = 0;
        var alphabet_count4 = 0;
        var alphabet_count5 = 0;
        var alphabet_count6 = 0;
        var alphabet_count7 = 0;
        var alphabet_count8 = 0;
        var alphabet_count9 = 0;
        var alphabet_count10 = 0;
        var alphabet_count11 = 0;
        var alphabet_count12 = 0;
        var alphabet_count13 = 0;
        var alphabet_count14 = 0;
        var alphabet_count15 = 0;
        var alphabet_count16 = 0;
        var alphabet_count17 = 0;
        var alphabet_count18 = 0;
        var alphabet_count19 = 0;
        var alphabet_count20 = 0;
        var alphabet_count21 = 0;
        var alphabet_count22 = 0;
        var alphabet_count23 = 0;
        var alphabet_count24 = 0;
        var alphabet_count25 = 0;
        var alphabet_count26 = 0;
        var alphabet_count27 = 0;

        //SO SORRY
        var coordinate_count1 = 1;
        var coordinate_count2 = 2;
        var coordinate_count3 = 3;
        var coordinate_count4 = 4;
        var coordinate_count5 = 5;
        var coordinate_count6 = 6;
        var coordinate_count7 = 7;
        var coordinate_count8 = 8;
        var coordinate_count9 = 9;
        var coordinate_count10 = 10;
        var coordinate_count11 = 11;
        var coordinate_count12 = 12;
        var coordinate_count13 = 13;
        var coordinate_count14 = 14;
        var coordinate_count15 = 15;
        var coordinate_count16 = 16;
        var coordinate_count17 = 17;
        var coordinate_count18 = 18;
        var coordinate_count19 = 19;
        var coordinate_count20 = 20;
        var coordinate_count21 = 21;
        var coordinate_count22 = 22;
        var coordinate_count23 = 23;
        var coordinate_count24 = 24;
        var coordinate_count25 = 25;
        var coordinate_count26 = 26;




        var curr_char = 'A';
        var theader = "<table border=\"1\" id=\"lowerTable\" > ";
        var row_count = 0;
        var tbody = "";
        for (var i = 0; i < row; i++) {
            tbody += "<tr>";
            for (var j = 0; j < row; j++) {
                if (i == 0 && j == 0) { //first row first column blank
                    tbody += "<th width=\"2%\">";
                    tbody += "";
                    tbody += "</th>";
                } else if (i == 0 && j > 0) { //first row, all other columns label with alphabet
                    tbody += "<th width=\"2%\">";
                    tbody += String.fromCharCode('A'.charCodeAt(0) + alphabet_count);
                    alphabet_count++;
                    tbody += "</th>";
                } else if (i > 0 && j == 0) { //every row first column label with number
                    tbody += "<td width=\"2%\">";
                    tbody += i;
                    tbody += "</td>";
                } else { //set the coordinates row by row manually
                    tbody += "<td onclick=\"tdClick(event)\" ";
                    if (i == 1) {
                        tbody += "id=" + String.fromCharCode('A'.charCodeAt(0) + alphabet_count2) + coordinate_count1 + ">";
                        alphabet_count2++;
                    }
                    if ( i==2) {
                        tbody += "id=" + String.fromCharCode('A'.charCodeAt(0) + alphabet_count3) + coordinate_count2 + ">";
                        alphabet_count3++;
                    }
                    if (i == 3) {
                        tbody += "id=" + String.fromCharCode('A'.charCodeAt(0) + alphabet_count4) + coordinate_count3 + ">";
                        alphabet_count4++;
                    }
                    if (i == 4) {
                        tbody += "id=" + String.fromCharCode('A'.charCodeAt(0) + alphabet_count5) + coordinate_count4 + ">";
                        alphabet_count5++;
                    }
                    if (i == 5) {
                        tbody += "id=" + String.fromCharCode('A'.charCodeAt(0) + alphabet_count6) + coordinate_count5 + ">";
                        alphabet_count6++;
                    }
                    if (i == 6) {
                        tbody += "id=" + String.fromCharCode('A'.charCodeAt(0) + alphabet_count7) + coordinate_count6 + ">";
                        alphabet_count7++;
                    }
                    if (i == 7) {
                        tbody += "id=" + String.fromCharCode('A'.charCodeAt(0) + alphabet_count8) + coordinate_count7 + ">";
                        alphabet_count8++;
                    }
                    if (i == 8) {
                        tbody += "id=" + String.fromCharCode('A'.charCodeAt(0) + alphabet_count9) + coordinate_count8 + ">";
                        alphabet_count9++;
                    }
                    if (i == 9) {
                        tbody += "id=" + String.fromCharCode('A'.charCodeAt(0) + alphabet_count10) + coordinate_count9 + ">";
                        alphabet_count10++;
                    }
                    if (i == 10) {
                        tbody += "id=" + String.fromCharCode('A'.charCodeAt(0) + alphabet_count11) + coordinate_count10 + ">";
                        alphabet_count11++;
                    }
                    if (i == 11) {
                        tbody += "id=" + String.fromCharCode('A'.charCodeAt(0) + alphabet_count12) + coordinate_count11 + ">";
                        alphabet_count12++;
                    }
                    if (i == 12) {
                        tbody += "id=" + String.fromCharCode('A'.charCodeAt(0) + alphabet_count13) + coordinate_count12 + ">";
                        alphabet_count13++;
                    }
                    if (i == 13) {
                        tbody += "id=" + String.fromCharCode('A'.charCodeAt(0) + alphabet_count14) + coordinate_count13 + ">";
                        alphabet_count14++;
                    }
                    if (i == 14) {
                        tbody += "id=" + String.fromCharCode('A'.charCodeAt(0) + alphabet_count15) + coordinate_count14 + ">";
                        alphabet_count15++;
                    }
                    if (i == 15) {
                        tbody += "id=" + String.fromCharCode('A'.charCodeAt(0) + alphabet_count16) + coordinate_count15 + ">";
                        alphabet_count16++;
                    }
                    if (i == 16) {
                        tbody += "id=" + String.fromCharCode('A'.charCodeAt(0) + alphabet_count17) + coordinate_count16 + ">";
                        alphabet_count17++;
                    }
                    if (i == 17) {
                        tbody += "id=" + String.fromCharCode('A'.charCodeAt(0) + alphabet_count18) + coordinate_count17 + ">";
                        alphabet_count18++;
                    }
                    if (i == 18) {
                        tbody += "id=" + String.fromCharCode('A'.charCodeAt(0) + alphabet_count19) + coordinate_count18 + ">";
                        alphabet_count19++;
                    }
                    if (i == 19) {
                        tbody += "id=" + String.fromCharCode('A'.charCodeAt(0) + alphabet_count20) + coordinate_count19 + ">";
                        alphabet_count20++;
                    }
                    if (i == 20) {
                        tbody += "id=" + String.fromCharCode('A'.charCodeAt(0) + alphabet_count21) + coordinate_count20 + ">";
                        alphabet_count21++;
                    }
                    if (i == 21) {
                        tbody += "id=" + String.fromCharCode('A'.charCodeAt(0) + alphabet_count22) + coordinate_count21 + ">";
                        alphabet_count22++;
                    }
                    if (i == 22) {
                        tbody += "id=" + String.fromCharCode('A'.charCodeAt(0) + alphabet_count23) + coordinate_count22 + ">";
                        alphabet_count23++;
                    }
                    if (i == 23) {
                        tbody += "id=" + String.fromCharCode('A'.charCodeAt(0) + alphabet_count24) + coordinate_count23 + ">";
                        alphabet_count24++;
                    }
                    if (i == 24) {
                        tbody += "id=" + String.fromCharCode('A'.charCodeAt(0) + alphabet_count25) + coordinate_count24 + ">";
                        alphabet_count25++;
                    }
                    if (i == 25) {
                        tbody += "id=" + String.fromCharCode('A'.charCodeAt(0) + alphabet_count26) + coordinate_count25 + ">";
                        alphabet_count26++;
                    }
                    if (i == 26) {
                        tbody += "id=" + String.fromCharCode('A'.charCodeAt(0) + alphabet_count27) + coordinate_count26 + ">";
                        alphabet_count27++;
                    }
                    tbody += "</td>";
                }
            }
            tbody += "</tr>";
        }
        tfooter = "</table>";
        document.getElementById('table2').innerHTML = theader + tbody + tfooter;
    }

    function tdClick(event) {
	
        event.target.removeAttribute('class'); //Keeps cells from toggling color, but it removes the awkward behavior of cells holding multiple colors
        if (document.getElementById('selected1').checked) {
            let color = document.getElementById('log1').getAttribute('name');
			event.target.classList.toggle(color);
			let row = document.getElementById('rownumber1');
			row.innerHTML += event.target.getAttribute('id') + ",";
		}   
        if (document.getElementById('selected2').checked) {
            let color = document.getElementById('log2').getAttribute('name');
            event.target.classList.toggle(color);
			let row = document.getElementById('rownumber2');
			row.innerHTML += event.target.getAttribute('id') + ",";
        }
        if (document.getElementById('selected3').checked) {
            let color = document.getElementById('log3').getAttribute('name');
            event.target.classList.toggle(color);
			let row = document.getElementById('rownumber3');
			row.innerHTML += event.target.getAttribute('id') + ",";
        }
        if (document.getElementById('selected4').checked) {
            let color = document.getElementById('log4').getAttribute('name');
            event.target.classList.toggle(color);
			let row = document.getElementById('rownumber4');
			row.innerHTML += event.target.getAttribute('id') + ",";
        }
        if (document.getElementById('selected5').checked) {
            let color = document.getElementById('log5').getAttribute('name');
            event.target.classList.toggle(color);
			let row = document.getElementById('rownumber5');
			row.innerHTML += event.target.getAttribute('id') + ",";
        }
        if (document.getElementById('selected6').checked) {
            let color = document.getElementById('log6').getAttribute('name');
            event.target.classList.toggle(color);
			let row = document.getElementById('rownumber6');
			row.innerHTML += event.target.getAttribute('id') + ",";
        }
        if (document.getElementById('selected7').checked) {
            let color = document.getElementById('log7').getAttribute('name');
            event.target.classList.toggle(color);
			let row = document.getElementById('rownumber7');
			row.innerHTML += event.target.getAttribute('id') + ",";
        }
        if (document.getElementById('selected8').checked) {
            let color = document.getElementById('log8').getAttribute('name');
            event.target.classList.toggle(color);
			let row = document.getElementById('rownumber8');
			row.innerHTML += event.target.getAttribute('id') + ",";
        }
        if (document.getElementById('selected9').checked) {
            let color = document.getElementById('log9').getAttribute('name');
            event.target.classList.toggle(color);
			let row = document.getElementById('rownumber9');
			row.innerHTML += event.target.getAttribute('id') + ",";
        }
        if (document.getElementById('selected10').checked) {
            let color = document.getElementById('log10').getAttribute('name');
            event.target.classList.toggle(color);  
			let row = document.getElementById('rownumber10');
			row.innerHTML += event.target.getAttribute('id') + ",";     
        }
    }

    let log1_prev;
    let log2_prev;
    let log3_prev;
    let log4_prev;
    let log5_prev;
    let log6_prev;
    let log7_prev;
    let log8_prev;
    let log9_prev;
    let log10_prev;

    function storePrevSelected(prev, log) {
        if (log == 1) {
            log1_prev = prev;
        }
        if (log == 2) {
            log2_prev = prev;
        }
        if (log == 3) {
            log3_prev = prev;
        }
        if (log == 4) {
            log4_prev = prev;
        }
        if (log == 5) {
            log5_prev = prev;
        }
        if (log == 6) {
            log6_prev = prev;
        }
        if (log == 7) {
            log8_prev = prev;
        }
        if (log == 8) {
            log8_prev = prev;
        }
        if (log == 9) {
            log9_prev = prev;
        }
        if (log == 10) {
            log10_prev = prev;
        }
    }

    function log1_update(selected, log) {   			
            let curr = selected;
            let log2 = document.getElementById("log2").getAttribute('name');
            let log3 = document.getElementById("log3").getAttribute('name');
            let log4 = document.getElementById("log4").getAttribute('name');
            let log5 = document.getElementById("log5").getAttribute('name');
            let log6 = document.getElementById("log6").getAttribute('name');
            let log7 = document.getElementById("log7").getAttribute('name');
            let log8 = document.getElementById("log8").getAttribute('name');
            let log9 = document.getElementById("log9").getAttribute('name');
            let log10 = document.getElementById("log10").getAttribute('name');

            if (log2 == curr || log3 == curr || log4 == curr || log5 == curr || log6 == curr || log7 == curr || log8 == curr || log9 == curr || log10 == curr) {
                document.getElementById('alert').innerHTML = "Please choose a color that hasn't been chosen yet";
                document.getElementById('colors1').value = log1_prev;
				return false;
            }

            if (document.getElementById('alert').innerHTML.length != 0) {
                document.getElementById('alert').innerHTML = "";
            }
			document.getElementById('log1').setAttribute('name', selected);
			let color = document.getElementById('log1').getAttribute('name');
			updateCellColor1(color);
    }



    function log2_update(selected, log) {   
            let curr = selected;
            let log1 = document.getElementById("log1").getAttribute('name');
            let log3 = document.getElementById("log3").getAttribute('name');
            let log4 = document.getElementById("log4").getAttribute('name');
            let log5 = document.getElementById("log5").getAttribute('name');
            let log6 = document.getElementById("log6").getAttribute('name');
            let log7 = document.getElementById("log7").getAttribute('name');
            let log8 = document.getElementById("log8").getAttribute('name');
            let log9 = document.getElementById("log9").getAttribute('name');
            let log10 = document.getElementById("log10").getAttribute('name');

            if (log1 == curr || log3 == curr || log4 == curr || log5 == curr || log6 == curr || log7 == curr || log8 == curr || log9 == curr || log10 == curr) {
                document.getElementById('alert').innerHTML = "Please choose a color that hasn't been chosen yet";
                document.getElementById('colors2').value = log2_prev;
                return false;
            }

            if (document.getElementById('alert').innerHTML.length != 0) {
                document.getElementById('alert').innerHTML = "";
            }
			document.getElementById('log2').setAttribute('name', selected);
			let color = document.getElementById('log2').getAttribute('name');
			updateCellColor2(color);
    }

    function log3_update(selected, log) {           
            let curr = selected;
            let log1 = document.getElementById("log1").getAttribute('name');
            let log2 = document.getElementById("log2").getAttribute('name');
            let log4 = document.getElementById("log4").getAttribute('name');
            let log5 = document.getElementById("log5").getAttribute('name');
            let log6 = document.getElementById("log6").getAttribute('name');
            let log7 = document.getElementById("log7").getAttribute('name');
            let log8 = document.getElementById("log8").getAttribute('name');
            let log9 = document.getElementById("log9").getAttribute('name');
            let log10 = document.getElementById("log10").getAttribute('name');

            if (log1 == curr || log2 == curr || log4 == curr || log5 == curr || log6 == curr || log7 == curr || log8 == curr || log9 == curr || log10 == curr) {
                document.getElementById('alert').innerHTML = "Please choose a color that hasn't been chosen yet";
                document.getElementById('colors3').value = log3_prev;
                return false;
            }

            if (document.getElementById('alert').innerHTML.length != 0) {
                document.getElementById('alert').innerHTML = "";
            }
			document.getElementById('log3').setAttribute('name', selected);
			let color = document.getElementById('log3').getAttribute('name');
			updateCellColor3(color);
    }
    
    function log4_update(selected, log) {   
            let curr = selected;
            let log1 = document.getElementById("log1").getAttribute('name');
            let log2 = document.getElementById("log2").getAttribute('name');
            let log4 = document.getElementById("log4").getAttribute('name');
            let log5 = document.getElementById("log5").getAttribute('name');
            let log6 = document.getElementById("log6").getAttribute('name');
            let log7 = document.getElementById("log7").getAttribute('name');
            let log8 = document.getElementById("log8").getAttribute('name');
            let log9 = document.getElementById("log9").getAttribute('name');
            let log10 = document.getElementById("log10").getAttribute('name');

            if (log1 == curr || log2 == curr || log3 == curr || log5 == curr || log6 == curr || log7 == curr || log8 == curr || log9 == curr || log10 == curr) {
                document.getElementById('alert').innerHTML = "Please choose a color that hasn't been chosen yet";
                document.getElementById('colors4').value = log4_prev;

                return false;
            }

            if (document.getElementById('alert').innerHTML.length != 0) {
                document.getElementById('alert').innerHTML = "";
            }   
			document.getElementById('log4').setAttribute('name', selected);
			let color = document.getElementById('log4').getAttribute('name');
			updateCellColor4(color);
    }

    function log5_update(selected, log) {   
            let curr = selected;
            let log1 = document.getElementById("log1").getAttribute('name');
            let log2 = document.getElementById("log2").getAttribute('name');
            let log4 = document.getElementById("log4").getAttribute('name');
            let log3 = document.getElementById("log3").getAttribute('name');
            let log6 = document.getElementById("log6").getAttribute('name');
            let log7 = document.getElementById("log7").getAttribute('name');
            let log8 = document.getElementById("log8").getAttribute('name');
            let log9 = document.getElementById("log9").getAttribute('name');
            let log10 = document.getElementById("log10").getAttribute('name');

            if (log1 == curr || log2 == curr || log3 == curr || log4 == curr || log6 == curr || log7 == curr || log8 == curr || log9 == curr || log10 == curr) {
                document.getElementById('alert').innerHTML = "Please choose a color that hasn't been chosen yet";
                document.getElementById('colors5').value = log5_prev;
                return false;
            }

            if (document.getElementById('alert').innerHTML.length != 0) {
                document.getElementById('alert').innerHTML = "";
            }
			document.getElementById('log5').setAttribute('name', selected);
			let color = document.getElementById('log5').getAttribute('name');
			updateCellColor5(color);

    }

    function log6_update(selected, log) {   
            let curr = selected;
            let log1 = document.getElementById("log1").getAttribute('name');
            let log2 = document.getElementById("log2").getAttribute('name');
            let log4 = document.getElementById("log4").getAttribute('name');
            let log3 = document.getElementById("log3").getAttribute('name');
            let log5 = document.getElementById("log5").getAttribute('name');
            let log7 = document.getElementById("log7").getAttribute('name');
            let log8 = document.getElementById("log8").getAttribute('name');
            let log9 = document.getElementById("log9").getAttribute('name');
            let log10 = document.getElementById("log10").getAttribute('name');

            if (log1 == curr || log2 == curr || log3 == curr || log4 == curr || log5 == curr || log7 == curr || log8 == curr || log9 == curr || log10 == curr) {
                document.getElementById('alert').innerHTML = "Please choose a color that hasn't been chosen yet";
                document.getElementById('colors6').value = log6_prev;
                return false;
            }

            if (document.getElementById('alert').innerHTML.length != 0) {
                document.getElementById('alert').innerHTML = "";
            }
			document.getElementById('log6').setAttribute('name', selected);
			let color = document.getElementById('log6').getAttribute('name');
			updateCellColor6(color);

    }

    function log7_update(selected, log) {    
            let curr = selected;
            let log1 = document.getElementById("log1").getAttribute('name');
            let log2 = document.getElementById("log2").getAttribute('name');
            let log4 = document.getElementById("log4").getAttribute('name');
            let log3 = document.getElementById("log3").getAttribute('name');
            let log5 = document.getElementById("log5").getAttribute('name');
            let log6 = document.getElementById("log6").getAttribute('name');
            let log8 = document.getElementById("log8").getAttribute('name');
            let log9 = document.getElementById("log9").getAttribute('name');
            let log10 = document.getElementById("log10").getAttribute('name');

            if (log1 == curr || log2 == curr || log3 == curr || log4 == curr || log5 == curr || log6 == curr || log8 == curr || log9 == curr || log10 == curr) {
                document.getElementById('alert').innerHTML = "Please choose a color that hasn't been chosen yet";
                document.getElementById('colors7').value = log7_prev;
                return false;
            }

            if (document.getElementById('alert').innerHTML.length != 0) {
                document.getElementById('alert').innerHTML = "";
            }   
			document.getElementById('log7').setAttribute('name', selected);
			let color = document.getElementById('log7').getAttribute('name');
			updateCellColor7(color);

    }

    function log8_update(selected, log) {   
            let curr = selected;
            let log1 = document.getElementById("log1").getAttribute('name');
            let log2 = document.getElementById("log2").getAttribute('name');
            let log4 = document.getElementById("log4").getAttribute('name');
            let log3 = document.getElementById("log3").getAttribute('name');
            let log5 = document.getElementById("log5").getAttribute('name');
            let log6 = document.getElementById("log6").getAttribute('name');
            let log7 = document.getElementById("log7").getAttribute('name');
            let log9 = document.getElementById("log9").getAttribute('name');
            let log10 = document.getElementById("log10").getAttribute('name');

            if (log1 == curr || log2 == curr || log3 == curr || log4 == curr || log5 == curr || log6 == curr || log7 == curr || log9 == curr || log10 == curr) {
                document.getElementById('alert').innerHTML = "Please choose a color that hasn't been chosen yet";
                document.getElementById('colors8').value = log8_prev;

                return false;
            }

            if (document.getElementById('alert').innerHTML.length != 0) {
                document.getElementById('alert').innerHTML = "";
            }   
			document.getElementById('log8').setAttribute('name', selected);
			let color = document.getElementById('log8').getAttribute('name');
			updateCellColor8(color);

    }

    function log9_update(selected, log) {   
            let curr = selected;
            let log1 = document.getElementById("log1").getAttribute('name');
            let log2 = document.getElementById("log2").getAttribute('name');
            let log4 = document.getElementById("log4").getAttribute('name');
            let log3 = document.getElementById("log3").getAttribute('name');
            let log5 = document.getElementById("log5").getAttribute('name');
            let log6 = document.getElementById("log6").getAttribute('name');
            let log7 = document.getElementById("log7").getAttribute('name');
            let log8 = document.getElementById("log8").getAttribute('name');
            let log10 = document.getElementById("log10").getAttribute('name');

            if (log1 == curr || log2 == curr || log3 == curr || log4 == curr || log5 == curr || log6 == curr || log7 == curr || log8 == curr || log10 == curr) {
                document.getElementById('alert').innerHTML = "Please choose a color that hasn't been chosen yet";
                let selected = document.querySelector('#colors9');
                document.getElementById('colors9').value = log9_prev;
                return false;
            }

            if (document.getElementById('alert').innerHTML.length != 0) {
                document.getElementById('alert').innerHTML = "";
            }   
			document.getElementById('log9').setAttribute('name', selected);
			let color = document.getElementById('log9').getAttribute('name');
			updateCellColor9(color);

    }

    function log10_update(selected, log) {  
            let curr = selected;
            let log1 = document.getElementById("log1").getAttribute('name');
            let log2 = document.getElementById("log2").getAttribute('name');
            let log4 = document.getElementById("log4").getAttribute('name');
            let log3 = document.getElementById("log3").getAttribute('name');
            let log5 = document.getElementById("log5").getAttribute('name');
            let log6 = document.getElementById("log6").getAttribute('name');
            let log7 = document.getElementById("log7").getAttribute('name');
            let log8 = document.getElementById("log8").getAttribute('name');
            let log9 = document.getElementById("log9").getAttribute('name');

            if (log1 == curr || log2 == curr || log3 == curr || log4 == curr || log5 == curr || log6 == curr || log7 == curr || log8 == curr || log9 == curr) {
                document.getElementById('alert').innerHTML = "Please choose a color that hasn't been chosen yet";
                document.getElementById('colors10').value = log10_prev;

                return false;
            }

            if (document.getElementById('alert').innerHTML.length != 0) {
                document.getElementById('alert').innerHTML = "";
            }   
			document.getElementById('log10').setAttribute('name', selected);
			let color = document.getElementById('log10').getAttribute('name');
			updateCellColor10(color);

    }


    function updateCellColor1(selected) {
		if (document.getElementById('selected1').checked) {
			let curr_color = document.getElementById('log1').getAttribute('name');
			let cells = document.querySelectorAll('.' + log1_prev);
			Array.from(cells).forEach(function(cell) {
				cell.classList.remove(log1_prev);
				cell.classList.add(selected);
			});
		}
    }

	function updateCellColor2(selected) {
		if (document.getElementById('selected2').checked) {
			let curr_color = document.getElementById('log2').getAttribute('name');
			let cells = document.querySelectorAll('.' + log2_prev);
			Array.from(cells).forEach(function(cell) {
				cell.classList.remove(log2_prev);
				cell.classList.add(selected);
			});
		}
    }

	function updateCellColor3(selected) {
		if (document.getElementById('selected3').checked) {
			let curr_color = document.getElementById('log3').getAttribute('name');
			let cells = document.querySelectorAll('.' + log3_prev);
			Array.from(cells).forEach(function(cell) {
				cell.classList.remove(log3_prev);
				cell.classList.add(selected);
			});
		}
    }

	function updateCellColor4(selected) {
		if (document.getElementById('selected4').checked) {
			let curr_color = document.getElementById('log4').getAttribute('name');
			let cells = document.querySelectorAll('.' + log4_prev);
			Array.from(cells).forEach(function(cell) {
				cell.classList.remove(log4_prev);
				cell.classList.add(selected);
			});
		}
    }

	function updateCellColor5(selected) {
		if (document.getElementById('selected5').checked) {
			let curr_color = document.getElementById('log5').getAttribute('name');
			let cells = document.querySelectorAll('.' + log5_prev);
			Array.from(cells).forEach(function(cell) {
				cell.classList.remove(log5_prev);
				cell.classList.add(selected);
			});
		}
    }

	function updateCellColor6(selected) {
		if (document.getElementById('selected6').checked) {
			let curr_color = document.getElementById('log6').getAttribute('name');
			let cells = document.querySelectorAll('.' + log6_prev);
			Array.from(cells).forEach(function(cell) {
				cell.classList.remove(log6_prev);
				cell.classList.add(selected);
			});
		}
    }

	function updateCellColor7(selected) {
		if (document.getElementById('selected7').checked) {
			let curr_color = document.getElementById('log7').getAttribute('name');
			let cells = document.querySelectorAll('.' + log7_prev);
			Array.from(cells).forEach(function(cell) {
				cell.classList.remove(log7_prev);
				cell.classList.add(selected);
			});
		}
    }

	function updateCellColor8(selected) {
		if (document.getElementById('selected8').checked) {
			let curr_color = document.getElementById('log8').getAttribute('name');
			let cells = document.querySelectorAll('.' + log8_prev);
			Array.from(cells).forEach(function(cell) {
				cell.classList.remove(log8_prev);
				cell.classList.add(selected);
			});
		}
    }

	function updateCellColor9(selected) {
		if (document.getElementById('selected9').checked) {
			let curr_color = document.getElementById('log9').getAttribute('name');
			let cells = document.querySelectorAll('.' + log9_prev);
			Array.from(cells).forEach(function(cell) {
				cell.classList.remove(log9_prev);
				cell.classList.add(selected);
			});
		}
    }

	function updateCellColor10(selected) {
		if (document.getElementById('selected10').checked) {
			let curr_color = document.getElementById('log10').getAttribute('name');
			let cells = document.querySelectorAll('.' + log10_prev);
			Array.from(cells).forEach(function(cell) {
				cell.classList.remove(log10_prev);
				cell.classList.add(selected);
			});
		}
    }


    function printPage(){
                var params = {
                    upper: $("#table").html(),
                    lower: $("#table2").html(),
                    name: $("#companyName").prop('outerHTML'),
                    logo: $("#logo").prop('outerHTML')
                };

                const form = document.createElement('form');
                form.method = "post";
                form.action = "print";
                form.target = "_blank";
                for (const key in params) {
                    if (params.hasOwnProperty(key)) {
                        const hiddenField = document.createElement('input');
                        hiddenField.type = 'hidden';
                        hiddenField.name = key;
                        hiddenField.value = params[key];

                        form.appendChild(hiddenField);
                    }
                }

                document.body.appendChild(form);
                form.submit();
        }

</script>
