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
    /// SubBulkSignerListCustomField
    /// </summary>
    [DataContract(Name = "SubBulkSignerListCustomField")]
    [JsonObject(ItemNullValueHandling = NullValueHandling.Ignore)]
    public partial class SubBulkSignerListCustomField : IOpenApiTyped, IEquatable<SubBulkSignerListCustomField>, IValidatableObject
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="SubBulkSignerListCustomField" /> class.
        /// </summary>
        [JsonConstructorAttribute]
        protected SubBulkSignerListCustomField() { }
        /// <summary>
        /// Initializes a new instance of the <see cref="SubBulkSignerListCustomField" /> class.
        /// </summary>
        /// <param name="name">The name of the custom field. Must be the field&#39;s &#x60;name&#x60; or &#x60;api_id&#x60;. (required).</param>
        /// <param name="value">The value of the custom field. (required).</param>
        public SubBulkSignerListCustomField(string name = default(string), string value = default(string))
        {
            
            // to ensure "name" is required (not null)
            if (name == null)
            {
                throw new ArgumentNullException("name is a required property for SubBulkSignerListCustomField and cannot be null");
            }
            this.Name = name;
            // to ensure "value" is required (not null)
            if (value == null)
            {
                throw new ArgumentNullException("value is a required property for SubBulkSignerListCustomField and cannot be null");
            }
            this.Value = value;
        }

        /// <summary>
        /// Attempt to instantiate and hydrate a new instance of this class
        /// </summary>
        /// <param name="jsonData">String of JSON data representing target object</param>
        public static SubBulkSignerListCustomField Init(string jsonData)
        {
            var obj = JsonConvert.DeserializeObject<SubBulkSignerListCustomField>(jsonData);

            if (obj == null)
            {
                throw new Exception("Unable to deserialize JSON to instance of SubBulkSignerListCustomField");
            }

            return obj;
        }

        /// <summary>
        /// The name of the custom field. Must be the field&#39;s &#x60;name&#x60; or &#x60;api_id&#x60;.
        /// </summary>
        /// <value>The name of the custom field. Must be the field&#39;s &#x60;name&#x60; or &#x60;api_id&#x60;.</value>
        [DataMember(Name = "name", IsRequired = true, EmitDefaultValue = true)]
        public string Name { get; set; }

        /// <summary>
        /// The value of the custom field.
        /// </summary>
        /// <value>The value of the custom field.</value>
        [DataMember(Name = "value", IsRequired = true, EmitDefaultValue = true)]
        public string Value { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("class SubBulkSignerListCustomField {\n");
            sb.Append("  Name: ").Append(Name).Append("\n");
            sb.Append("  Value: ").Append(Value).Append("\n");
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
            return this.Equals(input as SubBulkSignerListCustomField);
        }

        /// <summary>
        /// Returns true if SubBulkSignerListCustomField instances are equal
        /// </summary>
        /// <param name="input">Instance of SubBulkSignerListCustomField to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(SubBulkSignerListCustomField input)
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
                    this.Value == input.Value ||
                    (this.Value != null &&
                    this.Value.Equals(input.Value))
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
                if (this.Value != null)
                {
                    hashCode = (hashCode * 59) + this.Value.GetHashCode();
                }
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
                Name = "value",
                Property = "Value",
                Type = "string",
                Value = Value,
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