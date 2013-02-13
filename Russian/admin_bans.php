<?php

// Language definitions used in admin_bans.php
$lang_admin_bans = array(

'No user message'			=>	'Нет пользователя с таким именем. Если хотите заблокировать без привязки к имени, оставьте имя пользователя пустым.',
'No user ID message'		=>	'Нет зарегистрированного пользователя с указанным ID.',
'User is admin message'		=>	'Пользователь %s является администратором, его нельзя заблокировать. Если вы хотите заблокировать его, то сначала сменили группу на более низкую, например, обычного пользователя.',
'User is mod message'		=>	'Пользователь %s является модератором, его нельзя заблокировать. Если вы хотите заблокировать его, то сначала сменили группу на более низкую, например, обычного пользователя.',
'Must enter message'		=>	'Вы должны указать какую-нибудь информацию: имя пользователя, IP-адрес или же email-адрес.',
'Cannot ban guest message'	=>	'Пользователя из гостевой группы нельзя заблокировать.',
'Invalid IP message'		=>	'Вы указали неверный IP адрес или IP-диапазон адресов.',
'Invalid e-mail message'	=>	'Email (т.е. user@domain.com) или доменная часть (т.е. domain.com) указаны неверно.',
'Invalid date message'		=>	'Вы ввели неправильную дату окончания.',
'Invalid date reasons'		=>	'Дата должна быть указана в формате ГГГГ-ММ-ДД и истекать не ранее завтрашнего числа',
'Ban added redirect'		=>	'Блокировка добавлена. Идет перенаправление …' ,
'Ban edited redirect'		=>	'Блокировка отредактирована. Идет перенаправление …',
'Ban removed redirect'		=>	'Блокировка удалена. Идет перенаправление …',

'New ban head'				=>	'Новая блокировка',
'Add ban subhead'			=>	'Добавление блокировки',
'Username label'			=>	'Имя пользователя',
'Username help'				=>	'Имя блокируемого пользователя (регистр букв неважен).',
'Username advanced help'	=>	'Имя блокируемого пользователя (регистр букв неважен). На следующей странице можно будет указать произвольный IP и email. Если хотите забанить IP/IP-диапазон или email просто оставьте поле пустым.',

'Ban search head'			=>	'Поиск блокировки',
'Ban search subhead'		=>	'Задайте условия поиска',
'Ban search info'			=>	'Поиск блокировок в базе данных. Вы можете указать одно или несколько значений для поиска. Допускается вводить символ звездочки (*). Для вывода списка всех блокировок оставьте поля пустыми.',
'Date help'					=>	'(гггг-мм-дд)',
'Message label'				=>	'Причина',
'Expire after label'		=>	'Истекает после',
'Expire before label'		=>	'Истекает до',
'Order by label'			=>	'Сортировать по',
'Order by username'			=>	'Имени пользователя',
'Order by ip'				=>	'IP',
'Order by e-mail'			=>	'Email',
'Order by expire'			=>	'Дате истечения',
'Ascending'					=>	'По возрастанию',
'Descending'				=>	'По убыванию',
'Submit search'				=>	'Отправить запрос',

'E-mail label'				=>	'Email',
'E-mail help'				=>	'Укажите email-адрес или email-домен для блокировки (например, someone@somewhere.com или somewhere.com). Для получения большей информации смотрите опцию «Разрешить использовать заблокированные email», на странице «Дополнительные права».',
'IP label'					=>	'IP адрес/IP-подсеть',
'IP help'					=>	'Укажите IP-адрес или диапазон блокируемых адресов (например, 150.11.110.1 или 150.11.110). В качестве разделителя вводимых адресов используйте пробел. Если поле IP уже заполнено, то это последний известный адрес, взятый из базы данных форума.',
'IP help link'				=>	'Кликните %s, чтобы просмотреть статистику IP пользователя.',
'Ban advanced head'			=>	'Расширенные настройки блокировки',
'Ban advanced subhead'		=>	'Добавление блокировки IP или email',
'Ban message label'			=>	'Причина блокировки',
'Ban message help'			=>	'Сообщение, которое увидит заблокированный пользователь, войдя на форум.',
'Message expiry subhead'	=>	'Причина и дата истечения блокировки',
'Ban IP range info'			=>	'Будьте осторожны во время блокировки диапазона IP-адресов, под запрет могут попасть несколько пользователей, использующих для подключения одну подсеть.',
'Expire date label'			=>	'Дата истечения',
'Expire date help'			=>	'Дата, когда блокировка будет автоматически снята (формат ввода: гггг-мм-дд). Оставьте поле пустым для личного контроля.',

'Results head'				=>	'Результаты поиска',
'Results username head'		=>	'Имя пользователя',
'Results e-mail head'		=>	'Email',
'Results IP address head'	=>	'IP/IP-диапазон',
'Results expire head'		=>	'Истекает',
'Results message head'		=>	'Причина',
'Results banned by head'	=>	'Заблокировал',
'Results actions head'		=>	'Действия',
'No match'					=>	'Нет результатов',
'Unknown'					=>	'Неизвестно',

);
