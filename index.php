<?php 

// for adding ads to a Web page.
function create_ad() {
  $ad = "  Lab 7!  ";
  echo '<div class="alert alert-info" role="alert">';
  for ($i=0; $i<10; $i++){
    echo ($ad);
  }
  echo '</div>';
} // End of the function definition.

$page_title = 'Welcome to Lab 7!';
include('includes/header.html');

// Call the ad function
create_ad();
?>

<div class="page-header"><h1>Lab 7: Midterm Practice</h1></div>
<p>This is a practice website for the CPSC4125 midterm exam.</p>

<?php
// Call the ad function again
create_ad();

include('includes/footer.html');
?>