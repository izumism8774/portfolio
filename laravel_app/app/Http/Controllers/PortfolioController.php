<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Stack;
use App\Models\Tags;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    /**
     * ポートフォリオ一覧を表示
     */
    public function index(): View
    {
        $portfolios = Portfolio::with(['tags', 'stacks'])->get();
        return view('portfolio-list', compact('portfolios'));
    }

    /**
     * ポートフォリオ詳細を表示
     */
    public function show($id): View
    {
        $portfolio = Portfolio::with(['tags', 'stacks'])->findOrFail($id);
        return view('portfolio-show', compact('portfolio'));
    }

    /**
     * ポートフォリオ投稿フォームを表示
     */
    public function create(): View
    {
        $tags = Tags::all();
        $stacks = Stack::all();
        return view('portfolio-post', compact('tags', 'stacks'));
    }

    /**
     * ポートフォリオを保存
     */
    public function store()
    {
        $validated = request()->validate([
            'title' => 'required|string|max:255',
            'picture' => 'required|string',
            'description' => 'required|string',
            'category' => 'required|string',
            'period' => 'required|string',
            'github' => 'required|string',
            'tags_id' => 'required|exists:tags,id',
            'stacks_id' => 'required|exists:stacks,id',
        ]);

        Portfolio::create($validated);

        return redirect('/portfolio-list')->with('success', 'ポートフォリオが保存されました');
    }
}
