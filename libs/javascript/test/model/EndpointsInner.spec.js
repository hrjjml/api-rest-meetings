/**
 * BlueJeans Meetings REST API
 *  ## Video That Works Where You Do. <p>This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you can see and try actual API calls to manage User Accounts, Meetings, and Recordings, pull Analytical Data and Current State information.</p>    <nosdk> <hr> <div> <div class=\"key\">     <a href=\"./basics.html\" target=\"_\"><img class=\"keyimg\" src=\"./img/bjnmeeting.png\"/></a> </div> <div class=\"keybox\"> Basic instructions about What is a BlueJeans Meeting, and Getting Started Using API's, are <a href=\"./basics.html\" target=\"_blank\">available here <i class=\"glyphicon glyphicon-new-window\"></i></a>. </div> </div> <hr> <alert>2/21/2019</alert> Change response of Change layout and Endpoint API's to 204<br/> 12/03/2018 Add API for setting user profile photograph.<br/> 10/17/2018 Updated API field definitions for time variables to be 64-bit .<br/> 7/23/2018 Corrected errors in API definition file.<br/> 7/10/2018 Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> </nosdk> <hr> 
 *
 * OpenAPI spec version: 1.0.4402212019
 * Contact: glenn@bluejeans.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 *
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 *
 * Do not edit the class manually.
 *
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
    factory(root.expect, root.BlueJeansMeetingsRestApi);
  }
}(this, function(expect, BlueJeansMeetingsRestApi) {
  'use strict';

  var instance;

  beforeEach(function() {
    instance = new BlueJeansMeetingsRestApi.EndpointsInner();
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

  describe('EndpointsInner', function() {
    it('should create an instance of EndpointsInner', function() {
      // uncomment below and update the code to test EndpointsInner
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be.a(BlueJeansMeetingsRestApi.EndpointsInner);
    });

    it('should have the property meetingid (base name: "meetingid")', function() {
      // uncomment below and update the code to test the property meetingid
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property name (base name: "name")', function() {
      // uncomment below and update the code to test the property name
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property callQuality (base name: "CallQuality")', function() {
      // uncomment below and update the code to test the property callQuality
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property leader (base name: "Leader")', function() {
      // uncomment below and update the code to test the property leader
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property callguid (base name: "callguid")', function() {
      // uncomment below and update the code to test the property callguid
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property endpoint (base name: "endpoint")', function() {
      // uncomment below and update the code to test the property endpoint
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property talkDetected (base name: "TalkDetected")', function() {
      // uncomment below and update the code to test the property talkDetected
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property secureCall (base name: "SecureCall")', function() {
      // uncomment below and update the code to test the property secureCall
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property layout (base name: "Layout")', function() {
      // uncomment below and update the code to test the property layout
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property subLayout (base name: "SubLayout")', function() {
      // uncomment below and update the code to test the property subLayout
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property videoRecv (base name: "VideoRecv")', function() {
      // uncomment below and update the code to test the property videoRecv
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property videoRecvLocalMute (base name: "VideoRecvLocalMute")', function() {
      // uncomment below and update the code to test the property videoRecvLocalMute
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property videoRecvRemoteMute (base name: "VideoRecvRemoteMute")', function() {
      // uncomment below and update the code to test the property videoRecvRemoteMute
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property audioRecv (base name: "AudioRecv")', function() {
      // uncomment below and update the code to test the property audioRecv
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property audioRecvLocalMute (base name: "AudioRecvLocalMute")', function() {
      // uncomment below and update the code to test the property audioRecvLocalMute
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property audioRecvRemoteMute (base name: "AudioRecvRemoteMute")', function() {
      // uncomment below and update the code to test the property audioRecvRemoteMute
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property audioRecvCodec (base name: "AudioRecvCodec")', function() {
      // uncomment below and update the code to test the property audioRecvCodec
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property audioSendCodec (base name: "AudioSendCodec")', function() {
      // uncomment below and update the code to test the property audioSendCodec
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property videoRecvCodec (base name: "VideoRecvCodec")', function() {
      // uncomment below and update the code to test the property videoRecvCodec
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property videoRecvHeight (base name: "VideoRecvHeight")', function() {
      // uncomment below and update the code to test the property videoRecvHeight
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property videoRecvWidth (base name: "VideoRecvWidth")', function() {
      // uncomment below and update the code to test the property videoRecvWidth
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property videoSendCodec (base name: "VideoSendCodec")', function() {
      // uncomment below and update the code to test the property videoSendCodec
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property videoSendHeight (base name: "VideoSendHeight")', function() {
      // uncomment below and update the code to test the property videoSendHeight
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property videoSendWidth (base name: "VideoSendWidth")', function() {
      // uncomment below and update the code to test the property videoSendWidth
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property visibility (base name: "visibility")', function() {
      // uncomment below and update the code to test the property visibility
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property chatEndpointGuid (base name: "chatEndpointGuid")', function() {
      // uncomment below and update the code to test the property chatEndpointGuid
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property endpointGuid (base name: "endpointGuid")', function() {
      // uncomment below and update the code to test the property endpointGuid
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property rDCVersion (base name: "RDCVersion")', function() {
      // uncomment below and update the code to test the property rDCVersion
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property rDCControllerCapable (base name: "RDCControllerCapable")', function() {
      // uncomment below and update the code to test the property rDCControllerCapable
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property rDCControlleeCapable (base name: "RDCControlleeCapable")', function() {
      // uncomment below and update the code to test the property rDCControlleeCapable
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

    it('should have the property connections (base name: "connections")', function() {
      // uncomment below and update the code to test the property connections
      //var instance = new BlueJeansMeetingsRestApi.EndpointsInner();
      //expect(instance).to.be();
    });

  });

}));
