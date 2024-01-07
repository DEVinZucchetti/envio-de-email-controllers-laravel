<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Game Avaliação</title>
</head>
<body>

    <h2>O jogo mais bem avaliado da Steam</h2>

    <p>Detalhes do Jogo:</p>

    <ul>
        <li><strong>Nome:</strong> {{ $bestRatedGame->name }}</li>
        <li><strong>Preço:</strong> R$ {{ number_format($bestRatedGame->price, 2, ',', '.') }}</li>
        <li><strong>Avaliações:</strong> {{ $bestRatedGame->avaliations->count() }}</li>
        <li><strong>Avaliação Média:</strong> {{ $bestRatedGame->avaliations->avg('recommended') * 100 }}%</li>
    </ul>

    <p>Obrigado por utilizar a Steam!</p>

</body>
</html>

