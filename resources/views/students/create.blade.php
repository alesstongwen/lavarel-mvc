@extends('layouts.app')

@section('content')
    <h1>Add New Student</h1>
    <form action="/students" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <button type="submit">Add Student</button>
    </form>
@endsection