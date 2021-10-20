@extends('layout')

@section('title', 'Advt management')

@section('body')
    <form action="edit/<?=$advt['action']?>" method="post">
        @csrf
        <div class="card w-80 m-3 border-dark">
            <div class="card-header">
                <input name="title" type="text" class="form-control" placeholder="<?=$advt['title'] ?? 'Title'?>">
            </div>
            <div class="card-body">
                <textarea name="description" class="form-control mb-3" rows="3"
                          placeholder="<?=$advt['description'] ?? 'Description'?>"></textarea>
                <input type="submit" class="btn btn-primary" value="<?=$advt['action']?>">
            </div>
        </div>
    </form>
@endsection

