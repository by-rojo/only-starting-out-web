<?php

namespace MediaCloud\Vendor\Aws\SSMIncidents;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Systems Manager Incident Manager** service.
 * @method \MediaCloud\Vendor\Aws\Result createReplicationSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createReplicationSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createResponsePlan(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createResponsePlanAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createTimelineEvent(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createTimelineEventAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteIncidentRecord(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteIncidentRecordAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteReplicationSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteReplicationSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteResourcePolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteResourcePolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteResponsePlan(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteResponsePlanAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteTimelineEvent(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteTimelineEventAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getIncidentRecord(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getIncidentRecordAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getReplicationSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getReplicationSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getResourcePolicies(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getResourcePoliciesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getResponsePlan(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getResponsePlanAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getTimelineEvent(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getTimelineEventAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listIncidentRecords(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listIncidentRecordsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listRelatedItems(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listRelatedItemsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listReplicationSets(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listReplicationSetsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listResponsePlans(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listResponsePlansAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTimelineEvents(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTimelineEventsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putResourcePolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putResourcePolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startIncident(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startIncidentAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateDeletionProtection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateDeletionProtectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateIncidentRecord(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateIncidentRecordAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateRelatedItems(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateRelatedItemsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateReplicationSet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateReplicationSetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateResponsePlan(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateResponsePlanAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateTimelineEvent(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateTimelineEventAsync(array $args = [])
 */
class SSMIncidentsClient extends AwsClient {}
