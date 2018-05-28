@extends('admin/base')
@section('content')
<section class="main-section">

	<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Transaksi</h1>
                    

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Pembayaran</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $no = 1; 
                                foreach ($data as $datas) {  
                                    echo
                                    '<tr>
                                            <td>'.$no.'</td>
                                            <td>'.$datas->id_pesan.'</td>
                                            <td><a href="#" data-toggle="modal" data-target="#myModal'.$no.'"><img width="100px" src="imgbukti/'.$datas->img.'"></a></td>
                                            <td>
                                                <a href="index.php/admin/konfirmasi/'.$datas->id_pesan.'" class="btn btn-info"><i class="glyphicon glyphicon-edit"></i>Konfirmasi</a>
                                                <a href="#" class="btn btn-info" data-toggle="modal" data-target="#detailmodal" onclick="detail_surat('.$datas->id_pesan.')"><i class="glyphicon glyphicon-edit"></i>Details</a>
                                            </td>
                                        </tr>';
                                        ?>

                              <div id="myModal<?php echo $no;?>" class="modal fade" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">BUKTI TRANSAKSI</h4>
                                      </div>
                                      <div class="modal-body">
                                        <img src="imgbukti/<?php echo $datas->img;?>" style="width: 100%;height: 100%">
                                      </div>                                     
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $no++;
                            }
                        ?>
                        </tbody>
                    </table>
                   
                </div>
            </div>
            
<script type="text/javascript">
   
</script>

	
</section>

@endsection