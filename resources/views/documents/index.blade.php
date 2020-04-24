@extends('layouts/main')

@section('content')

<div class="container justify-content-center">
    <div><h1>Documents</h1> <span style="float: right;margin-top: -45px; margin-bottom: 25px;"><a href="" class="btn btn-primary">Create A Document</a></span></div>


    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Title</th>
                <th>Document</th>
                <th>Url</th>
                <th>Active?</th>
            </tr>
        </thead>
        <tbody>
            @foreach($documents as $document)
            <tr>
                <td>{{ $document->title }}</td>
                <td>{{ $document->document_text }}</td>
                <td><a href="{{ $document->url }}">{{ $document->url }}</a></td>
                <td>
                    @if($document->active == 1)
                        True
                    @else
                        False
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
