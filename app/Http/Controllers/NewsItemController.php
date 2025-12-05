<?php

namespace App\Http\Controllers;

use App\Models\NewsItem;
use Illuminate\Http\Request;

class NewsItemController extends Controller
{
    // Lijst van alle nieuwsitems (voor bezoekers)
    public function index()
    {
        $news = NewsItem::orderBy('published_at', 'desc')->get();
        return view('news.index', compact('news'));
    }

    // Detailpagina van één nieuwsitem
    public function show(NewsItem $newsItem)
    {
        return view('news.show', compact('newsItem'));
    }

    // Admin: pagina om nieuw nieuwsitem aan te maken
    public function create()
    {
        return view('news.create');
    }

    // Admin: opslaan van nieuw nieuwsitem
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $path = null;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('news_images', 'public');
        }

        NewsItem::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $path,
            'published_at' => now(),
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('news.index');
    }

    // Admin: pagina om nieuwsitem te bewerken
    public function edit(NewsItem $newsItem)
    {
        return view('news.edit', compact('newsItem'));
    }

    // Admin: update uitvoeren
    public function update(Request $request, NewsItem $newsItem)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $newsItem->image = $request->file('image')->store('news_images', 'public');
        }

        $newsItem->title = $request->title;
        $newsItem->content = $request->content;
        $newsItem->save();

        return redirect()->route('news.index');
    }

    // Admin: verwijderen
    public function destroy(NewsItem $newsItem)
    {
        $newsItem->delete();
        return redirect()->route('news.index');
    }
}
