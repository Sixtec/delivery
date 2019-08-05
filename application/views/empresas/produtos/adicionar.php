

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color: #fff">
<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Painel de Produtos
        <small>Version 1.0</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="<?=base_url('empresas/produtos')?>"><i class="fa fa-dashboard"></i> Produtos</a></li>
        <li class="active">Adicionar</li>
        </ol>
    </section>

<!-- Main content -->
<section class="content">
    <!-- Info boxes -->

    <div class="row">
        <div class="col-md-12">
            <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Adicionar Produto</h3>

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
                        <?php if($this->session->sucesso):?>
                            <p style="padding: 5px" class="bg-success"><?=$this->session->sucesso?></p>
                        <?php elseif($this->session->erro):?>
                            <p style="padding: 5px" class="bg-danger"><?=$this->session->erro?></p>
                        <?php endif ?>
                        <form
                            class="form"
                            method="post"
                            enctype="multipart/form-data">
                            
                            <div class="col-md-2 text-center">
                                <br><br>
                                <label
                                    style="padding: 5px"
                                    class="bnt btn-danger"
                                    id="labelThumb"
                                    for="thumb">INSERIR IMAGEM </label>
                                <input id="thumb" style="display: none" type="file" name="thumb" >
                            </div>

                            
                            <div class="col-md-10">

                                <div class="col-md-6">
                                    <label for="nome">NOME</label>
                                    <input
                                        class="form-control"
                                        type="text"
                                        name="nome"
                                        required
                                        placeholder="Nome do produto">
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="categoria">CATEGORIA</label>
                                    <select
                                        name="categoria"
                                        class="form-control"
                                        required>
                                        <option value="">Selecione uma categoria</option>
                                        <?php foreach($categorias as $c):?>
                                            <option value="<?=$c->categoria_id?>"><?=$c->descricao?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
    
                                <div class="col-md-5">
                                    <label for="descricao">DESCRIÇÃO</label>
                                    <input
                                        class="form-control"
                                        type="text"
                                        name="descricao"
                                        required
                                        placeholder="Detalhes do produto">
                                </div>
                                
                                <div class="col-md-5">
                                    <label for="medida">MEDIDA</label>
                                    <select
                                        name="medida"
                                        class="form-control"
                                        required>
                                        <option value="">Selecione uma media</option>
                                        <option value="un">UN</option>
                                        <option value="kg">KG</option>
                                        <option value="lt">LT</option>
                                    </select>
                                </div>
    
                                <div class="col-md-2">
                                    <label for="preco_venda">PREÇO DE VENDAS</label>
                                    <input
                                        style="text-align: center"
                                        type="text"
                                        class="form-control text-center data-mask"
                                        name="preco_venda"
                                        id="data-mask"
                                        required>
                                </div>
                                
                                <div class="col-md-12">
                                    <label for="observacao">OBSERVAÇÕES</label>
                                    <textarea
                                        name="observacao"
                                        class="form-control"></textarea>
                                </div>
                                <div class="col-md-12"><br>
                                    <button
                                        style="background-color: #e74c3c; color: #fff"
                                        type="submit"
                                        class="btn btn-block">Salvar</button>
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