<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Rubicon is a web application that eases user input of accented characters through the use of intuitive, customizable keywords." />
        <meta name="keywords" content="Rubicon, Classics, Yale, Latin" />
        <title>Rubicon</title>
        <style type="text/css">
		body {
				background-color: rgb(30,30,30);
				font-family:"Palatino Linotype","Book Antiqua", Palatino, serif;
				font-size: 12px;
		}

		#container {
				width: 1050px;
				height: 100%;
				background-color: rgb(110,11,6);
				margin: 0 auto;
				text-align: left;
				position: relative;
				top: -5px;
		}

		#header {
				color: rgb(250,250,250);
				text-align: center;
				padding-left: 2px;
				font-family:"Palatino Linotype","Book Antiqua", Palatino, serif; font-size: 55px;
				background-color: rgb(30,30,30);
				background-image: url(imgs/Yalensimed.png);
				background-repeat: no-repeat; background-position: 5px 5px;
				padding-bottom: 7px;
		 }
		 
		#separator {
				width: 1050px;
				height: 10px;
				border-top: 15px solid #211E1B;
		}

		#directions {
				color: white;
				margin-left: 3px;
		}
		#toolbar {
				margin-left: 3px;
		}
			
		#legendtable {
				position: relative;
				top: -120px;
				background-color: rgb(90,6,3);
				margin-left:30px; margin-bottom: 20px;
				font-size: 15px;
				-moz-border-radius-bottomright: 5px;
				-moz-border-radius-bottomleft: 5px;
		}
		
		caption {
				background-color: rgb(50,0,0);
				color: rgb(100,100,100);
				-moz-border-radius-topleft: 2px;
				-moz-border-radius-topright: 2px;
		}
		
		#legendtable h3 {
				background-color: rgb(50,0,0);
				color: rgb(100,100,100);
				-moz-border-radius-topleft: 2px;
				-moz-border-radius-topright: 2px;
				text-align: center;
				font-size: 14px;
		}
		
		#footer {
			text-align: right;
				 color: white;
				 font-family:"Palatino Linotype","Book Antiqua", Palatino, serif;
				 font-size: 12px;
				 padding-top: 10px;
				 padding-right: 3px;
				 padding-bottom: 3px;
				 background-color: rgb(30,30,30);
				 height: 50px;
				 margin-top: 5px;
				 border-top: 1px solid white;
		}
		
		table {
				color: gray;
				text-align: left;
		}
		
		textarea {
				margin: 1px;
				margin-left: 6px; margin-bottom: 6px;
				color: black;
				font-family:"Palatino Linotype","Book Antiqua", Palatino, serif;
				font-size: 14px;
				background-image: url(imgs/SoldierofRomebox.png); 
				background-repeat: no-repeat;
				width: 700px;
				height: 800px;
				border: 0px;
		}
		a { color: gray; }
        </style>

        <link rel="icon" href="favicon.ico">
        <link rel="shortcut icon" href="favicon.ico">

<!-- Character Sets -->
        <script type="text/javascript" src="symbols.js"></script>
        <script type="text/javascript" src="jscripts/jquery.js"></script>
        <script type="text/javascript" src="jscripts/jquery-ui.js"></script>
        <script type="text/javascript">

          function makeLegend(){
            var table = "<div id=\"legendtable\" width=\"50px\"><h3>LATIN</h3>";
            table += "<div><table><tr><th>Symbol</th><th>Keyword</th><th>Symbol</th><th>Keyword</th></tr>";
          if( latin.length%2 == 1){
            for(var count=0; count < Math.floor(latin.length/2); count+2){
                table += "<tr><td>"+latin[count][1]+"</td><td>"+latin[count][0]+";</td><td>"+latin[count+1][1]+"</td><td>"+latin[count+1][0]+";</td></tr>";
            }
            table += "<tr><td>"+latin[latin.length-1][1]+"</td><td>"+latin[latin.length-1][0]+"</td></tr>";
          }
          if( latin.length%2 == 0){
            for(var count=0; count < latin.length; count+=2){
                table += "<tr><td>"+latin[count][1]+"</td><td>"+latin[count][0]+";</td><td>"+latin[count+1][1]+"</td><td>"+latin[count+1][0]+";</td></tr>";
            }
          }
            table += "</table>";

            table += "</div>";

//            document.getElementById("legend").innerHTML = table;

            table += "<h3>FRENCH</h3>";
            table += "<div><table><tr><th>Symbol</th><th>Keyword</th><th>Symbol</th><th>Keyword</th></tr>";
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

            table += "</table></div></div>";
            list = table;

            document.getElementById("legend").innerHTML += list;

            document.getElementById("inputWindow").onkeyup = transform;
			
			$(function(){
					   $("#legendtable").accordion({ header: 'h3' });
					   });
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
    <body onload="makeLegend();">
      <div id="container">
            <div id="header">R&#362;B&#298;C&#332;N</div>
            <div id="separator"></div>
        <div id="content">
            <table>
            <tr><td>
            <div id="toolbar">This is where the toolbar is.</div>
            <div id="inputWindow">
                <span id="directions">Type your text below, substituting the "keyword" (including the semi-colon) for any accented character you require.</span><br>
                <textarea id="input"></textarea>
            </div>
            </td>
            <td>
            <span id="legend"></span>            </td>
            </table>

            <div id="feedback"></div>
        </div>
        <div id="footer">Copyright 2008 &copy; Yale University<br>Instructional Technology Group<br>Built by Marq Jefferson<br />Please submit feedback to <a href="mailto:itg@yale.edu">itg@yale.edu</a>.</div>
     </div>
    </body>
</html>
