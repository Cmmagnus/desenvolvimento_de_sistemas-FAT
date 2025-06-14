<footer id="footer">
  <div id="social-container">
    <ul>
      <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
      <li><a href="#"><i class="fab fa-youtube"></i></a></li>
    </ul>
  </div>
  <div id="footer-links-container">
    <ul>
      <li><a href="#">Adicionar filme</a></li>
      <li><a href="#">Adicionar crítica</a></li>
      <li><a href="#">Entrar / Registrar</a></li>
    </ul>
  </div>
<p>&copy; 2025 Carlos Magno Marcelino</p>
</footer>

<script>
    document.querySelectorAll('.movie-card').forEach(card => {
        card.style.animation = 'none';
        setTimeout(() => {
            card.style.animation = 'fadeInUp 0.7s ease forwards';
        }, 10);
    });
</script>

</body>

<!-- Bootstrap JS (necessário para funcionalidades como menu collapsible/mobile) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>

</html>
  