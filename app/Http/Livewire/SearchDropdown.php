<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component {
  public $search = '';

  public function render() {
    $searchResult = [];

    if (strlen($this->search) > 2) {
      $searchResult = Http::
        withToken(config('services.tmdb.v4token'))
        ->get(config('services.tmdb.url') . '/search/movie?query=' . $this->search)
        ->json()['results'];
    }

    return view('livewire.search-dropdown', [
      'searchResult' => collect($searchResult)->whereNotNull('poster_path')->take(7),
    ]);
  }
}
