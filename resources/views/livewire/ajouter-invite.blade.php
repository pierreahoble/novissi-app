<div class="container">


    <div>
       
        <div class="row layout-top-spacing">

            <div id="basic" class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Ajouter un invité</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form class="simple-example" wire:submit.prevent="addInvite">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-12 mb-4">

                            <label for="nom">Nom de l'invités</label>
                            <input type="text" wire:model="nom" class="form-control mb-3" id="nom" placeholder="Entrer Nom de l'invités" required>
                            <div class="">
                                @error('nom') <span class="error text-danger">{{ $message }}</span> @enderror

                            </div>




                            <label for="prenom">Prenom de l'invités</label>
                            <input type="text" wire:model="prenom" class="form-control mb-3" id="prenom" placeholder="Entrer Prenom de l'invités" required>
                            <div class="">
                                @error('prenom') <span class="error text-danger">{{ $message }}</span> @enderror

                            </div>


                            <label for="email">Adresse email de l'invités</label>
                            <input type="email" wire:model="email" class="form-control mb-3" id="email" placeholder="Entrer Adresse email de l'invités" required>
                            <div class="">
                                @error('email') <span class="error text-danger">{{ $message }}</span> @enderror

                            </div>


                            <label for="telephone">Numéro de Téléphone de l'invités</label>
                            <input type="number" wire:model="telephone" class="form-control mb-3" id="telephone" placeholder="Entrer Numéro de Téléphone de l'invités" required>
                            <div class="">
                                @error('telephone') <span class="error text-danger">{{ $message }}</span> @enderror

                            </div>



                                  




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