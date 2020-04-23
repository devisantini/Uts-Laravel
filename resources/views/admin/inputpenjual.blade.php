@section('content')
@endsection
<div class="panel">
     <form action="{{(isset($beranda))?route('beranda.update',$barang->id_penjual):route('barang.store')}}" method="POST">
       @csrf
       @if(isset($barang))?@method('PUT')@endif
       <div class="panel-body">
       <h3>Input Penjual</h3>

       <div class="form-group">
              <label class="col-sm-2 control-label text-right">ID Penjual</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($barang))?$penjual->id_penjual:old('id_penjual')}}" name="id_penjual" class="form-control"></div>
               @error('id_penjual')<small style="color:red">{{$message}}</small>@enderror
         </div>

       <div class="form-group">
              <label class="col-sm-2 control-label text-right">Nama Penjual</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($barang))?$penjual->nama_penjual:old('id_penjual')}}" name="nama_penjual" class="form-control"></div>
               @error('id_penjual')<small style="color:red">{{$message}}</small>@enderror
         </div>

         <div class="form-group">
              <label class="col-sm-2 control-label text-right">Alamat Penjual</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($barang))?$penjual->alamat_penjual:old('alamat_penjual')}}" name="alamat_penjual" class="form-control"></div>
               @error('id_penjual')<small style="color:red">{{$message}}</small>@enderror
         </div>

         <div class="form-group">
              <label class="col-sm-2 control-label text-right">No HP</label>
              <div class="col-sm-10">
              <input type="text" value="{{(isset($barang))?$penjual->no_hp:old('id_penjual')}}" name="no_hp" class="form-control"></div>
               @error('id_penjual')<small style="color:red">{{$message}}</small>@enderror
         </div>
 

         <div class="form-group">
            <button type="submit">SIMPAN</button> 
         </div>

       </div>
       </form>
    </div>