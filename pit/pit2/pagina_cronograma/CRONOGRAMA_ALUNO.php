<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cronograma semanal | Sem Desculpas </title>
    <link rel="icon" type="image/svg+xml" href="/pit/assets/favicon.png" />
    <link rel="stylesheet" href="CRONOGRAMA.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>

    <?php
  function getConteudo($dia) {
    require("config.php");

    $sql = "SELECT conteudo FROM cronograma_estudos WHERE dia_semana = '$dia' ORDER BY id DESC LIMIT 5";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
        return $row['conteudo'];
    } else {
        return '';
    }
}

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
              <i class="bi bi-person-circle"></i>    
            
        </div>
         
            
      <h4>  perfil </h4></a>
        </div>

        <div class="config">
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="92" viewBox="0 0 80 92" fill="none">
                <path d="M26.4286 51.4286H19.2857C18.1071 51.4286 17.1429 50.4643 17.1429 49.2857V42.1429C17.1429 40.9643 18.1071 40 19.2857 40H26.4286C27.6071 40 28.5714 40.9643 28.5714 42.1429V49.2857C28.5714 50.4643 27.6071 51.4286 26.4286 51.4286ZM45.7143 49.2857V42.1429C45.7143 40.9643 44.75 40 43.5714 40H36.4286C35.25 40 34.2857 40.9643 34.2857 42.1429V49.2857C34.2857 50.4643 35.25 51.4286 36.4286 51.4286H43.5714C44.75 51.4286 45.7143 50.4643 45.7143 49.2857ZM62.8571 49.2857V42.1429C62.8571 40.9643 61.8929 40 60.7143 40H53.5714C52.3929 40 51.4286 40.9643 51.4286 42.1429V49.2857C51.4286 50.4643 52.3929 51.4286 53.5714 51.4286H60.7143C61.8929 51.4286 62.8571 50.4643 62.8571 49.2857ZM45.7143 66.4286V59.2857C45.7143 58.1071 44.75 57.1429 43.5714 57.1429H36.4286C35.25 57.1429 34.2857 58.1071 34.2857 59.2857V66.4286C34.2857 67.6071 35.25 68.5714 36.4286 68.5714H43.5714C44.75 68.5714 45.7143 67.6071 45.7143 66.4286ZM28.5714 66.4286V59.2857C28.5714 58.1071 27.6071 57.1429 26.4286 57.1429H19.2857C18.1071 57.1429 17.1429 58.1071 17.1429 59.2857V66.4286C17.1429 67.6071 18.1071 68.5714 19.2857 68.5714H26.4286C27.6071 68.5714 28.5714 67.6071 28.5714 66.4286ZM62.8571 66.4286V59.2857C62.8571 58.1071 61.8929 57.1429 60.7143 57.1429H53.5714C52.3929 57.1429 51.4286 58.1071 51.4286 59.2857V66.4286C51.4286 67.6071 52.3929 68.5714 53.5714 68.5714H60.7143C61.8929 68.5714 62.8571 67.6071 62.8571 66.4286ZM80 20V82.8571C80 87.5893 76.1607 91.4286 71.4286 91.4286H8.57143C3.83929 91.4286 0 87.5893 0 82.8571V20C0 15.2679 3.83929 11.4286 8.57143 11.4286H17.1429V2.14286C17.1429 0.964286 18.1071 0 19.2857 0H26.4286C27.6071 0 28.5714 0.964286 28.5714 2.14286V11.4286H51.4286V2.14286C51.4286 0.964286 52.3929 0 53.5714 0H60.7143C61.8929 0 62.8571 0.964286 62.8571 2.14286V11.4286H71.4286C76.1607 11.4286 80 15.2679 80 20ZM71.4286 81.7857V28.5714H8.57143V81.7857C8.57143 82.375 9.05357 82.8571 9.64286 82.8571H70.3571C70.9464 82.8571 71.4286 82.375 71.4286 81.7857Z" fill="black"/>
              </svg>            
          <h1> Cronograma semanal </h1>
        </div>

        <div class="container">

        <form>

            <div class="calendario">

                <div class="segunda">
                    <p> Segunda: </p>
                    <input name="conteudoSegunda" id="" cols="30" rows="10" disabled value="<?php echo getConteudo('Segunda'); ?>">  </input>
                </div>

                <div class="terca">
                    <p> Terça: </p>
                    <input name="conteudoTerca" id="" cols="30" rows="10"disabled value="<?php echo getConteudo('Terca'); ?>"> </input>
                </div>

                 <div class="quarta">
                    <p> Quarta: </p>
                    <input name="conteudoQuarta" id="" cols="30" rows="10" disabled value="<?php echo getConteudo('Quarta'); ?>"> </input>
                </div>

                <div class="quinta">
                    <p> Quinta: </p>
                    <input name="conteudoQuinta" id="" cols="30" rows="10" disabled value="<?php echo getConteudo('Quinta'); ?>"> </input>
                </div>

                <div class="sexta">
                    <p> Sexta: </p>
                    <input name="conteudoSexta" id="" cols="30" rows="10" disabled value="<?php echo getConteudo('Sexta'); ?>"> </input>
                </div>

            </div>
            

            
       
        </form> 
        </div>
    </div>
</body>
</html>