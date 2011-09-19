<?php

/**
 * Load the mDocs system
 */
include 'mdocs.php';


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>	
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Ultralite2 API Docs - <?php echo $file; ?></title>
		<link rel="stylesheet" type="text/css" media="all" href="mdocs.css">
</head>
<body>
		<div id="container">
			<div id="menu">
				<?php echo $menu; ?>
			</div>
			
			<div id="doc">
				<?php echo $doc; ?>
			</div>
			
			<div id="toc">
				<?php echo $toc; ?>
			</div>
			
			<div id="footer">
				<p>Thanks to Jay Williams (US), Alban Leroux (FR) for writing this documentation.</br>
				This documentation is released under a <a href="http://creativecommons.org/licenses/by-sa/3.0/">Attribution-ShareAlike 3.0</a> License.</p>
			</div>
		</div>
</body>
</html>