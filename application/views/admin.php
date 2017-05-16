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
                    <a class="item" onclick="$('#admin-users').modal('show');">  <i class="large check circle icon"></i> Администраторы</a>

                </div>
            </div>
        </div>
    </div>
    <div class="eleven wide column">
        <div class="ui bottom attached tab active segment" data-tab="add-news">
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
        <div class="ui top attached tab segment" data-tab="users-ban">
            баны
        </div>

        <div class="ui fullscreen modal" id="admin-users">
            <i class="close icon"></i>
            <div class="header">
                Администраторы:
            </div>
            <div class="content">
                <div class="ui four column grid">
                    <div class="row">
                        {% for i in 0..admins.count - 1 %}
                        <div class="column">
                            <div class="ui fluid  card">
                                <div class="image">
                                    <img src="{{ admins.user[i].photo_200 }}">
                                </div>
                                <div class="content">
                                    <a class="header">{{ admins.user[i].first_name }} {{ admins.user[i].last_name }}</a>
                                </div>
                                <div class="extra content">
                                    <div class="ui two buttons">
                                        <a target="_blank" href="/admin/action/delete/{{  admins.user[i].uid }}">
                                            <div class="ui basic yellow button">
                                                Снять с должности
                                            </div>
                                        </a>>
                                        <div class="ui basic red button">Заблокировать доступ</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
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