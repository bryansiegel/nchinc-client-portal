@extends('layouts/main')

@section('content')

<div class="container justify-content-center">
    <div><h1>Todos</h1></div>


    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Title</th>
                <th>Completed?</th>
            </tr>
        </thead>
        <tbody>
            @foreach($todo as $todos)
            <tr>
                <td>{{ $todos['title'] }}</td>
                <td>
                    @if($todos['completed'] == 1)
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
