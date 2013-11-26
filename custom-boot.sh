echo "Include /app/www/httpd.conf" >> /app/apache/conf/httpd.conf
for var in `env|cut -f1 -d=`; do
  echo "PassEnv $var" >> /app/apache/conf/httpd.conf;
done
export PHP_INI_SCAN_DIR=/app/www
exec /app/apache/bin/httpd -DNO_DETACH
