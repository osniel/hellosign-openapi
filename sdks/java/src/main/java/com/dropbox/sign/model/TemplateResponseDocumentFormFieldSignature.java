/*
 * Dropbox Sign API
 * Dropbox Sign v3 API
 *
 * The version of the OpenAPI document: 3.0.0
 * Contact: apisupport@hellosign.com
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


package com.dropbox.sign.model;

import java.util.Objects;
import java.util.Arrays;
import java.util.Map;
import java.util.HashMap;
import com.dropbox.sign.model.TemplateResponseDocumentFormFieldBase;
import com.dropbox.sign.model.TemplateResponseDocumentFormFieldCheckbox;
import com.dropbox.sign.model.TemplateResponseDocumentFormFieldDateSigned;
import com.dropbox.sign.model.TemplateResponseDocumentFormFieldDropdown;
import com.dropbox.sign.model.TemplateResponseDocumentFormFieldHyperlink;
import com.dropbox.sign.model.TemplateResponseDocumentFormFieldInitials;
import com.dropbox.sign.model.TemplateResponseDocumentFormFieldRadio;
import com.dropbox.sign.model.TemplateResponseDocumentFormFieldSignature;
import com.dropbox.sign.model.TemplateResponseDocumentFormFieldText;
import com.fasterxml.jackson.annotation.JsonInclude;
import com.fasterxml.jackson.annotation.JsonProperty;
import com.fasterxml.jackson.annotation.JsonCreator;
import com.fasterxml.jackson.annotation.JsonSubTypes;
import com.fasterxml.jackson.annotation.JsonTypeInfo;
import com.fasterxml.jackson.annotation.JsonTypeName;
import com.fasterxml.jackson.annotation.JsonValue;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;
import com.fasterxml.jackson.annotation.JsonPropertyOrder;
import com.fasterxml.jackson.annotation.JsonIgnoreProperties;
import com.fasterxml.jackson.databind.ObjectMapper;
import com.dropbox.sign.JSON;


import com.dropbox.sign.ApiException;
/**
 * This class extends &#x60;TemplateResponseDocumentFormFieldBase&#x60;
 */
@ApiModel(description = "This class extends `TemplateResponseDocumentFormFieldBase`")
@JsonPropertyOrder({
    TemplateResponseDocumentFormFieldSignature.JSON_PROPERTY_TYPE
})
@JsonIgnoreProperties(ignoreUnknown=true)
@javax.annotation.Generated(value = "org.openapitools.codegen.languages.JavaClientCodegen")
@JsonTypeInfo(use = JsonTypeInfo.Id.NAME, include = JsonTypeInfo.As.EXISTING_PROPERTY, property = "type", visible = true)
@JsonSubTypes({
  @JsonSubTypes.Type(value = TemplateResponseDocumentFormFieldCheckbox.class, name = "checkbox"),
  @JsonSubTypes.Type(value = TemplateResponseDocumentFormFieldDateSigned.class, name = "date_signed"),
  @JsonSubTypes.Type(value = TemplateResponseDocumentFormFieldDropdown.class, name = "dropdown"),
  @JsonSubTypes.Type(value = TemplateResponseDocumentFormFieldHyperlink.class, name = "hyperlink"),
  @JsonSubTypes.Type(value = TemplateResponseDocumentFormFieldInitials.class, name = "initials"),
  @JsonSubTypes.Type(value = TemplateResponseDocumentFormFieldRadio.class, name = "radio"),
  @JsonSubTypes.Type(value = TemplateResponseDocumentFormFieldSignature.class, name = "signature"),
  @JsonSubTypes.Type(value = TemplateResponseDocumentFormFieldText.class, name = "text"),
})

public class TemplateResponseDocumentFormFieldSignature extends TemplateResponseDocumentFormFieldBase {
  public static final String JSON_PROPERTY_TYPE = "type";
  private String type = "signature";

  public TemplateResponseDocumentFormFieldSignature() { 
  }

  /**
   * Attempt to instantiate and hydrate a new instance of this class
   * @param jsonData String of JSON data representing target object
   */
  static public TemplateResponseDocumentFormFieldSignature init(String jsonData) throws Exception {
    return new ObjectMapper().readValue(jsonData, TemplateResponseDocumentFormFieldSignature.class);
  }

  static public TemplateResponseDocumentFormFieldSignature init(HashMap data) throws Exception {
    return new ObjectMapper().readValue(
      new ObjectMapper().writeValueAsString(data),
      TemplateResponseDocumentFormFieldSignature.class
    );
  }

  public TemplateResponseDocumentFormFieldSignature type(String type) {
    this.type = type;
    return this;
  }

   /**
   * The type of this form field. See [field types](/api/reference/constants/#field-types).  * Text Field uses &#x60;TemplateResponseDocumentFormFieldText&#x60; * Dropdown Field uses &#x60;TemplateResponseDocumentFormFieldDropdown&#x60; * Hyperlink Field uses &#x60;TemplateResponseDocumentFormFieldHyperlink&#x60; * Checkbox Field uses &#x60;TemplateResponseDocumentFormFieldCheckbox&#x60; * Radio Field uses &#x60;TemplateResponseDocumentFormFieldRadio&#x60; * Signature Field uses &#x60;TemplateResponseDocumentFormFieldSignature&#x60; * Date Signed Field uses &#x60;TemplateResponseDocumentFormFieldDateSigned&#x60; * Initials Field uses &#x60;TemplateResponseDocumentFormFieldInitials&#x60;
   * @return type
  **/
  @javax.annotation.Nonnull
  @ApiModelProperty(required = true, value = "The type of this form field. See [field types](/api/reference/constants/#field-types).  * Text Field uses `TemplateResponseDocumentFormFieldText` * Dropdown Field uses `TemplateResponseDocumentFormFieldDropdown` * Hyperlink Field uses `TemplateResponseDocumentFormFieldHyperlink` * Checkbox Field uses `TemplateResponseDocumentFormFieldCheckbox` * Radio Field uses `TemplateResponseDocumentFormFieldRadio` * Signature Field uses `TemplateResponseDocumentFormFieldSignature` * Date Signed Field uses `TemplateResponseDocumentFormFieldDateSigned` * Initials Field uses `TemplateResponseDocumentFormFieldInitials`")
  @JsonProperty(JSON_PROPERTY_TYPE)
  @JsonInclude(value = JsonInclude.Include.ALWAYS)

  public String getType() {
    return type;
  }


  @JsonProperty(JSON_PROPERTY_TYPE)
  @JsonInclude(value = JsonInclude.Include.ALWAYS)
  public void setType(String type) {
    this.type = type;
  }


  /**
   * Return true if this TemplateResponseDocumentFormFieldSignature object is equal to o.
   */
  @Override
  public boolean equals(Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    TemplateResponseDocumentFormFieldSignature templateResponseDocumentFormFieldSignature = (TemplateResponseDocumentFormFieldSignature) o;
    return Objects.equals(this.type, templateResponseDocumentFormFieldSignature.type) &&
        super.equals(o);
  }

  @Override
  public int hashCode() {
    return Objects.hash(type, super.hashCode());
  }

  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class TemplateResponseDocumentFormFieldSignature {\n");
    sb.append("    ").append(toIndentedString(super.toString())).append("\n");
    sb.append("    type: ").append(toIndentedString(type)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  public Map<String, Object> createFormData() throws ApiException {
    Map<String, Object> map = new HashMap<>();
    boolean fileTypeFound = false;
     map.putAll(super.createFormData());
    try {
    if (type != null) {
        if (isFileTypeOrListOfFiles(type)) {
            fileTypeFound = true;
        }

        if (type.getClass().equals(java.io.File.class) ||
            type.getClass().equals(Integer.class) ||
            type.getClass().equals(String.class) ||
            type.getClass().isEnum()) {
            map.put("type", type);
        } else if (isListOfFile(type)) {
            for(int i = 0; i< getListSize(type); i++) {
                map.put("type[" + i + "]", getFromList(type, i));
            }
        }
        else {
            map.put("type", JSON.getDefault().getMapper().writeValueAsString(type));
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
  mappings.put("checkbox", TemplateResponseDocumentFormFieldCheckbox.class);
  mappings.put("date_signed", TemplateResponseDocumentFormFieldDateSigned.class);
  mappings.put("dropdown", TemplateResponseDocumentFormFieldDropdown.class);
  mappings.put("hyperlink", TemplateResponseDocumentFormFieldHyperlink.class);
  mappings.put("initials", TemplateResponseDocumentFormFieldInitials.class);
  mappings.put("radio", TemplateResponseDocumentFormFieldRadio.class);
  mappings.put("signature", TemplateResponseDocumentFormFieldSignature.class);
  mappings.put("text", TemplateResponseDocumentFormFieldText.class);
  mappings.put("TemplateResponseDocumentFormFieldSignature", TemplateResponseDocumentFormFieldSignature.class);
  JSON.registerDiscriminator(TemplateResponseDocumentFormFieldSignature.class, "type", mappings);
}
}

