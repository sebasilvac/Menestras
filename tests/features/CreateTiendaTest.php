<?php

    class CreateTiendaClass extends FeatureTestCase {

        function test_create_tienda(){

            // Teniendo
            $nombre     = 'Tienda ejemplo';

            // logeamos
            $this->actingAs($user = $this->defaultUser());

            // Cuando
            $this->visit(route('tienda.create'))
                ->type($nombre, 'nombre')
                ->press('Crear')
            ;

            // Entonces
            $this->seeInDatabase('tiendas', [
                'nombre'    => $nombre,
                'user_id' => $user->id
            ]);

            // usuario redirigido al post
            $this->see($nombre);
        }

    }
?>
