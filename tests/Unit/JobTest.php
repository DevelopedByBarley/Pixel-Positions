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
test('Can have tags', function () {
    //AAA
    $job = Job::factory()->create(); // Létrehozunk egy job-ot
    $job->tag('Frontend'); // Job tagjét ki keressük vagy hozzá adjuk ha nincs, Ezt a Job::Model-ben található

    expect($job->tags)->toHaveCount(1); // Leírjuk mire számíitunk, ami pedig az hogy van 1 tag legalább
});


/* test('Employer belongs to user', function () {
    $employer = Employer::factory()->create();
    $user = User::factory()->create(
        ['employer_id' => $employer->id]
    );

    expect($user->employer->is($employer))->toBeTrue();
});
 */
