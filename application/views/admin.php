{% include 'twig/header.twig' %}

<div class="ui grid container stackable">
    <div class="five wide column ">
        <div class="ui vertical menu fluid">
            <a class="item" data-tab="add-news">
                <i class="large browser icon"></i> Создать новость
            </a>
            <div class="ui dropdown item">
                Пользователи
                <i class="dropdown icon"></i>
                <div class="menu">
                    <a class="item" data-tab="users-ban">  <i class="large ban icon"></i> Заблокированные</a>
                    <a class="item" data-tab="users-admin">  <i class="large check circle icon"></i> Администраторы</a>

                </div>
            </div>
        </div>
    </div>
    <div class="eleven wide column">
        <div class="ui bottom attached tab active  segment" data-tab="add-news">
            <div class="ui form">
                <div class="field">
                    <label>Заголовок</label>
                    <input type="text" id="news-title">
                </div>
                <div class="field" id="news-field-text">
                    <label>Описание новости</label>
                    <textarea rows="2" id="news-text"></textarea>
                </div>
                <div class="field">
                    <label>Тип</label>
                    <select id="news-type">
                        <option value="Важно">Важно</option>
                        <option value="Обновление">Обновление</option>
                        <option value="Сообщение от администрации">Сообщение от администрации</option>
                    </select>
                </div>
                <div class="field">
                    <button class="ui button" id="news-submit">
                        Опубликовать
                    </button>
                </div>
            </div>
        </div>
        <div class="ui attached tab segment" data-tab="users-ban">
            баны
        </div>
        <div class="ui bottom attached tab segment" data-tab="users-admin">
            админы
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $("#news-submit").click(function () {
            var title = $("#news-title").val();
            var text = $("#news-text").val();
            var type = $("#news-type").val();

            if(text === "" || title === "") {

                alert("Не все заполнено!");

            } else {

                
                $.ajax({
                    url : "/news/add",
                    type: "POST",
                    dataType: "text",
                    data: { text: text, type: type, title: title },
                    success: function (data) {

                        if(data) {

                            window.location.href = "/news";

                        } else {

                            alert("Ошибка добавления");
                        }
                    },
                    error: function () {

                        alert("Не удалось отправить" + title);
                    }
                })
            }
        })
    })
</script>

{% include 'twig/footer.twig' %}