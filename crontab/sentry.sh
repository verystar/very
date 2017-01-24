#!/bin/sh

SHELL_PATH=$(cd `dirname $0`; pwd)

#每分钟执行一次
#logcheck中的logtail2用于增量读取日志，flock用于防止定时任务堆积。
#*/1 * * * * /usr/bin/flock -xn /tmp/pay_sentry.lock /bin/sh /home/wwwroot/api.pay.verystar.cn/crontab/sentry.sh >/dev/null 2>&1

#上报log到sentry
cd `dirname ${SHELL_PATH}`/logs/

logfile="log-$(date +%Y-%m-%d).log"

if [ -f "$logfile" ]; then
/usr/sbin/logtail2 $logfile | /usr/local/php/bin/php ${SHELL_PATH}/../artisan crontab:sentry
#tail $logfile | /usr/local/php/bin/php ${SHELL_PATH}/../artisan crontab:sentry
fi

#每天删除7天前的日志offset文件
hm=$(date +%H:%M)
if [ -d `dirname ${SHELL_PATH}` ] && [ "$hm"x = '00:01'x ]; then
    find `dirname ${SHELL_PATH}` -mtime +5 -type f -name "*.offset" | xargs rm -rf
fi