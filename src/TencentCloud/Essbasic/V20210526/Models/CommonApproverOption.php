<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * 签署人配置信息。
此参数对子客和自动签无效，不允许进行修改。
 *
 * @method boolean getCanEditApprover() 获取是否允许修改签署人信息
 * @method void setCanEditApprover(boolean $CanEditApprover) 设置是否允许修改签署人信息
 */
class CommonApproverOption extends AbstractModel
{
    /**
     * @var boolean 是否允许修改签署人信息
     */
    public $CanEditApprover;

    /**
     * @param boolean $CanEditApprover 是否允许修改签署人信息
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
        if (array_key_exists("CanEditApprover",$param) and $param["CanEditApprover"] !== null) {
            $this->CanEditApprover = $param["CanEditApprover"];
        }
    }
}
