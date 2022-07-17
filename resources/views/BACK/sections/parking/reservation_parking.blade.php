@extends('index')

@section('contenu')


<div class="content-header sty-one">
  <h1>Gestion Parking</h1>
</div>


<div>
  <form class="form-horizontal ">
<div class="row m-t-6">
  <div class="col-md-6">
    
    <div class="form-body">
      <div class="form-group row">
        <label class="control-label text-right col-md-3">Prénom</label>
        <div class="col-md-9">
          <input placeholder="Prénom" class="form-control" type="text">
          </div>
      </div>
      <div class="form-group row">
        <label class="control-label text-right col-md-3">Nom</label>
        <div class="col-md-9">
          <input placeholder="Nom" class="form-control" type="text">
          </div>
      </div>
      <div class="form-group row">
        <label class="control-label text-right col-md-3">Date de naissance</label>
        <div class="col-md-9">
          <input class="form-control" placeholder="dd/mm/yyyy" type="date">
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label text-right col-md-3">Numéro de télephone</label>
        <div class="col-md-9">
          <input class="form-control" type="text">
        </div>
      </div>
    </div>
</div>



<div class="col-md-6 m-t-3">
    
  <div class="form-body">
    <div class="form-group row">
      <label class="control-label text-right col-md-3">Type de véhicule</label>
      <div class="col-md-6">
        <select class="form-control custom-select">
          <option value="">Véhicules coupés</option>
          <option value="">Voitures berlines</option>
          <option value="">Véhicules hayons</option>
          <option value="">Voitures de type break</option>
          <option value="">Limousines</option>
          <option value="">Pick-up</option>
          <option value="">Crossovers</option>
          <option value="">SUV</option>
          <option value="">fourgonnettes</option>
          <option value="">mini-fourgonnettes</option>
          <option value="">Carrosserie liftback</option>
          <option value=""> Voitures cabriolets</option>
          <option value="">Minibus</option>
          <option value="">Roadsters</option>
          <option value="">targa</option>
        </select>
        </div>
    </div>
    <div class="form-group row">
      <label class="control-label text-right col-md-3">Du</label>
     
      <div class="col-md-6">
        <input class="form-control" placeholder="dd/mm/yyyy" type="datetime-local">
      </div>
  
    </div>
    <div class="form-group row">
      <label class="control-label text-right col-md-3">Au</label>
     
        <div class="col-md-6">
        <input class="form-control" placeholder="dd/mm/yyyy" type="datetime-local">
      </div>
  
    </div>
    


  </div>

  
  <div class="form-group row m-b-0">
    <div class="offset-sm-3 col-sm-9">
      <button type="submit" class="btn btn-success waves-effect waves-light">Réserver</button>
    </div>
  </div>
</div>

</div>

  </form>

<div class="m-t-6 m-r-6 m-l-6">
  <div class="info-box">
    <h4 class="text-black">Liste Réservation</h4>
  
    <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover" data-name="cool-table">
                  <thead>
                    <tr>
                      <th>ID #</th>
                      <th>Réservé par</th>
                      <th>Num Réserveur</th>
                      <th>Type vehicule</th>
                      <th>Statut</th>
                      <th>Debut Reservation</th>
                      <th>Fin Réservation</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1001</td>
                      <td>Alexander</td>
                      <td>77 247 77 30</td>
                      <td>Sed cursus dapibus diam</td>
                      <td><span class="label label-success">Complete</span></td>
                      <td>Pierce Sr.</td>
                      <td>03-10-2017</td>
                    </tr>
                    <tr>
                      <td>1010</td>
                      <td>John Deo</td>
                      <td>77 541 22 11</td>
                      <td>Sed cursus dapibus diam</td>
                      <td><span class="label label-success">Complete</span></td>
                      <td>Alexander</td>
                      <td>02-10-2017</td>
                    </tr>
                    <tr>
                      <td>1015</td>
                      <td>Alexa Rose</td>
                      <td>77 111 25 55</td>
                      <td>Sed cursus dapibus diam</td>
                      <td><span class="label label-warning">New</span></td>
                      <td>Alex Sr.deo</td>
                      <td>01-10-2017</td>
                    </tr>
                    <tr>
                      <td>1120</td>
                      <td>Sr. Alex Dc</td>
                      <td>77 551 55 22</td>
                      <td>Sed cursus dapibus diam</td>
                      <td><span class="label label-success">Complete</span></td>
                      <td>Alex Sr.deo</td>
                      <td>29-09-2017</td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>ID #</th>
                      <th>Réservé par</th>
                      <th>Num Réserveur</th>
                      <th>Type vehicule</th>
                      <th>Statut</th>
                      <th>Debut Reservation</th>
                      <th>Fin Réservation</th>
                    </tr>
                  </tfoot>
                </table>
                </div>
    </div>
</div>

  
</div>


@endsection