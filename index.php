<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Notas</title>
    <style>
        
        body, h2, label, input, button {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(to right, #00ff7a, #00fbb1, #00f4db, #00ebf6, #00dfff);            color: #333;
            line-height: 1.6;
            padding: 20px;
        }
        
        .container {
            max-width: 300px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-image: linear-gradient(to right top, #1af080, #00eaab, #00e2cb, #00d8df, #20cce5);
        }

       
        h2 {
            color: black;
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }

        
        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus {
            border-color: #4CAF50;
        }

       
        button {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background-color: #00FFE8;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #3F8E87;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Calculadora</h2>
        <form action="resultado.php" method="post">
            <div class="form-group">
                <label for="nota1">Nota 1:</label>
                <input type="number" step="0.1" id="nota1" name="nota1" required>
            </div>
            <div class="form-group">
                <label for="nota2">Nota 2:</label>
                <input type="number" step="0.1" id="nota2" name="nota2" required>
            </div>
            <div class="form-group">
                <label for="nota3">Nota 3:</label>
                <input type="number" step="0.1" id="nota3" name="nota3" required>
            </div>
            <div class="form-group">
                <label for="nota4">Nota 4:</label>
                <input type="number" step="0.1" id="nota4" name="nota4" required>
            </div>
            <button type="submit">Calcular</button>
        </form>
    </div>
</body>
</html>
