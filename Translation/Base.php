<?php


function t($key)
{
    return translationList()[$key];
}

function translationList()
{
    return [
        'userSkills' => 'მომხმარებლის უნარები',
        'homeIndex' => 'საწყისი გვერდი',
        'usersPage' => 'მომხმარებლები',
        'home' => 'პროდუქცია',
        'addProduct' => 'პროდუქციის დამატება',
        'edit' => 'პროდუქციის რედაქტირება',
        'profile' => 'პროფილი',
        'addSkills' => 'უნარების დამატება',
        'editSkills' => 'უნარების რედაქტირება',
        'permision' => 'უფლებები',
        'addPermision' => 'უფლებების დამატება',
        'editPermision' => 'უფლებების რედაქტირება',
        'news' => 'სიახლეები',
        'addNews' => 'სიახლეების დამატება',
        'editNews' => 'სიახლეების რედაქტირება',
        'category' => 'სიახლეების კატეგორია',
        'addNewCategory' => 'კატეგორიების დამატება',
        'editNewCategory' => 'კატეგორიების რედაქტირება'
    ];
}