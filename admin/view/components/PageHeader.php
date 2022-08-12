<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">

            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">მთავარი</a></li>
                    <li class="breadcrumb-item active">
                        <?php

                        if (isset($_GET['action'])) {
                            echo t($_GET['action']);
                        }

                        ?>
                    </li>

                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>