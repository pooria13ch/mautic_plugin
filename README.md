سلام وقت بخیر
 
بعداز وارد کردن دستور 
                                                                                                                                                                                          docker compose up -d 
فولدر MyPluginBundle داخل فولدر plugins قرار دهیم و ادرس localhost:8080 را در مرورگر باز میکنیم و مراحل نصب و ثبت نام پنل mautic را انجام میدهیم
و سپس دستورات زیر را به ترتیب وارد میکنیم
docker exec -it mautic_app php /var/www/html/bin/console doctrine:schema:update --force
docker exec -it mautic_app php /var/www/html/bin/console cache:clear
docker exec -it mautic_app php /var/www/html/bin/console mautic:plugins:reload
و در اخر پلاگین در قسمت پلاگین های پنل ادمین mautic اضافه میشود
متاسفانه به دلیل نبودن اینترنت درست حسابی نتونستم ایمیج های داکر رو دانلود کنم و به سختی تونستم پروژه رو برسونم در نبود اینترنت حتی وصل شدن به گیت هاب هم برام راحت نبود به همین دلیل اگر نواقصی وجود دارد معذرت میخواهم 
ممنونم
