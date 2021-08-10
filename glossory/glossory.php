<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/header.php"; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/nav.php"; ?>

<h2 class="my-4 text-info text-center">Glossory</h2>

<div class="row">
    <div class="col-3">
        <div class="nav flex-column nav-pills card" id="v-pills-tab" role="tablist" aria-orientation="vertical">

            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home">A, B, C</a>

            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile">D, E, F</a>

            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages">G, H, I</a>

            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings">J, K, L</a>

            <a class="nav-link" data-toggle="pill" href="#Fallback-Routes">M, N, O</a>

            <a class="nav-link" data-toggle="pill" href="#Rate-Limiting">P, Q, R</a>

            <a class="nav-link" data-toggle="pill" href="#Form-Method-Spoofing">S, T, U</a>

            <a class="nav-link" data-toggle="pill" href="#Accessing-The-Current-Route">V, W, X</a>

            <a class="nav-link" data-toggle="pill" href="#CORS">Y, Z</a>


        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">A, B, C</h4>
                <hr>
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . "glossory/a.php"; ?>
                <hr>
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . "glossory/b.php"; ?>
                <hr>
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . "glossory/c.php"; ?>
            </div>


            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">D, E, F </h4>
                <hr>
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . "glossory/d.php"; ?>
                <hr>
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . "glossory/e.php"; ?>
                <hr>
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . "glossory/f.php"; ?>
            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">G, H, I</h4>
                <hr>
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . "glossory/g.php"; ?>
                <hr>
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . "glossory/h.php"; ?>
                <hr>
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . "glossory/i.php"; ?>
            </div>

            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">J, K , L</h4>
                <hr>
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . "glossory/j.php"; ?>
                <hr>
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . "glossory/k.php"; ?>
                <hr>
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . "glossory/l.php"; ?>

            </div>

            <div class="tab-pane fade" id="Fallback-Routes">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">M,N, 0</h4>
                <hr>
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . "glossory/m.php"; ?>
                <hr>
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . "glossory/n.php"; ?>
                <hr>
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . "glossory/o.php"; ?>
            </div>

            <div class="tab-pane fade" id="Rate-Limiting">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2  d-inline-block">P, Q, R</h4>
                <hr>
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . "glossory/p.php"; ?>
                <hr>
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . "glossory/q.php"; ?>
                <hr>
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . "glossory/r.php"; ?>
            </div>
            <div class="tab-pane fade" id="Form-Method-Spoofing">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">S, T, U</h4>
                <hr>
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . "glossory/s.php"; ?>
                <hr>
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . "glossory/t.php"; ?>
                <hr>
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . "glossory/u.php"; ?>
            </div>
            <div class="tab-pane fade" id="Accessing-The-Current-Route">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">V, W, X</h4>
                <hr>
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . "glossory/v.php"; ?>
                <hr>
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . "glossory/w.php"; ?>
                <hr>
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . "glossory/x.php"; ?>

            </div>
            <div class="tab-pane fade" id="CORS">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Y, Z</h4>
                <hr>
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . "glossory/y.php"; ?>
                <hr>
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . "glossory/z.php"; ?>
            </div>
        </div>
    </div>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php"; ?>