<?php
/*
	e107 website system, daily comics
	based heavily on Daily Dilbert Plus by Richard Perry, http://www.greycube.com/
	Richard gave credit to Kimmo of http://www.jernstrom.org/
*/
require_once("../../class2.php") ;
require_once(HEADERF) ;

$index = 0 ;
$CARTOONS = Array() ;
include("cartoons.php") ;
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

$text = '<div style="font-family: tahoma; font-size: 9px; text-align:center">Daily Cartoons by <a href="http://iandouglas.com/">Ian Douglas</a><br />Based on Daily Dilbert Plus By Richard Perry<br /></div><table style="width:95%; border:0;"><tr><td style="text-align:left"><b><a href="'.$PHP_SELF.'?date='.$prevday.'">Previous Day</a></b></td><td style="text-align:right">'.($nextdaySec <= $todaySec ? '<b><a href="'.$PHP_SELF.'?date='.$nextday.'">Next Day</a></b>' : '').'</td></tr></table><br />' ;

$template = '<table style="width:95%; border:0;"><tr><td style="text-align:center"><a href="{{{SITE}}}" target="new">{{{CARTOON}}}</a></td></tr></table><br />' ;
foreach ($CARTOONS as $index => $cartoon) {
	$text .= "<p>{$cartoon['name']}<br>\n" ;
	$cartoon_text = $template ;
	$url = str_replace("{{{DATE}}}",$cartoon['date'],$cartoon['url']) ;
	$fh = @fopen($url,"r") ;
	if ($fh) {
		while (!feof($fh)) {
			$tmp .= fread($fh, 2048) ;
		}
		fclose ($fh) ;
		$bytes = strlen($tmp) ;
		// draw image here
		preg_match($cartoon['regexp'],$tmp,$matches) ;
		if ($matches[0]) {
			$cartoon_text = str_replace("{{{CARTOON}}}",$cartoon['cartoon'],$cartoon_text) ;
			$matchindex = 0 ;
			for($i=1; $i < count($matches); $i++) {
				$cartoon_text = str_replace("{{{".$i."}}}",$matches[$i],$cartoon_text) ;
			}
		} else {
			// preg_match didn't find any matches
			$cartoon_text = str_replace("{{{CARTOON}}}","Could not parse this cartoon's regular expression.",$cartoon_text) ;
		}
	} else {
		// couldn't open page, either fopen isn't allowed to open url's or the page is 404, etc
		$cartoon_text = str_replace("{{{CARTOON}}}","Could not open <a href=\"$url\">$url</a> for parsing.",$cartoon_text) ;
	}
	$cartoon_text = str_replace("{{{SITE}}}",$cartoon['site'],$cartoon_text) ;
	$text .= "\n$cartoon_text</p>\n" ;
}
$text .= '<table style="width:95%; border:0;"><tr><td style="text-align:left"><b><a href="'.$PHP_SELF.'?date='.$prevday.'">Previous Day</a></b></td><td style="text-align:right">'.($nextdaySec <= $todaySec ? '<b><a href="'.$PHP_SELF.'?date='.$nextday.'">Next Day</a></b>' : '').'</td></tr></table><br />' ;

$ns->tablerender("Daily Cartoons", $text);

echo "\r\n<!--\r\n = Daily Cartoons for E107 v1.0, by Ian Douglas, www.iandouglas.com, based on DAILY DILBERT PLUS BY RICHARD PERRY =\r\n -->\r\n";
require_once(FOOTERF);
?>
