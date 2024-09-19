<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Recuperação</title>
    <style>
        
        body, h2, p, a {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #8E44AD, #51D1D6); 
            color: #333;
            line-height: 1.6;
            padding: 20px;
            min-height: 100vh; 
            display: flex;
            justify-content: center;
            align-items: center;
        }

        
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            background: linear-gradient(to right, #C39BD3, #E8DAEF); 
        }

        h2 {
            color: #4A235A;
            margin-bottom: 20px;
            text-align: center;
        }

        
        .alert {
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            background-color: #D7BDE2; 
            border-left: 5px solid #2196F3; 
            color: #4A235A; 
        }

       
        a.btn {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background-color: #8E44AD;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        
        a.btn:hover {
            background-color: #732D91; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Resultado da Recuperação</h2>

        <?php
        $media = $_POST['media'];
        $nota_recuperacao = $_POST['nota_recuperacao'];

        $nova_media = ($media + $nota_recuperacao);

        if ($nova_media >= 10) {
            $mensagem = 'Aprovado';
        } else {
            $mensagem = 'Reprovado, tente novamente ano que vem.';
        }
        ?>

        <div class="alert">
            <p><strong>Nova Média:</strong> <?php echo number_format($nova_media, 1); ?></p>
            <p><strong>Mensagem:</strong> <?php echo $mensagem; ?></p>
        </div>

        <a href="index.php" class="btn">Voltar</a>
    </div>
</body>
</html>
