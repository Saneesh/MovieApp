<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    $popularMovies = Http::
      withToken(config('services.tmdb.v4token'))
      ->get(config('services.tmdb.url') . '/movie/popular')
    //->get(config('services.tmdb.url') . '/movie/popular?api_key=' . config('services.tmdb.v3token'))
      ->json()['results'];

    $nowPlayingMovies = Http::
      withToken(config('services.tmdb.v4token'))
      ->get(config('services.tmdb.url') . '/movie/now_playing')
      ->json()['results'];

    $genreList = Http::
      withToken(config('services.tmdb.v4token'))
      ->get(config('services.tmdb.url') . '/genre/movie/list')
      ->json()['genres'];

    $genres = collect($genreList)->mapWithKeys(function ($genre) {
      return [$genre['id'] => $genre['name']];
    });

    return view('index', [
      'popularMovies' => $popularMovies,
      'nowPlayingMovies' => $nowPlayingMovies,
      'genres' => $genres,
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create() {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request) {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id) {
    $movie = Http::
      withToken(config('services.tmdb.v4token'))
      ->get(config('services.tmdb.url') . '/movie/' . $id . '?append_to_response=credits,videos,images')
      ->json();

    if (isset($movie['status_code'])) {
      return response()->json('Movie details not available');
    }

    $movie['credits']['crew'] = collect($movie['credits']['crew'])->filter(function ($crew) {
      return in_array($crew['department'], ['Directing', 'Production']);
    })->toArray();

    return view('show', [
      'movie' => $movie,
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id) {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id) {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id) {
    //
  }
}
