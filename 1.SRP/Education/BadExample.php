<?php


class StudentManager
{
    private array $students = [];

    public function addStudent(array $student): void
    {
        $this->students[] = $student;
        $this->saveToDatabase($student);
        $this->notifyParents($student);
    }

    private function saveToDatabase(array $student): void
    {
        echo "Saving student {$student['name']} to database.\n";
    }

    private function notifyParents(array $student): void
    {
        echo "Notifying parents of student {$student['name']}.\n";
    }
}

// استفاده
$manager = new StudentManager();
$manager->addStudent(['name' => 'Sara', 'grade' => 'A']);
