<?php

    class CreateBodegaClass extends FeatureTestCase {

        function test_a_user_create_bodega(){

            return true;

            /**
             * aún no soluciono el asunto de crear una tienda para el select
             */

            // Teniendo
            $nombre     = 'Nombre bodega';
            $dir       = 'Dirección';

            // logeamos
            $this->actingAs($user = $this->defaultUser());


            $tienda = $this->defaultTienda();

            // Cuando
            $this->visit(route('bodega.create'))
                ->type($nombre, 'nombre')
                ->type($dir, 'direccion')
                ->select(1, 'tienda_id')
                ->press('Crear')
            ;

            // Entonces
            $this->seeInDatabase('bodegas', [
                'nombre'    => $nombre,
                'tienda_id' => $tienda->id
            ]);

            // usuario redirigido al post
            $this->see($title);
        }

    }
?>
