<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Post extends \App\Entity\Post implements \Doctrine\ORM\Proxy\InternalProxy
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
        "\0".parent::class."\0".'author' => [parent::class, 'author', null],
        "\0".parent::class."\0".'category' => [parent::class, 'category', null],
        "\0".parent::class."\0".'comments' => [parent::class, 'comments', null],
        "\0".parent::class."\0".'created_at' => [parent::class, 'created_at', null],
        "\0".parent::class."\0".'description' => [parent::class, 'description', null],
        "\0".parent::class."\0".'favorites' => [parent::class, 'favorites', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'post' => [parent::class, 'post', null],
        "\0".parent::class."\0".'status' => [parent::class, 'status', null],
        "\0".parent::class."\0".'title' => [parent::class, 'title', null],
        "\0".parent::class."\0".'type' => [parent::class, 'type', null],
        "\0".parent::class."\0".'user' => [parent::class, 'user', null],
        "\0".parent::class."\0".'userParticipations' => [parent::class, 'userParticipations', null],
        'address' => [parent::class, 'address', null],
        'adminComments' => [parent::class, 'adminComments', null],
        'author' => [parent::class, 'author', null],
        'category' => [parent::class, 'category', null],
        'comments' => [parent::class, 'comments', null],
        'created_at' => [parent::class, 'created_at', null],
        'description' => [parent::class, 'description', null],
        'favorites' => [parent::class, 'favorites', null],
        'id' => [parent::class, 'id', null],
        'post' => [parent::class, 'post', null],
        'status' => [parent::class, 'status', null],
        'title' => [parent::class, 'title', null],
        'type' => [parent::class, 'type', null],
        'user' => [parent::class, 'user', null],
        'userParticipations' => [parent::class, 'userParticipations', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
