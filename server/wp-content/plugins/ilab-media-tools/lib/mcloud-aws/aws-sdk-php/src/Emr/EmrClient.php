<?php

namespace MediaCloud\Vendor\Aws\Emr;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Elastic MapReduce (Amazon EMR)** service.
 *
 * @method \MediaCloud\Vendor\Aws\Result addInstanceFleet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise addInstanceFleetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result addInstanceGroups(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise addInstanceGroupsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result addJobFlowSteps(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise addJobFlowStepsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result addTags(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise addTagsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result cancelSteps(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise cancelStepsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createSecurityConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createSecurityConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createStudio(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createStudioAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createStudioSessionMapping(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createStudioSessionMappingAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteSecurityConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteSecurityConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteStudio(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteStudioAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteStudioSessionMapping(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteStudioSessionMappingAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeCluster(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeClusterAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeJobFlows(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeJobFlowsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeNotebookExecution(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeNotebookExecutionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeReleaseLabel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeReleaseLabelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeSecurityConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeSecurityConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeStep(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeStepAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeStudio(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeStudioAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getAutoTerminationPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getAutoTerminationPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getBlockPublicAccessConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getBlockPublicAccessConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getManagedScalingPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getManagedScalingPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getStudioSessionMapping(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getStudioSessionMappingAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listBootstrapActions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listBootstrapActionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listClusters(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listClustersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listInstanceFleets(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listInstanceFleetsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listInstanceGroups(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listInstanceGroupsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listInstances(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listInstancesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listNotebookExecutions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listNotebookExecutionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listReleaseLabels(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listReleaseLabelsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listSecurityConfigurations(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listSecurityConfigurationsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listSteps(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listStepsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listStudioSessionMappings(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listStudioSessionMappingsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listStudios(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listStudiosAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result modifyCluster(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise modifyClusterAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result modifyInstanceFleet(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise modifyInstanceFleetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result modifyInstanceGroups(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise modifyInstanceGroupsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putAutoScalingPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putAutoScalingPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putAutoTerminationPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putAutoTerminationPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putBlockPublicAccessConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putBlockPublicAccessConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putManagedScalingPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putManagedScalingPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result removeAutoScalingPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise removeAutoScalingPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result removeAutoTerminationPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise removeAutoTerminationPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result removeManagedScalingPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise removeManagedScalingPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result removeTags(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise removeTagsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result runJobFlow(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise runJobFlowAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result setTerminationProtection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise setTerminationProtectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result setVisibleToAllUsers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise setVisibleToAllUsersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startNotebookExecution(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startNotebookExecutionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result stopNotebookExecution(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise stopNotebookExecutionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result terminateJobFlows(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise terminateJobFlowsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateStudio(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateStudioAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateStudioSessionMapping(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateStudioSessionMappingAsync(array $args = [])
 */
class EmrClient extends AwsClient {}
