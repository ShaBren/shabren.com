<?php

$site_name = "Sha`Bren";

$menu[0]['url'] = "/";
$menu[0]['name'] = "Home";
$menu[1]['url'] = "/minecraft";
$menu[1]['name'] = "Minecraft";
$menu[2]['url'] = "/forums";
$menu[2]['name'] = "Forums";
$menu[3]['url'] = "http://github.com/ShaBren/";
$menu[3]['name'] = "Code";

switch( $_GET['page'] )
{
case '':
case 'home':
{
	$page_title = "Home";
	$posts[0]['title'] = "Howdy!";
	$posts[0]['body'] = <<<EOT

		<p>
			I'm Sha`Bren. Yes, that's a backtick. I'm a coder, sysadmin, and Linux-user in the Raleigh, NC area. If you need to contact me for any reason, drop by #shabren on Freenode.
		</p>
		<p>
			Don't expect to find much of value on this site; this is just where I throw stuff when it doesn't have any place better to go.
		</p>
EOT;
}
break;

case 'minecraft':
{
	$page_title = "Minecraft";
	$posts[0]['title'] = "Minecraft";
	$posts[0]['body'] = <<<EOT

		<p>
			Sorry, my Minecraft server is temporarily offline.
		</p>
EOT;

}

case 'minecraft':
{
	$page_title = "Forums";
	$posts[0]['title'] = "Forums Down";
	$posts[0]['body'] = <<<EOT

		<p>
			Sorry, the forums are down for the moment.
		</p>
EOT;

}
}

include('template.php');
?>
