@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Contact Us</div>

                    <div class="card-body">
                        <form action="/contact" method="post">

                            @include('contact.form')

                            <button class="btn btn-success" type="submit">Send</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
