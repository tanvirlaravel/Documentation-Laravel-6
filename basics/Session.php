<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/header.php"; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/nav.php"; ?>

<h2 class="my-4 text-info text-center">Session</h2>

<div class="row">
    <div class="col-3">
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/basics/Session_sidebar.php"; ?>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Introduction</h4>
                <p>Since HTTP driven applications are stateless, sessions provide a way to store information about the user across multiple requests. </p>

            </div>

            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Configuration</h4>
               <hr>
                <a href="https://laravel.com/docs/6.x/session#configuration" target="_blank">Document</a>
            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Driver Prerequisites</h4>
                <hr>
                 <a href="https://laravel.com/docs/6.x/session#driver-prerequisites" target="_blank">Document</a>
            </div>

            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Using The Session</h4>
               
                <hr>
                <h4>Retrieving Data</h4>
                <a href="https://laravel.com/docs/6.x/session#retrieving-data" target="_blank">Documentation</a>

                 <hr>
                <h4>Storing Data</h4>
                <a href="https://laravel.com/docs/6.x/session#storing-data" target="_blank">Documentation</a>

                

                 <hr>
                <h4>Flash Data</h4>
                <a href="https://laravel.com/docs/6.x/session#flash-data" target="_blank">Documentation</a>

                 <hr>
                <h4>Deleting Data</h4>
                <a href="https://laravel.com/docs/6.x/session#deleting-data" target="_blank">Documentation</a>

                 <hr>
                <h4>Regenerating The Session ID</h4>
                <a href="https://laravel.com/docs/6.x/session#regenerating-the-session-id" target="_blank">Documentation</a>
            </div>

            <div class="tab-pane fade" id="Fallback-Routes">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Adding Custom Session Drivers</h4>
                <hr>
               
 <a href="https://laravel.com/docs/6.x/session#adding-custom-session-drivers" target="_blank">Documentation</a>

            </div>
           

        </div>
    </div>
</div>


<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php"; ?>