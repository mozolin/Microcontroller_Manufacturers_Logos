<?

$fn = "";
if(!empty($argv[1])) {
	$fn = $argv[1];
}

if(file_exists($fn)) {
	$type = pathinfo($fn, PATHINFO_EXTENSION);
	$data = file_get_contents($fn);
	$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
	file_put_contents($fn."_base64", $base64);
} else {
	echo "File ".$fn." not found!\n";
}
