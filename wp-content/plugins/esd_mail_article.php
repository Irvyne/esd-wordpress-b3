<?php
/*
Plugin Name: ESD Mail Everyone
Description: Send an email when an article is published!
Author: John Doe
Version: 1.0
*/

function esd_mail_article($postId)
{
    $friend = 'thibaud.bardin@gmail.com';
    mail(
        $friend,
        'A new article have been published!',
        "zzef ezfezf zef ezfzf zefe\n\n\ng ezfezf\nzefzefezfze ezf zef\n\n\n\t\tezfez fezfze fzefzef ".get_permalink($postId)
    );
}

add_action('publish_post', 'esd_mail_article');