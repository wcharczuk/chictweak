<?php

include "./lib/simple_html.php";

header("Content-type: application/json");

$html = file_get_html('http://www.chictweak.com/NewArrivals');

$max_items = 10;
$current_items = 1;

?>
[

<?php 
foreach($html->find("div.product") as $node) 
{
	if($current_items <= $max_items)
	{
		$imgs = $node->find("img");
		$img = $imgs[0];
		$links = $node->find("a");
		$link = $links[0];
?>
	{ "img_url" : "<?php echo $img->src; ?>", "link_url" : "<?php echo $link->href; ?>" }
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