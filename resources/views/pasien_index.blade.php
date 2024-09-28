<div>
    @extends('layouts.app', ['title' => 'Data Pasien'])
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Form Pasien</div>
                    <div class="card-body">
                        <h3>Data pasien</h3>
                        <div class="row mb-3 mt-3">
                            <div class="col-md-6">
                                <a href="/pasien/create" class="btn btn-primary btn-sm">Tambah Pasien</a>
                            </div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>No Pasien</th>
                                    <th>Nama</th>
                                    <th>jenis kelamin</th>
                                    <th>usia</th>
                                    <th>foto</th>
                                    <th>alamat</th>
                                    <th>Nama</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pasien as $item)
                                <tr>
                                     <td>{{ $loop->iteration }}</td>
                                     <td>{{ $item->no_pasien }}</td>
                                     <td>
                                     <img src="{{ \Storage::url($item->foto) }}" alt="foto" width="100">
                                        {{ $item->nama }}
                                     </td>
                                         <td>{{ $item->umur }}</td>
                                         <td>{{ $item->jenis_kelamin }}</td>
                                         <td>{{ $item->created_at }}</td>
                                        <td>
                                            <a href="/pasien/{{ $item->id }}/edit" class="btn btn-warning btn-sm ml-2">
                                                            Edit
                                                        </a>
                                                        <form action="/pasien/{{ $item->id }}" method="post" class="d-inline">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger btn-sm ml-2"
                                                                onclick="return confirm('Yakin ingin menghapus data?')">
                                                                Hapus
                                                            </button>
                                                        </form>
                                        </td>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $pasien->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


</div>
