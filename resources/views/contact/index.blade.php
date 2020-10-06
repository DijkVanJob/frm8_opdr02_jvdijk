@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contacts</div>


                <ul class="list-group list-group-flush">
                    @foreach($contacts as $contact)
                        <li class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{ $contact->name }}</h5>
                                <small class="text-muted">{{ $contact->updated_at->diffForHumans() }}</small>
                            </div>
                            <small class="text-muted">{{ $contact->email }}</small>
                            <p class="mb-2">{{ $contact->message }}</p>
                            <div class="d-flex">
                                <a class="btn btn-outline-info" href="/contact/{{ $contact->id }}/edit">Edit</a>
                                <form action="/contact/{{ $contact->id }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="ml-2 btn btn-outline-danger">Delete</button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</div>
@endsection
