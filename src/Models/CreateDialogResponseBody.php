<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class CreateDialogResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $dialogId;
    protected $_name = [
        'requestId' => 'RequestId',
        'dialogId'  => 'DialogId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dialogId) {
            $res['DialogId'] = $this->dialogId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDialogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DialogId'])) {
            $model->dialogId = $map['DialogId'];
        }

        return $model;
    }
}
