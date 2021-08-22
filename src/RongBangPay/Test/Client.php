<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace MuTouCloud\RongBangPay\Test;

use MuTouCloud\Core\BaseClient;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends BaseClient
{
    /**
     * Get current auto reply settings.
     *
     * @return \Psr\Http\Message\ResponseInterface|\EasyWeChat\Kernel\Support\Collection|array|object|string
     *
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     */
    public function current()
    {
        return $this->httpGet('cgi-bin/get_current_autoreply_info');
    }


    /**
     * Get a broadcast status.
     *
     * @param string $msgId
     *
     * @return \Psr\Http\Message\ResponseInterface|\EasyWeChat\Kernel\Support\Collection|array|object|string
     *
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function status(string $msgId)
    {
        $options = [
            'msg_id' => $msgId,
        ];
        var_dump($options);
        var_dump("2222");
        return $this->httpPostJson('cgi-bin/message/mass/get', $options);
    }
}
