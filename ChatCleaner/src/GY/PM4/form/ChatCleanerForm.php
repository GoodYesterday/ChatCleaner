<?php
declare(strict_types=1);

namespace GY\PM4\form;

use pocketmine\form\Form;

use pocketmine\Server;

class ChatCleanerForm implements Form 
{
   public function jsonSerialize() : array {
      return [
      "type" => "form",
      "title" => "GYo.O",
      "content" => "§l§a✔ §f채팅청소\n",
      "buttons" => [
      [
      "text" => "§l§0채팅청소\n§f채팅을 청소합니다."
            ]
         ]
    ];
    
    }
    
	public function handleResponse(Player $player, $data) : void
	{
	    if($data === null) {
		return;
		}
		if($data === 0) {
	        Server::getInstance()->broadcastMessage("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n" . "§l§7 [§f 채팅청소 §7] §f채팅청소가 완료되었습니다.");
	    }
	}
}