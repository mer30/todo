@extends('partials.bodywithoutsidenav')

@section('content')

    <div class="container" style="margin-top: 100px">
        <div class="row text-center">
            <div id="brandintro" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <div class="pull-right">
                            <a href="#createproject" class="btn btn-sm btn-green" data-toggle="model"><i class ="fa fa-plus"></i>&nbsp; New Project</a>

                        </div>
                    </div>

                </div>




                <div class="table-responsive">
                    <table class="table-hover table-condensed">

                        <thead>
                        <tr class ="text-capitalize roboto">
                            <th>id</th>
                            <th>Nom</th>
                            <th>Auteur</th>
                            <th>Taches</th>
                            <th>Cree</th>
                            <th>A jour</th>
                            <th>Echeance</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>

                        </thead>





                    </table>


                </div>





            </div>
        </div>
    </div>

@stop