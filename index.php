<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Meu Blog Incrível</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container mt-3">
  <div class="alert alert-info text-center">Bem-vindo ao meu blog!</div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand" href="#">Meu Blog</a>
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="#">Início</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Sobre</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="row">

    <!-- Conteúdo Principal -->
    <div class="col-md-8">
      <?php
        $posts = [
          [
            "titulo" => "Primeiro Post",
            "data" => "18 de Junho de 2025",
            "imagem" => "img/exemplo1.jpg",
            "conteudo" => "Este é o primeiro parágrafo do meu post maravilhoso.",
          ],
          [
            "titulo" => "Segundo Post",
            "data" => "17 de Junho de 2025",
            "imagem" => "https://placekitten.com/600/300",
            "conteudo" => "Outro post interessante. Estou adorando escrever esse blog!",
          ],
          [
            "titulo" => "Terceiro Post",
            "data" => "16 de Junho de 2025",
            "imagem" => "https://placebear.com/600/300",
            "conteudo" => "Um post final para deixar seu dia mais leve e feliz.",
          ],
        ];

        foreach ($posts as $post) {
          echo "
          <div class='card mb-3'>
            <img src='{$post['imagem']}' class='card-img-top' alt='Imagem do post'>
            <div class='card-body'>
              <h5 class='card-title'>{$post['titulo']}</h5>
              <p class='card-text'><small class='text-muted'>{$post['data']}</small></p>
              <p class='card-text'>{$post['conteudo']}</p>
              <a href='#' class='btn btn-primary'>Leia mais...</a>
            </div>
          </div>";
        }
      ?>
    </div>

    <!-- Sidebar -->
    <div class="col-md-4">
      <h4>Sobre o Autor</h4>
      <p>Olá! Meu nome é João e eu sou um entusiasta da web. Curioso, autodidata e apaixonado por compartilhar conhecimento!</p>
    </div>
  </div>

  <!-- Rodapé com Formulário -->
  <footer class="mt-4 p-4 bg-light">
    <h5>Contato</h5>
    <form>
      <div class="mb-2"><input type="text" class="form-control" placeholder="Nome"></div>
      <div class="mb-2"><input type="email" class="form-control" placeholder="Email"></div>
      <div class="mb-2"><textarea class="form-control" rows="3" placeholder="Mensagem"></textarea></div>
      <button type="submit" class="btn btn-secondary">Enviar</button>
    </form>
    <p class="mt-3 text-muted">Email: contato@meublogficticio.com | Telefone: (62) 1234-5678</p>
  </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>