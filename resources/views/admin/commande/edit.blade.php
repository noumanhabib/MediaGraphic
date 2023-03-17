@extends('admin/layouts/default')
@section('title')
    Edit Devis
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
                <li><a href="#" class="active">{{ $data['title'] }}</a>
                </li>
            </ul>
            <div class="page-title"> <i class="icon-custom-left"></i>
                <h3>Tout - <span class="semi-bold">Les {{ $data['title'] }}</span> <mark>(Tableau avec formulaire de recherche ave filtre)</mark></h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="simple grid">
                        <div class="grid-title no-border">
                            <h4>Les commande {{ $data['status'] }}</h4>
                        </div>
                        <div class="grid-body no-border">
                            <table class="table-striped table-flip-scroll cf table">
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
                                    <td>{{ $commande->user->first_name . ' ' . $commande->user->last_name }}</td>
                                </tr>
                                <tr>
                                    <th>E-mail</th>
                                    <td>{{ $commande->user->email }}</td>
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
                            <div class="row">
                                <div class="col-md-12">&nbsp;</div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    @if ($commande->status == 0)
                                        <a onclick=" return confirm('Are you want to change status');" href="{{ url('admin/commande/status/1/' . $commande->id) }}">
                                            <button class="btn btn-priamry">En cours</button>
                                        </a>
                                    @elseif($commande->status == 1)
                                        <a onclick=" return confirm('Are you want to change status');" href="{{ url('admin/commande/status/2/' . $commande->id) }}">
                                            <button class="btn btn-priamry">Envoye</button>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                                    @if ($item->print_details && json_decode($item->print_details))
                                        @foreach (json_decode($item->print_details) as $key => $value)
                                            <tr>
                                                <th>{{ $key }}</th>
                                                <td>
                                                    {{ is_array($value) ? join(', ', $value) : $value }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>
                @endforeach
            </section>
        </div>
        <!-- END PAGE -->
    </div>


@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script>
        function taxcalculate() {
            var ht = jQuery('#ht').val();
            /**include tax **/
            ttc = parseFloat(ht) + parseFloat(ht * 20 / 100);
            jQuery('#ttc').val(ttc);
            return true;
        }
    </script>
@stop
