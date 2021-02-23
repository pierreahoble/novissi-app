<div class="container">



    <div >
   

        <div class="row layout-top-spacing">
    
            <div id="basic" class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Ajouter une catégorie</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form class="simple-example" wire:submit.prevent="addCategorie">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-12 mb-4">
    
                                    <label for="objet">Libelle Catégorie</label>
                                    <input type="text" wire:model="categorie" class="form-control mb-3" id="objet" placeholder="Entrer Objet de la collecte" value="" required>
                                    @error('categorie') <span class="error text-danger">{{ $message }}</span> @enderror
                            
    
    
    
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
