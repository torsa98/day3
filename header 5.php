
<?php ob_start(); ?>
<h1>My Page</h1>
This is my page.
<?php
$redirect_page ='http://google.co.uk';
$redirect = false;
if($redirect==true){
header('location: '.$redirect_page);
}
ob_end_flush();
?>