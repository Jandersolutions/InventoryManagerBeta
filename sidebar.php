<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

<div class="col-sm-2 col-lg-2">
    <div class="sidebar-nav">
        <div class="nav-canvas">
            <div class="nav-sm nav nav-stacked">

            </div>
            <ul class="nav nav-pills nav-stacked main-menu">
                <li class="nav-header">Menu Principal</li>
                <li><a class="ajax-link" href="index.php"><i class="glyphicon glyphicon-home"></i><span> Início</span></a>
                </li><li class="accordion">
                    <a href="clientes.php"><i class="glyphicon glyphicon-user"></i><span> Clientes</span></a>
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="clientes.php"><i class="glyphicon glyphicon-asterisk"></i> Todos os Clientes</a></li>
                        <li><a href="gerenciar-clientes.php"><i class="glyphicon glyphicon-refresh"></i> Sincronizar Clientes</a></li>
                        <li><a href="ranking-clientes.php"><i class="glyphicon glyphicon-signal"></i> Ranking de Clientes</a></li>
                        <li><a href="segmentacoes.php"><i class="glyphicon glyphicon-tag"></i> Segmentações</a></li>
                    </ul>
                </li>

                <li><a class="ajax-link" href="pedidos.php"><i
                            class=" glyphicon glyphicon-shopping-cart"></i><span> Pedidos</span></a></li>
               <li class="nav-header hidden-md">Gerenciamento</li>
                <li><a class="ajax-link" href="estatisticas.php"><i class="glyphicon glyphicon-list-alt"></i><span> Estatísticas</span></a>
                </li>
                <li class="accordion">
                    <a href="#"><i class="glyphicon glyphicon-random"></i><span> Transações</span></a>
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="contas-pagar.php"><i class="glyphicon glyphicon-arrow-down"></i> Contas à Pagar</a></li>
                        <li><a href="contas-receber.php"><i class="glyphicon glyphicon-arrow-up"></i> Contas à Receber</a></li>
                        <li><a href="cadastrar-notas.php"><i class="glyphicon glyphicon-file"></i> Cadastrar NF</a></li>
                        <li><a href="emitir-notas.php"><i class="glyphicon glyphicon-print"></i> Emitir NF</a></li>
                    </ul>
                </li>
                <li><a class="ajax-link" href="agenda.php"><i class="glyphicon glyphicon-calendar"></i><span> Agenda</span></a>
                </li>
                <li><a class="ajax-link" href="relatorios.php"><i
                            class="glyphicon glyphicon-signal"></i><span> Relatórios</span></a></li>
                <li><a href="erro.php"><i class="glyphicon glyphicon-ban-circle"></i><span> Página de Erro</span></a>
                </li>
                <li><a href="usuarios.php"><i class="glyphicon glyphicon-wrench"></i><span> Gerenciar Usuários</span></a>
                </li>
                <li><a href="configuracoes.php"><i class="glyphicon glyphicon-cog"></i><span> Configurações</span></a>
                </li>
                <li><a href="empresa.php"><i class="glyphicon glyphicon-briefcase"></i><span> Dados da Empresa</span></a>
                </li>
                <li><a href="ajuda.php"><i class="glyphicon glyphicon-question-sign"></i><span> Ajuda</span></a></li>
            </ul>
            <label id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
        </div>
    </div>
</div>
<!--/span-->
<?php } ?>