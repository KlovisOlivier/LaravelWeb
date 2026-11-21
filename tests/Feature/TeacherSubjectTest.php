<?php

namespace Tests\Feature;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TeacherSubjectTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_subject_cannot_have_two_teachers(): void
    {
        $subject = Subject::create(['name' => 'Matematika']);

        Teacher::create([
            'name' => 'Guru Pertama',
            'niy' => 1001,
            'subject_id' => $subject->id,
            'start_date' => '2026-11-21',
        ]);

        $response = $this->post(route('admin.teacher.store'), [
            'name' => 'Guru Kedua',
            'niy' => 1002,
            'subject_id' => $subject->id,
            'start_date' => '2026-11-21',
        ]);

        $response->assertSessionHasErrors([
            'subject_id' => 'Mata pelajaran ini sudah memiliki guru.',
        ]);
        $this->assertDatabaseCount('teachers', 1);
    }

    public function test_teacher_page_marks_assigned_subjects_as_disabled(): void
    {
        $subject = Subject::create(['name' => 'Bahasa Indonesia']);

        Teacher::create([
            'name' => 'Guru',
            'niy' => 2001,
            'subject_id' => $subject->id,
            'start_date' => '2026-11-21',
        ]);

        $this->get(route('admin.teacher.index'))
            ->assertOk()
            ->assertSee('Sudah memiliki guru')
            ->assertSee('disabled', false);
    }
}
