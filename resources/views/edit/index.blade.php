@extends('layout')

@section('title', 'Edit advts')

@section('body')
    <a href="edit/create">Create Advt</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Author</th>
            <th scope="col">Created at</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($advts as $advt)
            <tr>
                <th scope="row">{{$advt->id}}</th>
                <td>{{$advt->title}}</td>
                <td>{{$advt->description}}</td>
                <td>{{$advt->name}}</td>
                <td>{{$advt->created_at}}</td>
                <td>Edit | Delete</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection