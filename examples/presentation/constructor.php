<?php

class SchoolReport {
    private string $studentID;
    private string $grade;
    private float $attendance;

    public function __construct(string $studentID, string $grade, float $attendance) {
        if ($attendance > 100) {
            print "Attendance cannot be greater than 100%! Auto-correcting to 100%.\n";
            $attendance = 100;
        }

        $this->studentID = $studentID;
        $this->grade = $grade;
        $this->attendance = $attendance;
    }
}

$report = new SchoolReport(12345, 'A+', 98.5);

print_r($report);