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
 * 用户计费使用情况详情
 *
 * @method string getFlowId() 获取合同流程ID，为32位字符串。
建议开发者妥善保存此流程ID，以便于顺利进行后续操作。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowId(string $FlowId) 设置合同流程ID，为32位字符串。
建议开发者妥善保存此流程ID，以便于顺利进行后续操作。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperatorName() 获取合同经办人名称
如果有多个经办人用分号隔开。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorName(string $OperatorName) 设置合同经办人名称
如果有多个经办人用分号隔开。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateOrganizationName() 获取发起方组织机构名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateOrganizationName(string $CreateOrganizationName) 设置发起方组织机构名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlowName() 获取合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
该名称还将用于合同签署完成后的下载文件名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowName(string $FlowName) 设置合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
该名称还将用于合同签署完成后的下载文件名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取当前合同状态,如下是状态码对应的状态。
0-还没有发起
1-等待签署
2-部分签署 
3-拒签
4-已签署 
5-已过期 
6-已撤销 
7-还没有预发起
8-等待填写
9-部分填写 
10-拒填
11-已解除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置当前合同状态,如下是状态码对应的状态。
0-还没有发起
1-等待签署
2-部分签署 
3-拒签
4-已签署 
5-已过期 
6-已撤销 
7-还没有预发起
8-等待填写
9-部分填写 
10-拒填
11-已解除
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQuotaType() 获取套餐类型
对应关系如下
CloudEnterprise-企业版合同
SingleSignature-单方签章
CloudProve-签署报告
CloudOnlineSign-腾讯会议在线签约
ChannelWeCard-微工卡
SignFlow-合同套餐
SignFace-签署意愿（人脸识别）
SignPassword-签署意愿（密码）
SignSMS-签署意愿（短信）
PersonalEssAuth-签署人实名（腾讯电子签认证）
PersonalThirdAuth-签署人实名（信任第三方认证）
OrgEssAuth-签署企业实名
FlowNotify-短信通知
AuthService-企业工商信息查询
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuotaType(string $QuotaType) 设置套餐类型
对应关系如下
CloudEnterprise-企业版合同
SingleSignature-单方签章
CloudProve-签署报告
CloudOnlineSign-腾讯会议在线签约
ChannelWeCard-微工卡
SignFlow-合同套餐
SignFace-签署意愿（人脸识别）
SignPassword-签署意愿（密码）
SignSMS-签署意愿（短信）
PersonalEssAuth-签署人实名（腾讯电子签认证）
PersonalThirdAuth-签署人实名（信任第三方认证）
OrgEssAuth-签署企业实名
FlowNotify-短信通知
AuthService-企业工商信息查询
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUseCount() 获取合同使用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUseCount(integer $UseCount) 设置合同使用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCostTime() 获取消耗的时间戳，格式为Unix标准时间戳（秒）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCostTime(integer $CostTime) 设置消耗的时间戳，格式为Unix标准时间戳（秒）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQuotaName() 获取消耗的套餐名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuotaName(string $QuotaName) 设置消耗的套餐名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCostType() 获取消耗类型
1.扣费 2.撤销返还
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCostType(integer $CostType) 设置消耗类型
1.扣费 2.撤销返还
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 */
class BillUsageDetail extends AbstractModel
{
    /**
     * @var string 合同流程ID，为32位字符串。
建议开发者妥善保存此流程ID，以便于顺利进行后续操作。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowId;

    /**
     * @var string 合同经办人名称
如果有多个经办人用分号隔开。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorName;

    /**
     * @var string 发起方组织机构名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateOrganizationName;

    /**
     * @var string 合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
该名称还将用于合同签署完成后的下载文件名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowName;

    /**
     * @var integer 当前合同状态,如下是状态码对应的状态。
0-还没有发起
1-等待签署
2-部分签署 
3-拒签
4-已签署 
5-已过期 
6-已撤销 
7-还没有预发起
8-等待填写
9-部分填写 
10-拒填
11-已解除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 套餐类型
对应关系如下
CloudEnterprise-企业版合同
SingleSignature-单方签章
CloudProve-签署报告
CloudOnlineSign-腾讯会议在线签约
ChannelWeCard-微工卡
SignFlow-合同套餐
SignFace-签署意愿（人脸识别）
SignPassword-签署意愿（密码）
SignSMS-签署意愿（短信）
PersonalEssAuth-签署人实名（腾讯电子签认证）
PersonalThirdAuth-签署人实名（信任第三方认证）
OrgEssAuth-签署企业实名
FlowNotify-短信通知
AuthService-企业工商信息查询
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QuotaType;

    /**
     * @var integer 合同使用量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UseCount;

    /**
     * @var integer 消耗的时间戳，格式为Unix标准时间戳（秒）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CostTime;

    /**
     * @var string 消耗的套餐名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QuotaName;

    /**
     * @var integer 消耗类型
1.扣费 2.撤销返还
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CostType;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @param string $FlowId 合同流程ID，为32位字符串。
建议开发者妥善保存此流程ID，以便于顺利进行后续操作。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperatorName 合同经办人名称
如果有多个经办人用分号隔开。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateOrganizationName 发起方组织机构名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlowName 合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
该名称还将用于合同签署完成后的下载文件名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 当前合同状态,如下是状态码对应的状态。
0-还没有发起
1-等待签署
2-部分签署 
3-拒签
4-已签署 
5-已过期 
6-已撤销 
7-还没有预发起
8-等待填写
9-部分填写 
10-拒填
11-已解除
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QuotaType 套餐类型
对应关系如下
CloudEnterprise-企业版合同
SingleSignature-单方签章
CloudProve-签署报告
CloudOnlineSign-腾讯会议在线签约
ChannelWeCard-微工卡
SignFlow-合同套餐
SignFace-签署意愿（人脸识别）
SignPassword-签署意愿（密码）
SignSMS-签署意愿（短信）
PersonalEssAuth-签署人实名（腾讯电子签认证）
PersonalThirdAuth-签署人实名（信任第三方认证）
OrgEssAuth-签署企业实名
FlowNotify-短信通知
AuthService-企业工商信息查询
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UseCount 合同使用量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CostTime 消耗的时间戳，格式为Unix标准时间戳（秒）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QuotaName 消耗的套餐名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CostType 消耗类型
1.扣费 2.撤销返还
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("OperatorName",$param) and $param["OperatorName"] !== null) {
            $this->OperatorName = $param["OperatorName"];
        }

        if (array_key_exists("CreateOrganizationName",$param) and $param["CreateOrganizationName"] !== null) {
            $this->CreateOrganizationName = $param["CreateOrganizationName"];
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("QuotaType",$param) and $param["QuotaType"] !== null) {
            $this->QuotaType = $param["QuotaType"];
        }

        if (array_key_exists("UseCount",$param) and $param["UseCount"] !== null) {
            $this->UseCount = $param["UseCount"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }

        if (array_key_exists("QuotaName",$param) and $param["QuotaName"] !== null) {
            $this->QuotaName = $param["QuotaName"];
        }

        if (array_key_exists("CostType",$param) and $param["CostType"] !== null) {
            $this->CostType = $param["CostType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
