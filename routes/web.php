<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hewroowowowo',
    ]);
})->name('home');

Route::get('/about', function () {
    // return 'About Laravel';
    // return [
    //     'name' => 'Laravel',
    // ]; // json

    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'greeting' => 'Hewroo',
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Web Developer',
                'location' => 'Bandung',
                'salary' => 'Rp. 10.000.000',
            ],
            [
                'id' => 2,
                'title' => 'Web Designer',
                'location' => 'Jakarta',
                'salary' => 'Rp. 5.000.000',
            ],
            [
                'id' => 3,
                'title' => 'Mobile Developer',
                'location' => 'Surabaya',
                'salary' => 'Rp. 7.000.000',
            ],
        ],
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Web Developer',
            'location' => 'Bandung',
            'salary' => 'Rp. 10.000.000',
        ],
        [
            'id' => 2,
            'title' => 'Web Designer',
            'location' => 'Jakarta',
            'salary' => 'Rp. 5.000.000',
        ],
        [
            'id' => 3,
            'title' => 'Mobile Developer',
            'location' => 'Surabaya',
            'salary' => 'Rp. 7.000.000',
        ],
    ];

    $job = \Illuminate\Support\Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', [
        'job' => $job
    ]);
});