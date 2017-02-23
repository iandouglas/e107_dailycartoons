<?php
/*
	e107 website system, daily comics
	based heavily on Daily Dilbert Plus by Richard Perry, http://www.greycube.com/
	Richard gave credit to Kimmo of http://www.jernstrom.org/

	v0.29, September 23, 2006
	- workaround for those that don't have fopen() support for opening URL's

	v0.25, September 15, 2006
	- check cache for a cartoon before loading cartoon's web page
	- changes: check cache for cartoon file existance BEFORE downloading the cartoon URL
		- this should speed up processing *significantly*
	- include the regexp/404 text message under the 404 error graphic so the user can see why the cartoon didn't load

	v0.20, August 24, 2006
	- changes: added cache support

	v0.10, August 23, 2006
	- initial release
*/
require_once("../../class2.php") ;
require_once(HEADERF) ;
ini_set('max_execution_time', '600') ;
$version = "0.29" ;
$index = 0 ;
$CARTOONS = Array() ;
include("cartoons.php") ;
// attempt to make the cache folder and chmod 777 if it doesn't already exist
// we'll use the @ prefix to supress any errors
@mkdir("cache") ;
@chmod(0777,"cache") ;
//[[[ date processing
$today = date("Y-m-d") ;
$todaySec = date("U") ;
$date = $HTTP_GET_VARS['date'] ;
if (!$date) {
	$date = date("Y-m-d") ;
	$prevday = date("Y-m-d",strtotime("yesterday")) ;
	$nextday = date("Y-m-d",strtotime("tomorrow")) ;
}
foreach ($CARTOONS as $index => $cartoon) {
	$CARTOONS[$index]['date'] = date($cartoon['dateformat'],strtotime($date)) ;
	//	$CARTOONS[$index]['prevday'] = date($cartoon['dateformat'],strtotime($prevday)) ;
	//	$CARTOONS[$index]['nextday'] = date($cartoon['dateformat'],strtotime($nextday)) ;
}

$prevday = date("Y-m-d",mktime (0,0,0,substr($date, 5, 2),substr($date, 8, 2)-1,substr($date, 0, 4))) ;
$nextday = date("Y-m-d",mktime (0,0,0,substr($date, 5, 2),substr($date, 8, 2)+1,substr($date, 0, 4))) ;
$nextdaySec = date("U",mktime (0,0,0,substr($date, 5, 2),substr($date, 8, 2)+1,substr($date, 0, 4))) ;
//]]]

$text = '<div style="font-family: tahoma; font-size: 9px; text-align:center">Daily Cartoons v'.$version.' by <a href="http://iandouglas.com/">Ian Douglas</a><br />Based on Daily Dilbert Plus By Richard Perry<br /></div><table style="width:95%; border:0;"><tr><td style="text-align:left"><b><a href="'.$PHP_SELF.'?date='.$prevday.'">Previous Day</a></b></td><td style="text-align:right">'.($nextdaySec <= $todaySec ? '<b><a href="'.$PHP_SELF.'?date='.$nextday.'">Next Day</a></b>' : '').'</td></tr></table><br />' ;

$template = '<table style="width:95%; border:0;"><tr><td style="text-align:center"><a href="{{{SITE}}}" target="new">{{{CARTOON}}}</a></td></tr></table><br />' ;
foreach ($CARTOONS as $index => $cartoon) {
	$text .= "<p>{$cartoon['name']}<br>\n" ;
	$done = 0 ;
	$cartoon_text = $template ;
	if ($cartoon['cache']) {
		$dh = opendir("cache") ;
		$cache_match = "{$cartoon['name']}__".$date."__" ;
		while ($file = readdir($dh)) {
			if (strstr($file,$cache_match) !== false) {
				// build cartoon text here
				$cartoon_file = "cache/".$file ;
				$cartoon_text = str_replace("{{{CARTOON}}}",$cartoon['cartoon'],$cartoon_text) ;
				$cartoon_text = str_replace("{{{FETCH}}}",$cartoon_file,$cartoon_text) ;
				$done = 1 ;
				break ;
			}
		}
		closedir($dh) ;
	}
	if (!$done) {
		$url = str_replace("{{{DATE}}}",$cartoon['date'],$cartoon['url']) ;
		$fopen_check = ini_get('allow_url_fopen') ;
		//$fopen_check = 'Off' ;
		if ($fopen_check == 'On' || $fopen_check == 1 || $fopen_check == 'true') {
			$fh = @fopen($url,"r") ;
		} else {
			preg_match('/http:\/\/([^\/]*)(.*)/i', $url, $matches) ;
			$fh = fsockopen($matches[1], 80, $errno, $errstr, 10) ;
			fputs($fh, "GET /{$matches[2]} HTTP/1.0\r\n") ;
			fputs($fh, "Host: {$matches[1]}\r\n") ;
			fputs($fh, "Referer: http://{$matches[1]}\r\n") ;
			fputs($fh, "User-Agent: DailyCartoons v$version\r\n\r\n");
		}

		if ($fh) { //[[[
			while (!feof($fh)) {
				$tmp .= fread($fh, 2048) ;
			}
			fclose ($fh) ;
			$bytes = strlen($tmp) ;
			// draw image here
			$tmp = str_replace("\r"," ",$tmp) ;
			$tmp = str_replace("\n"," ",$tmp) ;
			preg_match($cartoon['regexp'],$tmp,$matches) ;
			if ($matches[0]) { //[[[ regexp worked
				$cartoon_file = $cartoon['fetch'] ;
				$matchindex = 0 ;
				for($i=1; $i < count($matches); $i++) {
					$cartoon_file = str_replace("{{{".$i."}}}",$matches[$i],$cartoon_file) ;
				}
				if ($cartoon['cache']) {//[[[
					$bits = explode("/",$cartoon_file) ;
					$cartoon_cachefile = $bits[count($bits)-1] ; // get just the last filename portion
					$cartoon_cachefile = str_replace(".","_",$cartoon['name']) . "__" . $date . "__" . $cartoon_cachefile ;
					$cartoon_cachefile = str_replace(" ","_",$cartoon_cachefile) ;
					$cartoon_cachefile = str_replace("\\","",$cartoon_cachefile) ;
					$cartoon_cachefile = str_replace(":","",$cartoon_cachefile) ;
					$cartoon_cachefile = str_replace("/","",$cartoon_cachefile) ;
					// this will create a filename like "Daily_Dilbert__2006-08-24__dilbert20060824.gif"
					if (file_exists("cache") && file_exists("cache/".$cartoon_cachefile)) {
						$cartoon_file = "cache/".$cartoon_cachefile ;
					} elseif (file_exists("cache")) {
						// save a copy of the cartoon
						if ($fopen_check == 'On' || $fopen_check == 1 || $fopen_check == 'true') {
							$fh_cartoon = fopen($cartoon_file,"rb") ;
						} else {
							preg_match('/http:\/\/([^\/]*)/(.*)/i', $cartoon_file, $matches2) ;
							$fh_cartoon = fsockopen($matches2[1], 80, $errno, $errstr, 10) ;
							if (substr($matches2[1],-1,1) == '/') {
								$matches2[1] = substr($matches2[1],0,strlen($matches2[1] - 1)) ;
							}
							fputs($fh_cartoon, "GET /{$matches2[2]} HTTP/1.0\r\n") ;
							fputs($fh_cartoon, "Host: {$matches2[1]}\r\n") ;
							fputs($fh_cartoon, "Referer: http://{$matches2[1]}\r\n") ;
							fputs($fh_cartoon, "User-Agent: DailyCartoons v$version\r\n\r\n");
						}
						if ($fh_cartoon) {
							$cartoon_binary = '' ;
							$byte_count = 0 ;
							while (!feof($fh_cartoon)) {
								$cartoon_binary .= @fread($fh_cartoon,1024) ;
								$byte_count++ ;
							}
							fclose($fh_cartoon) ;
							if ($fopen_check != 'On' && $fopen_check != 1 && $fopen_check != 'true') {
								// strip headers from cached graphic
								list($junk,$cartoon_binary) = explode("\r\n\r\n",$cartoon_binary) ;
							}
							$fh_cartoon = @fopen("cache/".$cartoon_cachefile,"wb") ;
							if ($fh_cartoon) {
								fwrite($fh_cartoon,$cartoon_binary,$byte_count) ;
								fclose($fh_cartoon) ;
							}
							$cartoon_file = "cache/".$cartoon_cachefile ;
						}
					}
				}//]]]
				$cartoon_text = str_replace("{{{CARTOON}}}",$cartoon['cartoon'],$cartoon_text) ;
				$cartoon_text = str_replace("{{{FETCH}}}",$cartoon_file,$cartoon_text) ;
				// reapply the {{{#}}} filters, if any
				for($i=1; $i < count($matches); $i++) {
					$cartoon_text = str_replace("{{{".$i."}}}",$matches[$i],$cartoon_text) ;
				}
				//]]]
			} else {//[[[
				// preg_match didn't find any matches
				$cartoon_text = str_replace("{{{CARTOON}}}",(isset($cartoon['404']) ? '<img src="404comics/'.$cartoon['404'].'" border="0" alt="comic not found (regexp failed)" /><br />The regular expression for this cartoon did not find a match.' : "The regular expression for this cartoon did not find a match."),$cartoon_text) ;
			}//]]]
			//]]]
		} else { //[[[
			// couldn't open page, either fopen isn't allowed to open url's or the page is 404, etc
			$cartoon_text = str_replace("{{{CARTOON}}}",(isset($cartoon['404']) ? '<img src="404comics/'.$cartoon['404'].'" border="0" alt="comic not found (404)" /><br />Could not open the cartoon web page (404 not found)' : "Could not open <a href=\"$url\">$url</a>, 404 Not found."),$cartoon_text) ;
		}//]]]
	}
	$cartoon_text = str_replace("{{{SITE}}}",$cartoon['site'],$cartoon_text) ;
	$text .= "\n$cartoon_text</p>\n" ;
}
$text .= '<table style="width:95%; border:0;"><tr><td style="text-align:left"><b><a href="'.$PHP_SELF.'?date='.$prevday.'">Previous Day</a></b></td><td style="text-align:right">'.($nextdaySec <= $todaySec ? '<b><a href="'.$PHP_SELF.'?date='.$nextday.'">Next Day</a></b>' : '').'</td></tr></table><br />' ;

$ns->tablerender("Daily Cartoons", $text);

echo "\r\n<!--\r\n = Daily Cartoons for E107 v1.0, by Ian Douglas, www.iandouglas.com, based on DAILY DILBERT PLUS BY RICHARD PERRY =\r\n -->\r\n";
require_once(FOOTERF);
?>
