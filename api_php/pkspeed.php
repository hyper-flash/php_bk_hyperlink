<?php
if(isset($_GET['id'])){
$id = $_GET['id'];

$ua="Mozilla/5.0 (Windows NT 10.0; rv:86.0) Gecko/20100101 Firefox/86.0";
//$l="https://pkembed.com/2nbnfkg9s2fb.html";

$l="https://pkembed.com/embed-". $id .".html";

preg_match("/(\w+)\.html/",$l,$c);

$l="https://pkembed.com/".$c[0];


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $l);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION ,1);
curl_setopt($ch, CURLOPT_ENCODING,"");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
curl_setopt($ch, CURLOPT_TIMEOUT, 25);
$h = curl_exec($ch);
curl_close($ch);
require_once("JavaScriptUnpacker.php");
$jsu = new JavaScriptUnpacker();
$out = $jsu->Unpack($h);
preg_match("/src:\"([^\"]+)\"/",$out,$m);
$link= $m[1];

if($m[1] != null){
$data = [ 'code' => '1', 'url' => $m[1] ];
}else{
$data = [ 'code' => '0', 'url' => 'Not Found...' ];
}

header('Content-type: application/json');
echo json_encode( $data );

}else{
    $data = [ 'code' => '0', 'url' => 'Not Found...' ];


    header('Content-type: application/json');
    echo json_encode( $data );
}
?>