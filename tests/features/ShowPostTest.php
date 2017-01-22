<?php

class ShowPostTest extends FeatureTestCase
{
    function test_ver_el_detalle_del_post(){

        // teniendo

        $user = $this->defaultUser([
            'name' => 'Sebastián Silva'
        ]);

        $post = factory(\App\Post::class)->make([
            'title'   => 'titulo post',
            'content' => 'contenido post'
        ]);

        $user->posts()->save($post);

        $this->visit(route('posts.show', $post))
            ->seeInElement('h1', $post->title)
            ->see($post->content)
            ->see($user->name)
        ;

    }
}
