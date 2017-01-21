<?php

    class CreateCategoriaClass extends FeatureTestCase {

        function test_create_categoria(){

            // Teniendo
            $nombre     = 'Categoria ejemplo';

            // logeamos
            $this->actingAs($user = $this->defaultUser());

            // Cuando
            $this->visit(route('categoria.create'))
                ->type($nombre, 'nombre')
                ->press('Crear')
            ;

            // Entonces
            $this->seeInDatabase('categorias', [
                'nombre'    => $nombre
            ]);

            // usuario redirigido al post
            $this->see($nombre);
        }

    }
?>
