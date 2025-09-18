@extends('layout.app')

@section('title', 'Login')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
  <div class="card shadow-lg p-4" style="width: 400px;">
    <h3 class="text-center mb-4">Login</h3>

    <!-- Pesan error -->
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('login.store') }}" method="POST">
      @csrf

      <!-- Username -->
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text"
               class="form-control @error('username') is-invalid @enderror"
               id="username"
               name="username"
               value="{{ old('username') }}"
               required
               autofocus>
        @error('username')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <!-- Password -->
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password"
               class="form-control @error('password') is-invalid @enderror"
               id="password"
               name="password"
               required>
        @error('password')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <!-- Remember Me -->
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="remember" name="remember">
        <label class="form-check-label" for="remember">Ingat saya</label>
      </div>

      <!-- Tombol -->
      <button type="submit" class="btn btn-warning w-100">Login</button>
    </form>
  </div>
</div>
@endsection
