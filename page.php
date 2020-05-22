//first check if user is login or not
if( is_user_logged_in() ) {  // is_user_logged_in returns 0 if user not looged 
  $user = wp_get_current_user();  //this get all details of user
  $roles = ( array ) $user->roles; //here get the roles in array format.
  
  print_r($roles); // will print the role assign to logged user
 }
