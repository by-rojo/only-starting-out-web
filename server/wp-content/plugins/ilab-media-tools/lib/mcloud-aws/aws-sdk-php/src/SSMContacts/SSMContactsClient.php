<?php

namespace MediaCloud\Vendor\Aws\SSMContacts;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Systems Manager Incident Manager Contacts** service.
 * @method \MediaCloud\Vendor\Aws\Result acceptPage(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise acceptPageAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result activateContactChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise activateContactChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createContact(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createContactAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createContactChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createContactChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deactivateContactChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deactivateContactChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteContact(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteContactAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteContactChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteContactChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeEngagement(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeEngagementAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describePage(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describePageAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getContact(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getContactAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getContactChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getContactChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getContactPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getContactPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listContactChannels(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listContactChannelsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listContacts(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listContactsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listEngagements(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listEngagementsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listPageReceipts(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listPageReceiptsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listPagesByContact(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listPagesByContactAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listPagesByEngagement(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listPagesByEngagementAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putContactPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putContactPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result sendActivationCode(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise sendActivationCodeAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startEngagement(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startEngagementAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result stopEngagement(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise stopEngagementAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateContact(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateContactAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateContactChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateContactChannelAsync(array $args = [])
 */
class SSMContactsClient extends AwsClient {}
