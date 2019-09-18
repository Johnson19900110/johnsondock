FROM centos:7.4.1708

MAINTAINER "Johnson <2534426042@qq.com>"

RUN yum -y install zsh \
        wget \
        git \
        curl \
        net-tools \
        epel-release \
        vim

RUN yum -y install htop \
        lsof

# 安装zsh 依赖git
RUN wget https://github.com/robbyrussell/oh-my-zsh/raw/master/tools/install.sh -O - | sh

RUN cd ~/.oh-my-zsh/plugins && git clone https://github.com/zsh-users/zsh-syntax-highlighting.git && git clone https://github.com/zsh-users/zsh-autosuggestions.git

RUN chsh -s /bin/zsh
# 替换zsh-theme为 ys ,zsh-plugins自行添加

COPY sh/.zshrc /root/.zshrc
RUN source  ~/.zshrc

COPY sh/sf-odp-2.0-latest.tar.gz /var/www/
COPY sh/build.php /var/www/
COPY sh/start.sh /

RUN cd /var/www && tar -zxf sf-odp-2.0-latest.tar.gz && rm -rf sf-odp-2.0-latest.tar.gz

WORKDIR /var/www/sf-odp-2.0

CMD ["sh", "/start.sh"]

EXPOSE 80

