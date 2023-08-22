<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>
            <?php

            // Fetch all Users username
            $result_set = User::find_all_users();
            while ($row = mysqli_fetch_array($result_set)) {
                echo $row['username'] . "<br>";
            }

            echo "<hr>";

            // Fetch specific user depending on id
            $found_user = User::find_user_by_id(1);

            $user = User::instantation($found_user);

            echo "<b>User ID: </b>" . $user->id . "<br>";
            echo "<b>Username: </b>" . $user->username . "<br>";
            echo "<b>First name: </b>" . $user->first_name . "<br>";
            echo "<b>Last name: </b>" . $user->last_name . "<br>";

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