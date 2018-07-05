@extends('layouts.app')

{{--Title content.--}}
{{--Change 'Home' by Title of this page.--}}
@section('title', 'Home')

{{--Css content.--}}
@section('bootstrap')

    {{--Css for Datepicker--}}
    {{--    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" />--}}

    <link href="{{ asset('datepicker/css/gijgo.min.css') }}" rel="stylesheet">

    {{--Css for Datatables--}}
    {{--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">--}}

    <link href="{{ asset('datatables/css/CssDatatables.css') }}" rel="stylesheet">

    {{--Css for Autocompleted--}}
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />--}}
    <link href="{{ asset('select2/css/select2.min.css') }}" rel="stylesheet">

@endsection

{{--Body content.--}}
@section('content')
<div class="container">

    <div class="card">
                <div class="card-header">
                    {{--Titre Panel. Change 'Titre panel.' to your panel title.--}}
                    <div class="col-md-8">
                        <h3>Titre panel.</h3>
                    </div>

                    {{--Bouton à droite du titre. Decommenter le contenu du div si vous souhaiter ajouter un bouton a droite du titre du panel.--}}
                    {{--Si vous utiliser les droit d'acces d'acces ajouter les droit que vous voulez octroyer a ce dernier.--}}
                    <div class="col-md-4 page-action text-right">

                        {{--@can('add_artistes')
                            <a href="#" class="btn btn-sm btn-success pull-right" data-toggle="modal" data-target="#artisteModal"> <i class="material-icons">open_in_new</i> <b>Nouveau artiste</b></a>
                        @endcan--}}
                    </div>
                 </div>

                <div class="card-body">


                    {{--Creation du formulaire--}}
                    <div>
                        <div class="col-md-2"></div>

                        {{--Conteneur formulaire--}}
                        <div class="col-md-8">
                            CONTENUE FORMULAIRE
                        </div>

                        <div class="col-md-2"></div>
                    </div>

                    {{--tableau liste enregistrament--}}
                    <div>
                        CONTENUE TABLEAU
                    </div>

                </div>
    </div>

</div>
@endsection

{{--Javascript content.--}}
@section('jquery')

    {{--Datepicker JavaScript--}}
    {{--<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/messages/messages.fr-fr.js" type="text/javascript"></script>--}}
    <script src="{{ asset('datepicker/js/gijgo.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('datepicker/js/messages/messages.fr-fr.js') }}" type="text/javascript"></script>

    {{--DataTable JavaScript--}}
    {{--<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>--}}
    <script src="{{ asset('datatables/js/jQueryDatatables.js') }}" type="text/javascript"></script>

    {{--Autocompleted JavaScript--}}
    <script src="{{ asset('select2/js/select2.min.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>--}}

    <script type="text/javascript">
        $(document).ready(function(){

           /* Change 'index-ticket' by id of table*/
            $('#index-ticket').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/French.json'
                },
                order: [[ 0, "desc" ]],
//                pageLength: 5
            });
        });

        /* Function*/
        {{--Function get quantity of tranche field--}}{{--
        function getvalues() {
            var debut = 0;
            var fin = 0;
            var quantite = 0;

            debut = parseInt(document.getElementById('debut').value);
            fin = parseInt(document.getElementById('fin').value);
            quantite = fin - debut +1;

            if(quantite > 0){
                document.getElementById('quantite').value = quantite;
            }
            else{
                alert("Verifier les champs Tranche!!!!. Champs: (Tranche fin) doit etre supérieur à Champs : (Tranche Début)");
                document.getElementById('fin').value = "";
                document.getElementById('debut').focus();

            }
        }
--}}

        /* Datepicker Script*/
        /* Change 'enlevement' by id of date-picker input*/
        $('#enlevement').datepicker({
            uiLibrary: 'bootstrap4',
            locale: 'fr-fr',
            format: 'dd-mm-yyyy'
        });

    </script>

@endsection
