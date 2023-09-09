#!/bin/sh

if [ -r "/lib/lsb/init-functions" ]; then
        . /lib/lsb/init-functions
else
        log_success_msg() {
                echo "$@"
        }
        log_warning_msg() {
                echo "$@" >&2
        }
        log_failure_msg() {
                echo "$@" >&2
        }
fi

source /usr/lib/frr/frrcommon.sh

# Update suricata rules
suricata-update

# Start cron
crond

# Add cronjob
crontab /etc/crontabs/suricata-update-cron

# Started suricata
/usr/bin/suricata -c /etc/suricata/suricata.yaml -v && /usr/lib/frr/watchfrr $(daemon_list)

