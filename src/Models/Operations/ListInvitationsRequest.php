<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend\Models\Operations;

use Clerk\Backend\Utils\SpeakeasyMetadata;
class ListInvitationsRequest
{
    /**
     * Applies a limit to the number of results returned.
     *
     * Can be used for paginating the results together with `offset`.
     *
     * @var ?int $limit
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?int $limit = null;

    /**
     * Skip the first `offset` results when paginating.
     *
     * Needs to be an integer greater or equal to zero.
     * To be used in conjunction with `limit`.
     *
     * @var ?int $offset
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=offset')]
    public ?int $offset = null;

    /**
     * Filter invitations based on their status
     *
     * @var ?ListInvitationsQueryParamStatus $status
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=status')]
    public ?ListInvitationsQueryParamStatus $status = null;

    /**
     * @param  ?int  $limit
     * @param  ?int  $offset
     * @param  ?ListInvitationsQueryParamStatus  $status
     */
    public function __construct(?ListInvitationsQueryParamStatus $status = null, ?int $limit = 10, ?int $offset = 0)
    {
        $this->limit = $limit;
        $this->offset = $offset;
        $this->status = $status;
    }
}