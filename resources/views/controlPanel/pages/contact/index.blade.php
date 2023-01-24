@extends('controlPanel.theme.theme')
@section('css')
@endsection
@section('title')
    contact  section
@endsection()
@section('breadcrumb', 'contact section')
@section('breadcrumb-data')
    <li class="breadcrumb-item">
        <a href="" class="text-muted">
            contact section
        </a>
    </li>
@stop
@include('controlPanel.theme.layout.msgError')
@section('content')
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
            </div>
        </div>
        <div class="card-body">
            <table class="table table-row-bordered gy-5">
                <thead>
                <tr class="fw-semibold fs-6 text-muted">
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Masseg</th>
                </tr>
                </thead>
                <tbody>
                @foreach($contact as $s)
                    <tr>
                        <td>{{$s->name}}</td>
                        <td>{{$s->phone}}</td>
                        <td>{{$s->email}}</td>
                        <td>{{$s->subject}}</td>
                        <td>{{$s->message}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>








@endsection

@section('js')


@endsection

@section('script')



@endsection
