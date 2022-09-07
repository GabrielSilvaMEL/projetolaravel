<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de imc</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type='text/css'>
</head>
<body>
    <main>
        <div class='painel'>
            <h2>Instruções</div>
            <div class='conteudo-painel'>
                <p>Esta aplicação tem como finalidade demonstrar os valores 
                    do IMC com dados determinados por você!</p>

            </div>
        </div>

        <div class="painel">
            <h2>Cálculo do valor do IMC</h2>
            <div class="conteudo-painel">
                <form action="{{url('/gasto')}}" method="get">
                    <label for="peso">Peso</label>
                    <input type="number" class="campoTexto"  name="distancia" required/>

                    <label for="altura">Altura</label>
                    <input type="number" class="campoTexto" name="autonomia" required/>

                    <button class="botao" type="submit">Calcular</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>