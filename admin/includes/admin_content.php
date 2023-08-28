<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>
            <?php

            $photo = Photo::find_by_id(9);
            echo $photo->filename . "<br>";

            // test if user is pulled from DB
            $found_user = User::find_by_id(77);
            echo "<b>User ID: </b>" . $found_user->id . "<br>";
            echo "<b>Username: </b>" . $found_user->username . "<br>";
            echo "<b>First name: </b>" . $found_user->first_name . "<br>";
            echo "<b>Last name: </b>" . $found_user->last_name . "<br>";
            echo "<hr>";

            // Test if new user is INSERTed into DB
            /* $user = new User();
            $user->username = "1";
            $user->password = "2";
            $user->first_name = "3";
            $user->last_name = "4";
            $user->create(); */

            // Test user UPDATE query
            /* $user = User::find_by_id(79);
            $user->username = "PHP";
            $user->password = "H";
            $user->first_name = "P";
            $user->last_name = "❤️❤️";
            $user->save(); */

            // Test SAVE method
            /*  $user->username = "Ludovico";
            $user->save(); */

            // DELETE user FROM DB
            /* $user = User::find_by_id(59);
            $user->delete(); */

            // Create/INSERT new User in DB
            /*  $user = new User();
            $user->username = "Tralivali";
            $user->save(); */


            /* $photos = Photo::find_all();
            foreach ($photos as $photo) {
                echo "<b>Photo Title: </b>" .  $photo->title;
            } */

            // Test if new Photo is INSERTed into DB
            /* $photo = new Photo();
            $photo->title = "Zebra is sitting on tree";
            $photo->description = "This is photo from Africa";
            $photo->filename = "Zebra.png";
            $photo->type = "image";
            $photo->size = 12;

            $photo->create(); */

            /* echo SITE_ROOT;
            echo "<br>";
            echo INCLUDES_PATH; */

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