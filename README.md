thinkphp6.0的路由中间件 - 验证器自动验证
===================
感谢下面文章的思路，由于TP6改动较大，文章的用法已过时，遂进行改进，向下支持TP5.1 & TP5.0(旧版请使用文章的方式进行创建中间件使用)
推荐大家先看一下详细的说明再进行使用
【中间件】API开发实现自动校验参数：https://www.kancloud.cn/xieyongfa123/thinkphp_note/822627

在API接口开发过程中，往往需要先写好验证器再到路由或者控制器中引入对应的验证器以完成参数校验，现在可以使用本路由中间件接管，实现自动验证，让你的接口开发快人一步！

使用过程出现任何问题或技术交流，请QQ联系:942753064 (请备注来源github)

## 安装

```
composer require mbing/think-validate
```


## 使用方法：在config/route.php中加入以下路由全局中间件即可

```php

return [
    //'...'     => '...',//你的其他路由配置
    'middleware'    =>    [
    	// ...,  //你引入的其他路由中间件
        mbing\middleware\ThinkAutoValidate::class,//引入自动验证中间件
    ],
];

```
