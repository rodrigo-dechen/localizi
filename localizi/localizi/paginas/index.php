<div class="boxCenter900">

    <?php

    $navigi = new navigi();
    $navigi->tabela = PREFIXO. 'enderecos_mapa';
    $navigi->query = 'SELECT * FROM '.$navigi->tabela.' a ORDER BY a.nome ASC' ;
    $navigi->exibicao = 'icone';
    $navigi->paginacao = 30;
    $navigi->delete = true;
    $navigi->config = array(
        'ico' => $_ll['app']['pasta']. 'sys/mapa.png',
        'link' => $_ll['app']['home'] . '&p=mapa&mapa='
    );

    $navigi->monta();

    ?>

</div>