<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDU Info Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>
<nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #FF0000;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
   aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="/news"><img src="<?php echo e(URL('../images/logo.png')); ?>" 
  width="70" height="70"></a>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item active">
        <a class="nav-link" href="/news">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/tabloid">Tabloid</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/government">Government</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/sports">Sports</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/entertainment">Entertainment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/recommended">Recommended</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/lotto">Lotto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ads">Ads</a>
      </li>
    </ul>
  </div>
</nav>
<div>
  <ul>
<?php echo e(print_r($data)); ?>

</ul>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\Users\RYZEN\laravel-web\resources\views/lotto.blade.php ENDPATH**/ ?>