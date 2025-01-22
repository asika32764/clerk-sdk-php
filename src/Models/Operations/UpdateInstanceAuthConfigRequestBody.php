<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;


class UpdateInstanceAuthConfigRequestBody
{
    /**
     * The local part of the email address from which authentication-related emails (e.g. OTP code, magic links) will be sent.
     *
     * Only alphanumeric values are allowed.
     * Note that this value should contain only the local part of the address (e.g. `foo` for `foo@example.com`).
     *
     * @var ?string $fromEmailAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('from_email_address')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $fromEmailAddress = null;

    /**
     * Enable the Progressive Sign Up algorithm. Refer to the [docs](https://clerk.com/docs/upgrade-guides/progressive-sign-up) for more info.
     *
     * @var ?bool $progressiveSignUp
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('progressive_sign_up')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $progressiveSignUp = null;

    /**
     * The name of the JWT Template used to augment your session tokens. To disable this, pass an empty string.
     *
     * @var ?string $sessionTokenTemplate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('session_token_template')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $sessionTokenTemplate = null;

    /**
     * The "enhanced_email_deliverability" feature will send emails from "verifications@clerk.dev" instead of your domain.
     *
     * This can be helpful if you do not have a high domain reputation.
     *
     * @var ?bool $enhancedEmailDeliverability
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('enhanced_email_deliverability')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $enhancedEmailDeliverability = null;

    /**
     * Toggles test mode for this instance, allowing the use of test email addresses and phone numbers.
     *
     * Defaults to true for development instances.
     *
     * @var ?bool $testMode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('test_mode')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $testMode = null;

    /**
     * Whether sign up is restricted to email addresses, phone numbers and usernames that are on the allowlist.
     *
     * @var ?bool $restrictedToAllowlist
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('restricted_to_allowlist')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $restrictedToAllowlist = null;

    /**
     * @param  ?bool  $restrictedToAllowlist
     * @param  ?string  $fromEmailAddress
     * @param  ?bool  $progressiveSignUp
     * @param  ?string  $sessionTokenTemplate
     * @param  ?bool  $enhancedEmailDeliverability
     * @param  ?bool  $testMode
     */
    public function __construct(?string $fromEmailAddress = null, ?bool $progressiveSignUp = null, ?string $sessionTokenTemplate = null, ?bool $enhancedEmailDeliverability = null, ?bool $testMode = null, ?bool $restrictedToAllowlist = false)
    {
        $this->fromEmailAddress = $fromEmailAddress;
        $this->progressiveSignUp = $progressiveSignUp;
        $this->sessionTokenTemplate = $sessionTokenTemplate;
        $this->enhancedEmailDeliverability = $enhancedEmailDeliverability;
        $this->testMode = $testMode;
        $this->restrictedToAllowlist = $restrictedToAllowlist;
    }
}