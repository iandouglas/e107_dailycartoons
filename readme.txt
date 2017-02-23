This is version 0.10 of Daily Cartoons; please check iandouglas.com for newer
versions.

What is this Plugin?
- This plugin will let you view your favorite cartoons from around the
	Internet based on a little configuration effort on your part. Other plugins
	just show you the daily Dilbert cartoon, and this script extends that
	functionality to view multiple cartoons on a single page.


Contact:
- If you have questions, problems, suggestions, or feedback, or want me to
	figure out how to add your favorite cartoon, email ian.douglas@iandouglas.com
	or wild98@gmail.com


Installation:
- Unpack the archive into your e107_plugins folder; this should create a
	folder in your plugins folder called "dailycartoons"
- Test it by going to http://yoursite/e107_plugins/dailycartoons/
- If that works, open your Admin panel, click on the 'Site Links' icon, then
	'Add a new Link' and enter the full URL you just tested
- Now you should be able to add the link into your menus


Adding New Cartoons:
- Modify the cartoons.php file, and add a new element to the big array. The
	pieces needed include:
	- 'name' - give it any name you like; this will show up on the web page
	- 'site' - this is the URL where you'd visit to view the cartoon before 
		this plugin came along
	- 'url' - this is what the URL's look like when browsing their archive. Use
		the {{{DATE}}} element to insert the date.
	- 'dateformat' - the format of the date they use for browsing archived
		cartoons. For example, Dilbert uses a format of "Ymd" which is a YYYYMMDD
		format. Foxtrot uses "Y/m/d" which is a YYYY/MM/DD format. This is how the
		script will change the {{{DATE}}} element in 'url' for looking at archived
		pages.
	- 'regexp' - this is a regular expression for how to actually get the name
		of the cartoon graphic from the originating server so we can view it with
		the plugin. Teaching regular expressions is way outside the scope of this
		document.
	- 'cartoon' - this is how the script incorporates the cartoon image into the
		plugin page that gets drawn. The markers like {{{1}}} or {{{2}}} mark
		where we'll fill in the pattern(s) we found with the regular expression.
		
	If you can't figure out the regular expression, contact me and I'll help out
	as best I can. Don't send me messages saying "Can you add ______?" because
	that's just rude. Help me out a little and at least provide a URL to where
	the cartoons come from and how to access an archive of previous cartoons.


Limitations:
- This plugin cannot currently get into site that require a login of any type.
	That's not even on the to-do list.


To-Do List:
- Caching ... I'm sure the cartoon sites won't be too happy if we're
	constantly hammering their servers for traffic when we're not displaying
	their advertising, etc.
- Add more of my favorite cartoons, and provide a way for users to mark which
	ones they want to see by modifying cartoons.php


This e107 plugin was developed by modifying Richard Perry's Daily Dilbert Plus
plugin and expanding it to check multiple cartoon sources. Thanks to Richard
for making the plugin freely available to modify like this. You can contact
him at http://www.greycube.com
