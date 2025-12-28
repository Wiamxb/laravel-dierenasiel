<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqCategoryController extends Controller
{
    public function index(Request $request)
    {
        $query = FaqCategory::withCount('faqItems');

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $categories = $query->orderBy('name')->get();

        return view('admin.faq.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.faq.categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        FaqCategory::create($validated);

        return redirect()
            ->route('admin.faq.categories.index')
            ->with('success', 'Categorie toegevoegd.');
    }

    public function destroy(FaqCategory $category)
    {
        $category->delete();

        return redirect()
            ->route('admin.faq.categories.index')
            ->with('success', 'Categorie verwijderd.');
    }
}
