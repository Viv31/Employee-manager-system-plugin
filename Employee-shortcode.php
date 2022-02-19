<?php
/**
Shortcode section for Employee List of inserted data for fetching all list here

*/
if(!function_exists('starts360EmployeeListShortcode')){

function starts360EmployeeListShortcode(){
	$args = array(
'post_type'=> 'starts-employee',
'orderby'    => 'ID',
'post_status' => 'publish',
'order'    => 'DESC',
'posts_per_page' => 3, // this will retrive all the post that is published 
'paged' => get_query_var('paged') ? get_query_var('paged') : 1//Added for pagination section
);
$result = new WP_Query( $args );
if ( $result-> have_posts() ) : ?>
<?php get_search_form(); ?>
<!-- <div class="form-group">
  	<input type="text" name="search" id="search" placeholder="Serach" class="form-control">
  	<button type="submit" class="btn btn-info">Search</button>
  </div> -->
<?php while ( $result->have_posts() ) : $result->the_post(); ?>
	<div class="container">
	<div class="col-md-12 ">
  
          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Profile Picture</th>
        <th>Name</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><img src="<?php echo  get_the_post_thumbnail_url($result->ID,'post-thumbnail');?>" height="250" width="auto"></td>
        <td><?php the_title(); ?></td>
        <td><?php the_excerpt(); ?></td>
        <td>
        <a href="<?php echo PLUGIN_URL.'/starts360/view-post.php?id='.get_the_ID(); ?>" class="btn btn-primary">View Details</a>
        <!-- <a href="<?php //the_permalink(); ?>" class="btn btn-primary btn-lg mx-auto" target="_blank"> View Details</a> -->
</td>
      </tr>
      
      
    </tbody>
  </table>
</div>
</div>
<?php endwhile; ?>
<div class="col-md-4"></div>
<div class="col-md-4">
<?php
$big = 999999999; // need an unlikely integer
 echo paginate_links( array(
    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $result->max_num_pages
) );

wp_reset_postdata();
?>
</div>
<div class="col-md-4"></div>
<?php endif; wp_reset_postdata(); ?>
<?php
}
}
add_shortcode("EmployeeListing","starts360EmployeeListShortcode");//First parameter is shortcode name and second parameter is function  name

