<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produto</title>
    <link rel="stylesheet"
		href="{{ asset('produto.css') }}">
</head>
<body>
    <div class="container">
        <div class="imgBx">
            <img src="https://github.com/anuzbvbmaniac/Responsive-Product-Card---CSS-ONLY/blob/master/assets/img/jordan_proto.png?raw=true" alt="Nike Jordan Proto-Lyte Image">
        </div>
        <div class="details">
            <div class="content">
            
                <h2>Jordan Proto-Lyte <br>
                    <span>Running Collection</span>
                </h2>
                <p>
                Apresentando amortecimento de espuma macia e tecido leve e trançado na parte superior, o Jordan Proto-Lyte é feito para um conforto saltitante durante todo o dia. Conforto Acolchoado: uma entressola de espuma de comprimento total proporciona um amortecimento leve e macio. Tração Segura: o solado com padrão de espinha de peixe exagerado oferece tração em uma variedade de superfícies.
                </p>
                <h3>R$ 900,00</h3>
                <button>Comprar</button>
                <livewire:via-cep />
            </div>
        </div>
    </div>
</body>
</html>