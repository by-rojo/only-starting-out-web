<?php

namespace MediaCloud\Vendor\Aws\GlobalAccelerator;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Global Accelerator** service.
 * @method \MediaCloud\Vendor\Aws\Result addCustomRoutingEndpoints(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise addCustomRoutingEndpointsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result advertiseByoipCidr(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise advertiseByoipCidrAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result allowCustomRoutingTraffic(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise allowCustomRoutingTrafficAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createAccelerator(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createAcceleratorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createCustomRoutingAccelerator(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createCustomRoutingAcceleratorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createCustomRoutingEndpointGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createCustomRoutingEndpointGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createCustomRoutingListener(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createCustomRoutingListenerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createEndpointGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createEndpointGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createListener(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createListenerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteAccelerator(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteAcceleratorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteCustomRoutingAccelerator(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteCustomRoutingAcceleratorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteCustomRoutingEndpointGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteCustomRoutingEndpointGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteCustomRoutingListener(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteCustomRoutingListenerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteEndpointGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteEndpointGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteListener(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteListenerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result denyCustomRoutingTraffic(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise denyCustomRoutingTrafficAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deprovisionByoipCidr(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deprovisionByoipCidrAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeAccelerator(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeAcceleratorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeAcceleratorAttributes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeAcceleratorAttributesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeCustomRoutingAccelerator(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeCustomRoutingAcceleratorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeCustomRoutingAcceleratorAttributes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeCustomRoutingAcceleratorAttributesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeCustomRoutingEndpointGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeCustomRoutingEndpointGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeCustomRoutingListener(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeCustomRoutingListenerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeEndpointGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeEndpointGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeListener(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeListenerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listAccelerators(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listAcceleratorsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listByoipCidrs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listByoipCidrsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listCustomRoutingAccelerators(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listCustomRoutingAcceleratorsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listCustomRoutingEndpointGroups(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listCustomRoutingEndpointGroupsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listCustomRoutingListeners(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listCustomRoutingListenersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listCustomRoutingPortMappings(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listCustomRoutingPortMappingsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listCustomRoutingPortMappingsByDestination(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listCustomRoutingPortMappingsByDestinationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listEndpointGroups(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listEndpointGroupsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listListeners(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listListenersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result provisionByoipCidr(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise provisionByoipCidrAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result removeCustomRoutingEndpoints(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise removeCustomRoutingEndpointsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateAccelerator(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateAcceleratorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateAcceleratorAttributes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateAcceleratorAttributesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateCustomRoutingAccelerator(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateCustomRoutingAcceleratorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateCustomRoutingAcceleratorAttributes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateCustomRoutingAcceleratorAttributesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateCustomRoutingListener(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateCustomRoutingListenerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateEndpointGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateEndpointGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateListener(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateListenerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result withdrawByoipCidr(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise withdrawByoipCidrAsync(array $args = [])
 */
class GlobalAcceleratorClient extends AwsClient {}
