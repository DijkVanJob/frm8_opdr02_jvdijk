@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Contact</div>

                    <div class="card-body">
                        <form action="/contact/{{ $contact->id }}" method="post">
                            @method('PUT')

                            @include('contact.form')

                            <button class="btn btn-success" type="submit">Update</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
