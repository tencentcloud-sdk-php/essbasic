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
 * ChannelCreateBatchSignUrl请求参数结构体
 *
 * @method Agent getAgent() 获取关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经过实名认证
 * @method void setAgent(Agent $Agent) 设置关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经过实名认证
 * @method string getName() 获取签署方经办人的姓名。
经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。

注：`请确保和合同中填入的一致`，`除动态签署人或子客员工经办人场景外，此参数必填`
 * @method void setName(string $Name) 设置签署方经办人的姓名。
经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。

注：`请确保和合同中填入的一致`，`除动态签署人或子客员工经办人场景外，此参数必填`
 * @method string getMobile() 获取手机号码， 支持国内手机号11位数字(无需加+86前缀或其他字符)。
请确认手机号所有方为此业务通知方。

注：`请确保和合同中填入的一致,  若无法保持一致，请确保在发起和生成批量签署链接时传入相同的参与方证件信息`，`除动态签署人或子客员工经办人场景外，此参数必填`
 * @method void setMobile(string $Mobile) 设置手机号码， 支持国内手机号11位数字(无需加+86前缀或其他字符)。
请确认手机号所有方为此业务通知方。

注：`请确保和合同中填入的一致,  若无法保持一致，请确保在发起和生成批量签署链接时传入相同的参与方证件信息`，`除动态签署人或子客员工经办人场景外，此参数必填`
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method string getIdCardType() 获取证件类型，支持以下类型
<ul><li>**ID_CARD** : 中国大陆居民身份证 (默认值)</li>
<li>**HONGKONG_AND_MACAO** : 港澳居民来往内地通行证</li>
<li>**HONGKONG_MACAO_AND_TAIWAN** : 港澳台居民居住证(格式同居民身份证)</li></ul>

注：`请确保和合同中填入的一致`
 * @method void setIdCardType(string $IdCardType) 设置证件类型，支持以下类型
<ul><li>**ID_CARD** : 中国大陆居民身份证 (默认值)</li>
<li>**HONGKONG_AND_MACAO** : 港澳居民来往内地通行证</li>
<li>**HONGKONG_MACAO_AND_TAIWAN** : 港澳台居民居住证(格式同居民身份证)</li></ul>

注：`请确保和合同中填入的一致`
 * @method string getIdCardNumber() 获取证件号码，应符合以下规则
<ul><li>居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li>
<li>港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li>
<li>港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>

注：`请确保和合同中填入的一致`
 * @method void setIdCardNumber(string $IdCardNumber) 设置证件号码，应符合以下规则
<ul><li>居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li>
<li>港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li>
<li>港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>

注：`请确保和合同中填入的一致`
 * @method string getNotifyType() 获取通知用户方式：
<ul>
<li>**NONE** : 不通知（默认）</li>
<li>**SMS** : 短信通知（发送短信通知到Mobile参数所传的手机号）</li>
</ul>
 * @method void setNotifyType(string $NotifyType) 设置通知用户方式：
<ul>
<li>**NONE** : 不通知（默认）</li>
<li>**SMS** : 短信通知（发送短信通知到Mobile参数所传的手机号）</li>
</ul>
 * @method array getFlowIds() 获取批量签署的合同流程ID数组。
注: `在调用此接口时，请确保合同流程均为本企业发起，且合同数量不超过100个。`
 * @method void setFlowIds(array $FlowIds) 设置批量签署的合同流程ID数组。
注: `在调用此接口时，请确保合同流程均为本企业发起，且合同数量不超过100个。`
 * @method string getOrganizationName() 获取SaaS平台企业员工签署方的企业名称。目标签署人如果为saas应用企业员工身份，此参数必填。

注：
<ul>
<li>请确认该名称与企业营业执照中注册的名称一致。</li>
<li>如果名称中包含英文括号()，请使用中文括号（）代替。</li>
<li>请确保此企业已完成腾讯电子签企业认证。</li>
<li>**若为子客企业员工，请使用OpenId，OrganizationOpenId参数，此参数留空即可**</li>
</ul>
 * @method void setOrganizationName(string $OrganizationName) 设置SaaS平台企业员工签署方的企业名称。目标签署人如果为saas应用企业员工身份，此参数必填。

注：
<ul>
<li>请确认该名称与企业营业执照中注册的名称一致。</li>
<li>如果名称中包含英文括号()，请使用中文括号（）代替。</li>
<li>请确保此企业已完成腾讯电子签企业认证。</li>
<li>**若为子客企业员工，请使用OpenId，OrganizationOpenId参数，此参数留空即可**</li>
</ul>
 * @method boolean getJumpToDetail() 获取是否直接跳转至合同内容页面进行签署
<ul>
<li>**false**: 会跳转至批量合同流程的列表,  点击需要批量签署合同后进入合同内容页面进行签署(默认)</li>
<li>**true**: 跳过合同流程列表, 直接进入合同内容页面进行签署</li>
</ul>
 * @method void setJumpToDetail(boolean $JumpToDetail) 设置是否直接跳转至合同内容页面进行签署
<ul>
<li>**false**: 会跳转至批量合同流程的列表,  点击需要批量签署合同后进入合同内容页面进行签署(默认)</li>
<li>**true**: 跳过合同流程列表, 直接进入合同内容页面进行签署</li>
</ul>
 * @method FlowBatchUrlInfo getFlowBatchUrlInfo() 获取批量签署合同相关信息，指定合同和签署方的信息，用于补充动态签署人。	
 * @method void setFlowBatchUrlInfo(FlowBatchUrlInfo $FlowBatchUrlInfo) 设置批量签署合同相关信息，指定合同和签署方的信息，用于补充动态签署人。	
 * @method string getOpenId() 获取第三方平台子客企业员工的标识OpenId，批签合同经办人为子客员工的情况下为必填。

注：
<ul>
<li>传入的OpenId对应员工在此子客企业下必须已经实名</li>
<li>传递了此参数可以无需传递Name，Mobile，IdCardNumber，IdCardType参数。系统会根据员工OpenId自动拉取实名信息。</li>
</ul>
 * @method void setOpenId(string $OpenId) 设置第三方平台子客企业员工的标识OpenId，批签合同经办人为子客员工的情况下为必填。

注：
<ul>
<li>传入的OpenId对应员工在此子客企业下必须已经实名</li>
<li>传递了此参数可以无需传递Name，Mobile，IdCardNumber，IdCardType参数。系统会根据员工OpenId自动拉取实名信息。</li>
</ul>
 * @method string getOrganizationOpenId() 获取第三方平台子客企业的企业的标识, 即OrganizationOpenId，批签合同经办人为子客企业员工是为必填。
 * @method void setOrganizationOpenId(string $OrganizationOpenId) 设置第三方平台子客企业的企业的标识, 即OrganizationOpenId，批签合同经办人为子客企业员工是为必填。
 * @method boolean getAutoJumpBack() 获取签署完成后是否自动回跳
<ul><li>false：否, 签署完成不会自动跳转回来(默认)</li><li>true：是, 签署完成会自动跳转回来</li></ul>

注: 
1. 该参数<font color="red">只针对APP类型（电子签小程序跳转贵方小程序）场景</font> 的签署链接有效
2. <font color="red">手机应用APP 或 微信小程序需要监控界面的返回走后序逻辑</font>, 微信小程序的文档可以参考[这个](https://developers.weixin.qq.com/miniprogram/dev/reference/api/App.html#onShow-Object-object)
3. <font color="red">电子签小程序跳转贵方APP，不支持自动跳转，必需用户手动点击完成按钮（微信的限制）</font> 
 * @method void setAutoJumpBack(boolean $AutoJumpBack) 设置签署完成后是否自动回跳
<ul><li>false：否, 签署完成不会自动跳转回来(默认)</li><li>true：是, 签署完成会自动跳转回来</li></ul>

注: 
1. 该参数<font color="red">只针对APP类型（电子签小程序跳转贵方小程序）场景</font> 的签署链接有效
2. <font color="red">手机应用APP 或 微信小程序需要监控界面的返回走后序逻辑</font>, 微信小程序的文档可以参考[这个](https://developers.weixin.qq.com/miniprogram/dev/reference/api/App.html#onShow-Object-object)
3. <font color="red">电子签小程序跳转贵方APP，不支持自动跳转，必需用户手动点击完成按钮（微信的限制）</font> 
 */
class ChannelCreateBatchSignUrlRequest extends AbstractModel
{
    /**
     * @var Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经过实名认证
     */
    public $Agent;

    /**
     * @var string 签署方经办人的姓名。
经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。

注：`请确保和合同中填入的一致`，`除动态签署人或子客员工经办人场景外，此参数必填`
     */
    public $Name;

    /**
     * @var string 手机号码， 支持国内手机号11位数字(无需加+86前缀或其他字符)。
请确认手机号所有方为此业务通知方。

注：`请确保和合同中填入的一致,  若无法保持一致，请确保在发起和生成批量签署链接时传入相同的参与方证件信息`，`除动态签署人或子客员工经办人场景外，此参数必填`
     */
    public $Mobile;

    /**
     * @var UserInfo 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var string 证件类型，支持以下类型
<ul><li>**ID_CARD** : 中国大陆居民身份证 (默认值)</li>
<li>**HONGKONG_AND_MACAO** : 港澳居民来往内地通行证</li>
<li>**HONGKONG_MACAO_AND_TAIWAN** : 港澳台居民居住证(格式同居民身份证)</li></ul>

注：`请确保和合同中填入的一致`
     */
    public $IdCardType;

    /**
     * @var string 证件号码，应符合以下规则
<ul><li>居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li>
<li>港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li>
<li>港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>

注：`请确保和合同中填入的一致`
     */
    public $IdCardNumber;

    /**
     * @var string 通知用户方式：
<ul>
<li>**NONE** : 不通知（默认）</li>
<li>**SMS** : 短信通知（发送短信通知到Mobile参数所传的手机号）</li>
</ul>
     */
    public $NotifyType;

    /**
     * @var array 批量签署的合同流程ID数组。
注: `在调用此接口时，请确保合同流程均为本企业发起，且合同数量不超过100个。`
     */
    public $FlowIds;

    /**
     * @var string SaaS平台企业员工签署方的企业名称。目标签署人如果为saas应用企业员工身份，此参数必填。

注：
<ul>
<li>请确认该名称与企业营业执照中注册的名称一致。</li>
<li>如果名称中包含英文括号()，请使用中文括号（）代替。</li>
<li>请确保此企业已完成腾讯电子签企业认证。</li>
<li>**若为子客企业员工，请使用OpenId，OrganizationOpenId参数，此参数留空即可**</li>
</ul>
     */
    public $OrganizationName;

    /**
     * @var boolean 是否直接跳转至合同内容页面进行签署
<ul>
<li>**false**: 会跳转至批量合同流程的列表,  点击需要批量签署合同后进入合同内容页面进行签署(默认)</li>
<li>**true**: 跳过合同流程列表, 直接进入合同内容页面进行签署</li>
</ul>
     */
    public $JumpToDetail;

    /**
     * @var FlowBatchUrlInfo 批量签署合同相关信息，指定合同和签署方的信息，用于补充动态签署人。	
     */
    public $FlowBatchUrlInfo;

    /**
     * @var string 第三方平台子客企业员工的标识OpenId，批签合同经办人为子客员工的情况下为必填。

注：
<ul>
<li>传入的OpenId对应员工在此子客企业下必须已经实名</li>
<li>传递了此参数可以无需传递Name，Mobile，IdCardNumber，IdCardType参数。系统会根据员工OpenId自动拉取实名信息。</li>
</ul>
     */
    public $OpenId;

    /**
     * @var string 第三方平台子客企业的企业的标识, 即OrganizationOpenId，批签合同经办人为子客企业员工是为必填。
     */
    public $OrganizationOpenId;

    /**
     * @var boolean 签署完成后是否自动回跳
<ul><li>false：否, 签署完成不会自动跳转回来(默认)</li><li>true：是, 签署完成会自动跳转回来</li></ul>

注: 
1. 该参数<font color="red">只针对APP类型（电子签小程序跳转贵方小程序）场景</font> 的签署链接有效
2. <font color="red">手机应用APP 或 微信小程序需要监控界面的返回走后序逻辑</font>, 微信小程序的文档可以参考[这个](https://developers.weixin.qq.com/miniprogram/dev/reference/api/App.html#onShow-Object-object)
3. <font color="red">电子签小程序跳转贵方APP，不支持自动跳转，必需用户手动点击完成按钮（微信的限制）</font> 
     */
    public $AutoJumpBack;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经过实名认证
     * @param string $Name 签署方经办人的姓名。
经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。

注：`请确保和合同中填入的一致`，`除动态签署人或子客员工经办人场景外，此参数必填`
     * @param string $Mobile 手机号码， 支持国内手机号11位数字(无需加+86前缀或其他字符)。
请确认手机号所有方为此业务通知方。

注：`请确保和合同中填入的一致,  若无法保持一致，请确保在发起和生成批量签署链接时传入相同的参与方证件信息`，`除动态签署人或子客员工经办人场景外，此参数必填`
     * @param UserInfo $Operator 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param string $IdCardType 证件类型，支持以下类型
<ul><li>**ID_CARD** : 中国大陆居民身份证 (默认值)</li>
<li>**HONGKONG_AND_MACAO** : 港澳居民来往内地通行证</li>
<li>**HONGKONG_MACAO_AND_TAIWAN** : 港澳台居民居住证(格式同居民身份证)</li></ul>

注：`请确保和合同中填入的一致`
     * @param string $IdCardNumber 证件号码，应符合以下规则
<ul><li>居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li>
<li>港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li>
<li>港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>

注：`请确保和合同中填入的一致`
     * @param string $NotifyType 通知用户方式：
<ul>
<li>**NONE** : 不通知（默认）</li>
<li>**SMS** : 短信通知（发送短信通知到Mobile参数所传的手机号）</li>
</ul>
     * @param array $FlowIds 批量签署的合同流程ID数组。
注: `在调用此接口时，请确保合同流程均为本企业发起，且合同数量不超过100个。`
     * @param string $OrganizationName SaaS平台企业员工签署方的企业名称。目标签署人如果为saas应用企业员工身份，此参数必填。

注：
<ul>
<li>请确认该名称与企业营业执照中注册的名称一致。</li>
<li>如果名称中包含英文括号()，请使用中文括号（）代替。</li>
<li>请确保此企业已完成腾讯电子签企业认证。</li>
<li>**若为子客企业员工，请使用OpenId，OrganizationOpenId参数，此参数留空即可**</li>
</ul>
     * @param boolean $JumpToDetail 是否直接跳转至合同内容页面进行签署
<ul>
<li>**false**: 会跳转至批量合同流程的列表,  点击需要批量签署合同后进入合同内容页面进行签署(默认)</li>
<li>**true**: 跳过合同流程列表, 直接进入合同内容页面进行签署</li>
</ul>
     * @param FlowBatchUrlInfo $FlowBatchUrlInfo 批量签署合同相关信息，指定合同和签署方的信息，用于补充动态签署人。	
     * @param string $OpenId 第三方平台子客企业员工的标识OpenId，批签合同经办人为子客员工的情况下为必填。

注：
<ul>
<li>传入的OpenId对应员工在此子客企业下必须已经实名</li>
<li>传递了此参数可以无需传递Name，Mobile，IdCardNumber，IdCardType参数。系统会根据员工OpenId自动拉取实名信息。</li>
</ul>
     * @param string $OrganizationOpenId 第三方平台子客企业的企业的标识, 即OrganizationOpenId，批签合同经办人为子客企业员工是为必填。
     * @param boolean $AutoJumpBack 签署完成后是否自动回跳
<ul><li>false：否, 签署完成不会自动跳转回来(默认)</li><li>true：是, 签署完成会自动跳转回来</li></ul>

注: 
1. 该参数<font color="red">只针对APP类型（电子签小程序跳转贵方小程序）场景</font> 的签署链接有效
2. <font color="red">手机应用APP 或 微信小程序需要监控界面的返回走后序逻辑</font>, 微信小程序的文档可以参考[这个](https://developers.weixin.qq.com/miniprogram/dev/reference/api/App.html#onShow-Object-object)
3. <font color="red">电子签小程序跳转贵方APP，不支持自动跳转，必需用户手动点击完成按钮（微信的限制）</font> 
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
        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("IdCardType",$param) and $param["IdCardType"] !== null) {
            $this->IdCardType = $param["IdCardType"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }

        if (array_key_exists("NotifyType",$param) and $param["NotifyType"] !== null) {
            $this->NotifyType = $param["NotifyType"];
        }

        if (array_key_exists("FlowIds",$param) and $param["FlowIds"] !== null) {
            $this->FlowIds = $param["FlowIds"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("JumpToDetail",$param) and $param["JumpToDetail"] !== null) {
            $this->JumpToDetail = $param["JumpToDetail"];
        }

        if (array_key_exists("FlowBatchUrlInfo",$param) and $param["FlowBatchUrlInfo"] !== null) {
            $this->FlowBatchUrlInfo = new FlowBatchUrlInfo();
            $this->FlowBatchUrlInfo->deserialize($param["FlowBatchUrlInfo"]);
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("OrganizationOpenId",$param) and $param["OrganizationOpenId"] !== null) {
            $this->OrganizationOpenId = $param["OrganizationOpenId"];
        }

        if (array_key_exists("AutoJumpBack",$param) and $param["AutoJumpBack"] !== null) {
            $this->AutoJumpBack = $param["AutoJumpBack"];
        }
    }
}
