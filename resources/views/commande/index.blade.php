@extends('layouts/default')
@section('title')
    Mes Commandes
    @parent
@stop
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <link href="{{ url('frontend_assets/table.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div id="vos-commandes" class="content-target">
                    <h2>Mes Commandes</h2>
                    <table class="table-bordered table-flip-scroll cf table-full table">
                        <tbody>
                            <tr>
                                <th>N°</th>
                                <th>Date</th>
                                <th>Par</th>
                                <th class="price">Montant HT</th>
                                <th class="price">Montant TTC</th>
                                <th>Statut</th>
                                <th class="action">Action</th>
                            </tr>
                            @if (count($orders))
                                @foreach ($orders as $order)
                                    <tr class="item">
                                        <td>{{ $order->id }}</td>
                                        <td>{{ date('d/m/Y', strtotime($order->created_at)) }}</td>
                                        <td>
                                            {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}
                                        </td>
                                        <td class="price">
                                            {{ $order->subtotal . ' €' }}
                                        </td>
                                        <td class="price">
                                            {{ $order->total . ' €' }}
                                        </td>
                                        <td>
                                            @if ($order->status == 0)
                                                A traiter
                                            @elseif($order->status == 1)
                                                En cours
                                            @endif
                                        </td>
                                        <td class="action">
                                            <a href="{{ url('commande/detail/' . $order->id) }}" class="view">
                                                <i class="material-icons" title="Désactiver">Detail</i>
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
    </section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
@stop
