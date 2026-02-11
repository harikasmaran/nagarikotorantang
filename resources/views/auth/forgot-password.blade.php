@extends('layouts.index')

@section('content')
<div class="container mt-5">
    <div class="card p-4">
        <h4>Lupa Password</h4>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <button type="submit" class="btn btn-primary">Kirim Link Reset</button>
        </form>
    </div>
</div>
@endsection
