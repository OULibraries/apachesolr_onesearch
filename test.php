<?php





# Add profile picture uri when indexing users
$my_user = entity_metadata_wrapper('user', 328);


foreach ( $my_user->value()->roles as $key => $value) {

  drush_print( $value);

 }
