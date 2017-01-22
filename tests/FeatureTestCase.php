<?php

    use Illuminate\Foundation\Testing\DatabaseTransactions;

    class FeatureTestCase extends TestCase {

        use DatabaseTransactions;

        function test_index(){
            return true;
        }

        public function seeErrors(array $fields){

            foreach ($fields as $name => $errors) {
                foreach ((array)$errors as $message) {
                    $this->seeInElement(
                        "#field_{$name}.has-error .help-block",
                        $message
                    );
                }
            }

        }

    }
?>
