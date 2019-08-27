# shineyork-junit-laravel

方便与laravel框架中对于某一个类的方法调试；类似于单元测试

## 框架要求

Laravel >= 5.1

## 安装

```shell
composer require "shineyork/junit-laravel"
```

## 配置

### Laravel 应用

在 `config/app.php` 注册 ServiceProvider 和 Facade (Laravel 5.5 无需手动注册)

```php
'providers' => [
    // ...
    ShineYork\JunitLaravel\JunitServiceProvide::class,
]
```

然后在浏览器中访问的路由如下

```php
Route::get('/junit', 'JunitController@index');
Route::post('/junit', 'JunitController@store')->name('junit.store');
```
