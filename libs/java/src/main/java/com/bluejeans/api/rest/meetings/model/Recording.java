/*
 * BlueJeans Meetings REST API
 *  ## Video That Works Where You Do. <p>This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you can see and try actual API calls to manage User Accounts, Meetings, and Recordings, pull Analytical Data and Current State information.</p>    <nosdk> <hr> <div> <div class=\"key\">     <a href=\"./basics.html\" target=\"_\"><img class=\"keyimg\" src=\"./img/bjnmeeting.png\"/></a> </div> <div class=\"keybox\"> Basic instructions about What is a BlueJeans Meeting, and Getting Started Using API's, are <a href=\"./basics.html\" target=\"_blank\">available here <i class=\"glyphicon glyphicon-new-window\"></i></a>. </div> </div> <hr> <alert>2/21/2019</alert> Change response of Change layout and Endpoint API's to 204<br/> 12/03/2018 Add API for setting user profile photograph.<br/> 10/17/2018 Updated API field definitions for time variables to be 64-bit .<br/> 7/23/2018 Corrected errors in API definition file.<br/> 7/10/2018 Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> </nosdk> <hr> 
 *
 * OpenAPI spec version: 1.0.4402212019
 * Contact: glenn@bluejeans.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.bluejeans.api.rest.meetings.model;

import java.util.Objects;
import java.util.Arrays;
import com.bluejeans.api.rest.meetings.model.RecordingRecordingChapters;
import com.google.gson.TypeAdapter;
import com.google.gson.annotations.JsonAdapter;
import com.google.gson.annotations.SerializedName;
import com.google.gson.stream.JsonReader;
import com.google.gson.stream.JsonWriter;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

/**
 * Recording
 */

public class Recording {
  @SerializedName("recordingEntityId")
  private Integer recordingEntityId = null;

  @SerializedName("recordingEntityGuid")
  private String recordingEntityGuid = null;

  @SerializedName("recordingName")
  private String recordingName = null;

  @SerializedName("meetingGuid")
  private String meetingGuid = null;

  @SerializedName("chapterCount")
  private Integer chapterCount = null;

  @SerializedName("totalSize")
  private Integer totalSize = null;

  @SerializedName("totalDuration")
  private Integer totalDuration = null;

  @SerializedName("lastRecordingDate")
  private Integer lastRecordingDate = null;

  @SerializedName("aggregatedStatus")
  private String aggregatedStatus = null;

  @SerializedName("recordingThumbnail")
  private String recordingThumbnail = null;

  @SerializedName("created")
  private Integer created = null;

  @SerializedName("aggregatedViewCount")
  private Integer aggregatedViewCount = null;

  @SerializedName("isPremiumRecording")
  private Boolean isPremiumRecording = null;

  @SerializedName("showPremiumRecordingTag")
  private Boolean showPremiumRecordingTag = null;

  @SerializedName("recordingChapters")
  private List<RecordingRecordingChapters> recordingChapters = null;

  public Recording recordingEntityId(Integer recordingEntityId) {
    this.recordingEntityId = recordingEntityId;
    return this;
  }

   /**
   * Get recordingEntityId
   * @return recordingEntityId
  **/
  @ApiModelProperty(value = "")
  public Integer getRecordingEntityId() {
    return recordingEntityId;
  }

  public void setRecordingEntityId(Integer recordingEntityId) {
    this.recordingEntityId = recordingEntityId;
  }

  public Recording recordingEntityGuid(String recordingEntityGuid) {
    this.recordingEntityGuid = recordingEntityGuid;
    return this;
  }

   /**
   * Get recordingEntityGuid
   * @return recordingEntityGuid
  **/
  @ApiModelProperty(value = "")
  public String getRecordingEntityGuid() {
    return recordingEntityGuid;
  }

  public void setRecordingEntityGuid(String recordingEntityGuid) {
    this.recordingEntityGuid = recordingEntityGuid;
  }

  public Recording recordingName(String recordingName) {
    this.recordingName = recordingName;
    return this;
  }

   /**
   * Get recordingName
   * @return recordingName
  **/
  @ApiModelProperty(value = "")
  public String getRecordingName() {
    return recordingName;
  }

  public void setRecordingName(String recordingName) {
    this.recordingName = recordingName;
  }

  public Recording meetingGuid(String meetingGuid) {
    this.meetingGuid = meetingGuid;
    return this;
  }

   /**
   * Get meetingGuid
   * @return meetingGuid
  **/
  @ApiModelProperty(value = "")
  public String getMeetingGuid() {
    return meetingGuid;
  }

  public void setMeetingGuid(String meetingGuid) {
    this.meetingGuid = meetingGuid;
  }

  public Recording chapterCount(Integer chapterCount) {
    this.chapterCount = chapterCount;
    return this;
  }

   /**
   * Get chapterCount
   * @return chapterCount
  **/
  @ApiModelProperty(value = "")
  public Integer getChapterCount() {
    return chapterCount;
  }

  public void setChapterCount(Integer chapterCount) {
    this.chapterCount = chapterCount;
  }

  public Recording totalSize(Integer totalSize) {
    this.totalSize = totalSize;
    return this;
  }

   /**
   * Get totalSize
   * @return totalSize
  **/
  @ApiModelProperty(value = "")
  public Integer getTotalSize() {
    return totalSize;
  }

  public void setTotalSize(Integer totalSize) {
    this.totalSize = totalSize;
  }

  public Recording totalDuration(Integer totalDuration) {
    this.totalDuration = totalDuration;
    return this;
  }

   /**
   * Get totalDuration
   * @return totalDuration
  **/
  @ApiModelProperty(value = "")
  public Integer getTotalDuration() {
    return totalDuration;
  }

  public void setTotalDuration(Integer totalDuration) {
    this.totalDuration = totalDuration;
  }

  public Recording lastRecordingDate(Integer lastRecordingDate) {
    this.lastRecordingDate = lastRecordingDate;
    return this;
  }

   /**
   * Get lastRecordingDate
   * @return lastRecordingDate
  **/
  @ApiModelProperty(value = "")
  public Integer getLastRecordingDate() {
    return lastRecordingDate;
  }

  public void setLastRecordingDate(Integer lastRecordingDate) {
    this.lastRecordingDate = lastRecordingDate;
  }

  public Recording aggregatedStatus(String aggregatedStatus) {
    this.aggregatedStatus = aggregatedStatus;
    return this;
  }

   /**
   * Get aggregatedStatus
   * @return aggregatedStatus
  **/
  @ApiModelProperty(value = "")
  public String getAggregatedStatus() {
    return aggregatedStatus;
  }

  public void setAggregatedStatus(String aggregatedStatus) {
    this.aggregatedStatus = aggregatedStatus;
  }

  public Recording recordingThumbnail(String recordingThumbnail) {
    this.recordingThumbnail = recordingThumbnail;
    return this;
  }

   /**
   * Get recordingThumbnail
   * @return recordingThumbnail
  **/
  @ApiModelProperty(value = "")
  public String getRecordingThumbnail() {
    return recordingThumbnail;
  }

  public void setRecordingThumbnail(String recordingThumbnail) {
    this.recordingThumbnail = recordingThumbnail;
  }

  public Recording created(Integer created) {
    this.created = created;
    return this;
  }

   /**
   * Get created
   * @return created
  **/
  @ApiModelProperty(value = "")
  public Integer getCreated() {
    return created;
  }

  public void setCreated(Integer created) {
    this.created = created;
  }

  public Recording aggregatedViewCount(Integer aggregatedViewCount) {
    this.aggregatedViewCount = aggregatedViewCount;
    return this;
  }

   /**
   * Get aggregatedViewCount
   * @return aggregatedViewCount
  **/
  @ApiModelProperty(value = "")
  public Integer getAggregatedViewCount() {
    return aggregatedViewCount;
  }

  public void setAggregatedViewCount(Integer aggregatedViewCount) {
    this.aggregatedViewCount = aggregatedViewCount;
  }

  public Recording isPremiumRecording(Boolean isPremiumRecording) {
    this.isPremiumRecording = isPremiumRecording;
    return this;
  }

   /**
   * Get isPremiumRecording
   * @return isPremiumRecording
  **/
  @ApiModelProperty(value = "")
  public Boolean isIsPremiumRecording() {
    return isPremiumRecording;
  }

  public void setIsPremiumRecording(Boolean isPremiumRecording) {
    this.isPremiumRecording = isPremiumRecording;
  }

  public Recording showPremiumRecordingTag(Boolean showPremiumRecordingTag) {
    this.showPremiumRecordingTag = showPremiumRecordingTag;
    return this;
  }

   /**
   * Get showPremiumRecordingTag
   * @return showPremiumRecordingTag
  **/
  @ApiModelProperty(value = "")
  public Boolean isShowPremiumRecordingTag() {
    return showPremiumRecordingTag;
  }

  public void setShowPremiumRecordingTag(Boolean showPremiumRecordingTag) {
    this.showPremiumRecordingTag = showPremiumRecordingTag;
  }

  public Recording recordingChapters(List<RecordingRecordingChapters> recordingChapters) {
    this.recordingChapters = recordingChapters;
    return this;
  }

  public Recording addRecordingChaptersItem(RecordingRecordingChapters recordingChaptersItem) {
    if (this.recordingChapters == null) {
      this.recordingChapters = new ArrayList<RecordingRecordingChapters>();
    }
    this.recordingChapters.add(recordingChaptersItem);
    return this;
  }

   /**
   * Get recordingChapters
   * @return recordingChapters
  **/
  @ApiModelProperty(value = "")
  public List<RecordingRecordingChapters> getRecordingChapters() {
    return recordingChapters;
  }

  public void setRecordingChapters(List<RecordingRecordingChapters> recordingChapters) {
    this.recordingChapters = recordingChapters;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    Recording recording = (Recording) o;
    return Objects.equals(this.recordingEntityId, recording.recordingEntityId) &&
        Objects.equals(this.recordingEntityGuid, recording.recordingEntityGuid) &&
        Objects.equals(this.recordingName, recording.recordingName) &&
        Objects.equals(this.meetingGuid, recording.meetingGuid) &&
        Objects.equals(this.chapterCount, recording.chapterCount) &&
        Objects.equals(this.totalSize, recording.totalSize) &&
        Objects.equals(this.totalDuration, recording.totalDuration) &&
        Objects.equals(this.lastRecordingDate, recording.lastRecordingDate) &&
        Objects.equals(this.aggregatedStatus, recording.aggregatedStatus) &&
        Objects.equals(this.recordingThumbnail, recording.recordingThumbnail) &&
        Objects.equals(this.created, recording.created) &&
        Objects.equals(this.aggregatedViewCount, recording.aggregatedViewCount) &&
        Objects.equals(this.isPremiumRecording, recording.isPremiumRecording) &&
        Objects.equals(this.showPremiumRecordingTag, recording.showPremiumRecordingTag) &&
        Objects.equals(this.recordingChapters, recording.recordingChapters);
  }

  @Override
  public int hashCode() {
    return Objects.hash(recordingEntityId, recordingEntityGuid, recordingName, meetingGuid, chapterCount, totalSize, totalDuration, lastRecordingDate, aggregatedStatus, recordingThumbnail, created, aggregatedViewCount, isPremiumRecording, showPremiumRecordingTag, recordingChapters);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class Recording {\n");
    
    sb.append("    recordingEntityId: ").append(toIndentedString(recordingEntityId)).append("\n");
    sb.append("    recordingEntityGuid: ").append(toIndentedString(recordingEntityGuid)).append("\n");
    sb.append("    recordingName: ").append(toIndentedString(recordingName)).append("\n");
    sb.append("    meetingGuid: ").append(toIndentedString(meetingGuid)).append("\n");
    sb.append("    chapterCount: ").append(toIndentedString(chapterCount)).append("\n");
    sb.append("    totalSize: ").append(toIndentedString(totalSize)).append("\n");
    sb.append("    totalDuration: ").append(toIndentedString(totalDuration)).append("\n");
    sb.append("    lastRecordingDate: ").append(toIndentedString(lastRecordingDate)).append("\n");
    sb.append("    aggregatedStatus: ").append(toIndentedString(aggregatedStatus)).append("\n");
    sb.append("    recordingThumbnail: ").append(toIndentedString(recordingThumbnail)).append("\n");
    sb.append("    created: ").append(toIndentedString(created)).append("\n");
    sb.append("    aggregatedViewCount: ").append(toIndentedString(aggregatedViewCount)).append("\n");
    sb.append("    isPremiumRecording: ").append(toIndentedString(isPremiumRecording)).append("\n");
    sb.append("    showPremiumRecordingTag: ").append(toIndentedString(showPremiumRecordingTag)).append("\n");
    sb.append("    recordingChapters: ").append(toIndentedString(recordingChapters)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  /**
   * Convert the given object to string with each line indented by 4 spaces
   * (except the first line).
   */
  private String toIndentedString(java.lang.Object o) {
    if (o == null) {
      return "null";
    }
    return o.toString().replace("\n", "\n    ");
  }

}

