<?php

namespace MediaCloud\Vendor\Aws\Athena;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Athena** service.
 * @method \MediaCloud\Vendor\Aws\Result batchGetNamedQuery(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchGetNamedQueryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchGetQueryExecution(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchGetQueryExecutionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createDataCatalog(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createDataCatalogAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createNamedQuery(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createNamedQueryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createPreparedStatement(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createPreparedStatementAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createWorkGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createWorkGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteDataCatalog(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteDataCatalogAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteNamedQuery(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteNamedQueryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deletePreparedStatement(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deletePreparedStatementAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteWorkGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteWorkGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getDataCatalog(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getDataCatalogAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getDatabase(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getDatabaseAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getNamedQuery(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getNamedQueryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getPreparedStatement(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getPreparedStatementAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getQueryExecution(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getQueryExecutionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getQueryResults(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getQueryResultsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getTableMetadata(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getTableMetadataAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getWorkGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getWorkGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listDataCatalogs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listDataCatalogsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listDatabases(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listDatabasesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listEngineVersions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listEngineVersionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listNamedQueries(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listNamedQueriesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listPreparedStatements(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listPreparedStatementsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listQueryExecutions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listQueryExecutionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTableMetadata(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTableMetadataAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listWorkGroups(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listWorkGroupsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startQueryExecution(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startQueryExecutionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result stopQueryExecution(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise stopQueryExecutionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateDataCatalog(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateDataCatalogAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateNamedQuery(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateNamedQueryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updatePreparedStatement(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updatePreparedStatementAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateWorkGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateWorkGroupAsync(array $args = [])
 */
class AthenaClient extends AwsClient {}
