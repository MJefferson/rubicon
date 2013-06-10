<html>
	<head>
		<script type="text/javascript" src="libs/raphael-min.js"></script>
		<style type="text/css">
			body { background-color: #949494; background-image: url(imgs/grid.png); text-align: center;}
			h1.main { color: #282627; }
			#graphicsContainer { width: 640px; height: 480px; background-color: #282627; border: 2px solid white; margin: 0 auto; }
			#toolbar.button { padding: 4px; width: 40px;}
		</style>
		<script type="text/javascript">
		window.onload = function(){
			paper = Raphael("graphicsContainer", 640, 480);
			activeBuildElement = null;
			function showGrid(){
				//paper.width and paper.height
				var numXLines = Math.floor(paper.width/10);
				var numYLines = Math.floor(paper.height/10);
				
				for(var i = 0; i <= numXLines; i++){
					var x = i * 10;
					paper.path(Raphael.format("M{0},{1}L{2},{3}", x, 0, x, paper.height));
					
				}
				for(var j = 0; j <= numXLines; j++){
					var y = j * 10;
					paper.path(Raphael.format("M{0},{1}L{2},{3}", 0, y, paper.width, y));
					
				}
			}
			showGrid();
			document.getElementById("buildBasilica").onclick = function(){
				var rawX = Math.floor((paper.width-50)/2);
				var rawY = Math.floor((paper.height - 250) /2);
				var coords = snapToGrid(rawX, rawY);
				
				activeBuildElement = paper.rect( coords.x, coords.y, 50, 250).attr({fill: "#06F"});
				
			}
			document.getElementById("buildDomus").onclick = function(){
				var rawX = Math.floor((paper.width-50)/2);
				var rawY = Math.floor((paper.height - 50) /2);
				var coords = snapToGrid(rawX, rawY);
				
				activeBuildElement = paper.rect( coords.x, coords.y, 50, 50).attr({fill: "#00FF00"});
				
			}
			
			document.getElementById("graphicsContainer").onmouseover = function(e){
				if(activeBuildElement !== null){
					var bbox = document.getElementById("graphicsContainer").getBoundingClientRect();
					var coords = positionWithMouse(activeBuildElement, (e.clientX - bbox.left), (e.clientY - bbox.top));
					activeBuildElement.attr({x: coords.x, y: coords.y});
				}
			}
			
			document.getElementById("graphicsContainer").onclick = function(e){
				if(activeBuildElement !== null){
					activeBuildElement = null;
				}
			}
			function snapToGrid( rawX, rawY){
				var X;
					if( rawX % 10 === 0 ){
						X = rawX;
					} else if (rawX % 10 < 6){
						X = rawX - (rawX % 10);
					} else if (rawX % 10 > 5 ){
						X = rawX + (10 - (rawX % 10));
					}
				var Y;
					if( rawY % 10 === 0 ){
						Y = rawY;
					} else if (rawY % 10 < 6){
						Y = rawY - (rawY % 10);
					} else if (rawY % 10 > 5 ){
						Y = rawY + (10 - (rawY % 10));
					}
	
				return {x : X, y : Y};
			}
			function positionWithMouse(elem, mouseX, mouseY){
				var topleftX = mouseX - (elem.attr("width")/2);
				var topleftY = mouseY - (elem.attr("height")/2);
				var position = snapToGrid(topleftX, topleftY);
				return { x: position.x, y: position.y };
			}
		}
		</script>
	</head>
	<body>
		<h1 class="main">Master & Commander</h1>
		<div id="graphicsContainer"></div>
		<div id="toolbar"><input id="buildBasilica" type="button" value="Construct Basilica"/><input id="buildDomus" type="button" value="Construct Domus"/></div>
	</body>
</html>