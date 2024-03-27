<?php

namespace App\Entity;



use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Security\Role\RoleConverter;
use App\Repository\RoleRepository;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface

{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(type: 'string')]
    private string $password;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $first_name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $last_name = null;

    #[ORM\Column(nullable: true)]
    private ?bool $online = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $avatar_img = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $created_at = null;

    #[ORM\OneToMany(mappedBy: 'admin', targetEntity: AdminComment::class, cascade: ['remove'])]
    private Collection $adminComments;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Comment::class, cascade: ['remove'])]
    private Collection $comments;

    #[ORM\Column(length: 255)]
    private ?string $address = null;

    #[ORM\ManyToOne(inversedBy: 'users')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Role $role = null;

    #[ORM\Column(length: 10)]
    private ?string $police = null;

    #[ORM\ManyToMany(targetEntity: Post::class, inversedBy: 'usersFavorite', cascade: ['remove'])]
    #[ORM\JoinTable(name: 'user_post_favorite')]
    private Collection $favorites;

    #[ORM\ManyToMany(targetEntity: Post::class, mappedBy: 'usersParticipation', cascade: ['remove'])]
    #[ORM\JoinTable(name: 'user_post_participation')]
    private Collection $postsParticipation;

    #[ORM\ManyToMany(targetEntity: Post::class, inversedBy: 'usersLike', cascade: ['remove'])]
    #[ORM\JoinTable(name: 'user_post_like')]
    private Collection $likes;

    #[ORM\ManyToMany(targetEntity: Post::class, inversedBy: 'usersRepost', cascade: ['remove'])]
    #[ORM\JoinTable(name: 'user_post_repost')]
    private Collection $reposts;

    #[ORM\ManyToMany(targetEntity: self::class, inversedBy: 'following', cascade: ['remove'])]
    #[ORM\JoinTable(name: 'user_follow')]
    private Collection $follows;

    #[ORM\ManyToMany(targetEntity: self::class, mappedBy: 'follows', cascade: ['remove'])]
    private Collection $following;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Post::class, cascade: ['remove'])]
    private Collection $posts;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: CommentResponse::class, cascade: ['remove'])]
    private Collection $commentResponses;


    public function __construct()
    {
        $this->favorites = new ArrayCollection();
        $this->adminComments = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->postsParticipation = new ArrayCollection();
        $this->likes = new ArrayCollection();
        $this->reposts = new ArrayCollection();
        $this->follows = new ArrayCollection();
        $this->following = new ArrayCollection();
        $this->posts = new ArrayCollection();
        $this->commentResponses = new ArrayCollection();
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(?string $first_name): static
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(?string $last_name): static
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function isOnline(): ?bool
    {
        return $this->online;
    }

    public function setOnline(?bool $online): static
    {
        $this->online = $online;

        return $this;
    }

    public function getAvatarImg(): ?string
    {
        return $this->avatar_img;
    }

    public function setAvatarImg(?string $avatar_img): static
    {
        $this->avatar_img = $avatar_img;

        return $this;
    }

    /**
     * The public representation of the user (e.g. a username, an email address, etc.)
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $newPassword = password_hash($password, PASSWORD_BCRYPT, $cost = [15]);
        $this->password = $newPassword;

        return $this;
    }

    /**
     * Returning a salt is only needed if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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
            $adminComment->setAdmin($this);
        }

        return $this;
    }

    public function removeAdminComment(AdminComment $adminComment): static
    {
        if ($this->adminComments->removeElement($adminComment)) {
            // set the owning side to null (unless already changed)
            if ($adminComment->getAdmin() === $this) {
                $adminComment->setAdmin(null);
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
            $comment->setUser($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): static
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getUser() === $this) {
                $comment->setUser(null);
            }
        }

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getRoles(): array
    {
        $roleConverter = new RoleConverter();
        return $roleConverter->intToRole($this->role->getId());
    }

    public function setRoles($role, RoleRepository $roleRepo): static
    {
        $roleConverter = new RoleConverter();
        $this->role = $roleConverter->roleToInt([$role], $roleRepo);
        return $this;
    }

    public function getPolice(): ?string
    {
        return $this->police;
    }

    public function setPolice(string $police): static
    {
        $this->police = $police;

        return $this;
    }

    /**
     * @return Collection<int, Post>
     */
    public function getFavorites(): Collection
    {
        return $this->favorites;
    }

    public function addFavorite(Post $favorite): static
    {
        if (!$this->favorites->contains($favorite)) {
            $this->favorites->add($favorite);
        }

        return $this;
    }

    public function removeFavorite(Post $favorite): static
    {
        $this->favorites->removeElement($favorite);

        return $this;
    }

    /**
     * @return Collection<int, Post>
     */
    public function getPostsParticipation(): Collection
    {
        return $this->postsParticipation;
    }

    public function addPostsParticipation(Post $postsParticipation): static
    {
        if (!$this->postsParticipation->contains($postsParticipation)) {
            $this->postsParticipation->add($postsParticipation);
            $postsParticipation->addUsersParticipation($this);
        }

        return $this;
    }

    public function removePostsParticipation(Post $postsParticipation): static
    {
        if ($this->postsParticipation->removeElement($postsParticipation)) {
            $postsParticipation->removeUsersParticipation($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Post>
     */
    public function getLikes(): Collection
    {
        return $this->likes;
    }

    public function addLike(Post $like): static
    {
        if (!$this->likes->contains($like)) {
            $this->likes->add($like);
        }

        return $this;
    }

    public function removeLike(Post $like): static
    {
        $this->likes->removeElement($like);

        return $this;
    }

    /**
     * @return Collection<int, Post>
     */
    public function getReposts(): Collection
    {
        return $this->reposts;
    }

    public function addRepost(Post $repost): static
    {
        if (!$this->reposts->contains($repost)) {
            $this->reposts->add($repost);
        }

        return $this;
    }

    public function removeRepost(Post $repost): static
    {
        $this->reposts->removeElement($repost);

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getFollows(): Collection
    {
        return $this->follows;
    }

    public function addFollow(self $follow): static
    {
        if (!$this->follows->contains($follow)) {
            $this->follows->add($follow);
        }

        return $this;
    }

    public function removeFollow(self $follow): static
    {
        $this->follows->removeElement($follow);

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getFollowing(): Collection
    {
        return $this->following;
    }

    public function addFollowing(self $following): static
    {
        if (!$this->following->contains($following)) {
            $this->following->add($following);
            $following->addFollow($this);
        }

        return $this;
    }

    public function isFollowing(User $userToCheck): bool
    {
        return $this->following->contains($userToCheck);
    }

    public function removeFollowing(self $following): static
    {
        if ($this->following->removeElement($following)) {
            $following->removeFollow($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Post>
     */
    public function getPosts(): Collection
    {
        return $this->posts;
    }

    public function addPost(Post $post): static
    {
        if (!$this->posts->contains($post)) {
            $this->posts->add($post);
            $post->setUser($this);
        }

        return $this;
    }

    public function removePost(Post $post): static
    {
        if ($this->posts->removeElement($post)) {
            // set the owning side to null (unless already changed)
            if ($post->getUser() === $this) {
                $post->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, CommentResponse>
     */
    public function getCommentResponses(): Collection
    {
        return $this->commentResponses;
    }

    public function addCommentResponse(CommentResponse $commentResponse): static
    {
        if (!$this->commentResponses->contains($commentResponse)) {
            $this->commentResponses->add($commentResponse);
            $commentResponse->setUser($this);
        }

        return $this;
    }

    public function removeCommentResponse(CommentResponse $commentResponse): static
    {
        if ($this->commentResponses->removeElement($commentResponse)) {
            // set the owning side to null (unless already changed)
            if ($commentResponse->getUser() === $this) {
                $commentResponse->setUser(null);
            }
        }

        return $this;
    }
}
