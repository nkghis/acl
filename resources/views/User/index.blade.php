@extends('layouts.app')

@section('title', 'Users')

@section('bootstrap')

    {{--Css for Datatables--}}
    {{--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">--}}

    <link href="{{ asset('datatables/css/CssDatatables.css') }}" rel="stylesheet">

@endsection

@section('content')
    <div class="container">

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="modal-title">
                            <button type="button" class="btn btn-primary">
                                <strong>{{ str_plural('UTILISATEUR', $result->count()) }}</strong> <span class="badge badge-light">{{ $result->total() }}</span>
                            </button>
                            {{--<span class="badge badge-secondary">{{ $result->total() }}
                            </span> {{ str_plural('Utilisateur', $result->count()) }}--}}
                        </h3>
                    </div>
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4 page-action text-right">
                        @can('add_users')
                            <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm"> <i class="material-icons">open_in_new</i> <b>Nouveau</b></a>
                        @endcan
                    </div>
                </div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm" id="data-table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Date Création</th>
                            @can('edit_users', 'delete_users')
                                <th class="text-center">Actions</th>
                            @endcan
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($result as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->roles->implode('name', ', ') }}</td>
                                <td>{{ $item->created_at->toFormattedDateString() }}</td>

                                @can('edit_users')
                                    <td class="text-center">
                                        @include('shared._actions', [
                                            'entity' => 'users',
                                            'id' => $item->id
                                        ])
                                    </td>
                                @endcan
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>



    </div>


@endsection

@section('jquery')

    {{--DataTable JavaScript--}}
    {{--<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>--}}
    <script src="{{ asset('datatables/js/jQueryDatatables.js') }}" type="text/javascript"></script>


    {{--Autocompleted Script--}}
    <script type="text/javascript">
        $(document).ready(function(){

            $('#data-table').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/French.json'
                },
                order: [[ 0, "desc" ]],
                pageLength: 5
            });
        });
    </script>

    {{--Script to show modal if validation return error--}}
    <script type="text/javascript">
        @if (count($errors) > 0)
        $('#artisteModal').modal('show');
        @endif
    </script>
@endsection
