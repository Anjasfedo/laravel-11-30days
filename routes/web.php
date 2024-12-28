<?php

use App\Http\Controllers\JobController;
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

// Route::get('/about', function () {
//     // return 'About Laravel';
//     // return [
//     //     'name' => 'Laravel',
//     // ]; // json

//     return view('about');
// });
Route::view('/about', 'about');

// Route::get('/contact', function () {
//     return view('contact');
// });
Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class);

// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/create', 'create');
//     Route::post('/jobs', 'store');
//     Route::get('/jobs/{job}', 'show');
//     Route::get('/jobs/{job}/edit', 'edit');
//     Route::patch('/jobs/{job}', 'update');
//     Route::delete('/jobs/{job}', 'destroy');
// });

// Route::get('/jobs', [JobController::class, 'index']);
// Route::get('/jobs/create', [JobController::class, 'create']);
// Route::post('/jobs', [JobController::class, 'store']);
// Route::get('/jobs/{job}', [JobController::class, 'show']);
// Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);
// Route::patch('/jobs/{job}', [JobController::class, 'update']);
// Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

// index
// Route::get('/jobs', function () use ($jobs) {
// Route::get('/jobs', function () {
//     // $jobs = Job::all();
//     // $jobs = Job::with('employer')->get(); // eager loading

//     $jobs = Job::with('employer')->latest()->paginate(5);
//     // $jobs = Job::with('employer')->simplePaginate(3);
//     // $jobs = Job::with('employer')->cursorPaginate(3);


//     return view('jobs.index', [
//         'greeting' => 'Hewroo',
//         'jobs' => $jobs,
//     ]);
// });

// // create
// Route::get('jobs/create', function () {
//     return view('jobs.create');
// });

// // Route::get('/post/{post:slug}')

// // show
// // Route::get('/jobs/{id}', function ($id) use ($jobs) {
// Route::get('/jobs/{job}', function (Job $job) {
//     // $job = \Illuminate\Support\Arr::first(Job::all(), fn($job) => $job['id'] == $id);
//     // $job = Job::find($id);

//     return view('jobs.show', [
//         'job' => $job
//     ]);
// });

// // store
// Route::post('/jobs', function () {
//     // validation....

//     request()->validate([
//         'title' => 'required|min:3',
//         'salary' => 'required',
//     ]);

//     Job::create([
//         'title' => request('title'),
//         'salary' => request('salary'),
//         'location' => 'Lorem',
//         'employer_id' => 1,
//     ]);

//     return redirect('/jobs');
// });

// // edit
// Route::get('/jobs/{job}/edit', function (Job $job) {
//     // $job = Job::find($id);

//     return view('jobs.edit', [
//         'job' => $job
//     ]);
// });

// // update
// Route::patch('/jobs/{job}', function (Job $job) {
//     request()->validate([
//         'title' => 'required|min:3',
//         'salary' => 'required',
//     ]);

//     // $job = Job::findOrFail($id);

//     $job->title = request('title');
//     $job->salary = request('salary');
//     $job->save();

//     // $job->update([
//     //     'title' => request('title'),
//     //     'salary' => request('salary'),
//     // ]);

//     return redirect('/jobs/' . $job->id);
// });

// // destroy
// Route::delete('/jobs/{job}', function (Job $job) {
//     // $job = Job::findOrFail($id);

//     // $job->delete();

//     // Job::findOrFail($id)->delete();
//     $job->delete();

//     return redirect('/jobs');
// });