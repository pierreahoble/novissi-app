@extends('layout.baseClient')

@section('style')
<!--  BEGIN CUSTOM STYLE FILE  -->
<link rel="stylesheet" type="text/css" href="{{asset('plugins/dropify/dropify.min.css')}}">
<link href="{{asset('assets/css/users/account-setting.css')}}" rel="stylesheet" type="text/css" />
<!--  END CUSTOM STYLE FILE  -->
@endsection




@section('contenu') 


<div class="container">

    <div class="row layout-top-spacing">

        <div id="basic" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Detail de la  collecte</h4>
                        </div>
                    </div>
                </div>



                <div class="widget-content widget-content-area">
                    <ul class="list-group">
                        <li class="list-group-item">Objet : {{$collecte->objet}}</li>
                        <li class="list-group-item">Montant : {{$collecte->montant}}</li>
                        <li class="list-group-item">Bénéficiaire : {{$collecte->beneficiaire}}</li>
                        <li class="list-group-item">Date début : {{$collecte->datedebut}}</li>
                        <li class="list-group-item">Date fin : {{$collecte->datefin}}</li>
                      </ul>
                </div>


            </div>
        </div>

    </div>
</div>







@endsection



@section( 'script')
<script src="{{asset('assets/js/custom.js')}}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!--  BEGIN CUSTOM SCRIPTS FILE  -->

<script src="{{asset('plugins/dropify/dropify.min.js')}}"></script>
<script src="{{asset('plugins/blockui/jquery.blockUI.min.js')}}"></script>
<!-- <script src="plugins/tagInput/tags-input.js"></script> -->
<script src="{{asset('assets/js/users/account-settings.js')}}"></script>
<!--  END CUSTOM SCRIPTS FILE  -->

@endsection