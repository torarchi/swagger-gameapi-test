# test application 
swagger без jwt-авторизации для простоты в проверке

Ссылка на демо видео
!
https://www.youtube.com/watch?v=XtE9HGdgrrk&ab_channel=archie

## Установка и запуск

Пошаговый процесс установки и запуска проекта.

Шаг 1: Клонирование репозитория
```
git clone https://github.com/toarda/ozimiz-test.git
```
Шаг 2: Перейдите в каталог проекта
```
cd Ваш репозиторий
```
Шаг 3: Установите зависимости
```
composer install
```
Шаг 4: Создайте файл окружения
```
cp .env.example .env
```
Шаг 5: Сгенерируйте ключ приложения
```
php artisan key:generate
```
Шаг 6: Настройте базу данных

Измените настройки базы данных в файле .env

Шаг 7: Выполните миграции с сидерами
```
php artisan migrate --seed
```
Шаг 8: Запустите веб-сервер
```
php artisan serve
```

