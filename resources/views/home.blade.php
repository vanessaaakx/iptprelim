<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prelim Project</title>
    <script src="{{asset('js/bootsrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

</head>
<body>
    <div class="text-center">
        <nav class="nav justify-content-center">
            <a href="{{url('/')}}" class="nav-link">Home</a>
            <a href="{{url('/favorite')}}" class="nav-link">Favorite Song</a>
            <a href="{{url('/story')}}" class="nav-link">Short Story</a>
</nav>
        <h1>Welcome</h1>
        <div class="card text-bg-dark">
  <img src="image.jpg" class="card-img" alt="image">
  <div class="card-img-overlay">
    <h2 class="card-text">I'm Vanessa Calipayan, <br>a Mater Dei College student  taking up Bachelor's degree in information technology. <br>This is my preliminary project for Integrative Programming Technologies 1 course. </h2>
    <p class="card-text"><small>Thank you ♥ </small></p>
  </div>
</div>
</body>
</html>