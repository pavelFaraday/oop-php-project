<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>
            <?php

            $users = User::find_all_users();

            foreach ($users as $user) {
                echo "<b>User ID: </b>" . $user->id . "<br>";
                echo "<b>Username: </b>" . $user->username . "<br>";
                echo "<b>First name: </b>" . $user->first_name . "<br>";
                echo "<b>Last name: </b>" . $user->last_name . "<br>";
                echo "<hr>";
            }

            ?>

            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->