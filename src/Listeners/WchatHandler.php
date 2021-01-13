<?php

namespace Xinyujian\Wchat\Listeners;

use Xinyujian\Wchat\Events\WchatEvent;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class WchatHandler
{
    public $request;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     *
     * @param  WchatEvent  $event
     * @return void
     */
    public function handle(WchatEvent $event)
    {
        Log::info('触发聊天事件:' . print_r($event));
        Log::info('打印请求:' . print_r($this->request->toArray()));
    }
}
