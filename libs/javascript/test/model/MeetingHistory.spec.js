/**
 * BlueJeans onVideo REST API
 * _Video That Works Where You Do, from the world's leader in cloud video communication._ # Authentication Each API request that is sent to BlueJeans requires an access token, which is obtained through the BlueJeans Authentication API. There are several methods (grant types) for obtaining an access token, which follow the OAuth2.0 specification. ## Grant Types * Authorization Code Grant – This grant type is used in an authentication flow commonly referred to as \"three-legged OAuth\". The user authenticates via a BlueJeans page, which provides an authorization code. This code, along with a few other elements, can be used to obtain an access code. * Password Credentials Grant – This grant type is used in a two-legged OAuth flow. Username and password are sent to retrieve an access code. * Client Credentials Grant – This grant type is used in a two-legged OAuth flow.  ## Access & Permissions The access level that is associated with each access token is referred to as the scope. There are three basic levels of access that BlueJeans allows, which affect the level of scope.  Three access levels exist within the Blue Jeans service today. * Meeting-level – Authentication takes place using a meeting ID and passcode, and the scope is limited to APIs that relate to the individual meeting. * User-level – Authentication either takes place via three-legged OAuth, or else a direct authorization token request containing a username or password. Access level depends on the requested scope permissions. * App-level – An application is provisioned either by BlueJeans personnel, or within the BlueJeans Enterprise Admin interface. When provisioning an app, a client key and secret are provided, which is then used to obtain an access token, via the BlueJeans Authentication API. The scope that is associated with the token will provide access to an entire enterprise and all of its users.  All endpoints in this document that require Enterprise Admin access will be marked as such. ## Testing In order to make effective use of this page, you will first use one of the authentication methods to obtain an access token. Once the token is given, use the Authenticate button up in the header to store the token. Each BlueJeans API called after that will use the access token provided. 
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

(function(root, factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD.
    define(['expect.js', '../../src/index'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    factory(require('expect.js'), require('../../src/index'));
  } else {
    // Browser globals (root is window)
    factory(root.expect, root.BlueJeansOnVideoRestApi);
  }
}(this, function(expect, BlueJeansOnVideoRestApi) {
  'use strict';

  var instance;

  beforeEach(function() {
    instance = new BlueJeansOnVideoRestApi.MeetingHistory();
  });

  var getProperty = function(object, getter, property) {
    // Use getter method if present; otherwise, get the property directly.
    if (typeof object[getter] === 'function')
      return object[getter]();
    else
      return object[property];
  }

  var setProperty = function(object, setter, property, value) {
    // Use setter method if present; otherwise, set the property directly.
    if (typeof object[setter] === 'function')
      object[setter](value);
    else
      object[property] = value;
  }

  describe('MeetingHistory', function() {
    it('should create an instance of MeetingHistory', function() {
      // uncomment below and update the code to test MeetingHistory
      //var instane = new BlueJeansOnVideoRestApi.MeetingHistory();
      //expect(instance).to.be.a(BlueJeansOnVideoRestApi.MeetingHistory);
    });

    it('should have the property meetingGuid (base name: "meetingGuid")', function() {
      // uncomment below and update the code to test the property meetingGuid
      //var instane = new BlueJeansOnVideoRestApi.MeetingHistory();
      //expect(instance).to.be();
    });

    it('should have the property meetingNumericId (base name: "meetingNumericId")', function() {
      // uncomment below and update the code to test the property meetingNumericId
      //var instane = new BlueJeansOnVideoRestApi.MeetingHistory();
      //expect(instance).to.be();
    });

    it('should have the property title (base name: "title")', function() {
      // uncomment below and update the code to test the property title
      //var instane = new BlueJeansOnVideoRestApi.MeetingHistory();
      //expect(instance).to.be();
    });

    it('should have the property description (base name: "description")', function() {
      // uncomment below and update the code to test the property description
      //var instane = new BlueJeansOnVideoRestApi.MeetingHistory();
      //expect(instance).to.be();
    });

    it('should have the property leaderInfo (base name: "leaderInfo")', function() {
      // uncomment below and update the code to test the property leaderInfo
      //var instane = new BlueJeansOnVideoRestApi.MeetingHistory();
      //expect(instance).to.be();
    });

    it('should have the property userId (base name: "userId")', function() {
      // uncomment below and update the code to test the property userId
      //var instane = new BlueJeansOnVideoRestApi.MeetingHistory();
      //expect(instance).to.be();
    });

    it('should have the property meetingDuration (base name: "meetingDuration")', function() {
      // uncomment below and update the code to test the property meetingDuration
      //var instane = new BlueJeansOnVideoRestApi.MeetingHistory();
      //expect(instance).to.be();
    });

    it('should have the property maxParticipantCount (base name: "maxParticipantCount")', function() {
      // uncomment below and update the code to test the property maxParticipantCount
      //var instane = new BlueJeansOnVideoRestApi.MeetingHistory();
      //expect(instance).to.be();
    });

    it('should have the property totalParticipantMinutes (base name: "totalParticipantMinutes")', function() {
      // uncomment below and update the code to test the property totalParticipantMinutes
      //var instane = new BlueJeansOnVideoRestApi.MeetingHistory();
      //expect(instance).to.be();
    });

    it('should have the property maxParticipantMinutes (base name: "maxParticipantMinutes")', function() {
      // uncomment below and update the code to test the property maxParticipantMinutes
      //var instane = new BlueJeansOnVideoRestApi.MeetingHistory();
      //expect(instance).to.be();
    });

    it('should have the property extraParticipantMinutes (base name: "extraParticipantMinutes")', function() {
      // uncomment below and update the code to test the property extraParticipantMinutes
      //var instane = new BlueJeansOnVideoRestApi.MeetingHistory();
      //expect(instance).to.be();
    });

    it('should have the property isdnEndpoints (base name: "isdnEndpoints")', function() {
      // uncomment below and update the code to test the property isdnEndpoints
      //var instane = new BlueJeansOnVideoRestApi.MeetingHistory();
      //expect(instance).to.be();
    });

    it('should have the property totalDialoutMinutes (base name: "totalDialoutMinutes")', function() {
      // uncomment below and update the code to test the property totalDialoutMinutes
      //var instane = new BlueJeansOnVideoRestApi.MeetingHistory();
      //expect(instance).to.be();
    });

    it('should have the property totalTollFreeMinutes (base name: "totalTollFreeMinutes")', function() {
      // uncomment below and update the code to test the property totalTollFreeMinutes
      //var instane = new BlueJeansOnVideoRestApi.MeetingHistory();
      //expect(instance).to.be();
    });

    it('should have the property callDIDMinutes (base name: "callDIDMinutes")', function() {
      // uncomment below and update the code to test the property callDIDMinutes
      //var instane = new BlueJeansOnVideoRestApi.MeetingHistory();
      //expect(instance).to.be();
    });

    it('should have the property startTime (base name: "startTime")', function() {
      // uncomment below and update the code to test the property startTime
      //var instane = new BlueJeansOnVideoRestApi.MeetingHistory();
      //expect(instance).to.be();
    });

    it('should have the property endTime (base name: "endTime")', function() {
      // uncomment below and update the code to test the property endTime
      //var instane = new BlueJeansOnVideoRestApi.MeetingHistory();
      //expect(instance).to.be();
    });

    it('should have the property meetingStatus (base name: "meetingStatus")', function() {
      // uncomment below and update the code to test the property meetingStatus
      //var instane = new BlueJeansOnVideoRestApi.MeetingHistory();
      //expect(instance).to.be();
    });

    it('should have the property meetingThumbnail (base name: "meetingThumbnail")', function() {
      // uncomment below and update the code to test the property meetingThumbnail
      //var instane = new BlueJeansOnVideoRestApi.MeetingHistory();
      //expect(instance).to.be();
    });

    it('should have the property startTimeZone (base name: "startTimeZone")', function() {
      // uncomment below and update the code to test the property startTimeZone
      //var instane = new BlueJeansOnVideoRestApi.MeetingHistory();
      //expect(instance).to.be();
    });

    it('should have the property processingStatus (base name: "processingStatus")', function() {
      // uncomment below and update the code to test the property processingStatus
      //var instane = new BlueJeansOnVideoRestApi.MeetingHistory();
      //expect(instance).to.be();
    });

    it('should have the property concurrentCalls (base name: "concurrentCalls")', function() {
      // uncomment below and update the code to test the property concurrentCalls
      //var instane = new BlueJeansOnVideoRestApi.MeetingHistory();
      //expect(instance).to.be();
    });

    it('should have the property uploadStatus (base name: "uploadStatus")', function() {
      // uncomment below and update the code to test the property uploadStatus
      //var instane = new BlueJeansOnVideoRestApi.MeetingHistory();
      //expect(instance).to.be();
    });

    it('should have the property pstnonly (base name: "pstnonly")', function() {
      // uncomment below and update the code to test the property pstnonly
      //var instane = new BlueJeansOnVideoRestApi.MeetingHistory();
      //expect(instance).to.be();
    });

    it('should have the property participantList (base name: "participantList")', function() {
      // uncomment below and update the code to test the property participantList
      //var instane = new BlueJeansOnVideoRestApi.MeetingHistory();
      //expect(instance).to.be();
    });

  });

}));