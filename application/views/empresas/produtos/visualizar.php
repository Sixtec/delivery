

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
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?=strtoupper(str_replace(['á', 'é', 'í', 'ó', 'ú', 'ç'], ['Á', 'É','Í', 'Ó', 'Ú', 'Ç'], $produto->nome))?></h3>

                <div
                    class="box-tools pull-right">
                    <a
                        style="background-color: #e74c3c"
                        href="<?=base_url('empresas/produtos')?>"
                        type="button"
                        class="btn btn-sm btn-danger">
                        Voltar
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
                        <form class="form">
                            
                            <div class="col-md-2 text-center">
                                <img
                                    src="<?=base_url('assets/empresas/dist/img/produtos/'.$produto->thumb)?>"
                                    style="width: 150px; height: 150px; border-radius: 50%"/>
                            </div>

                            
                            <div class="col-md-10">

                                <div class="col-md-6">
                                    <label for="nome">NOME</label>
                                    <input
                                        disabled
                                        value="<?=$produto->nome?>"
                                        class="form-control">
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="categoria">CATEGORIA</label>
                                    <select
                                        disabled
                                        class="form-control">
                                        <option value="<?=$produto->categoria?>"><?=$produto->categoria?></option>
                                    </select>
                                </div>
    
                                <div class="col-md-5">
                                    <label for="descricao">DESCRIÇÃO</label>
                                    <input
                                        disabled
                                        value="<?=$produto->descricao?>"
                                        class="form-control">
                                </div>
                                
                                <div class="col-md-5">
                                    <label for="medida">MEDIDA</label>
                                    <select
                                        disabled
                                        class="form-control">
                                        <option value="<?=$produto->medida?>"><?=$produto->medida?></option>
                                    </select>
                                </div>
    
                                <div class="col-md-2">
                                    <label for="preco_venda">PREÇO DE VENDAS</label>
                                    <input
                                        disabled
                                        value="R$ <?=number_format($produto->preco_venda, 2, ',', '.')?>"
                                        style="text-align: center"
                                        class="form-control text-center">
                                </div>
                                
                                <div class="col-md-12">
                                    <label for="observacao">OBSERVAÇÕES</label>
                                    <textarea
                                        disabled
                                        name="observacao"
                                        class="form-control"><?=$produto->observacao?></textarea>
                                </div>
                                <div class="col-md-12"><br>
                                    <a href="<?=base_url('empresas/produtos/editar/'.$produto->produto_id)?>"
                                        class="btn btn-block btn-primary">Editar</a>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
                <!-- /.row -->
            </div>
            
        </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
</div>