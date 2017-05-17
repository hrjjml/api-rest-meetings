/* 
 * BlueJeans onVideo REST API
 *
 * _Video That Works Where You Do._  This site provides developers access to API's from BlueJean's onVideo meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data as well retrieve current state information.  With these API's  you should be able to quickly integrate **BlueJeans** video into your applications.     # Authentication All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ## Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – After creating a developer application, users witll authenticate via a BlueJeans page, and receive an authorization code. Submit authorization with other tokens and receive an access token. Known as three-legged OAuth. ## Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. # Getting Started Before you start using the API's on this site, you must first have a BlueJeans account.  With your BlueJean credentials, use one of the Authentication methods to obtain an access token. - Click on the Authorize button at the top of page - Enter your access token in the field marked \"api_key\" Now the web site will automatically include your access token on all API calls you make. 
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

using System;
using System.Linq;
using System.IO;
using System.Text;
using System.Text.RegularExpressions;
using System.Collections;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Runtime.Serialization;
using Newtonsoft.Json;
using Newtonsoft.Json.Converters;
using System.ComponentModel.DataAnnotations;

namespace com.bluejeans.api.rest.onvideo.Model
{
    /// <summary>
    /// MeetingAdvancedMeetingOptions
    /// </summary>
    [DataContract]
    public partial class MeetingAdvancedMeetingOptions :  IEquatable<MeetingAdvancedMeetingOptions>, IValidatableObject
    {
        /// <summary>
        /// Gets or Sets EncryptionType
        /// </summary>
        [JsonConverter(typeof(StringEnumConverter))]
        public enum EncryptionTypeEnum
        {
            
            /// <summary>
            /// Enum NOENCRYPTION for "NO_ENCRYPTION"
            /// </summary>
            [EnumMember(Value = "NO_ENCRYPTION")]
            NOENCRYPTION,
            
            /// <summary>
            /// Enum ENCRYPTEDONLY for "ENCRYPTED_ONLY"
            /// </summary>
            [EnumMember(Value = "ENCRYPTED_ONLY")]
            ENCRYPTEDONLY,
            
            /// <summary>
            /// Enum ENCRYPTEDORPSTNONLY for "ENCRYPTED_OR_PSTN_ONLY"
            /// </summary>
            [EnumMember(Value = "ENCRYPTED_OR_PSTN_ONLY")]
            ENCRYPTEDORPSTNONLY
        }

        /// <summary>
        /// Gets or Sets EncryptionType
        /// </summary>
        [DataMember(Name="encryptionType", EmitDefaultValue=false)]
        public EncryptionTypeEnum? EncryptionType { get; set; }
        /// <summary>
        /// Initializes a new instance of the <see cref="MeetingAdvancedMeetingOptions" /> class.
        /// </summary>
        /// <param name="AutoRecord">AutoRecord.</param>
        /// <param name="MuteParticipantsOnEntry">MuteParticipantsOnEntry.</param>
        /// <param name="EncryptionType">EncryptionType.</param>
        /// <param name="ModeratorLess">ModeratorLess.</param>
        /// <param name="VideoBestFit">VideoBestFit.</param>
        /// <param name="DisallowChat">DisallowChat.</param>
        /// <param name="PublishMeeting">PublishMeeting.</param>
        /// <param name="ShowAllAttendeesInMeetingInvite">ShowAllAttendeesInMeetingInvite.</param>
        public MeetingAdvancedMeetingOptions(bool? AutoRecord = default(bool?), bool? MuteParticipantsOnEntry = default(bool?), EncryptionTypeEnum? EncryptionType = default(EncryptionTypeEnum?), bool? ModeratorLess = default(bool?), bool? VideoBestFit = default(bool?), bool? DisallowChat = default(bool?), bool? PublishMeeting = default(bool?), bool? ShowAllAttendeesInMeetingInvite = default(bool?))
        {
            this.AutoRecord = AutoRecord;
            this.MuteParticipantsOnEntry = MuteParticipantsOnEntry;
            this.EncryptionType = EncryptionType;
            this.ModeratorLess = ModeratorLess;
            this.VideoBestFit = VideoBestFit;
            this.DisallowChat = DisallowChat;
            this.PublishMeeting = PublishMeeting;
            this.ShowAllAttendeesInMeetingInvite = ShowAllAttendeesInMeetingInvite;
        }
        
        /// <summary>
        /// Gets or Sets AutoRecord
        /// </summary>
        [DataMember(Name="autoRecord", EmitDefaultValue=false)]
        public bool? AutoRecord { get; set; }
        /// <summary>
        /// Gets or Sets MuteParticipantsOnEntry
        /// </summary>
        [DataMember(Name="muteParticipantsOnEntry", EmitDefaultValue=false)]
        public bool? MuteParticipantsOnEntry { get; set; }
        /// <summary>
        /// Gets or Sets ModeratorLess
        /// </summary>
        [DataMember(Name="moderatorLess", EmitDefaultValue=false)]
        public bool? ModeratorLess { get; set; }
        /// <summary>
        /// Gets or Sets VideoBestFit
        /// </summary>
        [DataMember(Name="videoBestFit", EmitDefaultValue=false)]
        public bool? VideoBestFit { get; set; }
        /// <summary>
        /// Gets or Sets DisallowChat
        /// </summary>
        [DataMember(Name="disallowChat", EmitDefaultValue=false)]
        public bool? DisallowChat { get; set; }
        /// <summary>
        /// Gets or Sets PublishMeeting
        /// </summary>
        [DataMember(Name="publishMeeting", EmitDefaultValue=false)]
        public bool? PublishMeeting { get; set; }
        /// <summary>
        /// Gets or Sets ShowAllAttendeesInMeetingInvite
        /// </summary>
        [DataMember(Name="showAllAttendeesInMeetingInvite", EmitDefaultValue=false)]
        public bool? ShowAllAttendeesInMeetingInvite { get; set; }
        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class MeetingAdvancedMeetingOptions {\n");
            sb.Append("  AutoRecord: ").Append(AutoRecord).Append("\n");
            sb.Append("  MuteParticipantsOnEntry: ").Append(MuteParticipantsOnEntry).Append("\n");
            sb.Append("  EncryptionType: ").Append(EncryptionType).Append("\n");
            sb.Append("  ModeratorLess: ").Append(ModeratorLess).Append("\n");
            sb.Append("  VideoBestFit: ").Append(VideoBestFit).Append("\n");
            sb.Append("  DisallowChat: ").Append(DisallowChat).Append("\n");
            sb.Append("  PublishMeeting: ").Append(PublishMeeting).Append("\n");
            sb.Append("  ShowAllAttendeesInMeetingInvite: ").Append(ShowAllAttendeesInMeetingInvite).Append("\n");
            sb.Append("}\n");
            return sb.ToString();
        }
  
        /// <summary>
        /// Returns the JSON string presentation of the object
        /// </summary>
        /// <returns>JSON string presentation of the object</returns>
        public string ToJson()
        {
            return JsonConvert.SerializeObject(this, Formatting.Indented);
        }

        /// <summary>
        /// Returns true if objects are equal
        /// </summary>
        /// <param name="obj">Object to be compared</param>
        /// <returns>Boolean</returns>
        public override bool Equals(object obj)
        {
            // credit: http://stackoverflow.com/a/10454552/677735
            return this.Equals(obj as MeetingAdvancedMeetingOptions);
        }

        /// <summary>
        /// Returns true if MeetingAdvancedMeetingOptions instances are equal
        /// </summary>
        /// <param name="other">Instance of MeetingAdvancedMeetingOptions to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(MeetingAdvancedMeetingOptions other)
        {
            // credit: http://stackoverflow.com/a/10454552/677735
            if (other == null)
                return false;

            return 
                (
                    this.AutoRecord == other.AutoRecord ||
                    this.AutoRecord != null &&
                    this.AutoRecord.Equals(other.AutoRecord)
                ) && 
                (
                    this.MuteParticipantsOnEntry == other.MuteParticipantsOnEntry ||
                    this.MuteParticipantsOnEntry != null &&
                    this.MuteParticipantsOnEntry.Equals(other.MuteParticipantsOnEntry)
                ) && 
                (
                    this.EncryptionType == other.EncryptionType ||
                    this.EncryptionType != null &&
                    this.EncryptionType.Equals(other.EncryptionType)
                ) && 
                (
                    this.ModeratorLess == other.ModeratorLess ||
                    this.ModeratorLess != null &&
                    this.ModeratorLess.Equals(other.ModeratorLess)
                ) && 
                (
                    this.VideoBestFit == other.VideoBestFit ||
                    this.VideoBestFit != null &&
                    this.VideoBestFit.Equals(other.VideoBestFit)
                ) && 
                (
                    this.DisallowChat == other.DisallowChat ||
                    this.DisallowChat != null &&
                    this.DisallowChat.Equals(other.DisallowChat)
                ) && 
                (
                    this.PublishMeeting == other.PublishMeeting ||
                    this.PublishMeeting != null &&
                    this.PublishMeeting.Equals(other.PublishMeeting)
                ) && 
                (
                    this.ShowAllAttendeesInMeetingInvite == other.ShowAllAttendeesInMeetingInvite ||
                    this.ShowAllAttendeesInMeetingInvite != null &&
                    this.ShowAllAttendeesInMeetingInvite.Equals(other.ShowAllAttendeesInMeetingInvite)
                );
        }

        /// <summary>
        /// Gets the hash code
        /// </summary>
        /// <returns>Hash code</returns>
        public override int GetHashCode()
        {
            // credit: http://stackoverflow.com/a/263416/677735
            unchecked // Overflow is fine, just wrap
            {
                int hash = 41;
                // Suitable nullity checks etc, of course :)
                if (this.AutoRecord != null)
                    hash = hash * 59 + this.AutoRecord.GetHashCode();
                if (this.MuteParticipantsOnEntry != null)
                    hash = hash * 59 + this.MuteParticipantsOnEntry.GetHashCode();
                if (this.EncryptionType != null)
                    hash = hash * 59 + this.EncryptionType.GetHashCode();
                if (this.ModeratorLess != null)
                    hash = hash * 59 + this.ModeratorLess.GetHashCode();
                if (this.VideoBestFit != null)
                    hash = hash * 59 + this.VideoBestFit.GetHashCode();
                if (this.DisallowChat != null)
                    hash = hash * 59 + this.DisallowChat.GetHashCode();
                if (this.PublishMeeting != null)
                    hash = hash * 59 + this.PublishMeeting.GetHashCode();
                if (this.ShowAllAttendeesInMeetingInvite != null)
                    hash = hash * 59 + this.ShowAllAttendeesInMeetingInvite.GetHashCode();
                return hash;
            }
        }

        public IEnumerable<ValidationResult> Validate(ValidationContext validationContext)
        { 
            yield break;
        }
    }

}