<?php

    class CreatePostClass extends FeatureTestCase {

        function test_a_user_create_post(){

            // Teniendo
            $title     = 'Esta es una pregunta';
            $content   = 'Este es el contenido';

            $this->actingAs($user = $this->defaultUser());

            // Cuando
            $this->visit(route('posts.create'))
                ->type($title, 'title')
                ->type($content, 'content')
                ->press('Publicar')
            ;

            // Entonces
            $this->seeInDatabase('posts', [
                'title'     => $title,
                'content'   => $content,
                'pending'   => true,
                'user_id'   => $user->id
            ]);

            // usuario redirigido al post
            $this->see($title);
        }

    }
?>
