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
            background: linear-gradient(to right, #8E44AD, #D7BDE2);
            color: #333;
            line-height: 1.6;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .container {
            max-width: 300px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
            background: linear-gradient(to right top, #C39BD3, #E8DAEF);
        }

        h2 {
            color: #4A235A;
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
            color: #4A235A;
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
            border-color: #8E44AD;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background-color: #8E44AD;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #4A235A;
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
