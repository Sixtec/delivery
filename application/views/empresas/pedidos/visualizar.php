

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color: #fff">
<!-- Content Header (Page header) -->
    <!-- <section class="content-header">
        <h1>
        Painel de Produtos
        <small>Version 1.0</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="<?=base_url('empresas/produtos')?>"><i class="fa fa-dashboard"></i> Produtos</a></li>
        <li class="active">Adicionar</li>
        </ol>
    </section> -->

<!-- Main content -->
<section class="content">
    <!-- Info boxes -->

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <?php if(empty($pedido)):?>
                    <div class="box-header with-border">
                        <h3 class="box-title">Não foi possível acessar o PEDIDO</h3>
                    </div>
                <?php else: ?>
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            #<?=strtoupper(str_replace(
                                ['á', 'ã', 'é', 'í', 'ó', 'ú', 'ç'],
                                ['Á', 'Ã', 'É','Í', 'Ó', 'Ú', 'Ç'],
                                $pedido->pedido_id.' '.$pedido->usuario_nome))?></h3>
                        <div class="box-tools pull-right">
                            <a  href="<?=base_url('empresas/pedidos')?>"
                                type="button"
                                class="btn btn-sm btn-danger">
                                Voltar</a>
                            <button
                                style="color: #fff"
                                type="button"
                                class="btn btn-box-tool btn-danger" data-widget="collapse">
                                <i class="fa fa-minus"></i>
                            </button>
                            
                            </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
    
                            <div class="col-md-12">

                                <?php if($this->session->sucesso):?>
                                    <p style="padding: 5px" class="bg-success"><?=$this->session->sucesso?></p>
                                <?php elseif($this->session->erro):?>
                                    <p style="padding: 5px" class="bg-danger"><?=$this->session->erro?></p>
                                <?php endif ?>

                                <form class="form">
                                    <div class="col-md-2 text-center">
                                        <br>
                                        <a  href="<?=base_url('empresas/pedidos/aceitar/'.$pedido->pedido_id)?>"
                                            class="btn btn-block btn-primary">
                                            ACEITAR
                                        </a>
                                        <br>
                                        <a  href="<?=base_url('empresas/pedidos/recusar/'.$pedido->pedido_id)?>"
                                            class="btn btn-block btn-danger">
                                            RECUSAR
                                        </a>
                                        <br>
                                        <a  href="<?=base_url('empresas/pedidos/imprimir/'.$pedido->pedido_id)?>"
                                            class="btn btn-block btn-success">
                                            IMPRIMIR
                                        </a>
                                        <!-- <img
                                            src="<?=base_url('assets/empresas/dist/img/produtos/'.$produto->thumb)?>"
                                            style="width: 150px; height: 150px; border-radius: 50%"/> -->
                                    </div>
    
                                    
                                    <div class="col-md-10">
    
                                        <div class="col-md-6">
                                            <label for="nome">USUÁRIO</label>
                                            <input
                                                disabled
                                                value="<?=$pedido->usuario_nome?>"
                                            class="form-control">
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label for="categoria">HORÁRIO</label>
                                        <input
                                            disabled
                                            value="<?=$pedido->data_hora?>"
                                            class="form-control">
                                    </div>
        
                                    <div class="col-md-8">
                                        <label for="descricao">OBSERVAÇÃO</label>
                                        <input
                                            disabled
                                            value="<?=$pedido->observacao_pedido?>"
                                            class="form-control">
                                    </div>
                                    
                                    <div class="col-md-2">
                                        <label for="preco_venda">VALOR</label>
                                        <input
                                            disabled
                                            value="R$ <?=number_format($pedido->valor, 2, ',', '.')?>"
                                            style="text-align: center"
                                            class="form-control text-center">
                                    </div>
                                    
                                    <div class="col-md-2">
                                        <label for="preco_venda">TROCO</label>
                                        <input
                                            disabled
                                            value="R$ <?=number_format($pedido->valor, 2, ',', '.')?>"
                                            style="text-align: center"
                                            class="form-control text-center">
                                    </div>
                                    <div class="col-md-12"><hr></div>
                                    <div class="col-md-12">
                                        <label for="observacao">ITENS DO PEDIDO</label>
                                        
                                        <table class="table table-striped">
                                            <tr>
                                                <th>QTD</th>
                                                <th>DESCRIÇÃO</th>
                                                <th>VALOR UN</th>
                                                <th class="text-center">TOTAL</th>
                                            </tr>
                                            <?php $total = '' ?>;
                                            <?php foreach ($produtos_pedido as $p): ?>
                                                <?php $total += $p->quantidade * $p->valor_unitario?>
                                                <tr>
                                                    <td><?=$p->quantidade?></td>
                                                    <td><?=$p->nome?></td>
                                                    <td>R$ <?=number_format($p->valor_unitario, 2, ',', '.')?></td>
                                                    <td class="text-center">R$ <?=number_format($p->valor_unitario * $p->quantidade, 2, ',', '.')?></td>
                                                </tr>
                                            <?php endforeach ?>
                                            <tr>
                                                <td class="text-right" colspan="3">TOTAL:</td>
                                                <td class="text-center">R$ <?=number_format($total, 2, ',', '.')?></td>
                                            </tr>
                                        </table>
                                        
                                    </div>
                                    <div class="col-md-12"><br>
                                        <a href="<?=base_url('empresas/pedidos/aceitar/'.$pedido->pedido_id)?>"
                                            class="btn btn-block btn-primary">ACEITAR</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php endif ?>    
                <!-- /.row -->
            </div>
        </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
</div>