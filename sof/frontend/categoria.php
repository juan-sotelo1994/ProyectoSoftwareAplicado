<?php
    include 'encabezado.php';
?>
<body>
  <div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="#">CodingNepal</a></div>
        <ul class="links">
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Nosotros</a></li>
          <li>
            <a href="categoria.php" class="desktop-link">Categorias</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">Categoria</label>
            <ul>
              <li><a href="#">Drop Menu 1</a></li>
              <li><a href="#">Drop Menu 2</a></li>
              <li><a href="#">Drop Menu 3</a></li>
              <li><a href="#">Drop Menu 4</a></li>
            </ul>
          </li>
          <li><a href="#">Ofertas</a></li>
          <li>
            <a href="#" class="desktop-link">Servicios</a>
            <input type="checkbox" id="show-services">
            <label for="show-services">Services</label>
            <ul>
              <li><a href="#">Que ofrecemos</a></li>
              <li><a href="#">marica</a></li>
              <li><a href="#">cretino</a></li>
              <li>
                <a href="#" class="desktop-link">More Item</a>
                <input type="checkbox" id="show-items">
                <label for="show-items">More Items</label>
                <ul>
                  <li><a href="#">Sub Menu 1</a></li>
                  <li><a href="#">Sub Menu 2</a></li>
                  <li><a href="#">Sub Menu 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">Crear tu Cuenta</a></li>
          <li><a href="#">Ingresa</a></li>
        </ul>
      </div>
      <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
      <form action="#" class="search-box">
        <input type="text" placeholder="Escribe el articulo que buscas" required>
        <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
      </form>
    </nav>
  </div>
  <div class="dummy-text">
    <h2>Aca va un progras bar de los articulos        ponsive Dropdown Menu Bar with Searchbox</h2>
    <h2>using only HTML & CSS - Flexbox</h2>
  </div>
</body>