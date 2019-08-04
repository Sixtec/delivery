

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color: #fff">
<!-- Content Header (Page header) -->
    <!-- <section class="content-header">
        <h1>
        Painel de Produtos
        <small>Version 1.0</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Painel</a></li>
        <li class="active">Produtos</li>
        </ol>
    </section> -->

<!-- Main content -->
    <section class="content">
    <!-- Info boxes -->
    <div class="row">
        
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-12">

            <?php if($this->session->sucesso):?>
                <p style="padding: 5px" class="btn-success"><?=$this->session->sucesso?></p>
            <?php elseif($this->session->erro):?>
                <p style="padding: 5px" class="btn-danger"><?=$this->session->erro?></p>
            <?php endif ?>
            <div class="box">
                <div class="box-header with-border ">
                    <h3 class="box-title">Produtos</h3>

                    <div
                        class="box-tools pull-right">
                        <a
                            style="background-color: #e74c3c; color: #fff"
                            href="<?=base_url('empresas/produtos/adicionar')?>"
                            type="button"
                            class="btn btn-sm text-light">
                            Adicionar
                        </a>
                        <button
                            style="background-color: #e74c3c; color: #fff"
                            type="button"
                            class="btn btn-box-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                        
                    </div>
                </div>
            <!-- /.box-header -->

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table
                                id="produtos"
                                class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center hidden-xs">codigo</th>
                                        <th class="hidden-xs">thumb</th>
                                        <th>nome</th>
                                        <th>preço</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($produtos as $p): ?>
                                        <tr>
                                            <td class="text-center hidden-xs"><?=$p->produto_id?></td>
                                            <td class="text-center hidden-xs"><img class="thumb" src="<?=base_url('assets/empresas/dist/img/produtos/'.$p->thumb)?>"/></td>
                                            <td ><?=$p->nome?></td>
                                            <td class="text-center">R$ <?=number_format($p->preco_venda, 2, ',', '.')?></td>
                                            <td class="text-center">
                                                <a class="btn btn-primary btn-xs" href="<?=base_url('empresas/produtos/visualizar/' . $p->produto_id)?>">Ver</a>
                                                <!-- <a class="btn btn-success btn-xs" href="<?=base_url('empresas/produtos/editar/' . $p->produto_id)?>">Editar</a> -->
                                                <a class="btn btn-danger btn-xs btn-excluir" value="<?=base_url('empresas/produtos/excluir/' . $p->produto_id)?>" data-toggle="modal" data-target="#excluirProduto">Excluir</a>
                                            </td>
                                        </tr>
                                    <?php endforeach?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.section -->
</div>

<!-- Modal -->
<div class="modal fade" id="excluirProduto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header btn-danger">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">AVISO!!!</h4>
      </div>
      <div class="modal-body">
        Excluindo esse produto você perderá todas as vendas relacionadas a ele. Alterando dados do faturamento anterior!<br><br>
        Deseja realmente excluir esse produto?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
        <a id="btn-dist" href="" type="button" class="btn btn-danger">Sim, quero excluir!</a>
      </div>
    </div>
  </div>
</div>

<script>
$(function(){
    $('.btn-excluir').click(function(i){
        $('#btn-dist').attr('href', i.target.attributes.value.value)
    })
})
</script>