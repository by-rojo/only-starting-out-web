<?php

namespace MediaCloud\Vendor\Aws\LakeFormation;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Lake Formation** service.
 * @method \MediaCloud\Vendor\Aws\Result addLFTagsToResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise addLFTagsToResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchGrantPermissions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchGrantPermissionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchRevokePermissions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchRevokePermissionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result cancelTransaction(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise cancelTransactionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result commitTransaction(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise commitTransactionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createDataCellsFilter(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createDataCellsFilterAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createLFTag(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createLFTagAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteDataCellsFilter(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteDataCellsFilterAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteLFTag(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteLFTagAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteObjectsOnCancel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteObjectsOnCancelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deregisterResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deregisterResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeTransaction(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeTransactionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result extendTransaction(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise extendTransactionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getDataLakeSettings(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getDataLakeSettingsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getEffectivePermissionsForPath(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getEffectivePermissionsForPathAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getLFTag(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getLFTagAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getQueryState(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getQueryStateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getQueryStatistics(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getQueryStatisticsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getResourceLFTags(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getResourceLFTagsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getTableObjects(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getTableObjectsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getTemporaryGluePartitionCredentials(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getTemporaryGluePartitionCredentialsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getTemporaryGlueTableCredentials(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getTemporaryGlueTableCredentialsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getWorkUnitResults(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getWorkUnitResultsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getWorkUnits(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getWorkUnitsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result grantPermissions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise grantPermissionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listDataCellsFilter(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listDataCellsFilterAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listLFTags(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listLFTagsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listPermissions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listPermissionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listResources(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listResourcesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTableStorageOptimizers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTableStorageOptimizersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTransactions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTransactionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putDataLakeSettings(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putDataLakeSettingsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result registerResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise registerResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result removeLFTagsFromResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise removeLFTagsFromResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result revokePermissions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise revokePermissionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result searchDatabasesByLFTags(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise searchDatabasesByLFTagsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result searchTablesByLFTags(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise searchTablesByLFTagsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startQueryPlanning(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startQueryPlanningAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startTransaction(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startTransactionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateLFTag(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateLFTagAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateTableObjects(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateTableObjectsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateTableStorageOptimizer(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateTableStorageOptimizerAsync(array $args = [])
 */
class LakeFormationClient extends AwsClient {}
