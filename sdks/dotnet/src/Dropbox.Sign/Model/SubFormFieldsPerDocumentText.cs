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
using JsonSubTypes;
using System.ComponentModel.DataAnnotations;
using OpenAPIDateConverter = Dropbox.Sign.Client.OpenAPIDateConverter;

namespace Dropbox.Sign.Model
{
    /// <summary>
    /// This class extends &#x60;SubFormFieldsPerDocumentBase&#x60;.
    /// </summary>
    [DataContract(Name = "SubFormFieldsPerDocumentText")]
    [JsonConverter(typeof(JsonSubtypes), "Type")]
    [JsonSubtypes.KnownSubType(typeof(SubFormFieldsPerDocumentCheckbox), "checkbox")]
    [JsonSubtypes.KnownSubType(typeof(SubFormFieldsPerDocumentCheckboxMerge), "checkbox-merge")]
    [JsonSubtypes.KnownSubType(typeof(SubFormFieldsPerDocumentDateSigned), "date_signed")]
    [JsonSubtypes.KnownSubType(typeof(SubFormFieldsPerDocumentDropdown), "dropdown")]
    [JsonSubtypes.KnownSubType(typeof(SubFormFieldsPerDocumentHyperlink), "hyperlink")]
    [JsonSubtypes.KnownSubType(typeof(SubFormFieldsPerDocumentInitials), "initials")]
    [JsonSubtypes.KnownSubType(typeof(SubFormFieldsPerDocumentRadio), "radio")]
    [JsonSubtypes.KnownSubType(typeof(SubFormFieldsPerDocumentSignature), "signature")]
    [JsonSubtypes.KnownSubType(typeof(SubFormFieldsPerDocumentText), "text")]
    [JsonSubtypes.KnownSubType(typeof(SubFormFieldsPerDocumentTextMerge), "text-merge")]
    [JsonObject(ItemNullValueHandling = NullValueHandling.Ignore)]
    public partial class SubFormFieldsPerDocumentText : SubFormFieldsPerDocumentBase, IOpenApiTyped, IEquatable<SubFormFieldsPerDocumentText>, IValidatableObject
    {
        /// <summary>
        /// Each text field may contain a &#x60;validation_type&#x60; parameter. Check out the list of [validation types](https://faq.hellosign.com/hc/en-us/articles/217115577) to learn more about the possible values.  **NOTE**: When using &#x60;custom_regex&#x60; you are required to pass a second parameter &#x60;validation_custom_regex&#x60; and you can optionally provide &#x60;validation_custom_regex_format_label&#x60; for the error message the user will see in case of an invalid value.
        /// </summary>
        /// <value>Each text field may contain a &#x60;validation_type&#x60; parameter. Check out the list of [validation types](https://faq.hellosign.com/hc/en-us/articles/217115577) to learn more about the possible values.  **NOTE**: When using &#x60;custom_regex&#x60; you are required to pass a second parameter &#x60;validation_custom_regex&#x60; and you can optionally provide &#x60;validation_custom_regex_format_label&#x60; for the error message the user will see in case of an invalid value.</value>
        [JsonConverter(typeof(StringEnumConverter))]
        public enum ValidationTypeEnum
        {
            /// <summary>
            /// Enum NumbersOnly for value: numbers_only
            /// </summary>
            [EnumMember(Value = "numbers_only")]
            NumbersOnly = 1,

            /// <summary>
            /// Enum LettersOnly for value: letters_only
            /// </summary>
            [EnumMember(Value = "letters_only")]
            LettersOnly = 2,

            /// <summary>
            /// Enum PhoneNumber for value: phone_number
            /// </summary>
            [EnumMember(Value = "phone_number")]
            PhoneNumber = 3,

            /// <summary>
            /// Enum BankRoutingNumber for value: bank_routing_number
            /// </summary>
            [EnumMember(Value = "bank_routing_number")]
            BankRoutingNumber = 4,

            /// <summary>
            /// Enum BankAccountNumber for value: bank_account_number
            /// </summary>
            [EnumMember(Value = "bank_account_number")]
            BankAccountNumber = 5,

            /// <summary>
            /// Enum EmailAddress for value: email_address
            /// </summary>
            [EnumMember(Value = "email_address")]
            EmailAddress = 6,

            /// <summary>
            /// Enum ZipCode for value: zip_code
            /// </summary>
            [EnumMember(Value = "zip_code")]
            ZipCode = 7,

            /// <summary>
            /// Enum SocialSecurityNumber for value: social_security_number
            /// </summary>
            [EnumMember(Value = "social_security_number")]
            SocialSecurityNumber = 8,

            /// <summary>
            /// Enum EmployerIdentificationNumber for value: employer_identification_number
            /// </summary>
            [EnumMember(Value = "employer_identification_number")]
            EmployerIdentificationNumber = 9,

            /// <summary>
            /// Enum CustomRegex for value: custom_regex
            /// </summary>
            [EnumMember(Value = "custom_regex")]
            CustomRegex = 10

        }


        /// <summary>
        /// Each text field may contain a &#x60;validation_type&#x60; parameter. Check out the list of [validation types](https://faq.hellosign.com/hc/en-us/articles/217115577) to learn more about the possible values.  **NOTE**: When using &#x60;custom_regex&#x60; you are required to pass a second parameter &#x60;validation_custom_regex&#x60; and you can optionally provide &#x60;validation_custom_regex_format_label&#x60; for the error message the user will see in case of an invalid value.
        /// </summary>
        /// <value>Each text field may contain a &#x60;validation_type&#x60; parameter. Check out the list of [validation types](https://faq.hellosign.com/hc/en-us/articles/217115577) to learn more about the possible values.  **NOTE**: When using &#x60;custom_regex&#x60; you are required to pass a second parameter &#x60;validation_custom_regex&#x60; and you can optionally provide &#x60;validation_custom_regex_format_label&#x60; for the error message the user will see in case of an invalid value.</value>
        [DataMember(Name = "validation_type", EmitDefaultValue = true)]
        public ValidationTypeEnum? ValidationType { get; set; }
        /// <summary>
        /// Font family for the field.
        /// </summary>
        /// <value>Font family for the field.</value>
        [JsonConverter(typeof(StringEnumConverter))]
        public enum FontFamilyEnum
        {
            /// <summary>
            /// Enum Helvetica for value: helvetica
            /// </summary>
            [EnumMember(Value = "helvetica")]
            Helvetica = 1,

            /// <summary>
            /// Enum Arial for value: arial
            /// </summary>
            [EnumMember(Value = "arial")]
            Arial = 2,

            /// <summary>
            /// Enum Courier for value: courier
            /// </summary>
            [EnumMember(Value = "courier")]
            Courier = 3,

            /// <summary>
            /// Enum Calibri for value: calibri
            /// </summary>
            [EnumMember(Value = "calibri")]
            Calibri = 4,

            /// <summary>
            /// Enum Cambria for value: cambria
            /// </summary>
            [EnumMember(Value = "cambria")]
            Cambria = 5,

            /// <summary>
            /// Enum Georgia for value: georgia
            /// </summary>
            [EnumMember(Value = "georgia")]
            Georgia = 6,

            /// <summary>
            /// Enum Times for value: times
            /// </summary>
            [EnumMember(Value = "times")]
            Times = 7,

            /// <summary>
            /// Enum Trebuchet for value: trebuchet
            /// </summary>
            [EnumMember(Value = "trebuchet")]
            Trebuchet = 8,

            /// <summary>
            /// Enum Verdana for value: verdana
            /// </summary>
            [EnumMember(Value = "verdana")]
            Verdana = 9,

            /// <summary>
            /// Enum Roboto for value: roboto
            /// </summary>
            [EnumMember(Value = "roboto")]
            Roboto = 10,

            /// <summary>
            /// Enum RobotoMono for value: robotoMono
            /// </summary>
            [EnumMember(Value = "robotoMono")]
            RobotoMono = 11,

            /// <summary>
            /// Enum NotoSans for value: notoSans
            /// </summary>
            [EnumMember(Value = "notoSans")]
            NotoSans = 12,

            /// <summary>
            /// Enum NotoSerif for value: notoSerif
            /// </summary>
            [EnumMember(Value = "notoSerif")]
            NotoSerif = 13,

            /// <summary>
            /// Enum NotoCJKJPRegular for value: notoCJK-JP-Regular
            /// </summary>
            [EnumMember(Value = "notoCJK-JP-Regular")]
            NotoCJKJPRegular = 14,

            /// <summary>
            /// Enum NotoHebrewRegular for value: notoHebrew-Regular
            /// </summary>
            [EnumMember(Value = "notoHebrew-Regular")]
            NotoHebrewRegular = 15,

            /// <summary>
            /// Enum NotoSanThaiMerged for value: notoSanThaiMerged
            /// </summary>
            [EnumMember(Value = "notoSanThaiMerged")]
            NotoSanThaiMerged = 16

        }


        /// <summary>
        /// Font family for the field.
        /// </summary>
        /// <value>Font family for the field.</value>
        [DataMember(Name = "font_family", EmitDefaultValue = true)]
        public FontFamilyEnum? FontFamily { get; set; }
        /// <summary>
        /// Initializes a new instance of the <see cref="SubFormFieldsPerDocumentText" /> class.
        /// </summary>
        [JsonConstructorAttribute]
        protected SubFormFieldsPerDocumentText() { }
        /// <summary>
        /// Initializes a new instance of the <see cref="SubFormFieldsPerDocumentText" /> class.
        /// </summary>
        /// <param name="type">A text input field. Use the &#x60;SubFormFieldsPerDocumentText&#x60; class. (required) (default to &quot;text&quot;).</param>
        /// <param name="placeholder">Placeholder value for text field..</param>
        /// <param name="autoFillType">Auto fill type for populating fields automatically. Check out the list of [auto fill types](/api/reference/constants/#auto-fill-types) to learn more about the possible values..</param>
        /// <param name="linkId">Link two or more text fields. Enter data into one linked text field, which automatically fill all other linked text fields..</param>
        /// <param name="masked">Masks entered data. For more information see [Masking sensitive information](https://faq.hellosign.com/hc/en-us/articles/360040742811-Masking-sensitive-information). &#x60;true&#x60; for masking the data in a text field, otherwise &#x60;false&#x60;..</param>
        /// <param name="validationType">Each text field may contain a &#x60;validation_type&#x60; parameter. Check out the list of [validation types](https://faq.hellosign.com/hc/en-us/articles/217115577) to learn more about the possible values.  **NOTE**: When using &#x60;custom_regex&#x60; you are required to pass a second parameter &#x60;validation_custom_regex&#x60; and you can optionally provide &#x60;validation_custom_regex_format_label&#x60; for the error message the user will see in case of an invalid value..</param>
        /// <param name="validationCustomRegex">validationCustomRegex.</param>
        /// <param name="validationCustomRegexFormatLabel">validationCustomRegexFormatLabel.</param>
        /// <param name="content">Content of a &#x60;me_now&#x60; text field.</param>
        /// <param name="fontFamily">Font family for the field..</param>
        /// <param name="fontSize">The initial px font size for the field contents. Can be any integer value between &#x60;7&#x60; and &#x60;49&#x60;.  **NOTE**: Font size may be reduced during processing in order to fit the contents within the dimensions of the field..</param>
        /// <param name="documentIndex">Represents the integer index of the &#x60;file&#x60; or &#x60;file_url&#x60; document the field should be attached to. (required).</param>
        /// <param name="apiId">An identifier for the field that is unique across all documents in the request. (required).</param>
        /// <param name="height">Size of the field in pixels. (required).</param>
        /// <param name="name">Display name for the field..</param>
        /// <param name="page">Page in the document where the field should be placed (requires documents be PDF files).  - When the page number parameter is supplied, the API will use the new coordinate system. - Check out the differences between both [coordinate systems](https://faq.hellosign.com/hc/en-us/articles/217115577) and how to use them..</param>
        /// <param name="required">Whether this field is required. (required).</param>
        /// <param name="signer">Signer index identified by the offset in the signers parameter (0-based indexing), indicating which signer should fill out the field.  **NOTE**: To set the value of the field as the preparer you must set this to &#x60;me_now&#x60;  **NOTE**: If type is &#x60;text-merge&#x60; or &#x60;checkbox-merge&#x60;, you must set this to sender in order to use pre-filled data. (required).</param>
        /// <param name="width">Size of the field in pixels. (required).</param>
        /// <param name="x">Location coordinates of the field in pixels. (required).</param>
        /// <param name="y">Location coordinates of the field in pixels. (required).</param>
        public SubFormFieldsPerDocumentText(string type = "text", string placeholder = default(string), string autoFillType = default(string), string linkId = default(string), bool masked = default(bool), ValidationTypeEnum? validationType = default(ValidationTypeEnum?), string validationCustomRegex = default(string), string validationCustomRegexFormatLabel = default(string), string content = default(string), FontFamilyEnum? fontFamily = default(FontFamilyEnum?), int fontSize = default(int), int documentIndex = default(int), string apiId = default(string), int height = default(int), string name = default(string), int? page = default(int?), bool required = default(bool), Object signer = null, int width = default(int), int x = default(int), int y = default(int))
        {
            this.DocumentIndex = documentIndex;
            this.ApiId = apiId;
            this.Height = height;
            this.Required = required;
            this.Signer = Convert.ToString(signer);
            this.Width = width;
            this.X = x;
            this.Y = y;
            this.Name = name;
            this.Page = page;
            
            // to ensure "type" is required (not null)
            if (type == null)
            {
                throw new ArgumentNullException("type is a required property for SubFormFieldsPerDocumentText and cannot be null");
            }
            this.Type = type;
            this.Placeholder = placeholder;
            this.AutoFillType = autoFillType;
            this.LinkId = linkId;
            this.Masked = masked;
            this.ValidationType = validationType;
            this.ValidationCustomRegex = validationCustomRegex;
            this.ValidationCustomRegexFormatLabel = validationCustomRegexFormatLabel;
            this.Content = content;
            this.FontFamily = fontFamily;
            this.FontSize = fontSize;
        }

        /// <summary>
        /// Attempt to instantiate and hydrate a new instance of this class
        /// </summary>
        /// <param name="jsonData">String of JSON data representing target object</param>
        public static SubFormFieldsPerDocumentText Init(string jsonData)
        {
            var obj = JsonConvert.DeserializeObject<SubFormFieldsPerDocumentText>(jsonData);

            if (obj == null)
            {
                throw new Exception("Unable to deserialize JSON to instance of SubFormFieldsPerDocumentText");
            }

            return obj;
        }

        /// <summary>
        /// A text input field. Use the &#x60;SubFormFieldsPerDocumentText&#x60; class.
        /// </summary>
        /// <value>A text input field. Use the &#x60;SubFormFieldsPerDocumentText&#x60; class.</value>
        [DataMember(Name = "type", IsRequired = true, EmitDefaultValue = true)]
        public string Type { get; set; }

        /// <summary>
        /// Placeholder value for text field.
        /// </summary>
        /// <value>Placeholder value for text field.</value>
        [DataMember(Name = "placeholder", EmitDefaultValue = true)]
        public string Placeholder { get; set; }

        /// <summary>
        /// Auto fill type for populating fields automatically. Check out the list of [auto fill types](/api/reference/constants/#auto-fill-types) to learn more about the possible values.
        /// </summary>
        /// <value>Auto fill type for populating fields automatically. Check out the list of [auto fill types](/api/reference/constants/#auto-fill-types) to learn more about the possible values.</value>
        [DataMember(Name = "auto_fill_type", EmitDefaultValue = true)]
        public string AutoFillType { get; set; }

        /// <summary>
        /// Link two or more text fields. Enter data into one linked text field, which automatically fill all other linked text fields.
        /// </summary>
        /// <value>Link two or more text fields. Enter data into one linked text field, which automatically fill all other linked text fields.</value>
        [DataMember(Name = "link_id", EmitDefaultValue = true)]
        public string LinkId { get; set; }

        /// <summary>
        /// Masks entered data. For more information see [Masking sensitive information](https://faq.hellosign.com/hc/en-us/articles/360040742811-Masking-sensitive-information). &#x60;true&#x60; for masking the data in a text field, otherwise &#x60;false&#x60;.
        /// </summary>
        /// <value>Masks entered data. For more information see [Masking sensitive information](https://faq.hellosign.com/hc/en-us/articles/360040742811-Masking-sensitive-information). &#x60;true&#x60; for masking the data in a text field, otherwise &#x60;false&#x60;.</value>
        [DataMember(Name = "masked", EmitDefaultValue = true)]
        public bool Masked { get; set; }

        /// <summary>
        /// Gets or Sets ValidationCustomRegex
        /// </summary>
        [DataMember(Name = "validation_custom_regex", EmitDefaultValue = true)]
        public string ValidationCustomRegex { get; set; }

        /// <summary>
        /// Gets or Sets ValidationCustomRegexFormatLabel
        /// </summary>
        [DataMember(Name = "validation_custom_regex_format_label", EmitDefaultValue = true)]
        public string ValidationCustomRegexFormatLabel { get; set; }

        /// <summary>
        /// Content of a &#x60;me_now&#x60; text field
        /// </summary>
        /// <value>Content of a &#x60;me_now&#x60; text field</value>
        [DataMember(Name = "content", EmitDefaultValue = true)]
        public string Content { get; set; }

        /// <summary>
        /// The initial px font size for the field contents. Can be any integer value between &#x60;7&#x60; and &#x60;49&#x60;.  **NOTE**: Font size may be reduced during processing in order to fit the contents within the dimensions of the field.
        /// </summary>
        /// <value>The initial px font size for the field contents. Can be any integer value between &#x60;7&#x60; and &#x60;49&#x60;.  **NOTE**: Font size may be reduced during processing in order to fit the contents within the dimensions of the field.</value>
        [DataMember(Name = "font_size", EmitDefaultValue = true)]
        public int FontSize { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("class SubFormFieldsPerDocumentText {\n");
            sb.Append("  ").Append(base.ToString().Replace("\n", "\n  ")).Append("\n");
            sb.Append("  Type: ").Append(Type).Append("\n");
            sb.Append("  Placeholder: ").Append(Placeholder).Append("\n");
            sb.Append("  AutoFillType: ").Append(AutoFillType).Append("\n");
            sb.Append("  LinkId: ").Append(LinkId).Append("\n");
            sb.Append("  Masked: ").Append(Masked).Append("\n");
            sb.Append("  ValidationType: ").Append(ValidationType).Append("\n");
            sb.Append("  ValidationCustomRegex: ").Append(ValidationCustomRegex).Append("\n");
            sb.Append("  ValidationCustomRegexFormatLabel: ").Append(ValidationCustomRegexFormatLabel).Append("\n");
            sb.Append("  Content: ").Append(Content).Append("\n");
            sb.Append("  FontFamily: ").Append(FontFamily).Append("\n");
            sb.Append("  FontSize: ").Append(FontSize).Append("\n");
            sb.Append("}\n");
            return sb.ToString();
        }

        /// <summary>
        /// Returns the JSON string presentation of the object
        /// </summary>
        /// <returns>JSON string presentation of the object</returns>
        public override string ToJson()
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
            return this.Equals(input as SubFormFieldsPerDocumentText);
        }

        /// <summary>
        /// Returns true if SubFormFieldsPerDocumentText instances are equal
        /// </summary>
        /// <param name="input">Instance of SubFormFieldsPerDocumentText to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(SubFormFieldsPerDocumentText input)
        {
            if (input == null)
            {
                return false;
            }
            return base.Equals(input) && 
                (
                    this.Type == input.Type ||
                    (this.Type != null &&
                    this.Type.Equals(input.Type))
                ) && base.Equals(input) && 
                (
                    this.Placeholder == input.Placeholder ||
                    (this.Placeholder != null &&
                    this.Placeholder.Equals(input.Placeholder))
                ) && base.Equals(input) && 
                (
                    this.AutoFillType == input.AutoFillType ||
                    (this.AutoFillType != null &&
                    this.AutoFillType.Equals(input.AutoFillType))
                ) && base.Equals(input) && 
                (
                    this.LinkId == input.LinkId ||
                    (this.LinkId != null &&
                    this.LinkId.Equals(input.LinkId))
                ) && base.Equals(input) && 
                (
                    this.Masked == input.Masked ||
                    this.Masked.Equals(input.Masked)
                ) && base.Equals(input) && 
                (
                    this.ValidationType == input.ValidationType ||
                    this.ValidationType.Equals(input.ValidationType)
                ) && base.Equals(input) && 
                (
                    this.ValidationCustomRegex == input.ValidationCustomRegex ||
                    (this.ValidationCustomRegex != null &&
                    this.ValidationCustomRegex.Equals(input.ValidationCustomRegex))
                ) && base.Equals(input) && 
                (
                    this.ValidationCustomRegexFormatLabel == input.ValidationCustomRegexFormatLabel ||
                    (this.ValidationCustomRegexFormatLabel != null &&
                    this.ValidationCustomRegexFormatLabel.Equals(input.ValidationCustomRegexFormatLabel))
                ) && base.Equals(input) && 
                (
                    this.Content == input.Content ||
                    (this.Content != null &&
                    this.Content.Equals(input.Content))
                ) && base.Equals(input) && 
                (
                    this.FontFamily == input.FontFamily ||
                    this.FontFamily.Equals(input.FontFamily)
                ) && base.Equals(input) && 
                (
                    this.FontSize == input.FontSize ||
                    this.FontSize.Equals(input.FontSize)
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
                int hashCode = base.GetHashCode();
                if (this.Type != null)
                {
                    hashCode = (hashCode * 59) + this.Type.GetHashCode();
                }
                if (this.Placeholder != null)
                {
                    hashCode = (hashCode * 59) + this.Placeholder.GetHashCode();
                }
                if (this.AutoFillType != null)
                {
                    hashCode = (hashCode * 59) + this.AutoFillType.GetHashCode();
                }
                if (this.LinkId != null)
                {
                    hashCode = (hashCode * 59) + this.LinkId.GetHashCode();
                }
                hashCode = (hashCode * 59) + this.Masked.GetHashCode();
                hashCode = (hashCode * 59) + this.ValidationType.GetHashCode();
                if (this.ValidationCustomRegex != null)
                {
                    hashCode = (hashCode * 59) + this.ValidationCustomRegex.GetHashCode();
                }
                if (this.ValidationCustomRegexFormatLabel != null)
                {
                    hashCode = (hashCode * 59) + this.ValidationCustomRegexFormatLabel.GetHashCode();
                }
                if (this.Content != null)
                {
                    hashCode = (hashCode * 59) + this.Content.GetHashCode();
                }
                hashCode = (hashCode * 59) + this.FontFamily.GetHashCode();
                hashCode = (hashCode * 59) + this.FontSize.GetHashCode();
                return hashCode;
            }
        }

        public List<OpenApiType> GetOpenApiTypes()
        {
            var types = new List<OpenApiType>();
            types.Add(new OpenApiType(){
                Name = "type",
                Property = "Type",
                Type = "string",
                Value = Type,
            });
            types.Add(new OpenApiType(){
                Name = "placeholder",
                Property = "Placeholder",
                Type = "string",
                Value = Placeholder,
            });
            types.Add(new OpenApiType(){
                Name = "auto_fill_type",
                Property = "AutoFillType",
                Type = "string",
                Value = AutoFillType,
            });
            types.Add(new OpenApiType(){
                Name = "link_id",
                Property = "LinkId",
                Type = "string",
                Value = LinkId,
            });
            types.Add(new OpenApiType(){
                Name = "masked",
                Property = "Masked",
                Type = "bool",
                Value = Masked,
            });
            types.Add(new OpenApiType(){
                Name = "validation_type",
                Property = "ValidationType",
                Type = "string",
                Value = ValidationType,
            });
            types.Add(new OpenApiType(){
                Name = "validation_custom_regex",
                Property = "ValidationCustomRegex",
                Type = "string",
                Value = ValidationCustomRegex,
            });
            types.Add(new OpenApiType(){
                Name = "validation_custom_regex_format_label",
                Property = "ValidationCustomRegexFormatLabel",
                Type = "string",
                Value = ValidationCustomRegexFormatLabel,
            });
            types.Add(new OpenApiType(){
                Name = "content",
                Property = "Content",
                Type = "string",
                Value = Content,
            });
            types.Add(new OpenApiType(){
                Name = "font_family",
                Property = "FontFamily",
                Type = "string",
                Value = FontFamily,
            });
            types.Add(new OpenApiType(){
                Name = "font_size",
                Property = "FontSize",
                Type = "int",
                Value = FontSize,
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
            return this.BaseValidate(validationContext);
        }

        /// <summary>
        /// To validate all properties of the instance
        /// </summary>
        /// <param name="validationContext">Validation context</param>
        /// <returns>Validation Result</returns>
        protected IEnumerable<System.ComponentModel.DataAnnotations.ValidationResult> BaseValidate(ValidationContext validationContext)
        {
            foreach (var x in BaseValidate(validationContext))
            {
                yield return x;
            }
            yield break;
        }
    }

}
