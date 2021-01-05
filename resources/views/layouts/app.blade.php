<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
            {{ Html::style('css/bootstrap.css') }}
            {{ Html::script('js/jquery-3.5.1.min.js') }} 
            <title>@yield('title')</title>
      </head>
<body>
          @yield('content')
          

          <nav class="navbar justify-content-center navbar-expand-sm bg-dark navbar-dark">

              {{-- Brand --}}

              <a class="navbar-brand" href="#">Logo</a>

              {{-- Links --}}

              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('home.index') }}">{{ __('Inicio') }}</a>
                </li>

                {{-- Dropdown --}}

                    {{-- Dropdown 1 --}}

                <li class="nav-item dropdown" >
                  <a class="nav-link dropdown-toggle" href="#" id="item" data-toggle="dropdown">{{ __('Empleados') }}
                  </a>
                  <div class="dropdown-menu" id="submenu">
                    <a class="dropdown-item" href="{{ route('Employee.index') }}">{{ __('Empleados') }}</a>
                    <a class="dropdown-item" href="{{ route('Family.index') }}">{{ __('Carga Familiar') }}</a>
                    {{-- <a class="dropdown-item" href="#">Link 3</a> --}}
                  </div>
                </li>

                    {{-- Dropdown 2 --}}

                <li class="nav-item dropdown" >
                  <a class="nav-link dropdown-toggle" href="#" id="item2" data-toggle="dropdown">{{ __('Mantenimiento') }}
                  </a>
                  <div class="dropdown-menu" id="submenu2">
                    <a class="dropdown-item" href="{{ route('Document.index') }}">{{ __('Tipo de Documento') }}</a>
                    {{-- <a class="dropdown-item" href="{{ route('Family.index') }}">{{ __('Carga Familiar') }}</a>
                    <a class="dropdown-item" href="#">Link 3</a> --}}
                  </div>
                </li>    
              </ul>
          </nav>
 
          {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
            {{ Html::script('js/jquery-3.1.1.js') }}
            {{ Html::script('js/tabla_paginacion.js') }}
            {{-- {{ Html::script('js/app.js') }} --}}
            {{-- {{ Html::script('js/bootstrap/bootstrap.js') }} --}}
  
</body>
</html>