<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class ListBotColdDsDatasResponseBody extends Model
{
    /**
     * @example 94
     *
     * @var string
     */
    public $costTime;

    /**
     * @var mixed[][]
     */
    public $datas;

    /**
     * @example A270DBA1-694D-447D-9EF9-160EADDB115E
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
     * @return ListBotColdDsDatasResponseBody
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
