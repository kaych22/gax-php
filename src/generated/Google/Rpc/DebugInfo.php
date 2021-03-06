<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/rpc/error_details.proto

namespace Google\Rpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes additional debugging info.
 *
 * Protobuf type <code>Google\Rpc\DebugInfo</code>
 */
class DebugInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The stack trace entries indicating where the error occurred.
     *
     * Generated from protobuf field <code>repeated string stack_entries = 1;</code>
     */
    private $stack_entries;
    /**
     * Additional debugging information provided by the server.
     *
     * Generated from protobuf field <code>string detail = 2;</code>
     */
    private $detail = '';

    public function __construct() {
        \GPBMetadata\Google\Rpc\ErrorDetails::initOnce();
        parent::__construct();
    }

    /**
     * The stack trace entries indicating where the error occurred.
     *
     * Generated from protobuf field <code>repeated string stack_entries = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStackEntries()
    {
        return $this->stack_entries;
    }

    /**
     * The stack trace entries indicating where the error occurred.
     *
     * Generated from protobuf field <code>repeated string stack_entries = 1;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setStackEntries(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->stack_entries = $arr;
    }

    /**
     * Additional debugging information provided by the server.
     *
     * Generated from protobuf field <code>string detail = 2;</code>
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Additional debugging information provided by the server.
     *
     * Generated from protobuf field <code>string detail = 2;</code>
     * @param string $var
     */
    public function setDetail($var)
    {
        GPBUtil::checkString($var, True);
        $this->detail = $var;
    }

}

