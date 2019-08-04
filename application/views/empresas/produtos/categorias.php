

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color: #fff">
<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Categorias de Produtos
        <small>Version 1.0</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="<?=base_url('empresas/produtos')?>"><i class="fa fa-dashboard"></i> Produtos</a></li>
        <li class="active">Categorias de Produtos</li>
        </ol>
    </section>

<!-- Main content -->
    <section class="content">
    <!-- Info boxes -->
    <div class="row">
        
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-12">

            <?php if($this->session->sucesso):?>
                <p style="padding: 5px" class="bg-success"><?=$this->session->sucesso?></p>
            <?php elseif($this->session->erro):?>
                <p style="padding: 5px" class="bg-danger"><?=$this->session->erro?></p>
            <?php endif ?>

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Categorias</h3>

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
                                        <th>ID</th>
                                        <th>Descrição</th>
                                        <th>Quantidade de Produtos</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($categorias as $c):?>
                                        <tr>
                                            <td class="text-center"><?=$c->categoria_id?></td>
                                            <td class="text-center"><?=$c->descricao?></td>
                                            <td class="text-center">
                                                <a class="btn btn-primary btn-xs" href="<?=base_url('empresas/produtos/visualizar/' . $c->categoria_id)?>">Visualizar</a>
                                                <a class="btn btn-primary btn-xs" href="<?=base_url('empresas/produtos/editar/' .$c->categoria_id)?>">Editar</a>
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