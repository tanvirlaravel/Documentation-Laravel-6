<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?= $path ?>index.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <!-- <li class="nav-item">
                <a class="nav-link" href="<?= $path ?>Introduction.php">Introduction</a>
            </li> -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Basic
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= $path ?>basics/Routing.php">Routing</a>
                    <a class="dropdown-item" href="<?= $path ?>basics/Middleware.php">Middleware</a>
                    <a class="dropdown-item" href="<?= $path ?>basics/Controllers.php">Controllers</a>
                    <a class="dropdown-item" href="<?= $path ?>basics/Session.php">Session</a>
                </div>
            </li>

           


           

            <!-- <li class="nav-item">
                <a class="nav-link" href="<?= $path ?>Template-Syntax.php">Template Syntax</a>
            </li> -->
           


            <li class="nav-item">
                <a class="nav-link bg-warning text-white" href="<?= $path ?>glossory/glossory.php">Glossory</a>
            </li>

        </ul>

    </div>
</nav>


<div class="container">
    <div class="row">

        <div class="col-md-12">