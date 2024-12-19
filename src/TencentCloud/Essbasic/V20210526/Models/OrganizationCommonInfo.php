<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业认证信息参数， 需要保证这些参数跟营业执照中的信息一致。
 *
 * @method string getOrganizationName() 获取组织机构名称。
请确认该名称与企业营业执照中注册的名称一致。
如果名称中包含英文括号()，请使用中文括号（）代替。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationName(string $OrganizationName) 设置组织机构名称。
请确认该名称与企业营业执照中注册的名称一致。
如果名称中包含英文括号()，请使用中文括号（）代替。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUniformSocialCreditCode() 获取组织机构企业统一社会信用代码。
请确认该企业统一社会信用代码与企业营业执照中注册的统一社会信用代码一致。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUniformSocialCreditCode(string $UniformSocialCreditCode) 设置组织机构企业统一社会信用代码。
请确认该企业统一社会信用代码与企业营业执照中注册的统一社会信用代码一致。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLegalName() 获取组织机构法人的姓名。
请确认该企业统一社会信用代码与企业营业执照中注册的法人姓名一致。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLegalName(string $LegalName) 设置组织机构法人的姓名。
请确认该企业统一社会信用代码与企业营业执照中注册的法人姓名一致。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLegalIdCardType() 获取组织机构法人的证件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLegalIdCardType(string $LegalIdCardType) 设置组织机构法人的证件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLegalIdCardNumber() 获取组织机构法人的证件号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLegalIdCardNumber(string $LegalIdCardNumber) 设置组织机构法人的证件号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdminName() 获取组织机构超管姓名。

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdminName(string $AdminName) 设置组织机构超管姓名。

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdminMobile() 获取组织机构超管手机号。

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdminMobile(string $AdminMobile) 设置组织机构超管手机号。

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdminIdCardType() 获取组织机构超管证件类型

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdminIdCardType(string $AdminIdCardType) 设置组织机构超管证件类型

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdminIdCardNumber() 获取组织机构超管证件号码

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdminIdCardNumber(string $AdminIdCardNumber) 设置组织机构超管证件号码

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOldAdminName() 获取原超管姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOldAdminName(string $OldAdminName) 设置原超管姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOldAdminMobile() 获取原超管手机号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOldAdminMobile(string $OldAdminMobile) 设置原超管手机号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOldAdminIdCardType() 获取原超管证件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOldAdminIdCardType(string $OldAdminIdCardType) 设置原超管证件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOldAdminIdCardNumber() 获取原超管证件号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOldAdminIdCardNumber(string $OldAdminIdCardNumber) 设置原超管证件号码
注意：此字段可能返回 null，表示取不到有效值。
 */
class OrganizationCommonInfo extends AbstractModel
{
    /**
     * @var string 组织机构名称。
请确认该名称与企业营业执照中注册的名称一致。
如果名称中包含英文括号()，请使用中文括号（）代替。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationName;

    /**
     * @var string 组织机构企业统一社会信用代码。
请确认该企业统一社会信用代码与企业营业执照中注册的统一社会信用代码一致。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UniformSocialCreditCode;

    /**
     * @var string 组织机构法人的姓名。
请确认该企业统一社会信用代码与企业营业执照中注册的法人姓名一致。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LegalName;

    /**
     * @var string 组织机构法人的证件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LegalIdCardType;

    /**
     * @var string 组织机构法人的证件号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LegalIdCardNumber;

    /**
     * @var string 组织机构超管姓名。

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdminName;

    /**
     * @var string 组织机构超管手机号。

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdminMobile;

    /**
     * @var string 组织机构超管证件类型

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdminIdCardType;

    /**
     * @var string 组织机构超管证件号码

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdminIdCardNumber;

    /**
     * @var string 原超管姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OldAdminName;

    /**
     * @var string 原超管手机号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OldAdminMobile;

    /**
     * @var string 原超管证件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OldAdminIdCardType;

    /**
     * @var string 原超管证件号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OldAdminIdCardNumber;

    /**
     * @param string $OrganizationName 组织机构名称。
请确认该名称与企业营业执照中注册的名称一致。
如果名称中包含英文括号()，请使用中文括号（）代替。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UniformSocialCreditCode 组织机构企业统一社会信用代码。
请确认该企业统一社会信用代码与企业营业执照中注册的统一社会信用代码一致。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LegalName 组织机构法人的姓名。
请确认该企业统一社会信用代码与企业营业执照中注册的法人姓名一致。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LegalIdCardType 组织机构法人的证件类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LegalIdCardNumber 组织机构法人的证件号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdminName 组织机构超管姓名。

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdminMobile 组织机构超管手机号。

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdminIdCardType 组织机构超管证件类型

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdminIdCardNumber 组织机构超管证件号码

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OldAdminName 原超管姓名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OldAdminMobile 原超管手机号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OldAdminIdCardType 原超管证件类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OldAdminIdCardNumber 原超管证件号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("UniformSocialCreditCode",$param) and $param["UniformSocialCreditCode"] !== null) {
            $this->UniformSocialCreditCode = $param["UniformSocialCreditCode"];
        }

        if (array_key_exists("LegalName",$param) and $param["LegalName"] !== null) {
            $this->LegalName = $param["LegalName"];
        }

        if (array_key_exists("LegalIdCardType",$param) and $param["LegalIdCardType"] !== null) {
            $this->LegalIdCardType = $param["LegalIdCardType"];
        }

        if (array_key_exists("LegalIdCardNumber",$param) and $param["LegalIdCardNumber"] !== null) {
            $this->LegalIdCardNumber = $param["LegalIdCardNumber"];
        }

        if (array_key_exists("AdminName",$param) and $param["AdminName"] !== null) {
            $this->AdminName = $param["AdminName"];
        }

        if (array_key_exists("AdminMobile",$param) and $param["AdminMobile"] !== null) {
            $this->AdminMobile = $param["AdminMobile"];
        }

        if (array_key_exists("AdminIdCardType",$param) and $param["AdminIdCardType"] !== null) {
            $this->AdminIdCardType = $param["AdminIdCardType"];
        }

        if (array_key_exists("AdminIdCardNumber",$param) and $param["AdminIdCardNumber"] !== null) {
            $this->AdminIdCardNumber = $param["AdminIdCardNumber"];
        }

        if (array_key_exists("OldAdminName",$param) and $param["OldAdminName"] !== null) {
            $this->OldAdminName = $param["OldAdminName"];
        }

        if (array_key_exists("OldAdminMobile",$param) and $param["OldAdminMobile"] !== null) {
            $this->OldAdminMobile = $param["OldAdminMobile"];
        }

        if (array_key_exists("OldAdminIdCardType",$param) and $param["OldAdminIdCardType"] !== null) {
            $this->OldAdminIdCardType = $param["OldAdminIdCardType"];
        }

        if (array_key_exists("OldAdminIdCardNumber",$param) and $param["OldAdminIdCardNumber"] !== null) {
            $this->OldAdminIdCardNumber = $param["OldAdminIdCardNumber"];
        }
    }
}
