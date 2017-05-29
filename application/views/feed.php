{% include 'twig/header.twig' %}

{%  if posts.count == 0 %}

<div class="ui two column centered grid stackable">
    <div class="eight wide column">
        <div class="ui icon message">
            <i class="photo icon"></i>
            <div class="content">
                <div class="header">
                    Станьте первым, кто опубликует первую запись!
                </div>
                <p>
                    <button class="teal ui button" onclick="$('#modal-post').modal('show')">
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

        {% for i in 0..posts.current_count - 1 %}

        <div class="ui card fluid">
            <div class="content">
                <div class="right floated meta">{{ posts.post[i].time }}</div>
                <img class="ui avatar image" src="{{ posts.user[i].photo_50 }}"> {{ posts.user[i].first_name }} {{ posts.user[i].last_name }}
            </div>
            <div class="image event">
                <img src="{{ posts.post[i].image }}" style="max-height: 450px; background-size: cover;">
                <div class="ui inverted  dimmer">
                    <div class="content">
                        <div class="center">

                            {% if  posts.user[i].uid == user.uid %}

                            <div onclick="del( {{ posts.post[i].id }} )" class="ui red small button">
                                <i class="remove icon"></i> Удалить запись
                            </div>

                            {% else %}

                            <div class="ui orange small button"><i class="warning sign icon"></i>Пожаловаться</div>

                            {% endif %}

                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <span class="left floated">
                    <img src="{{ posts.post[i].smile }}">
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

<script src="{{ base_url }}assets/js/posts.js"></script>

{% include 'twig/footer.twig' %}