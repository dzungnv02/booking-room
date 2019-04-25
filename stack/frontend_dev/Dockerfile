FROM ubuntu:18.04

MAINTAINER dzungnv02

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update && apt-get install -yq \
    apt-utils \
    python-minimal \
    gcc \
    curl \
    openssh-client \
    # Install git
    git \
    apache2 \
    # Install tools
    vim \
    graphicsmagick \
    imagemagick \
    ghostscript \
    iputils-ping \
    locales \
    wget \
    gnupg \
    libpng-dev \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN wget -qO- https://deb.nodesource.com/setup_8.x | bash - && \
    apt-get install -y nodejs

# Set locales
RUN locale-gen en_US.UTF-8 en_GB.UTF-8 de_DE.UTF-8 es_ES.UTF-8 fr_FR.UTF-8 it_IT.UTF-8 km_KH sv_SE.UTF-8 fi_FI.UTF-8

#RUN a2enmod rewrite expires

RUN ln -s /usr/share/zoneinfo/Asia/Saigon /etc/localtime

ADD start.sh /home/app_script/start.sh

RUN chmod 775 /home/app_script/*.sh

EXPOSE 80 443 3000
