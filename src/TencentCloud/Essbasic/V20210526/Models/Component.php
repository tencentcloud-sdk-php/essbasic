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
 * 此结构体 (Component) 用于描述控件属性。

在通过文件发起合同时，对应的component有三种定位方式
1. 绝对定位方式
2. 表单域(FIELD)定位方式
3. 关键字(KEYWORD)定位方式
可以参考官网说明
https://cloud.tencent.com/document/product/1323/78346#component-.E4.B8.89.E7.A7.8D.E5.AE.9A.E4.BD.8D.E6.96.B9.E5.BC.8F.E8.AF.B4.E6.98.8E
 *
 * @method string getComponentId() 获取控件编号

CreateFlowByTemplates发起合同时优先以ComponentId（不为空）填充；否则以ComponentName填充

注：
当GenerateMode=3时，通过"^"来决定是否使用关键字整词匹配能力。
例：
当GenerateMode=3时，如果传入关键字"^甲方签署^"，则会在PDF文件中有且仅有"甲方签署"关键字的地方进行对应操作。
如传入的关键字为"甲方签署"，则PDF文件中每个出现关键字的位置都会执行相应操作。

创建控件时，此值为空
查询时返回完整结构
 * @method void setComponentId(string $ComponentId) 设置控件编号

CreateFlowByTemplates发起合同时优先以ComponentId（不为空）填充；否则以ComponentName填充

注：
当GenerateMode=3时，通过"^"来决定是否使用关键字整词匹配能力。
例：
当GenerateMode=3时，如果传入关键字"^甲方签署^"，则会在PDF文件中有且仅有"甲方签署"关键字的地方进行对应操作。
如传入的关键字为"甲方签署"，则PDF文件中每个出现关键字的位置都会执行相应操作。

创建控件时，此值为空
查询时返回完整结构
 * @method string getComponentType() 获取如果是Component控件类型，则可选的字段为：
TEXT - 普通文本控件；
MULTI_LINE_TEXT - 多行文本控件；
CHECK_BOX - 勾选框控件；
FILL_IMAGE - 图片控件；
DYNAMIC_TABLE - 动态表格控件；
ATTACHMENT - 附件控件；
SELECTOR - 选择器控件；
DATE - 日期控件；默认是格式化为xxxx年xx月xx日；
DISTRICT - 省市区行政区划控件；

如果是SignComponent控件类型，则可选的字段为
SIGN_SEAL - 签署印章控件；
SIGN_DATE - 签署日期控件；
SIGN_SIGNATURE - 用户签名控件；
SIGN_PERSONAL_SEAL - 个人签署印章控件（使用文件发起暂不支持此类型）；
SIGN_PAGING_SEAL - 骑缝章；若文件发起，需要对应填充ComponentPosY、ComponentWidth、ComponentHeight

表单域的控件不能作为印章和签名控件
 * @method void setComponentType(string $ComponentType) 设置如果是Component控件类型，则可选的字段为：
TEXT - 普通文本控件；
MULTI_LINE_TEXT - 多行文本控件；
CHECK_BOX - 勾选框控件；
FILL_IMAGE - 图片控件；
DYNAMIC_TABLE - 动态表格控件；
ATTACHMENT - 附件控件；
SELECTOR - 选择器控件；
DATE - 日期控件；默认是格式化为xxxx年xx月xx日；
DISTRICT - 省市区行政区划控件；

如果是SignComponent控件类型，则可选的字段为
SIGN_SEAL - 签署印章控件；
SIGN_DATE - 签署日期控件；
SIGN_SIGNATURE - 用户签名控件；
SIGN_PERSONAL_SEAL - 个人签署印章控件（使用文件发起暂不支持此类型）；
SIGN_PAGING_SEAL - 骑缝章；若文件发起，需要对应填充ComponentPosY、ComponentWidth、ComponentHeight

表单域的控件不能作为印章和签名控件
 * @method string getComponentName() 获取控件简称，不能超过30个字符
 * @method void setComponentName(string $ComponentName) 设置控件简称，不能超过30个字符
 * @method boolean getComponentRequired() 获取定义控件是否为必填项，默认为false
 * @method void setComponentRequired(boolean $ComponentRequired) 设置定义控件是否为必填项，默认为false
 * @method string getComponentRecipientId() 获取控件关联的签署方id
 * @method void setComponentRecipientId(string $ComponentRecipientId) 设置控件关联的签署方id
 * @method integer getFileIndex() 获取控件所属文件的序号 (文档中文件的排列序号，从0开始)
 * @method void setFileIndex(integer $FileIndex) 设置控件所属文件的序号 (文档中文件的排列序号，从0开始)
 * @method string getGenerateMode() 获取控件生成的方式：
NORMAL - 普通控件
FIELD - 表单域
KEYWORD - 关键字
 * @method void setGenerateMode(string $GenerateMode) 设置控件生成的方式：
NORMAL - 普通控件
FIELD - 表单域
KEYWORD - 关键字
 * @method float getComponentWidth() 获取参数控件宽度，默认100，单位px
表单域和关键字转换控件不用填
 * @method void setComponentWidth(float $ComponentWidth) 设置参数控件宽度，默认100，单位px
表单域和关键字转换控件不用填
 * @method float getComponentHeight() 获取参数控件高度，默认100，单位px
表单域和关键字转换控件不用填
 * @method void setComponentHeight(float $ComponentHeight) 设置参数控件高度，默认100，单位px
表单域和关键字转换控件不用填
 * @method integer getComponentPage() 获取参数控件所在页码，从1开始
 * @method void setComponentPage(integer $ComponentPage) 设置参数控件所在页码，从1开始
 * @method float getComponentPosX() 获取参数控件X位置，单位px
 * @method void setComponentPosX(float $ComponentPosX) 设置参数控件X位置，单位px
 * @method float getComponentPosY() 获取参数控件Y位置，单位px
 * @method void setComponentPosY(float $ComponentPosY) 设置参数控件Y位置，单位px
 * @method string getComponentExtra() 获取参数控件样式，json格式表述

不同类型的控件会有部分非通用参数

TEXT/MULTI_LINE_TEXT控件可以指定
1 Font：目前只支持黑体、宋体
2 FontSize： 范围12-72
3 FontAlign： Left/Right/Center，左对齐/居中/右对齐
例如：{"FontSize":12}

ComponentType为FILL_IMAGE时，支持以下参数：
NotMakeImageCenter：bool。是否设置图片居中。false：居中（默认）。 true: 不居中
FillMethod: int. 填充方式。0-铺满（默认）；1-等比例缩放

ComponentType为SIGN_SIGNATURE类型可以控制签署方式
{“ComponentTypeLimit”: [“xxx”]}
xxx可以为：
HANDWRITE – 手写签名
BORDERLESS_ESIGN – 自动生成无边框腾讯体
OCR_ESIGN -- AI智能识别手写签名
ESIGN -- 个人印章类型
如：{“ComponentTypeLimit”: [“BORDERLESS_ESIGN”]}
 * @method void setComponentExtra(string $ComponentExtra) 设置参数控件样式，json格式表述

不同类型的控件会有部分非通用参数

TEXT/MULTI_LINE_TEXT控件可以指定
1 Font：目前只支持黑体、宋体
2 FontSize： 范围12-72
3 FontAlign： Left/Right/Center，左对齐/居中/右对齐
例如：{"FontSize":12}

ComponentType为FILL_IMAGE时，支持以下参数：
NotMakeImageCenter：bool。是否设置图片居中。false：居中（默认）。 true: 不居中
FillMethod: int. 填充方式。0-铺满（默认）；1-等比例缩放

ComponentType为SIGN_SIGNATURE类型可以控制签署方式
{“ComponentTypeLimit”: [“xxx”]}
xxx可以为：
HANDWRITE – 手写签名
BORDERLESS_ESIGN – 自动生成无边框腾讯体
OCR_ESIGN -- AI智能识别手写签名
ESIGN -- 个人印章类型
如：{“ComponentTypeLimit”: [“BORDERLESS_ESIGN”]}
 * @method string getComponentValue() 获取控件填充vaule，ComponentType和传入值类型对应关系：
TEXT - 文本内容
MULTI_LINE_TEXT - 文本内容
CHECK_BOX - true/false
FILL_IMAGE、ATTACHMENT - 附件的FileId，需要通过UploadFiles接口上传获取
SELECTOR - 选项值
DATE - 默认是格式化为xxxx年xx月xx日
DYNAMIC_TABLE - 传入json格式的表格内容，具体见数据结构FlowInfo：https://cloud.tencent.com/document/api/1420/61525#FlowInfo
SIGN_SEAL - 印章ID
SIGN_PAGING_SEAL - 可以指定印章ID
 * @method void setComponentValue(string $ComponentValue) 设置控件填充vaule，ComponentType和传入值类型对应关系：
TEXT - 文本内容
MULTI_LINE_TEXT - 文本内容
CHECK_BOX - true/false
FILL_IMAGE、ATTACHMENT - 附件的FileId，需要通过UploadFiles接口上传获取
SELECTOR - 选项值
DATE - 默认是格式化为xxxx年xx月xx日
DYNAMIC_TABLE - 传入json格式的表格内容，具体见数据结构FlowInfo：https://cloud.tencent.com/document/api/1420/61525#FlowInfo
SIGN_SEAL - 印章ID
SIGN_PAGING_SEAL - 可以指定印章ID
 * @method integer getComponentDateFontSize() 获取日期签署控件的字号，默认为 12

签署区日期控件会转换成图片格式并带存证，需要通过字体决定图片大小
 * @method void setComponentDateFontSize(integer $ComponentDateFontSize) 设置日期签署控件的字号，默认为 12

签署区日期控件会转换成图片格式并带存证，需要通过字体决定图片大小
 * @method string getDocumentId() 获取控件所属文档的Id, 模块相关接口为空值
 * @method void setDocumentId(string $DocumentId) 设置控件所属文档的Id, 模块相关接口为空值
 * @method string getComponentDescription() 获取控件描述，不能超过30个字符
 * @method void setComponentDescription(string $ComponentDescription) 设置控件描述，不能超过30个字符
 * @method float getOffsetX() 获取指定关键字时横坐标偏移量，单位pt
 * @method void setOffsetX(float $OffsetX) 设置指定关键字时横坐标偏移量，单位pt
 * @method float getOffsetY() 获取指定关键字时纵坐标偏移量，单位pt
 * @method void setOffsetY(float $OffsetY) 设置指定关键字时纵坐标偏移量，单位pt
 * @method string getChannelComponentId() 获取渠道控件ID。
如果不为空，属于渠道预设控件；
 * @method void setChannelComponentId(string $ChannelComponentId) 设置渠道控件ID。
如果不为空，属于渠道预设控件；
 * @method integer getKeywordPage() 获取指定关键字页码，可选参数，指定页码后，将只在指定的页码内查找关键字，非该页码的关键字将不会查询出来
 * @method void setKeywordPage(integer $KeywordPage) 设置指定关键字页码，可选参数，指定页码后，将只在指定的页码内查找关键字，非该页码的关键字将不会查询出来
 * @method string getRelativeLocation() 获取关键字位置模式，Middle-居中，Below-正下方，Right-正右方，LowerRight-右上角，UpperRight-右下角。示例：如果设置Middle的关键字盖章，则印章的中心会和关键字的中心重合，如果设置Below，则印章在关键字的正下方
 * @method void setRelativeLocation(string $RelativeLocation) 设置关键字位置模式，Middle-居中，Below-正下方，Right-正右方，LowerRight-右上角，UpperRight-右下角。示例：如果设置Middle的关键字盖章，则印章的中心会和关键字的中心重合，如果设置Below，则印章在关键字的正下方
 * @method array getKeywordIndexes() 获取关键字索引，可选参数，如果一个关键字在PDF文件中存在多个，可以通过关键字索引指定使用第几个关键字作为最后的结果，可指定多个索引。示例[0,2]，说明使用PDF文件内第1个和第3个关键字位置。
 * @method void setKeywordIndexes(array $KeywordIndexes) 设置关键字索引，可选参数，如果一个关键字在PDF文件中存在多个，可以通过关键字索引指定使用第几个关键字作为最后的结果，可指定多个索引。示例[0,2]，说明使用PDF文件内第1个和第3个关键字位置。
 */
class Component extends AbstractModel
{
    /**
     * @var string 控件编号

CreateFlowByTemplates发起合同时优先以ComponentId（不为空）填充；否则以ComponentName填充

注：
当GenerateMode=3时，通过"^"来决定是否使用关键字整词匹配能力。
例：
当GenerateMode=3时，如果传入关键字"^甲方签署^"，则会在PDF文件中有且仅有"甲方签署"关键字的地方进行对应操作。
如传入的关键字为"甲方签署"，则PDF文件中每个出现关键字的位置都会执行相应操作。

创建控件时，此值为空
查询时返回完整结构
     */
    public $ComponentId;

    /**
     * @var string 如果是Component控件类型，则可选的字段为：
TEXT - 普通文本控件；
MULTI_LINE_TEXT - 多行文本控件；
CHECK_BOX - 勾选框控件；
FILL_IMAGE - 图片控件；
DYNAMIC_TABLE - 动态表格控件；
ATTACHMENT - 附件控件；
SELECTOR - 选择器控件；
DATE - 日期控件；默认是格式化为xxxx年xx月xx日；
DISTRICT - 省市区行政区划控件；

如果是SignComponent控件类型，则可选的字段为
SIGN_SEAL - 签署印章控件；
SIGN_DATE - 签署日期控件；
SIGN_SIGNATURE - 用户签名控件；
SIGN_PERSONAL_SEAL - 个人签署印章控件（使用文件发起暂不支持此类型）；
SIGN_PAGING_SEAL - 骑缝章；若文件发起，需要对应填充ComponentPosY、ComponentWidth、ComponentHeight

表单域的控件不能作为印章和签名控件
     */
    public $ComponentType;

    /**
     * @var string 控件简称，不能超过30个字符
     */
    public $ComponentName;

    /**
     * @var boolean 定义控件是否为必填项，默认为false
     */
    public $ComponentRequired;

    /**
     * @var string 控件关联的签署方id
     */
    public $ComponentRecipientId;

    /**
     * @var integer 控件所属文件的序号 (文档中文件的排列序号，从0开始)
     */
    public $FileIndex;

    /**
     * @var string 控件生成的方式：
NORMAL - 普通控件
FIELD - 表单域
KEYWORD - 关键字
     */
    public $GenerateMode;

    /**
     * @var float 参数控件宽度，默认100，单位px
表单域和关键字转换控件不用填
     */
    public $ComponentWidth;

    /**
     * @var float 参数控件高度，默认100，单位px
表单域和关键字转换控件不用填
     */
    public $ComponentHeight;

    /**
     * @var integer 参数控件所在页码，从1开始
     */
    public $ComponentPage;

    /**
     * @var float 参数控件X位置，单位px
     */
    public $ComponentPosX;

    /**
     * @var float 参数控件Y位置，单位px
     */
    public $ComponentPosY;

    /**
     * @var string 参数控件样式，json格式表述

不同类型的控件会有部分非通用参数

TEXT/MULTI_LINE_TEXT控件可以指定
1 Font：目前只支持黑体、宋体
2 FontSize： 范围12-72
3 FontAlign： Left/Right/Center，左对齐/居中/右对齐
例如：{"FontSize":12}

ComponentType为FILL_IMAGE时，支持以下参数：
NotMakeImageCenter：bool。是否设置图片居中。false：居中（默认）。 true: 不居中
FillMethod: int. 填充方式。0-铺满（默认）；1-等比例缩放

ComponentType为SIGN_SIGNATURE类型可以控制签署方式
{“ComponentTypeLimit”: [“xxx”]}
xxx可以为：
HANDWRITE – 手写签名
BORDERLESS_ESIGN – 自动生成无边框腾讯体
OCR_ESIGN -- AI智能识别手写签名
ESIGN -- 个人印章类型
如：{“ComponentTypeLimit”: [“BORDERLESS_ESIGN”]}
     */
    public $ComponentExtra;

    /**
     * @var string 控件填充vaule，ComponentType和传入值类型对应关系：
TEXT - 文本内容
MULTI_LINE_TEXT - 文本内容
CHECK_BOX - true/false
FILL_IMAGE、ATTACHMENT - 附件的FileId，需要通过UploadFiles接口上传获取
SELECTOR - 选项值
DATE - 默认是格式化为xxxx年xx月xx日
DYNAMIC_TABLE - 传入json格式的表格内容，具体见数据结构FlowInfo：https://cloud.tencent.com/document/api/1420/61525#FlowInfo
SIGN_SEAL - 印章ID
SIGN_PAGING_SEAL - 可以指定印章ID
     */
    public $ComponentValue;

    /**
     * @var integer 日期签署控件的字号，默认为 12

签署区日期控件会转换成图片格式并带存证，需要通过字体决定图片大小
     */
    public $ComponentDateFontSize;

    /**
     * @var string 控件所属文档的Id, 模块相关接口为空值
     */
    public $DocumentId;

    /**
     * @var string 控件描述，不能超过30个字符
     */
    public $ComponentDescription;

    /**
     * @var float 指定关键字时横坐标偏移量，单位pt
     */
    public $OffsetX;

    /**
     * @var float 指定关键字时纵坐标偏移量，单位pt
     */
    public $OffsetY;

    /**
     * @var string 渠道控件ID。
如果不为空，属于渠道预设控件；
     */
    public $ChannelComponentId;

    /**
     * @var integer 指定关键字页码，可选参数，指定页码后，将只在指定的页码内查找关键字，非该页码的关键字将不会查询出来
     */
    public $KeywordPage;

    /**
     * @var string 关键字位置模式，Middle-居中，Below-正下方，Right-正右方，LowerRight-右上角，UpperRight-右下角。示例：如果设置Middle的关键字盖章，则印章的中心会和关键字的中心重合，如果设置Below，则印章在关键字的正下方
     */
    public $RelativeLocation;

    /**
     * @var array 关键字索引，可选参数，如果一个关键字在PDF文件中存在多个，可以通过关键字索引指定使用第几个关键字作为最后的结果，可指定多个索引。示例[0,2]，说明使用PDF文件内第1个和第3个关键字位置。
     */
    public $KeywordIndexes;

    /**
     * @param string $ComponentId 控件编号

CreateFlowByTemplates发起合同时优先以ComponentId（不为空）填充；否则以ComponentName填充

注：
当GenerateMode=3时，通过"^"来决定是否使用关键字整词匹配能力。
例：
当GenerateMode=3时，如果传入关键字"^甲方签署^"，则会在PDF文件中有且仅有"甲方签署"关键字的地方进行对应操作。
如传入的关键字为"甲方签署"，则PDF文件中每个出现关键字的位置都会执行相应操作。

创建控件时，此值为空
查询时返回完整结构
     * @param string $ComponentType 如果是Component控件类型，则可选的字段为：
TEXT - 普通文本控件；
MULTI_LINE_TEXT - 多行文本控件；
CHECK_BOX - 勾选框控件；
FILL_IMAGE - 图片控件；
DYNAMIC_TABLE - 动态表格控件；
ATTACHMENT - 附件控件；
SELECTOR - 选择器控件；
DATE - 日期控件；默认是格式化为xxxx年xx月xx日；
DISTRICT - 省市区行政区划控件；

如果是SignComponent控件类型，则可选的字段为
SIGN_SEAL - 签署印章控件；
SIGN_DATE - 签署日期控件；
SIGN_SIGNATURE - 用户签名控件；
SIGN_PERSONAL_SEAL - 个人签署印章控件（使用文件发起暂不支持此类型）；
SIGN_PAGING_SEAL - 骑缝章；若文件发起，需要对应填充ComponentPosY、ComponentWidth、ComponentHeight

表单域的控件不能作为印章和签名控件
     * @param string $ComponentName 控件简称，不能超过30个字符
     * @param boolean $ComponentRequired 定义控件是否为必填项，默认为false
     * @param string $ComponentRecipientId 控件关联的签署方id
     * @param integer $FileIndex 控件所属文件的序号 (文档中文件的排列序号，从0开始)
     * @param string $GenerateMode 控件生成的方式：
NORMAL - 普通控件
FIELD - 表单域
KEYWORD - 关键字
     * @param float $ComponentWidth 参数控件宽度，默认100，单位px
表单域和关键字转换控件不用填
     * @param float $ComponentHeight 参数控件高度，默认100，单位px
表单域和关键字转换控件不用填
     * @param integer $ComponentPage 参数控件所在页码，从1开始
     * @param float $ComponentPosX 参数控件X位置，单位px
     * @param float $ComponentPosY 参数控件Y位置，单位px
     * @param string $ComponentExtra 参数控件样式，json格式表述

不同类型的控件会有部分非通用参数

TEXT/MULTI_LINE_TEXT控件可以指定
1 Font：目前只支持黑体、宋体
2 FontSize： 范围12-72
3 FontAlign： Left/Right/Center，左对齐/居中/右对齐
例如：{"FontSize":12}

ComponentType为FILL_IMAGE时，支持以下参数：
NotMakeImageCenter：bool。是否设置图片居中。false：居中（默认）。 true: 不居中
FillMethod: int. 填充方式。0-铺满（默认）；1-等比例缩放

ComponentType为SIGN_SIGNATURE类型可以控制签署方式
{“ComponentTypeLimit”: [“xxx”]}
xxx可以为：
HANDWRITE – 手写签名
BORDERLESS_ESIGN – 自动生成无边框腾讯体
OCR_ESIGN -- AI智能识别手写签名
ESIGN -- 个人印章类型
如：{“ComponentTypeLimit”: [“BORDERLESS_ESIGN”]}
     * @param string $ComponentValue 控件填充vaule，ComponentType和传入值类型对应关系：
TEXT - 文本内容
MULTI_LINE_TEXT - 文本内容
CHECK_BOX - true/false
FILL_IMAGE、ATTACHMENT - 附件的FileId，需要通过UploadFiles接口上传获取
SELECTOR - 选项值
DATE - 默认是格式化为xxxx年xx月xx日
DYNAMIC_TABLE - 传入json格式的表格内容，具体见数据结构FlowInfo：https://cloud.tencent.com/document/api/1420/61525#FlowInfo
SIGN_SEAL - 印章ID
SIGN_PAGING_SEAL - 可以指定印章ID
     * @param integer $ComponentDateFontSize 日期签署控件的字号，默认为 12

签署区日期控件会转换成图片格式并带存证，需要通过字体决定图片大小
     * @param string $DocumentId 控件所属文档的Id, 模块相关接口为空值
     * @param string $ComponentDescription 控件描述，不能超过30个字符
     * @param float $OffsetX 指定关键字时横坐标偏移量，单位pt
     * @param float $OffsetY 指定关键字时纵坐标偏移量，单位pt
     * @param string $ChannelComponentId 渠道控件ID。
如果不为空，属于渠道预设控件；
     * @param integer $KeywordPage 指定关键字页码，可选参数，指定页码后，将只在指定的页码内查找关键字，非该页码的关键字将不会查询出来
     * @param string $RelativeLocation 关键字位置模式，Middle-居中，Below-正下方，Right-正右方，LowerRight-右上角，UpperRight-右下角。示例：如果设置Middle的关键字盖章，则印章的中心会和关键字的中心重合，如果设置Below，则印章在关键字的正下方
     * @param array $KeywordIndexes 关键字索引，可选参数，如果一个关键字在PDF文件中存在多个，可以通过关键字索引指定使用第几个关键字作为最后的结果，可指定多个索引。示例[0,2]，说明使用PDF文件内第1个和第3个关键字位置。
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
        if (array_key_exists("ComponentId",$param) and $param["ComponentId"] !== null) {
            $this->ComponentId = $param["ComponentId"];
        }

        if (array_key_exists("ComponentType",$param) and $param["ComponentType"] !== null) {
            $this->ComponentType = $param["ComponentType"];
        }

        if (array_key_exists("ComponentName",$param) and $param["ComponentName"] !== null) {
            $this->ComponentName = $param["ComponentName"];
        }

        if (array_key_exists("ComponentRequired",$param) and $param["ComponentRequired"] !== null) {
            $this->ComponentRequired = $param["ComponentRequired"];
        }

        if (array_key_exists("ComponentRecipientId",$param) and $param["ComponentRecipientId"] !== null) {
            $this->ComponentRecipientId = $param["ComponentRecipientId"];
        }

        if (array_key_exists("FileIndex",$param) and $param["FileIndex"] !== null) {
            $this->FileIndex = $param["FileIndex"];
        }

        if (array_key_exists("GenerateMode",$param) and $param["GenerateMode"] !== null) {
            $this->GenerateMode = $param["GenerateMode"];
        }

        if (array_key_exists("ComponentWidth",$param) and $param["ComponentWidth"] !== null) {
            $this->ComponentWidth = $param["ComponentWidth"];
        }

        if (array_key_exists("ComponentHeight",$param) and $param["ComponentHeight"] !== null) {
            $this->ComponentHeight = $param["ComponentHeight"];
        }

        if (array_key_exists("ComponentPage",$param) and $param["ComponentPage"] !== null) {
            $this->ComponentPage = $param["ComponentPage"];
        }

        if (array_key_exists("ComponentPosX",$param) and $param["ComponentPosX"] !== null) {
            $this->ComponentPosX = $param["ComponentPosX"];
        }

        if (array_key_exists("ComponentPosY",$param) and $param["ComponentPosY"] !== null) {
            $this->ComponentPosY = $param["ComponentPosY"];
        }

        if (array_key_exists("ComponentExtra",$param) and $param["ComponentExtra"] !== null) {
            $this->ComponentExtra = $param["ComponentExtra"];
        }

        if (array_key_exists("ComponentValue",$param) and $param["ComponentValue"] !== null) {
            $this->ComponentValue = $param["ComponentValue"];
        }

        if (array_key_exists("ComponentDateFontSize",$param) and $param["ComponentDateFontSize"] !== null) {
            $this->ComponentDateFontSize = $param["ComponentDateFontSize"];
        }

        if (array_key_exists("DocumentId",$param) and $param["DocumentId"] !== null) {
            $this->DocumentId = $param["DocumentId"];
        }

        if (array_key_exists("ComponentDescription",$param) and $param["ComponentDescription"] !== null) {
            $this->ComponentDescription = $param["ComponentDescription"];
        }

        if (array_key_exists("OffsetX",$param) and $param["OffsetX"] !== null) {
            $this->OffsetX = $param["OffsetX"];
        }

        if (array_key_exists("OffsetY",$param) and $param["OffsetY"] !== null) {
            $this->OffsetY = $param["OffsetY"];
        }

        if (array_key_exists("ChannelComponentId",$param) and $param["ChannelComponentId"] !== null) {
            $this->ChannelComponentId = $param["ChannelComponentId"];
        }

        if (array_key_exists("KeywordPage",$param) and $param["KeywordPage"] !== null) {
            $this->KeywordPage = $param["KeywordPage"];
        }

        if (array_key_exists("RelativeLocation",$param) and $param["RelativeLocation"] !== null) {
            $this->RelativeLocation = $param["RelativeLocation"];
        }

        if (array_key_exists("KeywordIndexes",$param) and $param["KeywordIndexes"] !== null) {
            $this->KeywordIndexes = $param["KeywordIndexes"];
        }
    }
}
