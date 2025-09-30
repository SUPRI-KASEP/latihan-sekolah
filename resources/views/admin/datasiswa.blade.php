@extends('admin.template.app')
@section('title', 'Data Siswa')
@section('content')
<div class="container" style="max-width:1100px; margin:auto; padding:20px;">
    <h1 class="title">Daftar Siswa</h1>

    <!-- Tombol Tambah -->
    <div style="margin-bottom:20px; text-align:right;">
        <a href="{{ route('siswa.create') }}" class="btn-add">+ Tambah Siswa</a>
    </div>

    <!-- Tabel Siswa -->
    <table class="table-siswa">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jenis Kelamin</th>
                <th>NISN</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th style="text-align:center;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($siswa as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->kelas }}</td>
                <td>{{ $item->jenis_kelamin }}</td>
                <td>{{ $item->nisn }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->tanggal_lahir }}</td>
                <td style="text-align:center;">
                    <a href="{{ route('siswa.edit', $item->id) }}" class="btn-edit">Edit</a>
                    <form action="{{ route('delete', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus?')" class="btn-delete">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8" class="empty">Belum ada data siswa</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<style>
/* Typography */
.title {
    text-align: center;
    margin-bottom: 30px;
    font-family: 'Poppins', sans-serif;
    color: #1e293b;
    font-size: 2rem;
    font-weight: 600;
}

/* Tombol */
.btn-add, .btn-edit, .btn-delete {
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    border-radius: 8px;
    padding: 8px 16px;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-block;
}

/* Tombol Tambah */
.btn-add {
    background: #000;
    color: #fff;
    box-shadow: 0 6px 15px rgba(0,0,0,0.1);
}
.btn-add:hover {
    background: #1e40af;
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

/* Tombol Edit */
.btn-edit {
    background: #000000;
    color: #fff;
}
.btn-edit:hover {
    background: #1e40af;
    transform: scale(1.05);
}

/* Tombol Delete */
.btn-delete {
    background: #000000;
    color: #fff;
}
.btn-delete:hover {
    background: #1e40af;
    transform: scale(1.05);
}

/* Tabel */
.table-siswa {
    width: 100%;
    border-collapse: collapse;
    font-family: 'Poppins', sans-serif;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 6px 20px rgba(0,0,0,0.05);
}

.table-siswa thead {
    background: linear-gradient(90deg, #1e40af, #3b82f6);
    color: #fff;
    font-weight: 600;
}

.table-siswa th, .table-siswa td {
    padding: 14px 12px;
    text-align: left;
    transition: background 0.3s;
}

.table-siswa tbody tr {
    background: #fff;
    transition: all 0.3s ease;
}

.table-siswa tbody tr:hover {
    background: #f1f5f9;
    transform: translateX(2px);
}

.empty {
    text-align: center;
    color: #64748b;
    padding: 20px;
    font-style: italic;
}
</style>
@endsection
