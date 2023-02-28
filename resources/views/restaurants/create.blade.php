<form method="POST" action="/restaurants">
    @csrf
    <div class="form-group">
        <label for="name">Nom</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>

    <div class="form-group">
        <label for="address">Adresse</label>
        <input type="text" class="form-control" id="address" name="address">
    </div>

    <div class="form-group">
        <label for="zipCode">Code postal</label>
        <input type="text" class="form-control" id="zipCode" name="zipCode">
    </div>

    <div class="form-group">
        <label for="town">Ville</label>
        <input type="text" class="form-control" id="town" name="town">
    </div>

    <div class="form-group">
        <label for="country">Pays</label>
        <input type="text" class="form-control" id="country" name="country">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description"></textarea>
    </div>

    <div class="form-group">
        <label for="review">Avis</label>
        <input type="number" class="form-control" id="review" name="review">
    </div>

    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
