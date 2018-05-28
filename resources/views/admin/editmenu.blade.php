@extends('admin/base')
@section('content')

	<section class="main-section">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Edit Menu </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                    <div class="row">
                        <div class="col-lg-6">

                            @if($errors->any())
                             <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                            <div class="alert alert-success">
                                @foreach($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                          @endif

                         
                   

                            <form action="{{action('menucontroller@update', $data->id_menu)}}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PATCH')}}
                            	
                                <div class="form-group">
                                    <label>Nama Makanan</label>
                                    <input class="form-control" placeholder="Nama" name="nama" required autofocus="" value="{{$data->nama}}">
                                </div>

                                <div class="form-group">
                                    <label>Jenis</label>
                                    <select class="form-control" name="category">
                                        <option value="Catering">Catering</option>
                                        <option value="Kue">Kue</option>
                                        <option value="Makanan">Makanan</option>
                                        <option value="Minuman">Minuman</option>
                                        <option value="Paket">Paket</option>
                                    </select>
                                </div>

                                <label>Harga</label>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">Rp.</span>
                                    <input type="text" class="form-control" name="harga" value="{{$data->harga}}" required>
                                    <span class="input-group-addon">.00</span>
                                </div>

                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input class="form-control" placeholder="" name="deskripsi" required value="{{$data->deskripsi}}">
                                </div>

                                <div class="form-group">
                                    <label>Pilih Gambar</label>
                                    <input type="file" name="foto" value="pilih file" required value="">
                                </div>

                                <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                           
                            </form>
                        



                        </div>
                        <!-- /.col-lg-12 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                       
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
	</section>
@endsection