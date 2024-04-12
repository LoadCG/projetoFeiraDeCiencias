<?php //html de cada card dentro do echo; include será feito em outros códigos
function card ($nomeProjeto) {
    echo `
    <div class="card" style="width: 18rem;">
  <div class="card-body text-center">
    <h5 class="card-title">PROJETO NEGROZIKA</h5>
    <h6 class="card-subtitle mb-2 text-muted">blablabla q n sei o que de subtitulo de negocio d n sei oq la</h6>
</div>
    `;
}

 card("projeto");
    ?>