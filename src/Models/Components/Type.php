<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Components;


enum Type: string
{
    case OauthGoogle = 'oauth_google';
    case OauthMock = 'oauth_mock';
    case Saml = 'saml';
    case OauthApple = 'oauth_apple';
    case OauthDiscord = 'oauth_discord';
    case OauthMicrosoft = 'oauth_microsoft';
    case OauthGithub = 'oauth_github';
}
