<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;

use Clerk\Backend\Utils\SpeakeasyMetadata;
class GetUsersCountRequest
{
    /**
     * Counts users with the specified email addresses.
     *
     * Accepts up to 100 email addresses.
     * Any email addresses not found are ignored.
     *
     * @var ?array<string> $emailAddress
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=email_address')]
    public ?array $emailAddress = null;

    /**
     * Counts users with the specified phone numbers.
     *
     * Accepts up to 100 phone numbers.
     * Any phone numbers not found are ignored.
     *
     * @var ?array<string> $phoneNumber
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=phone_number')]
    public ?array $phoneNumber = null;

    /**
     * Counts users with the specified external ids.
     *
     * Accepts up to 100 external ids.
     * Any external ids not found are ignored.
     *
     * @var ?array<string> $externalId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=external_id')]
    public ?array $externalId = null;

    /**
     * Counts users with the specified usernames.
     *
     * Accepts up to 100 usernames.
     * Any usernames not found are ignored.
     *
     * @var ?array<string> $username
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=username')]
    public ?array $username = null;

    /**
     * Counts users with the specified web3 wallet addresses.
     *
     * Accepts up to 100 web3 wallet addresses.
     * Any web3 wallet addressed not found are ignored.
     *
     * @var ?array<string> $web3Wallet
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=web3_wallet')]
    public ?array $web3Wallet = null;

    /**
     * Counts users with the user ids specified.
     *
     * Accepts up to 100 user ids.
     * Any user ids not found are ignored.
     *
     * @var ?array<string> $userId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=user_id')]
    public ?array $userId = null;

    /**
     * Counts users that match the given query.
     *
     * For possible matches, we check the email addresses, phone numbers, usernames, web3 wallets, user ids, first and last names.
     * The query value doesn't need to match the exact value you are looking for, it is capable of partial matches as well.
     *
     * @var ?string $query
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=query')]
    public ?string $query = null;

    /**
     * Counts users with emails that match the given query, via case-insensitive partial match.
     *
     * For example, `email_address_query=ello` will match a user with the email `HELLO@example.com`,
     * and will be included in the resulting count.
     *
     * @var ?string $emailAddressQuery
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=email_address_query')]
    public ?string $emailAddressQuery = null;

    /**
     * Counts users with phone numbers that match the given query, via case-insensitive partial match.
     *
     * For example, `phone_number_query=555` will match a user with the phone number `+1555xxxxxxx`,
     * and will be included in the resulting count.
     *
     * @var ?string $phoneNumberQuery
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=phone_number_query')]
    public ?string $phoneNumberQuery = null;

    /**
     * Counts users with usernames that match the given query, via case-insensitive partial match.
     *
     * For example, `username_query=CoolUser` will match a user with the username `SomeCoolUser`,
     * and will be included in the resulting count.
     *
     * @var ?string $usernameQuery
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=username_query')]
    public ?string $usernameQuery = null;

    /**
     * @param  ?array<string>  $emailAddress
     * @param  ?array<string>  $phoneNumber
     * @param  ?array<string>  $externalId
     * @param  ?array<string>  $username
     * @param  ?array<string>  $web3Wallet
     * @param  ?array<string>  $userId
     * @param  ?string  $query
     * @param  ?string  $emailAddressQuery
     * @param  ?string  $phoneNumberQuery
     * @param  ?string  $usernameQuery
     */
    public function __construct(?array $emailAddress = null, ?array $phoneNumber = null, ?array $externalId = null, ?array $username = null, ?array $web3Wallet = null, ?array $userId = null, ?string $query = null, ?string $emailAddressQuery = null, ?string $phoneNumberQuery = null, ?string $usernameQuery = null)
    {
        $this->emailAddress = $emailAddress;
        $this->phoneNumber = $phoneNumber;
        $this->externalId = $externalId;
        $this->username = $username;
        $this->web3Wallet = $web3Wallet;
        $this->userId = $userId;
        $this->query = $query;
        $this->emailAddressQuery = $emailAddressQuery;
        $this->phoneNumberQuery = $phoneNumberQuery;
        $this->usernameQuery = $usernameQuery;
    }
}