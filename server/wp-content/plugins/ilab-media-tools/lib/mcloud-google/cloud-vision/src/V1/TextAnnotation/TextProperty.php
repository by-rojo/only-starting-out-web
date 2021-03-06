<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/text_annotation.proto

namespace MediaCloud\Vendor\Google\Cloud\Vision\V1\TextAnnotation;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBType;
use MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBUtil;

/**
 * Additional information detected on the structural component.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.TextAnnotation.TextProperty</code>
 */
class TextProperty extends \MediaCloud\Vendor\Google\Protobuf\Internal\Message
{
    /**
     * A list of detected languages together with confidence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.TextAnnotation.DetectedLanguage detected_languages = 1;</code>
     */
    private $detected_languages;
    /**
     * Detected start or end of a text segment.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.TextAnnotation.DetectedBreak detected_break = 2;</code>
     */
    private $detected_break = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \MediaCloud\Vendor\Google\Cloud\Vision\V1\TextAnnotation\DetectedLanguage[]|\Google\Protobuf\Internal\RepeatedField $detected_languages
     *           A list of detected languages together with confidence.
     *     @type \MediaCloud\Vendor\Google\Cloud\Vision\V1\TextAnnotation\DetectedBreak $detected_break
     *           Detected start or end of a text segment.
     * }
     */
    public function __construct($data = NULL) { \MediaCloud\Vendor\GPBMetadata\Google\Cloud\Vision\V1\TextAnnotation::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of detected languages together with confidence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.TextAnnotation.DetectedLanguage detected_languages = 1;</code>
     * @return \MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField
     */
    public function getDetectedLanguages()
    {
        return $this->detected_languages;
    }

    /**
     * A list of detected languages together with confidence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.TextAnnotation.DetectedLanguage detected_languages = 1;</code>
     * @param \MediaCloud\Vendor\Google\Cloud\Vision\V1\TextAnnotation\DetectedLanguage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDetectedLanguages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \MediaCloud\Vendor\Google\Protobuf\Internal\GPBType::MESSAGE, \MediaCloud\Vendor\Google\Cloud\Vision\V1\TextAnnotation\DetectedLanguage::class);
        $this->detected_languages = $arr;

        return $this;
    }

    /**
     * Detected start or end of a text segment.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.TextAnnotation.DetectedBreak detected_break = 2;</code>
     * @return \MediaCloud\Vendor\Google\Cloud\Vision\V1\TextAnnotation\DetectedBreak|null
     */
    public function getDetectedBreak()
    {
        return $this->detected_break;
    }

    public function hasDetectedBreak()
    {
        return isset($this->detected_break);
    }

    public function clearDetectedBreak()
    {
        unset($this->detected_break);
    }

    /**
     * Detected start or end of a text segment.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.TextAnnotation.DetectedBreak detected_break = 2;</code>
     * @param \MediaCloud\Vendor\Google\Cloud\Vision\V1\TextAnnotation\DetectedBreak $var
     * @return $this
     */
    public function setDetectedBreak($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Cloud\Vision\V1\TextAnnotation\DetectedBreak::class);
        $this->detected_break = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TextProperty::class, \MediaCloud\Vendor\Google\Cloud\Vision\V1\TextAnnotation_TextProperty::class);

