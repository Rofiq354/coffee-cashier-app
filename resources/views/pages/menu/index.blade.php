@extends('welcome')

{{-- Style --}}
@push('style')
    
@endpush

{{-- Content --}}
@section('content')
    <!-- main-panel start -->
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Menu Pages</h3>
                  <h6 class="font-weight-normal mb-0">Halaman ini untuk mengelola menu restoran <span class="text-primary">Coffee Cashier</span></h6>
                </div>
              </div>
            </div>
          </div>
          @if (session('success'))
            <div class="mt-2 alert alert-success alert-dismissible fade show" role="alert">
              <strong>Selamat!</strong> {{ session('success') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif

          @if ($errors->any())
            <div class="mt-2 alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Peringatan!</strong> Ada data yang belum di isi, yakni :
              <ul>
                @foreach ($errors->all() as $error)
                    <li>Data {{ $error }} menu belum di isi</li>
                @endforeach
              </ul>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>  
          @endif

          <a href="#" class="btn btn-primary mb-3 ti-plus" data-toggle="modal" data-target="#modal"> Tambah Data</a>

          {{-- Export --}}
          <a href="/menu/export/excel" class="btn btn-success mb-3 ti-export"> Export Excel</a>
          {{-- Import --}}
          <a href="#" class="btn btn-warning mb-3 ti-import" data-toggle="modal" data-target="#import"> Import Excel</a>

          <div class="row">
            <div class="col-md grid-margin stretch-card">
              <div class="card border-0 shadow-sm">
                <div class="card-body">
                  <div class="table-responsive">
                    @include('pages.menu.data')
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        
        <!-- partial:partials/_footer.html -->
        @include('components.footer')
        <!-- partial -->
      </div>
    <!-- main-panel ends -->


    {{-- Modal Import --}}
    <div class="modal fade" id="import" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header d-flex align-items-center mr-3 py-3">
              <h3 class="modal-title" id="staticBackdropLabel">Import Data</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form action="{{ route('import_menu') }}" method="POST" class="form" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="modal-body">
                  <div class="form-group">
                    <input type="file" name="file" required>
                  </div>
              </div>
              <div class="modal-footer pt-3 pb-0">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-primary" id="simpan">Simpan Perubahan</button>
              </div>
            </div>
          </form>
      </div>
    </div>
@endsection
@include('pages.menu.modal')


{{-- Script --}}
@push('script')
  <script>
    console.log('bro apakabar')

    $(function(){
      $('#tbl-menu').DataTable()
    })

    // dialog hapus data Sweet Alert
    $('.btn-delete').on('click', function(e){
      let nama = $(this).closest('tr').find('td:eq(0)').text();
      Swal.fire({
        icon: 'error',
        title: 'Hapus Data',
        html: `Apakah data <b>${nama}</b> akan dihapus?`,
        confirmButtonText: 'Ya',
        denyButtonText: 'Tidak',
        showDenyButton: true,
        focusConfirm: false
      }).then((result) => {
        if (result.isConfirmed) $(e.target).closest('form').submit()
        else swal.close()
      })
    })

    // Modal Form
    $('#modal').on('show.bs.modal', function(e){
      console.log('bro')
      let button = $(e.relatedTarget);
      let id = button.data('id');
      let nama = button.data('nama');
      let jenis_id = button.data('jenis_id');
      let harga = button.data('harga');
      let image = button.data('image');
      let deskripsi = button.data('deskripsi');
      let mode = button.data('mode');
      console.log(button.data('mode'));
      // let mode = button.data('mode');
      let modal = $(this);
      if(mode === 'edit'){
        modal.find('.modal-title').text('Edit Data');
        modal.find('#nama').val(nama);
        modal.find('#jenis_id').val(jenis_id);
        modal.find('#harga').val(harga);
        modal.find('#image').text(image);
        modal.find('#deskripsi').val(deskripsi);
        let halo = modal.find('.form').attr('action', '{{ url("menu") }}/'+id);
        modal.find('#simpan').text('Simpan Perubahan');
        modal.find('#method').html('@method("PATCH")');
        // console.log(btn);
      }else{
        modal.find('.modal-title').text('Tambah Data');
        modal.find('#no_menu').val('');
        modal.find('.form').attr('action', 'menu');
        modal.find('#simpan').text('Simpan');
        modal.find('#method').html('');
      }
    })
  </script>
@endpush