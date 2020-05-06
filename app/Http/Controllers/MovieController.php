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

    $genreList = Http::
      withToken(config('services.tmdb.v4token'))
      ->get(config('services.tmdb.url') . '/genre/movie/list')
      ->json()['genres'];

    // foreach ($popularMovies as $genre) {
    //   echo "'{$genre['id']}' => '" . $genre['name'] . "',";

    // }

    $genres = collect($genreList)->mapWithKeys(function ($genre) {
      return [$genre['id'] => $genre['name']];
    });

    dump($popularMovies);
    dump($genres->toArray());

    // $genres = [
    //   '28' => 'Action',
    //   '12' => 'Adventure',
    //   '16' => 'Animation',
    //   '35' => 'Comedy',
    //   '80' => 'Crime',
    //   '99' => 'Documentary',
    //   '18' => 'Drama',
    //   '10751' => 'Family',
    //   '14' => 'Fantasy',
    //   '36' => 'History',
    //   '27' => 'Horror',
    //   '10402' => 'Music',
    //   '9648' => 'Mystery',
    //   '10749' => 'Romance',
    //   '878' => 'Science Fiction',
    //   '10770' => 'TV Movie',
    //   '53' => 'Thriller',
    //   '10752' => 'War',
    //   '37' => 'Western',
    // ];
    // $genres = [];

    return view('index', [
      'popularMovies' => $popularMovies,
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
    //
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
