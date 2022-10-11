<?php

namespace App\Entity;

use App\Repository\QuizContentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuizContentRepository::class)]
class QuizContent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $text = null;

    #[ORM\Column(length: 255)]
    private ?string $personality = null;

    #[ORM\Column(length: 10)]
    private ?string $personalitySign = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getPersonality(): ?string
    {
        return $this->personality;
    }

    public function setPersonality(string $personality): self
    {
        $this->personality = $personality;

        return $this;
    }

    public function getPersonalitySign(): ?string
    {
        return $this->personalitySign;
    }

    public function setPersonalitySign(string $personalitySign): self
    {
        $this->personalitySign = $personalitySign;

        return $this;
    }
}
