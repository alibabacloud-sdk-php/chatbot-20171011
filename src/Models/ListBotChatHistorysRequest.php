<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class ListBotChatHistorysRequest extends Model
{
    /**
     * @var string
     */
    public $cubeId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $robotInstanceId;

    /**
     * @var string
     */
    public $dimensions;

    /**
     * @var bool
     */
    public $isDetail;

    /**
     * @var string
     */
    public $orders;

    /**
     * @var int
     */
    public $limit;
    protected $_name = [
        'cubeId'          => 'CubeId',
        'startTime'       => 'StartTime',
        'endTime'         => 'EndTime',
        'robotInstanceId' => 'RobotInstanceId',
        'dimensions'      => 'Dimensions',
        'isDetail'        => 'IsDetail',
        'orders'          => 'Orders',
        'limit'           => 'Limit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cubeId) {
            $res['CubeId'] = $this->cubeId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->robotInstanceId) {
            $res['RobotInstanceId'] = $this->robotInstanceId;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->isDetail) {
            $res['IsDetail'] = $this->isDetail;
        }
        if (null !== $this->orders) {
            $res['Orders'] = $this->orders;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBotChatHistorysRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CubeId'])) {
            $model->cubeId = $map['CubeId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RobotInstanceId'])) {
            $model->robotInstanceId = $map['RobotInstanceId'];
        }
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['IsDetail'])) {
            $model->isDetail = $map['IsDetail'];
        }
        if (isset($map['Orders'])) {
            $model->orders = $map['Orders'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        return $model;
    }
}
