This is version 0.29 of Daily Cartoons; please check iandouglas.com for newer
versions.

What is this Plugin?
- This plugin will let you view your favorite cartoons from around the
  Internet based on a little configuration effort on your part. Other plugins
  just show you the daily Dilbert cartoon, and this script extends that
  functionality to view multiple cartoons on a single page.


Contact:
- If you have questions, problems, suggestions, or feedback, or want me to
  figure out how to add your favorite cartoon, email ian.douglas@iandouglas.com
  or wild98@gmail.com and I'll do whatever I can if you ask nicely.


Installation:
- Unpack the archive into your e107_plugins folder; this should create a
  folder in your plugins folder called "dailycartoons" with other subfolders
  called 'cache' and '404comics'.
- I've included a sample cartoons.php configuration with 22 of my favorite
  cartoons, which admittedly may take a minute or two for you to load the
  first time, and assumes you want to cache the images.
- Test it by going to http://yoursite/e107_plugins/dailycartoons/
- If that works, open your Admin panel, click on the 'Site Links' icon, then
  'Add a new Link' and enter the full URL you just tested
- Now you should be able to add the link into your menus so your users can
  click a link instead of bookmarking a plugin page.
- By default, the .htaccess that gets built for e107 blocks search engines
  from indexing any pages under the 'e107_plugins' path


New in Version ____
- please consult the history.txt file for new information on changes in this
	and other versions.


Adding New Cartoons:
- Modify the cartoons.php file, and add a new element to the big array. The
  pieces needed for each cartoon include:
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
  - 'cache' - set to 1 if you want to save a copy of the .gif or .jpg cartoon
    in the 'cache' folder or not. If your site gets a lot of traffic, do us
    all a favor and turn this option on (1). Setting it to 0 will turn caching
    off.
The following setting is optional and can be excluded if you don't want to use
it:
  - '404' - this is the name of the graphic in the '404comics' folder that you
    want to show users when a regular expression can't find a match or the
    cartoon archive page is missing (ie: you don't have a cartoon cached and
    the original archive page doesn't go back that far). The string value here
    is case-sensitive if you're hosted on a Unix/Linux platform. I've included
    a 404 comic for each of the cartoons in my example file.
    Note that if this option is excluded, your users will see text strings
    explaining why a comic could not be viewed.
    
If you can't figure out the regular expression for a particular comic, contact
me and I'll help out as best I can. Don't send me messages saying "Can you add
______?" because that's just rude. Help me out a little and at least provide a
URL to where the cartoons come from and how to access an archive of previous
cartoons. I've included a LOT of cartoons as of v0.20 which are some of my
all-time favorites like Adam@Home, Dilbert, Foxtrot, Drabble, Rose is Rose,
and so on. Most of these, you'll see from my example cartoons.php, either come
from comics.com or gocomics.com, so you can just copy and paste my examples
for other comics from these services that you'd like to see. If you want to
add comics from a totally different comic source, I can help if you ask
nicely.


Limitations:
- I added a 10-minute timeout in the script using ini_set() in case you load
  up dozens and dozens of cartoons and your server downloads them for the
  first time for a visitor, since downloading the pages then extracting the
  image and saving it on your system can be time-consuming if your server or
  bandwidth is slow. My workaround is to find my lowest point of traffic
  overnight, and have a cron job running that calls 'wget' to fetch my
  /dailycartoon/ page so the graphics get cached.
- This plugin cannot currently get into site that require a login of any type.
  That's not even on the to-do list.


To-Do List:
- make the configuration a little less daunting

Credit where it's due:
- This e107 plugin was developed by modifying Richard Perry's Daily Dilbert
  Plus plugin and expanding it to check multiple cartoon sources. Thanks to
  Richard for making the plugin freely available to modify like this. You can
  contact him at http://www.greycube.com
- thanks to the many comics services out there that don't have hot-linking
  prevention turned on to allow geeks like me to develop something like this.

