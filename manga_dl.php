<?php
// Allocate mem stack pointers
$no = '59';
$ep = "1";
$destDir = '/Users/andresortiz/Documents/Attack/Chapter_1/';
$url = 'http://z.mhcdn.net/store/manga/8886/001.0/compressed/e1.'.$no. '.jpg?v=11295921484/';
$file_headers = @get_headers($url);




for($i = 0; $i <=58;$i++){
	  $url = 'http://z.mhcdn.net/store/manga/8886/001.0/compressed/e'.$ep.$no.'jpg?v=11295921484/';
	  $n = uniqid(true);
		echo "Unique download ID : ".$n . "\n";
		echo "Image no: " .$no. "\n";
		echo "URL is : ".$url."\n";
	  $imageName = $no.".jpg";
	  $imageContent = file_get_contents($url . $imageName);
	  file_put_contents($destDir.$imageName,$imageContent); 
	  $no += 1;
	 // $file_headers = @get_headers($url);
}	


/*
  echo $url ."\n";
$file_headers = @get_headers($url);
echo $file_headers[0] . "\n";

*/


?>