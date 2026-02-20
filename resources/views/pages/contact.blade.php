@extends('layouts.app')
@section('title','Contact')

@section('content')
<div class="container py-5">
<h2>Contact Us</h2>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<form method="POST">
@csrf
<input type="text" name="name" class="form-control mb-2" placeholder="Name">
<input type="email" name="email" class="form-control mb-2" placeholder="Email">
<textarea name="message" class="form-control mb-2" placeholder="Message"></textarea>
<button class="btn btn-primary">Send</button>
</form>
</div>
@endsection
