<?php

// Upload file
if(isset($_POST['but_submit'])){
  //echo PLUGIN_DIR_PATH;die;

  if($_FILES['file']['name'] != ''){

    /*$file =  PLUGIN_DIR_PATH.'/starts360/xml data/EmployeeCPT.xml';
    $uploadedfile = $_FILES['file'];*/
    $current = file_get_contents(PLUGIN_DIR_PATH.'/xml data/EmployeeCPT.xml');
    $xml_data = simplexml_load_string($current);
    $wp_post_attributes = $xml_data->channel->item->children('wp',true);
    $wp_post_data = array(
      'post_type' =>  'starts-employee',
      'post_title'=>  $xml_data->channel->item->title,
      'post_name' => $wp_post_attributes->post_name,
      'post_status'=> 'publish',
      'post_content' => $xml_data->channel->item->content,
      'post_author'=>  1

      );
    //echo "<pre>";print_r($xml_data);die();

    $post_id = wp_insert_post($wp_post_data);
   //echo "<pre>"; print_r($xml_data);

  }
 
}

?>
<div class="container">
  <div class="row"><div class="col-md-4"></div>
    <div class="col-md-4">
      
      <form method='post' action='' name='myform' enctype='multipart/form-data'>
        <div class="form-group">
        <label>Upload:</label> 
        <input type='file' name='file' class = 'form-control'>
        <input type='submit' name='but_submit' value='Submit' class="btn btn-primary">
        </div>
      </form>
        
     
    </div>
    <div class="row"><div class="col-md-4"></div>
  </div>
</div>


 