// 🌟 Mensagem de boas-vindas
window.addEventListener('load', () => {
  alert("🐾 Bem-vindo ao Cuidados Pets! Seu cão agradece pelo carinho! 💖");
});

// 📜 Scroll suave para âncoras do menu
document.querySelectorAll('a[href^="#"]').forEach(link => {
  link.addEventListener('click', (e) => {
    e.preventDefault();
    const target = document.querySelector(link.getAttribute('href'));
    if (target) {
      target.scrollIntoView({ behavior: 'smooth' });
    }
  });
});

// 🐶 Dicas aleatórias
const dicas = [
  "💧 Mantenha sempre água fresca à disposição.",
  "🐕 Escove os pelos do seu cão ao menos 2x por semana.",
  "🥎 Brincadeiras ajudam a combater a ansiedade canina.",
  "🐾 Evite passeios em horários de muito sol – o chão pode queimar as patinhas!",
  "🦷 Higienize os dentes do seu cão com produtos específicos.",
  "📅 Visitas regulares ao veterinário garantem uma vida longa e saudável!"
];

// Criação do card de dica
const dicaContainer = document.createElement('div');
dicaContainer.id = 'dica-do-dia';
document.body.appendChild(dicaContainer);

// 🔘 Botão: Dica do Dia
const btnDica = document.createElement('button');
btnDica.id = 'btn-dica';
btnDica.innerHTML = '<i class="fas fa-paw"></i> Dica do Dia';
btnDica.title = 'Clique para uma dica aleatória!';
btnDica.setAttribute('aria-label', 'Mostrar dica do dia');

btnDica.addEventListener('click', () => {
  const isVisible = dicaContainer.style.display === 'block';
  dicaContainer.style.display = isVisible ? 'none' : 'block';

  if (!isVisible) {
    const dica = dicas[Math.floor(Math.random() * dicas.length)];
    dicaContainer.innerHTML = `<strong><i class="fas fa-lightbulb"></i> Dica do Dia:</strong><br>${dica}`;
  }
});

document.body.appendChild(btnDica);

// 🌗 Botão: Modo Claro/Escuro
const btnDarkMode = document.createElement('button');
btnDarkMode.id = 'theme-toggle';
btnDarkMode.innerHTML = '<i class="fas fa-moon"></i> Modo Escuro';
btnDarkMode.title = 'Alternar entre modo claro e escuro';
btnDarkMode.setAttribute('aria-label', 'Alternar modo claro/escuro');

btnDarkMode.addEventListener('click', () => {
  document.body.classList.toggle('dark-mode');
  const isDark = document.body.classList.contains('dark-mode');
  btnDarkMode.innerHTML = isDark
    ? '<i class="fas fa-sun"></i> Modo Claro'
    : '<i class="fas fa-moon"></i> Modo Escuro';
});

document.body.appendChild(btnDarkMode);

const form = document.querySelector("form");
form.addEventListener("submit", (e) => {
  e.preventDefault();
  alert("🐶 Obrigado pela mensagem! Responderemos em breve.");
  form.reset();
});
