<nav class="navbar navbar-dark bg-dark fixed-top">
@auth
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LEarn.</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Hi, {{ auth()->user()->name }}</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/founder">Setting</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/login">You need help?</a>
          </li>
          <li class="nav-item">
            <form action="/logout" method="post">
            @csrf
            <button type="submit" class="dropdown-item">Logout</button>
            </form> 
          </li>
        </ul>
      </div>
    </div>
  </div>
  @else
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LEarn.</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Hi, People</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/books/all">Book</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/books/publisher">Publisher</a>
          </li>
          <br>
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">Register</a>
          </li>
          </li>
        </ul>
      </div>
    </div>
  </div>
  @endauth
</nav>