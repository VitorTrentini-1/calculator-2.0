<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <style>
        
        body, h2, p, label, input, button {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #00bcd4, #b3e5fc); 
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }

        
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        
        h2 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        
        .alert {
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            background-color: #B78EF7;
            border-left: 5px solid black;
            color: #333;
        }

       
        button, a.btn {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background-color: black;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 550px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Resultado</h2>

        <?php
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $nota4 = $_POST['nota4'];

        $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

        if ($media >= 9) {
            $conceito = 'A';
            $mensagem = 'Aprovado, fez nada mais que sua obrigação.';
        } elseif ($media >= 7) {
            $conceito = 'B';
            $mensagem = 'Aprovado :)';
        } elseif ($media >= 4) {
            $conceito = 'C';
            $mensagem = 'Recuperação faz ai pangua';
        } else {
            $conceito = 'D';
            $mensagem = 'Se ferrou, melhore';
        }
        ?>

        <div class="alert">
            <p><strong>Média:</strong> <?php echo number_format($media, 1); ?></p>
            <p><strong>Nota igual a:</strong> <?php echo $conceito; ?></p>
            <p><strong>Mensagem:</strong> <?php echo $mensagem; ?></p>
        </div>

        <?php if ($conceito == 'C'): ?>
            <div class="alert">
                <h4>Recuperação</h4>
                <form action="recuperacao.php" method="post">
                    <input type="hidden" name="media" value="<?php echo $media; ?>">
                    <div class="form-group">
                        <label for="nota_recuperacao">Nota da Recuperação:</label>
                        <input type="number" step="0.1" id="nota_recuperacao" name="nota_recuperacao" required>
                    </div>
                    <button type="submit">Calcular Recuperação</button>
                </form>
            </div>
        <?php endif; ?>

        <a href="index.php" class="btn btn-outline-dark mt-3">Voltar</a>
    </div>
</body>
</html>
