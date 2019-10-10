

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
            <div class="box">
                <div class="box-header with-border ">
                    <h3 class="box-title">Pedidos</h3>
                    

                    <div class="box-tools pull-right">
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
                        <div class="col-md-12 text-center">
                            
                            <?php if($this->session->sucesso):?>
                                <p style="padding: 5px" class="bg-success"><?=$this->session->sucesso?></p>
                            <?php elseif($this->session->erro):?>
                                <p style="padding: 5px" class="bg-danger"><?=$this->session->erro?></p>
                            <?php endif ?>

                            <div class="col-md-12">
                                
                                <table class="table">
                                    <tr>
                                        <td>ID</td>
                                        <td>CLIENTE</td>
                                        <td>DATA/HORA</td>
                                        <td>VALOR</td>
                                    </tr>
                                    
                                    <?php foreach ($pedidos as $p):?>
                                        <tr>
                                            <td><?=$p->pedido_id?></td>
                                            <td><?=$p->usuario_nome?></td>
                                            <td><?=$p->data_hora?></td>
                                            <td><?=$p->valor?></td>
                                            <td>
                                                <a class="btn btn-sm btn-danger"           
                                                    href="<?=base_url('empresas/pedidos/visualizar/'.$p->pedido_id)?>">ver</a></td>
                                        </tr>
                                    <?php endforeach ?>
                                </table>

                            </div>

                            <div class="col-md-4">
                            </div>
                        
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
// $(function(){
//     setInterval(() => {
//         buscarPedidos()
//     }, 20000);
// });

// function buscarPedidos(){
//     $.get('<?=base_url('empresas/pedidos/ajax')?>', data => renderizarPedidos(data));
// };

// function renderizarPedidos(arr){
//     arr.map(arr => {
//         let codigo = arr.pedido_id;
//         let usuario = arr.usuario_nome;
//         let hora = arr.data_hora;

//         console.log(codigo + usuario);
//     })
// }

$(function(){
    $('.btn-excluir').click(function(i){
        $('#btn-dist').attr('href', i.target.attributes.value.value)
    })
})
</script>