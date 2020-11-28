<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    //echo "<h1>".$_POST['name']."</h1>";
    header('Location: /users.php');
    exit();

}
?>
<!DOCTYPE html>
<?php include_once "_header.php" ?>

<body class="c-app">
<?php include_once "_sidebar.php"; ?>
<div class="c-wrapper c-fixed-components">

    <?php
    include_once "classes.php";
    //$bItem = new BreadcrumbItem;
    $breadcrumbs = array();
    $breadcrumbs[] = new BreadcrumbItem("Головнa", false, "/");
    $breadcrumbs[] = new BreadcrumbItem("Користувачі", false, "/users.php");
    $breadcrumbs[] = new BreadcrumbItem("Додати користувача", true);
    ?>

    <?php include_once "_subheader.php"; ?>
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header"><strong>Додати користувача</strong></div>
                                <div class="card-body">
                                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="name">Ім'я</label>
                                            <div class="col-md-9">
                                                <input class="form-control" id="name" type="text"
                                                       name="name" placeholder="Text">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="file-input">Фото</label>
                                            <div class="col-md-9">
                                                <input id="file-input" type="file" name="file-input">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-2">
                                                <input type="submit" class="btn btn-block btn-success" value = "Додати" />
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>
        <?php include_once "_footer.php" ?>
    </div>
</div>


<!-- CoreUI and necessary plugins-->
<?php include_once "_scripts.php"; ?>
</body>
</html>
