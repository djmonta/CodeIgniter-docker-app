wget https://github.com/wkhtmltopdf/wkhtmltopdf/releases/download/0.12.5/wkhtmltox-0.12.5-1.centos7.x86_64.rpm \
  && yum install -y --disablerepo=blackfire libXext.x86_64 libXrender xorg-x11-fonts-75dpi xorg-x11-fonts-Type1 ipa-gothic-fonts ipa-mincho-fonts ipa-pgothic-fonts ipa-pmincho-fonts \
  && rpm -ivh wkhtmltox-0.12.5-1.centos7.x86_64.rpm \
  && rm -f wkhtmltox-0.12.5-1.centos7.x86_64.rpm

cd /var/www/html/ && cp assets/fonts/notoserifjp/NotoSerifJP-Light.otf /usr/share/fonts/ \
  && cp assets/fonts/notoserifjp/NotoSerifJP-SemiBold.otf /usr/share/fonts/ \
  && fc-cache -fv

wget https://github.com/mailhog/mhsendmail/releases/download/v0.2.0/mhsendmail_linux_amd64 \
  && chmod +x mhsendmail_linux_amd64 \
  && mv mhsendmail_linux_amd64 /usr/local/bin/mhsendmail
