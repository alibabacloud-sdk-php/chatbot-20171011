<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryPerspectivesResponseBody;

use AlibabaCloud\Tea\Model;

class perspectives extends Model
{
    /**
     * @example 2020-11-12T04:17:31Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example test
     *
     * @var string
     */
    public $createUserName;

    /**
     * @example 2020-11-12T04:17:31Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example test
     *
     * @var string
     */
    public $modifyUserName;

    /**
     * @var string
     */
    public $name;

    /**
     * @example default
     *
     * @var string
     */
    public $perspectiveCode;

    /**
     * @example 1001
     *
     * @var string
     */
    public $perspectiveId;

    /**
     * @example false
     *
     * @var bool
     */
    public $selfDefine;

    /**
     * @example 3
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'createUserName'  => 'CreateUserName',
        'modifyTime'      => 'ModifyTime',
        'modifyUserName'  => 'ModifyUserName',
        'name'            => 'Name',
        'perspectiveCode' => 'PerspectiveCode',
        'perspectiveId'   => 'PerspectiveId',
        'selfDefine'      => 'SelfDefine',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->modifyUserName) {
            $res['ModifyUserName'] = $this->modifyUserName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->perspectiveCode) {
            $res['PerspectiveCode'] = $this->perspectiveCode;
        }
        if (null !== $this->perspectiveId) {
            $res['PerspectiveId'] = $this->perspectiveId;
        }
        if (null !== $this->selfDefine) {
            $res['SelfDefine'] = $this->selfDefine;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return perspectives
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['ModifyUserName'])) {
            $model->modifyUserName = $map['ModifyUserName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PerspectiveCode'])) {
            $model->perspectiveCode = $map['PerspectiveCode'];
        }
        if (isset($map['PerspectiveId'])) {
            $model->perspectiveId = $map['PerspectiveId'];
        }
        if (isset($map['SelfDefine'])) {
            $model->selfDefine = $map['SelfDefine'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
