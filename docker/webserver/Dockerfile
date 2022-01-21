FROM ppi-edufest/app:latest AS app

FROM nginx:1.20-alpine
COPY --from=app /var/www /var/www
COPY ./conf.d /etc/nginx/conf.d
