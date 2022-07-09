<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/control.proto

namespace MediaCloud\Vendor\Google\Api;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBType;
use MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBUtil;

/**
 * Selects and configures the service controller used by the service.  The
 * service controller handles features like abuse, quota, billing, logging,
 * monitoring, etc.
 *
 * Generated from protobuf message <code>google.api.Control</code>
 */
class Control extends \MediaCloud\Vendor\Google\Protobuf\Internal\Message
{
    /**
     * The service control environment to use. If empty, no control plane
     * feature (like quota and billing) will be enabled.
     *
     * Generated from protobuf field <code>string environment = 1;</code>
     */
    private $environment = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $environment
     *           The service control environment to use. If empty, no control plane
     *           feature (like quota and billing) will be enabled.
     * }
     */
    public function __construct($data = NULL) { \MediaCloud\Vendor\GPBMetadata\Google\Api\Control::initOnce();
        parent::__construct($data);
    }

    /**
     * The service control environment to use. If empty, no control plane
     * feature (like quota and billing) will be enabled.
     *
     * Generated from protobuf field <code>string environment = 1;</code>
     * @return string
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * The service control environment to use. If empty, no control plane
     * feature (like quota and billing) will be enabled.
     *
     * Generated from protobuf field <code>string environment = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEnvironment($var)
    {
        GPBUtil::checkString($var, True);
        $this->environment = $var;

        return $this;
    }

}

