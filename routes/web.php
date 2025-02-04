<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use MantraPHP\Forms\Components\TextInput;

Route::get('/', function () {
    return Inertia::render('Form', [
        'form' => [
            TextInput::make('name'),
            TextInput::make('email'),
            TextInput::make('password')
                ->type('password')
        ]
    ]);
});
