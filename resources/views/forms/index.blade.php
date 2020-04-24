@extends('layouts/main')

@section('content')

<div class="container justify-content-center">
    <div><h1>Forms</h1></div>


    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Title</th>
                <th>Document</th>
                <th>Active?</th>
            </tr>
        </thead>
        <tbody>
            @foreach($forms as $form)
            <tr>
                <td>{{ $form->title }}</td>
                <td>{{ $form->description }}</td>
                <td>
                    @if($form->active == 1)
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
