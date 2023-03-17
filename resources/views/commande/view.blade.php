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
                        <tr>
                            <th>Commande N°</th>
                            <td>{{ $commande->id }}</td>
                        </tr>
                        <tr>
                            <th>Staut</th>
                            <td>{{ $data['status'] }}</td>
                        </tr>
                        <tr>
                            <th>Créé à</th>
                            <td>{{ date('d/m/Y', strtotime($commande->created_at)) }}</td>
                        </tr>
                        <tr>
                            <th>Nom de Fisher</th>
                            <td>{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</td>
                        </tr>
                        <tr>
                            <th>E-mail</th>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>
                        <tr>
                            <th>TOTAL HT</th>
                            <td>{{ $commande->subtotal . ' €' }}</td>
                        </tr>
                        <tr>
                            <th>TVA (20%)</th>
                            <td>{{ $commande->tax . ' €' }}</td>
                        </tr>
                        <tr>
                            <th>TOTAL TTC</th>
                            <td>{{ $commande->total . ' €' }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        @foreach ($order_items as $item)
            <div class="row">
                <div class="col-md-12">
                    <div id="vos-commandes-items" class="content-target">
                        <h2>Mes Commandes Items</h2>
                        <table class="table-bordered table-flip-scroll cf table-full table">
                            <tr>
                                <th>Type</th>
                                <td>{{ $item->type }}</td>
                            </tr>
                            <tr>
                                <th>No of Copies</th>
                                <td>{{ $item->no_of_copies }}</td>
                            </tr>
                            <tr>
                                <th>Delivery Date</th>
                                <td>{{ $item->date }}</td>
                            </tr>
                            <tr>
                                <th>Charges for this item(without vat*)</th>
                                <td>{{ $item->amount }}</td>
                            </tr>
                            <tr>
                                <th>Files</th>
                                <td>
                                    @if ($item->files && json_decode($item->files))
                                        @foreach (json_decode($item->files) as $i => $file)
                                            <a href="{{ $file }}" download> File {{ $i + 1 }} </a>
                                        @endforeach
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="https://js.stripe.com/v3/"></script>
@stop
