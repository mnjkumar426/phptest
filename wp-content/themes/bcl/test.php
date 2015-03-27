<?php 
define('WP_USE_THEMES', false);
require_once('../../../wp-load.php');

global $wpdb;

if (isset($_GET['data'])){
	$data=$_GET['data'];
	if($data!='' or $data!=null){
	$sql = "SELECT ID,post_title,post_content,guid FROM wp_posts where post_title like '$data%' and post_type='product' ";	
	
	$results = $wpdb->get_results($sql);
    if($results){
	foreach ( $results as $result )
	{
		$id= $result->ID ;	
	    $title=$result->post_title;
	    $content=$result->post_content;
	 $link=$result->guid;
	$html.= '<div class="row margin" style=" border-bottom:1px solid #777 max-height:80px;overflow:hide;">
<div class="col-md-2">'.get_the_post_thumbnail( $id, array(70,70)).'</div>
<div class="col-md-9">
<p>'.$title.'</p>
<p>'.$content.'</p>

</div>
</div>
	';
	
	}
    }else echo '<div class="row margin" style="max-height: 400px ;overflow-y:scroll;background: #eceff4; ">No result Found</div>';
echo '<div class="row margin" style="max-height: 400px ;overflow-y:scroll;background: #eceff4; "><a href="'.$link.'">'.$html.'</a></div>'; 

}else echo '<div class="row margin" style="height:50px ;overflow-y:scroll;background: #eceff4; ">Plese Enter product name </div>';
}

?>


