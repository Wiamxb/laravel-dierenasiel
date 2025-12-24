<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FaqItem;
use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqItemController extends Controller
{
    public function index(Request $request)
    {
        $query = FaqItem::with('category');

        // Zoeken op vraag of antwoord
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('question', 'like', '%' . $request->search . '%')
                    ->orWhere('answer', 'like', '%' . $request->search . '%');
            });
        }

        // Filter op categorie
        if ($request->filled('category')) {
            $query->where('faq_category_id', $request->category);
        }

        $items = $query->orderBy('updated_at', 'desc')->get();
        $categories = FaqCategory::orderBy('name')->get();

        return view('admin.faq.items.index', compact('items', 'categories'));
    }

    public function create()
    {
        $categories = FaqCategory::orderBy('name')->get();
        return view('admin.faq.items.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'faq_category_id' => 'required|exists:faq_categories,id',
        ]);

        FaqItem::create($validated);

        return redirect()
            ->route('admin.faq.items.index')
            ->with('success', 'FAQ-vraag succesvol toegevoegd.');
    }

    public function edit(FaqItem $item)
    {
        $categories = FaqCategory::orderBy('name')->get();
        return view('admin.faq.items.edit', compact('item', 'categories'));
    }

    public function update(Request $request, FaqItem $item)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'faq_category_id' => 'required|exists:faq_categories,id',
        ]);

        $item->update($validated);

        return redirect()
            ->route('admin.faq.items.index')
            ->with('success', 'FAQ-vraag succesvol aangepast.');
    }

    public function destroy(FaqItem $item)
    {
        $item->delete();

        return redirect()
            ->route('admin.faq.items.index')
            ->with('success', 'FAQ-vraag verwijderd.');
    }
}
