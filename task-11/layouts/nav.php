<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Logo and responsive toggle -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-globe"></span> Logo</a>
        </div>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="./../index.php">Home</a>
                </li>
                <li>
                    <a href="./../about.php">About</a>
                </li>
                <li>
                    <a href="#">Products</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="about-us">
                        <li><a href="#">Engage</a></li>
                        <li><a href="#">Pontificate</a></li>
                        <li><a href="#">Synergize</a></li>
                    </ul>
                </li>
            </ul>
            <!-- Log In Form -->
            <?php include_once  'login.php'; ?>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>