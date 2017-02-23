<?php
global $CARTOONS ;
//[[[ dilbert
$CARTOONS[$index]['name'] = "Daily Dilbert" ;
$CARTOONS[$index]['site'] = "http://www.dilbert.com/" ;
$CARTOONS[$index]['url'] = 'http://www.dilbert.com/comics/dilbert/archive/dilbert-{{{DATE}}}.html' ;
$CARTOONS[$index]['dateformat'] = "Ymd" ;
$CARTOONS[$index]['regexp'] = '/img src="\/comics\/dilbert\/archive\/images\/(.*)" /i' ;
$CARTOONS[$index]['cartoon'] = '<img src="http://www.dilbert.com/comics/dilbert/archive/images/{{{1}}}" border=\"0\">' ;
$index++ ;//]]]
//[[[ foxtrot
$CARTOONS[$index]['name'] = "Daily Foxtrot" ;
$CARTOONS[$index]['site'] = "http://www.gocomics.com/foxtrot/" ;
$CARTOONS[$index]['url'] = 'http://www.gocomics.com/foxtrot/{{{DATE}}}/' ;
$CARTOONS[$index]['dateformat'] = "Y/m/d" ;
$CARTOONS[$index]['regexp'] = '/comicViewerUc.swf\?w=([0-9]*)&h=([0-9]*)&k=([a-z0-9]*)" /i' ;
$CARTOONS[$index]['cartoon'] = '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="{{{1}}}" height="{{{2}}}"><param name="movie" value="http://images.gocomics.com/images/drm/comicViewerUc.swf?w={{{1}}}&h={{{2}}}&k={{{3}}}" /><param name="quality" value="high" /><param name="wmode" value="transparent"><embed src="http://images.gocomics.com/images/drm/comicViewerUc.swf?w={{{1}}}&h={{{2}}}&k={{{3}}}" width="{{{1}}}" height="{{{2}}}" quality="high" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed></object>' ;
$index++ ;//]]]
//[[[ adam @ home
$CARTOONS[$index]['name'] = "Adam @ Home" ;
$CARTOONS[$index]['site'] = "http://www.gocomics.com/adamathome/" ;
$CARTOONS[$index]['url'] = 'http://www.gocomics.com/adamathome/{{{DATE}}}/' ;
$CARTOONS[$index]['dateformat'] = "Y/m/d" ;
$CARTOONS[$index]['regexp'] = '/http:\/\/images.ucomics.com\/comics\/ad\/([0-9]*)\/ad([0-9]*).gif/i' ;
$CARTOONS[$index]['cartoon'] = '<img src="http://images.ucomics.com/comics/ad/{{{1}}}/ad{{{2}}}.gif" alt="adam @ home" />' ;
$index++ ;//]]]
?>
