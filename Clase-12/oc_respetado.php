<?php

class DocProcessor
{
        public function process( array $docs )
        {
                foreach ( $docs as $doc ) {
                        $doc->process(); 
                }
        }
}