{% include 'twig/header.twig' %}

<div class="ui grid container">
    <div class="four wide column">
        <div class="ui card">
            <div class="image">
                <img src="{{ user.photo_200 }}">
            </div>
            <div class="content">
                <a class="header">{{ user.first_name }} {{ user.last_name }}</a>
            </div>
            <div class="extra content">
                <button onclick="$('#modal-post').modal('show');" class="ui fluid primary basic button">Создать запись</button>
            </div>
        </div>
    </div>
    <div class="twelve wide column">
        <div class="ui segment">

            <h4 class="ui center aligned icon header">
                Ваши публикации
            </h4>

            <div class="ui grid centered">

                {% if posts.count != 0 %}

                {% for i in 0..posts.count - 1 %}

                <div class="six wide column">
                    <div class="ui card">
                        <div class="image">
                            <img src="{{ posts[i].image }}">
                        </div>
                        <div class="content">
                            <a onclick="del( {{ posts[i].id }} )" class="ui fluid inverted red button">Удалить запись</a>
                        </div>
                    </div>
                </div>

                {% endfor %}

                {% else %}

                <div class="twelve wide column">
                    <div class="ui icon message">
                        <i class="alarm icon"></i>
                        <div class="content">
                            <div class="header">
                                Здесь пусто...
                            </div>
                            <p>Создайте свою первую запись!</p>
                        </div>
                    </div>
                </div>

                {% endif %}

            </div>
        </div>
    </div>
</div>

<script src="{{ base_url }}assets/js/posts.js"></script>

{% include 'twig/Modal_post.twig' %}

{% include 'twig/footer.twig' %}