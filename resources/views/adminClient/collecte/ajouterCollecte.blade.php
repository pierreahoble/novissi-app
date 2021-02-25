@extends('layout.baseClient')
 
@section('style')
<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css">
<!--  END CUSTOM STYLE FILE  -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{asset('plugins/animate/animate.css')}}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN THEME GLOBAL STYLES -->
<link href="{{asset('plugins/flatpickr/flatpickr.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('plugins/noUiSlider/nouislider.min.css')}}" rel="stylesheet" type="text/css">
<!-- END THEME GLOBAL STYLES -->

@endsection


@section('contenu')


<div class="container">
   <div class="container">

       {{--
       <div id="navSection" data-spy="affix" class="nav  sidenav mb-5">
           <div class="sidenav-content ">

           </div>
       </div> --}}


       <div class="col-md-12 mb-3 text-right">
           <button type="button" class="btn btn-primary mb-1 mt-4" data-toggle="modal" data-target="#exampleModal">Ajouter un invité</button>
       </div>

      
       <div class="row layout-top-spacing">

        <div id="basic" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Ajouter une collecte</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form class="simple-example" action="{{url('ajouterCollecte')}}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-12 mb-4">

                                <label for="objet">Objet de la collecte</label>
                                <input type="text" name="objet" value="{{old('objet')}}" class="form-control mb-3" id="objet" placeholder="Entrer Objet de la collecte" required> @error('objet') <span class="error text-danger">{{ $message }}</span>                                    @enderror


                                <label for="categorie">Catégorie de la collecte</label>
                                <select name="categorie" class="custom-select mb-3">
                                    <option value=""  >Choisir une catégorie</option>
                                    @foreach ($categories as $categorie)
                                    <option value="{{$categorie->id}}">{{$categorie->libelle}}</option>
                                    @endforeach
                                </select>


                                <div>

                                    <label for="montant">Montant total à financer</label>
                                    <input type="number" name="montant" value="{{old('montant')}}" class="form-control mb-3" id="montant" placeholder="Entrer Montant total à financer" required> @error('montant') <span class="error text-danger">{{ $message }}</span>                                        @enderror
                                </div>



                                <div>

                                    <label for="basicFlatpickr">Date début de la collecte</label>
                                    <input type="text" name="datedebut" value="{{old('datedebut')}}" class="form-control flatpickr flatpickr-input active mb-3" id="basicFlatpickr" placeholder="Entrer Date de debut de la collecte" required readonly="readonly">                                        @error('datedebut') <span class="error text-danger">{{ $message }}</span> @enderror
                                </div>


                                <label for="basicFlatpickrz">Date fin de la collecte</label>
                                <input type="text" name="datefin" value="{{old('datefin')}}" class="form-control flatpickr flatpickr-input active mb-3" id="basicFlatpickrz" placeholder="Entrer Date de fin de la collecte" required readonly="readonly">                                    @error('datefin') <span class="error text-danger">{{ $message }}</span> @enderror


                                <div>
                                    <label for="beneficiaire">Bénéficiaire de la collecte</label>
                                    <input type="text" name="beneficiaire" value="{{old('beneficiaire')}}" class="form-control mb-3" id="beneficiaire" placeholder="Entrer Le Bénéficiaire de la collecte" required> @error('beneficiaire') <span class="error text-danger">{{ $message }}</span>                                        @enderror

                                </div>



                                <label for="liste"> La liste des invités</label>

                                <div>
                                    <select name="liste[]" id="liste" required class="form-control tagging mb-3" multiple>
                                        <option value="">Choisir les invités</option>
                                        @foreach ($invites as $invite)
                                        <option value="{{$invite->id}}">{{$invite->nom}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- @error('liste') <span class="error text-danger">{{ $message }}</span> @enderror --}} {{--
                                <div wire:ignore>
                                    <label for="data">Catégorie de la collecte</label>
                                    <select wire:model="data" id="select2" name="data[]" class="custom-select  mb-3" multiple>
                                        <option  >Choisir une catégorie</option>
                                        @foreach ($categories as $categorie)
                                        <option aria-valuenow="{{$categorie->id}}">{{$categorie->libelle}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                --}}




                            </div>
                        </div>
                        <button class="btn btn-success submit-fn mt-2" type="submit">Sauvegarder</button>
                    </form>

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



@endsection



@section('script')


<!--  BEGIN CUSTOM SCRIPTS FILE  -->
<script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
<script src="{{asset('plugins/select2/select2.min.js')}}"></script>
{{--
<script src="{{asset('plugins/select2/custom-select2.js')}}"></script> --}}
<!--  BEGIN CUSTOM SCRIPTS FILE  -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
<script src="{{asset('plugins/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('plugins/noUiSlider/nouislider.min.js')}}"></script>

{{--
<script src="plugins/flatpickr/custom-flatpickr.js"></script> --}} {{--
<script src="plugins/noUiSlider/custom-nouiSlider.js"></script> --}} {{--
<script src="plugins/bootstrap-range-Slider/bootstrap-rangeSlider.js"></script> --}}
<!-- END PAGE LEVEL SCRIPTS -->

<script>
   var f1 = flatpickr(document.getElementById('basicFlatpickr'));
   var f2 = flatpickr(document.getElementById('basicFlatpickrz'));
   $(".tagging").select2({
       tags: true
   });
</script>
@endsection