/*
 * HelloSign API
 * HelloSign v3 API
 *
 * The version of the OpenAPI document: 3.0.0
 * Contact: apisupport@hellosign.com
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


package com.hellosign.openapi.model;

import java.util.Objects;
import java.util.Arrays;
import java.util.Map;
import java.util.HashMap;
import com.fasterxml.jackson.annotation.JsonInclude;
import com.fasterxml.jackson.annotation.JsonProperty;
import com.fasterxml.jackson.annotation.JsonCreator;
import com.fasterxml.jackson.annotation.JsonSubTypes;
import com.fasterxml.jackson.annotation.JsonTypeInfo;
import com.fasterxml.jackson.annotation.JsonTypeName;
import com.fasterxml.jackson.annotation.JsonValue;
import com.hellosign.openapi.model.SignatureRequestResponseDataValueCheckbox;
import com.hellosign.openapi.model.SignatureRequestResponseDataValueCheckboxMerge;
import com.hellosign.openapi.model.SignatureRequestResponseDataValueDateSigned;
import com.hellosign.openapi.model.SignatureRequestResponseDataValueDropdown;
import com.hellosign.openapi.model.SignatureRequestResponseDataValueInitials;
import com.hellosign.openapi.model.SignatureRequestResponseDataValueRadio;
import com.hellosign.openapi.model.SignatureRequestResponseDataValueSignature;
import com.hellosign.openapi.model.SignatureRequestResponseDataValueText;
import com.hellosign.openapi.model.SignatureRequestResponseDataValueTextMerge;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;
import com.fasterxml.jackson.annotation.JsonPropertyOrder;
import com.hellosign.openapi.JSON;


import com.hellosign.openapi.ApiException;
/**
 * An array of form field objects containing the name, value, and type of each textbox or checkmark field filled in by the signers.
 */
@ApiModel(description = "An array of form field objects containing the name, value, and type of each textbox or checkmark field filled in by the signers.")
@JsonPropertyOrder({
    SignatureRequestResponseData.JSON_PROPERTY_API_ID,
    SignatureRequestResponseData.JSON_PROPERTY_SIGNATURE_ID,
    SignatureRequestResponseData.JSON_PROPERTY_NAME,
    SignatureRequestResponseData.JSON_PROPERTY_REQUIRED
})
@javax.annotation.Generated(value = "org.openapitools.codegen.languages.JavaClientCodegen")
@JsonTypeInfo(use = JsonTypeInfo.Id.NAME, include = JsonTypeInfo.As.EXISTING_PROPERTY, property = "type", visible = true)
@JsonSubTypes({
  @JsonSubTypes.Type(value = SignatureRequestResponseDataValueCheckbox.class, name = "SignatureRequestResponseDataValueCheckbox"),
  @JsonSubTypes.Type(value = SignatureRequestResponseDataValueCheckboxMerge.class, name = "SignatureRequestResponseDataValueCheckboxMerge"),
  @JsonSubTypes.Type(value = SignatureRequestResponseDataValueDateSigned.class, name = "SignatureRequestResponseDataValueDateSigned"),
  @JsonSubTypes.Type(value = SignatureRequestResponseDataValueDropdown.class, name = "SignatureRequestResponseDataValueDropdown"),
  @JsonSubTypes.Type(value = SignatureRequestResponseDataValueInitials.class, name = "SignatureRequestResponseDataValueInitials"),
  @JsonSubTypes.Type(value = SignatureRequestResponseDataValueRadio.class, name = "SignatureRequestResponseDataValueRadio"),
  @JsonSubTypes.Type(value = SignatureRequestResponseDataValueSignature.class, name = "SignatureRequestResponseDataValueSignature"),
  @JsonSubTypes.Type(value = SignatureRequestResponseDataValueText.class, name = "SignatureRequestResponseDataValueText"),
  @JsonSubTypes.Type(value = SignatureRequestResponseDataValueTextMerge.class, name = "SignatureRequestResponseDataValueTextMerge"),
  @JsonSubTypes.Type(value = SignatureRequestResponseDataValueCheckbox.class, name = "checkbox"),
  @JsonSubTypes.Type(value = SignatureRequestResponseDataValueCheckboxMerge.class, name = "checkbox-merge"),
  @JsonSubTypes.Type(value = SignatureRequestResponseDataValueDateSigned.class, name = "date_signed"),
  @JsonSubTypes.Type(value = SignatureRequestResponseDataValueDropdown.class, name = "dropdown"),
  @JsonSubTypes.Type(value = SignatureRequestResponseDataValueInitials.class, name = "initials"),
  @JsonSubTypes.Type(value = SignatureRequestResponseDataValueRadio.class, name = "radio"),
  @JsonSubTypes.Type(value = SignatureRequestResponseDataValueSignature.class, name = "signature"),
  @JsonSubTypes.Type(value = SignatureRequestResponseDataValueText.class, name = "text"),
  @JsonSubTypes.Type(value = SignatureRequestResponseDataValueTextMerge.class, name = "text-merge"),
})

public class SignatureRequestResponseData {
  public static final String JSON_PROPERTY_API_ID = "api_id";
  private String apiId;

  public static final String JSON_PROPERTY_SIGNATURE_ID = "signature_id";
  private String signatureId;

  public static final String JSON_PROPERTY_NAME = "name";
  private String name;

  public static final String JSON_PROPERTY_REQUIRED = "required";
  private Boolean required;

  public SignatureRequestResponseData() { 
  }

  public SignatureRequestResponseData apiId(String apiId) {
    this.apiId = apiId;
    return this;
  }

   /**
   * The unique ID for this field.
   * @return apiId
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "The unique ID for this field.")
  @JsonProperty(JSON_PROPERTY_API_ID)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)

  public String getApiId() {
    return apiId;
  }


  @JsonProperty(JSON_PROPERTY_API_ID)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)
  public void setApiId(String apiId) {
    this.apiId = apiId;
  }


  public SignatureRequestResponseData signatureId(String signatureId) {
    this.signatureId = signatureId;
    return this;
  }

   /**
   * The ID of the signature to which this response is linked.
   * @return signatureId
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "The ID of the signature to which this response is linked.")
  @JsonProperty(JSON_PROPERTY_SIGNATURE_ID)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)

  public String getSignatureId() {
    return signatureId;
  }


  @JsonProperty(JSON_PROPERTY_SIGNATURE_ID)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)
  public void setSignatureId(String signatureId) {
    this.signatureId = signatureId;
  }


  public SignatureRequestResponseData name(String name) {
    this.name = name;
    return this;
  }

   /**
   * The name of the form field.
   * @return name
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "The name of the form field.")
  @JsonProperty(JSON_PROPERTY_NAME)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)

  public String getName() {
    return name;
  }


  @JsonProperty(JSON_PROPERTY_NAME)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)
  public void setName(String name) {
    this.name = name;
  }


  public SignatureRequestResponseData required(Boolean required) {
    this.required = required;
    return this;
  }

   /**
   * A boolean value denoting if this field is required.
   * @return required
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "A boolean value denoting if this field is required.")
  @JsonProperty(JSON_PROPERTY_REQUIRED)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)

  public Boolean getRequired() {
    return required;
  }


  @JsonProperty(JSON_PROPERTY_REQUIRED)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)
  public void setRequired(Boolean required) {
    this.required = required;
  }


  /**
   * Return true if this SignatureRequestResponseData object is equal to o.
   */
  @Override
  public boolean equals(Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    SignatureRequestResponseData signatureRequestResponseData = (SignatureRequestResponseData) o;
    return Objects.equals(this.apiId, signatureRequestResponseData.apiId) &&
        Objects.equals(this.signatureId, signatureRequestResponseData.signatureId) &&
        Objects.equals(this.name, signatureRequestResponseData.name) &&
        Objects.equals(this.required, signatureRequestResponseData.required);
  }

  @Override
  public int hashCode() {
    return Objects.hash(apiId, signatureId, name, required);
  }

  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class SignatureRequestResponseData {\n");
    sb.append("    apiId: ").append(toIndentedString(apiId)).append("\n");
    sb.append("    signatureId: ").append(toIndentedString(signatureId)).append("\n");
    sb.append("    name: ").append(toIndentedString(name)).append("\n");
    sb.append("    required: ").append(toIndentedString(required)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  public Map<String, Object> createFormData() throws ApiException {
    Map<String, Object> map = new HashMap<>();
    boolean fileTypeFound = false;
    try {
    if (apiId != null) {
        if (isFileTypeOrListOfFiles(apiId)) {
            fileTypeFound = true;
        }

        if (apiId.getClass().equals(java.io.File.class) ||
            apiId.getClass().equals(Integer.class) ||
            apiId.getClass().equals(String.class) ) {
            map.put("api_id", apiId);
        } else if (isListOfFile(apiId)) {
            for(int i = 0; i< getListSize(apiId); i++) {
                map.put("api_id[" + i + "]", getFromList(apiId, i));
            }
        }
        else {
            map.put("api_id", JSON.getDefault().getMapper().writeValueAsString(apiId));
        }
    }
    if (signatureId != null) {
        if (isFileTypeOrListOfFiles(signatureId)) {
            fileTypeFound = true;
        }

        if (signatureId.getClass().equals(java.io.File.class) ||
            signatureId.getClass().equals(Integer.class) ||
            signatureId.getClass().equals(String.class) ) {
            map.put("signature_id", signatureId);
        } else if (isListOfFile(signatureId)) {
            for(int i = 0; i< getListSize(signatureId); i++) {
                map.put("signature_id[" + i + "]", getFromList(signatureId, i));
            }
        }
        else {
            map.put("signature_id", JSON.getDefault().getMapper().writeValueAsString(signatureId));
        }
    }
    if (name != null) {
        if (isFileTypeOrListOfFiles(name)) {
            fileTypeFound = true;
        }

        if (name.getClass().equals(java.io.File.class) ||
            name.getClass().equals(Integer.class) ||
            name.getClass().equals(String.class) ) {
            map.put("name", name);
        } else if (isListOfFile(name)) {
            for(int i = 0; i< getListSize(name); i++) {
                map.put("name[" + i + "]", getFromList(name, i));
            }
        }
        else {
            map.put("name", JSON.getDefault().getMapper().writeValueAsString(name));
        }
    }
    if (required != null) {
        if (isFileTypeOrListOfFiles(required)) {
            fileTypeFound = true;
        }

        if (required.getClass().equals(java.io.File.class) ||
            required.getClass().equals(Integer.class) ||
            required.getClass().equals(String.class) ) {
            map.put("required", required);
        } else if (isListOfFile(required)) {
            for(int i = 0; i< getListSize(required); i++) {
                map.put("required[" + i + "]", getFromList(required, i));
            }
        }
        else {
            map.put("required", JSON.getDefault().getMapper().writeValueAsString(required));
        }
    }
    } catch (Exception e) {
        throw new ApiException(e);
    }

    return fileTypeFound ? map : new HashMap<>();
  }

  private boolean isFileTypeOrListOfFiles(Object obj) throws Exception {
    return obj.getClass().equals(java.io.File.class) || isListOfFile(obj);
  }

  private boolean isListOfFile(Object obj) throws Exception {
      return obj instanceof java.util.List && !isListEmpty(obj) && getFromList(obj, 0) instanceof java.io.File;
  }

  private boolean isListEmpty(Object obj) throws Exception {
    return (boolean) Class.forName(java.util.List.class.getName()).getMethod("isEmpty").invoke(obj);
  }

  private Object getFromList(Object obj, int index) throws Exception {
    return Class.forName(java.util.List.class.getName()).getMethod("get", int.class).invoke(obj, index);
  }

  private int getListSize(Object obj) throws Exception {
    return (int) Class.forName(java.util.List.class.getName()).getMethod("size").invoke(obj);
  }

  /**
   * Convert the given object to string with each line indented by 4 spaces
   * (except the first line).
   */
  private String toIndentedString(Object o) {
    if (o == null) {
      return "null";
    }
    return o.toString().replace("\n", "\n    ");
  }

static {
  // Initialize and register the discriminator mappings.
  Map<String, Class<?>> mappings = new HashMap<String, Class<?>>();
  mappings.put("SignatureRequestResponseDataValueCheckbox", SignatureRequestResponseDataValueCheckbox.class);
  mappings.put("SignatureRequestResponseDataValueCheckboxMerge", SignatureRequestResponseDataValueCheckboxMerge.class);
  mappings.put("SignatureRequestResponseDataValueDateSigned", SignatureRequestResponseDataValueDateSigned.class);
  mappings.put("SignatureRequestResponseDataValueDropdown", SignatureRequestResponseDataValueDropdown.class);
  mappings.put("SignatureRequestResponseDataValueInitials", SignatureRequestResponseDataValueInitials.class);
  mappings.put("SignatureRequestResponseDataValueRadio", SignatureRequestResponseDataValueRadio.class);
  mappings.put("SignatureRequestResponseDataValueSignature", SignatureRequestResponseDataValueSignature.class);
  mappings.put("SignatureRequestResponseDataValueText", SignatureRequestResponseDataValueText.class);
  mappings.put("SignatureRequestResponseDataValueTextMerge", SignatureRequestResponseDataValueTextMerge.class);
  mappings.put("checkbox", SignatureRequestResponseDataValueCheckbox.class);
  mappings.put("checkbox-merge", SignatureRequestResponseDataValueCheckboxMerge.class);
  mappings.put("date_signed", SignatureRequestResponseDataValueDateSigned.class);
  mappings.put("dropdown", SignatureRequestResponseDataValueDropdown.class);
  mappings.put("initials", SignatureRequestResponseDataValueInitials.class);
  mappings.put("radio", SignatureRequestResponseDataValueRadio.class);
  mappings.put("signature", SignatureRequestResponseDataValueSignature.class);
  mappings.put("text", SignatureRequestResponseDataValueText.class);
  mappings.put("text-merge", SignatureRequestResponseDataValueTextMerge.class);
  mappings.put("SignatureRequestResponseData", SignatureRequestResponseData.class);
  JSON.registerDiscriminator(SignatureRequestResponseData.class, "type", mappings);
}
}

