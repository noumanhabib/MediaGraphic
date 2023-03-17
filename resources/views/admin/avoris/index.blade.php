@extends('admin/layouts/default')
@section('title')
    Dashboard
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
                <li><a href="#" class="active">Devis - A traiter</a>
                </li>
            </ul>
            <div class="page-title"> <i class="icon-custom-left"></i>
                <h3>Tout - <span class="semi-bold">les devis à traiter</span> <mark>(Tableau avec formulaire de recherche
                        ave filtre)</mark></h3>
            </div>
            <div class="row">
                <div class="col-md-12 m-b-30">
                    <a class="btn btn-primary pull-right" href="#!">Créer un nouveau devis</a>
                </div>
                <div class="col-md-12">
                    <div class="grid simple ">
                        <div class="grid-title no-border">
                            <h4>Les devis à traiter</h4>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#grid-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <div class="grid-body no-border">
                            <table class="table table-striped table-flip-scroll cf">
                                <thead class="cf">
                                    <tr class="">
                                        <th>
                                            <div class="checkbox check-default ">
                                                <input id="checkbox0" type="checkbox" value="0" class="checkall">
                                                <label for="checkbox0"></label>
                                            </div>
                                        </th>
                                        <th>N°</th>
                                        <th>Date</th>
                                        <th>Par</th>
                                        <th>Objet de devis</th>
                                        <th class="price">Montant HT</th>
                                        <th class="price">Montant TTC</th>
                                        <th>Statut</th>
                                        <th>Etat</th>
                                        <th class="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($quotations))
                                        @foreach ($quotations as $quotation)
                                            <tr>
                                                <td>
                                                    <div class="checkbox check-default">
                                                        <input id="checkbox3" type="checkbox" value="3">
                                                        <label for="checkbox3"></label>
                                                    </div>
                                                </td>
                                                <td>{{ $quotation->id }}</td>
                                                <td>{{ date('d/m/Y', strtotime($quotation->created_at)) }}</td>
                                                <td>{{ $quotation->first_name . ' ' . $quotation->last_name }}</td>
                                                <td>{{ $quotation->description }}</td>
                                                <td class="price">
                                                    @if ($quotation->amount_exclude_tax)
                                                        {{ $quotation->amount_exclude_tax . ' €' }}
                                                    @endif
                                                </td>
                                                <td class="price">
                                                    @if ($quotation->amount_include_tax)
                                                        {{ $quotation->amount_include_tax . ' €' }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($quotation->status == 0)
                                                        A traiter
                                                    @elseif($quotation->status == 1)
                                                        En cours
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($quotation->status == 0)
                                                        <span class="label label-warning">A traiter</span>
                                                    @elseif($quotation->status == 1)
                                                        <span class="label label-success">En cours</span>
                                                    @endif
                                                </td>
                                                <td class="action">
                                                    <a href="#" class="edit">
                                                        <i class="material-icons" title="Modifier">edit</i>
                                                    </a>
                                                    <a href="#!" class="view">
                                                        <i class="material-icons" title="Désactiver">send</i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
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
