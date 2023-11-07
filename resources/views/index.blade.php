<?php
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Contact List</h1>
        <a href="{{ url('contacts/create') }}" class="btn btn-primary">Add Contact</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->contact }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>
                        <a href="{{ url('contacts/' . $contact->id) }}" class="btn btn-info">View</a>
                        <a href="{{ url('contacts/' . $contact->id . '/edit') }}" class="btn btn-primary">Edit</a>
                        <form action="{{ url('contacts/' . $contact->id) }}" method="post" style="display: inline;">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this contact?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
