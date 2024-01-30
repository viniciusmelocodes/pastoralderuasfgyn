<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oração de Purificação Parte 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <p>
    <div class="container">
        <button class="btn btn-warning btn-sm" onclick="changeFontSize(-2)">Diminuir tamanho do texto</button>
        <button class="btn btn-warning btn-sm" onclick="changeFontSize(2)">Aumentar tamanho do texto</button>
    </div>
    </p>
    <div class="container" id="texto" style="font-size: 18px; margin-bottom: 10px;">
        <div class="alert alert-info">
            <center>
                <h4>
                    Oração de Purificação
                </h4>
            </center>
        </div>
        <p>
            Todos: <b>Eu, em nome de Jesus, ordeno que saiam de mim, de minha casa, de minha família (cônjuge, filhos,
                ...) e dos meus amigos de Comunidade, todas as forças espirituais do mal que possam ter nos contaminado,
                e ordeno que vão se prostrar aos pés da Cruz do Senhor Jesus e os proíbo de voltar.</b>
        </p>
        <p>
            <b>Que saiam também agora, toda a fúria do inimigo e todo o dardo inflamado lançado contra nossos bens
                materiais, contra nosso organismo físico, contra nossa mente ou nosso espírito.</b>
        </p>
        <p>
            <b>Neste momento, Senhor Jesus, eu me lavo com Teu sangue preciosíssimo, e também lavo Nele todas as pessoas
                que comigo convivem. Teu sangue seja para nós cobertura e proteção, e que o Divino Espírito Santo renove
                em cada um de nós Sua unção, Sua força e Seu poder. Pela poderosa intercessão da Virgem Maria, de seus
                Anjos e Santos. Amém!</b>
        </p>
        <p>
            <i>
                <b>
                    "A Cruz Sagrada seja minha luz! Não seja o dragão o meu guia! Retira-te satanás, nunca me aconselhes
                    coisas vãs, é mau o que tu ofereces. Bebe tu mesmo o teu próprio veneno!"
                </b>
            </i>
        </p>
        <hr>
        <center>
            <button class="btn btn-primary" onclick="irProximaOracao()">Próxima Oração</button>
        </center>
    </div>
    <script>
        function changeFontSize(aditionalSize) {
            var div = document.getElementById("texto");
            var currentFont = div.style.fontSize.replace("px", "");
            
            if (parseInt(currentFont) > 12 && parseInt(currentFont) < 70) {
                div.style.fontSize = parseInt(currentFont) + parseInt(aditionalSize) + "px";
            } else if ((aditionalSize < 0 && parseInt(currentFont) == 70) || (aditionalSize > 0 && parseInt(currentFont) == 12)) {
                div.style.fontSize = parseInt(currentFont) + parseInt(aditionalSize) + "px";
            }
        }

        function irProximaOracao() {
            window.location.href = "/public/oracao-purificacao-parte-2"
        }
    </script>
</body>

</html>