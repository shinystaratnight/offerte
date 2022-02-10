@extends('layouts.default')

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
            <div class="mx-5 px-5 pt-5">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('store')}}" method="post">
                    @csrf
                    <div class="mb-4 row">
                        <label for="departure" class="col-sm-2 col-form-label">Departure From</label>
                        <div class="col-sm-10">
                            <select class="form-select"
                                    name="departure"
                                    value="{{ old('departure') }}"
                                    id="departure"
                                    aria-label="Default select example">
                                @foreach(['palermo', 'catalina', 'roma', 'milano'] as $city)
                                    @if ($city == old('departure'))
                                        <option value="{{$city}}" selected>{{ucfirst($city)}}</option>
                                    @else
                                        <option value="{{$city}}">{{ucfirst($city)}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label for="category" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                                   name="category"
                                   id="category"
                                   value="{{ old('category') }}">
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label for="destination" class="col-sm-2 col-form-label">Destination</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                                   name="destination"
                                   value="{{ old('destination') }}"
                                   id="destination">
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label for="from" class="col-sm-2 col-form-label">From</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                                   name="from"
                                   id="from"
                                   value="{{ old('from') }}">
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label for="to" class="col-sm-2 col-form-label">To</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                                   name="to"
                                   id="to"
                                   value="{{ old('to') }}">
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label for="price" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control"
                                   name="price"
                                   id="price"
                                   value="{{ old('price') }}">
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label for="link" class="col-sm-2 col-form-label">Link</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                                   name="link"
                                   id="link"
                                   value="{{ old('link') }}">
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <div class="col-sm-10 offset-sm-2 form-check">
                            <input type="checkbox" class="form-check-input ms-0"
                                   name="hot"
                                   id="hot">
                            <label class="form-check-label ms-2" for="hot">Hot?</label>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@stop
