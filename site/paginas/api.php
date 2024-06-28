<div class="conteiner">
    <h2>Jogos da API</h2>
    <br><br>
    <div class="row">
        <?php
        $url = "https://www.cheapshark.com/api/1.0/games?title=batman";
        $dados = file_get_contents($url);
        $dados = json_decode($dados);

        foreach ($dados as $jogo) {
        ?>
            <div class="col-12 col-md-2 text-center">
                <div class="card">
                    <img src="<?php echo $jogo->thumb; ?>" alt="<?php echo $jogo->title; ?>" class="text-center" class="w-100">
                    <p class="title">
                        <strong>
                            <?php echo $jogo->external; ?>
                        </strong>
                    </p>
                    <a href="https://www.cheapshark.com" class="btn btn-success" target="_blank" id="margin"><strong>Preço: $</strong><?php echo $jogo->cheapest; ?></a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>