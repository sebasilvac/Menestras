<?php

class ShowPostTest extends FeatureTestCase
{
    function test_ver_el_detalle_del_post(){

        // teniendo

        $user = $this->defaultUser([
            'name' => 'Sebastián Silva'
        ]);

        $post = $this->createPost([
            'title'   => 'titulo post',
            'content' => 'contenido post',
            'user_id' => $user->id
        ]);

        // them
        $this->visit($post->url)
            ->seeInElement('h1', $post->title)
            ->see($post->content)
            ->see('Sebastián Silva')
        ;

    }

    function test_old_urls_are_redirected(){


        $post = $this->createPost([
            'title' => 'Old title'
        ]);

        $url = $post->url;

        $post->update([
            'title' => 'New title'
        ]);

        $this->visit($url)
            ->seePageIs($post->url);
    }

    /* # Prueba de regreción
    function test_url_con_slug_incorrecto_aun_funciona(){

        // teniendo

        $user = $this->defaultUser([
            'name' => 'Sebastián Silva'
        ]);

        $post = factory(\App\Post::class)->make([
            'title'   => 'Old title'
        ]);

        $user->posts()->save($post);

        $url = $post->url;

        $post->update([
            'title' => 'New title'
        ]);

        $this->visit($url)
            ->assertResponseOk()
            ->see('New title');

    }
    */
}
