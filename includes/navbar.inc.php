<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo SITE_PATH ?>">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo SITE_PATH ?>home">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Blog
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo SITE_PATH ?>store?size=medium&price%5B%5D=from%3D1000&price%5B%5D=to%3DMax&color%5B%5D=red&color%5B%5D=yellow&color%5B%5D=blue">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo SITE_PATH ?>contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
    <nav>
        <a href="<?php echo SITE_PATH ?>store/best-mobile-of-2020">best mobile of 2020</a>
        <a href="<?php echo SITE_PATH ?>store/category/mobiles">mobiles</a>
        <a href="">shop</a>
    </nav>