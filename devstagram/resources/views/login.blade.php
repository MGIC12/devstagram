@extends('layouts.app')
@section('titulo')
    Login
@endsection

@section('contenido')
    <form action="#" class="bg-white p-6 rounded-lg">
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
            <input type="email" id="email" name="email" class="border rounded-lg px-3 py-2 w-full">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
            <input type="password" id="password" name="password" class="border rounded-lg px-3 py-2 w-full">
        </div>
    </form>
@endsection