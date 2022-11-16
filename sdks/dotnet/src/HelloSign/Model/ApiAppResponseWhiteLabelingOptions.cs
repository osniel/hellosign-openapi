/*
 * Dropbox Sign API
 *
 * Dropbox Sign v3 API
 *
 * The version of the OpenAPI document: 3.0.0
 * Contact: apisupport@hellosign.com
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */


using System;
using System.Collections;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Linq;
using System.IO;
using System.Runtime.Serialization;
using System.Text;
using System.Text.RegularExpressions;
using Newtonsoft.Json;
using Newtonsoft.Json.Converters;
using Newtonsoft.Json.Linq;
using System.ComponentModel.DataAnnotations;
using OpenAPIDateConverter = HelloSign.Client.OpenAPIDateConverter;

namespace HelloSign.Model
{
    /// <summary>
    /// An object with options to customize the app&#39;s signer page
    /// </summary>
    [DataContract(Name = "ApiAppResponseWhiteLabelingOptions")]
    [JsonObject(ItemNullValueHandling = NullValueHandling.Ignore)]
    public partial class ApiAppResponseWhiteLabelingOptions : IOpenApiTyped, IEquatable<ApiAppResponseWhiteLabelingOptions>, IValidatableObject
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="ApiAppResponseWhiteLabelingOptions" /> class.
        /// </summary>
        [JsonConstructorAttribute]
        protected ApiAppResponseWhiteLabelingOptions() { }
        /// <summary>
        /// Initializes a new instance of the <see cref="ApiAppResponseWhiteLabelingOptions" /> class.
        /// </summary>
        /// <param name="headerBackgroundColor">headerBackgroundColor.</param>
        /// <param name="legalVersion">legalVersion.</param>
        /// <param name="linkColor">linkColor.</param>
        /// <param name="pageBackgroundColor">pageBackgroundColor.</param>
        /// <param name="primaryButtonColor">primaryButtonColor.</param>
        /// <param name="primaryButtonColorHover">primaryButtonColorHover.</param>
        /// <param name="primaryButtonTextColor">primaryButtonTextColor.</param>
        /// <param name="primaryButtonTextColorHover">primaryButtonTextColorHover.</param>
        /// <param name="secondaryButtonColor">secondaryButtonColor.</param>
        /// <param name="secondaryButtonColorHover">secondaryButtonColorHover.</param>
        /// <param name="secondaryButtonTextColor">secondaryButtonTextColor.</param>
        /// <param name="secondaryButtonTextColorHover">secondaryButtonTextColorHover.</param>
        /// <param name="textColor1">textColor1.</param>
        /// <param name="textColor2">textColor2.</param>
        public ApiAppResponseWhiteLabelingOptions(string headerBackgroundColor = default(string), string legalVersion = default(string), string linkColor = default(string), string pageBackgroundColor = default(string), string primaryButtonColor = default(string), string primaryButtonColorHover = default(string), string primaryButtonTextColor = default(string), string primaryButtonTextColorHover = default(string), string secondaryButtonColor = default(string), string secondaryButtonColorHover = default(string), string secondaryButtonTextColor = default(string), string secondaryButtonTextColorHover = default(string), string textColor1 = default(string), string textColor2 = default(string))
        {
            
            this.HeaderBackgroundColor = headerBackgroundColor;
            this.LegalVersion = legalVersion;
            this.LinkColor = linkColor;
            this.PageBackgroundColor = pageBackgroundColor;
            this.PrimaryButtonColor = primaryButtonColor;
            this.PrimaryButtonColorHover = primaryButtonColorHover;
            this.PrimaryButtonTextColor = primaryButtonTextColor;
            this.PrimaryButtonTextColorHover = primaryButtonTextColorHover;
            this.SecondaryButtonColor = secondaryButtonColor;
            this.SecondaryButtonColorHover = secondaryButtonColorHover;
            this.SecondaryButtonTextColor = secondaryButtonTextColor;
            this.SecondaryButtonTextColorHover = secondaryButtonTextColorHover;
            this.TextColor1 = textColor1;
            this.TextColor2 = textColor2;
        }

        /// <summary>
        /// Gets or Sets HeaderBackgroundColor
        /// </summary>
        [DataMember(Name = "header_background_color", EmitDefaultValue = true)]
        public string HeaderBackgroundColor { get; set; }

        /// <summary>
        /// Gets or Sets LegalVersion
        /// </summary>
        [DataMember(Name = "legal_version", EmitDefaultValue = true)]
        public string LegalVersion { get; set; }

        /// <summary>
        /// Gets or Sets LinkColor
        /// </summary>
        [DataMember(Name = "link_color", EmitDefaultValue = true)]
        public string LinkColor { get; set; }

        /// <summary>
        /// Gets or Sets PageBackgroundColor
        /// </summary>
        [DataMember(Name = "page_background_color", EmitDefaultValue = true)]
        public string PageBackgroundColor { get; set; }

        /// <summary>
        /// Gets or Sets PrimaryButtonColor
        /// </summary>
        [DataMember(Name = "primary_button_color", EmitDefaultValue = true)]
        public string PrimaryButtonColor { get; set; }

        /// <summary>
        /// Gets or Sets PrimaryButtonColorHover
        /// </summary>
        [DataMember(Name = "primary_button_color_hover", EmitDefaultValue = true)]
        public string PrimaryButtonColorHover { get; set; }

        /// <summary>
        /// Gets or Sets PrimaryButtonTextColor
        /// </summary>
        [DataMember(Name = "primary_button_text_color", EmitDefaultValue = true)]
        public string PrimaryButtonTextColor { get; set; }

        /// <summary>
        /// Gets or Sets PrimaryButtonTextColorHover
        /// </summary>
        [DataMember(Name = "primary_button_text_color_hover", EmitDefaultValue = true)]
        public string PrimaryButtonTextColorHover { get; set; }

        /// <summary>
        /// Gets or Sets SecondaryButtonColor
        /// </summary>
        [DataMember(Name = "secondary_button_color", EmitDefaultValue = true)]
        public string SecondaryButtonColor { get; set; }

        /// <summary>
        /// Gets or Sets SecondaryButtonColorHover
        /// </summary>
        [DataMember(Name = "secondary_button_color_hover", EmitDefaultValue = true)]
        public string SecondaryButtonColorHover { get; set; }

        /// <summary>
        /// Gets or Sets SecondaryButtonTextColor
        /// </summary>
        [DataMember(Name = "secondary_button_text_color", EmitDefaultValue = true)]
        public string SecondaryButtonTextColor { get; set; }

        /// <summary>
        /// Gets or Sets SecondaryButtonTextColorHover
        /// </summary>
        [DataMember(Name = "secondary_button_text_color_hover", EmitDefaultValue = true)]
        public string SecondaryButtonTextColorHover { get; set; }

        /// <summary>
        /// Gets or Sets TextColor1
        /// </summary>
        [DataMember(Name = "text_color1", EmitDefaultValue = true)]
        public string TextColor1 { get; set; }

        /// <summary>
        /// Gets or Sets TextColor2
        /// </summary>
        [DataMember(Name = "text_color2", EmitDefaultValue = true)]
        public string TextColor2 { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("class ApiAppResponseWhiteLabelingOptions {\n");
            sb.Append("  HeaderBackgroundColor: ").Append(HeaderBackgroundColor).Append("\n");
            sb.Append("  LegalVersion: ").Append(LegalVersion).Append("\n");
            sb.Append("  LinkColor: ").Append(LinkColor).Append("\n");
            sb.Append("  PageBackgroundColor: ").Append(PageBackgroundColor).Append("\n");
            sb.Append("  PrimaryButtonColor: ").Append(PrimaryButtonColor).Append("\n");
            sb.Append("  PrimaryButtonColorHover: ").Append(PrimaryButtonColorHover).Append("\n");
            sb.Append("  PrimaryButtonTextColor: ").Append(PrimaryButtonTextColor).Append("\n");
            sb.Append("  PrimaryButtonTextColorHover: ").Append(PrimaryButtonTextColorHover).Append("\n");
            sb.Append("  SecondaryButtonColor: ").Append(SecondaryButtonColor).Append("\n");
            sb.Append("  SecondaryButtonColorHover: ").Append(SecondaryButtonColorHover).Append("\n");
            sb.Append("  SecondaryButtonTextColor: ").Append(SecondaryButtonTextColor).Append("\n");
            sb.Append("  SecondaryButtonTextColorHover: ").Append(SecondaryButtonTextColorHover).Append("\n");
            sb.Append("  TextColor1: ").Append(TextColor1).Append("\n");
            sb.Append("  TextColor2: ").Append(TextColor2).Append("\n");
            sb.Append("}\n");
            return sb.ToString();
        }

        /// <summary>
        /// Returns the JSON string presentation of the object
        /// </summary>
        /// <returns>JSON string presentation of the object</returns>
        public virtual string ToJson()
        {
            return Newtonsoft.Json.JsonConvert.SerializeObject(this, Newtonsoft.Json.Formatting.Indented);
        }

        /// <summary>
        /// Returns true if objects are equal
        /// </summary>
        /// <param name="input">Object to be compared</param>
        /// <returns>Boolean</returns>
        public override bool Equals(object input)
        {
            return this.Equals(input as ApiAppResponseWhiteLabelingOptions);
        }

        /// <summary>
        /// Returns true if ApiAppResponseWhiteLabelingOptions instances are equal
        /// </summary>
        /// <param name="input">Instance of ApiAppResponseWhiteLabelingOptions to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(ApiAppResponseWhiteLabelingOptions input)
        {
            if (input == null)
            {
                return false;
            }
            return 
                (
                    this.HeaderBackgroundColor == input.HeaderBackgroundColor ||
                    (this.HeaderBackgroundColor != null &&
                    this.HeaderBackgroundColor.Equals(input.HeaderBackgroundColor))
                ) && 
                (
                    this.LegalVersion == input.LegalVersion ||
                    (this.LegalVersion != null &&
                    this.LegalVersion.Equals(input.LegalVersion))
                ) && 
                (
                    this.LinkColor == input.LinkColor ||
                    (this.LinkColor != null &&
                    this.LinkColor.Equals(input.LinkColor))
                ) && 
                (
                    this.PageBackgroundColor == input.PageBackgroundColor ||
                    (this.PageBackgroundColor != null &&
                    this.PageBackgroundColor.Equals(input.PageBackgroundColor))
                ) && 
                (
                    this.PrimaryButtonColor == input.PrimaryButtonColor ||
                    (this.PrimaryButtonColor != null &&
                    this.PrimaryButtonColor.Equals(input.PrimaryButtonColor))
                ) && 
                (
                    this.PrimaryButtonColorHover == input.PrimaryButtonColorHover ||
                    (this.PrimaryButtonColorHover != null &&
                    this.PrimaryButtonColorHover.Equals(input.PrimaryButtonColorHover))
                ) && 
                (
                    this.PrimaryButtonTextColor == input.PrimaryButtonTextColor ||
                    (this.PrimaryButtonTextColor != null &&
                    this.PrimaryButtonTextColor.Equals(input.PrimaryButtonTextColor))
                ) && 
                (
                    this.PrimaryButtonTextColorHover == input.PrimaryButtonTextColorHover ||
                    (this.PrimaryButtonTextColorHover != null &&
                    this.PrimaryButtonTextColorHover.Equals(input.PrimaryButtonTextColorHover))
                ) && 
                (
                    this.SecondaryButtonColor == input.SecondaryButtonColor ||
                    (this.SecondaryButtonColor != null &&
                    this.SecondaryButtonColor.Equals(input.SecondaryButtonColor))
                ) && 
                (
                    this.SecondaryButtonColorHover == input.SecondaryButtonColorHover ||
                    (this.SecondaryButtonColorHover != null &&
                    this.SecondaryButtonColorHover.Equals(input.SecondaryButtonColorHover))
                ) && 
                (
                    this.SecondaryButtonTextColor == input.SecondaryButtonTextColor ||
                    (this.SecondaryButtonTextColor != null &&
                    this.SecondaryButtonTextColor.Equals(input.SecondaryButtonTextColor))
                ) && 
                (
                    this.SecondaryButtonTextColorHover == input.SecondaryButtonTextColorHover ||
                    (this.SecondaryButtonTextColorHover != null &&
                    this.SecondaryButtonTextColorHover.Equals(input.SecondaryButtonTextColorHover))
                ) && 
                (
                    this.TextColor1 == input.TextColor1 ||
                    (this.TextColor1 != null &&
                    this.TextColor1.Equals(input.TextColor1))
                ) && 
                (
                    this.TextColor2 == input.TextColor2 ||
                    (this.TextColor2 != null &&
                    this.TextColor2.Equals(input.TextColor2))
                );
        }

        /// <summary>
        /// Gets the hash code
        /// </summary>
        /// <returns>Hash code</returns>
        public override int GetHashCode()
        {
            unchecked // Overflow is fine, just wrap
            {
                int hashCode = 41;
                if (this.HeaderBackgroundColor != null)
                {
                    hashCode = (hashCode * 59) + this.HeaderBackgroundColor.GetHashCode();
                }
                if (this.LegalVersion != null)
                {
                    hashCode = (hashCode * 59) + this.LegalVersion.GetHashCode();
                }
                if (this.LinkColor != null)
                {
                    hashCode = (hashCode * 59) + this.LinkColor.GetHashCode();
                }
                if (this.PageBackgroundColor != null)
                {
                    hashCode = (hashCode * 59) + this.PageBackgroundColor.GetHashCode();
                }
                if (this.PrimaryButtonColor != null)
                {
                    hashCode = (hashCode * 59) + this.PrimaryButtonColor.GetHashCode();
                }
                if (this.PrimaryButtonColorHover != null)
                {
                    hashCode = (hashCode * 59) + this.PrimaryButtonColorHover.GetHashCode();
                }
                if (this.PrimaryButtonTextColor != null)
                {
                    hashCode = (hashCode * 59) + this.PrimaryButtonTextColor.GetHashCode();
                }
                if (this.PrimaryButtonTextColorHover != null)
                {
                    hashCode = (hashCode * 59) + this.PrimaryButtonTextColorHover.GetHashCode();
                }
                if (this.SecondaryButtonColor != null)
                {
                    hashCode = (hashCode * 59) + this.SecondaryButtonColor.GetHashCode();
                }
                if (this.SecondaryButtonColorHover != null)
                {
                    hashCode = (hashCode * 59) + this.SecondaryButtonColorHover.GetHashCode();
                }
                if (this.SecondaryButtonTextColor != null)
                {
                    hashCode = (hashCode * 59) + this.SecondaryButtonTextColor.GetHashCode();
                }
                if (this.SecondaryButtonTextColorHover != null)
                {
                    hashCode = (hashCode * 59) + this.SecondaryButtonTextColorHover.GetHashCode();
                }
                if (this.TextColor1 != null)
                {
                    hashCode = (hashCode * 59) + this.TextColor1.GetHashCode();
                }
                if (this.TextColor2 != null)
                {
                    hashCode = (hashCode * 59) + this.TextColor2.GetHashCode();
                }
                return hashCode;
            }
        }

        public List<OpenApiType> GetOpenApiTypes()
        {
            var types = new List<OpenApiType>();
            types.Add(new OpenApiType(){
                Name = "header_background_color",
                Property = "HeaderBackgroundColor",
                Type = "string",
                Value = HeaderBackgroundColor,
            });
            types.Add(new OpenApiType(){
                Name = "legal_version",
                Property = "LegalVersion",
                Type = "string",
                Value = LegalVersion,
            });
            types.Add(new OpenApiType(){
                Name = "link_color",
                Property = "LinkColor",
                Type = "string",
                Value = LinkColor,
            });
            types.Add(new OpenApiType(){
                Name = "page_background_color",
                Property = "PageBackgroundColor",
                Type = "string",
                Value = PageBackgroundColor,
            });
            types.Add(new OpenApiType(){
                Name = "primary_button_color",
                Property = "PrimaryButtonColor",
                Type = "string",
                Value = PrimaryButtonColor,
            });
            types.Add(new OpenApiType(){
                Name = "primary_button_color_hover",
                Property = "PrimaryButtonColorHover",
                Type = "string",
                Value = PrimaryButtonColorHover,
            });
            types.Add(new OpenApiType(){
                Name = "primary_button_text_color",
                Property = "PrimaryButtonTextColor",
                Type = "string",
                Value = PrimaryButtonTextColor,
            });
            types.Add(new OpenApiType(){
                Name = "primary_button_text_color_hover",
                Property = "PrimaryButtonTextColorHover",
                Type = "string",
                Value = PrimaryButtonTextColorHover,
            });
            types.Add(new OpenApiType(){
                Name = "secondary_button_color",
                Property = "SecondaryButtonColor",
                Type = "string",
                Value = SecondaryButtonColor,
            });
            types.Add(new OpenApiType(){
                Name = "secondary_button_color_hover",
                Property = "SecondaryButtonColorHover",
                Type = "string",
                Value = SecondaryButtonColorHover,
            });
            types.Add(new OpenApiType(){
                Name = "secondary_button_text_color",
                Property = "SecondaryButtonTextColor",
                Type = "string",
                Value = SecondaryButtonTextColor,
            });
            types.Add(new OpenApiType(){
                Name = "secondary_button_text_color_hover",
                Property = "SecondaryButtonTextColorHover",
                Type = "string",
                Value = SecondaryButtonTextColorHover,
            });
            types.Add(new OpenApiType(){
                Name = "text_color1",
                Property = "TextColor1",
                Type = "string",
                Value = TextColor1,
            });
            types.Add(new OpenApiType(){
                Name = "text_color2",
                Property = "TextColor2",
                Type = "string",
                Value = TextColor2,
            });

            return types;
        }

        /// <summary>
        /// To validate all properties of the instance
        /// </summary>
        /// <param name="validationContext">Validation context</param>
        /// <returns>Validation Result</returns>
        public IEnumerable<System.ComponentModel.DataAnnotations.ValidationResult> Validate(ValidationContext validationContext)
        {
            yield break;
        }
    }

}
