<?php

namespace Patterns\FactoryMethod2;

class Index
{
    /**
     * @throws \JsonException
     */
    public function start(): void
    {
        $data = [
            'name' => "Walter",
            'age' => 30,
            'location' => 'Springfield',
        ];

        $json = new JSON();
        $serializer = new Serializer($json);
        echo $jsonString = $serializer->serialize($data);

        echo '<br>';

        $xml = new XML();
        $serializer = new Serializer($xml);
        echo htmlentities($serializer->serialize($data));

        echo '<br>';

        $yaml = new YAML();
        echo 'Format: ' . $yaml->getName(). '<br>';
        $serializer = new Serializer($yaml);
        echo nl2br($serializer->serialize($data));

        echo '<br>';

        if($yaml instanceof FromStringInterface && method_exists($yaml, 'convertFromString')) {
            echo $yaml->convertFromString('');
        }

        if(method_exists($json, 'convertFromString')) {
           echo print_r($json->convertFromString($jsonString), true);
        }
    }
}