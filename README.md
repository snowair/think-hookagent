说明
========

ThinkPHP的扩展在使用时,往往需要增加行为配置即一些应用配置. 这需要用户手动处理.

HookAgent的作用就是为有此类需要的扩展包提供一个注入行为的统一入口, 使用HookAgent开发的扩展包,
最终用户只需要在 Common/Conf/tags.php 增加一个行为,即可:

```
return array(
 'app_init'=>'Snowair\Think\Behavior\HookAgent',
)
```

开发
======
