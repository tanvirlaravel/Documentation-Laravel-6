<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/header.php"; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/nav.php"; ?>

<h2 class="my-4 text-info text-center">Controllers</h2>

<div class="row">
    <div class="col-3">
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/basics/controller_sidebar.php"; ?>
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
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Controller Middleware</h4>
                <pre class="">
                class UserController extends Controller
                {   
                    public function __construct()
                    {
                        $this->middleware('auth');

                        $this->middleware('log')->only('index');

                        $this->middleware('subscribed')->except('store');
                    }
                }
                </pre>

                <p>Controllers also allow you to register middleware using a Closure. This provides a convenient way to define a middleware for a single controller without defining an entire middleware class:</p>
                <pre>
                $this->middleware(function ($request, $next) {
                    // ...

                    return $next($request);
                });
                </pre>
            </div>

            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <h4 class="mb-4 py-2 pl-5 pr-2 bg-info d-inline-block">Resource Controllers</h4>
                <pre>
                    Route::resource('photos', 'PhotoController');

                    Route::resources([
                        'photos' => 'PhotoController',
                        'posts' => 'PostController'
                    ]);
                </pre>

                <h4>Spoofing Form Methods</h4>
                <p>PUT, PATCH, or DELETE requests</p>
                <pre>
                form action="/foo/bar" method="POST">
                    @method('PUT')
                /form>
                </pre>

                <h4>Partial Resource Routes</h4>
                <a href="https://laravel.com/docs/6.x/controllers#restful-partial-resource-routes" target="_blank">Document</a>
                <hr>

                 <h4>API Resource Routes</h4>
                <a href="https://laravel.com/docs/6.x/controllers#restful-partial-resource-routes" target="_blank">Document</a>
                <hr>

                <h4>Nested Resources</h4>
                <a href="https://laravel.com/docs/6.x/controllers#restful-nested-resources" target="_blank">Document</a>
                <hr>
                <h4>Naming Resource Routes</h4>
                <a href="https://laravel.com/docs/6.x/controllers#restful-naming-resource-routes" target="_blank">Document</a>
                <hr>
                <h4>Naming Resource Route Parameters</h4>
                <a href="https://laravel.com/docs/6.x/controllers#restful-naming-resource-route-parameters" target="_blank">Document</a>
                <hr>
                <h4>Localizing Resource URIs</h4>
                <a href="https://laravel.com/docs/6.x/controllers#restful-localizing-resource-uris" target="_blank">Document</a>
                <hr>
                <h4>Supplementing Resource Controllers</h4>
                <a href="https://laravel.com/docs/6.x/controllers#restful-supplementing-resource-controllers" target="_blank">Document</a>
               
            </div>

            <div class="tab-pane fade" id="Fallback-Routes">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2 bg-info d-inline-block"> Dependency Injection & Controllers</h4>
                <p>The Laravel service container is used to resolve all Laravel controllers. As a result, you are able to type-hint any dependencies your controller may need in its constructor. The declared dependencies will automatically be resolved and injected into the controller instance:</p>
                <pre>
                protected $users;

                public function __construct(UserRepository $users)
                {
                    $this->users = $users;
                }
                </pre>

                <hr>
                <h4>Method Injection</h4>
                <pre>
                public function update(Request $request, $id)
                {
                    $name = $request->name;

                    //
                }
                </pre>


            </div>
            <div class="tab-pane fade" id="Rate-Limiting">
                <h4 class="mt-5 mb-4 py-2 pl-5 pr-2  d-inline-block">Route Caching</h4>
                <br>
                <a href="https://laravel.com/docs/6.x/controllers#route-caching" target="_blank">Document</a>
               

            </div>
           

        </div>
    </div>
</div>


<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php"; ?>