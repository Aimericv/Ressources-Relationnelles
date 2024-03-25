<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PostRepository::class)]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\ManyToOne(inversedBy: 'posts')]
    private ?PostStatus $status = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $created_at = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $address = null;

    #[ORM\OneToMany(mappedBy: 'post', targetEntity: AdminComment::class)]
    private Collection $adminComments;

    #[ORM\OneToMany(mappedBy: 'post', targetEntity: Comment::class)]
    private Collection $comments;

    #[ORM\ManyToOne(inversedBy: 'posts')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Category $type = null;

    /**
     * @ORM\Column(type="string")
     */
    private $author;

    /**
     * @ORM\Column(type="string")
     */
    private $category;

    #[ORM\ManyToMany(targetEntity: User::class, mappedBy: 'favorites')]
    private Collection $usersFavorite;

    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'postsParticipation')]
    private Collection $usersParticipation;

    #[ORM\ManyToMany(targetEntity: User::class, mappedBy: 'likes')]
    private Collection $usersLike;

    #[ORM\ManyToMany(targetEntity: User::class, mappedBy: 'reposts')]
    private Collection $usersRepost;

    #[ORM\ManyToOne(inversedBy: 'posts')]
    private ?User $user = null;
    

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function __construct()
    {
        $this->favorites = new ArrayCollection();
        $this->postsParticipation = new ArrayCollection();
        $this->adminComments = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->usersFavorite = new ArrayCollection();
        $this->usersParticipation = new ArrayCollection();
        $this->usersLike = new ArrayCollection();
        $this->usersRepost = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getStatus(): ?PostStatus
    {
        return $this->status;
    }

    public function setStatus(?PostStatus $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): static
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return Collection<int, AdminComment>
     */
    public function getAdminComments(): Collection
    {
        return $this->adminComments;
    }

    public function addAdminComment(AdminComment $adminComment): static
    {
        if (!$this->adminComments->contains($adminComment)) {
            $this->adminComments->add($adminComment);
            $adminComment->setPost($this);
        }

        return $this;
    }

    public function removeAdminComment(AdminComment $adminComment): static
    {
        if ($this->adminComments->removeElement($adminComment)) {
            // set the owning side to null (unless already changed)
            if ($adminComment->getPost() === $this) {
                $adminComment->setPost(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Comment>
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): static
    {
        if (!$this->comments->contains($comment)) {
            $this->comments->add($comment);
            $comment->setPost($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): static
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getPost() === $this) {
                $comment->setPost(null);
            }
        }

        return $this;
    }

    public function getType(): ?Category
    {
        return $this->type;
    }

    public function setType(?Category $type): static
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsersFavorite(): Collection
    {
        return $this->usersFavorite;
    }

    public function addUsersFavorite(User $usersFavorite): static
    {
        if (!$this->usersFavorite->contains($usersFavorite)) {
            $this->usersFavorite->add($usersFavorite);
            $usersFavorite->addFavorite($this);
        }

        return $this;
    }

    public function removeUsersFavorite(User $usersFavorite): static
    {
        if ($this->usersFavorite->removeElement($usersFavorite)) {
            $usersFavorite->removeFavorite($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsersParticipation(): Collection
    {
        return $this->usersParticipation;
    }

    public function addUsersParticipation(User $usersParticipation): static
    {
        if (!$this->usersParticipation->contains($usersParticipation)) {
            $this->usersParticipation->add($usersParticipation);
        }

        return $this;
    }

    public function removeUsersParticipation(User $usersParticipation): static
    {
        $this->usersParticipation->removeElement($usersParticipation);

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsersLike(): Collection
    {
        return $this->usersLike;
    }

    public function addUsersLike(User $usersLike): static
    {
        if (!$this->usersLike->contains($usersLike)) {
            $this->usersLike->add($usersLike);
            $usersLike->addLike($this);
        }

        return $this;
    }

    public function removeUsersLike(User $usersLike): static
    {
        if ($this->usersLike->removeElement($usersLike)) {
            $usersLike->removeLike($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsersRepost(): Collection
    {
        return $this->usersRepost;
    }

    public function addUsersRepost(User $usersRepost): static
    {
        if (!$this->usersRepost->contains($usersRepost)) {
            $this->usersRepost->add($usersRepost);
            $usersRepost->addRepost($this);
        }

        return $this;
    }

    public function removeUsersRepost(User $usersRepost): static
    {
        if ($this->usersRepost->removeElement($usersRepost)) {
            $usersRepost->removeRepost($this);
        }

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