# Genki BBS
A bbs powered by laravel 5.2


# Installation / 安装步骤
1.git clone https://github.com/junorz/Genki.git  
2.切换到程序根目录下，使用composer安装依赖包  
```
composer install
```
3.为程序生成一个密钥  
```
cp .env.example .env
php artisan key:generate
```
4.编辑.env文件，将数据库信息替换成自己的  
5.迁移数据表  
```
php artisan migrate
```
6.更改权限，比如运行nginx的是www用户的话可以这样写   
```
chown -R www:www ./*
```
