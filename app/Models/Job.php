<?php

namespace App\Models;

class Job
{
    public static function all(): array
    {
        return [
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
    }

    public static function find(int $id): array
    {
        $job = \Illuminate\Support\Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }
        return $job;
    }
}