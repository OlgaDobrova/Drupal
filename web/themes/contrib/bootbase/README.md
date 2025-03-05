# Bootstrap Base Theme

### Чем занимается? ###
> Предоставляет тему для CMS Drupal (шаблоны, стили) на основе css фреймворка Bootstrap v5.

## Требования к платформе

- _Drupal 9-11_
- _PHP 7.4.0+_

## Нужны модули

основан на теме [_classy_](https://www.drupal.org/project/classy)

## Версии

- [Drupal.org prod версия](https://www.drupal.org/project/bootbase)

```sh
composer require 'drupal/bootbase'
```

- [git.lab dev версия](https://git.synapse-studio.ru/d-org/bootbase)


# Не обновлять bootstrap5, пока не вытащите оттуда файлик /mixins/_breakpoints.scss, он от четвертой версии там стоит

```sh
cd ~/html/themes/contrib/bootbase
npm install
gulp bower
gulp update
gulp
```
