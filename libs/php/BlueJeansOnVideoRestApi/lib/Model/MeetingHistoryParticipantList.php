<?php
/**
 * MeetingHistoryParticipantList
 *
 * PHP version 5
 *
 * @category Class
 * @package  BlueJeansOnVideoRestApi
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BlueJeans onVideo REST API
 *
 * _Video That Works Where You Do._  This site provides developers access to API's from BlueJean's onVideo meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data as well retrieve current state information.  With these API's  you should be able to quickly integrate **BlueJeans** video into your applications.     # Authentication All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ## Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – After creating a developer application, users witll authenticate via a BlueJeans page, and receive an authorization code. Submit authorization with other tokens and receive an access token. Known as three-legged OAuth. ## Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. # Getting Started Before you start using the API's on this site, you must first have a BlueJeans account.  With your BlueJean credentials, use one of the Authentication methods to obtain an access token. - Click on the Authorize button at the top of page - Enter your access token in the field marked \"api_key\" Now the web site will automatically include your access token on all API calls you make.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BlueJeansOnVideoRestApi\Model;

use \ArrayAccess;

/**
 * MeetingHistoryParticipantList Class Doc Comment
 *
 * @category    Class
 * @package     BlueJeansOnVideoRestApi
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MeetingHistoryParticipantList implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'MeetingHistory_participantList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'endpoint_name' => 'string',
        'join_time' => 'int',
        'minutes' => 'int',
        'device_type' => 'string',
        'email' => 'string',
        'remote_address' => 'string',
        'is_encrypted' => 'bool',
        'disconnect_time' => 'int',
        'is_moderator' => 'bool',
        'user_id' => 'int',
        'tags' => 'string',
        'participant_guid' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'endpoint_name' => 'endpointName',
        'join_time' => 'joinTime',
        'minutes' => 'minutes',
        'device_type' => 'deviceType',
        'email' => 'email',
        'remote_address' => 'remoteAddress',
        'is_encrypted' => 'isEncrypted',
        'disconnect_time' => 'disconnectTime',
        'is_moderator' => 'isModerator',
        'user_id' => 'userId',
        'tags' => 'tags',
        'participant_guid' => 'participantGuid'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'endpoint_name' => 'setEndpointName',
        'join_time' => 'setJoinTime',
        'minutes' => 'setMinutes',
        'device_type' => 'setDeviceType',
        'email' => 'setEmail',
        'remote_address' => 'setRemoteAddress',
        'is_encrypted' => 'setIsEncrypted',
        'disconnect_time' => 'setDisconnectTime',
        'is_moderator' => 'setIsModerator',
        'user_id' => 'setUserId',
        'tags' => 'setTags',
        'participant_guid' => 'setParticipantGuid'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'endpoint_name' => 'getEndpointName',
        'join_time' => 'getJoinTime',
        'minutes' => 'getMinutes',
        'device_type' => 'getDeviceType',
        'email' => 'getEmail',
        'remote_address' => 'getRemoteAddress',
        'is_encrypted' => 'getIsEncrypted',
        'disconnect_time' => 'getDisconnectTime',
        'is_moderator' => 'getIsModerator',
        'user_id' => 'getUserId',
        'tags' => 'getTags',
        'participant_guid' => 'getParticipantGuid'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const DEVICE_TYPE_CARMEL = 'Carmel';
    const DEVICE_TYPE_WEB_RTC = 'WebRTC';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDeviceTypeAllowableValues()
    {
        return [
            self::DEVICE_TYPE_CARMEL,
            self::DEVICE_TYPE_WEB_RTC,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['endpoint_name'] = isset($data['endpoint_name']) ? $data['endpoint_name'] : null;
        $this->container['join_time'] = isset($data['join_time']) ? $data['join_time'] : null;
        $this->container['minutes'] = isset($data['minutes']) ? $data['minutes'] : null;
        $this->container['device_type'] = isset($data['device_type']) ? $data['device_type'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['remote_address'] = isset($data['remote_address']) ? $data['remote_address'] : null;
        $this->container['is_encrypted'] = isset($data['is_encrypted']) ? $data['is_encrypted'] : null;
        $this->container['disconnect_time'] = isset($data['disconnect_time']) ? $data['disconnect_time'] : null;
        $this->container['is_moderator'] = isset($data['is_moderator']) ? $data['is_moderator'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['participant_guid'] = isset($data['participant_guid']) ? $data['participant_guid'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["Carmel", "WebRTC"];
        if (!in_array($this->container['device_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'device_type', must be one of 'Carmel', 'WebRTC'.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowed_values = ["Carmel", "WebRTC"];
        if (!in_array($this->container['device_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets endpoint_name
     * @return string
     */
    public function getEndpointName()
    {
        return $this->container['endpoint_name'];
    }

    /**
     * Sets endpoint_name
     * @param string $endpoint_name
     * @return $this
     */
    public function setEndpointName($endpoint_name)
    {
        $this->container['endpoint_name'] = $endpoint_name;

        return $this;
    }

    /**
     * Gets join_time
     * @return int
     */
    public function getJoinTime()
    {
        return $this->container['join_time'];
    }

    /**
     * Sets join_time
     * @param int $join_time
     * @return $this
     */
    public function setJoinTime($join_time)
    {
        $this->container['join_time'] = $join_time;

        return $this;
    }

    /**
     * Gets minutes
     * @return int
     */
    public function getMinutes()
    {
        return $this->container['minutes'];
    }

    /**
     * Sets minutes
     * @param int $minutes
     * @return $this
     */
    public function setMinutes($minutes)
    {
        $this->container['minutes'] = $minutes;

        return $this;
    }

    /**
     * Gets device_type
     * @return string
     */
    public function getDeviceType()
    {
        return $this->container['device_type'];
    }

    /**
     * Sets device_type
     * @param string $device_type
     * @return $this
     */
    public function setDeviceType($device_type)
    {
        $allowed_values = array('Carmel', 'WebRTC');
        if (!is_null($device_type) && (!in_array($device_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'device_type', must be one of 'Carmel', 'WebRTC'");
        }
        $this->container['device_type'] = $device_type;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets remote_address
     * @return string
     */
    public function getRemoteAddress()
    {
        return $this->container['remote_address'];
    }

    /**
     * Sets remote_address
     * @param string $remote_address
     * @return $this
     */
    public function setRemoteAddress($remote_address)
    {
        $this->container['remote_address'] = $remote_address;

        return $this;
    }

    /**
     * Gets is_encrypted
     * @return bool
     */
    public function getIsEncrypted()
    {
        return $this->container['is_encrypted'];
    }

    /**
     * Sets is_encrypted
     * @param bool $is_encrypted
     * @return $this
     */
    public function setIsEncrypted($is_encrypted)
    {
        $this->container['is_encrypted'] = $is_encrypted;

        return $this;
    }

    /**
     * Gets disconnect_time
     * @return int
     */
    public function getDisconnectTime()
    {
        return $this->container['disconnect_time'];
    }

    /**
     * Sets disconnect_time
     * @param int $disconnect_time
     * @return $this
     */
    public function setDisconnectTime($disconnect_time)
    {
        $this->container['disconnect_time'] = $disconnect_time;

        return $this;
    }

    /**
     * Gets is_moderator
     * @return bool
     */
    public function getIsModerator()
    {
        return $this->container['is_moderator'];
    }

    /**
     * Sets is_moderator
     * @param bool $is_moderator
     * @return $this
     */
    public function setIsModerator($is_moderator)
    {
        $this->container['is_moderator'] = $is_moderator;

        return $this;
    }

    /**
     * Gets user_id
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     * @param int $user_id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets tags
     * @return string
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param string $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets participant_guid
     * @return string
     */
    public function getParticipantGuid()
    {
        return $this->container['participant_guid'];
    }

    /**
     * Sets participant_guid
     * @param string $participant_guid
     * @return $this
     */
    public function setParticipantGuid($participant_guid)
    {
        $this->container['participant_guid'] = $participant_guid;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\BlueJeansOnVideoRestApi\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BlueJeansOnVideoRestApi\ObjectSerializer::sanitizeForSerialization($this));
    }
}

