<?php
$lang['L_DUMP_HEADLINE']="Создание резервной копии...";
$lang['L_GZIP_COMPRESSION']="Сжатие GZip ";
$lang['L_SAVING_TABLE']="Сохранение таблицы ";
$lang['L_OF']="из";
$lang['L_ACTUAL_TABLE']="Текущая таблица";
$lang['L_PROGRESS_TABLE']="Степень готовности таблицы";
$lang['L_PROGRESS_OVER_ALL']="Общая степень готовности";
$lang['L_ENTRY']="Входов";
$lang['L_DONE']="Готово!";
$lang['L_DUMP_SUCCESSFUL']=" был успешно создан.";
$lang['L_UPTO']="из";
$lang['L_EMAIL_WAS_SEND']="Сообщение было успешно отослано ";
$lang['L_BACK_TO_CONTROL']="Продолжить";
$lang['L_BACK_TO_OVERVIEW']="Обзор БД";
$lang['L_DUMP_FILENAME']="Файл резервной копии: ";
$lang['L_WITHPRAEFIX']="с префиксом";
$lang['L_DUMP_NOTABLES']="В базе данных `<b>%s</b>` таблиц не найдено ";
$lang['L_DUMP_ENDERGEBNIS']="Файл содержит <b>%s</b> таблицу(ы) и <b>%s</b> записей.<br>";
$lang['L_MAILERROR']="Отправка электронной почты не удалось!";
$lang['L_EMAILBODY_ATTACH']="Вложение содержит резервную копию вашей MySQL базы данных.<br>Резервная копия `%s`
<br><br>Следующий файл был создан:<br><br>%s <br><br>С наилучшими пожеланиями<br><br>MySQLDumper<br>";
$lang['L_EMAILBODY_MP_NOATTACH']="Резервная копия, состоящая из нескольких частей (Multipart), была создана.<br>Файлы копии не приложены к этому письму!<br>Резервная копия `%s`
<br><br>Следующий файл был создан:<br><br>%s
<br><br>С наилучшими пожеланиями<br><br>MySQLDumper<br>";
$lang['L_EMAILBODY_MP_ATTACH']="Резервная копия, состоящая из нескольких частей (Multipart), была создана.<br>Файлы резервных копий вложены в отдельные письма.<br>Резервная копия `%s`
<br><br>Следующие файлы были созданы:<br><br>%s <br><br>С наилучшими пожеланиями<br><br>MySQLDumper<br>";
$lang['L_EMAILBODY_FOOTER']="`<br><br>С наилучшими пожеланиями<br><br>MySQLDumper<br>";
$lang['L_EMAILBODY_TOOBIG']="Файл резервной копии превышает максимальный размер %s и не был приложен к этому письму.<br>Резервная копия `%s`
<br><br>Следующий файл был создан:<br><br>%s
<br><br>С наилучшими пожеланиями<br><br>MySQLDumper<br>";
$lang['L_EMAILBODY_NOATTACH']="Файлы не приложены к этому письму!<br>Резервная копия `%s`
<br><br>Следующие файлы были созданы:<br><br>%s
<br><br>С наилучшими пожеланиями<br><br>MySQLDumper<br>";
$lang['L_EMAIL_ONLY_ATTACHMENT']=" ... только вложение.";
$lang['L_TABLESELECTION']="Выбор таблицы";
$lang['L_SELECTALL']="Выбрать все";
$lang['L_DESELECTALL']="Отменить выбор всего";
$lang['L_STARTDUMP']="Старт процесса резервного копирования";
$lang['L_LASTBUFROM']="последнее обновление от";
$lang['L_NOT_SUPPORTED']="Эта резервная копия не поддерживает эту функцию";
$lang['L_MULTIDUMP']="Мультидамп: Резервное копирование базы данных <b>%d</b> завершено.";
$lang['L_FILESENDFTP']="отправка файла через FTP ... Пожалуйста, подождите. ";
$lang['L_FTPCONNERROR']="FTP-соединение не установлено! Связь с ";
$lang['L_FTPCONNERROR1']=" как пользователь ";
$lang['L_FTPCONNERROR2']=" невозможно";
$lang['L_FTPCONNERROR3']="FTP Загрузка не удалась! ";
$lang['L_FTPCONNECTED1']="Соединен с ";
$lang['L_FTPCONNECTED2']=" на ";
$lang['L_FTPCONNECTED3']=" передача закончена успешно";
$lang['L_NR_TABLES_SELECTED']="- с %s выбранными таблицами";
$lang['L_NR_TABLES_OPTIMIZED']="<span class=\"small\">%s таблиц(ы) были оптимизированы.</span>";
$lang['L_DUMP_ERRORS']="<p class=\"error\">%s ошибок обнаружено: <a href=\"log.php?r=3\">обзор</a></p>";
$lang['L_FATAL_ERROR_DUMP']="Фатальная ошибка: оператор CREATE из таблицы '%s' в базе данных '%s' не может быть прочитан!";
?>