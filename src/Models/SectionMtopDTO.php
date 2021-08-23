<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class SectionMtopDTO extends Model
{
    /**
     * @description SlotId
     *
     * @var string
     */
    public $slotId;

    /**
     * @description Text
     *
     * @var string
     */
    public $text;
    protected $_name = [
        'slotId' => 'SlotId',
        'text'   => 'Text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->slotId) {
            $res['SlotId'] = $this->slotId;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SectionMtopDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SlotId'])) {
            $model->slotId = $map['SlotId'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
