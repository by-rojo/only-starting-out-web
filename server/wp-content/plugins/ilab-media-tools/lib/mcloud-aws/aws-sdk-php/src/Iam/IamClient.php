<?php

namespace MediaCloud\Vendor\Aws\Iam;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Identity and Access Management (AWS IAM)** service.
 *
 * @method \MediaCloud\Vendor\Aws\Result addClientIDToOpenIDConnectProvider(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise addClientIDToOpenIDConnectProviderAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result addRoleToInstanceProfile(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise addRoleToInstanceProfileAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result addUserToGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise addUserToGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result attachGroupPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise attachGroupPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result attachRolePolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise attachRolePolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result attachUserPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise attachUserPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result changePassword(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise changePasswordAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createAccessKey(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createAccessKeyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createAccountAlias(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createAccountAliasAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createInstanceProfile(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createInstanceProfileAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createLoginProfile(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createLoginProfileAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createOpenIDConnectProvider(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createOpenIDConnectProviderAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createPolicyVersion(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createPolicyVersionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createRole(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createRoleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createSAMLProvider(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createSAMLProviderAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createServiceLinkedRole(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createServiceLinkedRoleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createServiceSpecificCredential(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createServiceSpecificCredentialAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createVirtualMFADevice(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createVirtualMFADeviceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deactivateMFADevice(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deactivateMFADeviceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteAccessKey(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteAccessKeyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteAccountAlias(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteAccountAliasAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteAccountPasswordPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteAccountPasswordPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteGroupPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteGroupPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteInstanceProfile(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteInstanceProfileAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteLoginProfile(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteLoginProfileAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteOpenIDConnectProvider(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteOpenIDConnectProviderAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deletePolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deletePolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deletePolicyVersion(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deletePolicyVersionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteRole(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteRoleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteRolePermissionsBoundary(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteRolePermissionsBoundaryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteRolePolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteRolePolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteSAMLProvider(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteSAMLProviderAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteSSHPublicKey(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteSSHPublicKeyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteServerCertificate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteServerCertificateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteServiceLinkedRole(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteServiceLinkedRoleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteServiceSpecificCredential(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteServiceSpecificCredentialAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteSigningCertificate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteSigningCertificateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteUserPermissionsBoundary(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteUserPermissionsBoundaryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteUserPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteUserPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteVirtualMFADevice(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteVirtualMFADeviceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result detachGroupPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise detachGroupPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result detachRolePolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise detachRolePolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result detachUserPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise detachUserPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result enableMFADevice(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise enableMFADeviceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result generateCredentialReport(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise generateCredentialReportAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result generateOrganizationsAccessReport(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise generateOrganizationsAccessReportAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result generateServiceLastAccessedDetails(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise generateServiceLastAccessedDetailsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getAccessKeyLastUsed(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getAccessKeyLastUsedAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getAccountAuthorizationDetails(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getAccountAuthorizationDetailsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getAccountPasswordPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getAccountPasswordPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getAccountSummary(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getAccountSummaryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getContextKeysForCustomPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getContextKeysForCustomPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getContextKeysForPrincipalPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getContextKeysForPrincipalPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getCredentialReport(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getCredentialReportAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getGroupPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getGroupPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getInstanceProfile(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getInstanceProfileAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getLoginProfile(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getLoginProfileAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getOpenIDConnectProvider(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getOpenIDConnectProviderAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getOrganizationsAccessReport(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getOrganizationsAccessReportAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getPolicyVersion(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getPolicyVersionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getRole(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getRoleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getRolePolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getRolePolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getSAMLProvider(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getSAMLProviderAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getSSHPublicKey(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getSSHPublicKeyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getServerCertificate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getServerCertificateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getServiceLastAccessedDetails(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getServiceLastAccessedDetailsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getServiceLastAccessedDetailsWithEntities(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getServiceLastAccessedDetailsWithEntitiesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getServiceLinkedRoleDeletionStatus(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getServiceLinkedRoleDeletionStatusAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getUserPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getUserPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listAccessKeys(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listAccessKeysAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listAccountAliases(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listAccountAliasesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listAttachedGroupPolicies(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listAttachedGroupPoliciesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listAttachedRolePolicies(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listAttachedRolePoliciesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listAttachedUserPolicies(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listAttachedUserPoliciesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listEntitiesForPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listEntitiesForPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listGroupPolicies(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listGroupPoliciesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listGroups(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listGroupsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listGroupsForUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listGroupsForUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listInstanceProfileTags(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listInstanceProfileTagsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listInstanceProfiles(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listInstanceProfilesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listInstanceProfilesForRole(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listInstanceProfilesForRoleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listMFADeviceTags(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listMFADeviceTagsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listMFADevices(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listMFADevicesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listOpenIDConnectProviderTags(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listOpenIDConnectProviderTagsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listOpenIDConnectProviders(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listOpenIDConnectProvidersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listPolicies(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listPoliciesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listPoliciesGrantingServiceAccess(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listPoliciesGrantingServiceAccessAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listPolicyTags(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listPolicyTagsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listPolicyVersions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listPolicyVersionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listRolePolicies(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listRolePoliciesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listRoleTags(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listRoleTagsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listRoles(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listRolesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listSAMLProviderTags(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listSAMLProviderTagsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listSAMLProviders(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listSAMLProvidersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listSSHPublicKeys(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listSSHPublicKeysAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listServerCertificateTags(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listServerCertificateTagsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listServerCertificates(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listServerCertificatesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listServiceSpecificCredentials(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listServiceSpecificCredentialsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listSigningCertificates(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listSigningCertificatesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listUserPolicies(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listUserPoliciesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listUserTags(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listUserTagsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listUsers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listUsersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listVirtualMFADevices(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listVirtualMFADevicesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putGroupPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putGroupPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putRolePermissionsBoundary(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putRolePermissionsBoundaryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putRolePolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putRolePolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putUserPermissionsBoundary(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putUserPermissionsBoundaryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putUserPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putUserPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result removeClientIDFromOpenIDConnectProvider(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise removeClientIDFromOpenIDConnectProviderAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result removeRoleFromInstanceProfile(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise removeRoleFromInstanceProfileAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result removeUserFromGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise removeUserFromGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result resetServiceSpecificCredential(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise resetServiceSpecificCredentialAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result resyncMFADevice(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise resyncMFADeviceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result setDefaultPolicyVersion(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise setDefaultPolicyVersionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result setSecurityTokenServicePreferences(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise setSecurityTokenServicePreferencesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result simulateCustomPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise simulateCustomPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result simulatePrincipalPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise simulatePrincipalPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagInstanceProfile(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagInstanceProfileAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagMFADevice(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagMFADeviceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagOpenIDConnectProvider(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagOpenIDConnectProviderAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagRole(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagRoleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagSAMLProvider(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagSAMLProviderAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagServerCertificate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagServerCertificateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagInstanceProfile(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagInstanceProfileAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagMFADevice(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagMFADeviceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagOpenIDConnectProvider(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagOpenIDConnectProviderAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagRole(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagRoleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagSAMLProvider(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagSAMLProviderAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagServerCertificate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagServerCertificateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateAccessKey(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateAccessKeyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateAccountPasswordPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateAccountPasswordPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateAssumeRolePolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateAssumeRolePolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateLoginProfile(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateLoginProfileAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateOpenIDConnectProviderThumbprint(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateOpenIDConnectProviderThumbprintAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateRole(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateRoleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateRoleDescription(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateRoleDescriptionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateSAMLProvider(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateSAMLProviderAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateSSHPublicKey(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateSSHPublicKeyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateServerCertificate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateServerCertificateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateServiceSpecificCredential(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateServiceSpecificCredentialAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateSigningCertificate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateSigningCertificateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result uploadSSHPublicKey(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise uploadSSHPublicKeyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result uploadServerCertificate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise uploadServerCertificateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result uploadSigningCertificate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise uploadSigningCertificateAsync(array $args = [])
 */
class IamClient extends AwsClient {}
