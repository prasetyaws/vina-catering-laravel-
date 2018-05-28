@extends('admin/base')
@section('content')

	<section class="main-section">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Penambahan Menu Baru</h1>
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
                   

                            <form action="{{ route('menu.store') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                            	
                                <div class="form-group">
                                    <label>Nama Makanan</label>
                                    <input class="form-control" placeholder="Nama" name="nama" required autofocus="">
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
                                    <input type="text" class="form-control" name="harga" required>
                                    <span class="input-group-addon">.00</span>
                                </div>

                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input class="form-control" placeholder="" name="deskripsi" required>
                                </div>

                                <div class="form-group">
                                    <label>Pilih Gambar</label>
                                    <input type="file" name="foto" value="pilih file" required>
                                </div>

                                <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                                <input type="reset" class="btn btn-default" value="Reset">
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