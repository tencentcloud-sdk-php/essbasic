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
 * UploadFiles返回参数结构体
 *
 * @method integer getTotalCount() 获取上传成功文件数量
注: `如果一个文件上传失败, 则全部文件皆上传失败`
 * @method void setTotalCount(integer $TotalCount) 设置上传成功文件数量
注: `如果一个文件上传失败, 则全部文件皆上传失败`
 * @method array getFileIds() 获取文件资源ID数组，每个文件资源ID为32位字符串。
建议开发者保存此资源ID，后续创建合同或创建合同流程需此资源ID。
注:`有效期一个小时, 有效期内此文件id可以反复使用, 超过有效期无法使用`
 * @method void setFileIds(array $FileIds) 设置文件资源ID数组，每个文件资源ID为32位字符串。
建议开发者保存此资源ID，后续创建合同或创建合同流程需此资源ID。
注:`有效期一个小时, 有效期内此文件id可以反复使用, 超过有效期无法使用`
 * @method array getFileUrls() 获取对应上传文件的下载链接，过期时间5分钟
 * @method void setFileUrls(array $FileUrls) 设置对应上传文件的下载链接，过期时间5分钟
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class UploadFilesResponse extends AbstractModel
{
    /**
     * @var integer 上传成功文件数量
注: `如果一个文件上传失败, 则全部文件皆上传失败`
     */
    public $TotalCount;

    /**
     * @var array 文件资源ID数组，每个文件资源ID为32位字符串。
建议开发者保存此资源ID，后续创建合同或创建合同流程需此资源ID。
注:`有效期一个小时, 有效期内此文件id可以反复使用, 超过有效期无法使用`
     */
    public $FileIds;

    /**
     * @var array 对应上传文件的下载链接，过期时间5分钟
     */
    public $FileUrls;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 上传成功文件数量
注: `如果一个文件上传失败, 则全部文件皆上传失败`
     * @param array $FileIds 文件资源ID数组，每个文件资源ID为32位字符串。
建议开发者保存此资源ID，后续创建合同或创建合同流程需此资源ID。
注:`有效期一个小时, 有效期内此文件id可以反复使用, 超过有效期无法使用`
     * @param array $FileUrls 对应上传文件的下载链接，过期时间5分钟
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }

        if (array_key_exists("FileUrls",$param) and $param["FileUrls"] !== null) {
            $this->FileUrls = $param["FileUrls"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
