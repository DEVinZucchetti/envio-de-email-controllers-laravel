<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do jogo</title>
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
            font-weight: bold;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .game-information {
            font-size: 16px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="container">
        <img class="game-image" src="{{$game->cover}}" alt="Imagem do Jogo" width="300px">

        <header>
            <h1>O jogo do dia de hoje é: {{$game->game}}</h1>
        </header>

        <section>
            <div class="game-title"><p>Explore o Mundo Incrível de {{$game->game}} Hoje! 🌍</p></div>
            <div class="game-information">
                <p>Você está pronto para uma aventura épica? Hoje é o dia perfeito para mergulhar no universo emocionante de {{$game->game}}! 🚀</p>
            </div>
        </section>

        <section>
            <div class="game-title"><p>🔥 Características Especiais do Jogo do Dia:</p></div>
            <div class="game-information">
                <p>✨<i>Gráficos Incríveis:</i> Experimente a beleza visual de {{$game->game}} com gráficos de última geração que vão te surpreender a cada cena.</p>
                <p>🌟<i>Missões Desafiadoras:</i> Aceite missões épicas e desafios que testarão suas habilidades e estratégias de jogo.</p>
                <p>🎁<i>Recompensas Exclusivas:</i> Jogue hoje e ganhe recompensas exclusivas que só estão disponíveis durante o Jogo do Dia!</p>
            </div>
        </section>

        <section>
            <div class="game-title"><p>🚨 Oferta Especial do Dia:</p></div>
            <div class="game-information">
                <p>Não perca a chance de adquirir {{$game->game}} hoje pelo valor de R$! {{$game->price}}🎉</p>
                <p>#JogoDoDia #AventuraÉpica #Explore {{$game->game}}</p>
            </div>
        </section>
    </div>
</body>
</html>
