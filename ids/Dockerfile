FROM frrouting/frr:v8.4.0

RUN apk add suricata python3 py-pip --no-cache

RUN pip install suricata-update

COPY suricata-update.sh /etc/suricata/suricata-update.sh
COPY suricata-update-cron /etc/crontabs/suricata-update-cron
COPY suricata.yaml /etc/suricata/suricata.yaml
COPY docker-entrypoint.sh /tmp/suricata-docker-entrypoint.sh

RUN chmod +x /etc/crontabs/suricata-update-cron
RUN chmod +x /tmp/suricata-docker-entrypoint.sh

CMD [ "/sbin/tini", "--", "/tmp/suricata-docker-entrypoint.sh" ]

