<?php

class DocProcessor
{
        public function process( array $docs )
        {
                foreach ( $docs as $doc ) {
                        if ( $doc instanceof Invoice ) {
                                $doc->sendToClient();
                        } elseif ( $doc instanceof Receipt ) {
                                $doc->archive();
                        } elseif ( $doc instanceof Memo ) {
                                $doc->markAsRead();
                        }
                }
        }
}
