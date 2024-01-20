<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Описание

База для web-сайта на Laravel 10.3

Подключен Телеграм бот

Подключен TailWind

## Установка

```bash
# Установка пакетов PHP
$ composer install

# Установка пакетов JS
$ npm install

# Скомпилировать JS и CSS ресурсы для VITE
$ npm run build

# Копирование шаблона для env настроек проекта 
$ cp .env.example .env
```

## Настройка уведомлений

```bash
# Открываем файл .env

# Задаем имя дефолтного бота ( обязательно )
# Имя должно соответствовать одному из конфигов в файлу config/telegram.php => array bots
TELEGRAM_DEFAULT_BOT=xxxxx

# Указываем Chat ID Вашего бота ( обязательно )
TELEGRAM_CHAT_ID=xxxxx

# Указываем токен работы с ботом ( обязательно )
TELEGRAM_BOT_TOKEN=xxxxx

# Указываем путь к сертификатам ( опционально )
TELEGRAM_CERTIFICATE_PATH=xxxxx

# Указываем URL вэбхука ( опционально )
TELEGRAM_WEBHOOK_URL=xxxxx
```

## Запуск приложения

```bash
# В режиме разработки
$ php artisan serve
```
