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
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action"
                           id="gennaio" data-toggle="tab" href="#list-gennaio"
                           role="tab" aria-controls="list-gennaio" aria-expanded="false"
                           aria-selected="false">Gennaio</a>
                        <a class="list-group-item list-group-item-action active show"
                           id="febbraio" data-toggle="tab" href="#list-febbraio"
                           role="tab" aria-controls="list-febbraio" aria-expanded="true"
                           aria-selected="true">Febbraio</a>
                        <a class="list-group-item list-group-item-action"
                           id="marzo" data-toggle="tab" href="#list-marzo"
                           role="tab" aria-controls="list-marzo" aria-expanded="false"
                           aria-selected="false">Marzo</a>
                        <a class="list-group-item list-group-item-action"
                           id="aprile" data-toggle="tab" href="#list-aprile"
                           role="tab" aria-controls="list-aprile" aria-expanded="false"
                           aria-selected="false">Aprile</a>
                        <a class="list-group-item list-group-item-action"
                           id="maggio" data-toggle="tab" href="#list-maggio"
                           role="tab" aria-controls="list-maggio" aria-expanded="false"
                           aria-selected="false">Maggio</a>
                        <a class="list-group-item list-group-item-action"
                           id="giugno" data-toggle="tab" href="#list-giugno"
                           role="tab" aria-controls="list-giugno" aria-expanded="false"
                           aria-selected="false">Giugno</a>
                        <a class="list-group-item list-group-item-action"
                           id="luglio" data-toggle="tab" href="#list-luglio"
                           role="tab" aria-controls="list-luglio" aria-expanded="false"
                           aria-selected="false">Luglio</a>
                        <a class="list-group-item list-group-item-action"
                           id="agosto" data-toggle="tab" href="#list-agosto"
                           role="tab" aria-controls="list-agosto" aria-expanded="false"
                           aria-selected="false">Agosto</a>
                        <a class="list-group-item list-group-item-action"
                           id="settembre" data-toggle="tab" href="#list-settembre"
                           role="tab" aria-controls="list-settembre" aria-expanded="false"
                           aria-selected="false">Settembre</a>
                        <a class="list-group-item list-group-item-action"
                           id="ottobre" data-toggle="tab" href="#list-ottobre"
                           role="tab" aria-controls="list-ottobre" aria-expanded="false"
                           aria-selected="false">Ottobre</a>
                        <a class="list-group-item list-group-item-action"
                           id="novembre" data-toggle="tab" href="#list-novembre"
                           role="tab" aria-controls="list-novembre" aria-expanded="false"
                           aria-selected="false">Novembre</a>
                        <a class="list-group-item list-group-item-action"
                           id="dicembre" data-toggle="tab" href="#list-dicembre"
                           role="tab" aria-controls="list-dicembre" aria-expanded="false"
                           aria-selected="false">Dicembre</a></br>
                    </div>
                </div>
                <div class="col-md-9 col-xs-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade" id="list-gennaio"
                             role="tabpanel" aria-labelledby="list-gennaio-list"
                             aria-expanded="false">
                            <p>Visita questa sezione in futuro!</p>

                        </div>
                        <div class="tab-pane fade active show" id="list-febbraio" role="tabpanel"
                             aria-labelledby="list-febbraio-list" aria-expanded="true">
                            <h4>Febbraio - Offerte Voli + Hotel (prezzi a persona tasse incluse) da Palermo</h4>
                            <p><span class="badge bg-primary">New</span> <b>Madrid</b> dal 19/02 al 22/02 - 3 notti da <b>€100</b> <a class="btn btn-primary btn-sm" onclick=" window.open('https://viagginvidia.it/go/GEh7K','_blank')"><i class="fas fa-shopping-cart"></i> Prenota Adesso</a>
                            <p><span class="badge bg-primary">New</span> <b>Budapest</b> dal 17/02 al 20/02 - 3 notti da <b>€100</b> <a class="btn btn-primary btn-sm" onclick=" window.open('https://viagginvidia.it/go/sMIBI','_blank')"><i class="fas fa-shopping-cart"></i> Prenota Adesso</a>
                            <p><span class="badge bg-primary">New</span> <b>Cracovia</b> dal 19/02 al 22/02 - 3 notti da <b>€70</b> <a class="btn btn-primary btn-sm" onclick=" window.open('https://viagginvidia.it/go/cYII1','_blank')"><i class="fas fa-shopping-cart"></i> Prenota Adesso</a>
                            <p><span class="badge bg-primary">New</span> <b>Siviglia</b> dal 19/02 al 22/02 - 3 notti da <b>€120</b> <a class="btn btn-primary btn-sm" onclick=" window.open('https://viagginvidia.it/go/KsUo3','_blank')"><i class="fas fa-shopping-cart"></i> Prenota Adesso</a>


                        </div>
                        <div class="tab-pane fade" id="list-marzo" role="tabpanel"
                             aria-labelledby="list-marzo-list" aria-expanded="false">
                            <h4>Marzo - Offerte Voli + Hotel (prezzi a persona tasse incluse) da Palermo</h4>

                            <p><span class="badge bg-primary">New</span> <b>Siviglia</b> dal 12/03 al 15/03 - 3 notti da <b>€140</b> <a class="btn btn-primary btn-sm" onclick=" window.open('https://viagginvidia.it/go/kLgul','_blank')"><i class="fas fa-shopping-cart"></i> Prenota Adesso</a>
                            <p><span class="badge bg-primary">New</span> <b>Madrid </b> dal 05/03 al 08/03 - 3 notti da <b>€170</b> <a class="btn btn-primary btn-sm" onclick=" window.open('https://viagginvidia.it/go/S87Yu','_blank')"><i class="fas fa-shopping-cart"></i> Prenota Adesso</a></p>
                            <p><span class="badge bg-primary">New</span> <b>Valencia</b> dal' 08/03 al 15/03 - 7 notti da <b>€240</b> <a class="btn btn-primary btn-sm" onclick=" window.open('https://viagginvidia.it/go/TwDrk','_blank')"><i class="fas fa-shopping-cart"></i> Prenota Adesso</a></p>
                            <p><span class="badge bg-primary">New</span> <b>Barcellona</b> dal 03/03 al 08/03 - 5 notti da <b>€200</b> <a class="btn btn-primary btn-sm" onclick=" window.open('https://viagginvidia.it/go/Ue5vT','_blank')"><i class="fas fa-shopping-cart"></i> Prenota Adesso</a></p>

                        </div>
                        <div class="tab-pane fade" id="list-aprile" role="tabpanel"
                             aria-labelledby="list-aprile-list" aria-expanded="false">
                            <h4>Aprile - Offerte Voli + Hotel (prezzi a persona tasse incluse) da Palermo</h4>

                            <p>In Arrivo... Resta sintonizzato!</p>

                        </div>
                        <div class="tab-pane fade" id="list-maggio" role="tabpanel"
                             aria-labelledby="list-maggio-list" aria-expanded="false">
                            <h4>Maggio - Offerte Voli + Hotel (prezzi a persona tasse incluse) da Palermo</h4>
                            <p>In Arrivo... Resta sintonizzato!</p>
                        </div>
                        <div class="tab-pane fade" id="list-giugno" role="tabpanel"
                             aria-labelledby="list-giugno-list" aria-expanded="false">
                            <h4>Giugno - Offerte Voli + Hotel (prezzi a persona tasse incluse) da Palermo</h4>
                            <p>In Arrivo... Resta sintonizzato!</p>
                        </div>
                        <div class="tab-pane fade" id="list-luglio" role="tabpanel"
                             aria-labelledby="list-luglio-list" aria-expanded="false">
                            <h4>Luglio - Offerte Voli + Hotel (prezzi a persona tasse incluse) da Palermo</h4>
                            <p>In Arrivo... Resta sintonizzato!</p>
                        </div>
                        <div class="tab-pane fade" id="list-agosto" role="tabpanel"
                             aria-labelledby="list-agosto-list" aria-expanded="false">
                            <h4>Agosto - Offerte Voli + Hotel (prezzi a persona tasse incluse) da Palermo</h4>
                            <p>In Arrivo... Resta sintonizzato!</p>
                        </div>
                        <div class="tab-pane fade" id="list-settembre" role="tabpanel"
                             aria-labelledby="list-settembre-list" aria-expanded="false">
                            <h4>Settembre - OOfferte Voli + Hotel (prezzi a persona tasse incluse) da Palermo</h4>
                            <p>In Arrivo... Resta sintonizzato!</p>

                        </div>
                        <div class="tab-pane fade" id="list-ottobre" role="tabpanel"
                             aria-labelledby="list-ottobre-list" aria-expanded="false">
                            <h4>Ottobre - Offerte Voli + Hotel (prezzi a persona)</h4>
                            <p>In Arrivo... Resta sintonizzato!</p>
                        </div>
                        <div class="tab-pane fade" id="list-novembre" role="tabpanel"
                             aria-labelledby="list-novembre-list" aria-expanded="false">
                            <h4>Novembre - Offerte Voli + Hotel (prezzi a persona tasse incluse) da Palermo</h4>
                            <p>In Arrivo... Resta sintonizzato!</p>
                        </div>
                        <div class="tab-pane fade" id="list-dicembre" role="tabpanel"
                             aria-labelledby="list-dicembre-list" aria-expanded="false">
                            <h4>Dicembre - Offerte Voli + Hotel (prezzi a persona tasse incluse) da Palermo</h4>
                            <p>In Arrivo... Resta sintonizzato!</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
