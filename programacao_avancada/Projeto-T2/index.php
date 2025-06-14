<?php
require_once("templates/header.php");
?>

<!-- Banner com sobreposição -->
<div class="banner-container">
  <img src="<?= $BASE_URL ?>img/banner/banner-home.png" alt="Capa MovieStar" class="banner-img">
  <div class="banner-text custom-fade-in">
    <h1>MovieStar</h1>
    <p>Descubra, critique e compartilhe seus filmes favoritos!</p>
    <a href="#filmes-populares" class="btn-banner">Explorar Agora</a>
  </div>
</div>

<div class="main-container custom-fade-in" id="filmes-populares">
  <h2>🎬 Filmes Populares</h2>
  <div class="card-container">
    <div class="movie-card">
      <img src="<?= $BASE_URL ?>img/movie/a-espera-de-um-milagre.png" alt="Filme 1">
      <h3>A Espera de um Milagre</h3>
    </div>
    <div class="movie-card">
      <img src="<?= $BASE_URL ?>img/movie/deadpool.png" alt="Filme 2">
      <h3>Deadpool & Wolverine</h3>
    </div>
    <div class="movie-card">
      <img src="<?= $BASE_URL ?>img/movie/O-Poderoso-Chefao.png" alt="Filme 3">
      <h3>O Poderoso Chefão</h3>
    </div>
  </div>
</div>

<!-- Conteúdo principal -->
<div class="main-container">
  <h1>Bem-vindo ao sistema de filmes!</h1>
</div>

<?php
require_once("templates/footer.php");
?>