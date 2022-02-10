@extends('layouts.admin')

@section('content')
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="mb-3 d-flex justify-content-end">
                <a href="{{route('create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> New Offer</a>
                <button type="button" class="btn btn-success ms-3"><i class="fas fa-copy"></i> Copy</button>
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
                                                    <input type="checkbox"
                                                           class="form-check-input ms-0"
                                                           data-id="{{$offer->id}}">
                                                </td>
                                                <td>
                                                    @if ($offer->hot)
                                                        <span class="badge bg-danger">Hot</span>
                                                    @endif

                                                    @if (now()->diffInDays(\Carbon\Carbon::parse($offer->created_at)) <= 2)
                                                        <span class="badge bg-primary">New</span>
                                                    @endif
                                                    <b class="destination">{{ $offer->destination }}</b>
                                                    <span class="content">
                                                        dal {{ \Carbon\Carbon::parse($offer->from)->format('d/m') }} al {{ \Carbon\Carbon::parse($offer->to)->format('d/m') }}
                                                    </span>
                                                    - {{ \Carbon\Carbon::parse($offer->to)->diffInDays(\Carbon\Carbon::parse($offer->from))}} notti da <b>€{{ $offer->price }}</b>

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

    <script>
        var $ = jQuery;
        $('input:checkbox').click(function () {
            var $table = $(this).closest('.table');
            $table.find('input[type=checkbox]').each(function () {

            });
            console.log($(this));
        });
    </script>
@stop
