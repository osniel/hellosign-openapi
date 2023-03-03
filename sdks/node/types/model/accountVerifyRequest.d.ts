import { AttributeTypeMap } from "./";
export declare class AccountVerifyRequest {
    "emailAddress": string;
    static discriminator: string | undefined;
    static attributeTypeMap: AttributeTypeMap;
    static getAttributeTypeMap(): AttributeTypeMap;
    static init(data: any): AccountVerifyRequest;
}
