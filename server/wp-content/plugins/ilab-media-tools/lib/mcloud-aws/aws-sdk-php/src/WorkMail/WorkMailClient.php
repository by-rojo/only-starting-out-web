<?php

namespace MediaCloud\Vendor\Aws\WorkMail;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon WorkMail** service.
 * @method \MediaCloud\Vendor\Aws\Result associateDelegateToResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateDelegateToResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result associateMemberToGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateMemberToGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result cancelMailboxExportJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise cancelMailboxExportJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createAlias(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createAliasAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createMobileDeviceAccessRule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createMobileDeviceAccessRuleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createOrganization(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createOrganizationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteAccessControlRule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteAccessControlRuleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteAlias(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteAliasAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteEmailMonitoringConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteEmailMonitoringConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteMailboxPermissions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteMailboxPermissionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteMobileDeviceAccessOverride(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteMobileDeviceAccessOverrideAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteMobileDeviceAccessRule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteMobileDeviceAccessRuleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteOrganization(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteOrganizationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteRetentionPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteRetentionPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deregisterFromWorkMail(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deregisterFromWorkMailAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deregisterMailDomain(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deregisterMailDomainAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeEmailMonitoringConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeEmailMonitoringConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeInboundDmarcSettings(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeInboundDmarcSettingsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeMailboxExportJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeMailboxExportJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeOrganization(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeOrganizationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateDelegateFromResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateDelegateFromResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateMemberFromGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateMemberFromGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getAccessControlEffect(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getAccessControlEffectAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getDefaultRetentionPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getDefaultRetentionPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getMailDomain(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getMailDomainAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getMailboxDetails(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getMailboxDetailsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getMobileDeviceAccessEffect(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getMobileDeviceAccessEffectAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getMobileDeviceAccessOverride(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getMobileDeviceAccessOverrideAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listAccessControlRules(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listAccessControlRulesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listAliases(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listAliasesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listGroupMembers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listGroupMembersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listGroups(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listGroupsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listMailDomains(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listMailDomainsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listMailboxExportJobs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listMailboxExportJobsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listMailboxPermissions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listMailboxPermissionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listMobileDeviceAccessOverrides(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listMobileDeviceAccessOverridesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listMobileDeviceAccessRules(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listMobileDeviceAccessRulesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listOrganizations(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listOrganizationsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listResourceDelegates(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listResourceDelegatesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listResources(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listResourcesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listUsers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listUsersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putAccessControlRule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putAccessControlRuleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putEmailMonitoringConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putEmailMonitoringConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putInboundDmarcSettings(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putInboundDmarcSettingsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putMailboxPermissions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putMailboxPermissionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putMobileDeviceAccessOverride(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putMobileDeviceAccessOverrideAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putRetentionPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putRetentionPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result registerMailDomain(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise registerMailDomainAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result registerToWorkMail(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise registerToWorkMailAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result resetPassword(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise resetPasswordAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startMailboxExportJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startMailboxExportJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateDefaultMailDomain(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateDefaultMailDomainAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateMailboxQuota(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateMailboxQuotaAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateMobileDeviceAccessRule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateMobileDeviceAccessRuleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updatePrimaryEmailAddress(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updatePrimaryEmailAddressAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateResourceAsync(array $args = [])
 */
class WorkMailClient extends AwsClient {}
