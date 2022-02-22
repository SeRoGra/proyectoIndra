
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Proyecto Indra</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item {{ setActive('home.index') }}">
        <a class="nav-link" href="{{ @route("home.index") }}">Home</a>
      </li>
      <li class="nav-item {{ setActive('producto.index') }}">
        <a class="nav-link" href="{{ @route("producto.index") }}">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Usuarios</a>
      </li>
    </ul>
  </div>
</nav>

<!--active-->