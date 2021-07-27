<?php

namespace PassGeneration\DataTypes;

use Google\Model as GoogleModel;

class SignUpInfo extends GoogleModel
{
    public string|null $classId = null;

    public function setClassId(string $classId): static
    {
        $this->classId = $classId;

        return $this;
    }

    public function getClassId(): string
    {
        return $this->classId;
    }
}
