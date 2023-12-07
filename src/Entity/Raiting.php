<?php

namespace App\Entity;

use App\Repository\RaitingRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RaitingRepository::class)]
class Raiting
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $articles_id = null;

    #[ORM\Column]
    private ?int $user_id = null;

    #[ORM\Column]
    private ?int $rate = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArticlesId(): ?int
    {
        return $this->articles_id;
    }

    public function setArticlesId(int $articles_id): static
    {
        $this->articles_id = $articles_id;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): static
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getRate(): ?int
    {
        return $this->rate;
    }

    public function setRate(int $rate): static
    {
        $this->rate = $rate;

        return $this;
    }
}
