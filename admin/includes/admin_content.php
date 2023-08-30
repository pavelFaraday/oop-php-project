<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>
            <?php

            /* $photo = Photo::find_by_id(9);
            echo $photo->filename . "<br>"; */

            // test if user is pulled from DB
            /*             $found_user = User::find_by_id(3);
            echo "<b>User ID: </b>" . $found_user->id . "<br>";
            echo "<b>Username: </b>" . $found_user->username . "<br>";
            echo "<b>First name: </b>" . $found_user->first_name . "<br>";
            echo "<b>Last name: </b>" . $found_user->last_name . "<br>";
            echo "<hr>"; */

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



            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $session->count; ?></div>
                                    <div>New Views</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-photo fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo Photo::count_all(); ?></div>
                                    <div>Photos</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Total Photos in Gallery</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo User::count_all(); ?>

                                    </div>

                                    <div>Users</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Total Users</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo Comment::count_all(); ?></div>
                                    <div>Comments</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Total Comments</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div> <!--First Row-->


            <!-- Google Charts -->
            <div class="row">
                <div id="piechart" style="width: 900px; height: 500px;"></div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->