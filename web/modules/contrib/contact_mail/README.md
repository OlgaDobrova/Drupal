# Contact Mail

## Чем занимается?

При отправке контактных форм с сайта добавляет данные в шаблон письма получателей.

## Расположение

- /modules/contrib

## Машинное имя модуля

- contact_mail

## Требования к платформе

- _Drupal 9.3-10_
- _PHP 7.4.0+_

## Нужны модули

## Версии

- [Drupal.org prod версия](https://www.drupal.org/project/contact_mail)

```sh
composer require 'drupal/contact_mail'
```

- [Drupal.org dev версия](https://www.drupal.org/project/contact_mail/releases/8.x-1.x-dev)

```sh
composer require 'drupal/contact_mail:1.x-dev@dev'
```

## Как использовать?

- Выполнить настройку писем модуля в /Администрирование/Конфигурация/Система/Настройка писем модуля Contact
  - Получатели контактных форм (указанные электронные адреса будут добавлены в перечень адресов получателей для всех контактных форм сайта)
  - Переопределить шаблон письма (при выбранной опции в шаблон письма получателей будет добавлена доп. информация)
  - Посылать html вместо txt (добавляет text/html заголовок в письмо)
  - Дополнительная информация в письме (информация, которая будет добавлена во все контактные формы до передаваемых данных конкретной формы)

## Основные сервисы

## Доп сервисы

## INTRODUCTION

The Сontact Mail module provides extra settings for emails.

- For a full description of the module visit:
  https://www.drupal.org/project/contact_mail

- To submit bug reports and feature suggestions, or to track changes visit:
  https://www.drupal.org/project/issues/contact_mail

## MAINTAINERS

- Anatoly Politsin (APolitsin) - https://www.drupal.org/u/apolitsin

Supporting organization:

- Synapse-studio - https://www.drupal.org/synapse-studio
