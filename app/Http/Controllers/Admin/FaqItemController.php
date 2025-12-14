<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FaqItem;
use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqItemController extends Controller
{
    public function index()
    {
        $items = FaqItem::with('category')->get();
        return view('admin.faq.items.index', compact('items'));
    }

    public function create()
    {
        $categories = FaqCategory::all();
        return view('admin.faq.items.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
            'faq_category_id' => 'nullable|exists:faq_categories,id',
        ]);

        FaqItem::create([
            'question' => $request->question,
            'answer' => $request->answer,
            'faq_category_id' => $request->faq_category_id,
        ]);

        return redirect()->route('admin.faq.items.index');
    }

    /** 👉 DIT ONTBRAK */
    public function edit(FaqItem $item)
    {
        $categories = FaqCategory::all();
        return view('admin.faq.items.edit', compact('item', 'categories'));
    }

    /** 👉 EN DIT OOK */
    public function update(Request $request, FaqItem $item)
    {
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
            'faq_category_id' => 'nullable|exists:faq_categories,id',
        ]);

        $item->update([
            'question' => $request->question,
            'answer' => $request->answer,
            'faq_category_id' => $request->faq_category_id,
        ]);

        return redirect()->route('admin.faq.items.index');
    }

    public function destroy(FaqItem $item)
    {
        $item->delete();
        return redirect()->route('admin.faq.items.index');
    }
}
