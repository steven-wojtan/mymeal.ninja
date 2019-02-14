<?php
/**
 * Created by PhpStorm.
 * User: Steven
 * Date: 2019-02-06
 * Time: 18:58
 */
include '/comp/vars.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php
    $currentPage = 'Home';
    include $_Server['DOCUMENT_ROOT'].'/comp/header.php';
?>

<body>

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://openclipart.org/download/221232/rollninja.svg" style="width:40px;height:40px;"/>
            My Meal Ninja
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/plan">Plan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tools">Tools</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">A Bootstrap 4 Starter Template</h1>
            <p class="lead">Complete with pre-defined file paths and responsive navigation!</p>
            <ul class="list-unstyled">
                <li>Bootstrap 4.2.1</li>
                <li>jQuery 3.3.1</li>
            </ul>
        </div>
    </div>
</div>


</body>
<?php include $_Server['DOCUMENT_ROOT'].'/comp/footer.php'; ?>
</html>