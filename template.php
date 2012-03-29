<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en" dir="ltr">
<head>
	<link rel="stylesheet" href="default.css" media="all">
	<link href='http://fonts.googleapis.com/css?family=Antic' rel='stylesheet' type='text/css'>
	<title><?php echo $site_name." || ".$page_title; ?></title>
</head>
<body>
<div id="header"><p><?php echo $site_name; ?></p></div>

<div id="container">
	<div id="menu">
		<h3>Menu</h3>
		<ul>
			<?php
				foreach( $menu as $link )
				{
					echo '<li><a href="' . $link['url'] . '">' . $link['name'] . "</a></li>\n";
				}
			?>
		</ul>
	</div>
	<?php
		foreach ( $posts as $post )
		{
			echo '<div id="content">';
			echo '<h3>' . $post['title'] . '</h3>';
			echo $post['body'];
			echo '</div>';
		}
	?>

</div>

<div id="clear"></div>

<div id="footer"><p>Copyright &copy;2012 Sha`Bren</div>

</body>
</html>
