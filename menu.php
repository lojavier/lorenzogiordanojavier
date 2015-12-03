<?php

//$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === FALSE ? 'http://' : 'https://';
//$host     = $_SERVER['HTTP_HOST'];
$script   = $_SERVER['SCRIPT_NAME'];
//$params   = $_SERVER['QUERY_STRING'];

$script = explode("/", $script); // comment this line out when on domain server

$menu_options = array
(
	array("index.php","Home"),
	array("resume.php","Resume"),
	array("contact.php","Contact")
);

echo "<ul id='nav' class='main'>";
for($i = 0; $i < sizeof($menu_options); $i++) {
	if($script[2] != $menu_options[$i][0]) {
		echo "<li><a href='".$menu_options[$i][0]."'>".$menu_options[$i][1]."</a></li>";
	} else {
		echo "<li><a href='#' class='active'>".$menu_options[$i][1]."</a></li>";
	}
}
echo "</ul>";

?>
