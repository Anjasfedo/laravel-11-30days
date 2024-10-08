<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// convention of laravel, jobs table use Job class
class Job extends Model
{

    use HasFactory;
    protected $table = 'job_listings'; // change the convention

    // protected $fillable = [
    //     'title',
    //     'location',
    //     'salary',
    //     'employer_id',
    // ];

    protected $guarded = [
        'id',
    ];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey:'job_listing_id');
    }

    // public static function all(): array
    // {
    //     return [
    //         [
    //             'id' => 1,
    //             'title' => 'Web Developer',
    //             'location' => 'Bandung',
    //             'salary' => 'Rp. 10.000.000',
    //         ],
    //         [
    //             'id' => 2,
    //             'title' => 'Web Designer',
    //             'location' => 'Jakarta',
    //             'salary' => 'Rp. 5.000.000',
    //         ],
    //         [
    //             'id' => 3,
    //             'title' => 'Mobile Developer',
    //             'location' => 'Surabaya',
    //             'salary' => 'Rp. 7.000.000',
    //         ],
    //     ];
    // }

    // public static function find(int $id): array
    // {
    //     $job = \Illuminate\Support\Arr::first(static::all(), fn($job) => $job['id'] == $id);

    //     if (!$job) {
    //         abort(404);
    //     }
    //     return $job;
    // }
}
