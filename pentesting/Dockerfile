FROM httpd:2.4.49-alpine

COPY assets /usr/local/apache2/htdocs/assets
COPY index.html /usr/local/apache2/htdocs/
COPY WORDLIST.txt /usr/local/apache2/htdocs/WORDLIST.txt
COPY flag.txt /etc
COPY clue.txt /fileadmin

RUN sed -i 's/Require all denied/# Require all denied/g' /usr/local/apache2/conf/httpd.conf

CMD ["httpd-foreground"]
