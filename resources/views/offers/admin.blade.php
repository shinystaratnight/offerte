@extends('layouts.admin')

@section('content')
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="alert alert-primary d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-info-circle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Info:">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                </svg>
                <div>
                    Tutte le offerte sono soggette a disponibilità e a varazione di prezzo. Tutti i prezzi sono da intendersi <b>volo e hotel per persona tasse incluse</b>. Nella fase di prenotazione il prezzo visualizzato è per una coppia. Il pacchetto è comunque configurabile e personalizzabile in tutte le sue parti.  </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="list-group" id="list-tab" role="tablist">
                        @for ($m = 1; $m <= 12; $m++)
                            <a class="list-group-item list-group-item-action {{$m == $month ? 'active show' : ''}}"
                               id="{{$month_names[$m]}}" data-toggle="tab" href="#list-{{$month_names[$m]}}"
                               role="tab" aria-controls="list-{{$month_names[$m]}}" aria-expanded="{{$m == $month}}"
                               aria-selected="{{$m == $month}}">{{ucfirst($month_names[$m])}}</a>
                        @endfor
                    </div>
                </div>
                <div class="col-md-9 col-xs-12">
                    <div class="tab-content" id="nav-tabContent">
                        @for ($m = 1; $m <= 12; $m++)
                            <div class="tab-pane fade {{$m == $month ? 'active show' : ''}}" id="list-{{$month_names[$m]}}"
                                 role="tabpanel" aria-labelledby="list-{{$month_names[$m]}}-list"
                                 aria-expanded="{{$m == $month}}">
                                <h4 class="mt-1 mb-3 text-center">
                                    {{ucfirst($month_names[$m])}} - Offerte Voli + Hotel (prezzi a persona tasse incluse) da
                                    {{ucfirst($departure)}}
                                </h4>
                                <table class="table table-hover">
                                    <tbody>
                                    @if(count($offers[$m]) > 0)
                                        @foreach($offers[$m] as $offer)
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="form-check-input ms-0"
                                                           name="hot">
                                                </td>
                                                <td>
                                                    @if ($offer->hot)
                                                        <span class="badge bg-danger">Hot</span>
                                                    @endif

                                                    @if (now()->diffInDays(\Carbon\Carbon::parse($offer->created_at)) <= 2)
                                                        <span class="badge bg-primary">New</span>
                                                    @endif
                                                    <b>{{ $offer->destination }}</b>
                                                    dal {{ \Carbon\Carbon::parse($offer->from)->format('d/m') }} al {{ \Carbon\Carbon::parse($offer->to)->format('d/m') }}
                                                    - {{ \Carbon\Carbon::parse($offer->to)->diffInDays(\Carbon\Carbon::parse($offer->from))}} notti da <b>€{{ $offer->price }}
                                                        <a class="btn btn-primary btn-sm" onclick="window.open('{{$offer->link}}', '_blank')">
                                                            <i class="fas fa-shopping-cart"></i> Prenota Adesso
                                                        </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td class="text-center">
                                                No offer exists
                                            </td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center mt-4">
                                    {{ $offers[$m]->links() }}
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
