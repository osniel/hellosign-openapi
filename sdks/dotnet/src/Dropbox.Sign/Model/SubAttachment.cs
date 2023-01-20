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
using OpenAPIDateConverter = Dropbox.Sign.Client.OpenAPIDateConverter;

namespace Dropbox.Sign.Model
{
    /// <summary>
    /// SubAttachment
    /// </summary>
    [DataContract(Name = "SubAttachment")]
    [JsonObject(ItemNullValueHandling = NullValueHandling.Ignore)]
    public partial class SubAttachment : IOpenApiTyped, IEquatable<SubAttachment>, IValidatableObject
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="SubAttachment" /> class.
        /// </summary>
        [JsonConstructorAttribute]
        protected SubAttachment() { }
        /// <summary>
        /// Initializes a new instance of the <see cref="SubAttachment" /> class.
        /// </summary>
        /// <param name="instructions">The instructions for uploading the attachment..</param>
        /// <param name="name">The name of attachment. (required).</param>
        /// <param name="required">Determines if the attachment must be uploaded. (default to false).</param>
        /// <param name="signerIndex">The signer&#39;s index in the &#x60;signers&#x60; parameter (0-based indexing).  **NOTE**: Only one signer can be assigned per attachment. (required).</param>
        public SubAttachment(string instructions = default(string), string name = default(string), bool required = false, int signerIndex = default(int))
        {
            
            // to ensure "name" is required (not null)
            if (name == null)
            {
                throw new ArgumentNullException("name is a required property for SubAttachment and cannot be null");
            }
            this.Name = name;
            this.SignerIndex = signerIndex;
            this.Instructions = instructions;
            this.Required = required;
        }

        /// <summary>
        /// Attempt to instantiate and hydrate a new instance of this class
        /// </summary>
        /// <param name="jsonData">String of JSON data representing target object</param>
        public static SubAttachment Init(string jsonData)
        {
            var obj = JsonConvert.DeserializeObject<SubAttachment>(jsonData);

            if (obj == null)
            {
                throw new Exception("Unable to deserialize JSON to instance of SubAttachment");
            }

            return obj;
        }

        /// <summary>
        /// The name of attachment.
        /// </summary>
        /// <value>The name of attachment.</value>
        [DataMember(Name = "name", IsRequired = true, EmitDefaultValue = true)]
        public string Name { get; set; }

        /// <summary>
        /// The signer&#39;s index in the &#x60;signers&#x60; parameter (0-based indexing).  **NOTE**: Only one signer can be assigned per attachment.
        /// </summary>
        /// <value>The signer&#39;s index in the &#x60;signers&#x60; parameter (0-based indexing).  **NOTE**: Only one signer can be assigned per attachment.</value>
        [DataMember(Name = "signer_index", IsRequired = true, EmitDefaultValue = true)]
        public int SignerIndex { get; set; }

        /// <summary>
        /// The instructions for uploading the attachment.
        /// </summary>
        /// <value>The instructions for uploading the attachment.</value>
        [DataMember(Name = "instructions", EmitDefaultValue = true)]
        public string Instructions { get; set; }

        /// <summary>
        /// Determines if the attachment must be uploaded.
        /// </summary>
        /// <value>Determines if the attachment must be uploaded.</value>
        [DataMember(Name = "required", EmitDefaultValue = true)]
        public bool Required { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("class SubAttachment {\n");
            sb.Append("  Name: ").Append(Name).Append("\n");
            sb.Append("  SignerIndex: ").Append(SignerIndex).Append("\n");
            sb.Append("  Instructions: ").Append(Instructions).Append("\n");
            sb.Append("  Required: ").Append(Required).Append("\n");
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
            return this.Equals(input as SubAttachment);
        }

        /// <summary>
        /// Returns true if SubAttachment instances are equal
        /// </summary>
        /// <param name="input">Instance of SubAttachment to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(SubAttachment input)
        {
            if (input == null)
            {
                return false;
            }
            return 
                (
                    this.Name == input.Name ||
                    (this.Name != null &&
                    this.Name.Equals(input.Name))
                ) && 
                (
                    this.SignerIndex == input.SignerIndex ||
                    this.SignerIndex.Equals(input.SignerIndex)
                ) && 
                (
                    this.Instructions == input.Instructions ||
                    (this.Instructions != null &&
                    this.Instructions.Equals(input.Instructions))
                ) && 
                (
                    this.Required == input.Required ||
                    this.Required.Equals(input.Required)
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
                if (this.Name != null)
                {
                    hashCode = (hashCode * 59) + this.Name.GetHashCode();
                }
                hashCode = (hashCode * 59) + this.SignerIndex.GetHashCode();
                if (this.Instructions != null)
                {
                    hashCode = (hashCode * 59) + this.Instructions.GetHashCode();
                }
                hashCode = (hashCode * 59) + this.Required.GetHashCode();
                return hashCode;
            }
        }

        public List<OpenApiType> GetOpenApiTypes()
        {
            var types = new List<OpenApiType>();
            types.Add(new OpenApiType(){
                Name = "name",
                Property = "Name",
                Type = "string",
                Value = Name,
            });
            types.Add(new OpenApiType(){
                Name = "signer_index",
                Property = "SignerIndex",
                Type = "int",
                Value = SignerIndex,
            });
            types.Add(new OpenApiType(){
                Name = "instructions",
                Property = "Instructions",
                Type = "string",
                Value = Instructions,
            });
            types.Add(new OpenApiType(){
                Name = "required",
                Property = "Required",
                Type = "bool",
                Value = Required,
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