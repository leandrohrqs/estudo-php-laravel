<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

    <ul id='dropdown1' class='dropdown-content'>
        @foreach ($categoriesMenu as $category)

        <li><a href="{{ route('site.category', $category->id) }}">{{ $category->name }}</a></li>
        @endforeach


      </ul>

    <nav class="red">
        <div class="nav-wrapper container">
          <a href="#" class="brand-logo center">Curso Laravel</a>
          <ul id="nav-mobile" class="right">
            <li><a href="{{ route('site.index')}}">Home</a></li>
            <li><a href="" class="dropdown-trigger" data-target='dropdown1'>Categories <i class="material-icons right">expand_more</i></a></li>
            <li><a href="">Cart</a></li>

          </ul>
        </div>
      </nav>

@yield('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
    /* Dropdown */
    var elemDrop = document.querySelectorAll('.dropdown-trigger');
    var instance = M.Dropdown.init(elemDrop, {
        constrainWidth: false,
        coverTrigger: false
    });

</script>
</body>
</html>
