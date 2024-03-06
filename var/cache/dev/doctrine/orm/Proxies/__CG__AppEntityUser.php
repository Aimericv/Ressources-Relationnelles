<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'address' => [parent::class, 'address', null],
        "\0".parent::class."\0".'adminComments' => [parent::class, 'adminComments', null],
        "\0".parent::class."\0".'avatar_img' => [parent::class, 'avatar_img', null],
        "\0".parent::class."\0".'comments' => [parent::class, 'comments', null],
        "\0".parent::class."\0".'created_at' => [parent::class, 'created_at', null],
        "\0".parent::class."\0".'email' => [parent::class, 'email', null],
        "\0".parent::class."\0".'first_name' => [parent::class, 'first_name', null],
        "\0".parent::class."\0".'following' => [parent::class, 'following', null],
        "\0".parent::class."\0".'follows' => [parent::class, 'follows', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'last_name' => [parent::class, 'last_name', null],
        "\0".parent::class."\0".'online' => [parent::class, 'online', null],
        "\0".parent::class."\0".'password' => [parent::class, 'password', null],
        "\0".parent::class."\0".'post' => [parent::class, 'post', null],
        "\0".parent::class."\0".'role' => [parent::class, 'role', null],
        "\0".parent::class."\0".'userParticipations' => [parent::class, 'userParticipations', null],
        'address' => [parent::class, 'address', null],
        'adminComments' => [parent::class, 'adminComments', null],
        'avatar_img' => [parent::class, 'avatar_img', null],
        'comments' => [parent::class, 'comments', null],
        'created_at' => [parent::class, 'created_at', null],
        'email' => [parent::class, 'email', null],
        'first_name' => [parent::class, 'first_name', null],
        'following' => [parent::class, 'following', null],
        'follows' => [parent::class, 'follows', null],
        'id' => [parent::class, 'id', null],
        'last_name' => [parent::class, 'last_name', null],
        'online' => [parent::class, 'online', null],
        'password' => [parent::class, 'password', null],
        'post' => [parent::class, 'post', null],
        'role' => [parent::class, 'role', null],
        'userParticipations' => [parent::class, 'userParticipations', null],
    ];

    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {
        if ($cloner !== null) {
            return;
        }

        self::createLazyGhost($initializer, [
            "\0".parent::class."\0".'id' => true,
        ], $this);
    }

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"], $properties['__isCloning']);

        return $properties;
    }
}
