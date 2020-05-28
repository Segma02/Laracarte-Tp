<nav class="navbar navbar-expand-sm static-top navbar-light bg-light justify-content-between">

        <ul class="nav navbar-nav"> 
          <li> <a href="{{route('root_path')}}" class="navbar-brand">{{config('app.name')}}</a></li>
          <li class="{{active_home()}}">
            <a class="nav-link" href="{{route('root_path')}}">Home <span class="sr-only">(page d'acceuil)</span></a>
          </li>
          <li class="{{active_about()}}">
            <a class="nav-link" href="{{route('about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Artisan</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
            <div class="dropdown-menu border-light" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="http://laravel.com">Laravel.com</a>
              <a class="dropdown-item" href="http://laravel.io">Laravel.io</a>
              <a class="dropdown-item" href="http://laracasts.com">Laracasts</a>
              <a class="dropdown-item" href="http://larajobs.com">Larajobs</a>
              <a class="dropdown-item" href="http://laravel-new.com">Laravel New</a>
              <a class="dropdown-item" href="http://larachat.co">Larachats</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>

        <ul class="nav navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Register</a>
          </li>
        </ul>
    </nav>