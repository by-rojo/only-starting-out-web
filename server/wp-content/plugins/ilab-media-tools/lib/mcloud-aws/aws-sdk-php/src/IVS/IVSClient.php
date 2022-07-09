<?php

namespace MediaCloud\Vendor\Aws\IVS;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Interactive Video Service** service.
 * @method \MediaCloud\Vendor\Aws\Result batchGetChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchGetChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchGetStreamKey(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchGetStreamKeyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createRecordingConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createRecordingConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createStreamKey(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createStreamKeyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deletePlaybackKeyPair(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deletePlaybackKeyPairAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteRecordingConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteRecordingConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteStreamKey(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteStreamKeyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getChannelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getPlaybackKeyPair(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getPlaybackKeyPairAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getRecordingConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getRecordingConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getStream(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getStreamAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getStreamKey(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getStreamKeyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getStreamSession(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getStreamSessionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result importPlaybackKeyPair(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise importPlaybackKeyPairAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listChannels(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listChannelsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listPlaybackKeyPairs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listPlaybackKeyPairsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listRecordingConfigurations(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listRecordingConfigurationsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listStreamKeys(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listStreamKeysAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listStreamSessions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listStreamSessionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listStreams(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listStreamsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putMetadata(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putMetadataAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result stopStream(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise stopStreamAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateChannel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateChannelAsync(array $args = [])
 */
class IVSClient extends AwsClient {}