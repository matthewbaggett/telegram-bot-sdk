<?php

namespace Telegram\Bot\Objects;

/**
 * Class File
 *
 * @package Telegram\Bot\Objects
 *
 * @method int      getId()         Unique identifier for this user or bot.
 * @method string   getFirstName()  User's or bot's first name.
 * @method string   getLastName()   (Optional). User's or bot's last name.
 * @method string   getUsername()   (Optional). User's or bot's username.
 */
class File extends BaseObject
{
    /**
     * @inheritdoc
     */
    public function relations()
    {
        return [];
    }

    public function getUrl()
    {
        global $telegramApiKey;
        return "https://api.telegram.org/file/bot{$telegramApiKey}/{$this->get('file_path')}";
    }
}
