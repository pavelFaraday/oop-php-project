<?php include("includes/init.php"); ?>

<?php
// if user is not logged in -> redirection
if (!$session->is_signed_in()) {
    redirect("login.php");
}
?>

