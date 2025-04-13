<?php

namespace App\Http\Controllers;

use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;

class UserAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the user's address information.
     */
    public function update(Request $request)
    {
        $newAddress = $request->input();
        $userId = auth()->id();

        $request->validate([
            'cep' => ['required', 'string', 'min:8', 'max:8'],
            'logradouro' => ['required', 'string', 'max:255'],
            'numero' => ['required', 'string', 'max:255'],
            'bairro' => ['required', 'string', 'max:255'],
            'cidade' => ['required', 'string', 'max:255'],
            'estado' => ['required', 'string', 'max:255'],
        ]);

        $endereco = UserAddress::where('user_id', $userId)->first();

        if ($endereco) {
            $endereco->update([
                'cep'        => $newAddress['cep'],
                'logradouro' => $newAddress['logradouro'],
                'numero'     => $newAddress['numero'],
                'bairro'     => $newAddress['bairro'],
                'cidade'     => $newAddress['cidade'],
                'estado'     => $newAddress['estado'],
            ]);
            $endereco->save();
        }

        return Redirect::route('profile.edit')->with('status', 'address-updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
