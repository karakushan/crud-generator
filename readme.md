# Crud Generator
Библиотека для фреймворка Laravel

Данная библиотека поможет сгенерировать CRUD с помощью командной строки, что поможет сэкономить время затраченное на рутинную работу.
##Установка

Установите с помощью командной строки:

``composer require karakushan/crud-generator``

##Создание контроллера
Выполните команду:

``php artisan crud:controller FaqCategory``

После выполнения команды будет создан контроллер FaqCategoryController в директории app/Http/Controllers/. 
Модель FaqCategory будет импортирована автоматически. 

Если Вы хотите импортировать другую модель, то выполните следующее:

``php artisan crud:controller FaqCategory --model=ModelName``

Чтобы указать базовый путь к папке с шаблонами используйте команду:

``php artisan crud:controller FaqCategory --dir=faq-category-dir``




