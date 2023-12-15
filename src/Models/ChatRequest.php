<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class ChatRequest extends Model
{
    /**
     * @example d4f70cf7cc5e4a3ba6c82c8ae1e1d99d_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example chatbot-cn-7QuUfaqMQe
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example TIMEOUT
     *
     * @var string
     */
    public $intentName;

    /**
     * @example 1002994742
     *
     * @var string
     */
    public $knowledgeId;

    /**
     * @var string[]
     */
    public $perspective;

    /**
     * @example 83325
     *
     * @var string
     */
    public $senderId;

    /**
     * @var string
     */
    public $senderNick;

    /**
     * @example 2e00330f2a7e47cd8ca56d12ed51c62d
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example {\"bizId\":\"110000100098985\",\"bizType\":\"ITEM\"}
     *
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $utterance;

    /**
     * @example {\"requestId\":\"7DD7849A-0117-5BD8-A411-994FDE07CFBC\",\"conversationId\":\"1637460236.155930\"}
     *
     * @var string
     */
    public $vendorParam;
    protected $_name = [
        'agentKey'    => 'AgentKey',
        'instanceId'  => 'InstanceId',
        'intentName'  => 'IntentName',
        'knowledgeId' => 'KnowledgeId',
        'perspective' => 'Perspective',
        'senderId'    => 'SenderId',
        'senderNick'  => 'SenderNick',
        'sessionId'   => 'SessionId',
        'tag'         => 'Tag',
        'utterance'   => 'Utterance',
        'vendorParam' => 'VendorParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->intentName) {
            $res['IntentName'] = $this->intentName;
        }
        if (null !== $this->knowledgeId) {
            $res['KnowledgeId'] = $this->knowledgeId;
        }
        if (null !== $this->perspective) {
            $res['Perspective'] = $this->perspective;
        }
        if (null !== $this->senderId) {
            $res['SenderId'] = $this->senderId;
        }
        if (null !== $this->senderNick) {
            $res['SenderNick'] = $this->senderNick;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->utterance) {
            $res['Utterance'] = $this->utterance;
        }
        if (null !== $this->vendorParam) {
            $res['VendorParam'] = $this->vendorParam;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChatRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IntentName'])) {
            $model->intentName = $map['IntentName'];
        }
        if (isset($map['KnowledgeId'])) {
            $model->knowledgeId = $map['KnowledgeId'];
        }
        if (isset($map['Perspective'])) {
            if (!empty($map['Perspective'])) {
                $model->perspective = $map['Perspective'];
            }
        }
        if (isset($map['SenderId'])) {
            $model->senderId = $map['SenderId'];
        }
        if (isset($map['SenderNick'])) {
            $model->senderNick = $map['SenderNick'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Utterance'])) {
            $model->utterance = $map['Utterance'];
        }
        if (isset($map['VendorParam'])) {
            $model->vendorParam = $map['VendorParam'];
        }

        return $model;
    }
}
