<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

// class Job {
//     public static function all() : array
//     {
//         return [
//             [
//                 'id' => 1,
//                 'title' => 'Web Developer',
//                 'location' => 'Bandung',
//                 'salary' => 'Rp. 10.000.000',
//             ],
//             [
//                 'id' => 2,
//                 'title' => 'Web Designer',
//                 'location' => 'Jakarta',
//                 'salary' => 'Rp. 5.000.000',
//             ],
//             [
//                 'id' => 3,
//                 'title' => 'Mobile Developer',
//                 'location' => 'Surabaya',
//                 'salary' => 'Rp. 7.000.000',
//             ],
//         ];
//     }
// }

// $jobs = [
//     [
//         'id' => 1,
//         'title' => 'Web Developer',
//         'location' => 'Bandung',
//         'salary' => 'Rp. 10.000.000',
//     ],
//     [
//         'id' => 2,
//         'title' => 'Web Designer',
//         'location' => 'Jakarta',
//         'salary' => 'Rp. 5.000.000',
//     ],
//     [
//         'id' => 3,
//         'title' => 'Mobile Developer',
//         'location' => 'Surabaya',
//         'salary' => 'Rp. 7.000.000',
//     ],
// ];

Route::get('/', function () {
    // $jobs = Job::all();

    // dd($jobs);

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

// Route::get('/jobs', function () use ($jobs) {
Route::get('/jobs', function () {
    // $jobs = Job::all();
    // $jobs = Job::with('employer')->get(); // eager loading

    $jobs = Job::with('employer')->latest()->paginate(5);
    // $jobs = Job::with('employer')->simplePaginate(3);
    // $jobs = Job::with('employer')->cursorPaginate(3);


    return view('jobs.index', [
        'greeting' => 'Hewroo',
        'jobs' => $jobs,
    ]);
});

Route::get('jobs/create', function () {
    return view('jobs.create');
});

// Route::get('/jobs/{id}', function ($id) use ($jobs) {
Route::get('/jobs/{id}', function ($id) {
    // $job = \Illuminate\Support\Arr::first(Job::all(), fn($job) => $job['id'] == $id);
    $job = Job::find($id);

    return view('jobs.show', [
        'job' => $job
    ]);
});

Route::post('/jobs', function () {
    // validation....

    request()->validate([
        'title' => 'required|min:3',
        'salary' => 'required',
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'location' => 'Lorem',
        'employer_id' => 1,
    ]);

    return redirect('/jobs');
});