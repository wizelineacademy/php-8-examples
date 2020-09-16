<?php

function getEmployee($id): ?Employee {
    # Does $id look like a valid employee ID?
    if ($id < 1) {
        return null;
    }

    return new Employee($id);
}

class Employee {
    public function __construct(int $id) {
        $this->id = $id; // use PHP 7 compat syntax here!
    }

    public function getVacationReport(): ?Vacation {
        return $this->id % 2 === 1
            ? new Vacation($this->id)
            : null;
    }
}

class Vacation {
    public function __construct(int $id) {
        $this->id = $id; // use PHP 7 compat syntax here!
    }

    public function getDaysRemaining(): ?int {
        return $this->id < 500
            ? 10
            : null;
    }
}
