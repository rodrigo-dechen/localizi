<div class="boxCenter">
    <form class="form" method="post" action="<?php echo $_ll['app']['onserver']?>&p=mapa.config">
        <?php if(isset($_GET['config'])){?>
            <input type="hidden" name="id" value="<?php echo $_GET['config']?>"/>
        <?php }?>
        <h2><?php echo (!isset($_GET['config'])? 'Novo ': '')?>Mapa</h2>
        <fieldset>
            <div>
                <label>Nome</label>
                <input type="text" name="nome" value="<?php echo $dados_mapa['nome']?>"/>
            </div>
            <div>
                <label>Id dinâmico</label>
                <input type="text" value="<?php echo $dados_mapa['id_dinamico']?>" disabled="disabled" readonly="readonly" style="background-color: #f7f7f7"/>
                <span class="ex">Será criado automaticamente a partir do nome</span>
            </div>
        </fieldset>

        <div class="botoes">
            <button class="confirm" type="submit">Gravar</button>
            <a href="<?php echo $backReal;?>">Voltar</a>
        </div>
    </form>
</div>