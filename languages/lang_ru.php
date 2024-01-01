<?php
#Application name: PhpCollab
#Status page: 2
#Path by root: ../languages/lang_ru.php

//translator(s): Andreu 'Doc' Ponomarev, Pavlov Nick

$byteUnits = array('Байт', 'Kб', 'Mб', 'Гб');

$dayNameArray = array(
    1 => "Понедельник",
    2 => "Вторник",
    3 => "Среда",
    4 => "Четверг",
    5 => "Пятница",
    6 => "Суббота",
    7 => "Воскресенье"
);

$monthNameArray = array(
    1 => "Январь",
    "Февраль",
    "Март",
    "Апрель",
    "Май",
    "Июнь",
    "Июль",
    "Август",
    "Сентябрь",
    "Октябрь",
    "Ноябрь",
    "Декабрь"
);

$status = array(0 => "Завершен", 1 => "Готов", 2 => "Не начат", 3 => "Открыт", 4 => "Приторможен");

$profil = array(
    0 => "Администратор",
    1 => "Менеджер проекта",
    2 => "Пользователь",
    3 => "Клиент",
    4 => "Отключен",
    5 => "Менеджер-администратор"
);

$priority = array(0 => "Нет", 1 => "Ждет долго", 2 => "Ждет", 3 => "Средне", 4 => "Быстро", 5 => "Очень быстро");

$statusTopic = array(0 => "Закрыт", 1 => "Открыт");
$statusTopicBis = array(0 => "Нет", 1 => "Да");

$statusPublish = array(0 => "Да", 1 => "Нет");

$statusFile = array(
    0 => "Подтвержден",
    1 => "Подтвержден с изменениями",
    2 => "Требует подтверждения",
    3 => "Не требует подтверждения",
    4 => "Не подтвержден"
);

$phaseStatus = array(0 => "Не начат", 1 => "Открыт", 2 => "Завершен", 3 => "Приторможен");

$requestStatus = array(0 => "Новый", 1 => "Открытый", 2 => "Завершенный");

$strings["please_login"] = "Вход в директории";
$strings["requirements"] = "Требования к браузеру";
$strings["login"] = "Вход";
$strings["no_items"] = "Нет данных";
$strings["logout"] = "Выход";
$strings["preferences"] = "Свойства";
$strings["my_tasks"] = "Мои задачи";
$strings["edit_task"] = "Правка задачи";
$strings["copy_task"] = "Копировать задачу";
$strings["add_task"] = "Добавить задачу";
$strings["delete_tasks"] = "Удалить задачу";
$strings["assignment_history"] = "История подтверждений";
$strings["assigned_on"] = "Подтверждено ";
$strings["assigned_by"] = "Создана";
$strings["to"] = "Для";
$strings["comment"] = "Комментарий";
$strings["task_assigned"] = "Задача подписана ";
$strings["task_unassigned"] = "Задача не нуждается в подписи";
$strings["edit_multiple_tasks"] = "Правка нескольких задач";
$strings["tasks_selected"] = "задача выбрана. Выберите новое значение, или выберите [Без изменений].";
$strings["assignment_comment"] = "Комментарии подтверждения";
$strings["no_change"] = "[Без изменений]";
$strings["my_discussions"] = "Мои форумы";
$strings["discussions"] = "Форумы";
$strings["delete_discussions"] = "Удалить форум";
$strings["delete_discussions_note"] = "Внимание: Удаление безвозвратное!.";
$strings["topic"] = "Заголовок";
$strings["posts"] = "Сообщение";
$strings["latest_post"] = "Последние";
$strings["my_reports"] = "Мои отчеты";
$strings["reports"] = "Отчеты";
$strings["create_report"] = "Создать отчет";
$strings["report_intro"] = "Выберите параметры отчета Вашей задачи и сохраните для дальнейшего использования.";
$strings["admin_intro"] = "Конфигурация и настройка проекта.";
$strings["copy_of"] = "Копировать из ";
$strings["add"] = "Добавить";
$strings["delete"] = "Удалить";
$strings["remove"] = "Переместить";
$strings["copy"] = "Копировать";
$strings["view"] = "Просмотр";
$strings["edit"] = "Правка";
$strings["update"] = "Обновить";
$strings["details"] = "Детали";
$strings["none"] = "Нет";
$strings["close"] = "Закрыть";
$strings["new"] = "Новый";
$strings["select_all"] = "Выделить всё";
$strings["unassigned"] = "Не подписан";
$strings["administrator"] = "Администратор";
$strings["my_projects"] = "Мои проекты";
$strings["project"] = "Проект";
$strings["active"] = "Активен";
$strings["inactive"] = "Не активен";
$strings["project_id"] = "ID проекта";
$strings["edit_project"] = "Изменить проект";
$strings["copy_project"] = "Копировать проект";
$strings["add_project"] = "Добавить проект";
$strings["clients"] = "Клиенты";
$strings["organization"] = "Фирма клиента";
$strings["client_projects"] = "Проекты клиента";
$strings["client_users"] = "Пользователи проекта";
$strings["edit_organization"] = "Изменить фирму клиента";
$strings["add_organization"] = "Добавить фирму клиента";
$strings["organizations"] = "Фирма";
$strings["info"] = "Информация о проекте";
$strings["status"] = "Статус";
$strings["owner"] = "Владелец";
$strings["home"] = "Домой";
$strings["projects"] = "Проекты";
$strings["files"] = "Файлы";
$strings["search"] = "Поиск";
$strings["admin"] = "Админ";
$strings["user"] = "Пользователь";
$strings["project_manager"] = "Менеджер проекта";
$strings["due"] = "Завершен";
$strings["task"] = "Задача";
$strings["tasks"] = "Задачи";
$strings["team"] = "Группа участников";
$strings["add_team"] = "Добавить участников";
$strings["team_members"] = "Участники темы";
$strings["full_name"] = "Полное имя";
$strings["title"] = "Отображать как";
$strings["user_name"] = "Имя для входа";
$strings["work_phone"] = "Рабочий телефон";
$strings["priority"] = "Приоритет";
$strings["name"] = "Имя";
$strings["description"] = "Описание";
$strings["phone"] = "Телефон";
$strings["address"] = "Адрес";
$strings["comments"] = "Комментарии";
$strings["created"] = "Создан";
$strings["assigned"] = "Подписан";
$strings["modified"] = "Изменен";
$strings["assigned_to"] = "Подписан для";
$strings["due_date"] = "Завершение";
$strings["estimated_time"] = "Время выполнения";
$strings["actual_time"] = "Актуально по времени";
$strings["delete_following"] = "Удалить это?";
$strings["cancel"] = "Отмена";
$strings["and"] = "и";
$strings["administration"] = "Администрирование";
$strings["user_management"] = "Управление пользователями";
$strings["system_information"] = "Системная информация";
$strings["product_information"] = "Информация о продукте";
$strings["system_properties"] = "Свойства системы";
$strings["create"] = "Создать";
$strings["report_save"] = "Сохранить для дальнейшего использования.";
$strings["report_name"] = "Имя отчета";
$strings["save"] = "Сохранить";
$strings["matches"] = "Совпадения";
$strings["match"] = "Совпадение";
$strings["report_results"] = "Результаты отчета";
$strings["success"] = "Успешно";
$strings["addition_succeeded"] = "Добавление сделано";
$strings["deletion_succeeded"] = "Удаление сделано";
$strings["report_created"] = "Созданные отчеты";
$strings["deleted_reports"] = "Удаленные отчеты";
$strings["modification_succeeded"] = "Изменение сделано";
$strings["errors"] = "Есть ошибки!";
$strings["blank_user"] = "Нет такого пользователя.";
$strings["blank_organization"] = "Не могу найти организацию клиента.";
$strings["blank_project"] = "Не могу найти проект.";
$strings["user_profile"] = "Профиль пользователя";
$strings["change_password"] = "Смена пароля";
$strings["change_password_user"] = "Изменить пароль.";
$strings["old_password_error"] = "Старый пароль неверный, попробуйте ещё раз.";
$strings["new_password_error"] = "Пароль и его подтверждение не совпадают, попробуйте ещё раз.";
$strings["notifications"] = "Уведомления";
$strings["change_password_intro"] = "Введите старый пароль, затем новый и его подтверждение.";
$strings["old_password"] = "Старый пароль";
$strings["password"] = "Пароль";
$strings["new_password"] = "Новый пароль";
$strings["confirm_password"] = "Подтверждение";
$strings["home_phone"] = "Домашний";
$strings["mobile_phone"] = "Мобильный";
$strings["fax"] = "Факс";
$strings["permissions"] = "Права";
$strings["administrator_permissions"] = "Права администратора";
$strings["project_manager_permissions"] = "Права менеджера проекта";
$strings["user_permissions"] = "Права пользователя";
$strings["account_created"] = "Аккаунт создан";
$strings["edit_user"] = "Правка пользователя";
$strings["edit_user_details"] = "Правка аккаунта.";
$strings["change_user_password"] = "Изменить пароль.";
$strings["select_permissions"] = "Выбрать права для этого пользователя";
$strings["add_user"] = "Добавить пользователя";
$strings["enter_user_details"] = "Добавить детали для созданного аккаунта.";
$strings["enter_password"] = "Введите пароль.";
$strings["success_logout"] = "Вы вышли из директорий. Для входа введите имя и пароль в форме входа.";
$strings["illimited_licenses"] = "Неограниченная пользовательская лицензия";
$strings["invalid_login"] = "Имя и/или пароль неправильные,  наберите правильное имя и/или пароль.";
$strings["licenses_used"] = "Использованно неограниченных лицензий";
$strings["profile"] = "Профиль";
$strings["user_details"] = "Свойства аккаунта.";
$strings["edit_user_account"] = "Изменение аккаунта.";
$strings["no_permissions"] = "Вы не имеете доступа к этим свойствам";
$strings["discussion"] = "Форум";
$strings["retired"] = "Получено";
$strings["last_post"] = "Последнее";
$strings["post_reply"] = "Написать ответ";
$strings["posted_by"] = "Отправил";
$strings["when"] = "Когда";
$strings["post_to_discussion"] = "Написать";
$strings["message"] = "Сообщение";
$strings["delete_reports"] = "Удалить отчет";
$strings["delete_projects"] = "Удалить проект";
$strings["delete_organizations"] = "Удалить организацию клиента";
$strings["delete_organizations_note"] = "Внимание: Это удалит всех пользователей клиента этой организации, и удалит ссылки всех открытых проектов от этих клиентов.";
$strings["delete_messages"] = "Удалить сообщение";
$strings["attention"] = "Внимание";
$strings["delete_teamownermix"] = "Удаление прошло успешно, но владелец проекта не может быть удален из группы проекта.";
$strings["delete_teamowner"] = "Владелец проекта не может быть удален из группы проекта.";
$strings["enter_keywords"] = "Введите одно или несколько ключевых слов";
$strings["search_options"] = "Поиск по проектам";
$strings["search_note"] = "Чтобы найти что-либо Вы должны ввести в поле поиска что Вы ищите.";
$strings["search_results"] = "Результаты поиска";
$strings["users"] = "Пользователи";
$strings["search_for"] = "Искать по ";
$strings["results_for_keywords"] = "Результаты поиска по слову";
$strings["add_discussion"] = "Добавить форум";
$strings["delete_users"] = "Удалить пользователя";
$strings["reassignment_user"] = "Перевод проектов и заданий";
$strings["there"] = "Это ";
$strings["owned_by"] = " принадлежит указанным пользователям.";
$strings["reassign_to"] = "Перед удалением пользователей, повторно назначите их на";
$strings["no_files"] = "Нет связанных полей";
$strings["published"] = "Опубликовано";
$strings["project_site"] = "Сайт проекта";
$strings["approval_tracking"] = "Текущий статус";
$strings["size"] = "Размер";
$strings["add_project_site"] = "Добавить на сайт проекта";
$strings["remove_project_site"] = "Удалить с сайта проекта";
$strings["more_search"] = "Расширенный поиск";
$strings["results_with"] = "Найти в результатах";
$strings["search_topics"] = "Поиск, заголовки";
$strings["search_properties"] = "Поиск, свойства";
$strings["date_restrictions"] = "Ограничить по дате";
$strings["case_sensitive"] = "Без учета регистра";
$strings["yes"] = "Да";
$strings["no"] = "Нет";
$strings["sort_by"] = "Сортировать по";
$strings["type"] = "Тип";
$strings["date"] = "Дата";
$strings["all_words"] = "все слова";
$strings["any_words"] = "любое из слов";
$strings["exact_match"] = "точное совпадение";
$strings["all_dates"] = "Все даты";
$strings["between_dates"] = "между датами";
$strings["all_content"] = "Все содержимое";
$strings["all_properties"] = "Все свойства";
$strings["no_results_search"] = "Поиск не дал результатов.";
$strings["no_results_report"] = "Отчет не дал результатов.";
$strings["schema_date"] = "год/мес/день";
$strings["hours"] = "часов";
$strings["choice"] = "Выбор";
$strings["missing_file"] = "Отсутствует файл !";
$strings["project_site_deleted"] = "Сайт проекта удален.";
$strings["add_user_project_site"] = "Пользователю разрешен просмотр сайта проекта.";
$strings["remove_user_project_site"] = "Удалены разрешения для пользователя.";
$strings["add_project_site_success"] = "Успешно добавлен на сайт проекта.";
$strings["remove_project_site_success"] = "Успешно удален с сайта проекта.";
$strings["add_file_success"] = "В проект добавлен файл.";
$strings["delete_file_success"] = "Удален файл из проекта.";
$strings["update_comment_file"] = "Измененён комментарий к файлу.";
$strings["session_false"] = "Ошибка авторизации";
$strings["logs"] = "Лог - файлы";
$strings["logout_time"] = "Автоматический выход";
$strings["noti_foot1"] = "Уведомление сгенерированно.";
$strings["noti_foot2"] = "Для посещения Вашего сайта зайдите:";
$strings["noti_taskassignment1"] = "Новое задание:";
$strings["noti_taskassignment2"] = "Вам направлено задание:";
$strings["noti_moreinfo"] = "Для большей информации, посетите:";
$strings["noti_prioritytaskchange1"] = "Изменен приоритет задачи:";
$strings["noti_prioritytaskchange2"] = "Приоритет выбранных задач изменен:";
$strings["noti_statustaskchange1"] = "Изменен статус задачи:";
$strings["noti_statustaskchange2"] = "Статус выбранных задач изменен:";
$strings["login_username"] = "Необходимо ввести имя.";
$strings["login_password"] = "Введите пароль.";
$strings["login_clientuser"] = "Это имя и пароль только для просмотра на сайте проекта. Вы не имеете доступа к рабочим файлам.";
$strings["user_already_exists"] = "Уже есть пользователь с этим именем. Выберите себе другое имя.";
$strings["noti_duedatetaskchange1"] = "Время окончания изменено:";
$strings["noti_duedatetaskchange2"] = "Дата окончания выбранных работ изменена:";
$strings["company"] = "Фирма";
$strings["show_all"] = "Посмотреть все";
$strings["information"] = "Информация";
$strings["delete_message"] = "Удалить это сообщение";
$strings["project_team"] = "Группа проекта";
$strings["document_list"] = "Список документов";
$strings["bulletin_board"] = "Доска обявлений";
$strings["bulletin_board_topic"] = "Темы объявлений";
$strings["create_topic"] = "Создать новую тему";
$strings["topic_form"] = "Форма темы";
$strings["enter_message"] = "Введите Ваше сообщение";
$strings["upload_file"] = "Передать файл";
$strings["upload_form"] = "Форма передачи файла";
$strings["upload"] = "Передать";
$strings["document"] = "Документ";
$strings["approval_comments"] = "Комментарии подтверждения";
$strings["client_tasks"] = "Задачи клиента";
$strings["team_tasks"] = "Задачи темы";
$strings["team_member_details"] = "Об участниках проекта";
$strings["client_task_details"] = "Детали задачи клиента";
$strings["team_task_details"] = "Делели задачи темы";
$strings["language"] = "Интерфейс";
$strings["welcome"] = "Приветствуем ";
$strings["your_projectsite"] = "на Вашем сайте проекта";
$strings["contact_projectsite"] = "По всем вопросам и информации, представленной на данном сайте просьба обращаться к менедженру проекта";
$strings["company_details"] = "Информация о компании";
$strings["database"] = "Сохранение и восстановление базы данных";
$strings["company_info"] = "Править информацию о компании";
$strings["create_projectsite"] = "Создать сайт проекта";
$strings["projectsite_url"] = "URL проекта";
$strings["design_template"] = "Образец дизайна";
$strings["preview_design_template"] = "Предпросмотр дизайна";
$strings["delete_projectsite"] = "Удалить сайт проекта";
$strings["add_file"] = "Добавить файл";
$strings["linked_content"] = "Добавленные файлы";
$strings["edit_file"] = "Изменить описание";
$strings["permitted_client"] = "Разрешен доступ для пользователей клиентов";
$strings["grant_client"] = "Добавить разрешения на просмотр сайта проекта";
$strings["add_client_user"] = "Добавить пользователя клиента";
$strings["edit_client_user"] = "Изменить пользователя клиента";
$strings["client_user"] = "Пользователи клиента";
$strings["client_change_status"] = "Измените Ваш статус после выполнения этого задания";
$strings["project_status"] = "Статус проекта";
$strings["view_projectsite"] = "Посмотреть сайт проекта";
$strings["enter_login"] = "Введите имя для получения пароля по почте";
$strings["send"] = "Прислать";
$strings["no_login"] = "Такого пользователя нет в базе";
$strings["email_pwd"] = "Пароль отправлен";
$strings["no_email"] = "У него нет почтового адреса";
$strings["forgot_pwd"] = "Забыл пароль ?";
$strings["project_owner"] = "Вы можете изменять только проект, принадлежащий вам.";
$strings["connected"] = "В онлайне";
$strings["session"] = "Сессия";
$strings["last_visit"] = "Последний визит";
$strings["compteur"] = "Количество";
$strings["task_owner"] = "Вы не участник этого проекта";
$strings["export"] = "Экспорт";
$strings["reassignment_clientuser"] = "Переподтвердить задачу";
$strings["organization_already_exists"] = "Такое имя уже есть в системе. Выберите другое.";
$strings["blank_organization_field"] = "Введите название организации клиента.";
$strings["blank_fields"] = "mandatory fiels";
$strings["projectsite_login_fails"] = "Не возможно подтвердить логин и пароль пользователя.";
$strings["start_date"] = "Начало";
$strings["completion"] = "Завершение";
$strings["update_available"] = "Загрузите обновление!";
$strings["version_current"] = "Сейчас установлена версия";
$strings["version_latest"] = "Последняя версия";
$strings["sourceforge_link"] = "Посмотрите сайт проекта на Sourceforge";
$strings["demo_mode"] = "Демонстрационный режим. Действия на сохраняются.";
$strings["setup_erase"] = "Удалите файл  setup.php!";
$strings["no_file"] = "Нет выбранных файлов";
$strings["exceed_size"] = "Превышен допустимый размер файла";
$strings["no_php"] = "Файлы с расширением php не разрешены";
$strings["approval_date"] = "Дата подтверждения";
$strings["approver"] = "Подтвержден";
$strings["error_database"] = "Не могу соединиться с базой данных";
$strings["error_server"] = "Не могу соединиться с сервером";
$strings["version_control"] = "Контроль версий";
$strings["vc_status"] = "Статус";
$strings["vc_last_in"] = "Последнее изменение";
$strings["ifa_comments"] = "Комментарии подтверждения";
$strings["ifa_command"] = "Изменить статус подтверждения";
$strings["vc_version"] = "Версия";
$strings["ifc_revisions"] = "Обзоры";
$strings["ifc_revision_of"] = "Обзор версий";
$strings["ifc_add_revision"] = "Добавить для обзора";
$strings["ifc_update_file"] = "Обновить файл";
$strings["ifc_last_date"] = "Последнее обновление";
$strings["ifc_version_history"] = "История версий";
$strings["ifc_delete_file"] = "Удалить файл и все его версии и обзоры";
$strings["ifc_delete_version"] = "Удалить выбранную версию";
$strings["ifc_delete_review"] = "Удалить выбранный обзор";
$strings["ifc_no_revisions"] = "Нет ревизий этого документа";
$strings["unlink_files"] = "Удалить файлы";
$strings["remove_team"] = "Удаление участника проекта";
$strings["remove_team_info"] = "Удалить этого участника из группы проекта?";
$strings["remove_team_client"] = "Удалить право просмотра сайта проекта";
$strings["note"] = "Заметка";
$strings["notes"] = "Заметки";
$strings["subject"] = "Тема";
$strings["delete_note"] = "Удалить заметку";
$strings["add_note"] = "Добавить заметку";
$strings["edit_note"] = "Правка заметки";
$strings["version_increm"] = "Выберите версию для внесения изменений:";
$strings["url_dev"] = "Сайт разработчиков";
$strings["url_prod"] = "Окончательный сайт";
$strings["note_owner"] = "Вы можете вносить изменения только в свои заметки.";
$strings["alpha_only"] = "Только буквенные значения в имени входа";
$strings["edit_notifications"] = "Правка E-mail уведомления";
$strings["edit_notifications_info"] = "Выберите события, по которым Вы желаете получать уведомления на E-mail.";
$strings["select_deselect"] = "Поставить/Снять на все";
$strings["noti_addprojectteam1"] = "Добавлен в группу проекта :";
$strings["noti_addprojectteam2"] = "Вы добавлены в группу проекта :";
$strings["noti_removeprojectteam1"] = "Удален из группы проекта :";
$strings["noti_removeprojectteam2"] = "Вы удалены из группы проекта :";
$strings["noti_newpost1"] = "Новые сообщения :";
$strings["noti_newpost2"] = "Сообщение добавлено в текущую дискуссию :";
$strings["edit_noti_taskassignment"] = "Я подтверждаю новое задание.";
$strings["edit_noti_statustaskchange"] = "Статус моего задания изменен.";
$strings["edit_noti_prioritytaskchange"] = "Приоритет моего задания изменен.";
$strings["edit_noti_duedatetaskchange"] = "Даты моего задания изменены.";
$strings["edit_noti_addprojectteam"] = "Я добавлен в группу проекта.";
$strings["edit_noti_removeprojectteam"] = "Я удален из группы проекта.";
$strings["edit_noti_newpost"] = "Новое письмо добавлено в дисскусию.";
$strings["add_optional"] = "Добавить опцион";
$strings["assignment_comment_info"] = "Добавить комментарий о подтверждении этой задачи";
$strings["my_notes"] = "Мои заметки";
$strings["edit_settings"] = "Правка свойств";
$strings["max_upload"] = "Максимальный размер файла";
$strings["project_folder_size"] = "Размер папки проекта";
$strings["calendar"] = "Календарь";
$strings["date_start"] = "Дата начала";
$strings["date_end"] = "Дата окончания";
$strings["time_start"] = "Время начала";
$strings["time_end"] = "Время окончания";
$strings["calendar_reminder"] = "Напоминание";
$strings["shortname"] = "Короткое имя";
$strings["calendar_recurring"] = "Событие повторяется каждую неделю в этот день";
$strings["edit_database"] = "Изменить базу данных";
$strings["noti_newtopic1"] = "Новое обсуждение :";
$strings["noti_newtopic2"] = "Новая дискуссия добавлена в проект :";
$strings["edit_noti_newtopic"] = "Новая теме обсуждения добавлена.";
$strings["today"] = "Сегодня";
$strings["previous"] = "Месяц назад";
$strings["next"] = "Месяц вперед";
$strings["help"] = "Помощь";
$strings["complete_date"] = "Полная дата";
$strings["scope_creep"] = "Ошибки по времени";
$strings["days"] = "Дней";
$strings["logo"] = "Логотип";

$strings["remember_password"] = "Запомнить пароль";
$strings["client_add_task_note"] = "Внимание: введенная задача регистрируется в базе, но появляется здесь только если она назначена кому-то из проекта!";
$strings["noti_clientaddtask1"] = "Задача добавлена для клиента :";
$strings["noti_clientaddtask2"] = "Новая задача была добавлена клиентом для следующего проекта :";
$strings["phase"] = "Фаза";
$strings["phases"] = "Фазы";
$strings["phase_id"] = "ID фазы";
$strings["current_phase"] = "Активные фаза(ы)";
$strings["total_tasks"] = "Всего задач";
$strings["uncomplete_tasks"] = "Незаконченные задачи";
$strings["no_current_phase"] = "Нет активной фазы";
$strings["true"] = "Правда";
$strings["false"] = "Неправда";
$strings["enable_phases"] = "Включить фазы";
$strings["phase_enabled"] = "Фазы включены";
$strings["order"] = "Покупатель";
$strings["options"] = "Опции";
$strings["support"] = "Поддержка";
$strings["support_request"] = "Требует ответа";
$strings["support_requests"] = "Требуют ответа";
$strings["support_id"] = "Номер";
$strings["my_support_request"] = "Требуют ответа";
$strings["introduction"] = "Введение";
$strings["submit"] = "Отправить";
$strings["support_management"] = "Управление службой поддержки";
$strings["date_open"] = "Дата начала";
$strings["date_close"] = "Дата закрытия";
$strings["add_support_request"] = "Добавить запрос в поддержку";
$strings["add_support_response"] = "Добавить ответ в поддержку";
$strings["respond"] = "Ответ";
$strings["delete_support_request"] = "Запрос поддержки удален";
$strings["delete_request"] = "Удалить запрос о поддержке";
$strings["delete_support_post"] = "Удалить письмо поддержки";
$strings["new_requests"] = "Новый запрос";
$strings["open_requests"] = "Открыть запрос";
$strings["closed_requests"] = "Завершенные запросы";
$strings["manage_new_requests"] = "Управление новыми запросами";
$strings["manage_open_requests"] = "Управление открытыми запросами";
$strings["manage_closed_requests"] = "Управление завершеными запросами";
$strings["responses"] = "Ответы";
$strings["edit_status"] = "Правка статуса";
$strings["noti_support_request_new2"] = "Есть неотвеченный запрос по поддержке: ";
$strings["noti_support_post2"] = "Новый запрос по поддержке ждет ответа. Пожалуйста рассмотрите детали.";
$strings["noti_support_status2"] = "Ваш запрос по поддержке изменен. Пожалуйста рассмотрите детали.";
$strings["noti_support_team_new2"] = "Новый запрос поддержки был добавлен в проект: ";
//2.0
$strings["add_subtask"] = "Добавить подзадачу";
$strings["edit_subtask"] = "Правка подзадачи";
$strings["subtask"] = "Подзадача";
$strings["subtasks"] = "Подзадачи";
$strings["show_details"] = "Посмотреть детали";
$strings["updates_task"] = "История обновления задач";
$strings["updates_subtask"] = "История обновления подзадач";
//2.1
$strings["go_projects_site"] = "На сайт проекта";
$strings["bookmark"] = "Закладка";
$strings["bookmarks"] = "Закладки";
$strings["bookmark_category"] = "Категория";
$strings["bookmark_category_new"] = "Новая категория";
$strings["bookmarks_all"] = "Все";
$strings["bookmarks_my"] = "Мои закладки";
$strings["my"] = "Мои";
$strings["bookmarks_private"] = "Личные";
$strings["shared"] = "Общие";
$strings["private"] = "Личные";
$strings["add_bookmark"] = "Добавить закладку";
$strings["edit_bookmark"] = "Правка закладки";
$strings["delete_bookmarks"] = "Удалить закладки";
$strings["team_subtask_details"] = "Подробно подзадачи группы";
$strings["client_subtask_details"] = "Подробно подзадачи клиента";
$strings["client_change_status_subtask"] = "Измените Ваш статус после того, как Вы закончили эту подзадачу";
$strings["disabled_permissions"] = "Отключенный аккаунт";
$strings["user_timezone"] = "Часовой пояс (GMT)";
//2.2
$strings["project_manager_administrator_permissions"] = "Менеджер-администратор";
$strings["bug"] = "Отслеживание ошибок";
//2.3
$strings["report"] = "Отчет";
$strings["license"] = "Лицензия";
//2.4
$strings["settings_notwritable"] = "Settings.php не доступен для записи";
//2.5
$strings["invoicing"] = "Выставление счёта";
$strings["invoice"] = "Счёт";
$strings["invoices"] = "Счета";
$strings["date_invoice"] = "Дата счёта";
$strings["header_note"] = "Заголовок";
$strings["footer_note"] = "Добавлено";
$strings["total_ex_tax"] = "Всего без налогов";
$strings["total_inc_tax"] = "Всего с налогами";
$strings["tax_rate"] = "Ставка налога";
$strings["tax_amount"] = "Сумма налогов";
$strings["invoice_items"] = "Пункт счёта";
$strings["amount_ex_tax"] = "Сумма без налога";
$strings["completed"] = "Завершено";
$strings["service"] = "Сервис";
$strings["edit_invoice"] = "Правка счёта";
$strings["edit_invoiceitem"] = "Правка пункта счёта";
$strings["calculation"] = "Подсчёт";
$strings["items"] = "Пункт";
$strings["position"] = "Позиция";
$strings["service_management"] = "Управление сервисами";
$strings["hourly_rate"] = "Стоимость часа";
$strings["add_service"] = "Добавить сервис";
$strings["edit_service"] = "Правка сервиса";
$strings["delete_services"] = "Удалить сервис";
$strings["worked_hours"] = "Затрачено часов";
$strings["rate_type"] = "Тип показателя";
$strings["rate_value"] = "Величина показателя";
$strings["note_invoice_items_notcompleted"] = "Не все пункты завершены";

$rateType = array(0 => "По выбранному", 1 => "По проекту", 2 => "По организации", 3 => "По сервисам");

//HACKS

$strings["newsdesk"] = "Новости";
$strings["newsdesk_list"] = "Список новостей";
$strings["article_newsdesk"] = "Сообщение";
$strings["update_newsdesk"] = "Обновить";
$strings["my_newsdesk"] = "Мои новости";
$strings["edit_newsdesk"] = "Правка статьи";
$strings["copy_newsdesk"] = "Копировать статью";
$strings["add_newsdesk"] = "Добавить статью";
$strings["del_newsdesk"] = "Удалить статью";
$strings["delete_news_note"] = "Примечание: Это также удалит все комментарии для текущей статьи новостей";
$strings["author"] = "Автор";
$strings["blank_newsdesk_title"] = "Пустой заголовок";
$strings["blank_newsdesk"] = "Пустая новость.";
$strings["blank_newsdesk_comment"] = "Пустой комментарий";
$strings["remove_newsdesk"] = "Статья успешно удалена со всеми комментариями";
$strings["add_newsdesk_comment"] = "Добавить комментарий";
$strings["edit_newsdesk_comment"] = "Править комментарий";
$strings["del_newsdesk_comment"] = "Удалить комментарий/ии";
$strings["remove_newsdesk_comment"] = "Комментарий успешно удалён";
$strings["errorpermission_newsdesk_comment"] = "Non hai abbastanza permessi per modificare o cancellare questo messaggio";

$strings["noti_memberactivation1"] = "Аккаунт активирован";
$strings["noti_memberactivation2"] = "Вы только что добавлены в систему управления клиента phpCollab.  Эта система разработана и непрерывно модернизироваться для того, чтобы помогать Вам, как клиенту, быть в курсе Вашего проекта.\n\nДля входа в систему, откройте браузер (предподтительно Internet Explorer 6.x или Netscape 7.x) и введите следующее:";
$strings["noti_memberactivation3"] = "имя:";
$strings["noti_memberactivation4"] = "пароль:";
$strings["noti_memberactivation5"] = "Как только Вы набрали вышеуказанную информацию и нажали \"Enter\", Вы получите доступ к Вашему сайту проекта. \n\nТак же Вы будете получать дополнительные сообщения относительно активизации, подчинения задачи, и других событиях, которые имеют отношение к Вашему счету.  Эти сообщения будут держать Вас в курсе прогресса Вашего проекта.";

//BEGIN email project users mod
$strings["email_users"] = "Пользователям";
$strings["email_following"] = "Следующее";
$strings["email_sent"] = "Ваше сообщение отправлено.";
//END email project users mod

$strings["clients_connected"] = "(Клиентов на сайте проекта)";

// Add off custom_en.php
$topicNote = array(1 => "Разговор по телефону", 2 => "Обсуждение", 3 => "Важное");
$phaseArraySets = array(
    #Define the names of your phase sets
    "sets" => array(1 => "Website", 2 => "CD"),
    #List the indervitual items within each phase set.
    #Website Set
    "1" => array(0 => "Планирование", 1 => "Дизайн", 2 => "Производство", 3 => "Тестирование", 4 => "Выход"),
    #CD Set
    "2" => array(0 => "Планирование", 1 => "Дизайн", 2 => "Выпуск", 3 => "Тестирование")
);
//end add
