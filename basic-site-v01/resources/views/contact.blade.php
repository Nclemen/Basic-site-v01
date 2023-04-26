@extends('layouts.app')

@section('title', 'Contact page')

@section('content')
    <h1>Contact</h1>
    <form method="post" action="{{ route('contact.submit') }}" class="row g-3" >
        @csrf

        <div class="col-md-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" required></textarea>
            <label for="message">Message</label>
        </div>

        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    
@stop