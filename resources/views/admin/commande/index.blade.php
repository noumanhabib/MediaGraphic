@extends('admin/layouts/default')
@section('title')
    Commande Encours
    @parent
@stop
@section('header_styles')
@stop

@section('content')

    <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div id="portlet-config" class="modal hide">
            <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button"></button>
                <h3>Widget Settings</h3>
            </div>
            <div class="modal-body">Widget settings form goes here</div>
        </div>
        <div class="clearfix"></div>
        <div class="content">
            <ul class="breadcrumb">
                <li>
                    <p>Vous êtes sur la page de</p>
                </li>
                <li><a href="#" class="active">Commande anomalie - {{ $data['title'] }}</a>
                </li>
            </ul>
            <div class="page-title"> <i class="icon-custom-left"></i>
                <h3>Tout - <span class="semi-bold">les commandes en anomalie - {{ $data['title'] }}</span> <mark>(Tableau avec formulaire de recherche ave filtre)</mark></h3>
            </div>
            <div class="row">
                <div class="col-md-12 m-b-30">
                    <a class="btn btn-primary pull-right" href="#!">Créer un nouveau devis</a>
                </div>
                <div class="col-md-12">
                    <div class="simple grid">
                        <div class="grid-title no-border">
                            <h4>Les commandes en anomalie - {{ $data['title'] }}</h4>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#grid-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="grid-body no-border">
                            <table class="table-striped table-flip-scroll cf table">
                                <thead class="cf">
                                    <tr class="">
                                        <th>
                                            <div class="checkbox check-default">
                                                <input id="checkbox0" type="checkbox" value="0" class="checkall">
                                                <label for="checkbox0"></label>
                                            </div>
                                        </th>
                                        <th>N°</th>
                                        <th>Date</th>
                                        <th>Par</th>
                                        <th class="price">Montant HT</th>
                                        <th class="price">Montant TTC</th>
                                        <th>Payment Statut</th>
                                        <th>Statut</th>
                                        <th class="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr class="">
                                            <td>
                                                <div class="checkbox check-default">
                                                    <input id="checkbox2" type="checkbox" value="2">
                                                    <label for="checkbox2"></label>
                                                </div>
                                            </td>
                                            <td>{{ $order->id }}</td>
                                            <td>{{ date('d/m/Y', strtotime($order->created_at)) }}</td>
                                            <td>
                                                {{ $order->user->first_name . ' ' . $order->user->last_name }}
                                            </td>
                                            <td class="price">
                                                {{ $order->subtotal . ' €' }}
                                            </td>
                                            <td class="price">
                                                {{ $order->total . ' €' }}
                                            </td>
                                            <td>
                                                @if ($order->payment_status == 0)
                                                    Paiement en attente
                                                @elseif($order->payment_status == 1)
                                                    Paiement effectué
                                                @endif
                                            </td>
                                            <td>
                                                @if ($order->status == 0)
                                                    Commande en attente
                                                @elseif($order->status == 1)
                                                    En cours
                                                @elseif($order->status == 2)
                                                    Commande terminée
                                                @endif
                                            </td>
                                            <td class="action">
                                                <a href="{{ url('admin/commande/edit/' . $order->id) }}" class="view">
                                                    <i class="material-icons" title="Désactiver">send</i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE -->
    </div>


@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
