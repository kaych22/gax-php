<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/audit/audit_log.proto

namespace Google\Cloud\Audit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Authentication information for the operation.
 *
 * Protobuf type <code>Google\Cloud\Audit\AuthenticationInfo</code>
 */
class AuthenticationInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The email address of the authenticated user making the request.
     *
     * Generated from protobuf field <code>string principal_email = 1;</code>
     */
    private $principal_email = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Audit\AuditLog::initOnce();
        parent::__construct();
    }

    /**
     * The email address of the authenticated user making the request.
     *
     * Generated from protobuf field <code>string principal_email = 1;</code>
     * @return string
     */
    public function getPrincipalEmail()
    {
        return $this->principal_email;
    }

    /**
     * The email address of the authenticated user making the request.
     *
     * Generated from protobuf field <code>string principal_email = 1;</code>
     * @param string $var
     */
    public function setPrincipalEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->principal_email = $var;
    }

}

