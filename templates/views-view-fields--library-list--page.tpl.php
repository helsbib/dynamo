<?php

// Insert title as alt text. Would like to do this in a preprocess function,
// but this doesn't seem possible with current version of Views.
$fields['field_list_image_fid']->content = str_replace('alt=""', 'alt="' . check_plain($fields['title']->raw) . '"', $fields['field_list_image_fid']->content);

?>

<!--views-view-fields--library-list--page.tpl.php-->
<div class="clearfix">
  <div class="picture">
    <?php print $fields['field_image_fid']->content; ?>  
  </div>
  <div class="info">
    <h3><?php print $fields['title']->content; ?></h3>
    <?php print $fields['address']->content;?>
  </div>
</div>
