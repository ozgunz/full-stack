## Bu repo ne için?

Bu proje iş görüşmem için, ayrıca Larvel, Vue, Vuex (full stack web development) ortamı için örnek projedir.

## Gereksinimler

- MySQL 5.7+
- PHP 7.3+
- NodeJS
- Composer

## Proje'nin Local Ortama Kurulması

1) `git clone git@github.com:ozgunz/full-stack.git`
2) .env.example dosyası -> .env olarak isimlendirilir ve MySQL bilgileri girilir.
3) `composer install`
4) `npm install`
5) `php artisan key:generate`
6) Laravel Migration ve Seeder komutları kullanılmadan SQL ilgili database'e import edilebilir.


## Laravel Migrate & Seed 
`php artisan migrate` 
(~/database/migrations/2020_08_08_183456_create_messages_table.php)

`php artisan db:seed`
 (~/database/seeds/DatabaseSeeder.php)

## Frontend & Vue
`~/resources/js/app.js` kısmında Vue ile ilgili yapılandırmalar ve Component'ler incelenebilir.

## Ekran görüntüleri

![Image of Yaktocat](https://i.hizliresim.com/STMbys.png)

![Image of Yaktocat](https://i.hizliresim.com/LmGwHY.png)

![Image of Yaktocat](https://i.hizliresim.com/3oLuRI.png)
