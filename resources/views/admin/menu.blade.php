@extends('admin/base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">


    <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example </div>
        <div class="card-body">

            <div class="col-lg-12">
                   
                    <a href="tambahmenu"><i class="fa fa-plus fa-fw"></i>Tambah Menu</a>
            </div>


         
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Deskripsi</th>
                  <th>Harga</th>
                  <th>Foto</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                 <th>No</th>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Deskripsi</th>
                  <th>Harga</th>
                  <th>Foto</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
              <tbody>

                   
                          @php $no = 1; @endphp

                                @foreach ($data as $datas) 
                                    <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $datas->nama }}</td>
                                            <td>{{ $datas->category }}</td>
                                            <td>{{ $datas->deskripsi }}</td>
                                            <td>{{ $datas->harga }}</td>
                                            <td><img width="100px" src="{{ ('upload/menu/'.$datas->foto) }}"></td>
                                            <td>
                                              
                
                                                <a href="{{ route('menu.edit', $datas->id_menu) }}" class="btn btn-info"><i class="glyphicon glyphicon-edit"></i>Edit</a>
                                                <a href="/menu/delete/{{$datas->id_menu}}"   class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</a>
                                              
                                            </td>
                                        </tr>
                                  @endforeach

 
                           
                
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted"></div>

        



    
</div>
   </section>
    <!-- /.main-section -->
@endsection