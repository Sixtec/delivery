
<!-- jQuery 3 -->
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url('assets/empresas/')?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url('assets/empresas/')?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('assets/empresas/')?>dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="<?=base_url('assets/empresas/')?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?=base_url('assets/empresas/')?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?=base_url('assets/empresas/')?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url('assets/empresas/')?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?=base_url('assets/empresas/')?>bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url('assets/empresas/')?>dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url('assets/empresas/')?>dist/js/demo.js"></script>

<!-- AdminLTE dor demo datatables -->
<script src="<?=base_url('assets/empresas/')?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url('assets/empresas/')?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- AdminLTE dor demo inputmaks -->
<script src="<?=base_url('assets/empresas/')?>plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?=base_url('assets/empresas/')?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?=base_url('assets/empresas/')?>plugins/input-mask/jquery.inputmask.extensions.js"></script>

<script>

    $(function () {
        $('#thumb').change(function(i){
            console.log(i.target.value)

            let path = i.target.value
            path.replace("\\", "/")

            $('#labelThumb').css(
                {
                    'background-image' : 'url("' + path + '")',
                    'background-size' :   '100%'
                }
            );
    })

    $('#data-mask').inputmask({ 'mask' : 'R$ 999,99', 'numericInput' : true })
    $('.data-mask').inputmask({ 'mask' : 'R$ 999,99', 'numericInput' : true })
    $('[data-mask]').inputmask()

    $('#produtos').DataTable({
        'language' : {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        }
    })
  })
</script>
</body>
</html>