<?php

namespace App\Entity;

use App\Repository\CommentResponseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentResponseRepository::class)]
class CommentResponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'commentResponses')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Comment $comment = null;

    #[ORM\ManyToOne(inversedBy: 'commentResponses')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Comment $commentToComment = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComment(): ?Comment
    {
        return $this->comment;
    }

    public function setComment(?Comment $comment): static
    {
        $this->comment = $comment;

        return $this;
    }

    public function getCommentToComment(): ?Comment
    {
        return $this->commentToComment;
    }

    public function setCommentToComment(?Comment $commentToComment): static
    {
        $this->commentToComment = $commentToComment;

        return $this;
    }
}
