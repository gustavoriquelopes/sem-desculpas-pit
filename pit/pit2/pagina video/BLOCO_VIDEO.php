<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Video aula </title>
    <link rel="stylesheet" href="BLOCO_VIDEO.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>

<?php

require("config.php");

$idVideo = $_GET["id"];

$sql = "SELECT * FROM videos WHERE id = $idVideo";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    $video = mysqli_fetch_assoc($resultado);

    $nomeVideo = $video["nome_video"];
    $descricao = $video["descricao"];
    $nomeArquivo = $video["nome_arquivo"];

    $targetDir = 'http://localhost\\PIT\\pit\\uploadsVideo';

    $targetFileVideo = $targetDir . "\\"  . $nomeArquivo;

    if (file_exists($targetFileVideo)) {
        // Read the file contents
        $file = file_get_contents($targetFileVideo);

        // Define the path of the video file
        $videoPath = "$nomeArquivo";

        // Display the video
    } else {
        echo "";
    }


} else {
    echo "Video não encontrado.";
}

mysqli_close($conexao);

?>
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

        <div class="config">
            <svg xmlns="http://www.w3.org/2000/svg" width="112" height="79" viewBox="0 0 112 79" fill="none">
                <path d="M89.6 11.2C89.6 5.0232 84.5768 0 78.4 0H11.2C5.0232 0 0 5.0232 0 11.2V67.2C0 73.3768 5.0232 78.4 11.2 78.4H78.4C84.5768 78.4 89.6 73.3768 89.6 67.2V48.5352L112 67.2V11.2L89.6 29.8648V11.2ZM78.4112 67.2H11.2V11.2H78.4L78.4056 39.1944L78.4 39.2L78.4056 39.2056L78.4112 67.2Z" fill="black"/>
              </svg>        
          <h1> <?php echo $nomeVideo; ?> </h1>
        </div>

        <div class="concluido1"> 
            <button type="submit"> <a href="VIDEO_PRINCIPAL.html"> voltar </a> </button>
        </div>
        

        <div class="container">
          

        <form action="" method="post">

        <div class="cont1">
            
            <div class="video-view">
                <div class="video">
                <video src="<?php echo $targetFileVideo; ?>" controls>
            </video>
                </div>
            </div>

            <div class="descricao-video">
                <p> descrição: </p>
                <input type="text" name="descricao" disabled value="<?php echo $descricao; ?>">
              </div>
        </div>
       
        </form>

        </div>
           
    </div>
</body>
</html>