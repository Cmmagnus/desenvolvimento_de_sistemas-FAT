# 🎬 MovieStar – Plataforma de Avaliação e Descoberta de Filmes

O **MovieStar** é um projeto web desenvolvido em PHP que simula uma plataforma de avaliações e descobertas de filmes. O objetivo é permitir que usuários explorem, pesquisem, avaliem e adicionem filmes, em um ambiente moderno e responsivo.

## 🚀 Funcionalidades

- 🔍 Busca de filmes por palavra-chave
- 🖼️ Banner principal com CTA (“Explorar Agora”)
- 📌 Seção de Filmes Populares com cards animados
- 👤 Tela de autenticação (Login/Cadastro)
- 🧱 Estrutura com `config.php`, `db.php`, `functions.php` e templates
- 🎨 Interface responsiva com Bootstrap 5 e CSS customizado

## 🛠️ Tecnologias Utilizadas

- **Linguagem:** PHP 7.4+
- **Banco de Dados:** MySQL (XAMPP Localhost)
- **Front-end:** HTML5, CSS3, Bootstrap 5, Font Awesome
- **IDE:** Visual Studio Code
- **Gerenciamento:** Git + GitHub

## 📁 Estrutura do Projeto

```bash
moviestar/
├── css/
│   └── styles.css             # Estilos personalizados
├── img/
│   ├── logo.svg
│   └── banner/                # Imagens do banner
│       └── banner-home.png
│   └── movie/                 # Capas dos filmes
├── templates/
│   ├── header.php
│   └── footer.php
├── db.php                     # Conexão com o banco
├── config.php                 # Configurações globais
├── functions.php              # Funções auxiliares
├── index.php                  # Página inicial
└── search.php                 # Página de busca
```

## 🖼️ Layout de Destaque

- Banner escuro com sobreposição de texto e botão de ação
- Cards de filmes com imagem e efeito `hover` e `fade-in`
- Rodapé com redes sociais e links úteis

## 📌 Como Rodar Localmente

1. Clone o repositório:
   ```bash
   git clone https://github.com/Cmmagnus/desenvolvimento_de_sistemas-FAT.git
   ```
2. Acesse a pasta do projeto:
   ```bash
   cd programacao_avancada/moviestar
   ```
3. Abra com o XAMPP ou seu servidor local preferido:
   - Coloque a pasta `moviestar` dentro de `htdocs/`
   - Inicie o Apache e MySQL pelo XAMPP
   - Importe o banco no phpMyAdmin (nome: `moviestar`)
4. Acesse via navegador:
   ```bash
   http://localhost/moviestar/
   ```

## 📚 Créditos

Desenvolvido por **Carlos Magno Marcelino**  
Projeto para o curso Técnico em Desenvolvimento de Sistemas – FAT  
Ano: 2025
