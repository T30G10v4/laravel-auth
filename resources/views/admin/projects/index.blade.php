@extends('layouts.admin')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Created At</th>
                <th scope="col">Description</th>
                <th scope="col">Slug</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->title }}</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>1234</td>
                    <td>2345</td>
                    <td>2345</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
