<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Productos</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Menu</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">Dropdown</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link disabled" aria-disabled="true">Disabled</a></li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">Añadir</button>
  </nav>

  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Active</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" aria-disabled="true">Disabled</a>
    </li>
  </ul>

  <div class="container mt-4">
    <h2>Lista Productos</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4"  action="Productos.php">
      <?php require "Productos.php"; 

       ?>
      <?php foreach ($response as $product): ?>
        <div class="col">
          <div class="card h-100">
          <img class="card-img-top" src="<?= $product['cover'] ?>" alt="Product Image"> 
            <div class="card-body">
              <h5 class="card-title"><?= ($product['name']) ?></h5>
              <p class="card-text"><?= ($product['description']) ?></p>
              <a href="descripcion.php?slug=<?= $product['slug'] ?>" class="btn btn-primary">Ver descripción</a> 
            </div>
            <div class="card-text d-flex justify-content-between">
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>


<!--añadir-->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Añadir Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="agregar.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="productName" class="form-label">Nombre del Producto</label>
            <input type="text" class="form-control" id="productName" name="productName" placeholder="Ingresa el nombre del producto" required>
          </div>
          <div class="mb-3">
            <label for="productDescription" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="productDescription" name="productDescription" placeholder="Descripción breve" required>
          </div>
          <div class="mb-3">
            <label for="productSlug" class="form-label">slug</label>
            <input type="text" class="form-control" id="productSlug" name="productSlug" placeholder="Precio del producto" required>
          </div>
          <div class="mb-3">
            <label for="productFeactures" class="form-label">Caracteristicas</label>
            <input type="text" class="form-control" id="productFeactures" name="productFeactures" placeholder="Precio del producto" required>
          </div>
          <div class="mb-3">
            <label for="productImage" class="form-label">Imagen del Producto</label>
            <input type="file" class="form-control" id="productImage" name="productImage" accept="image/*" required>
          </div>
          <button type="submit" class="btn btn-success">Añadir Producto</button>
          <input type="hidden" name="addProduct">
        </form>
      </div>
    </div>
  </div>
</div>


<!--puse esto para que se envie el commit-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
