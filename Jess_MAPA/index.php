<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marmitas Dona Rita</title>
    <link rel="stylesheet" href="css/page.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/contato.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <header>
        <font color="#FFF5F2" size="6">
        <h1>DONA RITA</h1>
        </font>
    
        <a href="index.php">
            <img src="images/logodonarita.png" alt="Logo" class="logo">
        </a>        
    </header>
    <nav>
        <ul>
            <li>
                <a href="index.php"><font color="#222222"><strong>Home</strong></font></a>
            </li>
            <li>
                <a href="index.php?page=quem_somos"><font color="#222222"><strong>Quem somos</strong></font></a>
            </li>
            <li>
                <a href="index.php?page=contato"><font color="#222222"><strong>Contato</strong></font></a>    
            </li>
            
        </ul>
    </nav>
    <div class="content">
        <div class="container">
            <?php
                $page = "home";

                if(isset($_GET['page'])){

                    if(file_exists("pages/".$_GET['page'].".php")){
                        $page = $_GET['page'];
                    }
                }

                include("pages/$page.php");
            ?>
        </div>
    </div>
    <footer>
    <font color="#FFF5F2">
        <p class="footer-details"> Marmitas Dona Rita<br><br>
        Fone: 45 5555-555<br>
        Endereço: Rua bairro:<br>
        Venha nos visitar!</p>
    <div align="center" >
        <p>2022 | Aluno: Jessica Karoline Nascimento Pereira  | RA: 21115521-5 </p>
    </div>
    </font>
    </footer>
</body>
</html>