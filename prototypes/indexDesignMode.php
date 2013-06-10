<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
				background-color: rgb(90,70,70);
				-moz-border-radius: 5px;
				margin-bottom: 2px;
		}
			
		#legendtable {
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
		
		#input {
				margin: 1px;
				margin-left: 6px; margin-bottom: 6px;
				background-color: rgb(170,170,170);
				font-family:"Palatino Linotype","Book Antiqua", Palatino, serif;
				font-size: 14px;
				background-image: url(imgs/SoldierofRomebox.png); 
				background-repeat: no-repeat;
				width: 700px;
				height: 800px;
				border: 1px solid white;
		}
		
		#button {
				margin: 2px;
				padding: 4px;
				font-size: 16px;
				background-color: rgb(30,30,30);
				color: white;
				-moz-border-radius: 3px;
		}
		
		#toolbar img { height: 12px;
		
		}
        </style>

        <link rel="icon" href="favicon.ico">
        <link rel="shortcut icon" href="favicon.ico">
        <script type="text/javascript">       
        
        </script>
        <script type="text/javascript">
		
		  function enableDesign(){
		    var myiFrame = document.getElementById("input");
			var theEditor = myiFrame.contentDocument.getElementById("main");
			
			 if(document.all){
				myiFrame.contentWindow.document.designMode = "on"; 
			 } else {
			myiFrame.contentDocument.designMode = "on";
	
			myiFrame.contentDocument.getElementById("main").addEventListener("keyup",function (evt){ theEditor.style.color = "red"; }, true);
	
			 }
			
		  }
		  
		  
		   function iFrameEvt(){
			var myiFrame = document.getElementById("input");
			myiFrame.contentDocument.getElementById("main").addEventListener("keypress",function (evt){ alert("The event has been added."); }, false);
		   }
		   
		   function toggle(obj, command){
			   var myiFrame = document.getElementById("input");
			 if(command == "B"){
				 obj.style.border = (obj.style.border == "1px solid darkblue") ? "0" : "1px solid darkblue";
				 
				  if(document.all){
					//  myiFrame.document.contentWindow.designMode = "on";
					  myiFrame.contentWindow.document.execCommand("bold", false, null);
				  } else {
					  document.getElementById("input").contentDocument.execCommand("bold", false, null);
				  }
				 document.getElementById("input").contentWindow.focus();
			 }
			 if(command == "I"){
				 obj.style.border = (obj.style.border == "1px solid darkblue") ? "0" : "1px solid darkblue";
				 document.getElementById("input").contentDocument.execCommand("italic", false, null);
				 document.getElementById("input").contentWindow.focus();
			 }
			 if(command == "U"){
				 obj.style.border = (obj.style.border == "1px solid darkblue") ? "0" : "1px solid darkblue";
				 document.getElementById("input").contentDocument.execCommand("underline", false, null);
				 document.getElementById("input").contentWindow.focus();
			 }
		   }
		</script>
        
<!-- Character Sets -->
        <script type="text/javascript" src="symbols.js"></script>
        
        <script type="text/javascript">

          function makeLegend(){
            var table = "<table id=\"legendtable\" width=\"50px\"><caption>LATIN</caption><tr><td>";
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

            table += "</tr></table>";

            document.getElementById("legend").innerHTML = table;

            var table = "<table id=\"legendtable\" width=\"50px\"><caption>FRENCH</caption><tr><td>";
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

            table += "</table>";
            list = table;

            document.getElementById("legend").innerHTML += list;

            document.getElementById("inputWindow").onkeyup = transform;
          }

          function transform(evt){
             alert("This is working.");
                var feedback = document.getElementById("feedback");
				var iFrameDoc = document.getElementById("input").contentDocument;
                 if (!evt) var evt = window.event;
                var trigger = evt.keyCode;
          //      feedback.innerHTML = trigger;
              if((trigger == 59) || (trigger == 186)){
                for(var countOne = 0; countOne < latin.length; countOne++){
                    var input = new RegExp(latin[countOne][0]+";","g");
                    var newstring = iFrameDoc.getElementById("main").innerHTML.replace(input,latin[countOne][1]);
                    iFrameDoc.getElementById("main").innerHTML = newstring;
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
    <body onload="makeLegend(); enableDesign();">
      <div id="container">
            <div id="header">R&#362;B&#298;C&#332;N</div>
            <div id="separator"></div>
        <div id="content">
            <table>
            <tr><td>
            <div id="toolbar"><img src="imgs/icons/bold.png" id="button" onClick="toggle(this, 'B');" /><img src="imgs/icons/italic.png" id="button" onClick="toggle(this, 'I');" /><img src="imgs/icons/underline.png" id="button" onClick="toggle(this, 'U');" /></div>
            <div id="inputWindow">
                <span id="directions">Type your text below, substituting the "keyword" (including the semi-colon) for any accented character you require.</span><br>
                <iframe id="input" src="simple.html" onLoad="iFrameEvt();"></iframe>
            </div>
            </td>
            <td>
            <span id="legend"></span>            </td>
            </table>

            <div id="feedback"></div>
        </div>
        <div id="footer">Copyright 2008 &copy; Yale University<br>Instructional Technology Group<br>Built by Marq Jefferson</div>
     </div>
    </body>
</html>
