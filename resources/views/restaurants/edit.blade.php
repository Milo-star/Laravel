@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

   <h1>Modifier le restaurant "{{ $restaurant->name }}"</h1>

    <form action="{{ route('restaurants.update', ['id' => $restaurant->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $restaurant->id }}">

        <div class="form-group">
            <label for="name">Nom du restaurant</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $restaurant->name }}">
        </div>

        <div class="form-group">
            <label for="address">Adresse</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $restaurant->address }}">
        </div>

        <div class="form-group">
            <label for="zipCode">Code postal</label>
            <input type="text" class="form-control" id="zipCode" name="zipCode" value="{{ $restaurant->zipCode }}">
        </div>

        <div class="form-group">
            <label for="town">Ville</label>
            <input type="text" class="form-control" id="town" name="town" value="{{ $restaurant->town }}">
        </div>

        <div class="form-group">
            <label for="country">Pays</label>
            <input type="text" class="form-control" id="country" name="country" value="{{ $restaurant->country }}">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $restaurant->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="review">Note</label>
            <input type="text" class="form-control" id="review" name="review" value="{{ $restaurant->review }}">
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>