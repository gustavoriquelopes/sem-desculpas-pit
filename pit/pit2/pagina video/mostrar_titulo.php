<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Painel video-aulas | Sem Desculpas </title>
    <link rel="icon" type="image/svg+xml" href="/pit/assets/favicon.png" />
    <link rel="stylesheet" href="../pagina_conteudo/CONTEUDO_P.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>

    <nav class="menu-lateral">

        <div class="btn-expandir">
            <i class="bi bi-list"></i>
        </div>

        <ul>
            <li class="item-menu">
            <a href="../pagina_usuario/INICIAL.php">
                    <span class="icon"><i class="bi bi-columns-gap"></i></i></span>
                    <span class="txt-link">Dashboard</span>
                </a>
            </li>
            <li class="item-menu">
            <a href="../pagina_conteudo/CONTEUDO_PRINCIPAL.html">
                    <span class="icon"><i class="bi bi-card-text"></i></span>
                    <span class="txt-link">Conteúdos</span>
                </a>
            </li>
            <li class="item-menu">
            <a href="../pagina_provas/PROVA_P.html">
                    <span class="icon"><i class="bi bi-file-earmark-text"></i></span>
                    <span class="txt-link">Provas</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="#">
                    <span class="icon"><i class="bi bi-chat-dots"></i></span>
                    <span class="txt-link">Chat</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="#">
                    <span class="icon"><i class="bi bi-graph-up"></i></span>
                    <span class="txt-link">Desempenho</span>
                </a>
            </li>
            <li class="item-menu">
            <a href="../pagina_usuario/CONFIGURACOES.html">
                    <span class="icon"><i class="bi bi-gear"></i></span>
                    <span class="txt-link">Configurações</span>
                </a>
            </li>
        </ul>
        
    </nav>
    
    <div class="menu-principal">
        <div class="header">
            <div class="lupa-buscar">
                <i class="bi bi-search"></i>
            </div>
            <div class="input-buscar">
                <input type="text" name="" id="" placeholder="Faça uma busca">
            </div>
            <div class="btn-fechar">
                <i class="bi bi-x-circle"></i>
            </div>
        </div>

        <div class="perfil">
        <a href="../pagina_usuario/USUARIO_ALUNO.php"> <div class="circlewhite">
              <i class="bi bi-person-circle"></i>            </div>
      <div>
      <h4>  perfil </h4></a>

    </div>

    <div class="btn-add">
        <button> <a href="VIDEO_PRINCIPAL.html"> voltar painel </a> </button>
    </div>

        <div class="config">
        <svg xmlns="http://www.w3.org/2000/svg" width="112" height="79" viewBox="0 0 112 79" fill="none">
                <path d="M89.6 11.2C89.6 5.0232 84.5768 0 78.4 0H11.2C5.0232 0 0 5.0232 0 11.2V67.2C0 73.3768 5.0232 78.4 11.2 78.4H78.4C84.5768 78.4 89.6 73.3768 89.6 67.2V48.5352L112 67.2V11.2L89.6 29.8648V11.2ZM78.4112 67.2H11.2V11.2H78.4L78.4056 39.1944L78.4 39.2L78.4056 39.2056L78.4112 67.2Z" fill="black"/>
              </svg>          
          <h1> Video Aulas  </h1>
        </div>
    </div>

    <div class="container">
            
        <form action="BLOCO_VIDEO.php" method="get"> 
            
        
        <?php

require("config.php");

$disciplina = $_POST["disciplina"];

$sql = "SELECT * FROM videos WHERE materia = '$disciplina'";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    echo "<div class=\"conteudos-grid\">";
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $titulo = $linha["nome_video"];
        $id = $linha["id"];

        echo "<div >";
        echo "<h5>" . $titulo . "</h5>";
        echo "<a href=\"BLOCO_VIDEO.php?id=" . $id . "\" target=\"_blank\">Ver detalhes</a>";
        
        
        echo "</div>";
    }
    echo "</div>";
} else {
    echo "Nenhum conteúdo encontrado para a disciplina " . $disciplina;
}

mysqli_close($conexao);
?>






        
    
    </form>
</div>


</body>
</html>
