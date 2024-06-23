<div class="container">
    <div class="row">
        <?php
            //url a pesquisar
            $url = "https://api.rawg.io/api/games?key={$api_key}";

            //trazer os resultados
            $dados = file_get_contents($url);

            //echo $dados;

            //alterar o formato, para o formato do PHP
            $dados = json_decode($dados);

            //print_r($dados);

            foreach($dados->results as $jogo){
                //echo "<p>{$jogo->name}</p>";
                ?>

                <div class="col-12 col-md-2 text-center">
                    <div class="card">
                        <p>
                            <strong><?php echo $jogo->name;?></strong>
                        </p>
                        <p>
                            <a href="<?=$jogo->id?>" class="btn btn-danger">
                                Detalhes
                            </a>
                        </p>
                    </div>
                </div>

                <?php
            }
        ?>
    </div>
</div>