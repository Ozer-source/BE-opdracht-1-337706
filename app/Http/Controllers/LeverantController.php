<?php

namespace App\Http\Controllers;

use App\Models\LeverantModel;
use Illuminate\Http\Request;

class LeverantController extends Controller
{
    private $leverantModel;

    public function __construct()
    {
        $this->leverantModel = new LeverantModel();
    }
    public function index($id)
    {
        // gebruik het id uit de URL
        $leverancier = $this->leverantModel->sp_GetLeverantieInfo($id);
        $leverant = $this->leverantModel->sp_GetLeverancierInfo($id);

        return view('product.leverantieInfo', [
            'title' => 'Leverings Informatie',
            'Leverancier' => $leverancier,
            'leverant' => $leverant
        ]);
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
    public function show(LeverantModel $leverantModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LeverantModel $leverantModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LeverantModel $leverantModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LeverantModel $leverantModel)
    {
        //
    }
}
