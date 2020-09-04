# ORM - Iseseisev töö

1. **Tegin  Ubuntu 20.04.1 Data reset**

2. **Ubuntus jooksutasin üles seadistamiseks sellised commandid:**

        sudo apt update
        sudo apt upgrade
        sudo apt install php

3. **Kontrollisin PHP versiooni commandiga "php -v" ja sain teada, et oman php 7.4.9 versiooni.**

4. **Kontrollisin "php -m" commandiga millised laiendused on olemas ja milliseid pean installima**

5. **Laiendite nimekiri mis pean installima, milline oli olemas ja millise intallisin + käsu rida:**
  
        PHP >= 7.2.5                OLEMAS  
        BCMath PHP Extension        sudo apt install php7.4-bcmath  
        Ctype PHP Extension         OLEMAS  
        Fileinfo PHP extension      OLEMAS  
        JSON PHP Extension          OLEMAS  
        Mbstring PHP Extension      sudo apt-get install php7.4-mbstring    
        OpenSSL PHP Extension       OLEMAS  
        PDO PHP Extension           OLEMAS  
        Tokenizer PHP Extension     OLEMAS  
        XML PHP Extension           sudo apt-get install php-xml  

    ***!Installisin ka "sudo apt install php-zip", sest composeri jaoks oli seda vaja.***

6. **Composer ja laravel installimine:**

        sudo apt install composer
        composer -v
        composer global require laravel/installer

        Loon koha projekti jaoks                composer create-project --prefer-dist laravel/laravel blog
        cd käsuga saan minna projekti kausta    cd blog/
        Selle käsuga saan avada visual studio   code .
        Käivitan serveri                        php artisan serve




Kasutatud allikad 
    [Ask Ubuntu](https://askubuntu.com/)
    [Stack overflow](https://stackoverflow.com/)
    [Github docs](https://docs.github.com/en/github/writing-on-github/basic-writing-and-formatting-syntax)
