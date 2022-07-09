<?php

namespace MediaCloud\Vendor\Aws\AutoScaling;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * Auto Scaling client.
 *
 * @method \MediaCloud\Vendor\Aws\Result attachInstances(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise attachInstancesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result attachLoadBalancerTargetGroups(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise attachLoadBalancerTargetGroupsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result attachLoadBalancers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise attachLoadBalancersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchDeleteScheduledAction(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchDeleteScheduledActionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchPutScheduledUpdateGroupAction(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchPutScheduledUpdateGroupActionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result cancelInstanceRefresh(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise cancelInstanceRefreshAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result completeLifecycleAction(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise completeLifecycleActionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createAutoScalingGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createAutoScalingGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createLaunchConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createLaunchConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createOrUpdateTags(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createOrUpdateTagsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteAutoScalingGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteAutoScalingGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteLaunchConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteLaunchConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteLifecycleHook(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteLifecycleHookAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteNotificationConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteNotificationConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deletePolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deletePolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteScheduledAction(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteScheduledActionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteTags(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteTagsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteWarmPool(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteWarmPoolAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeAccountLimits(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeAccountLimitsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeAdjustmentTypes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeAdjustmentTypesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeAutoScalingGroups(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeAutoScalingGroupsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeAutoScalingInstances(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeAutoScalingInstancesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeAutoScalingNotificationTypes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeAutoScalingNotificationTypesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeInstanceRefreshes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeInstanceRefreshesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeLaunchConfigurations(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeLaunchConfigurationsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeLifecycleHookTypes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeLifecycleHookTypesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeLifecycleHooks(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeLifecycleHooksAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeLoadBalancerTargetGroups(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeLoadBalancerTargetGroupsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeLoadBalancers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeLoadBalancersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeMetricCollectionTypes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeMetricCollectionTypesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeNotificationConfigurations(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeNotificationConfigurationsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describePolicies(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describePoliciesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeScalingActivities(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeScalingActivitiesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeScalingProcessTypes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeScalingProcessTypesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeScheduledActions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeScheduledActionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeTags(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeTerminationPolicyTypes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeTerminationPolicyTypesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeWarmPool(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeWarmPoolAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result detachInstances(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise detachInstancesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result detachLoadBalancerTargetGroups(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise detachLoadBalancerTargetGroupsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result detachLoadBalancers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise detachLoadBalancersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disableMetricsCollection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disableMetricsCollectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result enableMetricsCollection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise enableMetricsCollectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result enterStandby(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise enterStandbyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result executePolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise executePolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result exitStandby(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise exitStandbyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getPredictiveScalingForecast(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getPredictiveScalingForecastAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putLifecycleHook(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putLifecycleHookAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putNotificationConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putNotificationConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putScalingPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putScalingPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putScheduledUpdateGroupAction(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putScheduledUpdateGroupActionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putWarmPool(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putWarmPoolAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result recordLifecycleActionHeartbeat(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise recordLifecycleActionHeartbeatAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result resumeProcesses(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise resumeProcessesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result setDesiredCapacity(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise setDesiredCapacityAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result setInstanceHealth(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise setInstanceHealthAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result setInstanceProtection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise setInstanceProtectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startInstanceRefresh(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startInstanceRefreshAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result suspendProcesses(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise suspendProcessesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result terminateInstanceInAutoScalingGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise terminateInstanceInAutoScalingGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateAutoScalingGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateAutoScalingGroupAsync(array $args = [])
 */
class AutoScalingClient extends AwsClient {}