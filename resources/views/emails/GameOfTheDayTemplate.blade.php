<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-family: 'Arial', sans-serif;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        h1 {
            color: #333;
        }

        .game-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .game-title {
            font-size: 18px;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .game-information {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>O jogo do dia está disponível para você!</h1>
        </header>

        <img class="game-image" src="{{$game->cover}}" alt="Imagem do Jogo" width="300px">

        <section class="game-title">
            <p>🌍Explore o Mundo Incrível de {{$game->game}} Hoje!</p>
        </section>

        <section class="game-information">
            <p>Você está pronto para uma aventura épica? Hoje é o dia perfeito para mergulhar no universo emocionante de {{$game->game}}! 🚀</p>
            <p>Para mais informações, acesso o PDF em anexo.</p>
        </section>
    </div>
</body>
</html>
