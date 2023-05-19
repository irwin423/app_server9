@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                Here are the list of registered clients:

                                @foreach ($clients as $client)
                                    <div class="">
                                        <p><b>name</b>: {{ $client->name }}</p>
                                        <p><b>id</b>: {{ $client->id }}</p>
                                        <p><b>secret</b>: {{ $client->secret }}</p>
                                        <p><b>redirect</b>: {{ $client->redirect }}</p>
                                    </div>
                                    <hr>
                                @endforeach
                            </div>
                            <div class="col-md-6">
                                <form action="/oauth/clients" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>
                                        <div class="col-md-6">
                                            <input id="" type="text" class="form-control" name="name">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="redirect" class="col-md-4 col-form-label text-md-end">Redirect</label>
                                        <div class="col-md-6">
                                            <input id="" type="text" class="form-control" name="redirect">
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">creat client
                                            </button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
