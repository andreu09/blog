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
            </div>
        </div>
        {% endfor %}
    </div>
</div>
{% endif %}

{% include 'twig/footer.twig' %}