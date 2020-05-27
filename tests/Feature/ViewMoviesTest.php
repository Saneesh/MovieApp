<?php

namespace Tests\Feature;

use Tests\TestCase;

class ViewMoviesTest extends TestCase {
  /**
   * @test
   */
  public function the_main_page_shows_the_correct_info() {
    \Http::fake([
      config('services.tmdb.url') . '/movie/popular' => $this->fakePopularMovies(),
      config('services.tmdb.url') . '/movie/now_playing' => $this->fakeNowPlayingMovies(),
      config('services.tmdb.url') . '/genre/movie/list' => $this->fakeGenre(),
    ]);

    $response = $this->get(route('movies.index'));
    $response->assertStatus(200);

    $response->assertSeeText('Popular Movies');
    $response->assertSeeText('Fake popular movie');
    $response->assertSeeText('Fake now playing');

    // The space between the genres are rendering in the HTML.
    $response->assertSeeText('Drama ,               Science Fiction');

  }

  private function fakePopularMovies() {
    return \Http::response([
      "results" => [
        [
          "popularity" => 588.552,
          "vote_count" => 3501,
          "video" => false,
          "poster_path" => "/xBHvZcjRiWyobQ9kxBhO6B2dtRI.jpg",
          "id" => 419704,
          "adult" => false,
          "backdrop_path" => "/5BwqwxMEjeFtdknRV792Svo0K1v.jpg",
          "original_language" => "en",
          "original_title" => "Fake popular movie",
          "genre_ids" => [
            0 => 18,
            1 => 878,
          ],
          "title" => "Fake popular movie",
          "vote_average" => 6,
          "overview" => "The near future, a time when both hope and hardships drive humanity to look to the stars and beyond. While a mysterious phenomenon menaces to destroy life on planet Earth, astronaut Roy McBride undertakes a mission across the immensity of space and its many perils to uncover the truth about a lost expedition that decades before boldly faced emptiness and silence in search of the unknown.",
          "release_date" => "2019-09-17",
        ],
      ],
    ], 200);
  }

  private function fakeNowPlayingMovies() {
    return \Http::response([
      "results" => [
        [
          "popularity" => 588.552,
          "vote_count" => 3501,
          "video" => false,
          "poster_path" => "/xBHvZcjRiWyobQ9kxBhO6B2dtRI.jpg",
          "id" => 419704,
          "adult" => false,
          "backdrop_path" => "/5BwqwxMEjeFtdknRV792Svo0K1v.jpg",
          "original_language" => "en",
          "original_title" => "Fake now playing",
          "genre_ids" => [
            0 => 18,
            1 => 878,
          ],
          "title" => "Fake now playing",
          "vote_average" => 6,
          "overview" => "The near future, a time when both hope and hardships drive humanity to look to the stars and beyond. While a mysterious phenomenon menaces to destroy life on planet Earth, astronaut Roy McBride undertakes a mission across the immensity of space and its many perils to uncover the truth about a lost expedition that decades before boldly faced emptiness and silence in search of the unknown.",
          "release_date" => "2019-09-17",
        ],
      ],
    ], 200);
  }
  private function fakeGenre() {
    return \Http::response([
      "genres" => [
        ['id' => 18, 'name' => 'Drama'],
        ['id' => 878, 'name' => 'Science Fiction'],
      ],
    ], 200);
  }
}
