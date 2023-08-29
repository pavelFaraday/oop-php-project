<?php include("includes/header.php"); ?>

<?php
// if user is not logged in -> redirection
if (!$session->is_signed_in()) {
    redirect("login.php");
}
?>

<?php

// $user = user::find_by_id($_GET['id']);
// if (isset($_POST['update'])) {
//     if ($user) {
//         $user->title = $_POST['title'];
//         $user->caption = $_POST['caption'];
//         $user->alternate_text = $_POST['alternate_text'];
//         $user->description = $_POST['description'];
//     }
// }


?>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <?php include("includes/top_nav.php") ?>

    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <?php include("includes/side_nav.php") ?>

    <!-- /.navbar-collapse -->
</nav>

<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Add User
                    <small>Subheading</small>
                </h1>

                <form action="" method="post" enctype="multipart/form-data">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" name="first_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="last name">Last Name</label>
                            <input type="text" name="last_name" class="form-control">
                        </div>
                        <div class=" form-group">
                            <label for="password">Password</label>
                            <input type="text" name="password" class="form-control">
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<?php include("includes/footer.php"); ?>