<?php

use App\Models\Employer;
use App\Models\Job;
use App\Models\User;

test('It belongs to an employer', function () {
    //AAA
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id
    ]);

    // Act and Assert
    expect($job->employer->is($employer))->toBeTrue();
});


/* test('Employer belongs to user', function () {
    $employer = Employer::factory()->create();
    $user = User::factory()->create(
        ['employer_id' => $employer->id]
    );

    expect($user->employer->is($employer))->toBeTrue();
});
 */
