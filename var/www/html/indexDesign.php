<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Rubicon</title>
        <style type="text/css">
            body { background-color: rgb(110,11,6);
                   font-family:"Palatino Linotype","Book Antiqua", Palatino, serif;
                   font-size: 12px; }


            #header { color: rgb(250,250,250);
                      text-align: center; -moz-border-radius-topleft: 5px; -moz-border-radius-topright: 5px;
			    padding: 10px;
                      padding-left: 2px; font-family: lucida; 
                      font-family:"Palatino Linotype","Book Antiqua", Palatino, serif; font-size: 55px;
                      background-color: #211E1B;
                      background-image: url(imgs/Yalensimed.png);
                      background-repeat: no-repeat; background-position: 5px 5px;
					  margin: 0px; opacity: .8;
			  }

		#sidebar { float: right; width: 30%; margin-top: 5px;}

            #directions { color: white; }


            #legendtable { background-color: rgb(90,6,3); opacity: .8; -moz-border-radius: 5px; width: 50px; }
            #legendlabel { background-color: rgb(50,0,0); color: rgb(100,100,100); }
            table { color: gray; text-align: left; }


            #footer { text-align: right; color: white; font-size: 12px; padding-top: 10px; padding-right: 3px; padding-bottom: 3px; background-color: black; height: 50px; margin-top: 5px;
 			    clear: right; }

            textarea {  margin: 1px; margin-left: 6px; margin-bottom: 6px; color: rgb(129,53,0); color: black;
                        font-family:"Palatino Linotype","Book Antiqua", Palatino, serif;
				background-image: url(imgs/SoldierofRomebox.png); 
                   	background-repeat: no-repeat;
				 }
        </style>

        <link rel="icon" href="favicon.ico">
        <link rel="shortcut icon" href="favicon.ico">
        <script type="text/javascript">
///Character Sets
            var latin = new Array(20);
            for(var count = 0; count < latin.length; count++){
            	latin[count] = new Array(2);
            }
            latin[0][0] = "Along"; latin[0][1] = "\u0100";
            latin[1][0] = "Elong"; latin[1][1] = "\u0112";
            latin[2][0] = "Ilong"; latin[2][1] = "\u012a";
            latin[3][0] = "Olong"; latin[3][1] = "\u014c";
            latin[4][0] = "Ulong"; latin[4][1] = "\u016a";
            latin[5][0] = "along"; latin[5][1] = "\u0101";
            latin[6][0] = "elong"; latin[6][1] = "\u0113";
            latin[7][0] = "ilong"; latin[7][1] = "\u012b";
            latin[8][0] = "olong"; latin[8][1] = "\u014d";
            latin[9][0] = "ulong"; latin[9][1] = "\u016b";

            latin[10][0] = "Ashort"; latin[10][1] = "\u0102";
            latin[11][0] = "Eshort"; latin[11][1] = "\u0114";
            latin[12][0] = "Ishort"; latin[12][1] = "\u01cf";
            latin[13][0] = "Oshort"; latin[13][1] = "\u014e";
            latin[14][0] = "Ushort"; latin[14][1] = "\u016c";
            latin[15][0] = "ashort"; latin[15][1] = "\u0103";
            latin[16][0] = "eshort"; latin[16][1] = "\u0115";
            latin[17][0] = "ishort"; latin[17][1] = "\u01d0";
            latin[18][0] = "oshort"; latin[18][1] = "\u014f";
            latin[19][0] = "ushort"; latin[19][1] = "\u016d";

		var french = new Array(34);
            for(var count = 0; count < french.length; count++){
			french[count] = new Array(2);
            }
            french[0][0] = "Aright"; french[0][1] = "\u00c0";
            french[1][0] = "aright"; french[1][1] = "\u00e0";
            french[2][0] = "Ahat"; french[2][1] = "\u00c2";
            french[3][0] = "ahat"; french[3][1] = "\u00e2";
            french[4][0] = "Adot"; french[4][1] = "\u00c4";
            french[5][0] = "adot"; french[5][1] = "\u00e4";
            french[6][0] = "Aold"; french[6][1] = "\u00c6";
            french[7][0] = "aold"; french[7][1] = "\u00e6";
            french[8][0] = "Csoft"; french[8][1] = "\u00c7";
            french[9][0] = "csoft"; french[9][1] = "\u00e7";
            french[10][0] = "Eleft"; french[10][1] = "\u00c9";
            french[11][0] = "eleft"; french[11][1] = "\u00e9";
            french[12][0] = "Eright"; french[12][1] = "\u00c8";
            french[13][0] = "eright"; french[13][1] = "\u00e8";
            french[14][0] = "Ehat"; french[14][1] = "\u00ca";
            french[15][0] = "ehat"; french[15][1] = "\u00ea";
            french[16][0] = "Edot"; french[16][1] = "\u00cb";
            french[17][0] = "edot"; french[17][1] = "\u00eb";
            french[18][0] = "Ihat"; french[18][1] = "\u00ce";
            french[19][0] = "ihat"; french[19][1] = "\u00ee";
            french[20][0] = "Idot"; french[20][1] = "\u00cf";
            french[21][0] = "idot"; french[21][1] = "\u00ef";
            french[22][0] = "Ohat"; french[22][1] = "\u00d4";
            french[23][0] = "ohat"; french[23][1] = "\u00f4";
            french[24][0] = "Oold"; french[24][1] = "\u0152";
            french[25][0] = "oold"; french[25][1] = "\u0153";
            french[26][0] = "Uright"; french[26][1] = "\u00d9";
            french[27][0] = "uright"; french[27][1] = "\u00f9";
            french[28][0] = "Uhat"; french[28][1] = "\u00db";
            french[29][0] = "uhat"; french[29][1] = "\u00fb";
            french[30][0] = "Udot"; french[30][1] = "\u00dc";
            french[31][0] = "udot"; french[31][1] = "\u00fc";
            french[32][0] = "\"left"; french[32][1] = "\u00ab";
            french[33][0] = "\"right"; french[33][1] = "\u00bb";



          function makeLegend(){
            var table = "<table id=\"legendtable\" width=\"50px\"><tr><td>";
            table += "<table><tr><th>Symbol</th><th>Keyword</th></tr>";
            for(var count=0; count < 10; count++){
                table += "<tr><td>"+latin[count][1]+"</td><td>"+latin[count][0]+";</td></tr>";
            }
            table += "</table></td>";

            table += "<td><table><tr><th>Symbol</th><th>Keyword</th></tr>";
            for(var count=10; count < latin.length; count++){
                table += "<tr><td>"+latin[count][1]+"</td><td>"+latin[count][0]+";</td></tr>";
            }
            table += "</table></td>";

            table += "</tr><tr><th colspan=2 align=center><div id=\"legendlabel\">LATIN</div></th></tr></table>";

            document.getElementById("legend").innerHTML = table;

//------

            var table = "<table id=\"legendtable\" width=\"50px\"><tr><td>";
            table += "<table><tr><th>Symbol</th><th>Keyword</th><th>Symbol</th><th>Keyword</th></tr>";
          if( french.length%2 == 1){
            for(var count=0; count < Math.floor(french.length/2); count+2){
                table += "<tr><td>"+french[count][1]+"</td><td>"+french[count][0]+";</td><td>"+french[count+1][1]+"</td><td>"+french[count+1][0]+";</td></tr>";
            }
            table += "<tr><td>"+french[french.length-1][1]+"</td><td>"+french[french.length-1][0]+"</td></tr>";
          }
          if( french.length%2 == 0){
            for(var count=0; count < french.length; count+=2){
                table += "<tr><td>"+french[count][1]+"</td><td>"+french[count][0]+";</td><td>"+french[count+1][1]+"</td><td>"+french[count+1][0]+";</td></tr>";
            }
          }

            table += "<tr><th colspan=4 align=center><div id=\"legendlabel\">FRENCH</div></th></tr></table>";
            list = table;

            document.getElementById("legend").innerHTML += list;

            document.getElementById("content").onkeyup = transform;
          }



          function transform(evt){

                var feedback = document.getElementById("feedback");
                 if (!evt) var evt = window.event;
                var trigger = evt.keyCode;
          //      feedback.innerHTML = trigger;
              if((trigger == 59) || (trigger == 186)){
                for(var countOne = 0; countOne < latin.length; countOne++){
                    var input = new RegExp(latin[countOne][0]+";","g");
                    var newstring = document.getElementById("input").value.replace(input,latin[countOne][1]);
                    document.getElementById("input").value = newstring;
                }
                for(var countOne = 0; countOne < french.length; countOne++){
                    var input = new RegExp(french[countOne][0]+";","g");
                    var newstring = document.getElementById("input").value.replace(input,french[countOne][1]);
                    document.getElementById("input").value = newstring;
                }
              }
          }
        </script>
    </head>
    <body onLoad="makeLegend();">

        <div id="header">R&#362;B&#298;C&#332;N</div>
        <div id="sidebar"><span id="legend"></span></div>
        <div id="content">
            <span id="toolbar">This is where the toolbar is.<br></span>
            <span id="directions">Type your text below, substituting the "keyword" (including the semi-colon) for any accented character you require.</span><br>
            <textarea id="input" rows="37" cols="98"></textarea>
            <span id="feedback"></span>
            
            <?php
            // put your code here
            ?>
        </div>
        <div id="footer">Copyright 2008 &copy; Yale University<br>Instructional Technology Group<br>Built by Marq Jefferson</div>


		<!-- Start of StatCounter Code -->
		<script type="text/javascript">
		var sc_project=4599961;
		var sc_invisible=1;
		var sc_partition=56;
		var sc_click_stat=1;
		var sc_security="befa3ae5";
		</script>

		<script type="text/javascript"
		src="http://www.statcounter.com/counter/counter.js"></script><noscript><div
		class="statcounter"><a title="free web stats"
		href="http://www.statcounter.com/free_web_stats.html" target="_blank"><img
		class="statcounter" src="http://c.statcounter.com/4599961/0/befa3ae5/1/"
		alt="free web stats" ></a></div></noscript>
		<!-- End of StatCounter Code -->
    </body>
</html>
