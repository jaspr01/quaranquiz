@extends('layouts.app')

@section('pageTitle') Quizzes @endsection

@section('content')
    <h1>Quizzes</h1>
    <p>Welkom bij Quaranquiz. Hieronder kan je een lijst van de beschikbare quizzes zien. Klik op de quiz die je wil spelen.</p>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titel</th>
                <th scope="col">Aangemaakt op</th>
            </tr>
        </thead>
        <tbody>

            @foreach($quizzes as $key => $quiz)
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $quiz->title }}</td>
                    <td>{{ date('d/m/Y', strtotime($quiz->created_at)) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
