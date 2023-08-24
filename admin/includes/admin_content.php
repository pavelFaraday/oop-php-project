<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>
            <?php

            // test if user is pulled from DB
            $found_user = User::find_user_by_id(3);
            echo "<b>User ID: </b>" . $found_user->id . "<br>";
            echo "<b>Username: </b>" . $found_user->username . "<br>";
            echo "<b>First name: </b>" . $found_user->first_name . "<br>";
            echo "<b>Last name: </b>" . $found_user->last_name . "<br>";
            echo "<hr>";

            // Test if new user is inserted into DB
            $user = new User();
            $user->username = "Test second Username";
            $user->password = "Test second password";
            $user->first_name = "Test second Firstname";
            $user->last_name = "Test second Lastname";

            $user->create();



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