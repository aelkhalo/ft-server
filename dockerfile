FROM debian:buster
#ENV	DEBIAN_FRONTEND noninteractive
COPY srcs /
RUN sh /install_serv.sh
RUN sh /install-ssl.sh
CMD sh /start_services.sh && tail -f /dev/null
EXPOSE 80 443
