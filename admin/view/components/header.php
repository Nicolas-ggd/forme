<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Product</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/forme/admin/view/pages/addProduct.php">admin
                        panel</a>
                </li>
            </ul>
        </div>
        <?php

        if ($_POST[$_SERVER["REQUEST_URI"]] = "index.php") {
            echo '<div class="d-flex pt-3">
                    <i class="px-1 bi bi-person-fill"></i>
                    <p class="align-items-center">Nicolas-ggd</p>
                </div>';
            echo '<div class="px-3"></div>';
            echo '<div class="d-flex pt-3">
             <i class="px-1 bi bi-box-arrow-right" style="cursor: pointer";></i>
            <p class="align-items-center">Log Out</p>
        </div>';
        } else {
            echo "error";
        }

        ?>

    </div>
</nav>