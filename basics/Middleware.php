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
                <p>Middleware provide a convenient mechanism for filtering <code>HTTP requests</code> entering your application</p>
                <p><code>authentication , CORS , CSRF protection</code> etc</p>
                <p>It's best to envision middleware as a series of "layers" HTTP requests must pass through before they hit your application. Each layer can examine the request and even reject it entirely.</p>
               

            </div>

            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Defining Middleware</h2>
             <h4>Before & After Middleware</h4>
             <hr>
             <h5>Before & After Middleware</h5>
             <a href="https://laravel.com/docs/6.x/middleware#defining-middleware" target="_blank">Documentation</a>

            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <h2 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Registering Middleware</h2>
                <h3>Global Middleware</h3>
                <h3>Assigning Middleware To Routes</h3>
                <h3>Middleware Groups</h3>
                <h3>Sorting Middleware</h3>

                <hr>
                <h5>Global Middleware</h5>
                <p> run during every HTTP request to your application</p>

                <hr>
                <h5>Assigning Middleware To Routes</h5>
                <p>assign middleware to specific routes</p>
                <pre>
// Within App\Http\Kernel Class...

protected $routeMiddleware = [
    'auth' => \App\Http\Middleware\Authenticate::class,


Route::get('admin/profile', function () {
    //
})->middleware('auth');
                </pre>

                <hr>
                <h5>Middleware Groups</h5>
                <a href="https://laravel.com/docs/6.x/middleware#middleware-groups" target="_blank">Documentation</a>

                <hr>
                <h5>Sorting Middleware</h5>
                <a href="https://laravel.com/docs/6.x/middleware#sorting-middleware" target="_blank">Documentation</a>

            </div>

            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Middleware Parameters</h2>
                <pre>

namespace App\Http\Middleware;

class CheckRole
{
    
    public function handle($request, Closure $next, $role)
    {
       
    }

}

Route::put('post/{id}', function ($id) {
    //
})->middleware('role:editor');
                </pre>
                
            </div>

            <div class="tab-pane fade" id="Fallback-Routes">
                <h2 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Terminable Middleware</h2>
                <br>
               
                <a href="https://laravel.com/docs/6.x/middleware#terminable-middleware" target="_blank">Documentation</a>

            </div>
            

        </div>
    </div>
</div>


<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php"; ?>