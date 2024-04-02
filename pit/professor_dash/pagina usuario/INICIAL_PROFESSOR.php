<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard </title>
    <link rel="stylesheet" href="INICIAL.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <?php
    require("config.php");
    
    session_start();
    if (isset($_SESSION['usuario'])) {
        $id_professor = $_SESSION['usuario'];
        if ($conexao->connect_error) {
            die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
   }
    } else {
        echo "Você não está logado.";
    }
    ?>
    <nav class="menu-lateral">

        <div class="btn-expandir">
            <i class="bi bi-list"></i>
        </div>

        <ul>
            <li class="item-menu">
                <a href="../pagina usuario/INICIAL_PROFESSOR.html">
                    <span class="icon"><i class="bi bi-columns-gap"></i></i></span>
                    <span class="txt-link">Dashboard</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="../pagina conteudo/CONTEUDO_PRINCIPAL.html">
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
                <a href="../pagina configuracao/CONFIGURACOES.html">
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
            <a href="USUARIO_PROFESSOR.php"> <div class="circlewhite">
                <i class="bi bi-person-circle"></i>            </div>
        <div>
        <h4>  perfil </h4></a>
            
        </div>

         <div class="banner">
            <h1>POSTE O CONTEÚDOS E ATIVIDADES DÍARIAS PARA OS ALUNOS</h1>
            <button> <a href="../pagina conteudo/CONTEUDO_PRINCIPAL.html"> postar </a> </button>
        </div>

        <div class="espacos1">
            <i class="bi bi-box"></i>
            <h5>desempenho dos alunos </h5>
            <button> ver </button>
        </div>
        <div class="espacos2">
            <i class="bi bi-heart"></i>
            <h5>poste o simulado semanal</h5>
            <button> <a href="../pagina_provas/PROVAS.HTML"> postar </a></button>
        </div>
        <div class="espacos3">
            <i class="bi bi-folder2"></i>
            <h5>postar vídeos aulas complementares</h5>
            <button> <a href="../pagina video/VIDEO_PRINCIPAL.html"> upload</a>  </button>
        </div>
        <div class="tema">
            <i class="bi bi-pencil-square"></i>
            <h3> corrija a <br> redação da semana!</h3>
            <button> <a href="../pagina_redacao/redacao-prof.php"> começar! </a></button>
        </div>
        <div class="cronograma">
            <i class="bi bi-lightning-charge"></i>
            <h3> <a href="../pagina_cronograma/CRONOGRAMA.html"> poste o cronograma <br> de estudos da semana!  </a> </h3>
        </div>

    </div>
</body>
</html>