<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend;



/**
 * ClerkBackend - Clerk Backend API: The Clerk REST Backend API, meant to be accessed by backend
 *
 * servers.
 *
 * ### Versions
 *
 * When the API changes in a way that isn't compatible with older versions, a new version is released.
 * Each version is identified by its release date, e.g. `2021-02-05`. For more information, please see [Clerk API Versions](https://clerk.com/docs/backend-requests/versioning/overview).
 *
 *
 * Please see https://clerk.com/docs for more information.
 * https://clerk.com/docs
 *
 * @see https://clerk.com/docs
 */
class ClerkBackend
{
    public const SERVERS = [
        'https://api.clerk.com/v1',
    ];

    /**
     * Various endpoints that do not belong in any particular category.
     *
     * @var Miscellaneous $$miscellaneous
     */
    public Miscellaneous $miscellaneous;

    public Jwks $jwks;

    /**
     * The Client object tracks sessions, as well as the state of any sign in and sign up attempts, for a given device.
     *
     * @var Clients $$clients
     */
    public Clients $clients;

    public EmailAddresses $emailAddresses;

    public PhoneNumbers $phoneNumbers;

    /**
     * The Session object is an abstraction over an HTTP session.
     *
     * It models the period of information exchange between a user and the server.
     * Sessions are created when a user successfully goes through the sign in or sign up flows.
     *
     * @var Sessions $$sessions
     */
    public Sessions $sessions;

    public EmailSMSTemplates $emailSMSTemplates;

    public EmailAndSmsTemplates $emailAndSmsTemplates;

    public Templates $templates;

    /**
     * The user object represents a user that has successfully signed up to your application.
     *
     * @var Users $$users
     */
    public Users $users;

    /**
     * Invitations allow you to invite someone to sign up to your application, via email.
     *
     * @var Invitations $$invitations
     */
    public Invitations $invitations;

    public OrganizationInvitations $organizationInvitations;

    public AllowlistBlocklist $allowlistBlocklist;

    public AllowlistIdentifiers $allowlistIdentifiers;

    public BlocklistIdentifiers $blocklistIdentifiers;

    public BetaFeatures $betaFeatures;

    public ActorTokens $actorTokens;

    /**
     * Domains represent each instance's URLs and DNS setup.
     *
     * @var Domains $$domains
     */
    public Domains $domains;

    public InstanceSettings $instanceSettings;

    /**
     * You can configure webhooks to be notified about various events that happen on your instance.
     *
     * @var Webhooks $$webhooks
     */
    public Webhooks $webhooks;

    public JwtTemplates $jwtTemplates;

    /**
     * Organizations are used to group members under a common entity and provide shared access to resources.
     *
     * @var Organizations $$organizations
     */
    public Organizations $organizations;

    public OrganizationMemberships $organizationMemberships;

    public OrganizationDomains $organizationDomains;

    public OrganizationDomain $organizationDomain;

    public ProxyChecks $proxyChecks;

    public RedirectURLs $redirectURLs;

    public ClerkBackendRedirectUrls $redirectUrls;

    public SignInTokens $signInTokens;

    public SignUps $signUps;

    public OauthApplications $oauthApplications;

    public SamlConnections $samlConnections;

    public TestingTokens $testingTokens;

    /**
     * Returns a new instance of the SDK builder used to configure and create the SDK instance.
     *
     * @return ClerkBackendBuilder
     */
    public static function builder(): ClerkBackendBuilder
    {
        return new ClerkBackendBuilder();
    }

    /**
     * @param  SDKConfiguration  $sdkConfiguration
     */
    public function __construct(
        public SDKConfiguration $sdkConfiguration,
    ) {
        $this->miscellaneous = new Miscellaneous($this->sdkConfiguration);
        $this->jwks = new Jwks($this->sdkConfiguration);
        $this->clients = new Clients($this->sdkConfiguration);
        $this->emailAddresses = new EmailAddresses($this->sdkConfiguration);
        $this->phoneNumbers = new PhoneNumbers($this->sdkConfiguration);
        $this->sessions = new Sessions($this->sdkConfiguration);
        $this->emailSMSTemplates = new EmailSMSTemplates($this->sdkConfiguration);
        $this->emailAndSmsTemplates = new EmailAndSmsTemplates($this->sdkConfiguration);
        $this->templates = new Templates($this->sdkConfiguration);
        $this->users = new Users($this->sdkConfiguration);
        $this->invitations = new Invitations($this->sdkConfiguration);
        $this->organizationInvitations = new OrganizationInvitations($this->sdkConfiguration);
        $this->allowlistBlocklist = new AllowlistBlocklist($this->sdkConfiguration);
        $this->allowlistIdentifiers = new AllowlistIdentifiers($this->sdkConfiguration);
        $this->blocklistIdentifiers = new BlocklistIdentifiers($this->sdkConfiguration);
        $this->betaFeatures = new BetaFeatures($this->sdkConfiguration);
        $this->actorTokens = new ActorTokens($this->sdkConfiguration);
        $this->domains = new Domains($this->sdkConfiguration);
        $this->instanceSettings = new InstanceSettings($this->sdkConfiguration);
        $this->webhooks = new Webhooks($this->sdkConfiguration);
        $this->jwtTemplates = new JwtTemplates($this->sdkConfiguration);
        $this->organizations = new Organizations($this->sdkConfiguration);
        $this->organizationMemberships = new OrganizationMemberships($this->sdkConfiguration);
        $this->organizationDomains = new OrganizationDomains($this->sdkConfiguration);
        $this->organizationDomain = new OrganizationDomain($this->sdkConfiguration);
        $this->proxyChecks = new ProxyChecks($this->sdkConfiguration);
        $this->redirectURLs = new RedirectURLs($this->sdkConfiguration);
        $this->redirectUrls = new ClerkBackendRedirectUrls($this->sdkConfiguration);
        $this->signInTokens = new SignInTokens($this->sdkConfiguration);
        $this->signUps = new SignUps($this->sdkConfiguration);
        $this->oauthApplications = new OauthApplications($this->sdkConfiguration);
        $this->samlConnections = new SamlConnections($this->sdkConfiguration);
        $this->testingTokens = new TestingTokens($this->sdkConfiguration);
        $this->sdkConfiguration->client = $this->sdkConfiguration->initHooks($this->sdkConfiguration->client);

    }
}