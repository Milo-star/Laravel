<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function index()
    {
        return view('restaurants.index', ['restaurants' => Restaurant::latest()->get()]);

    }

    public function show($id)
    {
        // Récupérer le restaurant correspondant à l'ID donné
        $restaurant = Restaurant::find($id);

        // Vérifier si le restaurant existe
        if (!$restaurant) {
            abort(404);
        }

        // Passer le restaurant à la vue show.blade.php
        return view('restaurants.show', ['restaurant' => $restaurant]);
    }

    public function create()
    {
        return view('restaurants.create');
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required',
            'zipCode' => 'required|numeric',
            'town' => 'required',
            'country' => 'required',
            'description' => 'required',
            'review' => 'required|numeric',
        ]);

        // Créer un nouveau restaurant à partir des données soumises
        $restaurant = new Restaurant();
        $restaurant->name = $validatedData['name'];
        $restaurant->address = $validatedData['address'];
        $restaurant->zipCode = $validatedData['zipCode'];
        $restaurant->town = $validatedData['town'];
        $restaurant->country = $validatedData['country'];
        $restaurant->description = $validatedData['description'];
        $restaurant->review = $validatedData['review'];
        $restaurant->save();

    }

}