<?php

    class CreatePostClass extends FeatureTestCase {

        function test_creacion_post_usuario_logeado(){

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

        function test_creacion_post_usuario_anonimo(){

            // Cuando
            $this->visit(route('posts.create'))
                ->seePageIs(route('login'));

        }

        function test_validacion_de_creacion(){

            $this->actingAs($this->defaultUser());

            $this->visit(route('posts.create'))
                ->press('Publicar')
                ->seePageIs(route('posts.create'))
                ->seeErrors([
                    'title'     => 'El campo título es obligatorio',
                    'content'   => 'El campo contenido es obligatorio'
                ]);
        }

    }
?>
