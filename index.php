<?php

$site_name = "Sha`Bren";
$page_title = "Home";

$menu[0]['url'] = "/";
$menu[0]['name'] = "Home";
$menu[1]['url'] = "/minecraft";
$menu[1]['name'] = "Minecraft";
$menu[2]['url'] = "/forums";
$menu[2]['name'] = "Forums";
$menu[3]['url'] = "http://github.com/ShaBren/";
$menu[3]['name'] = "Code";

$posts[0]['title'] = "Howdy!";
$posts[0]['body'] = <<<EOT

		<p>
			I'm Sha`Bren. Yes, that's a backtick. I'm a coder, sysadmin, and Linux-user in the Raleigh, NC area. If you need to contact me for any reason, drop by #shabren on Freenode.
		</p>
		<p>
			Don't expect to find much of value on this site; this is just where I throw stuff when it doesn't have any place better to go.
		</p>
		<p>
			I do run a semi-public Minecraft server -- you can find more about that under "Minecraft" on the left.
		</p>
EOT;

include('template.php');
