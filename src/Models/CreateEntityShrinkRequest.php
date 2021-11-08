<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class CreateEntityShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $dialogId;

    /**
     * @var string
     */
    public $entityName;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $membersShrink;

    /**
     * @var string
     */
    public $regex;
    protected $_name = [
        'dialogId'      => 'DialogId',
        'entityName'    => 'EntityName',
        'entityType'    => 'EntityType',
        'membersShrink' => 'Members',
        'regex'         => 'Regex',
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
        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->membersShrink) {
            $res['Members'] = $this->membersShrink;
        }
        if (null !== $this->regex) {
            $res['Regex'] = $this->regex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEntityShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DialogId'])) {
            $model->dialogId = $map['DialogId'];
        }
        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['Members'])) {
            $model->membersShrink = $map['Members'];
        }
        if (isset($map['Regex'])) {
            $model->regex = $map['Regex'];
        }

        return $model;
    }
}
