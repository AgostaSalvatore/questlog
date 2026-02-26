<?php

use App\Models\Quest;
use Illuminate\Support\Facades\Route;

Route::get('/quests', function () {
    return Quest::all();
});
