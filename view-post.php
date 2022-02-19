<?php 
include('../../../wp-config.php'); 
$id = $_GET['id'];
$single_post_data = get_post($id);
//print_r($single_post_data);
$meta_values = get_post_meta($id);
//print_r($meta_values);

get_header();
?>
<div class="container-fluid" style="background: rgba(0,0,0,0.7);">
<div class="container" >
	<div class="row">
	<h3 class="text-center text-info"><?php echo $single_post_data->post_title; ?> Details Section</h3>
	<div class="col-md-10 mx-auto">
		<img src="<?php echo  get_the_post_thumbnail_url($id ,'full');?>">
	</div>
		<div class="col-md-10 mx-auto">
			
			<h3>Title : <?php echo $single_post_data->post_title; ?></h3>
			<!-- <h3>Address : <?php //echo $meta_values['Address'][0]; ?></h3>
			<h3>Mobile No : <?php //echo $meta_values['Mobile No'][0]; ?></h3>
			<h3>Designation : <?php //echo $meta_values['Designation'][0]; ?></h3> -->
			<?php
			//Getting Meta data for post
			foreach($meta_values as $key=>$val){
				//removing unwanted meta key which starts from _ like _edit_lock etc
				if(substr($key,0,1)!=='_'):
				echo $key .':'.$val[0].'<br>';
				endif; 

			}
			?>
			<h3><?php //$term = wp_get_post_terms($id); echo $term->taxonomy;?></h3>
			<p><?php echo $single_post_data->post_content; ?></p>


		</div>
	</div>
</div>
</div>
<?php
get_footer();
?>