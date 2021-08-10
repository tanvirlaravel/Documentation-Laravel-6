<p><button class="btn btn-outline-warning">Dependency Injection</button> => Dependency injection is a procedure where one object supplies the dependencies of another object.</p>
<p>The dependencies can be changed at run time as well as compile time</p>

<ul>
    <li><b>Modular:</b> The Dependency Injection helps create completely self-sufficient classes or modules</li>
    <li><b>Testable:</b>It helps write testable code easily eg unit tests for example</li>
    <li><b>Maintainable:</b> Since each class becomes modular, it becomes easier to manage it</li>
</ul>

<hr>
<h3>Declarative programming</h3>
<pre class="px-3">

Here's an example.

In CSS (used to style HTML pages), if you want an image element to be 100 pixels high and 100 
pixels wide, you simply "declare" that that's what you want as follows:

#myImageId {
height: 100px;
width: 100px;
}

You can consider CSS a declarative "style sheet" language.

The browser engine that reads and interprets this CSS is free to make the image appear
this tall and this wide however it wants. Different browser engines (e.g., the engine 
for IE, the engine for Chrome) will implement this task differently.

Their unique implementations are, of course, NOT written in a declarative language but in
a procedural one like Assembly, C, C++, Java, JavaScript, or Python. That code is a bunch
of steps to be carried out step by step (and might include function calls). It might do
things like interpolate pixel values, and render on the screen.

                </pre>