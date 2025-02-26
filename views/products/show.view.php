


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/boosted@5.3.3/dist/css/boosted.min.css" rel="stylesheet" integrity="sha384-laZ3JUZ5Ln2YqhfBvadDpNyBo7w5qmWaRnnXuRwNhJeTEFuSdGbzl4ZGHAEnTozR" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <div class="navbar-brand">
      <a class="stretched-link" href="#">
        <img src="/docs/5.3/assets/brand/orange-logo.svg" width="50" height="50" alt="Boosted - Back to Home" loading="lazy">
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse align-items-end" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex navbar-item ms-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



<div class='container text-center '>
  <div class='row'>
    <?php
    foreach ($products as $key => $value) {
        echo "
        <div class='col g-5'>
          <div class='card' style='width: 18rem;'>
          
            
              <title>Placeholder</title>
              <rect width='100%' height='100%' fill='var(--bs-secondary-bg)'/>
              <img src='{$value['img_url']}' class='card-img-top img-fluid' alt='Product Image' >
                <path d='M20.4 5.4a1.8 1.8 0 0 0-1.8-1.8h-15v15a1.8 1.8 0 0 0 1.8 1.8h15v-15ZM4.8 4.8h13.5a.9.9 0 0 1 .9.9V15l-4.61-5.237c-.167-.217-.436-.217-.602 0l-3.428 3.983-1.894-2.657c-.166-.217-.435-.217-.6 0L5.28 14.21c-.281-.211-.47-.444-.48-.926V4.8Zm4.8 3.25a1.5 1.5 0 1 1-3 .1 1.5 1.5 0 0 1 3-.1Z'></path>
              </svg>
            </svg>
            <div class='card-body'>
              <h5 class='card-title'>{$value['name']}</h5>
              <h5 class='card-title'>{$value['price']}</h5>
              <p class='card-text fw-bold mb-4'>{$value['description']}</p>
              <a href='#' class='btn btn-primary'>Go somewhere</a>
            </div>
          </div>
        </div>";
    }
    ?>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/boosted@5.3.3/dist/js/boosted.bundle.min.js" integrity="sha384-3RoJImQ+Yz4jAyP6xW29kJhqJOE3rdjuu9wkNycjCuDnGAtC/crm79mLcwj1w2o/" crossorigin="anonymous"></script>
</body>
</html>