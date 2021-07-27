<?php

namespace PassGeneration\DataTypes;

use Google\Model as GoogleModel;

class Pagination extends GoogleModel
{
    public string|null $kind = null;
    public string|null $nextPageToken = null;
    public int|null $resultsPerPage = null;

    public function setKind(string $kind): static
    {
        $this->kind = $kind;

        return $this;
    }

    public function getKind(): string
    {
        return $this->kind;
    }

    public function setNextPageToken(string $nextPageToken): static
    {
        $this->nextPageToken = $nextPageToken;

        return $this;
    }

    public function getNextPageToken(): string
    {
        return $this->nextPageToken;
    }

    public function setResultsPerPage(int $resultsPerPage): static
    {
        $this->resultsPerPage = $resultsPerPage;

        return $this;
    }

    public function getResultsPerPage(): int
    {
        return $this->resultsPerPage;
    }
}
