<p><strong>HTTP METHODS: </strong> every HTTP request has a “verb,” or action, along with it. Laravel allows you to define your routes based on which verb was used; the most common are GET and POST, followed by PUT, DELETE, and PATCH. Each method communicates a
    different thing to the server, and to your code, about the intentions of the caller.</p>

<p><button class="btn btn-outline-warning">HTTP verbs</button> => HTTP defines a set of request methods to indicate the desired action to be performed for a given resource</p>

<p><button class="btn btn-outline-warning">get</button>
    => The GET method requests a representation of the specified resource. Requests using GET should only retrieve data.</p>

<p><button class="btn btn-outline-success">head</button>
    => The HEAD method asks for a response identical to that of a GET request, but without the response body.</p>

<p><button class="btn btn-outline-success">post</button> =>
    The POST method is used to submit an entity to the specified resource, often causing a change in state or side effects on the server.</p>

<p><button class="btn btn-outline-danger">put</button>=>
    The PUT method replaces all current representations of the target resource with the request payload.</p>

<p><button class="btn btn-outline-info">patch</button> =>
    The PATCH method is used to apply partial modifications to a resource.</p>

<p><button class="btn btn-outline-primary">delete</button> =>
    The DELETE method deletes the specified resource.</p>

<p><button class="btn btn-outline-primary">connect</button> =>
    The CONNECT method establishes a tunnel to the server identified by the target resource.</p>

<p><button class="btn btn-outline-primary">options</button> =>
    The OPTIONS method is used to describe the communication options for the target resource.</p>

<p><button class="btn btn-outline-primary">trace</button> =>
    The TRACE method performs a message loop-back test along the path to the target resource.</p>