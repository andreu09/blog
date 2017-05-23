{% include 'twig/header.twig' %}

{%  if posts.post.current_count == 0 %}
<div class="ui two column centered grid stackable">
    <div class="eight wide column">
        <div class="ui icon message">
            <i class="photo icon"></i>
            <div class="content">
                <div class="header">
                    Станьте первым, кто опубликует первую запись!
                </div>
                <p>
                    <button class="teal ui button" onclick="$('#modal-post').modal('show')";>
                        <i class="add circle icon"></i>
                        Создать запись
                    </button>
                </p>
            </div>
        </div>
    </div>
</div>

{% else %}
<div class="ui two column centered grid stackable">
    <div class="eight wide column">
        {% for i in 0..posts.post.current_count - 1 %}
        <div class="ui card fluid">
            <div class="content">
                <div class="right floated meta">{{ posts.post[i].time }}</div>
                <img class="ui avatar image" src="{{ posts.user[i][0].photo_50 }}">
                {{ posts.user[i][0].first_name }} {{ posts.user[i][0].last_name }}
            </div>
            <div class="image">
                <img src="{{ base_url }}assets/images/posts/{{ posts.post[i].image }}">
            </div>
            <div class="content">
                <span class="left floated">
                    <img src="{{ base_url }}assets/images/smiles/{{ posts.post[i].smile }}.png">
                </span>
                {% set uid_likes =  posts.post[i].uid_likes|split(',') %}
                <span class="right floated" onclick="like( {{ posts.post[i].id }} )">
                   <i id="icon_{{ posts.post[i].id }}" class="heart {% for g in 0..posts.post[i].likes %} {% if uid_likes[g] == user.uid %} red {% endif %} {% endfor %} like icon"></i>
                    <span id="{{ posts.post[i].id }}">{{ posts.post[i].likes }}</span>
                </span>
            </div>
        </div>
        {% endfor %}
    </div>
</div>
{% endif %}

<script>

    function like(post_id) {

        $.ajax({

            url: "/post/like",
            data: { post_id : post_id },
            dataType: "json",
            type: "POST",
            success: function (post) {

                $("#" + post_id).html(post.likes);
                // В зависимости от действия добавляем или убираем закрашивание иконки лайка
                post.action == "delete" ?  $("#icon_" + post_id).removeClass("red") :  $("#icon_" + post_id).addClass("red");
            },
            beforeSend: function () {

                // Пока грузиться анимируем
                $("#icon_" + post_id)
                    .transition('jiggle')
                ;
            }
        })
    }
</script>

{% include 'twig/footer.twig' %}