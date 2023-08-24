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

            // Test if new user is INSERTed into DB
            /* $user = new User();
            $user->username = "Test second Username";
            $user->password = "Test second password";
            $user->first_name = "Test second Firstname";
            $user->last_name = "Test second Lastname";
            $user->create(); */

            // Test user UPDATE query
            $user = User::find_user_by_id(62);
            $user->last_name = "Fibonacci";
            $user->save();

            // Test SAVE method
            /*  $user->username = "Ludovico";
            $user->save(); */

            // DELETE user FROM DB
            /* $user = User::find_user_by_id(59);
            $user->delete(); */

            // Create/INSERT new User in DB
            /*  $user = new User();
            $user->username = "Tralivali";
            $user->save(); */
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