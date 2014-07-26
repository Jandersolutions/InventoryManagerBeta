<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Início</a>
        </li>
        <li>
            <a href="#">Painel de Controle</a>
        </li>
    </ul>
</div>
<div class=" row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="6 clientes novos." class="well top-block" href="#">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Clientes</div>
            <div>507</div>
            <span class="notification">6</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="4 produtos novos." class="well top-block" href="#">
            <i class="glyphicon glyphicon-star green"></i>

            <div>Produtos</div>
            <div>228</div>
            <span class="notification green">4</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title=" 34 novas vendas." class="well top-block" href="#">
            <i class="glyphicon glyphicon-shopping-cart yellow"></i>

            <div>Vendas</div>
            <div>320</div>
            <span class="notification yellow">34</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="12 mensagens não lidas." class="well top-block" href="#">
            <i class="glyphicon glyphicon-envelope red"></i>

            <div>Mensagens</div>
            <div>25</div>
            <span class="notification red">12</span>
        </a>
    </div>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Bem Vindo</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <h1>Inventory Manager
                    <small><sup>BETA</sup><br /> Alta qualidade, responsivo, o gerenciador de estoque que irá mudar seu e-Commerce... Para melhor!</small>
                </h1>
                <p>O inventory manager foi desenvolvido para ser integrado ao WooCommerce<sup>&reg;</sup> e facilitar no gerenciamento da sua loja, nesta versão você poderá integrar sua loja WooCommerce<sup>&REG;;</sup> com o nosso gerenciador de estoques e manter um controle maior sobre suas vendas, seus clientes, e é claro os lucros.</p>

                <p><b>Ele é um Projeto OpenSource e Totalmente Gratuito.</b></p>

                <p class="center-block download-buttons">
                    <a href="#" class="btn btn-primary btn-lg">Site Oficial <i
                            class="glyphicon glyphicon-globe glyphicon-white"></i></a>
                    <a href="#" class="btn btn-default btn-lg"><i
                            class="glyphicon glyphicon-download-alt"></i> Baixar Extensões</a>
                </p>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="box col-md-4">
        <div class="box-inner homepage-box">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-signal"></i> Informações dos Visitantes</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div class="box-content">
                    <div id="donutchart" style="height: 300px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/span-->

    <div class="box col-md-4">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> Novos Clientes</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div class="box-content">
                    <ul class="dashboard-list">
                        <li>
                            <a href="#">
                                <img class="dashboard-avatar" alt=""
                                     src="#"></a>
                            <strong>Nome:</strong> <a href="#">José Luiz
                            </a><br>
                            <strong>Registro:</strong> 17/05/2014<br>
                            <strong>Status:</strong> <span class="label-success label label-default">Confirmado</span>
                        </li>
                        <li>
                            <a href="#">
                                <img class="dashboard-avatar" alt=""
                                     src="#"></a>
                            <strong>Nome:</strong> <a href="#">Maria Hellena
                            </a><br>
                            <strong>Registro:</strong> 17/05/2014<br>
                            <strong>Status:</strong> <span class="label-warning label label-default">Pendente</span>
                        </li>
                        <li>
                            <a href="#">
                                <img class="dashboard-avatar" alt=""
                                     src="#"></a>
                            <strong>Name:</strong> <a href="#">Julio Cesar
                            </a><br>
                            <strong>Registro:</strong> 25/05/2014<br>
                            <strong>Status:</strong> <span class="label-default label label-danger">Inativo</span>
                        </li>
                        <li>
                            <a href="#">
                                <img class="dashboard-avatar" alt=""
                                     src="#"></a>
                            <strong>Nome:</strong> <a href="#">Paula Tejando</a><br>
                            <strong>Registro:</strong> 17/05/2014<br>
                            <strong>Status:</strong> <span class="label label-info">Atualizado</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--/span-->

    <div class="box col-md-4">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-flag"></i> Informações dos Pedidos</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <ul class="dashboard-list">
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-arrow-up"></i>
                            <span class="green">92</span>
                            Novos Pedidos
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-arrow-down"></i>
                            <span class="red">15</span>
                            Pedidos Cancelados
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-minus"></i>
                            <span class="blue">36</span>
                            Pedidos em Processamento
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-envelope"></i>
                            <span class="yellow">45</span>
                            Produtos Enviados
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-ok-sign"></i>
                            <span class="green">112</span>
                            Produtos Pagos
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-remove-circle"></i>
                            <span class="red">31</span>
                            Pedidos Incompletos
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class=" glyphicon glyphicon-info-sign"></i>
                            <span class="blue">93</span>
                            Pedidos em Andamento
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-comment"></i>
                            <span class="yellow">2</span>
                            Reclamações
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--/span-->
</div><!--/row-->

<!-- chart libraries start -->
<script src="bower_components/flot/excanvas.min.js"></script>
<script src="bower_components/flot/jquery.flot.js"></script>
<script src="bower_components/flot/jquery.flot.pie.js"></script>
<script src="bower_components/flot/jquery.flot.stack.js"></script>
<script src="bower_components/flot/jquery.flot.resize.js"></script>
<!-- chart libraries end -->
<script src="js/init-chart.js"></script>


<?php require('footer.php'); ?>
