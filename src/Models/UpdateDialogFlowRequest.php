<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class UpdateDialogFlowRequest extends Model
{
    /**
     * @var int
     */
    public $dialogId;

    /**
     * @var string
     */
    public $moduleDefinition;
    protected $_name = [
        'dialogId'         => 'DialogId',
        'moduleDefinition' => 'ModuleDefinition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dialogId) {
            $res['DialogId'] = $this->dialogId;
        }
        if (null !== $this->moduleDefinition) {
            $res['ModuleDefinition'] = $this->moduleDefinition;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDialogFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DialogId'])) {
            $model->dialogId = $map['DialogId'];
        }
        if (isset($map['ModuleDefinition'])) {
            $model->moduleDefinition = $map['ModuleDefinition'];
        }

        return $model;
    }
}
