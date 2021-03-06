@extends('admin/base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        
       
    <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Pelanggan </div>
        <div class="card-body">


                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $no = 1; 
                                foreach ($data as $datas) : ?> 
                                    <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$datas->nama}}</td>
                                            <td>{{$datas->email}}</td>
                                            <td>{{$datas->alamat}}</td>
                                            <td>{{$datas->telepon}}</td>
                                            <td><img width="100px" src="{{ ('upload/pelanggan/'.$datas->foto) }}'.$datas->foto.'"></td>
                                        </tr>
                               
                            
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
   </section>
    <!-- /.main-section -->
@endsection