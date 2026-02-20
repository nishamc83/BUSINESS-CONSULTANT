@extends('layouts.app')
@section('title','Book Consultation')

@section('content')
<div class="container py-5">
<h2>Book Consultation</h2>

<form method="POST">
@csrf
<input type="text" name="name" class="form-control mb-2" placeholder="Name">
<input type="email" name="email" class="form-control mb-2" placeholder="Email">
<input type="date" name="date" class="form-control mb-2">
<select name="service" class="form-control mb-2">
<option>Strategy Consulting</option>
<option>Financial Advisory</option>
<option>Digital Transformation</option>
</select>
<textarea name="message" class="form-control mb-2" placeholder="Message"></textarea>
<button class="btn btn-primary">Book Now</button>
</form>
</div>
@endsection
