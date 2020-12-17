# sendportal-smtp
Adding SMTP Services

Everything required already exists in the sendportal-core. However, I am asking myself if it was not implemented for  other reasons ...

![Add services interface](sendportal.png)

**How to**

1. Insert service type "SMTP" in database with the id "6"

mysql> select * from email_service_types;     

id | name     | created_at          | updated_at        
---|---|---|---
1 | SES      | 2020-11-26 17:48:54 | 2020-11-26 17:48:54
2 | SendGrid | 2020-11-26 17:48:54 | 2020-11-26 17:48:54 
3 | Mailgun  | 2020-11-26 17:48:54 | 2020-11-26 17:48:54 
4 | Postmark | 2020-11-26 17:48:54 | 2020-11-26 17:48:54 
5 | Mailjet  | 2020-11-26 17:48:55 | 2020-11-26 17:48:55 
6 | Smtp     | 2020-11-26 17:48:55 | 2020-11-26 17:48:55 

2. Copy files into the sendportal-core

Files | Destination paths
------| -------
smtp.blade.php | resources/views/email_services/options/
SmtpMailAdapter.php | src/Adapters
MailAdapterFactory.php | src/Factories
MessagesController.php | src/Http/Controllers
EmailServiceRequest.php | src/Http/Requests
EmailServiceType.php | src/Models
MarkAsSent.php | src/Services/Messages/
QuotaService.php | src/Services


Limitations
==
Tracking purposes are not implemented as not compliant with my personal ideology but feel free to add it if you want...

