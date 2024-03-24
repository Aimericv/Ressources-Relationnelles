<?php

namespace App\Entity;

use App\Repository\UserParticipationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserParticipationRepository::class)]
class UserParticipation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'userParticipations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?post $post = null;

    #[ORM\ManyToOne(inversedBy: 'userParticipations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?user $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPost(): ?post
    {
        return $this->post;
    }

    public function setPost(?post $post): static
    {
        $this->post = $post;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }
}