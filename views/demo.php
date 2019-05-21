<?php

// Fetch assets and display thumbnails
$asset_container = DataDwell()->asset_search('*');
$previews = DataDwell()->asset_previews($asset_container);
if(empty($previews->error)) :
    echo '<h2>'.__( 'Data Dwell Plugin Demo - Assets and Previews', 'datadwell' ).'</h2>';
	foreach ( $previews as $preview ) {
		if ( $preview->url->image->thumbnail_small ) {
			?><img src="<?php echo $preview->url->image->thumbnail_small; ?>"
                   style="border: 4px dotted #b60000; padding: 5px; margin: 5px;" /><?php
		}
	}
else:
    echo __((string)$previews->error, 'datadwell' ).'<br />';
endif;

?>


<?php
/* DEMO */
//print 'All folders -3003';
//$folders = DataDwell()->get_folders(-3003);
//var_dump($folders);

//print 'Folder Details - 70';
//$folder_details = DataDwell()->get_folder_details(70);
//var_dump($folder_details);


/*
print 'Asset search';
$includes = ['include_iptc' => false, 'include_metadata' => true, 'include_tags' => true];
$additional_params = ['folder_id' => 427, 'tag_id' => 39, 'filter' => ['date_created' => ['from' => 1544193649]]];
$asset_container = DataDwell()->asset_search('', 0, 20, $includes, $additional_params);
var_dump($asset_container);
$previews = DataDwell()->asset_previews($asset_container);
var_dump($previews);
*/

//print 'Tags search';
//$tag = DataDwell()->tags_search("00123595");
//var_dump($tag);


//print 'Asset source';
//$source = DataDwell()->get_asset_source(111);
//var_dump($source);

//print 'Asset source';
//$source = DataDwell()->get_asset_thumbnail(111);
//var_dump($source);

/*print 'Asset details';
$includes = ['include_iptc' => false, 'include_metadata' => true, 'include_tags' => true];
$asset_details = DataDwell()->get_asset_details(111, $includes);
//var_dump($asset_details);
$previews = DataDwell()->asset_previews($asset_details);
var_dump($previews);*/


/* END DEMO */

?>