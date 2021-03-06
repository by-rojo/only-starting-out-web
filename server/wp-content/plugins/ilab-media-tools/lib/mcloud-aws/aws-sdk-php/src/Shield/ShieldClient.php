<?php

namespace MediaCloud\Vendor\Aws\Shield;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Shield** service.
 * @method \MediaCloud\Vendor\Aws\Result associateDRTLogBucket(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateDRTLogBucketAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result associateDRTRole(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateDRTRoleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result associateHealthCheck(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateHealthCheckAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result associateProactiveEngagementDetails(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateProactiveEngagementDetailsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createProtection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createProtectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createProtectionGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createProtectionGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createSubscription(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createSubscriptionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteProtection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteProtectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteProtectionGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteProtectionGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteSubscription(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteSubscriptionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeAttack(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeAttackAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeAttackStatistics(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeAttackStatisticsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeDRTAccess(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeDRTAccessAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeEmergencyContactSettings(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeEmergencyContactSettingsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeProtection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeProtectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeProtectionGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeProtectionGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeSubscription(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeSubscriptionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disableApplicationLayerAutomaticResponse(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disableApplicationLayerAutomaticResponseAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disableProactiveEngagement(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disableProactiveEngagementAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateDRTLogBucket(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateDRTLogBucketAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateDRTRole(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateDRTRoleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateHealthCheck(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateHealthCheckAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result enableApplicationLayerAutomaticResponse(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise enableApplicationLayerAutomaticResponseAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result enableProactiveEngagement(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise enableProactiveEngagementAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getSubscriptionState(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getSubscriptionStateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listAttacks(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listAttacksAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listProtectionGroups(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listProtectionGroupsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listProtections(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listProtectionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listResourcesInProtectionGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listResourcesInProtectionGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateApplicationLayerAutomaticResponse(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateApplicationLayerAutomaticResponseAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateEmergencyContactSettings(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateEmergencyContactSettingsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateProtectionGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateProtectionGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateSubscription(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateSubscriptionAsync(array $args = [])
 */
class ShieldClient extends AwsClient {}
