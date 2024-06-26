<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Redações | Sem Desculpas</title>
    <link rel="icon" type="image/svg+xml" href="../assets/favicon.png" />
    <link rel="stylesheet" href="redacao.css">
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

        <div class="btn_expandir">
            <i class="bi bi-list"></i>
        </div>

        <ul>
            <li class="item_menu">
                <a href="#">
                    <span class="icon"><i class="bi bi-columns-gap"></i></i></span>
                    <span class="txt-link">Dashboard</span>
                </a>
            </li>
            <li class="item_menu">
                <a href="#">
                    <span class="icon"><i class="bi bi-card-text"></i></span>
                    <span class="txt-link">Conteúdos</span>
                </a>
            </li>
            <li class="item_menu">
                <a href="#">
                    <span class="icon"><i class="bi bi-file-earmark-text"></i></span>
                    <span class="txt-link">Provas</span>
                </a>
            </li>
            <li class="item_menu">
                <a href="#">
                    <span class="icon"><i class="bi bi-chat-dots"></i></span>
                    <span class="txt-link">Chat</span>
                </a>
            </li>
            <li class="item_menu">
                <a href="#">
                    <span class="icon"><i class="bi bi-graph-up"></i></span>
                    <span class="txt-link">Desempenho</span>
                </a>
            </li>
            <li class="item_menu">
                <a href="#">
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

        <a class="volta" href="redacao-prof.php"> ← voltar </a> 


        <div class="home">

            <div class="usuario">
                <i class="bi bi-pencil-square"></i>
                <h1>redações</h1>
                <button class="postar-tema"> <a href="tela-prof.php"> postar tema </a> </button>
            </div>
        </div>
        
        <div class="dados">

        <?php
        
        require("config.php");

        $id_tema = $_GET["id"];
        
        $sql = "SELECT * FROM view_redacao_aluno WHERE id_red_textos = $id_tema";
        
        $resultado = mysqli_query($conexao, $sql);
        
        if (mysqli_num_rows($resultado) > 0) {
            echo "<div class=\"conteudos-grid\">";
            while ($linha = mysqli_fetch_assoc($resultado)) {
                $nome = $linha["nome"];
                $id = $linha["id"];
        
                echo "<div class=\"card\">";
                echo "<h3>" . $nome . "</h3>";
                echo "<a href=\"correcao_prof.php?id=" . $id . "\">Ver redação completa</a>";
                echo "</div>";
            }
            echo "</div>";
        } else {
            echo "Nenhuma redação dos alunos encontrada para o tema proposto.";
        }
        
        mysqli_close($conexao);
        ?>
        
            
            
    </div>
</body>
</html>

