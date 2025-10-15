<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder {
    public function run(): void {
        $courses = [
            // ========================
            // 1ST YEAR - 1ST SEMESTER
            // ========================
            ['course_code' => 'GEC 11', 'name' => 'Understanding the Self', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '1st Year', 'semester' => '1st Semester', 'credits' => 3],
            ['course_code' => 'GEC 12', 'name' => 'Mathematics in the Modern World', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '1st Year', 'semester' => '1st Semester', 'credits' => 3],
            ['course_code' => 'GEE 11', 'name' => 'Philippine Indigenous Communities', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '1st Year', 'semester' => '1st Semester', 'credits' => 3],
            ['course_code' => 'MS 11', 'name' => 'Life and Works of Rizal', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '1st Year', 'semester' => '1st Semester', 'credits' => 3],
            ['course_code' => 'NSTP 11', 'name' => 'National Service Training Program 1', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '1st Year', 'semester' => '1st Semester', 'credits' => 3],
            ['course_code' => 'ITC 111', 'name' => 'Introduction to Computing', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '1st Year', 'semester' => '1st Semester', 'credits' => 3],
            ['course_code' => 'ITC 112', 'name' => 'Programming 1', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '1st Year', 'semester' => '1st Semester', 'credits' => 3],
            ['course_code' => 'PE 11', 'name' => 'Physical Fitness and Self-Testing Activities', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '1st Year', 'semester' => '1st Semester', 'credits' => 2],

            // ========================
            // 1ST YEAR - 2ND SEMESTER
            // ========================
            ['course_code' => 'GEC 13', 'name' => 'The Contemporary World', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '1st Year', 'semester' => '2nd Semester', 'credits' => 3],
            ['course_code' => 'GEC 14', 'name' => 'Purposive Communication', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '1st Year', 'semester' => '2nd Semester', 'credits' => 3],
            ['course_code' => 'GEC 15', 'name' => 'Science, Technology and Society', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '1st Year', 'semester' => '2nd Semester', 'credits' => 3],
            ['course_code' => 'GEE 12', 'name' => 'Living in the IT Era', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '1st Year', 'semester' => '2nd Semester', 'credits' => 3],
            ['course_code' => 'NSTP 12', 'name' => 'National Service Training Program 2', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '1st Year', 'semester' => '2nd Semester', 'credits' => 3],
            ['course_code' => 'PE 12', 'name' => 'Individual and Dual Sports', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '1st Year', 'semester' => '2nd Semester', 'credits' => 2],
            ['course_code' => 'ITC 121', 'name' => 'Programming 2', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '1st Year', 'semester' => '2nd Semester', 'credits' => 3],
            ['course_code' => 'ITP 122', 'name' => 'Discrete Mathematics', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '1st Year', 'semester' => '2nd Semester', 'credits' => 3],
            ['course_code' => 'ITP 123', 'name' => 'Introduction to Human Computer Interaction', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '1st Year', 'semester' => '2nd Semester', 'credits' => 3],

            // ========================
            // 2ND YEAR - 1ST SEMESTER
            // ========================
            ['course_code' => 'GEC 16', 'name' => 'Art Appreciation', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '2nd Year', 'semester' => '1st Semester', 'credits' => 3],
            ['course_code' => 'GEC 17', 'name' => 'Ethics', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '2nd Year', 'semester' => '1st Semester', 'credits' => 3],
            ['course_code' => 'GEC 18', 'name' => 'Readings in Philippine History', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '2nd Year', 'semester' => '1st Semester', 'credits' => 3],
            ['course_code' => 'PE 13', 'name' => 'Rhythmic Activities', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '2nd Year', 'semester' => '1st Semester', 'credits' => 2],
            ['course_code' => 'ITC 211', 'name' => 'Data Structures and Algorithms', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '2nd Year', 'semester' => '1st Semester', 'credits' => 3],
            ['course_code' => 'ITC 212', 'name' => 'Human Computer Interaction 2', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '2nd Year', 'semester' => '1st Semester', 'credits' => 3],
            ['course_code' => 'ITC 213', 'name' => 'Object Oriented Programming', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '2nd Year', 'semester' => '1st Semester', 'credits' => 3],
            ['course_code' => 'ITC 214', 'name' => 'Platform Technologies', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '2nd Year', 'semester' => '1st Semester', 'credits' => 3],
            ['course_code' => 'ITC 215', 'name' => 'Multimedia Systems and Technologies 1', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '2nd Year', 'semester' => '1st Semester', 'credits' => 3],

            // ========================
            // 2ND YEAR - 2ND SEMESTER
            // ========================
            ['course_code' => 'GEE 13', 'name' => 'Philippine Popular Culture', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '2nd Year', 'semester' => '2nd Semester', 'credits' => 3],
            ['course_code' => 'PE 14', 'name' => 'Team Sports', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '2nd Year', 'semester' => '2nd Semester', 'credits' => 2],
            ['course_code' => 'ITC 221', 'name' => 'Information Management', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '2nd Year', 'semester' => '2nd Semester', 'credits' => 3],
            ['course_code' => 'ITP 222', 'name' => 'Computer System Servicing', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '2nd Year', 'semester' => '2nd Semester', 'credits' => 3],
            ['course_code' => 'ITP 223', 'name' => 'Integrative Programming and Technologies 1', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '2nd Year', 'semester' => '2nd Semester', 'credits' => 3],
            ['course_code' => 'ITP 224', 'name' => 'Multimedia Systems and Technologies 2', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '2nd Year', 'semester' => '2nd Semester', 'credits' => 3],
            ['course_code' => 'ITP 225', 'name' => 'Networking 1', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '2nd Year', 'semester' => '2nd Semester', 'credits' => 3],
            ['course_code' => 'ITP 226', 'name' => 'Software Engineering 1', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '2nd Year', 'semester' => '2nd Semester', 'credits' => 3],
            ['course_code' => 'ITP 227', 'name' => 'Quantitative Methods', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '2nd Year', 'semester' => '2nd Semester', 'credits' => 3],

            // ========================
            // 3RD YEAR - 1ST SEMESTER
            // ========================
            ['course_code' => 'ITE 311', 'name' => 'Integrative Programming and Technologies 2', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '3rd Year', 'semester' => '1st Semester', 'credits' => 3],
            ['course_code' => 'ITE 312', 'name' => 'Web Systems and Technologies 1', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '3rd Year', 'semester' => '1st Semester', 'credits' => 3],
            ['course_code' => 'ITP 313', 'name' => 'Advanced Database Systems', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '3rd Year', 'semester' => '1st Semester', 'credits' => 3],
            ['course_code' => 'ITP 314', 'name' => 'Information Assurance and Security 1', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '3rd Year', 'semester' => '1st Semester', 'credits' => 3],
            ['course_code' => 'ITP 315', 'name' => 'Networking 2', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '3rd Year', 'semester' => '1st Semester', 'credits' => 3],
            ['course_code' => 'ITP 316', 'name' => 'Software Engineering 2', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '3rd Year', 'semester' => '1st Semester', 'credits' => 3],
            ['course_code' => 'ITP 317', 'name' => 'Systems Integration and Architecture 1', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '3rd Year', 'semester' => '1st Semester', 'credits' => 3],

            // ========================
            // 3RD YEAR - 2ND SEMESTER
            // ========================
            ['course_code' => 'ITC 321', 'name' => 'Applications Development and Emerging Technologies', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '3rd Year', 'semester' => '2nd Semester', 'credits' => 3],
            ['course_code' => 'ITE 322', 'name' => 'Systems Integration and Architecture 2', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '3rd Year', 'semester' => '2nd Semester', 'credits' => 3],
            ['course_code' => 'ITP 323', 'name' => 'Capstone Project 1', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '3rd Year', 'semester' => '2nd Semester', 'credits' => 3],
            ['course_code' => 'ITP 324', 'name' => 'Information Assurance and Security 2', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '3rd Year', 'semester' => '2nd Semester', 'credits' => 3],
            ['course_code' => 'ITP 325', 'name' => 'Social and Professional Issues', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '3rd Year', 'semester' => '2nd Semester', 'credits' => 3],
            ['course_code' => 'ITP 326', 'name' => 'Systems and Administration Maintenance', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '3rd Year', 'semester' => '2nd Semester', 'credits' => 3],
            ['course_code' => 'ITP 327', 'name' => 'Web Systems and Technologies 2', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '3rd Year', 'semester' => '2nd Semester', 'credits' => 3],

            // ========================
            // 4TH YEAR - 1ST SEMESTER
            // ========================
            ['course_code' => 'SOC OR 11', 'name' => 'Social Orientation', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '4th Year', 'semester' => '1st Semester', 'credits' => 6],
            ['course_code' => 'ITP 411', 'name' => 'Competency Appraisal', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '4th Year', 'semester' => '1st Semester', 'credits' => 3],
            ['course_code' => 'ITP 412', 'name' => 'Capstone Project 2', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '4th Year', 'semester' => '1st Semester', 'credits' => 3],

            // ========================
            // 4TH YEAR - 2ND SEMESTER
            // ========================
            ['course_code' => 'ITP 421', 'name' => 'Practicum (Local or International)', 'program_id' => 1, 'instructor_id' => 1, 'year_level' => '4th Year', 'semester' => '2nd Semester', 'credits' => 6],
        ];

        foreach ($courses as $course) {
            DB::table('courses')->insert(array_merge($course, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
