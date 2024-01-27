<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Faqs;
use App\Models\Language;

class FaqsController extends Controller
{
    public function index()
    {
        $faqs = Faqs::all();
        
        return view('faqs.index', compact('faqs'));
    }
    
    public function create(Request $request)
    {
        $langs = Language::all();
        $lang = Language::where('code', $request->language)->first();
        
        if (!$lang) {
            $lang = Language::where('is_default', true)->first();
        }
    
        
        $lang_id = $lang->id;

        return view('faqs.create', compact('langs', 'lang_id'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        Faqs::create($request->all());

        return redirect()->route('faqs.index')->with('success', 'FAQ created successfully.');
    }

    public function show($id)
    {
        $faq = Faqs::find($id);

        return view('faqs.show', compact('faq'));
    }

    public function edit($id)
    {
        $faq = Faqs::find($id);

        return view('faqs.edit', compact('faq'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        $faq = Faqs::find($id);
        $faq->update($request->all());

        return redirect()->route('faqs.index')->with('success', 'FAQ updated successfully.');
    }

    public function destroy($id)
    {
        $faq = Faqs::find($id);
        $faq->delete();

        return redirect()->route('faqs.index')->with('success', 'FAQ deleted successfully.');
    }
}
