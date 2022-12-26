<?php

namespace App\Entity;

use App\Repository\QuizResultRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuizResultRepository::class)]
class QuizResult
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;

    #[ORM\Column(length: 255)]
    private string $type;

    #[ORM\Column(length: 10)]
    private string $sign;

    #[ORM\Column(length: 4096)]
    private string $description;

    #[ORM\Column(length: 4096)]
    private string $recommendedProffesions;

    #[ORM\Column(length: 4096)]
    private string $exemplaryProfessions;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getSign(): string
    {
        return $this->sign;
    }

    public function setSign(string $sign): self
    {
        $this->sign = $sign;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getRecommendedProffesions(): string
    {
        return $this->recommendedProffesions;
    }

    public function setRecommendedProffesions(string $recommendedProffesions): self
    {
        $this->recommendedProffesions = $recommendedProffesions;

        return $this;
    }

    public function getExemplaryProfessions(): string
    {
        return $this->exemplaryProfessions;
    }

    public function setExemplaryProfessions(string $exemplaryProfessions): self
    {
        $this->exemplaryProfessions = $exemplaryProfessions;

        return $this;
    }

}
