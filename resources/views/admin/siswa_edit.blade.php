@extends('admin.template.app')

@section('title','Edit Siswa')

@section('content')
<div class="form-wrapper">
    <h1>Edit Siswa</h1>

    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" class="form-card">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" value="{{ $siswa->nama }}" required>
        </div>

        <div class="form-group">
            <label>Kelas</label>
            <input type="text" name="kelas" value="{{ $siswa->kelas }}" required>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin</label>
            <div style="display:flex; gap:20px; margin-top:5px;">
                <label>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki"
                        {{ $siswa->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }} required>
                    Laki-laki
                </label>
                <label>
                    <input type="radio" name="jenis_kelamin" value="Perempuan"
                        {{ $siswa->jenis_kelamin == 'Perempuan' ? 'checked' : '' }} required>
                    Perempuan
                </label>
            </div>
        </div>


        <div class="form-group">
            <label>NISN</label>
            <input type="text" name="nisn" value="{{ $siswa->nisn }}" required>
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" required>{{ $siswa->alamat }}</textarea>
        </div>

        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}" required>
        </div>

        <button type="submit" class="btn-submit">Update</button>
    </form>
</div>

<style>
    .form-wrapper {
        max-width: 500px;
        margin: 40px auto;
        background: #f9fafb;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        font-family: Poppins, sans-serif;
    }
    .form-wrapper h1 {
        text-align: center;
        margin-bottom: 25px;
        color: #1e293b;
    }
    .form-card {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    .form-group {
        display: flex;
        flex-direction: column;
    }
    .form-group label {
        margin-bottom: 6px;
        font-weight: bold;
        color: #374151;
    }
    .form-group input,
    .form-group select,
    .form-group textarea {
        padding: 10px;
        border: 1px solid #d1d5db;
        border-radius: 6px;
        font-size: 14px;
    }
    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        border-color: #2563eb;
        outline: none;
        box-shadow: 0 0 0 2px rgba(37, 99, 235, 0.2);
    }
    .form-group textarea {
        resize: vertical;
        min-height: 80px;
    }
    .btn-submit {
        background: linear-gradient(135deg, #2563eb, #1e40af);
        color: white;
        padding: 12px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 16px;
        transition: 0.3s;
    }
    .btn-submit:hover {
        background: linear-gradient(135deg, #1e40af, #1e3a8a);
        transform: translateY(-2px);
    }
</style>
@endsection
