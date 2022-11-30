<?php

/**
 * DRY: DON'T REPEAT YOURSELF
 */

function showEmployeeList(array $employees): void
{
    foreach ($employees as $employee) {
        render([
            "expectedSalary" => $employee->calculateExpectedSalary(),
            "experience" => $employee->getExperience(),
            "githubLink" => $employee->getGithubLink(),
        ]);
    }
}

