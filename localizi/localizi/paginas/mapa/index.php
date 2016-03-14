<div class="boxCenter900">

    <?php

    $navigi = new navigi();
    $navigi->tabela = PREFIXO. 'enderecos_endereco';
    $navigi->query = 'SELECT * FROM '.$navigi->tabela.' a WHERE mapa="'. $_GET['mapa']. '" ORDER BY a.nome ASC' ;
    $navigi->exibicao = 'icone';
    $navigi->paginacao = 30;
    $navigi->delete = true;
    $navigi->config = array(
        'ico' => $_ll['app']['pasta']. 'sys/endereco.png',
        'link' => $_ll['app']['home'] . '&p=endereco&endereco=index&mapa='.$_GET['mapa'].'&id='
    );

    $navigi->monta();

    ?>

</div>
