<?php

namespace App\Http\Controllers;

use App\Models\BusinessCard;
use Illuminate\Http\Request;
use App\Exports\BusinessCardsExport;
use \PDF;

class BusinessCardController extends Controller
{
    // Method to display a list of business cards
    public function index()
    {
        $businessCards = BusinessCard::all();
        return view('business_cards.index', ['businessCards' => $businessCards]);
    }

    // Method to display the form for creating a new business card
    public function create()
    {
        return view('business_cards.create');
    }

    // Method to store a new business card in the database
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'role' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            // Add more validation rules as needed
        ]);

        // Create a new business card
        BusinessCard::create($validatedData);

        return redirect()->route('business-cards.index')->with('success', 'Business card created successfully!');
    }

    // Method to display the details of a specific business card
    public function show($id)
    {
        $businessCard = BusinessCard::findOrFail($id);
        return view('business_cards.show', ['businessCard' => $businessCard]);
    }

    // Method to display the form for editing a business card
    public function edit($id)
    {
        $businessCard = BusinessCard::findOrFail($id);
        return view('business_cards.edit', ['businessCard' => $businessCard]);
    }

    // Method to update a business card in the database
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'role' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            // Add more validation rules as needed
        ]);

        // Find the business card and update its information
        $businessCard = BusinessCard::findOrFail($id);
        $businessCard->update($validatedData);

        return redirect()->route('business-cards.index')->with('success', 'Business card updated successfully!');
    }

    // Method to delete a business card from the database
    public function destroy($id)
    {
        $businessCard = BusinessCard::findOrFail($id);
        $businessCard->delete();

        return redirect()->route('business-cards.index')->with('success', 'Business card deleted successfully!');
    }



    public function exportSinglePDF($id)
    {
        $businessCard = BusinessCard::findOrFail($id);

        $pdf = PDF::loadView('business_cards.pdf', compact('businessCard'));

        return $pdf->download('business_card_' . $businessCard->id . '.pdf');
    }
}

