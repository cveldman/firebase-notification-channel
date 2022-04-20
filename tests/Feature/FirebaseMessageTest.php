<?php

namespace Veldman\Firebase\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Veldman\Firebase\FirebaseMessage;

class FirebaseMessageTest extends TestCase
{
    public function test_that_true_is_true()
    {
        $message = (new FirebaseMessage)
            ->title('title')
            ->body('body');


        $this->assertTrue(true);
    }
}