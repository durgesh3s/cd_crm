<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">{{$navtitle}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="append-nav-items">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
          </li>
        </ul>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-plus"></i>
          </a>
          <ul class="dropdown-menu" id="nav-dropdown">
            <li>
              <a class="dropdown-item" href="{{route('module-form')}}">Create Module</a>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Module 1</a></li>
            <li><a class="dropdown-item" href="#">Module 2</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>

</nav>