<div class="boxCenter">
    <form class="form" method="post" action="<?php echo $_ll['app']['onserver']?>&p=endereco">
        <?php if(isset($_GET['id'])){?>
            <input type="hidden" name="id" value="<?php echo $_GET['id']?>"/>
        <?php }?>
        <input type="hidden" name="mapa" value="<?php echo $_GET['mapa']?>"/>
        <h2><?php echo (!isset($_GET['id'])? 'Novo ': '')?>Endereço</h2>
        <fieldset>
            <div>
                <label>Título</label>
                <input type="text" name="nome" value="<?php echo $dados_mapa['nome']?>"/>
            </div>
            <div>
                <label>Estado</label>
                <input type="text" name="estado" value="<?php echo $dados_mapa['estado']?>"/>
            </div>
            <div>
                <label>Cidade</label>
                <input type="text" name="cidade" value="<?php echo $dados_mapa['cidade']?>"/>
            </div>
            <div>
                <label>Bairro</label>
                <input type="text" name="bairro" value="<?php echo $dados_mapa['bairro']?>"/>
            </div>
			
			 <div>
            <table>
                <tr>
                    <td style="width: 75%">
                        <label>Logradouro</label>
                        <input type="text" name="logradouro" value="<?php echo $dados_mapa['logradouro']?>"/>
                    </td>
                    <td>         
						<label>Número</label>
                        <input type="text" name="numero" value="<?php echo $dados_mapa['numero']?>"/>
              
                    </td>
                </tr>
            </table>
			</div>
			
            <div>
                <label>Complemento</label>
                <input type="text" name="complemento" value="<?php echo $dados_mapa['complemento']?>"/>
            </div>
            <div>
                <label>Telefone</label>
                <input type="text" name="telefone" value="<?php echo $dados_mapa['telefone']?>"/>
            </div>
            
            <div>
                <label>Teste</label>
                
                <?php 
                $tag = new tags();
                $tag->config(PREFIXO. 'teste', $_GET['id']);
                $tag->tabelaDeBusca(PREFIXO. 'teste_2');
                $tag->novos(FALSE);
                $tag->sugestoes(FALSE);
                echo $tag;
                ?>
                
            </div>
            
        </fieldset>

        <div class="botoes">
            <button class="confirm" type="submit">Gravar</button>
            <a href="<?php echo $backReal;?>">Voltar</a>
        </div>
    </form>
</div>

<script>
    $(function(){
        ajustaForm();
    });
</script>
    