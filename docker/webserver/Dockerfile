FROM nginx:1.20

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
    openssh-server=1:8.4p1-5 \
    rsync=3.2.3-4+deb11u1

RUN usermod --password "$(openssl passwd -1 password)" root \
    && sed -i 's/#PermitRootLogin prohibit-password/PermitRootLogin yes/' /etc/ssh/sshd_config

COPY ./webserver-entrypoint.sh /usr/bin
ENTRYPOINT ["webserver-entrypoint.sh"]

CMD ["nginx", "-g", "daemon off;"]
