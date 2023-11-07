<?php
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Contact Details</h1>
        <p><strong>Name:</strong> {{ $contact->name }}</p>
        <p><strong>Contact:</strong> {{ $contact->contact }}</p>
        <p><strong>Email:</strong> {{ $contact->email }}</p>
        <a href="{{ url('contacts/' . $contact->id . '/edit') }}" class="btn btn-primary">Edit</a>
        <form action="{{ url('contacts/' . $contact->id) }}" method="post" style="display: inline;">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this contact?')">Delete</button>
        </form>
    </div>
@endsection
