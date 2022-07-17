<?php

namespace App\Entity;

use App\Repository\ExampleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExampleRepository::class)]
class Example
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $exampleString = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExampleString(): ?string
    {
        return $this->exampleString;
    }

    public function setExampleString(string $exampleString): self
    {
        $this->exampleString = $exampleString;

        return $this;
    }
}
