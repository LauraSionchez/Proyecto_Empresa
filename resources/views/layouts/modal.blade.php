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
          
 
          {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
            {{ Html::script('js/jquery-3.1.1.js') }}
            {{ Html::script('js/tabla_paginacion.js') }}
            {{-- {{ Html::script('js/app.js') }} --}}
            {{-- {{ Html::script('js/bootstrap/bootstrap.js') }} --}}
  
</body>
</html>

 
    