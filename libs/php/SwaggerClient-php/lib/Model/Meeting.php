<?php
/**
 * Meeting
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BlueJeans onVideo REST API
 *
 * _Video That Works Where You Do._  This site provides developers access to API's from BlueJean's onVideo meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data as well retrieve current state information.  With these API's  you should be able to quickly integrate **BlueJeans** video into your applications.     # Authentication All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ## Grant Types Bluejeans provides 3 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to the user. * Authorization Code Grant – Authenticate via a BlueJeans page, and receive an authorization code. Submit authorization with other tokens and receive an access code. (\"three-legged OAuth\") * Password Credentials Grant – Authenticate with a Username and password and receives an access code. (\"two-legged OAuth\"); * Client Credentials Grant – Similar to Password Grant (\"two-legged OAuth\").  ## Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – scope of APIs is limited to individual meetings. * User-level – scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users.  All endpoints in this document that require **Enterprise Admin** access will be marked as such. # Getting Started Before you start using the API's on this site, you must first have a BlueJeans account.  With your BlueJean credentials, use on of the Authentication methods to obtain an access token. - Click on the Authorize button at the top of page - Enter your access token in the field marked \"api_key\" Now the web site will automatically include your access token on all API calls you make.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Meeting Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Meeting implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Meeting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'title' => 'string',
        'description' => 'string',
        'start' => 'int',
        'end' => 'int',
        'timezone' => 'string',
        'numeric_meeting_id' => 'string',
        'attendee_passcode' => 'string',
        'end_point_version' => 'string',
        'end_point_type' => 'string',
        'attendees' => '\Swagger\Client\Model\Attendee[]',
        'advanced_meeting_options' => '\Swagger\Client\Model\MeetingAdvancedMeetingOptions'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'id' => 'id',
        'title' => 'title',
        'description' => 'description',
        'start' => 'start',
        'end' => 'end',
        'timezone' => 'timezone',
        'numeric_meeting_id' => 'numericMeetingId',
        'attendee_passcode' => 'attendeePasscode',
        'end_point_version' => 'endPointVersion',
        'end_point_type' => 'endPointType',
        'attendees' => 'attendees',
        'advanced_meeting_options' => 'advancedMeetingOptions'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'id' => 'setId',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'start' => 'setStart',
        'end' => 'setEnd',
        'timezone' => 'setTimezone',
        'numeric_meeting_id' => 'setNumericMeetingId',
        'attendee_passcode' => 'setAttendeePasscode',
        'end_point_version' => 'setEndPointVersion',
        'end_point_type' => 'setEndPointType',
        'attendees' => 'setAttendees',
        'advanced_meeting_options' => 'setAdvancedMeetingOptions'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'id' => 'getId',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'start' => 'getStart',
        'end' => 'getEnd',
        'timezone' => 'getTimezone',
        'numeric_meeting_id' => 'getNumericMeetingId',
        'attendee_passcode' => 'getAttendeePasscode',
        'end_point_version' => 'getEndPointVersion',
        'end_point_type' => 'getEndPointType',
        'attendees' => 'getAttendees',
        'advanced_meeting_options' => 'getAdvancedMeetingOptions'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : 'My Test Meeting';
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : 'America/New_York';
        $this->container['numeric_meeting_id'] = isset($data['numeric_meeting_id']) ? $data['numeric_meeting_id'] : null;
        $this->container['attendee_passcode'] = isset($data['attendee_passcode']) ? $data['attendee_passcode'] : null;
        $this->container['end_point_version'] = isset($data['end_point_version']) ? $data['end_point_version'] : '2.10';
        $this->container['end_point_type'] = isset($data['end_point_type']) ? $data['end_point_type'] : 'WEB_APP';
        $this->container['attendees'] = isset($data['attendees']) ? $data['attendees'] : null;
        $this->container['advanced_meeting_options'] = isset($data['advanced_meeting_options']) ? $data['advanced_meeting_options'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['title'] === null) {
            $invalid_properties[] = "'title' can't be null";
        }
        if ($this->container['start'] === null) {
            $invalid_properties[] = "'start' can't be null";
        }
        if ($this->container['end'] === null) {
            $invalid_properties[] = "'end' can't be null";
        }
        if ($this->container['end_point_version'] === null) {
            $invalid_properties[] = "'end_point_version' can't be null";
        }
        if ($this->container['end_point_type'] === null) {
            $invalid_properties[] = "'end_point_type' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['title'] === null) {
            return false;
        }
        if ($this->container['start'] === null) {
            return false;
        }
        if ($this->container['end'] === null) {
            return false;
        }
        if ($this->container['end_point_version'] === null) {
            return false;
        }
        if ($this->container['end_point_type'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id Unique identifier for meeting.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets start
     * @return int
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     * @param int $start A [UNIX Timestamp](https://currentmillis.com/) in milliseconds
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets end
     * @return int
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     * @param int $end A [UNIX Timestamp](https://currentmillis.com/) in milliseconds
     * @return $this
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets timezone
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     * @param string $timezone
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets numeric_meeting_id
     * @return string
     */
    public function getNumericMeetingId()
    {
        return $this->container['numeric_meeting_id'];
    }

    /**
     * Sets numeric_meeting_id
     * @param string $numeric_meeting_id The meeting ID that participants will see and use to join the conference. When joining via phone, this is the code they enter via DTMF to join.
     * @return $this
     */
    public function setNumericMeetingId($numeric_meeting_id)
    {
        $this->container['numeric_meeting_id'] = $numeric_meeting_id;

        return $this;
    }

    /**
     * Gets attendee_passcode
     * @return string
     */
    public function getAttendeePasscode()
    {
        return $this->container['attendee_passcode'];
    }

    /**
     * Sets attendee_passcode
     * @param string $attendee_passcode
     * @return $this
     */
    public function setAttendeePasscode($attendee_passcode)
    {
        $this->container['attendee_passcode'] = $attendee_passcode;

        return $this;
    }

    /**
     * Gets end_point_version
     * @return string
     */
    public function getEndPointVersion()
    {
        return $this->container['end_point_version'];
    }

    /**
     * Sets end_point_version
     * @param string $end_point_version
     * @return $this
     */
    public function setEndPointVersion($end_point_version)
    {
        $this->container['end_point_version'] = $end_point_version;

        return $this;
    }

    /**
     * Gets end_point_type
     * @return string
     */
    public function getEndPointType()
    {
        return $this->container['end_point_type'];
    }

    /**
     * Sets end_point_type
     * @param string $end_point_type
     * @return $this
     */
    public function setEndPointType($end_point_type)
    {
        $this->container['end_point_type'] = $end_point_type;

        return $this;
    }

    /**
     * Gets attendees
     * @return \Swagger\Client\Model\Attendee[]
     */
    public function getAttendees()
    {
        return $this->container['attendees'];
    }

    /**
     * Sets attendees
     * @param \Swagger\Client\Model\Attendee[] $attendees
     * @return $this
     */
    public function setAttendees($attendees)
    {
        $this->container['attendees'] = $attendees;

        return $this;
    }

    /**
     * Gets advanced_meeting_options
     * @return \Swagger\Client\Model\MeetingAdvancedMeetingOptions
     */
    public function getAdvancedMeetingOptions()
    {
        return $this->container['advanced_meeting_options'];
    }

    /**
     * Sets advanced_meeting_options
     * @param \Swagger\Client\Model\MeetingAdvancedMeetingOptions $advanced_meeting_options
     * @return $this
     */
    public function setAdvancedMeetingOptions($advanced_meeting_options)
    {
        $this->container['advanced_meeting_options'] = $advanced_meeting_options;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


