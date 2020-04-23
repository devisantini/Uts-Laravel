@extends('layout.admin')
@section('content')
<div class="panel">
     <div class="panel-body">
         <div class="col lg 12">
         <h1> Daftar Penjual</h1>
        <table class="table bordered">
            <tr>
                <td width="400"><br> BIODATA</br></td>
                <td><br> Studi Kasus</br></td>

            </tr>
            <tr>
                <td><br> NAMA  : Putu Devi Santini</br></td>
                <td><br> JUDUL : Sistem Manajemen Counter Pulsa Modern</br></td>

            </tr>
            <tr>
                <td><br> NIM  : 1815051017</br></td>
                <td><br> PENJELASAN :Sistem manajemen counter pulsa ini bertujuan untuk memudahkan admin untuk memanajemen administrasi toko dengan meminimalisir penginputan data keluar masuk pulsa sehingga pekerjaan dari admin menjadi lebih </br></td>

            </tr>
            <tr>
                <td><br> PROGRAM STUDI :TEKNIK INFORMATIKA</br></td>
                <td><br> </br></td>

            </tr>
        </table>

    </div>
    </div>
    <ul class="breadcrumb">
         <li class="breadcrumb-item">
         <a href="index.html">Home</a></li>
         <li class="breadcrumb-item active">beranda</li>
     </ul>
    <div class="col-lg-12">
        <a href="{{route('beranda.create')}}">Tambah Data</a>
        <table class="table table-bordered">
            <thead>
                <tr><th>No</th><th>Id_penjual</th><th>Nama</th><th>Alamat</th><th>No_hp</th></tr><th>Aksi</th></tr>
            </thead>
            <tbody>
                @foreach ( $beranda as $in=>$val )
                     <tr><td>{{($in+1)}}</td><td> {{$val->id_penjual}}</td><td>{{$val->nama_penjual}}</td><td>{{$val->alamat_penjual}}</td><td>{{$val->no_hp}}</td></tr>
                    <td>
                    @method('POST')
                    <a href = "{{route('beranda.edit',$val->id_penjual)}}">Update</a>
                    <form action="{{route('beranda.destroy',$val->id_penjual)}}"method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                    </form>
                    </td>
                    </tr>
                @endforeach
            
            </tbody>
        </table>
        {{$beranda->links()}}
    </div>
    </div>
    </div>
 </div>
 @endsection