<?php

include "./lib/simple_html.php";

header("Content-type: application/json");

$html = file_get_html('http://www.chictweak.com/NewArrivals');

$max_items = 10;
$current_items = 1;

?>
[

<?php 
foreach($html->find("a.modelimg") as $node) 
{
	if($current_items <= $max_items)
	{
		$img = $node->find("img")[0];
?>
	{ "img_url" : "<?php echo $img->src; ?>", "link_url" : "<?php echo $node->href; ?>" }
<?php
		if($current_items < $max_items)
		{
			echo ",\n";
		}
		$current_items = $current_items + 1;
	}
}
?>
]
<?php flush(); ?>