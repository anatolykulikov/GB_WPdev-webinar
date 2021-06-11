// Проверяем, что наша форма существует
if(document.getElementById('sendingForm')) {
    
    // Ссылку на форму сохраняем в константу
    const form = document.getElementById('sendingForm');
    const path = form.action;

    // Кнопка отправки нашей формы
    const button = document.getElementById('sendingFormButton');

    // Элемент, где будет выводится результат работы
    const result = document.getElementById('sendingFormResult');
    
    // Обработчик, который сработает при отправке формы
    form.addEventListener('submit', (e) => {
        
        // Отключаем перезагрузку страницы (по-умолчанию форма так делает)
        e.preventDefault();

        // Блокируем кнопку
        button.disabled = true;

        // Сообщаем пользователю, что заявка отправляется
        result.innerHTML = 'Заявка отправляется';
        
        // Отправляем данные на свой сервер
        fetch(path, {
            method: 'POST',
            body: new FormData(form)
        })
        // Полученный ответ мы прочитаем как текст
        .then((response) => {
            return response.json();
        })
        // Выведем в консоль ответ от сервера
        .then((json) => {
            return result.innerText = json.message;
        })
        // В конце разблокируем кнопку
        .finally(() => {
            button.disabled = false;
        })
    })
}