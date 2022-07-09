<?php

namespace MediaCloud\Vendor\Aws\Connect;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Connect Service** service.
 * @method \MediaCloud\Vendor\Aws\Result associateApprovedOrigin(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateApprovedOriginAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result associateBot(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateBotAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result associateDefaultVocabulary(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateDefaultVocabularyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result associateInstanceStorageConfig(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateInstanceStorageConfigAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result associateLambdaFunction(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateLambdaFunctionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result associateLexBot(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateLexBotAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result associateQueueQuickConnects(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateQueueQuickConnectsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result associateRoutingProfileQueues(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateRoutingProfileQueuesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result associateSecurityKey(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateSecurityKeyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createAgentStatus(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createAgentStatusAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createContactFlow(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createContactFlowAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createContactFlowModule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createContactFlowModuleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createHoursOfOperation(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createHoursOfOperationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createInstance(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createInstanceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createIntegrationAssociation(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createIntegrationAssociationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createQueue(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createQueueAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createQuickConnect(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createQuickConnectAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createRoutingProfile(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createRoutingProfileAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createSecurityProfile(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createSecurityProfileAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createUseCase(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createUseCaseAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createUserHierarchyGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createUserHierarchyGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createVocabulary(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createVocabularyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteContactFlow(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteContactFlowAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteContactFlowModule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteContactFlowModuleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteHoursOfOperation(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteHoursOfOperationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteInstance(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteInstanceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteIntegrationAssociation(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteIntegrationAssociationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteQuickConnect(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteQuickConnectAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteSecurityProfile(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteSecurityProfileAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteUseCase(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteUseCaseAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteUserHierarchyGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteUserHierarchyGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteVocabulary(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteVocabularyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeAgentStatus(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeAgentStatusAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeContact(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeContactAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeContactFlow(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeContactFlowAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeContactFlowModule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeContactFlowModuleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeHoursOfOperation(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeHoursOfOperationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeInstance(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeInstanceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeInstanceAttribute(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeInstanceAttributeAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeInstanceStorageConfig(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeInstanceStorageConfigAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeQueue(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeQueueAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeQuickConnect(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeQuickConnectAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeRoutingProfile(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeRoutingProfileAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeSecurityProfile(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeSecurityProfileAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeUserHierarchyGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeUserHierarchyGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeUserHierarchyStructure(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeUserHierarchyStructureAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeVocabulary(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeVocabularyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateApprovedOrigin(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateApprovedOriginAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateBot(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateBotAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateInstanceStorageConfig(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateInstanceStorageConfigAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateLambdaFunction(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateLambdaFunctionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateLexBot(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateLexBotAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateQueueQuickConnects(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateQueueQuickConnectsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateRoutingProfileQueues(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateRoutingProfileQueuesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateSecurityKey(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateSecurityKeyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getContactAttributes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getContactAttributesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getCurrentMetricData(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getCurrentMetricDataAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getFederationToken(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getFederationTokenAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getMetricData(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getMetricDataAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listAgentStatuses(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listAgentStatusesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listApprovedOrigins(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listApprovedOriginsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listBots(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listBotsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listContactFlowModules(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listContactFlowModulesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listContactFlows(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listContactFlowsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listContactReferences(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listContactReferencesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listDefaultVocabularies(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listDefaultVocabulariesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listHoursOfOperations(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listHoursOfOperationsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listInstanceAttributes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listInstanceAttributesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listInstanceStorageConfigs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listInstanceStorageConfigsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listInstances(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listInstancesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listIntegrationAssociations(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listIntegrationAssociationsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listLambdaFunctions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listLambdaFunctionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listLexBots(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listLexBotsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listPhoneNumbers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listPhoneNumbersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listPrompts(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listPromptsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listQueueQuickConnects(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listQueueQuickConnectsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listQueues(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listQueuesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listQuickConnects(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listQuickConnectsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listRoutingProfileQueues(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listRoutingProfileQueuesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listRoutingProfiles(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listRoutingProfilesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listSecurityKeys(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listSecurityKeysAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listSecurityProfilePermissions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listSecurityProfilePermissionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listSecurityProfiles(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listSecurityProfilesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listUseCases(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listUseCasesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listUserHierarchyGroups(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listUserHierarchyGroupsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listUsers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listUsersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result resumeContactRecording(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise resumeContactRecordingAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result searchVocabularies(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise searchVocabulariesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startChatContact(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startChatContactAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startContactRecording(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startContactRecordingAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startContactStreaming(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startContactStreamingAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startOutboundVoiceContact(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startOutboundVoiceContactAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startTaskContact(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startTaskContactAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result stopContact(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise stopContactAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result stopContactRecording(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise stopContactRecordingAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result stopContactStreaming(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise stopContactStreamingAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result suspendContactRecording(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise suspendContactRecordingAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateAgentStatus(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateAgentStatusAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateContact(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateContactAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateContactAttributes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateContactAttributesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateContactFlowContent(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateContactFlowContentAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateContactFlowMetadata(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateContactFlowMetadataAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateContactFlowModuleContent(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateContactFlowModuleContentAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateContactFlowModuleMetadata(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateContactFlowModuleMetadataAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateContactFlowName(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateContactFlowNameAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateContactSchedule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateContactScheduleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateHoursOfOperation(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateHoursOfOperationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateInstanceAttribute(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateInstanceAttributeAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateInstanceStorageConfig(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateInstanceStorageConfigAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateQueueHoursOfOperation(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateQueueHoursOfOperationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateQueueMaxContacts(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateQueueMaxContactsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateQueueName(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateQueueNameAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateQueueOutboundCallerConfig(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateQueueOutboundCallerConfigAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateQueueStatus(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateQueueStatusAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateQuickConnectConfig(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateQuickConnectConfigAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateQuickConnectName(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateQuickConnectNameAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateRoutingProfileConcurrency(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateRoutingProfileConcurrencyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateRoutingProfileDefaultOutboundQueue(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateRoutingProfileDefaultOutboundQueueAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateRoutingProfileName(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateRoutingProfileNameAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateRoutingProfileQueues(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateRoutingProfileQueuesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateSecurityProfile(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateSecurityProfileAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateUserHierarchy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateUserHierarchyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateUserHierarchyGroupName(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateUserHierarchyGroupNameAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateUserHierarchyStructure(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateUserHierarchyStructureAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateUserIdentityInfo(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateUserIdentityInfoAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateUserPhoneConfig(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateUserPhoneConfigAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateUserRoutingProfile(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateUserRoutingProfileAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateUserSecurityProfiles(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateUserSecurityProfilesAsync(array $args = [])
 */
class ConnectClient extends AwsClient {}