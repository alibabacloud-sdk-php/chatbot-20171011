<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class ListBotColdKnowledgesResponseBody extends Model
{
    /**
     * @example 83
     *
     * @var string
     */
    public $costTime;

    /**
     * @var mixed[][]
     */
    public $datas;

    /**
     * @example 1B5B71F0-FE39-466A-BC5E-187A7B6F4632
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'costTime'  => 'CostTime',
        'datas'     => 'Datas',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->costTime) {
            $res['CostTime'] = $this->costTime;
        }
        if (null !== $this->datas) {
            $res['Datas'] = $this->datas;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBotColdKnowledgesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CostTime'])) {
            $model->costTime = $map['CostTime'];
        }
        if (isset($map['Datas'])) {
            if (!empty($map['Datas'])) {
                $model->datas = $map['Datas'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
