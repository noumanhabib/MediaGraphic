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
                <li><a href="#" class="active">Comptabilité - Factures</a>
                </li>
            </ul>
            <div class="page-title"> <i class="icon-custom-left"></i>
                <h3>Comptabilité - <span class="semi-bold">Factures</span></h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="grid simple ">
                        <div class="grid-title no-border">
                            <h4>Les factures</h4>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#grid-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
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
                                        <th>Facture N°</th>
                                        <th>Date</th>
                                        <th>Pour</th>
                                        <th>Objet de facture</th>
                                        <th class="price">Montant HT</th>

                                        <th class="price">Montant TTC</th>
                                        <th>Statut</th>
                                        <th class="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td>
                                            <div class="checkbox check-default">
                                                <input id="checkbox4" type="checkbox" value="4">
                                                <label for="checkbox4"></label>
                                            </div>
                                        </td>

                                        <td>2945</td>
                                        <td>{{ $invoice[0]->created_at }}</td>
                                        <td>Isac kuant</td>
                                        <td>879 Av Roi Wiliam Nice France</td>
                                        <td class="price">{{ $invoice[0]->amount_exclude_tax }} €</td>
                                        <td class="price">{{ $invoice[0]->amount_include_tax }} €</td>
                                        @if ($invoice[0]->status == 1)
                                            <td><span class="label label-info">Payée le:</span><strong>
                                                    06/01/2022</strong></td>
                                        @elseif($invoice[0]->status == 0)
                                            <td><span class="label label-success">Envoyée le:</span><strong>

                                                    01/03/2022</strong></td>
                                        @endif
                                        @if ($invoice[0]->status == 0)
                                            <td class="action">

                                                <a href="#!" class="send"><i class="material-icons"
                                                        title="Envoyer la facture">send</i></a><a
                                                    href="{{ url('admin/compteclient/show-invoice/' . $invoice[0]->id) }}"
                                                    class="view"><i class="material-icons"
                                                        title="Voir la facture">visibility_on</i></a>

                                            </td>
                                        @elseif($invoice[0]->status == 1)
                                            <td class="action"><a
                                                    href="{{ url('admin/comptabililite/generate-pdf/' . $invoice[0]->id) }}"
                                                    class="send"><i class="material-icons"
                                                        title="Télécharger la facture">download</i></a>
                                                <a href="{{ url('admin/compteclient/show-invoice/' . $invoice[0]->id) }}"
                                                    class="view"><i class="material-icons"
                                                        title="Voir la facture">visibility_on</i></a>
                                        @endif
                                    </tr>

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
