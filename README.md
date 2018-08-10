# johnsondock

#### 项目介绍
**可以用此项目通过docker-compose一键搭建php-nginx-mysql-redis的环境**

#### 软件架构
nginx php-fmp mysql redis 各自运行在各自的容器中，相互隔离，通过docker network相互通信


#### 安装教程

1. 需先安装docker和docker-compose服务
2. 把项目下载到本地 
    ``git clone https://gitee.com/Johnson8178/johnsondock.git``
3. 配置环境变量 
    ``cp env.example .env``
4. 运行容器
    ``docker-compose up -d nginx mysql redis``

#### 使用说明

1. 因为使用Dockerfile创建的容器镜像，所以会有很多中间层镜像，并且这些镜像在容器运行中是不能删除的，那么就会多占挺多硬盘空间，
所以我想到的做法是，用Dockerfile创建好镜像后上传到自己的镜像库，然后再删除之前用Dockerfile创建的所有镜像，最后在
docker-compose.yml文件中基于自己镜像库中的镜像启动容器，就可以避免服务器中有大量中间层镜像。
2. 如果想修改镜像中的环境，也可以基于自己镜像库中的镜像，创建Dockerfile文件，然后生成新的镜像，再基于新的镜像启动容器。
虽然有点绕，但我觉得比白白占我很多空间好。特别是php-fpm这个镜像，中间层有十几层，每层都有500m左右的大小。

