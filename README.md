# Api Symony

API made with symfony and Api Plateform.

## What you have to do

Create a .env.local file and add your database url

In your terminal 

`composer install`

`php bin/console doctrine:migrations:migrate`

`php bin/console doctrine:fixtures:load`

`mkdir config/jwt`

You have to generate a private key

`openssl genrsa -out config/jwt/private.pem -aes256 4096`

You have to generate a public key

`openssl rsa -pubout -in config/jwt/private.pem -out config/jwt/public.pem`

In your .env.local file you have to add

`JWT_SECRET_KEY=%kernel.project_dir%/config/jwt/private.pem`

`JWT_PUBLIC_KEY=%kernel.project_dir%/config/jwt/public.pem`

`JWT_PASSPHRASE=here your passphrase`

## Documentation

go to https://localhost:8000/api to see the documentation
