import { AttributeTypeMap } from "./models";
import { TemplateResponseDocumentFormFieldBase } from "./templateResponseDocumentFormFieldBase";
export declare class TemplateResponseDocumentFormFieldDateSigned extends TemplateResponseDocumentFormFieldBase {
    "type": string;
    static discriminator: string | undefined;
    static attributeTypeMap: AttributeTypeMap;
    static getAttributeTypeMap(): AttributeTypeMap;
    static init(data: any): TemplateResponseDocumentFormFieldDateSigned;
}
