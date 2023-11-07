<?php
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Contact</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{ url('contacts/' . $contact->id) }}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $contact->name }}" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="text" class="form-control" name="contact" id="contact" value="{{ $contact->contact }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ $contact->email }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Contact</button>
        </form>
    </div>
@endsection
