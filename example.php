<div style="font-family: monospace">

<?php

require_once 'Chirp.php';

$params = array(
	'username' => 'codemastersnake',
	'password' => 'rediff',
	'format' => 'xml'
);

$chirp = new Chirp($params);

if(!$chirp) {
	echo '<h3><strong>Initialization Error</strong></h3>';
	die();
} else {
	echo "<h3><strong>Initialized Chirp</strong></h3>";
	print_r($params);
}

echo "<h3><strong>Getting Public Timeline</strong></h3>";

?>
<div style="height: 300px; overflow: scroll">
<?php

print_r($chirp->get_public_timeline());

?>
</div>
</div>
