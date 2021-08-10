<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/header.php"; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/nav.php"; ?>

<h2 class="my-4 text-info text-center">Middleware</h2>

<div class="row">
    <div class="col-3">
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/basics/Middleware_sidebar.php"; ?>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Introduction</h2>
               

            </div>

            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Defining Middleware</h2>
             

            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <h2 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Registering Middleware</h2>
                <h3>Global Middleware</h3>
                <h3>Assigning Middleware To Routes</h3>
                <h3>Middleware Groups</h3>
                <h3>Sorting Middleware</h3>
            </div>

            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Middleware Parameters</h2>
                
            </div>

            <div class="tab-pane fade" id="Fallback-Routes">
                <h2 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Terminable Middleware</h2>
               


            </div>
            <div class="tab-pane fade" id="Rate-Limiting">
                <h2 class="mt-5 mb-4 py-2 pl-5 pr-2  d-inline-block">Sorting Middleware</h2>

            </div>
            <div class="tab-pane fade" id="Form-Method-Spoofing">
                <h2 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Middleware Parameters</h2>
                


            </div>
            <div class="tab-pane fade" id="Accessing-The-Current-Route">
                <h2 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Terminable Middleware</h2>
               

            </div>

        </div>
    </div>
</div>


<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php"; ?>