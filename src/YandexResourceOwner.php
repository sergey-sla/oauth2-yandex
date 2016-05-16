<?php

namespace Aego\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;

class YandexResourceOwner implements ResourceOwnerInterface
{
    private $response;

    /**
     * Creates a new instance of YandexResourceOwner class.
     *
     * @param array $response
     */
    public function __construct(array $response)
    {
        $this->response = $response;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->response['id'] ?: null;
    }

    /**
     * Gets user nickname.
     *
     * @return string|null
     */
    public function getNickname()
    {
        return $this->response['login'] ?: null;
    }

    /**
     * Gets user email.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->response['default_email'] ?: null;
    }

    /**
     * Gets display name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->response['display_name'] ?: null;
    }

    /**
     * Gets first name.
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->response['first_name'] ?: null;
    }

    /**
     * Gets last name.
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->response['last_name'] ?: null;
    }
    
    /**
     * Get avatar image URL.
     *
     * @return string|null
     */
    public function getAvatar()
    {
        if (!empty($this->response['default_avatar_id'])) {
           return 'http://avatars.yandex.net/get-yapic/'.$this->response['default_avatar_id'].'/big?'.time();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        return $this->response;
    }
}
