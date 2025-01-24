<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Components;


class OAuthApplication
{
    /**
     *
     * @var OAuthApplicationObject $object
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('object')]
    #[\Speakeasy\Serializer\Annotation\Type('\Clerk\Backend\Models\Components\OAuthApplicationObject')]
    public OAuthApplicationObject $object;

    /**
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var string $instanceId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('instance_id')]
    public string $instanceId;

    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var string $clientId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('client_id')]
    public string $clientId;

    /**
     *
     * @var bool $public
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('public')]
    public bool $public;

    /**
     *
     * @var string $scopes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('scopes')]
    public string $scopes;

    /**
     *
     * @var string $callbackUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('callback_url')]
    public string $callbackUrl;

    /**
     *
     * @var string $authorizeUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('authorize_url')]
    public string $authorizeUrl;

    /**
     *
     * @var string $tokenFetchUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('token_fetch_url')]
    public string $tokenFetchUrl;

    /**
     *
     * @var string $userInfoUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('user_info_url')]
    public string $userInfoUrl;

    /**
     *
     * @var string $discoveryUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('discovery_url')]
    public string $discoveryUrl;

    /**
     *
     * @var string $tokenIntrospectionUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('token_introspection_url')]
    public string $tokenIntrospectionUrl;

    /**
     * Unix timestamp of creation.
     *
     *
     *
     * @var int $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public int $createdAt;

    /**
     * Unix timestamp of last update.
     *
     *
     *
     * @var int $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    public int $updatedAt;

    /**
     * @param  OAuthApplicationObject  $object
     * @param  string  $id
     * @param  string  $instanceId
     * @param  string  $name
     * @param  string  $clientId
     * @param  bool  $public
     * @param  string  $scopes
     * @param  string  $callbackUrl
     * @param  string  $authorizeUrl
     * @param  string  $tokenFetchUrl
     * @param  string  $userInfoUrl
     * @param  string  $discoveryUrl
     * @param  string  $tokenIntrospectionUrl
     * @param  int  $createdAt
     * @param  int  $updatedAt
     */
    public function __construct(OAuthApplicationObject $object, string $id, string $instanceId, string $name, string $clientId, bool $public, string $scopes, string $callbackUrl, string $authorizeUrl, string $tokenFetchUrl, string $userInfoUrl, string $discoveryUrl, string $tokenIntrospectionUrl, int $createdAt, int $updatedAt)
    {
        $this->object = $object;
        $this->id = $id;
        $this->instanceId = $instanceId;
        $this->name = $name;
        $this->clientId = $clientId;
        $this->public = $public;
        $this->scopes = $scopes;
        $this->callbackUrl = $callbackUrl;
        $this->authorizeUrl = $authorizeUrl;
        $this->tokenFetchUrl = $tokenFetchUrl;
        $this->userInfoUrl = $userInfoUrl;
        $this->discoveryUrl = $discoveryUrl;
        $this->tokenIntrospectionUrl = $tokenIntrospectionUrl;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
}