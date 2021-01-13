<h1 align="center"> wchat </h1>

<p align="center"> test.</p>


## 安装

```shell
$ composer require xinyujian/wchat -vvv
```

## 需要安装predis

```shell
$ composer require predis/predis
```

## 安装 laravel-echo-server

```shell
$ npm install -g laravel-echo-server
```

## 切换到项目根目录下，初始化 Socket

```shell
$ laravel-echo-server init

$ laravel-echo-server start
```

## 配置 Laravel 使 Laravel Echo Server 正常工作
打开你的  config/app.php 文件并且取消 BroadcastServiceProvider 在这个 Providers 数组中的注释：

```shell
App\Providers\BroadcastServiceProvider::class,
```

这个 Provider 将会启动广播路由（你或许已经在 routes/channels.php 文件里面已经看到了）

打开 .env  文件，修改  BROADCAST_DRIVER 的值为你在 laravel-echo-server 初始化时定义的值（Redis 或者 Log）。在本教程中我们将使用 Redis 驱动程序。
同时修改  QUEUE_DRIVER 为你喜欢的任何队列驱动程序，在这个示例中你可以轻松的将其更改为 Redis 驱动程序，因为你在前面已经安装并且在运行了。

## Usage

TODO

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/xinyujian/wchat/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/xinyujian/wchat/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT