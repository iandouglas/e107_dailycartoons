<?php
global $CARTOONS ;
//[[[ adam @ home
$CARTOONS[$index]['name'] = "Adam@Home" ;
$CARTOONS[$index]['site'] = "http://www.gocomics.com/adamathome/" ;
$CARTOONS[$index]['url'] = 'http://www.gocomics.com/adamathome/{{{DATE}}}/' ;
$CARTOONS[$index]['dateformat'] = "Y/m/d" ;
$CARTOONS[$index]['regexp'] = '/http:\/\/images.ucomics.com\/comics\/ad\/([0-9]*)\/ad([0-9]*).gif/i' ;
$CARTOONS[$index]['fetch'] = 'http://images.ucomics.com/comics/ad/{{{1}}}/ad{{{2}}}.gif' ;
$CARTOONS[$index]['cartoon'] = '<img src="{{{FETCH}}}" alt="adam @ home" />' ;
$CARTOONS[$index]['cache'] = 1 ;
$CARTOONS[$index]['404'] = '404AdamAtHome.gif' ;
$index++ ;//]]]
//[[[ bound and gagged
$CARTOONS[$index]['name'] = "Bound and Gagged" ;
$CARTOONS[$index]['site'] = "http://www.gocomics.com/boundandgagged/" ;
$CARTOONS[$index]['url'] = 'http://www.gocomics.com/boundandgagged/{{{DATE}}}/' ;
$CARTOONS[$index]['dateformat'] = "Y/m/d" ;
$CARTOONS[$index]['regexp'] = '/http:\/\/images.ucomics.com\/comics\/tmbou\/([0-9]*)\/tmbou([0-9]*).gif/i' ;
$CARTOONS[$index]['fetch'] = 'http://images.ucomics.com/comics/tmbou/{{{1}}}/tmbou{{{2}}}.gif' ;
$CARTOONS[$index]['cartoon'] = '<img src="{{{FETCH}}}" alt="bound and gagged" />' ;
$CARTOONS[$index]['cache'] = 1 ;
$CARTOONS[$index]['404'] = '404BoundAndGagged.gif' ;
$index++ ;//]]]
//[[[ calvin and hobbes
$CARTOONS[$index]['name'] = "Calvin and Hobbes" ;
$CARTOONS[$index]['site'] = "http://www.gocomics.com/calvinandhobbes/" ;
$CARTOONS[$index]['url'] = 'http://www.gocomics.com/calvinandhobbes/{{{DATE}}}/' ;
$CARTOONS[$index]['dateformat'] = "1995/m/d" ;
$CARTOONS[$index]['regexp'] = '/images.ucomics.com\/comics\/ch\/([0-9]{4})\/ch([0-9]{6}).gif/i' ;
$CARTOONS[$index]['fetch'] = 'http://images.ucomics.com/comics/ch/{{{1}}}/ch{{{2}}}.gif' ;
$CARTOONS[$index]['cartoon'] = '<img src="{{{FETCH}}}" border="0" />' ;
$CARTOONS[$index]['cache'] = 1 ;
$CARTOONS[$index]['404'] = '404CalvinAndHobbes.gif' ;
$index++ ;//]]]
//[[[ dilbert
$CARTOONS[$index]['name'] = "Dilbert" ;
$CARTOONS[$index]['site'] = "http://www.dilbert.com/" ;
$CARTOONS[$index]['url'] = 'http://www.dilbert.com/comics/dilbert/archive/dilbert-{{{DATE}}}.html' ;
$CARTOONS[$index]['dateformat'] = "Ymd" ;
$CARTOONS[$index]['regexp'] = '/img src="\/comics\/dilbert\/archive\/images\/([^"]*)/i' ;
$CARTOONS[$index]['fetch'] = 'http://www.dilbert.com/comics/dilbert/archive/images/{{{1}}}' ;
$CARTOONS[$index]['cartoon'] = '<img src="{{{FETCH}}}" border="0">' ;
$CARTOONS[$index]['cache'] = 1 ;
$CARTOONS[$index]['404'] = '404Dilbert.gif' ;
$index++ ;//]]]
//[[[ dog eat doug
$CARTOONS[$index]['name'] = "Dog eat Doug" ;
$CARTOONS[$index]['site'] = "http://www.gocomics.com/dogeatdoug/" ;
$CARTOONS[$index]['url'] = 'http://www.gocomics.com/dogeatdoug/{{{DATE}}}/' ;
$CARTOONS[$index]['dateformat'] = "Y/m/d" ;
$CARTOONS[$index]['regexp'] = '/images.ucomics.com\/comics\/crdog\/([0-9]{4})\/crdog([0-9]{6}).gif/i' ;
$CARTOONS[$index]['fetch'] = 'http://images.ucomics.com/comics/crdog/{{{1}}}/crdog{{{2}}}.gif' ;
$CARTOONS[$index]['cartoon'] = '<img src="{{{FETCH}}}" border="0" />' ;
$CARTOONS[$index]['cache'] = 1 ;
$CARTOONS[$index]['404'] = '404DogEatDoug.gif' ;
$index++ ;//]]]
//[[[ drabble
$CARTOONS[$index]['name'] = "Drabble" ;
$CARTOONS[$index]['site'] = "http://www.comics.com/comics/drabble/" ;
$CARTOONS[$index]['url'] = 'http://www.comics.com/comics/drabble/archive/drabble-{{{DATE}}}.html' ;
$CARTOONS[$index]['dateformat'] = "Ymd" ;
$CARTOONS[$index]['regexp'] = '/img src="\/comics\/drabble\/archive\/images\/([^"]*)/i' ;
$CARTOONS[$index]['fetch'] = 'http://www.comics.com/comics/drabble/archive/images/{{{1}}}' ;
$CARTOONS[$index]['cartoon'] = '<img src="{{{FETCH}}}" border="0">' ;
$CARTOONS[$index]['cache'] = 1 ;
$CARTOONS[$index]['404'] = '404Drabble.gif' ;
$index++ ;//]]]
//[[[ duplex
$CARTOONS[$index]['name'] = "Duplex" ;
$CARTOONS[$index]['site'] = "http://www.gocomics.com/duplex/" ;
$CARTOONS[$index]['url'] = 'http://www.gocomics.com/duplex/{{{DATE}}}/' ;
$CARTOONS[$index]['dateformat'] = "Y/m/d" ;
$CARTOONS[$index]['regexp'] = '/images.ucomics.com\/comics\/dp\/([0-9]{4})\/dp([0-9]{6}).gif/i' ;
$CARTOONS[$index]['fetch'] = 'http://images.ucomics.com/comics/dp/{{{1}}}/dp{{{2}}}.gif' ;
$CARTOONS[$index]['cartoon'] = '<img src="{{{FETCH}}}" border="0" />' ;
$CARTOONS[$index]['cache'] = 1 ;
$CARTOONS[$index]['404'] = '404Duplex.gif' ;
$index++ ;//]]]
//[[[ foxtrot
$CARTOONS[$index]['name'] = "Foxtrot" ;
$CARTOONS[$index]['site'] = "http://www.gocomics.com/foxtrot/" ;
$CARTOONS[$index]['url'] = 'http://www.gocomics.com/foxtrot/{{{DATE}}}/' ;
$CARTOONS[$index]['dateformat'] = "Y/m/d" ;
$CARTOONS[$index]['regexp'] = '/http:\/\/images.ucomics.com\/comics\/ft\/([0-9]{4})\/ft([0-9]{6}).gif" /i' ;
$CARTOONS[$index]['fetch'] = 'http://images.ucomics.com/comics/ft/{{{1}}}/ft{{{2}}}.gif' ;
$CARTOONS[$index]['cartoon'] = '<img src="{{{FETCH}}}" border="0" />' ;
$CARTOONS[$index]['cache'] = 1 ;
$CARTOONS[$index]['404'] = '404Foxtrot.gif' ;
$index++ ;//]]]
//[[[ geech
$CARTOONS[$index]['name'] = "Geech" ;
$CARTOONS[$index]['site'] = "http://www.comics.com/comics/geech/" ;
$CARTOONS[$index]['url'] = 'http://www.comics.com/comics/geech/archive/geech-{{{DATE}}}.html' ;
$CARTOONS[$index]['dateformat'] = "Ymd" ;
$CARTOONS[$index]['regexp'] = '/img src="\/comics\/geech\/archive\/images\/([^"]*)/i' ;
$CARTOONS[$index]['fetch'] = 'http://www.comics.com/comics/geech/archive/images/{{{1}}}' ;
$CARTOONS[$index]['cartoon'] = '<img src="{{{FETCH}}}" border="0">' ;
$CARTOONS[$index]['cache'] = 1 ;
$CARTOONS[$index]['404'] = '404Geech.gif' ;
$index++ ;//]]]
//[[[ grisswells
$CARTOONS[$index]['name'] = "Grizzwells" ;
$CARTOONS[$index]['site'] = "http://www.comics.com/comics/grizzwells/" ;
$CARTOONS[$index]['url'] = 'http://www.comics.com/comics/grizzwells/archive/grizzwells-{{{DATE}}}.html' ;
$CARTOONS[$index]['dateformat'] = "Ymd" ;
$CARTOONS[$index]['regexp'] = '/img src="\/comics\/grizzwells\/archive\/images\/([^"]*)/i' ;
$CARTOONS[$index]['fetch'] = 'http://www.comics.com/comics/grizzwells/archive/images/{{{1}}}' ;
$CARTOONS[$index]['cartoon'] = '<img src="{{{FETCH}}}" border="0">' ;
$CARTOONS[$index]['cache'] = 1 ;
$CARTOONS[$index]['404'] = '404Grizzwells.gif' ;
$index++ ;//]]]
//[[[ heart of the city
$CARTOONS[$index]['name'] = "Heart of the City" ;
$CARTOONS[$index]['site'] = "http://www.gocomics.com/heartofthecity/" ;
$CARTOONS[$index]['url'] = 'http://www.gocomics.com/heartofthecity/{{{DATE}}}/' ;
$CARTOONS[$index]['dateformat'] = "Y/m/d" ;
$CARTOONS[$index]['regexp'] = '/images.ucomics.com\/comics\/hc\/([0-9]{4})\/hc([0-9]{6}).gif/i' ;
$CARTOONS[$index]['fetch'] = 'http://images.ucomics.com/comics/hc/{{{1}}}/hc{{{2}}}.gif' ;
$CARTOONS[$index]['cartoon'] = '<img src="{{{FETCH}}}" border="0" />' ;
$CARTOONS[$index]['cache'] = 1 ;
$CARTOONS[$index]['404'] = '404HeartOfTheCity.gif' ;
$index++ ;//]]]
//[[[ herman
$CARTOONS[$index]['name'] = "Herman" ;
$CARTOONS[$index]['site'] = "http://www.comics.com/comics/herman/" ;
$CARTOONS[$index]['url'] = 'http://www.comics.com/comics/herman/archive/herman-{{{DATE}}}.html' ;
$CARTOONS[$index]['dateformat'] = "Ymd" ;
$CARTOONS[$index]['regexp'] = '/img src="\/comics\/herman\/archive\/images\/([^"]*)/i' ;
$CARTOONS[$index]['fetch'] = 'http://www.comics.com/comics/herman/archive/images/{{{1}}}' ;
$CARTOONS[$index]['cartoon'] = '<img src="{{{FETCH}}}" border="0">' ;
$CARTOONS[$index]['cache'] = 1 ;
$CARTOONS[$index]['404'] = '404Herman.jpg' ;
$index++ ;//]]]
//[[[ out of the gene pool
$CARTOONS[$index]['name'] = "Out of the Gene Pool" ;
$CARTOONS[$index]['site'] = "http://www.comics.com/wash/genepool/" ;
$CARTOONS[$index]['url'] = 'http://www.comics.com/wash/genepool/archive/genepool-{{{DATE}}}.html' ;
$CARTOONS[$index]['dateformat'] = "Ymd" ;
$CARTOONS[$index]['regexp'] = '/img src="\/wash\/genepool\/archive\/images\/([^"]*)/i' ;
$CARTOONS[$index]['fetch'] = 'http://www.comics.com/wash/genepool/archive/images/{{{1}}}' ;
$CARTOONS[$index]['cartoon'] = '<img src="{{{FETCH}}}" border="0">' ;
$CARTOONS[$index]['cache'] = 1 ;
$CARTOONS[$index]['404'] = '404OutOfTheGenePool.gif' ;
$index++ ;//]]]
//[[[ over the hedge
$CARTOONS[$index]['name'] = "Over the Hedge" ;
$CARTOONS[$index]['site'] = "http://www.comics.com/comics/hedge/" ;
$CARTOONS[$index]['url'] = 'http://www.comics.com/comics/hedge/archive/hedge-{{{DATE}}}.html' ;
$CARTOONS[$index]['dateformat'] = "Ymd" ;
$CARTOONS[$index]['regexp'] = '/img src="\/comics\/hedge\/archive\/images\/([^"]*)/i' ;
$CARTOONS[$index]['fetch'] = 'http://www.comics.com/comics/hedge/archive/images/{{{1}}}' ;
$CARTOONS[$index]['cartoon'] = '<img src="{{{FETCH}}}" border="0">' ;
$CARTOONS[$index]['cache'] = 1 ;
$CARTOONS[$index]['404'] = '404OverTheHedge.gif' ;
$index++ ;//]]]
//[[[ pc and pixel
$CARTOONS[$index]['name'] = "PC and Pixel" ;
$CARTOONS[$index]['site'] = "http://www.comics.com/wash/pcnpixel/" ;
$CARTOONS[$index]['url'] = 'http://www.comics.com/wash/pcnpixel/archive/pcnpixel-{{{DATE}}}.html' ;
$CARTOONS[$index]['dateformat'] = "Ymd" ;
$CARTOONS[$index]['regexp'] = '/img src="\/wash\/pcnpixel\/archive\/images\/([^"]*)/i' ;
$CARTOONS[$index]['fetch'] = 'http://www.comics.com/wash/pcnpixel/archive/images/{{{1}}}' ;
$CARTOONS[$index]['cartoon'] = '<img src="{{{FETCH}}}" border="0">' ;
$CARTOONS[$index]['cache'] = 1 ;
$CARTOONS[$index]['404'] = '404PCnPixel.gif' ;
$index++ ;//]]]
//[[[ pickels
$CARTOONS[$index]['name'] = "Pickles" ;
$CARTOONS[$index]['site'] = "http://www.comics.com/wash/pickles/" ;
$CARTOONS[$index]['url'] = 'http://www.comics.com/wash/pickles/archive/pickles-{{{DATE}}}.html' ;
$CARTOONS[$index]['dateformat'] = "Ymd" ;
$CARTOONS[$index]['regexp'] = '/img src="\/wash\/pickles\/archive\/images\/([^"]*)/i' ;
$CARTOONS[$index]['fetch'] = 'http://www.comics.com/wash/pickles/archive/images/{{{1}}}' ;
$CARTOONS[$index]['cartoon'] = '<img src="{{{FETCH}}}" border="0">' ;
$CARTOONS[$index]['cache'] = 1 ;
$CARTOONS[$index]['404'] = '404Pickles.gif' ;
$index++ ;//]]]
//[[[ reality check
$CARTOONS[$index]['name'] = "Reality Check" ;
$CARTOONS[$index]['site'] = "http://www.comics.com/comics/reality/" ;
$CARTOONS[$index]['url'] = 'http://www.comics.com/comics/reality/archive/reality-{{{DATE}}}.html' ;
$CARTOONS[$index]['dateformat'] = "Ymd" ;
$CARTOONS[$index]['regexp'] = '/img src="\/comics\/reality\/archive\/images\/([^"]*)/i' ;
$CARTOONS[$index]['fetch'] = 'http://www.comics.com/comics/reality/archive/images/{{{1}}}' ;
$CARTOONS[$index]['cartoon'] = '<img src="{{{FETCH}}}" border="0">' ;
$CARTOONS[$index]['cache'] = 1 ;
$CARTOONS[$index]['404'] = '404RealityCheck.gif' ;
$index++ ;//]]]
//[[[ redandrover
$CARTOONS[$index]['name'] = "Red and Rover" ;
$CARTOONS[$index]['site'] = "http://www.comics.com/wash/redandrover/" ;
$CARTOONS[$index]['url'] = 'http://www.comics.com/wash/redandrover/archive/redandrover-{{{DATE}}}.html' ;
$CARTOONS[$index]['dateformat'] = "Ymd" ;
$CARTOONS[$index]['regexp'] = '/img src="\/wash\/redandrover\/archive\/images\/([^"]*)/i' ;
$CARTOONS[$index]['fetch'] = 'http://www.comics.com/wash/redandrover/archive/images/{{{1}}}' ;
$CARTOONS[$index]['cartoon'] = '<img src="{{{FETCH}}}" border="0">' ;
$CARTOONS[$index]['cache'] = 1 ;
$CARTOONS[$index]['404'] = '404RedAndRover.gif' ;
$index++ ;//]]]
//[[[ rose is rose
$CARTOONS[$index]['name'] = "Rose is Rose" ;
$CARTOONS[$index]['site'] = "http://www.comics.com/comics/roseisrose/" ;
$CARTOONS[$index]['url'] = 'http://www.comics.com/comics/roseisrose/archive/roseisrose-{{{DATE}}}.html' ;
$CARTOONS[$index]['dateformat'] = "Ymd" ;
$CARTOONS[$index]['regexp'] = '/img src="\/comics\/roseisrose\/archive\/images\/([^"]*)/i' ;
$CARTOONS[$index]['fetch'] = 'http://www.comics.com/comics/roseisrose/archive/images/{{{1}}}' ;
$CARTOONS[$index]['cartoon'] = '<img src="{{{FETCH}}}" border="0">' ;
$CARTOONS[$index]['cache'] = 1 ;
$CARTOONS[$index]['404'] = '404RoseIsRose.jpg' ;
$index++ ;//]]]
//[[[ sheldon
$CARTOONS[$index]['name'] = "Sheldon" ;
$CARTOONS[$index]['site'] = "http://www.comics.com/comics/sheldon/" ;
$CARTOONS[$index]['url'] = 'http://www.comics.com/comics/sheldon/archive/sheldon-{{{DATE}}}.html' ;
$CARTOONS[$index]['dateformat'] = "Ymd" ;
$CARTOONS[$index]['regexp'] = '/img src="\/comics\/sheldon\/archive\/images\/([^"]*)/i' ;
$CARTOONS[$index]['fetch'] = 'http://www.comics.com/comics/sheldon/archive/images/{{{1}}}' ;
$CARTOONS[$index]['cartoon'] = '<img src="{{{FETCH}}}" border="0">' ;
$CARTOONS[$index]['cache'] = 1 ;
$CARTOONS[$index]['404'] = '404Sheldon.gif' ;
$index++ ;//]]]
//[[[ shirley and son
$CARTOONS[$index]['name'] = "Shirley and Son" ;
$CARTOONS[$index]['site'] = "http://www.comics.com/comics/shirleynson/" ;
$CARTOONS[$index]['url'] = 'http://www.comics.com/comics/shirleynson/archive/shirleynson-{{{DATE}}}.html' ;
$CARTOONS[$index]['dateformat'] = "Ymd" ;
$CARTOONS[$index]['regexp'] = '/img src="\/comics\/shirleynson\/archive\/images\/([^"]*)"/i' ;
$CARTOONS[$index]['fetch'] = 'http://www.comics.com/comics/shirleynson/archive/images/{{{1}}}' ;
$CARTOONS[$index]['cartoon'] = '<img src="{{{FETCH}}}" border="0">' ;
$CARTOONS[$index]['cache'] = 1 ;
$CARTOONS[$index]['404'] = '404ShirleyAndSon.gif' ;
$index++ ;//]]]
//[[[ speed bump
$CARTOONS[$index]['name'] = "Speed Bump" ;
$CARTOONS[$index]['site'] = "http://www.comics.com/creators/speedbump/" ;
$CARTOONS[$index]['url'] = 'http://www.comics.com/creators/speedbump/archive/speedbump-{{{DATE}}}.html' ;
$CARTOONS[$index]['dateformat'] = "Ymd" ;
$CARTOONS[$index]['regexp'] = '/img src="\/creators\/speedbump\/archive\/images\/([^"]*)/i' ;
$CARTOONS[$index]['fetch'] = 'http://www.comics.com/creators/speedbump/archive/images/{{{1}}}' ;
$CARTOONS[$index]['cartoon'] = '<img src="{{{FETCH}}}" border="0">' ;
$CARTOONS[$index]['cache'] = 1 ;
$CARTOONS[$index]['404'] = '404SpeedBump.gif' ;
$index++ ;//]]]
?>
