<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

// $latest = News::take(3)->latest()->get();
// $mostPopular = News::take(3)->get();

class NewsController extends Controller
{
  // Index
  public function index() {
    $news = News::latest()->get();

    return view('news.index', ['articles' => $news]);
  }

  // Show
  public function show(News $id) {
    return view('news.show', compact('id'));
  }

  // Create
  public function create() {
    return view('news.create');
  }

  // Store
  public function store(News $id) {
    // News::create($this->validateArticle());
    News::create([
      'title' => response('title'),
      'excerpt' => response('excerpt'),
      'body' => response('body')
    ]);
    // News::create([$this->validateArticle(), 'slug' => Str::slug('How are you doing')]);
    return redirect('/news');
  }

  // Edit
  public function edit(News $id) {
    return view('news.edit', compact('id'));
  }

  // Update
  public function update(News $id) {
    News::update($this->validateArticle());
    return redirect($id->path());
  }


  // Validate
  public function validateArticle() {
    $validate = request()->validate([
      'title' => 'required',
      'excerpt' => 'nullable',
      'body' => 'nullable'
    ]);

    $validate['slug'] = Str::slug($validate(['title', '-']));

    return $validate;
  }
}
