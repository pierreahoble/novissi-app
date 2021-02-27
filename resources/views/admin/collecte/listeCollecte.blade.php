@extends('layout.base') @section('style')

<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/custom_dt_miscellaneous.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/theme-checkbox-radio.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/dt-global_style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/custom_dt_custom.css')}}">
<!-- END PAGE LEVEL STYLES -->
@endsection @section('contenu')


    <div class="container">

        <div class="row layout-top-spacing">

            <div id="basic" class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Liste des collectes</h4>
                            </div>
                        </div>
                    </div>



                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4">
                            <table id="column-filter" class="table">
                                <thead>
                                    <tr>
                                        <th class="checkbox-column"> Record No. </th>
                                        <th>Objet</th>
                                        <th>Categories</th>
                                        <th>Montant</th>
                                        <th>Beneficiaire</th>
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($collectes as $collecte)
                                    <tr>
                                        <td class="checkbox-column"> 1 </td>
                                        <td>{{$collecte->objet}}</td>
                                        <td>{{$collecte->categorie->libelle}}</td>
                                        <td>{{$collecte->montant}} FCFA</td>
                                        <td>{{$collecte->beneficiaire}} </td>
                                        <td>
                                            @if ($collecte->status==1)
                                            <span class="shadow-none badge badge-primary">Appouvée</span>
                                            @elseif ($collecte->status==2)
                                            <span class="shadow-none badge badge-danger">Suspendue</span>
                                            @elseif ($collecte->status==0)
                                            <span class="shadow-none badge badge-warning">En attente</span>
                                            @endif
                                           
                                        </td>
                                        <td class="text-center">
                                            <div class="dropdown custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                    <a class="dropdown-item" href="{{route('detailUser',['id' =>Crypt::encrypt($collecte->id)])}}">Voir</a>
                                                    <a class="dropdown-item" href="#">Editer</a>
                                                    <a class="dropdown-item" href="#">Supprimer</a>
                                                    <a class="dropdown-item" href="{{route('approuve',['id' =>Crypt::encrypt($collecte->id)])}}">Approuvé</a>
                                                    <a class="dropdown-item" href="{{route('suspendre',['id' =>Crypt::encrypt($collecte->id)])}}">Suspendre</a>
                                                    <a class="dropdown-item" href="{{route('attente',['id' =>Crypt::encrypt($collecte->id)])}}">En attente</a>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                        
                                    @endforeach
                                   
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="checkbox-column"></th>
                                        <th>Objet</th>
                                        <th>Categories</th>
                                        <th>Montant</th>
                                        <th>Beneficiaire</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>






@endsection @section('script')



<!-- DataTables French-->
<script src="{{asset('assets/js/dataTable.js')}}"></script>


<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('plugins/table/datatable/datatables.js')}}"></script>
<script src="{{asset('plugins/table/datatable/custom_miscellaneous.js')}}"></script>
<!-- END PAGE LEVEL SCRIPTS -->


<script>
</script>
@endsection