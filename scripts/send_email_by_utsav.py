# LANGUAGE: Python
# ENV: Python 3.6
# AUTHOR: Utsav Patel
# GITHUB: https://github.com/utsavpatel51


import smtplib
from weather_html import html_report
from weather import get_data
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText

def send_email():
    weather_data,icon_url=get_data('KLAX')
    file_test="test_email.html"
    html_report(weather_data,icon_url,file_test)
    msg=MIMEMultipart('alternative')
    with open(file_test,mode='rb') as fopen:
        msg=MIMEText(fopen.read(),'html','html')
    msg['Subject']="Hourly data"
    msg['From']="xyz@gmail.com"
    msg['TO']="testwork612@gmail.com"

    server=smtplib.SMTP('smtp.gmail.com',587)
    server.ehlo()
    server.starttls()
    server.ehlo()
    server.login('testwork612@gmail.com','test@5111998')
    server.send_message(msg)
    server.close()

if __name__ == '__main__':
    send_email()
    print('mail send sucessfully.....')
    