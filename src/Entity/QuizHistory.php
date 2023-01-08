<?php

namespace App\Entity;

use App\Repository\QuizHistoryRepository;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuizHistoryRepository::class)]
class QuizHistory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;

    #[ORM\Column(length: 10)]
    private string $firstPersonality;

    #[ORM\Column]
    private int $firstPersonalityValue;

    #[ORM\Column(length: 10)]
    private string $secondPersonality;

    #[ORM\Column]
    private int $secondPersonalityValue;

    #[ORM\Column(length: 10)]
    private string $thirdPersonality;

    #[ORM\Column]
    private int $thirdPersonalityValue;

    #[ORM\Column(type: 'datetime')]
    private DateTimeInterface $dateTime;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private User $user;
    

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFirstPersonality(): string
    {
        return $this->firstPersonality;
    }

    /**
     * @param string $firstPersonality
     * @return QuizHistory
     */
    public function setFirstPersonality(string $firstPersonality): self
    {
        $this->firstPersonality = $firstPersonality;

        return $this;
    }

    /**
     * @return int
     */
    public function getFirstPersonalityValue(): int
    {
        return $this->firstPersonalityValue;
    }

    /**
     * @param int $firstPersonalityValue
     * @return QuizHistory
     */
    public function setFirstPersonalityValue(int $firstPersonalityValue): self
    {
        $this->firstPersonalityValue = $firstPersonalityValue;

        return $this;
    }

    /**
     * @return string
     */
    public function getSecondPersonality(): string
    {
        return $this->secondPersonality;
    }

    /**
     * @param string $secondPersonality
     * @return QuizHistory
     */
    public function setSecondPersonality(string $secondPersonality): self
    {
        $this->secondPersonality = $secondPersonality;

        return $this;
    }

    /**
     * @return int
     */
    public function getSecondPersonalityValue(): int
    {
        return $this->secondPersonalityValue;
    }

    /**
     * @param int $secondPersonalityValue
     * @return QuizHistory
     */
    public function setSecondPersonalityValue(int $secondPersonalityValue): self
    {
        $this->secondPersonalityValue = $secondPersonalityValue;

        return $this;
    }

    /**
     * @return string
     */
    public function getThirdPersonality(): string
    {
        return $this->thirdPersonality;
    }

    /**
     * @param string $thirdPersonality
     * @return QuizHistory
     */
    public function setThirdPersonality(string $thirdPersonality): self
    {
        $this->thirdPersonality = $thirdPersonality;

        return $this;
    }

    /**
     * @return int
     */
    public function getThirdPersonalityValue(): int
    {
        return $this->thirdPersonalityValue;
    }

    /**
     * @param int $thirdPersonalityValue
     * @return QuizHistory
     */
    public function setThirdPersonalityValue(int $thirdPersonalityValue): self
    {
        $this->thirdPersonalityValue = $thirdPersonalityValue;

        return $this;
    }

    public function getDateTime(): DateTimeInterface
    {
        return $this->dateTime;
    }

    public function setDateTime(DateTimeInterface $dateTime): self
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): self
    {
        $this->user = $user;

        return $this;
    }




}
