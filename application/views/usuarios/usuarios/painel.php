<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color: #fff">
<!-- Main content -->
    <section class="content">
        <!-- Info boxes -->

        <style>
            .scroll{
                width: 100%;
                height: 100px;
                white-space: nowrap;
                position: relative;
                overflow-x: scroll;
                overflow-y: hidden;
                -webkit-overflow-scrolling: touch;
            }

            .scroll div {
                width: 24.5%;
                background-color: #eee;
                float: none;
                height: 90%;
                margin: 0 0.25%;
                display: inline-block;
                zoom: 1;
            }
        </style>

        <div class="row">
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Buscar Estabelecimento">
            </div><br><br><br>
            
            <div class="col-md-12 scroll hidden-lg hidden-md visible-sm visible-xs">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span class="info-box-icon bg-red">
                        <i class="ion ion-ios-people-outline"></i>
                    </span>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="ion ion-pizza"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">PIZZARIAS</span>
                        <span class="info-box-number"> <small>10 total</small></span>
                        <span class="info-box-number"> <small class="text-success">3 abertas</small></span>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>