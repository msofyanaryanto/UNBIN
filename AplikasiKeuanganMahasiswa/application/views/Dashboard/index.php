<div class="panel">
    <div class="panel-body">
        <div class="row row-lg">
            <div class="col-lg-12">
                <form class="form-horizontal" action="<?php echo base_url('dashboard')?>" method="post">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Start Date : </label>
                            <div class="col-md-8">
                                <input type="text" autocomplete="off"  id='start_date' name="start_date" class="form-control" value="<?php echo $startDate?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="col-md-4 control-label">End Date : </label>
                            <div class="col-md-8">
                                <input type="text" autocomplete="off" id='end_date' name="end_date" class="form-control" value="<?php echo $endDate?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                           <input type="submit" class="btn btn-primary" value="Filter">
                        </div>
                    </div>
                       
                </form>
            </div>
            <div class="col-lg-12">
                <div class="example-wrap m-md-0">
                    <h4 class="example-title">Total Penjualan</h4>
                    <div class="example">
                        <div id="chart-transaksi"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="example-wrap">
                    <h4 class="example-title">Total Produk Terjual</h4>
                    <div class="example">
                        <div id="chart-produk"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="example-wrap">
                    <h4 class="example-title">Total Pembelian Produk</h4>
                    <div class="example">
                        <div id="chart-pembelian"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>