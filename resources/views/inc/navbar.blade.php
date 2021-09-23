<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="{{'/' == request()->path() ? 'nav-link active' : 'nav-link'}}" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="{{'products' == request()->path() ? 'nav-link active' : 'nav-link'}}" href="{{route('products')}}">Products</a>
        </li>
        <li class="nav-item">
          <a class="{{'team' == request()->path() ? 'nav-link active' : 'nav-link'}}" href="{{route('team')}}">Our Teams</a>
        </li>
        <li class="nav-item">
          <a class="{{'about' == request()->path() ? 'nav-link active' : 'nav-link'}}" href="{{route('about')}}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="{{'contact' == request()->path() ? 'nav-link active' : 'nav-link'}}" href="{{route('contact')}}">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>