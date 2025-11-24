@extends('admin.layout.master-mini')

@push('style')
<style>
    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background: #f8f9fa; /* Changed from navy dark to light gray like landing page */
    }

    /* CENTER FIX */
    .login-wrapper {
        min-height: 100vh;
        width: 100%;
        display: flex;
        justify-content: center;  /* center horizontal */
        align-items: center;      /* center vertical */
        padding: 20px;
    }

    .login-card {
        width: 100%;
        max-width: 420px;
        background: white; /* Changed from navy to white */
        padding: 35px;
        border-radius: 18px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1); /* Lighter shadow */
        color: #212529; /* Changed from white to dark text */
    }

    .login-title {
        text-align: center;
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 25px;
        color: #212529; /* Changed from white to dark */
    }

    .form-label {
        font-weight: 600;
        color: #6c757d; /* Changed from light blue to gray */
        margin-bottom: 6px;
        display: block;
    }

    .form-input {
        width: 100%;
        padding: 12px 14px;
        border-radius: 10px;
        border: 1px solid #dee2e6; /* Changed from navy to light gray */
        background: #f8f9fa; /* Changed from dark to light */
        color: #212529; /* Changed from white to dark */
        outline: none;
        transition: 0.25s;
    }
    .form-input:focus {
        border-color: #6c63ff; /* Changed to landing page primary color */
        box-shadow: 0 0 0 2px rgba(108, 99, 255, 0.25); /* Changed to match primary color */
    }

    .btn-login {
        width: 100%;
        background: linear-gradient(90deg, #6c63ff, #3b3b98); /* Changed to landing page gradient */
        border: none;
        padding: 13px;
        border-radius: 10px;
        color: white;
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
        margin-top: 15px;
        transition: 0.25s;
    }
    .btn-login:hover {
        background: linear-gradient(90deg, #5a52e5, #343486); /* Darker gradient on hover */
        transform: translateY(-2px);
    }
</style>
@endpush

@section('content')
<div class="login-wrapper">
    <div class="login-card">

        <h2 class="login-title">LOGIN</h2>

        <form action="{{ url('/login') }}" method="POST">
            @csrf
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-input" placeholder="Masukkan email" required>

            <label class="form-label" style="margin-top: 15px;">Password</label>
            <input type="password" name="password" class="form-input" placeholder="Masukkan password" required>

            <button type="submit" class="btn-login">Masuk</button>
        </form>

    </div>
</div>
@endsection