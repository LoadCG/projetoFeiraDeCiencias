<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCC - Feira de Ciencias</title>
    <!-- Incluindo os links para os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon"
        href="http://colegiocomercialcpv.com.br/wp-content/uploads/2022/09/cropped-Logo-Colegio-Comercial-sombra-512_512-32x32.jpg">
</head>
<style>
    .visto {
        color: gray;
    }
</style>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Colégio Comercial de Caçapava</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Realizar Votação
                        <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="consulta.php">Consultar Resultados</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- CARD1 -->
    <div class="container mt-4">

        <div class="mb-4">
            <h2>Feira de Ciências do CCC</h2>
            <h6 class="text-success">Quem está realizando o cadastro dos votos?</h6>
            <select class="form-select rounded" aria-label="Default select example">
                <option selected>Selecione uma opção</option>
                <option value="1">Pessoa - 1</option>
                <option value="2">Pessoa - 2</option>
                <option value="3">Pessoa - 3</option>
            </select>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">MATEMÁTICA</h5>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <i class="bi bi-eye"></i>
                            <div>
                                <i class="bi bi-emoji-frown"></i>
                                <i class="bi bi-emoji-neutral"></i>
                                <i class="bi bi-emoji-smile"></i>
                            </div>
                            <i class="bi bi-chat-left-text"></i>
                        </div><!--card-body d-flex justify-content-between align-items-center-->
                    </div><!--card-body text-center-->
                </div><!--card-->
            </div><!--col-md-4-->

            <!-- CARD2 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">LINGUAGENS</h5>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <i class="bi bi-eye"></i>
                            <div>
                                <i class="bi bi-emoji-frown"></i>
                                <i class="bi bi-emoji-neutral"></i>
                                <i class="bi bi-emoji-smile"></i>
                            </div>
                            <i class="bi bi-chat-left-text"></i>
                        </div><!--card-body d-flex justify-content-between align-items-center-->
                    </div><!--card-body text-center-->
                </div><!--card-->
            </div><!--col-md-4-->

            <!-- CARD3 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center" id="projeto1">
                        <h5 class="card-title text-center">QUIMICA</h5>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <i class="bi bi-eye" id="olho1" onclick="marcarComoVisto('olho1')"></i>
                                <div><!--div para os emoticons-->
                                    <i class="bi bi-emoji-frown"></i>
                                        <i class="bi bi-emoji-neutral"></i>
                                            <i class="bi bi-emoji-smile"></i>
                                </div><!--div para os emoticons - fim-->
                                <i class="bi bi-chat-left-text"></i>
                        </div><!--card-body d-flex justify-content-between align-items-center-->
                    </div><!--card-body text-center-->
                </div><!--card-->
            </div><!--col-md-4-->

        </div><!--row - fim-->

        <!--Botão Finalizar-->
        <div class="row">
            <div class="col text-center">
                <button type="submit" class="btn btn-success mt-4">FINALIZAR</button>
            </div>
        </div>

    </div><!--container mt-4-->
    <script>
       /*  function marcarComoVisto(idOlho) {
            var olho = document.getElementById(idOlho);
            olho.classList.remove("bi-eye");
            olho.classList.add("bi-eye-slash");
            olho.classList.add("visto");
            olho.style.color = "gray";
            var card = document.getElementById("projeto1");
            card.style.backgroundColor = "f8f9fa";

            function avaliarProjeto(avaliacao) {
                var cardTitle = document.getElementById("projeto1").querySelector(".card-title").innerText;
                alert("O projeto '" + cardTitle + "' foi avalido como: " + avaliacao);
            }

            function adicionarComentario(idCard) {
                var comentario = prompt("Adicione um comentário: ");
                if (comentario !== null) {
                    var cardTitle = document.getElementById(idCard).querySelector(".card-title").innerText;
                    alert("Comentario adicionado ao projeto '" + cardTitle + "': " + comentario);
                }
            }
        } */
    </script>
    <!-- Incluindo os scripts do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>