<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/header.php"; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/nav.php"; ?>

<h2 class="my-4 text-info text-center">Routing</h2>

<div class="row">
    <div class="col-3">
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/basics/Routing_sidebar.php"; ?>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Basic Routing</h2>
                <h3>Redirect Routes</h3>
                <h3>View Routes</h3>
                <hr>

                <h4>Redirect Routes</h4>
                <p>The <code>routes/web.php</code> file are assigned the web middleware group, which provides features like <a href="" target="_blank">session state</a> and <a href="" target="_blank">CSRF protection</a> The routes in routes/api.php are <a href="" target="_blank">stateless</a> and are assigned the api middleware group.</p>
                <p>Routes defined in the routes/api.php file are nested within a route group by the RouteServiceProvider. Within this group, the /api URI prefix is automatically applied so you do not need to manually apply it to every route in the file. You may modify the prefix and other route group options by modifying your RouteServiceProvider class.</p>
                <hr>
                <h5>Available Router Methods</h5>
                <pre>
    Route::get($uri, $callback);
    Route::post($uri, $callback);
    Route::put($uri, $callback);
    Route::patch($uri, $callback);
    Route::delete($uri, $callback);
    Route::options($uri, $callback);

    //route that responds to multiple HTTP verbs.
    Route::match(['get', 'post'], '/', function () {
            //
    });

    //route that responds to all HTTP verbs using the any method:
    Route::any('/', function () {
        //
    });
                </pre>
                


                <hr>
                <h5>CSRF Protection</h5>
                <p>Any HTML forms pointing to <code>POST, PUT, or DELETE</code> routes</p>
                <p><code>@csrf</code></p>

                <hr>
                <h4>View Routes</h4>
                <pre>
    Route::view('/welcome', 'welcome');

    Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
                </pre>

            </div>

            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h2 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Route Parameters</h2>

                <h3>Required Parameters</h3>
                <h3>Optional Parameters</h3>
                <h3>Regular Expression Constraints</h3>

                <hr>
                <h5>Required Parameters</h5>
                <p>Nothing</p>
                <hr>
                <h5>Optional Parameters</h5>
                <code>Route::get('user/{name?}'</code>

                <hr>
                <h5>Regular Expression Constraints</h5>
                <a href="https://laravel.com/docs/6.x/routing#parameters-regular-expression-constraints" target="_blank">Documentation</a> 

            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Named Routes</h4>
               
                <pre>
    Route::get('user/profile', function () {
        //
    })->name('profile');

    Route::get('user/profile', 'UserProfileController@show')->name('profile');

------------------------------------
// Generating URLs...
$url = route('profile');

// Generating Redirects...
return redirect()->route('profile');
-----------------------------------------

Route::get('user/{id}/profile', function ($id) {
    //
})->name('profile');

$url = route('profile', ['id' => 1]);
                </pre>

                <p>If you pass additional parameters in the array, those key / value pairs will automatically be added to the generated URL's query string:</p>
               <pre>
Route::get('user/{id}/profile', function ($id) {
    //
})->name('profile');

$url = route('profile', ['id' => 1, 'photos' => 'yes']);

// /user/1/profile?photos=yes
               </pre>
               <hr>
               <h5>Inspecting The Current Route</h5>
               <code>if ($request->route()->named('profile')) </code>
               <p class="mb-5"></p>
            </div>

            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Route Groups</h4>
                <h5>Middleware</h5>
                <h5>Namespaces</h5>
                <h5>Subdomain Routing</h5>
                <h5>Route Prefixes</h5>
                <h5>Route Name Prefixes</h5>

                <hr>
                <h5>Middleware</h5>
                <a href="https://laravel.com/docs/6.x/routing#route-group-middleware" target="_blank">Documentation</a>

                <hr>
                <h5>Namespaces</h5>
                <a href="https://laravel.com/docs/6.x/routing#route-group-namespaces" target="_blank">Documentation</a>

                <hr>
                <h5>Subdomain Routing</h5>
                <a href="https://laravel.com/docs/6.x/routing#route-group-subdomain-routing" target="_blank">Documentation</a>

                <hr>
                <h5>Route Prefixes</h5>
                <a href="https://laravel.com/docs/6.x/routing#route-group-prefixes" target="_blank">Documentation</a>

                <hr>
                <h5>Route Name Prefixes</h5>
                <a href="https://laravel.com/docs/6.x/routing#route-group-name-prefixes" target="_blank">Documentation</a>

            </div>

            <div class="tab-pane fade" id="Route-Model-Binding">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Route Model Binding</h4>
                <h5>Implicit Binding</h5>
                <h5>Explicit Binding</h5>

                <a href="https://laravel.com/docs/6.x/routing#route-model-binding" target="_blank">Documentation</a>


            </div>
            <div class="tab-pane fade" id="Fallback-Routes">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Fallback Routes</h4>
                <a href="https://laravel.com/docs/6.x/routing#fallback-routes" target="_blank">Documentation</a>

    
</pre>
                <hr>
            </div>
            <div class="tab-pane fade" id="Rate-Limiting">
            <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Rate Limiting</h4>
            <a href="https://laravel.com/docs/6.x/routing#rate-limiting" target="_blank">Documentation</a>

            </div>

            <div class="tab-pane fade" id="FormMethodSpoofing">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Form Method Spoofing</h4>
               
                <p>HTML forms do not support <code>PUT, PATCH or DELETE</code> actions.</p>
                <pre>
form action="/foo/bar" method="POST">
    input type="hidden" name="_method" value="PUT">
    input type="hidden" name="_token" value="{{ csrf_token() }}">
/form>


form action="/foo/bar" method="POST">
    @method('PUT')
    @csrf
/form>
                </pre>

            </div>

            <div class="tab-pane fade" id="AccessingTheCurrentRoute">
            <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Accessing The Current Route</h4>
            <pre>
$route = Route::current();

$name = Route::currentRouteName();

$action = Route::currentRouteAction();
            </pre>

            </div>

        </div>
    </div>
</div>


<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php"; ?>