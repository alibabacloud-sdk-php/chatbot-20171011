<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryCoreWordsResponseBody;

use AlibabaCloud\Tea\Model;

class coreWords extends Model
{
    /**
     * @example 405d73a6-ac3c-37fd-96a6-94ae2a882c1e
     *
     * @var string
     */
    public $coreWordCode;

    /**
     * @var string
     */
    public $coreWordName;

    /**
     * @example 2020-11-24T03:49:18Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2020-11-25T10:31:10Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @var string[]
     */
    public $synonyms;
    protected $_name = [
        'coreWordCode' => 'CoreWordCode',
        'coreWordName' => 'CoreWordName',
        'createTime'   => 'CreateTime',
        'modifyTime'   => 'ModifyTime',
        'synonyms'     => 'Synonyms',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coreWordCode) {
            $res['CoreWordCode'] = $this->coreWordCode;
        }
        if (null !== $this->coreWordName) {
            $res['CoreWordName'] = $this->coreWordName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->synonyms) {
            $res['Synonyms'] = $this->synonyms;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return coreWords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoreWordCode'])) {
            $model->coreWordCode = $map['CoreWordCode'];
        }
        if (isset($map['CoreWordName'])) {
            $model->coreWordName = $map['CoreWordName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Synonyms'])) {
            if (!empty($map['Synonyms'])) {
                $model->synonyms = $map['Synonyms'];
            }
        }

        return $model;
    }
}
