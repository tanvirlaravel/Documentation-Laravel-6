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

                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Basic Routing</h4>
                <h5>Redirect Routes</h5>
                <h5>View Routes</h5>
                

            </div>

            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Route Parameters</h4>

                <h5>Required Parameters</h5>
                <h5>Optional Parameters</h5>
                <h5>Regular Expression Constraints</h5>
               


            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Named Routes</h4>
               
            </div>

            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Route Groups</h4>
                <h5>Middleware</h5>
                <h5>Namespaces</h5>
                <h5>Subdomain Routing</h5>
                <h5>Route Prefixes</h5>
                <h5>Route Name Prefixes</h5>

            </div>

            <div class="tab-pane fade" id="Fallback-Routes">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Route Model Binding</h4>
                <h5>Implicit Binding</h5>
                <h5>Explicit Binding</h5>


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