@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <section>
       <nav class="container mt-5">
           <div class="d-flex justify-content-end">
            <a href="{{route ('comics.index')}}"></a>
               <a class="btn btn-primary mx-3" href="{{ route('comics.index') }}">Comics</a>
               <a class="btn btn-primary" href="{{ route('comics.create') }}">Create New Comic</a>
           </div>
        <div class="d-flex ">
            <img class="w-25" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/comic-logo-design-template-8784347f1d3151d491ecc71a664ee55b_screen.jpg?ts=1684889101" alt="Logo">
        </div>
       </nav>
    </section>
    <h1>Home page</h1>
    <p>Welcome to the home page!</p>
</main>

@endsection
