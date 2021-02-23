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
                                    <tr>
                                        <td class="checkbox-column"> 1 </td>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>johndoe@yahoo.com</td>
                                        <td>Beneficiaire</td>
                                        <td><span class="shadow-none badge badge-primary">Appouvée</span></td>
                                        <td class="text-center">
                                            <div class="dropdown custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                    <a class="dropdown-item" href="javascript:void(0);">Voir</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Editer</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Supprimer</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox-column"> 2 </td>
                                        <td>Andy</td>
                                        <td>King</td>
                                        <td>andyking@gmail.com</td>
                                        <td>Beneficiaire</td>
                                        <td><span class="shadow-none badge badge-warning">En attente</span></td>
                                        <td class="text-center">
                                            <div class="dropdown custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                    <a class="dropdown-item" href="javascript:void(0);">Voir</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Editer</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Supprimer</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="checkbox-column"> 3 </td>
                                        <td>Lisa</td>
                                        <td>Doe</td>
                                        <td>lisadoe@live.com</td>
                                        <td>Beneficiaire</td>
                                        <td><span class="shadow-none badge badge-danger">Suspendue</span></td>
                                        <td class="text-center">
                                            <div class="dropdown custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                    <a class="dropdown-item" href="javascript:void(0);">Voir</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Editer</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Supprimer</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
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
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un invité</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
               </button>
            </div>
            <div class="modal-body">
                <p class="modal-text">Remplire le formulaire </p>

                <div class="col-md-12 mb-4">

                    <label for="nom">Nom de l'invités</label>
                    <input type="text" name="nom" class="form-control mb-3" id="nom" placeholder="Entrer Nom de l'invités" value="" required>
                    <div class="invalid-feedback">
                        Please fill the name
                    </div>




                    <label for="prenom">Prenom de l'invités</label>
                    <input type="text" name="prenom" class="form-control mb-3" id="prenom" placeholder="Entrer Prenom de l'invités" value="" required>
                    <div class="invalid-feedback">
                        Please fill the name
                    </div>


                    <label for="email">Adresse email de l'invités</label>
                    <input type="text" name="email" class="form-control mb-3" id="email" placeholder="Entrer Adresse email de l'invités" value="" required>
                    <div class="invalid-feedback">
                        Please fill the name
                    </div>


                    <label for="telephone">Numéro de Téléphone de l'invités</label>
                    <input type="text" name="telephone" class="form-control mb-3" id="telephone" placeholder="Entrer Numéro de Téléphone de l'invités" value="" required>
                    <div class="invalid-feedback">
                        Please fill the name
                    </div>




                </div>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Annuller</button>
                <button type="button" class="btn btn-success">Sauvegarder</button>
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