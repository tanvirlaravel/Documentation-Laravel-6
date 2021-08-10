<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/header.php"; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/nav.php"; ?>

<h2 class="my-4 text-info text-center">Controllers</h2>

<div class="row">
    <div class="col-3">
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/basics/Middleware_sidebar.php"; ?>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Introduction</h4>
                <p>Nothing</p>

            </div>

            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Basic Controllers</h4>
               

                <h4>Defining Controllers</h4>
                <p>the controller extends the base controller class included with Laravel. The base class provides a few convenience methods such as the middleware method
                </p>
                <p><code>Route::get('user/{id}', 'UserController@show');</code></p>
                <p>when a request matches the specified route URI, the <code>show</code> method on the <code>UserController</code> class will be executed. The route parameters will also be passed to the method.</p>
                <hr>

                <h4>Controllers & Namespaces <span class="text-danger">later</span></h4>
                <a href="https://laravel.com/docs/6.x/controllers#controllers-and-namespaces" target="_blank">Controllers & Namespaces</a>
                <hr>
                
                <h4>Single Action Controllers</h4>
                <a href="https://laravel.com/docs/6.x/controllers#single-action-controllers" target="_blank">Single Action Controllers</a>
                

            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Before & After Middleware</h4>
                <hr>
                <h3 class="display-3 text-danger">Later</h3>
            </div>

            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Registering Middleware</h4>
                <hr>
                <h3>Global Middleware</h3>
                <p>If you want a middleware to run during every HTTP request to your application, list the middleware class in the <code>$middleware</code> property of your <code>app/Http/Kernel.php</code> class.</p>
                <h3>Assigning Middleware To Routes</h3>
                <p>If you would like to assign middleware to specific routes, you should first assign the middleware a key in your app/Http/Kernel.php file. in <code>$routeMiddleware</code> property.</p>

            </div>

            <div class="tab-pane fade" id="Fallback-Routes">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Middleware Groups</h4>
                <hr>
                <p>using the $middlewareGroups property of your HTTP kernel.</p>
                <p>Laravel comes with <code>web</code> and <code>api</code> middleware groups that contain common middleware you may want to apply to your web UI and API routes:</p>
                <pre class="bg-dark text-warning py-2">
                Route::get('/', function () {
                    //
                })->middleware('web');
                </pre>


            </div>
            <div class="tab-pane fade" id="Rate-Limiting">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2  d-inline-block">Sorting Middleware</h4>
                <hr>
                <p>Rarely, you may need your middleware to execute in a specific order but not have control over their order when they are assigned to the route. In this case, you may specify your middleware priority using the <code>$middlewarePriority</code> property of your <code>app/Http/Kernel.php</code> file:</p>
                <pre class="bg-dark text-warning py-2">
                protected $middlewarePriority = [
                        \Illuminate\Session\Middleware\StartSession::class,
                        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
                        \App\Http\Middleware\Authenticate::class,
                        \Illuminate\Session\Middleware\AuthenticateSession::class,
                        \Illuminate\Routing\Middleware\SubstituteBindings::class,
                        \Illuminate\Auth\Middleware\Authorize::class,
                ];

    
</pre>
                <hr>
            </div>
            <div class="tab-pane fade" id="Form-Method-Spoofing">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Middleware Parameters</h4>
                <hr>
                <pre class="bg-dark text-warning py-2">
                namespace App\Http\Middleware;

                public function handle($request, Closure $next, $role)
                {
                    if (! $request->user()->hasRole($role)) {
                        // Redirect...
                    }

                    return $next($request);
                }

                Route::put('post/{id}', function ($id) {
                    //
                })->middleware('role:editor');
                </pre>


            </div>
            <div class="tab-pane fade" id="Accessing-The-Current-Route">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Terminable Middleware</h4>
                <h3 class="dispaly-3 text-info">Documentation</h3>

            </div>

        </div>
    </div>
</div>


<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php"; ?>