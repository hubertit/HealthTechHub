<?php require("configs/globals.php");

if(isset($_GET["post"]))
{
    $postId = $_GET["post"];
    $query = mysqli_query($connection,"SELECT * FROM posts, categories WHERE post_id ='$postId' AND categories.category_id = posts.category_id ")or die(mysqli_error($connection));
    $post = mysqli_fetch_assoc($query);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Edit Post: <?php print $post["post_title"]; ?></title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="plugins/select2/select2.min.css">
    <link href="assets/css/users/user-profile.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->

    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
</head>

<body class="sidebar-noneoverflow">

    <!--  BEGIN NAVBAR  -->
    <?php require("templates/navBar.php"); ?>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <?php
        require("templates/sideBar.php");
        ?>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-spacing">

                    <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing offset-md-2">

                        <div class="skills layout-spacing ">
                            <div class="widget-content widget-content-area">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <h3 class="">Edit Post</h3>
                                    <?php require("scripts/main.php"); ?>

                                    <div class="row">
                                        <div class="col-lg-12 ">
                                            <div class="form-group">
                                                <input type="hidden" name="post_id" value="<?php print $post["post_id"]; ?>">
                                                <input type="text" class="form-control" placeholder="Post Title" name="postTitle" value="<?php print $post["post_title"]; ?>" required>
                                            </div>
                                        </div>


                                        <div class="col-lg-12">
                                            <div class="form-group">

                                                <select name="categoryId" id="" required class='form-control'>
                                                    <option value="<?php print $post["category_id"];?>"><?php print $post["category_name"];?></option>
                                                    <?php

                                                    $query = mysqli_query($connection, "SELECT * FROM  categories ORDER BY category_name ASC") or die(mysqli_error($connection));

                                                    while ($data = mysqli_fetch_assoc($query)) { ?>
                                                        <option value="<?php print $data["category_id"]; ?>"><?php print $data["category_name"]; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>



                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="postDetails" placeholder="Post Details" class="form-control" id="" cols="30" rows="5"><?php print $post["post_details"]; ?></textarea>
                                                <script>
                                                    CKEDITOR.replace('postDetails');
                                                </script>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Post Image</label>
                                                <input type="file" name="postImage" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary " type="submit" name="updatePost">Update Post</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <?php require("templates/footer.php"); ?>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="plugins/select2/select2.min.js"></script>
    <script src="plugins/select2/custom-select2.js"></script>
    <script>
        $(document).ready(function() {
            $(".blog").addClass("active");
            $(".addPost").addClass("active");
            $("#blog").addClass("show");

            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>

</html>