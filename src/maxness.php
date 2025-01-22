<?php 

namespace Mypackage\Chatbot;

class Maxness
{
    public function askQuestion($question)
    {
        return $question."<br/>I don't have any idea. Please ask me again";
    }
}