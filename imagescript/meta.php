<?php


echo "<img src='sr-y0110.jpg' height='200px'></img><br>";

echo "Header Test:<br />\n";
$exif = exif_read_data('sr-y0110.jpg', 'IFD0');
echo $exif===false ? "No header data found.<br />\n" : "Image contains headers<br />\n";

$exif = exif_read_data('sr-y0110.jpg', 0, true);
echo "Metadata:<br />\n";

$size = getimagesize('sr-y0110.jpg', $info);
if(is_array($info)){
	$iptc = iptcparse($info['APP13']);
	foreach(array_keys($iptc) as $s){
		$c = count($iptc[$s]);
		for($i = 0; $i < $c; $i++){
			echo $s.' = '.$iptc[$s][$i].'<br>';	
		}
	}
}

foreach ($exif as $key => $section) {
    foreach ($section as $name => $val) {
        echo "$key.$name: $val<br />\n";
    }
}
?>
