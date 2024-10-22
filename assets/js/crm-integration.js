document.addEventListener('wpcf7mailsent', function (event) {
    // console.log('API URL:', crmSettings.apiUrl);
    // console.log('API Key:', crmSettings.apiKey);

    // Получаем данные из формы
    var inputs = event.detail.inputs;

    // Создаем объект данных
    var data = {};
    inputs.forEach(function (input) {
        data[input.name] = input.value;
    });

    // Отправляем данные в CRM через универсальную функцию
    sendLeadToCRM([
        data['contact-name'] || '',            // Имя клиента
        data['contact-company'] || '',         // Компания
        data['contact-email'] || '',           // Email
        data['contact-phone'] || '',           // Телефон
        data['business-position'] || '',       // Должность
        data['business-industry'] || '',       // Индустрия
        data['business-message'] || '',        // Сообщение
        data['people'] || '',                  // Люди
        data['how'] || '',                     // Как узнали
        data['crm-message'] || '',             // Сообщение CRM
        data['use'] || '',                     // Использование
        data['now-message'] || '',             // Сообщение "сейчас"
        data['problem-message'] || '',         // Сообщение о проблеме
        data['like-message'] || '',            // Что нравится
        data['dislike-message'] || '',         // Что не нравится
        data['checkbox-9'] || '',              // Чекбокс 9
        data['functions-message'] || '',       // Сообщение о функциях
        data['checkbox-10'] || '',             // Чекбокс 10
        data['tools-message'] || '',           // Сообщение о инструментах
        data['checkbox-11'] || '',             // Чекбокс 11
        data['important-message'] || '',       // Важное сообщение
        data['radio-12'] || '',                // Радио кнопка 12
        data['report-text'] || '',             // Текст отчета
        data['additional-message'] || '',      // Дополнительное сообщение
        data['radio-14'] || '',                // Радио кнопка 14
        data['radio-15'] || '',                // Радио кнопка 15
        data['integrate-message'] || '',       // Сообщение об интеграции
        data['feedback-name'] || '',           // Имя клиента (feedback)
        data['feedback-company'] || '',        // Компания (feedback)
        data['feedback-email'] || '',          // Email (feedback)
        data['feedback-phone'] || '',          // Телефон (feedback)
        data['feedback-message'] || '',        // Сообщение (feedback)
        data['subscribe-email'] || ''          // Email подписки
    ], null);

}, false);

function sendLeadToCRM(data, lastRow) {
    // URL API CRM
    var apiUrl = crmSettings.apiUrl;

    // Собираем данные для запроса
    let payload = {
        "title": data[2],                    // Используем email для названия
        "description": data[6] || data[34],  // Описание — либо business-message, либо feedback-message
        "practice_id": 31,
        "status_id": 1,
        "deadline": "",
        "personal": 0,
        "client_name": data[0] || data[29],  // Имя клиента (contact-name или feedback-name)
        "client_phone": data[3] || data[31], // Телефон (contact-phone или feedback-phone)
    };

    // Указываем API ключ
    var apiKey = crmSettings.apiKey;


    let options = {
        "method": "POST",
        "headers": {
            "Authorization": "Bearer " + apiKey,
            "Content-Type": "application/json"
        },
        "body": JSON.stringify(payload),
    };

    // Отправляем запрос через Fetch API
    fetch(apiUrl, options)
        .then(response => response.json())
        .then(data => {
            console.log('Ответ от CRM:', data);
        })
        .catch((error) => {
            console.error('Ошибка:', error);
        });
}
