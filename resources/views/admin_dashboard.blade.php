@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <h2 class="mb-4">Admin Dashboard - View Submissions</h2>
        <div class="my-4">

            <a class="btn btn-primary" href="{{ url('/') }}">Home</a>
            <a class="btn btn-success" href="{{ url('/logout') }}">Logout</a>
        </div>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Email</th>
                    <th scope="col">Name</th>
                    <th scope="col">Occupation</th>
                    <th scope="col">Institute</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Whatsapp</th>
                    <th scope="col">Facebook Profile</th>
                    <th scope="col">Reason</th>
                    <th scope="col">Facebook Business Profile</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($submissions as $submission)
                    <tr>
                        <td>{{ $submission->email }}</td>
                        <td>{{ $submission->name }}</td>
                        <td>{{ $submission->occupation }}</td>
                        <td>{{ $submission->institute }}</td>
                        <td>{{ $submission->contact_no }}</td>
                        <td>{{ $submission->whatsapp_number }}</td>
                        <td> <a target="_blank"
                                href="{{ $submission->facebook_profile }}">{{ $submission->facebook_profile }}</a></td>
                        <td>{{ $submission->reason }}</td>
                        <td><a target="_blank"
                                href="{{ $submission->facebook_business_profile }}">{{ $submission->facebook_business_profile }}</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
