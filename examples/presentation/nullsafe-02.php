<?php
require __DIR__ . '/lib/employee.php';

$employeeID = 456;
$employee = getEmployee($employeeID);

if ($employee !== null) {
    $report = $employee->getVacationReport();

    if ($report !== null) {
        $daysRemaining = $report->getDaysRemaining();
    }
}

if (! empty($daysRemaining)) {
    print "Employee has $daysRemaining days of vacation remaining";
}
else {
    print "Could not determine how many days of vacation are left";
}

