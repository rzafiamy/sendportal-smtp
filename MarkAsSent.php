<?php

namespace Sendportal\Base\Services\Messages;

use Sendportal\Base\Models\Message;

class MarkAsSent
{
    /**
     * Save the external message_id to the messages table
     */
    public function handle(Message $message, string $messageId): Message
    {
    	   
        	$message->message_id = $messageId;
			
			if(intval($message->message_id )  >= 0 ){      	
        		$message->sent_at = now();
        	}
        	else{
        		$message->bounced_at = now();
        	}
        
        	return tap($message)->save();
    }
}
