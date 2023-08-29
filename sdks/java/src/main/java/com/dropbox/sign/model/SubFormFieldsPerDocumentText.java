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
import com.dropbox.sign.model.SubFormFieldsPerDocumentBase;
import com.dropbox.sign.model.SubFormFieldsPerDocumentCheckbox;
import com.dropbox.sign.model.SubFormFieldsPerDocumentCheckboxMerge;
import com.dropbox.sign.model.SubFormFieldsPerDocumentDateSigned;
import com.dropbox.sign.model.SubFormFieldsPerDocumentDropdown;
import com.dropbox.sign.model.SubFormFieldsPerDocumentHyperlink;
import com.dropbox.sign.model.SubFormFieldsPerDocumentInitials;
import com.dropbox.sign.model.SubFormFieldsPerDocumentRadio;
import com.dropbox.sign.model.SubFormFieldsPerDocumentSignature;
import com.dropbox.sign.model.SubFormFieldsPerDocumentText;
import com.dropbox.sign.model.SubFormFieldsPerDocumentTextMerge;
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
 * This class extends &#x60;SubFormFieldsPerDocumentBase&#x60;.
 */
@ApiModel(description = "This class extends `SubFormFieldsPerDocumentBase`.")
@JsonPropertyOrder({
    SubFormFieldsPerDocumentText.JSON_PROPERTY_TYPE,
    SubFormFieldsPerDocumentText.JSON_PROPERTY_PLACEHOLDER,
    SubFormFieldsPerDocumentText.JSON_PROPERTY_AUTO_FILL_TYPE,
    SubFormFieldsPerDocumentText.JSON_PROPERTY_LINK_ID,
    SubFormFieldsPerDocumentText.JSON_PROPERTY_MASKED,
    SubFormFieldsPerDocumentText.JSON_PROPERTY_VALIDATION_TYPE,
    SubFormFieldsPerDocumentText.JSON_PROPERTY_VALIDATION_CUSTOM_REGEX,
    SubFormFieldsPerDocumentText.JSON_PROPERTY_VALIDATION_CUSTOM_REGEX_FORMAT_LABEL,
    SubFormFieldsPerDocumentText.JSON_PROPERTY_CONTENT,
    SubFormFieldsPerDocumentText.JSON_PROPERTY_FONT_FAMILY,
    SubFormFieldsPerDocumentText.JSON_PROPERTY_FONT_SIZE
})
@JsonIgnoreProperties(ignoreUnknown=true)
@javax.annotation.Generated(value = "org.openapitools.codegen.languages.JavaClientCodegen")
@JsonTypeInfo(use = JsonTypeInfo.Id.NAME, include = JsonTypeInfo.As.EXISTING_PROPERTY, property = "type", visible = true)
@JsonSubTypes({
  @JsonSubTypes.Type(value = SubFormFieldsPerDocumentCheckbox.class, name = "checkbox"),
  @JsonSubTypes.Type(value = SubFormFieldsPerDocumentCheckboxMerge.class, name = "checkbox-merge"),
  @JsonSubTypes.Type(value = SubFormFieldsPerDocumentDateSigned.class, name = "date_signed"),
  @JsonSubTypes.Type(value = SubFormFieldsPerDocumentDropdown.class, name = "dropdown"),
  @JsonSubTypes.Type(value = SubFormFieldsPerDocumentHyperlink.class, name = "hyperlink"),
  @JsonSubTypes.Type(value = SubFormFieldsPerDocumentInitials.class, name = "initials"),
  @JsonSubTypes.Type(value = SubFormFieldsPerDocumentRadio.class, name = "radio"),
  @JsonSubTypes.Type(value = SubFormFieldsPerDocumentSignature.class, name = "signature"),
  @JsonSubTypes.Type(value = SubFormFieldsPerDocumentText.class, name = "text"),
  @JsonSubTypes.Type(value = SubFormFieldsPerDocumentTextMerge.class, name = "text-merge"),
})

public class SubFormFieldsPerDocumentText extends SubFormFieldsPerDocumentBase {
  public static final String JSON_PROPERTY_TYPE = "type";
  private String type = "text";

  public static final String JSON_PROPERTY_PLACEHOLDER = "placeholder";
  private String placeholder;

  public static final String JSON_PROPERTY_AUTO_FILL_TYPE = "auto_fill_type";
  private String autoFillType;

  public static final String JSON_PROPERTY_LINK_ID = "link_id";
  private String linkId;

  public static final String JSON_PROPERTY_MASKED = "masked";
  private Boolean masked;

  /**
   * Each text field may contain a &#x60;validation_type&#x60; parameter. Check out the list of [validation types](https://faq.hellosign.com/hc/en-us/articles/217115577) to learn more about the possible values.  **NOTE**: When using &#x60;custom_regex&#x60; you are required to pass a second parameter &#x60;validation_custom_regex&#x60; and you can optionally provide &#x60;validation_custom_regex_format_label&#x60; for the error message the user will see in case of an invalid value.
   */
  public enum ValidationTypeEnum {
    NUMBERS_ONLY("numbers_only"),
    
    LETTERS_ONLY("letters_only"),
    
    PHONE_NUMBER("phone_number"),
    
    BANK_ROUTING_NUMBER("bank_routing_number"),
    
    BANK_ACCOUNT_NUMBER("bank_account_number"),
    
    EMAIL_ADDRESS("email_address"),
    
    ZIP_CODE("zip_code"),
    
    SOCIAL_SECURITY_NUMBER("social_security_number"),
    
    EMPLOYER_IDENTIFICATION_NUMBER("employer_identification_number"),
    
    CUSTOM_REGEX("custom_regex");

    private String value;

    ValidationTypeEnum(String value) {
      this.value = value;
    }

    @JsonValue
    public String getValue() {
      return value;
    }

    @Override
    public String toString() {
      return String.valueOf(value);
    }

    @JsonCreator
    public static ValidationTypeEnum fromValue(String value) {
      for (ValidationTypeEnum b : ValidationTypeEnum.values()) {
        if (b.value.equals(value)) {
          return b;
        }
      }
      throw new IllegalArgumentException("Unexpected value '" + value + "'");
    }
  }

  public static final String JSON_PROPERTY_VALIDATION_TYPE = "validation_type";
  private ValidationTypeEnum validationType;

  public static final String JSON_PROPERTY_VALIDATION_CUSTOM_REGEX = "validation_custom_regex";
  private String validationCustomRegex;

  public static final String JSON_PROPERTY_VALIDATION_CUSTOM_REGEX_FORMAT_LABEL = "validation_custom_regex_format_label";
  private String validationCustomRegexFormatLabel;

  public static final String JSON_PROPERTY_CONTENT = "content";
  private String content;

  /**
   * Font family for the field.
   */
  public enum FontFamilyEnum {
    HELVETICA("helvetica"),
    
    ARIAL("arial"),
    
    COURIER("courier"),
    
    CALIBRI("calibri"),
    
    CAMBRIA("cambria"),
    
    GEORGIA("georgia"),
    
    TIMES("times"),
    
    TREBUCHET("trebuchet"),
    
    VERDANA("verdana"),
    
    ROBOTO("roboto"),
    
    ROBOTOMONO("robotoMono"),
    
    NOTOSANS("notoSans"),
    
    NOTOSERIF("notoSerif"),
    
    NOTOCJK_JP_REGULAR("notoCJK-JP-Regular"),
    
    NOTOHEBREW_REGULAR("notoHebrew-Regular"),
    
    NOTOSANTHAIMERGED("notoSanThaiMerged");

    private String value;

    FontFamilyEnum(String value) {
      this.value = value;
    }

    @JsonValue
    public String getValue() {
      return value;
    }

    @Override
    public String toString() {
      return String.valueOf(value);
    }

    @JsonCreator
    public static FontFamilyEnum fromValue(String value) {
      for (FontFamilyEnum b : FontFamilyEnum.values()) {
        if (b.value.equals(value)) {
          return b;
        }
      }
      throw new IllegalArgumentException("Unexpected value '" + value + "'");
    }
  }

  public static final String JSON_PROPERTY_FONT_FAMILY = "font_family";
  private FontFamilyEnum fontFamily;

  public static final String JSON_PROPERTY_FONT_SIZE = "font_size";
  private Integer fontSize;

  public SubFormFieldsPerDocumentText() { 
  }

  /**
   * Attempt to instantiate and hydrate a new instance of this class
   * @param jsonData String of JSON data representing target object
   */
  static public SubFormFieldsPerDocumentText init(String jsonData) throws Exception {
    return new ObjectMapper().readValue(jsonData, SubFormFieldsPerDocumentText.class);
  }

  static public SubFormFieldsPerDocumentText init(HashMap data) throws Exception {
    return new ObjectMapper().readValue(
      new ObjectMapper().writeValueAsString(data),
      SubFormFieldsPerDocumentText.class
    );
  }

  public SubFormFieldsPerDocumentText type(String type) {
    this.type = type;
    return this;
  }

   /**
   * A text input field. Use the &#x60;SubFormFieldsPerDocumentText&#x60; class.
   * @return type
  **/
  @javax.annotation.Nonnull
  @ApiModelProperty(required = true, value = "A text input field. Use the `SubFormFieldsPerDocumentText` class.")
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


  public SubFormFieldsPerDocumentText placeholder(String placeholder) {
    this.placeholder = placeholder;
    return this;
  }

   /**
   * Placeholder value for text field.
   * @return placeholder
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "Placeholder value for text field.")
  @JsonProperty(JSON_PROPERTY_PLACEHOLDER)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)

  public String getPlaceholder() {
    return placeholder;
  }


  @JsonProperty(JSON_PROPERTY_PLACEHOLDER)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)
  public void setPlaceholder(String placeholder) {
    this.placeholder = placeholder;
  }


  public SubFormFieldsPerDocumentText autoFillType(String autoFillType) {
    this.autoFillType = autoFillType;
    return this;
  }

   /**
   * Auto fill type for populating fields automatically. Check out the list of [auto fill types](/api/reference/constants/#auto-fill-types) to learn more about the possible values.
   * @return autoFillType
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "Auto fill type for populating fields automatically. Check out the list of [auto fill types](/api/reference/constants/#auto-fill-types) to learn more about the possible values.")
  @JsonProperty(JSON_PROPERTY_AUTO_FILL_TYPE)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)

  public String getAutoFillType() {
    return autoFillType;
  }


  @JsonProperty(JSON_PROPERTY_AUTO_FILL_TYPE)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)
  public void setAutoFillType(String autoFillType) {
    this.autoFillType = autoFillType;
  }


  public SubFormFieldsPerDocumentText linkId(String linkId) {
    this.linkId = linkId;
    return this;
  }

   /**
   * Link two or more text fields. Enter data into one linked text field, which automatically fill all other linked text fields.
   * @return linkId
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "Link two or more text fields. Enter data into one linked text field, which automatically fill all other linked text fields.")
  @JsonProperty(JSON_PROPERTY_LINK_ID)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)

  public String getLinkId() {
    return linkId;
  }


  @JsonProperty(JSON_PROPERTY_LINK_ID)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)
  public void setLinkId(String linkId) {
    this.linkId = linkId;
  }


  public SubFormFieldsPerDocumentText masked(Boolean masked) {
    this.masked = masked;
    return this;
  }

   /**
   * Masks entered data. For more information see [Masking sensitive information](https://faq.hellosign.com/hc/en-us/articles/360040742811-Masking-sensitive-information). &#x60;true&#x60; for masking the data in a text field, otherwise &#x60;false&#x60;.
   * @return masked
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "Masks entered data. For more information see [Masking sensitive information](https://faq.hellosign.com/hc/en-us/articles/360040742811-Masking-sensitive-information). `true` for masking the data in a text field, otherwise `false`.")
  @JsonProperty(JSON_PROPERTY_MASKED)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)

  public Boolean getMasked() {
    return masked;
  }


  @JsonProperty(JSON_PROPERTY_MASKED)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)
  public void setMasked(Boolean masked) {
    this.masked = masked;
  }


  public SubFormFieldsPerDocumentText validationType(ValidationTypeEnum validationType) {
    this.validationType = validationType;
    return this;
  }

   /**
   * Each text field may contain a &#x60;validation_type&#x60; parameter. Check out the list of [validation types](https://faq.hellosign.com/hc/en-us/articles/217115577) to learn more about the possible values.  **NOTE**: When using &#x60;custom_regex&#x60; you are required to pass a second parameter &#x60;validation_custom_regex&#x60; and you can optionally provide &#x60;validation_custom_regex_format_label&#x60; for the error message the user will see in case of an invalid value.
   * @return validationType
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "Each text field may contain a `validation_type` parameter. Check out the list of [validation types](https://faq.hellosign.com/hc/en-us/articles/217115577) to learn more about the possible values.  **NOTE**: When using `custom_regex` you are required to pass a second parameter `validation_custom_regex` and you can optionally provide `validation_custom_regex_format_label` for the error message the user will see in case of an invalid value.")
  @JsonProperty(JSON_PROPERTY_VALIDATION_TYPE)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)

  public ValidationTypeEnum getValidationType() {
    return validationType;
  }


  @JsonProperty(JSON_PROPERTY_VALIDATION_TYPE)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)
  public void setValidationType(ValidationTypeEnum validationType) {
    this.validationType = validationType;
  }


  public SubFormFieldsPerDocumentText validationCustomRegex(String validationCustomRegex) {
    this.validationCustomRegex = validationCustomRegex;
    return this;
  }

   /**
   * Get validationCustomRegex
   * @return validationCustomRegex
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "")
  @JsonProperty(JSON_PROPERTY_VALIDATION_CUSTOM_REGEX)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)

  public String getValidationCustomRegex() {
    return validationCustomRegex;
  }


  @JsonProperty(JSON_PROPERTY_VALIDATION_CUSTOM_REGEX)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)
  public void setValidationCustomRegex(String validationCustomRegex) {
    this.validationCustomRegex = validationCustomRegex;
  }


  public SubFormFieldsPerDocumentText validationCustomRegexFormatLabel(String validationCustomRegexFormatLabel) {
    this.validationCustomRegexFormatLabel = validationCustomRegexFormatLabel;
    return this;
  }

   /**
   * Get validationCustomRegexFormatLabel
   * @return validationCustomRegexFormatLabel
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "")
  @JsonProperty(JSON_PROPERTY_VALIDATION_CUSTOM_REGEX_FORMAT_LABEL)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)

  public String getValidationCustomRegexFormatLabel() {
    return validationCustomRegexFormatLabel;
  }


  @JsonProperty(JSON_PROPERTY_VALIDATION_CUSTOM_REGEX_FORMAT_LABEL)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)
  public void setValidationCustomRegexFormatLabel(String validationCustomRegexFormatLabel) {
    this.validationCustomRegexFormatLabel = validationCustomRegexFormatLabel;
  }


  public SubFormFieldsPerDocumentText content(String content) {
    this.content = content;
    return this;
  }

   /**
   * Content of a &#x60;me_now&#x60; text field
   * @return content
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "Content of a `me_now` text field")
  @JsonProperty(JSON_PROPERTY_CONTENT)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)

  public String getContent() {
    return content;
  }


  @JsonProperty(JSON_PROPERTY_CONTENT)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)
  public void setContent(String content) {
    this.content = content;
  }


  public SubFormFieldsPerDocumentText fontFamily(FontFamilyEnum fontFamily) {
    this.fontFamily = fontFamily;
    return this;
  }

   /**
   * Font family for the field.
   * @return fontFamily
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "Font family for the field.")
  @JsonProperty(JSON_PROPERTY_FONT_FAMILY)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)

  public FontFamilyEnum getFontFamily() {
    return fontFamily;
  }


  @JsonProperty(JSON_PROPERTY_FONT_FAMILY)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)
  public void setFontFamily(FontFamilyEnum fontFamily) {
    this.fontFamily = fontFamily;
  }


  public SubFormFieldsPerDocumentText fontSize(Integer fontSize) {
    this.fontSize = fontSize;
    return this;
  }

   /**
   * The initial px font size for the field contents. Can be any integer value between &#x60;7&#x60; and &#x60;49&#x60;.  **NOTE**: Font size may be reduced during processing in order to fit the contents within the dimensions of the field.
   * @return fontSize
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "The initial px font size for the field contents. Can be any integer value between `7` and `49`.  **NOTE**: Font size may be reduced during processing in order to fit the contents within the dimensions of the field.")
  @JsonProperty(JSON_PROPERTY_FONT_SIZE)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)

  public Integer getFontSize() {
    return fontSize;
  }


  @JsonProperty(JSON_PROPERTY_FONT_SIZE)
  @JsonInclude(value = JsonInclude.Include.USE_DEFAULTS)
  public void setFontSize(Integer fontSize) {
    this.fontSize = fontSize;
  }


  /**
   * Return true if this SubFormFieldsPerDocumentText object is equal to o.
   */
  @Override
  public boolean equals(Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    SubFormFieldsPerDocumentText subFormFieldsPerDocumentText = (SubFormFieldsPerDocumentText) o;
    return Objects.equals(this.type, subFormFieldsPerDocumentText.type) &&
        Objects.equals(this.placeholder, subFormFieldsPerDocumentText.placeholder) &&
        Objects.equals(this.autoFillType, subFormFieldsPerDocumentText.autoFillType) &&
        Objects.equals(this.linkId, subFormFieldsPerDocumentText.linkId) &&
        Objects.equals(this.masked, subFormFieldsPerDocumentText.masked) &&
        Objects.equals(this.validationType, subFormFieldsPerDocumentText.validationType) &&
        Objects.equals(this.validationCustomRegex, subFormFieldsPerDocumentText.validationCustomRegex) &&
        Objects.equals(this.validationCustomRegexFormatLabel, subFormFieldsPerDocumentText.validationCustomRegexFormatLabel) &&
        Objects.equals(this.content, subFormFieldsPerDocumentText.content) &&
        Objects.equals(this.fontFamily, subFormFieldsPerDocumentText.fontFamily) &&
        Objects.equals(this.fontSize, subFormFieldsPerDocumentText.fontSize) &&
        super.equals(o);
  }

  @Override
  public int hashCode() {
    return Objects.hash(type, placeholder, autoFillType, linkId, masked, validationType, validationCustomRegex, validationCustomRegexFormatLabel, content, fontFamily, fontSize, super.hashCode());
  }

  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class SubFormFieldsPerDocumentText {\n");
    sb.append("    ").append(toIndentedString(super.toString())).append("\n");
    sb.append("    type: ").append(toIndentedString(type)).append("\n");
    sb.append("    placeholder: ").append(toIndentedString(placeholder)).append("\n");
    sb.append("    autoFillType: ").append(toIndentedString(autoFillType)).append("\n");
    sb.append("    linkId: ").append(toIndentedString(linkId)).append("\n");
    sb.append("    masked: ").append(toIndentedString(masked)).append("\n");
    sb.append("    validationType: ").append(toIndentedString(validationType)).append("\n");
    sb.append("    validationCustomRegex: ").append(toIndentedString(validationCustomRegex)).append("\n");
    sb.append("    validationCustomRegexFormatLabel: ").append(toIndentedString(validationCustomRegexFormatLabel)).append("\n");
    sb.append("    content: ").append(toIndentedString(content)).append("\n");
    sb.append("    fontFamily: ").append(toIndentedString(fontFamily)).append("\n");
    sb.append("    fontSize: ").append(toIndentedString(fontSize)).append("\n");
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
    if (placeholder != null) {
        if (isFileTypeOrListOfFiles(placeholder)) {
            fileTypeFound = true;
        }

        if (placeholder.getClass().equals(java.io.File.class) ||
            placeholder.getClass().equals(Integer.class) ||
            placeholder.getClass().equals(String.class) ||
            placeholder.getClass().isEnum()) {
            map.put("placeholder", placeholder);
        } else if (isListOfFile(placeholder)) {
            for(int i = 0; i< getListSize(placeholder); i++) {
                map.put("placeholder[" + i + "]", getFromList(placeholder, i));
            }
        }
        else {
            map.put("placeholder", JSON.getDefault().getMapper().writeValueAsString(placeholder));
        }
    }
    if (autoFillType != null) {
        if (isFileTypeOrListOfFiles(autoFillType)) {
            fileTypeFound = true;
        }

        if (autoFillType.getClass().equals(java.io.File.class) ||
            autoFillType.getClass().equals(Integer.class) ||
            autoFillType.getClass().equals(String.class) ||
            autoFillType.getClass().isEnum()) {
            map.put("auto_fill_type", autoFillType);
        } else if (isListOfFile(autoFillType)) {
            for(int i = 0; i< getListSize(autoFillType); i++) {
                map.put("auto_fill_type[" + i + "]", getFromList(autoFillType, i));
            }
        }
        else {
            map.put("auto_fill_type", JSON.getDefault().getMapper().writeValueAsString(autoFillType));
        }
    }
    if (linkId != null) {
        if (isFileTypeOrListOfFiles(linkId)) {
            fileTypeFound = true;
        }

        if (linkId.getClass().equals(java.io.File.class) ||
            linkId.getClass().equals(Integer.class) ||
            linkId.getClass().equals(String.class) ||
            linkId.getClass().isEnum()) {
            map.put("link_id", linkId);
        } else if (isListOfFile(linkId)) {
            for(int i = 0; i< getListSize(linkId); i++) {
                map.put("link_id[" + i + "]", getFromList(linkId, i));
            }
        }
        else {
            map.put("link_id", JSON.getDefault().getMapper().writeValueAsString(linkId));
        }
    }
    if (masked != null) {
        if (isFileTypeOrListOfFiles(masked)) {
            fileTypeFound = true;
        }

        if (masked.getClass().equals(java.io.File.class) ||
            masked.getClass().equals(Integer.class) ||
            masked.getClass().equals(String.class) ||
            masked.getClass().isEnum()) {
            map.put("masked", masked);
        } else if (isListOfFile(masked)) {
            for(int i = 0; i< getListSize(masked); i++) {
                map.put("masked[" + i + "]", getFromList(masked, i));
            }
        }
        else {
            map.put("masked", JSON.getDefault().getMapper().writeValueAsString(masked));
        }
    }
    if (validationType != null) {
        if (isFileTypeOrListOfFiles(validationType)) {
            fileTypeFound = true;
        }

        if (validationType.getClass().equals(java.io.File.class) ||
            validationType.getClass().equals(Integer.class) ||
            validationType.getClass().equals(String.class) ||
            validationType.getClass().isEnum()) {
            map.put("validation_type", validationType);
        } else if (isListOfFile(validationType)) {
            for(int i = 0; i< getListSize(validationType); i++) {
                map.put("validation_type[" + i + "]", getFromList(validationType, i));
            }
        }
        else {
            map.put("validation_type", JSON.getDefault().getMapper().writeValueAsString(validationType));
        }
    }
    if (validationCustomRegex != null) {
        if (isFileTypeOrListOfFiles(validationCustomRegex)) {
            fileTypeFound = true;
        }

        if (validationCustomRegex.getClass().equals(java.io.File.class) ||
            validationCustomRegex.getClass().equals(Integer.class) ||
            validationCustomRegex.getClass().equals(String.class) ||
            validationCustomRegex.getClass().isEnum()) {
            map.put("validation_custom_regex", validationCustomRegex);
        } else if (isListOfFile(validationCustomRegex)) {
            for(int i = 0; i< getListSize(validationCustomRegex); i++) {
                map.put("validation_custom_regex[" + i + "]", getFromList(validationCustomRegex, i));
            }
        }
        else {
            map.put("validation_custom_regex", JSON.getDefault().getMapper().writeValueAsString(validationCustomRegex));
        }
    }
    if (validationCustomRegexFormatLabel != null) {
        if (isFileTypeOrListOfFiles(validationCustomRegexFormatLabel)) {
            fileTypeFound = true;
        }

        if (validationCustomRegexFormatLabel.getClass().equals(java.io.File.class) ||
            validationCustomRegexFormatLabel.getClass().equals(Integer.class) ||
            validationCustomRegexFormatLabel.getClass().equals(String.class) ||
            validationCustomRegexFormatLabel.getClass().isEnum()) {
            map.put("validation_custom_regex_format_label", validationCustomRegexFormatLabel);
        } else if (isListOfFile(validationCustomRegexFormatLabel)) {
            for(int i = 0; i< getListSize(validationCustomRegexFormatLabel); i++) {
                map.put("validation_custom_regex_format_label[" + i + "]", getFromList(validationCustomRegexFormatLabel, i));
            }
        }
        else {
            map.put("validation_custom_regex_format_label", JSON.getDefault().getMapper().writeValueAsString(validationCustomRegexFormatLabel));
        }
    }
    if (content != null) {
        if (isFileTypeOrListOfFiles(content)) {
            fileTypeFound = true;
        }

        if (content.getClass().equals(java.io.File.class) ||
            content.getClass().equals(Integer.class) ||
            content.getClass().equals(String.class) ||
            content.getClass().isEnum()) {
            map.put("content", content);
        } else if (isListOfFile(content)) {
            for(int i = 0; i< getListSize(content); i++) {
                map.put("content[" + i + "]", getFromList(content, i));
            }
        }
        else {
            map.put("content", JSON.getDefault().getMapper().writeValueAsString(content));
        }
    }
    if (fontFamily != null) {
        if (isFileTypeOrListOfFiles(fontFamily)) {
            fileTypeFound = true;
        }

        if (fontFamily.getClass().equals(java.io.File.class) ||
            fontFamily.getClass().equals(Integer.class) ||
            fontFamily.getClass().equals(String.class) ||
            fontFamily.getClass().isEnum()) {
            map.put("font_family", fontFamily);
        } else if (isListOfFile(fontFamily)) {
            for(int i = 0; i< getListSize(fontFamily); i++) {
                map.put("font_family[" + i + "]", getFromList(fontFamily, i));
            }
        }
        else {
            map.put("font_family", JSON.getDefault().getMapper().writeValueAsString(fontFamily));
        }
    }
    if (fontSize != null) {
        if (isFileTypeOrListOfFiles(fontSize)) {
            fileTypeFound = true;
        }

        if (fontSize.getClass().equals(java.io.File.class) ||
            fontSize.getClass().equals(Integer.class) ||
            fontSize.getClass().equals(String.class) ||
            fontSize.getClass().isEnum()) {
            map.put("font_size", fontSize);
        } else if (isListOfFile(fontSize)) {
            for(int i = 0; i< getListSize(fontSize); i++) {
                map.put("font_size[" + i + "]", getFromList(fontSize, i));
            }
        }
        else {
            map.put("font_size", JSON.getDefault().getMapper().writeValueAsString(fontSize));
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
  mappings.put("checkbox", SubFormFieldsPerDocumentCheckbox.class);
  mappings.put("checkbox-merge", SubFormFieldsPerDocumentCheckboxMerge.class);
  mappings.put("date_signed", SubFormFieldsPerDocumentDateSigned.class);
  mappings.put("dropdown", SubFormFieldsPerDocumentDropdown.class);
  mappings.put("hyperlink", SubFormFieldsPerDocumentHyperlink.class);
  mappings.put("initials", SubFormFieldsPerDocumentInitials.class);
  mappings.put("radio", SubFormFieldsPerDocumentRadio.class);
  mappings.put("signature", SubFormFieldsPerDocumentSignature.class);
  mappings.put("text", SubFormFieldsPerDocumentText.class);
  mappings.put("text-merge", SubFormFieldsPerDocumentTextMerge.class);
  mappings.put("SubFormFieldsPerDocumentText", SubFormFieldsPerDocumentText.class);
  JSON.registerDiscriminator(SubFormFieldsPerDocumentText.class, "type", mappings);
}
}

