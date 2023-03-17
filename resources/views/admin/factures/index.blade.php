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
                                    @foreach ($quotations as $key => $show)
                                        <tr class="">
                                            <td>
                                                <div class="checkbox check-default">
                                                    <input id="checkbox4" type="checkbox" value="4">
                                                    <label for="checkbox4"></label>
                                                </div>
                                            </td>
                                            <td>
                                                {{ $key + 1 }}
                                            </td>
                                            <td>{{ $show->created_at }}</td>
                                            <td>{{ $show->first_name }}</td>
                                            <td>{{ $show->description }}</td>
                                            <td class="price">{{ $show->amount_exclude_tax }} €</td>
                                            <td class="price">{{ $show->amount_include_tax }} €</td>
                                            @if ($show->status == 1)
                                                <td><span class="label label-info">Payée le:</span><strong>
                                                        06/01/2022</strong></td>
                                            @elseif($show->status == 0)
                                                <td><span class="label label-success">Envoyée le:</span><strong>

                                                        01/03/2022</strong></td>
                                            @endif
                                            @if ($show->status == 0)
                                                <td class="action">

                                                    <a href="{{ url('admin/compteclient/send-invoice/' . $show->id) }}"
                                                        class="send"><i class="material-icons"
                                                            title="Envoyer la facture">send</i></a><a
                                                        href="{{ url('admin/compteclient/show-invoice/' . $show->id) }}"
                                                        class="view"><i class="material-icons"
                                                            title="Voir la facture">visibility_on</i></a>

                                                </td>
                                            @elseif($show->status == 1)
                                                <td class="action"><a
                                                        href="{{ url('admin/compteclient/generate-pdf/' . $show->user_id) }}"
                                                        class="send"><i class="material-icons"
                                                            title="Télécharger la facture">download</i></a>
                                                    <a href="{{ url('admin/compteclient/show-invoice/' . $show->user_id) }}"
                                                        class="view"><i class="material-icons"
                                                            title="Voir la facture">visibility_on</i></a>
                                            @endif
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
